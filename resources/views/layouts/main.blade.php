<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>{!! $title !!} | {{ Config::get('site.name') }}</title>
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	</head>

	<body>
		<script src="{{ URL::asset('js/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>