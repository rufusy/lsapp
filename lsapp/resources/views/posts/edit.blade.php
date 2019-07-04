@extends ('layouts.app')

@section('content')
<h3>Edit post</h3>

{{ Form::open(array('action' => ['PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data')) }}
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'title'])}}
	</div>

	<div class="form-group">
		{{Form::label(	'body', 
						'Body'
					)}}
		{{Form::textarea(	'body', 
							$post->body, 
							[	
								'class'=>'form-control', 'placeholder'=>'Body text',
								'id' => 'article-ckeditor'
							]
						)}}
	</div>
	<div class="form-group">
		{{Form::file('cover_image')}}
	</div>
	{{ Form::hidden('_method', 'PUT')}}
	{{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}

@endsection