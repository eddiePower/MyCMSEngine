<!doctype html>
<html>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133346941-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-133346941-1');
</script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />      
	  <title>@yield('title') &mdash; Eddies Code Portfolio.</title>
    	  <meta name="copyright" content="All Content on this site is copyright 2015 - 2019." />
    	  <meta name="description" content="My Code Portfolio to show some of my code skills and detail previous experiences and training or schooling." />
    	  <meta name="keywords" content="Eddies Code portfolio, eddie power, code portfolio, php, css, html, database (oracle, mysql), Laravel 5, CakePHP 3, Objective C, shell scripting, University Distinction average student, melbourne application developer, C#, WPF, WinForms, medical instrumentation development, industry expierence of 2 years, Melbourne Australia, Software Engineer, Developer" />
    	  <meta name="robots" content="noindex, nofollow" />
	<link rel="stylesheet" href="{{ theme('css/backend.css') }}">
</head>
<body>
	<div class="container">
		<div class="row vertical-center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel {{ $errors->any() ? 'danger' : 'default' }}">
					<div class="panel-heading">
						<h2 class="panel-title">@yield('heading')</h2>
					</div>
					<div class="panel-body">
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
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>