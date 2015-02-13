<?php

namespace LBlog\Http\Controllers;

class HomeController extends Controller
{
	/**
	 * Show the home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home.home')->withTitle('Home');
	}
}