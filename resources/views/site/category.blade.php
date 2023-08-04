@extends('site.app')
@section('content')
    <div class="col-lg-12 px-0 border-bottom">
        <div class="p-4 text-center bg-body-tertiary rounded-3">
            <div class="bd-placeholder-img rounded-circle mb-4 enews7-header-image">{!!$category->icon_svg!!}</div>
            <h1 class="text-body-emphasis">{{$category->title}}</h1>
            <p class=" mx-auto fs-5 text-muted">{!!$category->content!!}</p>
          </div>
    </div>

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
                </a>
                <br/>
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

<!--nav class="blog-pagination" aria-label="Pagination">
    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
    <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
</nav-->
@endsection