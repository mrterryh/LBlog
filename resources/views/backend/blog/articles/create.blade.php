@extends('layouts.backend')

@section('styles')
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ URL::asset('css/widearea.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/dropzone.min.css') }}">
@stop

@section('scripts')
	<script src="{{ URL::asset('js/backend/article.js') }}"></script>
	<script src="{{ URL::asset('js/widearea.min.js') }}"></script>
	<script src="{{ URL::asset('js/dropzone.min.js') }}"></script>

	<script>
		wideArea();
	</script>
@stop

@section('content')
	<div class="container">
		<p class="lead">Post a new article</p><hr>
	
		<div class="row">
			<div class="col-md-10">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="input-title" class="col-sm-2 control-label">Title</label>
			
						<div class="col-sm-10">
							<input type="text" name="text" class="form-control" id="input-title" placeholder="The name of your article" value="{{ Input::old('title') }}" required>
						</div>
					</div>

					<div class="form-group">
						<label for="input-slug" class="col-sm-2 control-label">Slug</label>
			
						<div class="col-sm-10">
							<input type="text" name="slug" class="form-control" id="input-slug" placeholder="The URL access point of your article" value="{{ Input::old('slug') }}" required>
						</div>
					</div>

					<div class="form-group">
						<label for="input-content" class="col-sm-2 control-label">Content</label>
			
						<div class="col-sm-10">
							<textarea data-widearea="enable" name="content" id="input-content" cols="30" rows="10" class="form-control" placeholder="The content of your article" required>{{ Input::old('content') }}</textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox" id="input-publish" name="publish"> Publish article immediately?
								</label>
							</div>
						</div>
					</div>
				
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn btn-success btn-sm" id="input-submit">Save draft</button>
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-2">
				<form action="/backend/upload" id="image-upload" class="dropzone">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
		</div>
	</div>
@stop