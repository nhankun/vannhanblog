<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
	<div class="bg-info text-white p-5 mb-3">
		<a href="{{ route('post.index') }}" class="btn btn-secondary">Home</a>
		<a href="{{ route('post.create') }}" class="btn btn-secondary">Create post</a>
	</div>
	<div class="container mt-5">
		 @if(\Illuminate\Support\Facades\Session::has('success'))
	        <div class="alert alert-success">
	            {{\Illuminate\Support\Facades\Session::get('success')}}
	        </div>
    	@endif
	    @if(\Illuminate\Support\Facades\Session::has('error'))
	        <div class="alert alert-warning">
	            {{\Illuminate\Support\Facades\Session::get('error')}}
	        </div>
	    @endif
		@yield('content')
	</div>
	<div class="bg-dark text-white p-4 text-center">
		All rights reserved yourname {{date('d-m-Y')}}.
	</div>
</body>
</html>