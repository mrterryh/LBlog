@extends('layouts.backend')

@section('content')
	<div class="container">
		<p class="lead">
			List of all articles &nbsp;

			<a href="{{ URL::route('backend.blog.articles.new') }}" class="btn btn-default btn-sm">Create new</a>
		</p>

		<hr>
	</div>
@stop