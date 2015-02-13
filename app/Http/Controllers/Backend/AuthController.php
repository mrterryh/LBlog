<?php

namespace LBlog\Http\Controllers\Backend;

use LBlog\Http\Requests\LoginRequest;
use Auth;

class AuthController extends BackendController
{
	/**
	 * Logs the user out.
	 * @return Response
	 */
	public function index()
	{
		Auth::logout();

		return redirect()->route('home')->withSuccess('You have been successfully logged out.');
	}

	/**
	 * Show the login form.
	 *
	 * @return Response
	 */
	public function show()
	{
		return view('backend.auth.login');
	}

	/**
	 * Processes the login form and attempts to authenticate the user.
	 * @return Response
	 */
	public function create(LoginRequest $request)
	{
		$data = ['email' => $request->email, 'password' => $request->password];

		if (Auth::attempt($data))
			return redirect()->route('backend')->withSuccess('You have been successfully signed in.');

		return redirect()->back()
			->withErrors(['email' => 'The credentials you provided are invalid.'])
			->withInput();
	}
}