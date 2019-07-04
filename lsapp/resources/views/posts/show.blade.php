@extends ('layouts.app')

@section('content')
	<a href="/lsapp/public/posts" class="btn btn-default">Back</a>
	<h3>{{$post->title}}</h3>
	<img style="width:100%" src="/lsapp/public/storage/cover_images/{{$post->cover_image}}">
	<br><br>
	<div>
		{!! $post->body!!}
	</div>
	<hr>
	<small>
		written on {{$post->created_at}} by {{$post->user->name}}
	</small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

			{!! Form::open(array('action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right')) !!}
				{{ Form::hidden('_method', 'DELETE') }}
				{{ Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) }}
			{!! Form::close() !!}
		@endif
	@endif
@endsection