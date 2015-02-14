@extends('layouts.frontend')

@section('content')
	<h1 class="article-title">{{ $article->title }}</h1>

	<p class="text-muted">
		<span class="pull-left">
			Posted in <a href="#">{{ $article->category->name }}</a>
			by <a href="#">{{ $article->author->name }}</a>,
			about {{ $article->created_at->diffForHumans() }}
		</span>

		<span class="pull-right">
			@if ($article->tags->count())
				@foreach ($article->tags as $tag)
					<a href="#" class="label label-default">{{ $tag->name }}</a>
				@endforeach
			@endif
		</span>
	</p>

	<br clear="all"><hr>

	<p>
		{!! Markdown::convertToHtml($article->content) !!}
	</p>

	<a href="{{ URL::route('blog.archives') }}" class="btn btn-default btn-sm">
		&larr; Return to archives
	</a>
@stop