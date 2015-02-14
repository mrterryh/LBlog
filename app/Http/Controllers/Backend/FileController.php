<?php

namespace LBlog\Http\Controllers\Backend;

use Request;
use App;
use Input;
use File;
use Response;

class FileController extends BackendController
{
	/**
	 * @var array
	 */
	protected $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];

	/**
	 * Stores the given files.
	 * @return Response
	 */
	public function store()
	{
		if (!Request::ajax())
			App::abort(404);

		$file = Input::file('file');
		$extension = File::extension($file->getClientOriginalName());

		if (!in_array($extension, $this->allowedExtensions))
			return Response::make('That file extension is not allowed.', 500);

		$directory = public_path() . '/uploads/';
		$filename = md5($file->getClientOriginalName() . time()) . '.' . $extension;

		$upload = $file->move($directory, $filename);

		if (!$upload)
			return Response::make('Upload failed. Please try again later.', 500);

		return Response::json([
			'imagePath' => $directory . $filename
		]);
	}
}