@extends('layouts.default')

@section('content')
      <div class="jumbotron">
        <h1>Welcome to Larabook!</h1>
        <p>Welcome to the premeir place to talk about laravel with others. Why don't you sign up to see what all the fuss is about?</p>

        @if ( ! $currentUser)
        <p>
            {{ link_to_route('register_path', 'Sign Up!', NULL ,['class' => 'btn btn-lg btn-primary']) }}
        </p>
        @endif
      </div>

@stop