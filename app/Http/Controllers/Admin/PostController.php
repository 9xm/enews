<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

use App\Models\Post;
use App\Models\Category;


class PostController extends Controller{
    public function __construct(){
        $categories=Category::orderBy("position", "asc")->get();
        View::share('categories', $categories);
    }
    
    public function index(){
        if(Auth::user()->role == 'admin'):
            $posts=Post::orderBy("updated_at", "desc")->paginate(5);
            return view('admin.post.index', ['posts'=>$posts]);
        endif;


        if(Auth::user()->role == 'editor'):
            $posts=Post::where('user_id', Auth::user()->id)->orderBy("updated_at", "desc")->paginate(5);
            return view('admin.post.index', ['posts'=>$posts]);
        endif;
        

    }
    public function create(){
        $data=[];
        return view('admin.post.create', $data);
    }

    public function store(Request $request){

        $request['slug']=Str::slug($request->slug_title, "-");

        $request->validate([
            'alert_title' => 'required',
            'title' => 'required',
            'slug_title' => 'required',
            'slug'    =>  'unique:posts,slug',
            'content' => 'required',
            'status' => 'required',
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);


        $post=new Post;
        $post->alert_title=$request->alert_title;
        $post->title=$request->title;
        $post->slug_title=$request->slug_title;
        $post->slug=Str::slug($request->slug_title, "-");
        $post->content=$request->content;
        $post->status=$request->status;
        $post->category_id=$request->category_id;
        $post->user_id=Auth::user()->id;

        $hasImage=$this->imageUpload($request);
        if($hasImage){
            $post->image=$hasImage;
        }
        
        $post->save();

        return redirect()->route('admin.posts.edit', ['post'=>$post->id]);
    }
    public function show(string $id){
        return redirect()->route('admin.posts.index');
    }
    public function edit(string $id){
        $post= Post::where('id',$id)->first(); 

        if(Auth::user()->role == 'editor'):
            $post= Post::where(['id'=>$id, 'user_id'=>Auth::user()->id])->first();
        endif;    

        if($post){
            return view('admin.post.edit', ['post'=>$post]);
        }
        return redirect()->route('admin.posts.index');
    }
    public function update(Request $request, string $id){

        $post= Post::find($id);
        
        $request['slug']=Str::slug($request->slug_title, "-");

        if($post->slug == $request['slug']){
            $request->validate([
                'alert_title' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]);
        }else{
            $request->validate([
                'alert_title' => 'required',
                'title' => 'required',
                'slug_title' => 'required',
                'slug'    =>  'unique:posts,slug',
                'content' => 'required',
            ]);
            $post->slug_title=$request->slug_title;
            $post->slug=$request['slug'];
        }


       
        $post->alert_title=$request->alert_title;
        $post->title=$request->title;
        $post->content=$request->content;
        $post->status=$request->status;
        $post->category_id=$request->category_id;

        $hasImage=$this->imageUpload($request);
        if($hasImage){
            $post->image=$hasImage;
        }

        $post->save();

        return redirect()->route('admin.posts.edit', ['post'=>$id]);
    }

    private function imageUpload($request){
        
        $file = $request->file('image');
        if($request->hasFile('image') && $file->getSize()>0){
            $fileName = $file->getClientOriginalName();
            $upload_path = public_path('post/'.date('Y/m'));
            File::isDirectory($upload_path) or File::makeDirectory($upload_path, 0777, true, true);
            
            $file->move($upload_path, $fileName);
            return 'post/'.date('Y/m/').$fileName;
        }else{
            if(!empty($request->image_trash)){
                return '';
            }
        }

        return false;
 
    }
    public function destroy(string $id){
        //@todo: delete here
    }

}