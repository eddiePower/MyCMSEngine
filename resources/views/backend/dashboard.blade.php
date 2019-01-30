@extends('layouts.backend')

@section('title', 'Dashboard')

@section('title2', 'Last Users:')

@section('content')
		<div class="row">
			<div class="col-md-6">
				<ul class="list-group">
					@foreach($posts as $post)
						<li class="list-group-item">
							<h4>
								<a href="{{ route('backend.blog.edit', $post->id) }}">{{ $post->title }}</a>
								<a href="{{ route('backend.blog.edit', $post->id) }}" class="pull-right">
									<span class="glyphicon glyphicon-edit"></span>
								</a>
							</h4>
							
							{!! $post->excerpt_html !!}

						</li>
					@endforeach  
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-group">
					@foreach($users as $user)
						<li class="list-group-item">
							<h4>{{ $user->name }}</h4>							
						 <p>
						   Last Login: {!! $user->last_login_difference !!}. Last IP: {!! $user->login_ip !!}
				           <br>Location: {!! $city !!} - {!! $country !!}
				           <br><img border="3" width="40%" height="80%" src="{!! $map !!}" />
				         </p>
						</li>
					@endforeach  
				</ul>
			</div>
		</div>
@endsection
