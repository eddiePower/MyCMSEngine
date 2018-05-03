<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title') &mdash; Code Portfolio</title>
	<link rel="stylesheet" type="text/css" href="{{ theme('css/frontend.css') }}">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">
				<img src="{{ theme('img\logo.png') }}" alt="Eddie Power 2017.">
			</a></div>
			<ul class="nav navbar-nav">
				@include('partials.navigation')
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">@yield('content')</div>
		</div>
		<br /><br /><br /><br />
	  <div class="bottom-aligned-text">
        <p>&copy; 2016 &mdash; 2018 Eddie Power.</p>
      </div>
	</div>
</body>
</html>