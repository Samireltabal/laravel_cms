@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <hr>
                    <h3>Your blog posts</h3>
                    @if(count($posts) > 0) 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post) 
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td> <a href="/posts/{{$post->id}}/edit" class='btn btn-default btn-primary btn-block'> Edit </a></td>
                                    <td>
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' , 'Class' => 'float-right']) !!}
                                            {{form::hidden('_method','DELETE')}}
                                            {{Form::Submit('Delete',['class' => 'btn btn-danger btn-block'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>No Posts Available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
