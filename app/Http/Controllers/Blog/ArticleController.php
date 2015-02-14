<?php

namespace LBlog\Http\Controllers\Blog;

use LBlog\Blog\Article;
use LBlog\Http\Controllers\Controller;

class ArticleController extends Controller
{
	/**
	 * Displays the article to the user.
	 * @param  Article  $article
	 * @return Response
	 */
	public function show(Article $article)
	{
		return view('blog.article.show')
			->withTitle($article->title)
			->withArticle($article);
	}
}