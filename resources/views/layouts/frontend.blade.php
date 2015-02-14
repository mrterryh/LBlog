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

	<body id="frontend">
		@if (Auth::check())
			<div id="admin-bar">
				<div class="container">
					<ul class="pull-left">
						<!-- <li><a href="#"><i class="fa fa-pencil"></i> Edit Post</a></li> -->
						<li><a href="{{ URL::route('backend') }}"><i class="fa fa-cogs"></i> Backend</a></li>
					</ul>

					<ul class="pull-right">
						<li><a href="{{ URL::route('backend.logout') }}"><i class="fa fa-sign-out"></i> Log out (<strong>{{ Auth::user()->name }}</strong>)</a></li>
					</ul>
				</div>
			</div>
		@endif

		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::route('home') }}">{{ Config::get('site.name') }}</a>
				</div>

				<ul class="nav navbar-nav navbar-left">
					<li{!! active('/') !!}><a href="{{ URL::route('home') }}"><i class="fa fa-globe"></i> Home</a></li>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					@yield('content')
				</div>

				<div class="col-md-3">
					<div class="panel panel-default widget" id="widget-recent-articles">
						<div class="panel-heading">Recent Articles</div>

						<div class="panel-body">
							<ul>
								@foreach ($recentArticles as $article)
									<li><a href="#">{{ $article->title }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

					<div class="panel panel-default widget" id="widget-tags">
						<div class="panel-heading">Tag List</div>

						<div class="panel-body">
							@foreach ($tags as $tag)
								<a href="#" class="label label-default">{{ $tag->name }}</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>

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