<!doctype html>
 <html>
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXXXXX-X');
</script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />      
	  <title>@yield('title') &mdash; Eddies Code Portfolio.</title>
    	  <meta name="copyright" content="All Content on this site is copyright 2015 - 2019." />
    	  <meta name="description" content="My Code Portfolio to show some of my code skills and detail previous experiences and training or schooling." />
    	  <meta name="keywords" content="Eddie's Code portfolio, eddie power, code portfolio, php, css, html, database (oracle, mysql), Laravel 5, CakePHP 3, Objective C, shell scripting, University Distinction average student, melbourne application developer, C#, WPF, WinForms, medical instrumentation development, industry expierence of 2 years, Melbourne Australia, Software Engineer, Developer" />
    	  <meta name="robots" content="noindex, nofollow" />
	  <link rel="stylesheet" href="{{ theme('css/backend.css') }}">
	  <script src="{{ theme('js/all.js') }}"></script>
	  <script src="{{ theme('js/other.js') }}"></script>
  </head>
  <body>
		<nav class="navbar navbar-static-top navbar-inverse">
					<div class="container">
						<div class="navbar-header">
						  <a href="/" class="navbar-brand">Eddies Code Portfolio</a>
						</div>
						<div class="menuIcon">
						    <a href="#menuExpand" class="glyphicon glyphicon-menu-hamburger"> Menu.</a>
						</div>
						<ul class="nav navbar-nav">
							<li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
							<li><a href="{{ route('backend.users.index') }}">Users</a></li>
							<li><a href="{{ route('backend.pages.index') }}">Pages</a></li>	
							<li><a href="{{ route('backend.blog.index') }}">Blog Posts</a></li>							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><span class="navbar-text">Hello {{ isset($admin['name']) ? $admin['name'] : 'user' }}</span></li>
							<li><a href="{{ route('auth.logout') }}">Logout</a></li>
						</ul>
					</div>
				</nav>		
				
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>@yield('title')</h3> <h3 id="SecondH3">@yield('title2')</h3>

							@if($errors->any())
							<div class="alert alert-danger">
								<strong>We found some issues.</strong>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach

								</ul>

							</div>

						@endif
							
						@if($status)
							<div class="alert alert-info">
								{{ $status }}
							</div>		
						@endif

							@yield('content')
						</div>
					</div>
				</div>
  </body>

 </html>
