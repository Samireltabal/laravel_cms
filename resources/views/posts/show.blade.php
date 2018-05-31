@extends('layouts.app')

@section('content')
	<a href="/posts" class='btn btn-default'>Go back</a>
	<h1>{{$post->title}}</h1>
	<img src='/storage/cover_images/{{$post->cover_image}}' style='width:100%;'/>
		
	<div>
		{!! $post->body !!}
	</div>		
	<hr>
	<small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
	@if(!Auth::guest())
		@if(Auth::User()->id == $post->user_id)
			<hr>
			<a href="/posts/{{$post->id}}/edit" class='btn btn-primary'>Edit Post</a>
			{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' , 'Class' => 'float-right']) !!}
				{{form::hidden('_method','DELETE')}}
				{{Form::Submit('Delete',['class' => 'btn btn-danger '])}}
			{!! Form::close() !!}
		@endif
	@endif
	@include('posts.comments')
	@endsection