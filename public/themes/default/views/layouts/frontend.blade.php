<!DOCTYPE html>
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
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />      
	  <title>@yield('title') &mdash; Eddies Code Portfolio.</title>
    	  <meta name="copyright" content="All Content on this site is copyright 2015 - 2019." />
    	  <meta name="description" content="My Code Portfolio to show some of my code skills and detail previous experiences and training or schooling." />
    	  <meta name="keywords" content="Eddie's Code portfolio, eddie power, code portfolio, php, css, html, database (oracle, mysql), Laravel 5, CakePHP 3, Objective C, shell scripting, University Distinction average student, melbourne application developer, C#, WPF, WinForms, medical instrumentation development, industry expierence of 2 years, Melbourne Australia, Software Engineer, Developer" />
    	  <meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />	
	<link rel="stylesheet" type="text/css" href="{{ theme('css/frontend.css') }}">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">
				<img src="{{ theme('img\logo.png') }}" alt="Eddie Power 2017.">
                </a>
            </div>
            <div class="menuIcon">
				<a href="#menuExpand" class="glyphicon glyphicon-menu-hamburger"> Menu.</a>
				<br />
				<br />
			</div>
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
	<!- jQuery Stuff under here -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
    	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" 
    	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ theme('js/other.js') }}"></script>
</body>
</html>