@foreach($pages as $page)
	<li class="{{ Request::is($page->uri_wildcard) ? 'active' : '' }} {{ count($page->children) ? ($page->isChild() ? 'dropdown-submenu' : 'dropdown') : '' }}">
		<a href="{{ url($page->uri) }}">
			{{ $page->title }}

			@if(count($page->children))
				<span class="caret {{ $page->isChild() ? 'right' : '' }}"></span>
			@endif
		</a>

		@if(count($page->children))
			<ul class="dropdown-menu">
				@include('partials.navigation', ['pages' => $page->children])
			</ul>
		@endif
	</li>
@endforeach
@if(Auth::user())
<li>
 <a href="{{ route('backend.dashboard') }}">User Dashboard</a>
</li>
<li>
    <a href="{{ route('auth.logout') }}">Logout</a>
</li>
@else
<li>
    <a href="{{ route('auth.login') }}">Log in</a>
</li>
@endif