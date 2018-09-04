@extends('master')

@section('content')


		<h1>All posts</h1>
		@foreach ($posts as $item)
			<div class="card">
				<div class="card-body">
					<h2>
						<a href="{{ route('post.show', $item->id) }}">
							{{$item->title}}
						</a>
						<a href="{{ route('post.edit', $item->id) }}" class="btn btn-info">Edit</a>
						<form onsubmit="return confirm('Are you sure you want to delete this post ?')" class="d-inline-block" action="{{ route('post.destroy', $item->id) }}" method="post">
							@csrf
							@method('delete')
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</h2>
				</div>
			</div>
		@endforeach
		<div class="mt-4">
			{{$posts->links()}}
		</div>


@endsection