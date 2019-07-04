@extends ('layouts.app')

@section('content')
<h3>Create post</h3>

{{ Form::open(array('action' => 'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data')) }}
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'title'])}}
	</div>

	<div class="form-group">
		{{Form::label(	'body', 
						'Body'
					)}}
		<div>
		{{Form::textarea(	'body', 
							'', 
							[	
								'class'=>'form-control', 'placeholder'=>'Body text',
								'id' => 'article-ckeditor'
							]
						)}}
		</div>
	</div>

	<div class="form-group">
		{{Form::file('cover_image')}}
	</div>

	{{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}

@endsection