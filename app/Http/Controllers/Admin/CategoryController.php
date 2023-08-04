<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Category;



class CategoryController extends Controller
{
    public function index(){
        $categories=Category::orderBy("updated_at", "desc")->paginate(5);
        return view('admin.category.index', ['categories'=>$categories]);

    }
    public function create(){
        $data=[];
        return view('admin.category.create', $data);
    }
    public function store(Request $request){
        $request['slug']=Str::slug($request->slug_title, "-");

        $request->validate([
            'title' => 'required',
            'slug_title' => 'required',
            'slug'    =>  'unique:categories,slug',
            'icon_svg' => 'required',
            'content' => 'required',
        ]);

        $category=new Category;
        $category->title=$request->title;
        $category->slug_title=$request->slug_title;
        $category->slug=$request['slug'];
        $category->icon_svg=$request->icon_svg;
        $category->content=$request->content;
        $category->position=$request->position;
        $category->save();

        return redirect()->route('admin.categories.edit', ['category'=>$category->id]);

    }

    public function show(string $id){
        return redirect()->route('admin.categories.index');
    }

    public function edit(string $id){
        $category= Category::where('id',$id)->first(); ;
        if($category){
            return view('admin.category.edit', ['category'=>$category]);
        }
        return redirect()->route('admin.categories.index');

    }
    public function update(Request $request, string $id){
        $category= Category::find($id);
        
        $request['slug']=Str::slug($request->slug_title, "-");

        if($category->slug == $request['slug']){
            $request->validate([
                'icon_svg' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]);
        }else{
            $request->validate([
                'icon_svg' => 'required',
                'title' => 'required',
                'slug_title' => 'required',
                'slug'    =>  'unique:categories,slug',
                'content' => 'required',
            ]);
            $category->slug_title=$request->slug_title;
            $category->slug=$request['slug'];
        }
        $category->icon_svg=$request->icon_svg;
        $category->title=$request->title;
        $category->content=$request->content;
        $category->position=$request->position;

        $category->save();

        return redirect()->route('admin.categories.edit', ['category'=>$id]);
    }
    public function destroy(string $id){
        //
    }
}
