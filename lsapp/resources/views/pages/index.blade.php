
@extends('layouts.app')
        
@section('content')
    <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">{{ $title }}</h1>
      <p class="lead text-muted">This is a super simple laravel app for learning purposes.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>
@endsection
