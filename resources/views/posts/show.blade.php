@extends('layouts.app')

@section('content')
	<a href="/posts" class='btn btn-default'>Go back</a>
	<h1>{{$post->title}}</h1>		
	<div>
		{!! $post->body !!}
	</div>		
	<hr>
	<small>Written on: {{$post->created_at}}</small>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class='btn btn-primary'>Edit Post</a>
	{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' , 'Class' => 'float-right']) !!}
		{{form::hidden('_method','DELETE')}}
		{{Form::Submit('Delete',['class' => 'btn btn-danger'])}}
	{!! Form::close() !!}
	@endsection