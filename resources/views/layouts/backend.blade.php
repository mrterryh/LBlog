<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{!! $title !!} | {{ Config::get('site.name') }}</title>
		
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/lblog.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::route('backend') }}">LBlog Dashboard</a>
				</div>

				<ul class="nav navbar-nav nav-left">
					<li{!! active('backend') !!}><a href="{{ URL::route('backend') }}"><i class="fa fa-tachometer"></i> Dashboard</a></li>
					<li{!! active('backend/users') !!}><a href="{{ URL::route('backend') }}"><i class="fa fa-users"></i> Users</a></li>
					<li{!! active('backend/posts') !!}><a href="{{ URL::route('backend') }}"><i class="fa fa-file-text"></i> Posts</a></li>
					<li{!! active('backend/comments') !!}><a href="{{ URL::route('backend') }}"><i class="fa fa-comments"></i> Comments</a></li>
					<li{!! active('backend/tags') !!}><a href="{{ URL::route('backend') }}"><i class="fa fa-tag"></i> Tags</a></li>
					<li{!! active('backend/settings') !!}><a href="{{ URL::route('backend') }}"><i class="fa fa-cogs"></i> Settings</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ URL::route('backend.logout') }}"><i class="fa fa-sign-out"></i> Log out</a></li>
					<li><a href="{{ URL::route('home') }}" target="_blank"><i class="fa fa-home"></i> Back to site</a></li>
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
		@yield('scripts')
	</body>
</html>