@extends('master')


@section('content')
	
	<h2 class="my-3">Edit a post with title "{{$post->title}}"</h2>
	@if($errors->all())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</div>
	@endif
	<form action="{{ route('post.update', $post->id) }}" method="post">
		@method('PUT')
		@csrf

		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="{{isset($post) ? $post->title : "" }}" class="form-control">
		</div>

		<div class="form-group">
			<label for="content">Content</label>
			<textarea name="content" id="content" cols="30" rows="10" class="form-control">{{isset($post) ? $post->content : "" }}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-outline-info">Update a post</button>
		</div>

	</form>


@stop