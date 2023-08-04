@extends('admin.app')
@section('title', 'Edit Category')
@section('content')


<form action="{{route('admin.categories.update', ['category'=>$category->id])}}" method="post">
	@method('PUT')
	@csrf
<div class="row">
	<div class="col-md-8 p-4 bg-body-tertiary rounded">
		<div class="mb-3">
			<h3>Edit Category <a class="btn btn-outline-primary text-end" href="{{route('admin.categories.index')}}">Back</a></h3>
		</div>
		<div class="mb-3">
			<label class="form-label">Title</label>
			<input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{$category->title}}">
			<div class="form-text">Title of the category.</div>
		</div>
		<div class="mb-3">
			<label class="form-label">Slug Title <span>(should be in english)</span></label>
			<input type="text" class="form-control  @error('slug_title') is-invalid @enderror @error('slug') is-invalid @enderror" name="slug_title" value="{{$category->slug_title}}">
			<div class="form-text">Category link build with this slug title</div>
			@error('slug')<div class="alert alert-danger">Slug title should be unique.</div>@enderror
		</div>
		<div class="mb-3">
			<label class="form-label">Icon SVG</label>
			<textarea name="icon_svg" class="form-control @error('icon_svg') is-invalid @enderror">{{$category->icon_svg}}</textarea>
			<div class="form-text">Icon of the category.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Description</label>
			<textarea class="form-control @error('content') is-invalid @enderror" name="content"  id="content">{{$category->content}}</textarea>
			<div class="form-text"></div>
		</div>
	</div>
	<div class="col-md-4">
	<div class="position-sticky" style="top: 3rem;">
		<div class="p-4 bg-body-tertiary rounded mb-3">
		<div class="mb-3">
			<label class="form-label">Position</label>
			<input type="number" class="form-control" name="position" value="{{$category->position}}">
		</div>
		<button type="submit" class="btn btn-primary btn-lg">Save</button>
		</div>

		<div class="card">
		{!!$category->icon_svg!!}
		</div>
	</div>
	
	</div>
</div>
</form>
    @endsection