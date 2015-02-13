<?php

namespace LBlog\Http\Controllers;

use Response;
use Request;
use App;

class VersionController extends Controller
{
	/**
	 * Compares the version of LBlog to the latest release.
	 * @return boolean
	 */
	public function index()
	{
		if (!Request::ajax())
			return App::abort(404);

		// Will eventually pull this dynamically from some
		// sort of hosted source.
		$latestVersion = '0.1.0';
		$currentVersion = LBLOG_VERSION;

		if (version_compare($currentVersion, $latestVersion) >= 0)
			return Response::json(['latestVersion' => $latestVersion]);

		return Response::json(['newer' => true, 'latestVersion' => $latestVersion]);
	}
}