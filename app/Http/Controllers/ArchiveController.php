<?php

namespace LBlog\Http\Controllers;

use LBlog\Blog\Article;

class ArchiveController extends Controller
{
	/**
	 * Show the archive.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::paginate(5);

		return view('archive.index')
			->withTitle('Archives')
			->withArticles($articles);
	}
}