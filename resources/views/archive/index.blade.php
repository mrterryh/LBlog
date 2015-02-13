@extends('layouts.frontend')

@section('content')
	@foreach ($articles as $article)
		<div class="article" id="article-{{ $article->id }}">
			<h1 class="article-title"><a href="#">{{ $article->title }}</a></h1>

			@if ($article->featured_image)
				
			@endif

			<p>
				{!! $article->excerptFormatted(600) !!}
			</p>

			<a href="#" class="btn btn-default btn-sm">Continue reading &rarr;</a>
		</div>
	@endforeach
@stop