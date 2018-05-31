<h1>Comments</h1>

<div class="row">
    @foreach($post->comments as $comment)
    <div class="col-lg-12">
    <h3>{{$comment->user_name}}</h3>
    <small>{{$comment->created_at}}</small>
    </div>
    <hr>
    <div class="col-md-10 mx-auto">
    {{$comment->comment_body}}
    </div>
    {!! Form::open(['action' => 'PostsController@destroy_comment', 'method' => 'POST' , 'Class' => 'float-right']) !!}
                {{form::hidden('post_id',$post->id)}}
                {{form::hidden('comment_id',$comment->id)}}
                {{-- {{form::hidden('_method','DELETE')}} --}}
				{{Form::Submit('Delete Comment',['class' => 'btn btn-danger '])}}
	{!! Form::close() !!}
    <hr>

    @endforeach
</div>

<hr>

{!! Form::open( [ "action" => "PostsController@comment", "method" => 'POST']) !!}
<div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','' ,['class' => 'form-control' , 'placeholder' => 'Your Name '])}}
    {{Form::hidden('post_id', $post->id )}}
</div>
<div class="form-group">
    {{Form::label('comment_body','Body')}}
    {{Form::textarea('comment_body','' ,['class' => 'form-control' , 'placeholder' => 'Your Comment'])}}
</div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}