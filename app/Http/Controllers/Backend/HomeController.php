<?php

namespace LBlog\Http\Controllers\Backend;

class HomeController extends BackendController
{
	/**
	 * Displays the backend dashboard to the user.
	 * @return Response
	 */
	public function index()
	{
		return view('backend.home.home')->withTitle('Dashboard');
	}
}