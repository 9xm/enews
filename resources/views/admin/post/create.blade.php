@extends('admin.app')
@section('title', 'Dashboard')
@section('content')
<form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
	@csrf
<div class="row">
	<div class="col-md-8 p-4 bg-body-tertiary rounded">
		<h3>Add New Post <a class="btn btn-outline-primary text-end" href="{{route('admin.posts.index')}}">Back</a></h3>
		<div class="mb-3">
			<label class="form-label">Alert Title</label>
			<input type="text" name="alert_title" value="{{old('alert_title')}}" class="form-control @error('alert_title') is-invalid @enderror">
			<div class="form-text">Title show of front with random color.</div>
		</div>
		<div class="mb-3">
			<label class="form-label">Title</label>
			<textarea name="title" class="form-control @error('title') is-invalid @enderror">{{old('title')}}</textarea>
			<div class="form-text">Title show with alert on list page and single page.</div>
		</div>
		<div class="mb-3">
			<label class="form-label">Slug Title <span>(should be in english)</span></label>
			<textarea name="slug_title" class="form-control @error('slug_title') is-invalid @enderror @error('slug') is-invalid @enderror">{{old('slug_title')}}</textarea>
			<div class="form-text">Post link build with this slug title</div>
			@error('slug')<div class="alert alert-danger">Slug title should be unique.</div>@enderror
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Description</label>
			<textarea class="form-control @error('content') is-invalid @enderror" name="content"  id="content">{{old('content')}}</textarea>
			<div class="form-text"></div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="position-sticky" style="top: 3rem;">
			<div class="p-4 bg-body-tertiary rounded mb-3 ">
				<div class="mb-3">
					<label class="form-label">Status</label>
					<select class="form-select" name="status">
					<option value="draft"  @if(old('status') == 'draft' ) selected="selected" @endif>Draft</option>
					<option value="publish"  @if(old('status') == 'publish' ) selected="selected" @endif>Publish</option>
					</select>
				</div>
				<div class="mb-3">
					<label class="form-label">Category</label>
					<select class="form-select" name="category_id">
						@foreach($categories as $category)
							<option value="{{$category->id}}"  @if(old('category_id') == $category->id ) selected="selected" @endif >{{$category->title}}</option>
						@endforeach
					</select>
				</div>

				<button type="submit" class="btn btn-primary btn-lg">Save</button>
			</div>

			<div class="card p-4">
				<div class="mb-3 d-block">
					<label class="form-label"  for="selectImage">Upload Image <span role="button" ><svg class="bi mx-auto"  width="24" height="18"><use xlink:href="#bi-upload"></use></svg></span></label>
					<input type="file" class="form-control d-none" name="image" accept="image/*" id="selectImage">
					<input type="hidden" name="image_trash" id="image_trash" value="">
					<div id="preview-image" class="d-none position-relative">
						<svg id="preview-image-trash" class="bi mx-auto position-absolute end-0 text-danger bg-light" width="26" height="20"><use xlink:href="#bi-trash"></use></svg>
						<img  src="#" class="w-100" alt="your image" class="mt-3"/>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
</form>
<script type="text/javascript">      
jQuery(document).ready(function (e) {
	$("#preview-image-trash").click(function(){
		$('#preview-image').addClass('d-none');
      	$('#preview-image img').attr('src', ''); 
		$("#selectImage").val("");

	});
   $('#selectImage').change(function(){
    let reader = new FileReader();
	
    reader.onload = (e) => { 
		$('#preview-image').removeClass('d-none');
      	$('#preview-image img').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 

   });
});
</script>
    @endsection