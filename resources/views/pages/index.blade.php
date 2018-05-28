@extends('layouts.app')

@section('content')
<div class="jumbotron">
        <h1>{{$title}}</h1>
        <p>This my first laravel application , i`m following youtube tutorial </p>
        <p>
          <a class="btn btn-lg btn-primary" href="/login" role="button">Login</a>

          <a class="btn btn-lg btn-primary" href="/register" role="button">Register</a>
        </p>
      </div>
@endsection