@extends('site.app')
@section('content')
    @foreach($posts as $post)
    <article class="blog-post border-bottom row p-4 mb-4 post-{{$post->id}}">        
        <div class="col d-flex text-justify  flex-column position-relative post-title">
            <div class="vr"></div>
            <h3 class="mb-0 blog-h3 text-dark">
                <span>{{$post->alert_title}} :</span> 
                <a href="{{route('post',['category'=> $post->category->slug, 'post'=> $post->slug])}}" class="text-dark text-decoration-none">
                    {{$post->title}}
                </a>
            </h3>
            <div class="blog-post-meta mt-2">
                <a href="{{route('archive', ['year'=>$post->updated_at->format('Y'), 'month'=>$post->updated_at->format('m')])}}">
                {{$post->updated_at->format('M d, Y')}}
                </a>, 
                <a class="d-inline-block mb-2 text-primary-emphasis" href="{{route('category',['category'=> $post->category->slug])}}">
                    {{$post->category->title}}
                </a><br/>
                Published by <a href="{{route('author', ['author'=> $post->user->id])}}">{{$post->user->name}}</a>  
            </div>
        </div>
        @if($post->image)
        <div class="col d-none d-lg-block  post-image">
            <img  src="{{asset($post->image)}}" class="w-100" alt="your image" class="mt-3"/>
        </div>
        @endif
    </article>
    @endforeach
    {{$posts->links('pagination')}}

@endsection