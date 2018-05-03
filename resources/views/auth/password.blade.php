@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('heading', 'Please provide your registered email to reset your password.')

@section('content')


	{!! Form::open() !!}

	<div class="form-group">
	<!-- !! shows laravel is generating php code in this case a form -->
		{!! Form::label('email') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>
	
	<!-- form submit laravel 5 blade call  -->
	{!! Form::submit('Send Password reset Link', ['class' => 'btn btn-primary']) !!}

	<!-- Close Form Laravel 5 blade tag -->
	{!! Form::close() !!}
@endsection