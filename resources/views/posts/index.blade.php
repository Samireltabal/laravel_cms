@extends('layouts.app')

@section('content')
	<h3>Posts</h3>
	@if(count($posts) > 1)
		@foreach($posts as $post)
			<div class="card card-body bg-light">
				<h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
				<small>Written On {{$post->created_at}}</small>
				
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No Posts Found</p>
	@endif
@endsection