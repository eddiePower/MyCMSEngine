<article>
	<h2>{{ $post->title }}</h2>
		<p>
			Posted By: {{ $post->author->name }} on {{ $post->published_date }}
		</p>
		
		{!! $post->body_html !!}
		@if(Auth::user())
			<a href="{{ route('backend.blog.edit', $post->id) }}">Edit this post: <span class="glyphicon glyphicon-edit"></span></a>
		@endif
</article>