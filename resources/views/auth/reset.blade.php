@extends('layouts.auth')

@section('title', 'Reset Password')

@section('heading', 'Please enter your new password')

@section('content')


	{!! Form::open() !!}

	{!! Form::hidden('token', $token) !!}

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
	
	<div class="form-group">
		{!! Form::label('password_confirmation') !!}
		{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
	</div>
	<!-- form submit laravel 5 blade call  -->
	{!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}


	<!-- Close Form Laravel 5 blade tag -->
	{!! Form::close() !!}
@endsection