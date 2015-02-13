<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>{!! $title !!} | {{ Config::get('site.name') }}</title>
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/lblog.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::route('home') }}">{{ Config::get('site.name') }}</a>
				</div>

				<ul class="nav navbar-nav nav-left">
					<li{!! active('/') !!}><a href="{{ URL::route('home') }}"><i class="fa fa-globe"></i> Home</a></li>
				</ul>
			</div>
		</nav>

		@yield('content')

		<footer>
			<div class="container">
				<hr>

				<p>
					Copyright &copy; {{ date('Y') }}
					<a href="{{ URL::route('home') }}">{{ Config::get('site.name') }}</a>
				</p>
			</div>
		</footer>

		<script src="{{ URL::asset('js/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>