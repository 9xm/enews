@extends('admin.app')
@section('title', 'Category Listing')
@section('content')
<div class="row">
	<div class="col-md-12 p-4 bg-body-tertiary rounded">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categories</li>
      </ol>
    </nav>
    <h2>Categories <a class="btn btn-outline-primary text-end" href="{{route('admin.categories.create')}}">Add New</a></h2>
    <table class="table table-sm table-bordered">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icon</th>
            <th scope="col">Title</th>
            <th scope="col">Slug Title</th>
            <th scope="col">Handle</th>
          </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
          <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{!!$category->icon_svg!!}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->slug_title}}</td>
            <td><a href="{{route('admin.categories.edit', ['category'=>$category->id])}}">edit</a></td>
          </tr>
          @endforeach
         
          </tbody>
        </table>
        <nav>
          
        {{$categories->links('pagination')}}
	</div>
  
</div>	
@endsection