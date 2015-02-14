<?php

namespace LBlog\Composers;

use LBlog\Tag\Tag;
use LBlog\Blog\Article;

class FrontendComposer
{
	/**
	 * Composes the view.
	 * @param View $view
	 */
	public function compose($view)
	{
		$articles = Article::orderBy('created_at', 'desc')->take(5)->skip(0)->get();

		$view->with('tags', Tag::all());
		$view->with('recentArticles', $articles);
	}
}