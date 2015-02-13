<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Log in to the dashboard</title>

		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/lblog.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	</head>

	<body>
		<div id="content">
			<div class="container">
				<form class="form-signin" method="post">
					<p class="lead">Log in to the dashboard</p>
					
					@if ($errors->count())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>
							@endforeach
						</div>
					@endif

					<label for="input-email" class="sr-only">Email address</label>
					<input type="email" id="input-email" name="email" class="form-control" placeholder="Email address"
					 required value="{{ Input::old('email') }}" {{ Input::old('email') ? '' : ' autofocus' }}>

					<label for="input-password" class="sr-only">Password</label>
					<input type="password" id="input-password" name="password" class="form-control" placeholder="Password"
					required {{ Input::old('email') ? ' autofocus' : '' }}>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<button class="btn btn-primary btn-block" type="submit">Go</button>
				</form>
			</div>
		</div>
	</body>
</html>