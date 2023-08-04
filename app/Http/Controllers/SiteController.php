<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class SiteController extends Controller{
    public function __construct(){
        $categories=Category::orderBy("position", "asc")->get();
        View::share('menus', $categories);

    }

    public function home(Request $request){
        View::share('site', ['title'=>'Home - eNews7','bodyClass'=>'home']);
        $data=[
            'posts'   =>  Post::where('status', 'publish')->orderBy("updated_at", "desc")->paginate(5),
        ];

        return view('site.home', $data);
    }
    public function category(Request $request, $category){

        $category=Category::where('slug', $category)->first();


        View::share('site', ['title'=>$category->title,'bodyClass'=>'category']);
        $data=[
            'category'=> $category,
            'posts'   =>  Post::where(['category_id'=>$category->id,'status'=> 'publish'])->orderBy("updated_at", "desc")->paginate(5),
        ];

        return view('site.category', $data);
    }
    public function post(Request $request, $category, $post){

        $category=Category::where('slug', $category)->first();

        View::share('site', ['title'=>'Post - eNews7','bodyClass'=>'post']);
        $single=Post::where(['slug'=>$post,'status'=>'publish'])->first();
        $data=[
            'single'   =>  $single,
            'realted'   =>  Post::whereNot('id','<=>',$single->id)->where(['category_id'=>$category->id,'status'=>'publish'])->paginate(5),
        ];

        return view('site.single', $data);

    }
    public function author(Request $request, $author){
        $user=User::find($author, ['id', 'name', 'email', 'image', 'summary']);

        View::share('site', ['title'=>'Author - '.$user->name,'bodyClass'=>'author']);
        $data=[
            'author'=>$user,
            'posts'   =>  Post::where(['user_id'=> $user->id, 'status'=> 'publish'])->orderBy("updated_at", "desc")->paginate(5),
        ];

        return view('site.author', $data);

    }
    public function archive(Request $request, $year, $month){
        View::share('site', ['title'=>'Year: '.$year.', Month: '.$month.'- eNews7','bodyClass'=>'archive']);
        $data=[
            'year'=>$year,
            'month'=>date('F', mktime(0, 0, 0, $month, 10)),
            
            'posts'   =>  Post::where('status', 'publish')
                            ->whereYear('updated_at', $year)
                            ->whereMonth('updated_at', $month)
                            ->orderBy("updated_at", "desc")->paginate(5),
        ];

        return view('site.archive', $data);

    }
     
}
