<?php

namespace LBlog\Http\Controllers\Backend;

class AuthController extends Controller
{
	/**
	 * Show the login form.
	 *
	 * @return Response
	 */
	public function login()
	{
		return view('backend.auth.login')->withTitle('Log in');
	}
}