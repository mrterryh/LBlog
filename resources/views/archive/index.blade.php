@extends('layouts.frontend')

@section('content')
	@foreach ($articles as $article)
		<div class="article" id="article-{{ $article->id }}">
			<h1 class="article-title"><a href="#">{{ $article->title }}</a></h1>

			@if ($article->featured_image)
				
			@endif

			<ul class="list-inline article-meta text-muted">
				<li><i class="fa fa-user"></i> <a href="#">{{ $article->author->name }}</a></li>
				<li><i class="fa fa-th-list"></i> <a href="#">{{ $article->category->name }}</a></li>

				@if ($article->tags->count())
					<li>
						<i class="fa fa-tag"></i>

						@foreach ($article->tags as $tag)
							<a href="#" class="label label-default">{{ $tag->name }}</a>
						@endforeach
					</li>
				@endif
			</ul>

			<p>
				{!! $article->excerptFormatted(600) !!}
			</p>

			<a href="#" class="btn btn-default btn-sm">Continue reading &rarr;</a>
		</div>
	@endforeach
@stop