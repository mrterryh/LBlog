<?php

namespace LBlog\Composers;

use LBlog\Tag\Tag;

class FrontendComposer
{
	/**
	 * Composes the view.
	 * @param View $view
	 */
	public function compose($view)
	{
		$view->with('tags', Tag::all());
	}
}