<div class="row">
	<div class="col-md-12" style="background-image: url({{ theme('img/homepage.jpg') }}); background-size: 100%; height: 320px;  background-repeat: no-repeat">
		<p style="color: #3333CC; position: relative; top: 2%; @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700); font-size: 32px;">Eddie Power's Code Portfolio.</p>
	</div> 
</div>

<div class="row">
	@foreach($posts as $post)
		<div class="col-md-4">
			<h2><a href="{{ route('blog.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h2>
			<p>
				Posted by: {{ $post->author->name }} on {{ $post->published_at }}
			</p>

			{!! $post->excerpt_html or $post->body_html !!}
			
			<br />
			@if(Auth::user())
				<a href="{{ route('backend.blog.edit', $post->id) }}">Edit: <span class="glyphicon glyphicon-edit"></span></a>
			@endif
		</div>
	@endforeach
</div>