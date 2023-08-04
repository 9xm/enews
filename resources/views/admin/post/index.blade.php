@extends('admin.app')
@section('title', 'Post Listing')
@section('content')
<div class="row">
	<div class="col-md-12 p-4 bg-body-tertiary rounded">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Posts</li>
      </ol>
    </nav>
    <h2>Posts <a class="btn btn-outline-primary text-end" href="{{route('admin.posts.create')}}">Add New</a></h2>
    <table class="table table-sm table-bordered">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Handle</th>
          </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->category->title}}</td>
            <td>{{$post->status}}</td>
            <td><a href="{{route('admin.posts.edit', ['post'=>$post->id])}}">edit</a></td>
          </tr>
          @endforeach
         
          </tbody>
        </table>
        <nav>
          
        {{$posts->links('pagination')}}
	</div>
  
</div>	
@endsection