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

		// Grab the file form the posted data.
		$file = Input::file('file');

		// Detect the file extension.
		$extension = File::extension($file->getClientOriginalName());

		// Ensure the file extension is allowed.
		if (!in_array($extension, $this->allowedExtensions))
			return Response::make('That file extension is not allowed.', 500);

		// Define the upload directory.
		$directory = public_path() . '/uploads/';

		// Create an MD5 hash to use as the file name.
		$filename = md5($file->getClientOriginalName() . time()) . '.' . $extension;

		// Upload the file.
		$upload = $file->move($directory, $filename);

		// Return an error if the upload failed.
		if (!$upload)
			return Response::make('Upload failed. Please try again later.', 500);
		
		return Response::json([
			'imagePath' => $directory . $filename
		]);
	}
}