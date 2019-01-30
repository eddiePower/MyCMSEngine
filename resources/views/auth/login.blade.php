@extends('layouts.auth')

@section('title', 'Login')

@section('heading', 'Welcome to my portfolio, please login.')

@section('content')


	{!! Form::open() !!}

	<div class="form-group">
	<!-- !! shows laravel is generating php code in this case a form -->
		{!! Form::label('email') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>
	<!-- Divs used for the bootstrap styling -->
    <div class="form-group">
		{!! Form::label('password') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
	<!-- form submit laravel 5 blade call  -->
	{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}

	<a href="{{ route('auth.password.email') }}" class="btn btn-danger small">Forgot Password</a>

	<a href="/" class="btn btn-info">Go Home</a>
    
    <!-- Close Form Laravel 5 blade tag -->
	{!! Form::close() !!}

	
@endsection