@extends('layouts.backend')

@section('scripts')
	<script src="{{ URL::asset('js/backend/home.js') }}"></script>
@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

			<div class="col-md-4">
				<div class="panel panel-default" id="update-checker">
					<div class="panel-heading">Updates</div>

					<div class="panel-body text-center">
						<i class="text-muted fa fa-spinner fa-spin fa-3x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop