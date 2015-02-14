<?php

namespace LBlog\Http\Controllers\Backend;

class ArticleController extends BackendController
{
	/**
	 * Displays the list of articles to the user.
	 * @return Response
	 */
	public function index()
	{
		return view('backend.blog.articles.index')
			->withTitle('Manage Articles');
	}

	/**
	 * Displays the create article form.
	 * @return Response
	 */
	public function create()
	{
		return view('backend.blog.articles.create')
			->withTitle('Post new article');
	}
}