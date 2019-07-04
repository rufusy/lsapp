@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <!--   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->

                    <a href="/lsapp/public/posts/create" class="btn btn-primary">Create post</a>
                    <h3>Blog posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                                <a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a>
                            </td>
                            <td>
                                <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                            </td>
                            <td >
                                {!! Form::open(array('action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right')) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
