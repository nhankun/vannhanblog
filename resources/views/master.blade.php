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
		@yield('content')
	</div>
	<div class="bg-dark text-white p-4 text-center">
		All rights reserved yourname {{date('Y')}}.
	</div>
</body>
</html>