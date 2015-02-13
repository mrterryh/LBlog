<?php

namespace LBlog\Blog;

use Model;
use Markdown;

class Article extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'blog_articles';

	/**
	 * Formats the article body and returns an excerpt.
	 * @param  integer $limit
	 * @return string
	 */
	public function excerptFormatted($limit)
	{
		return Markdown::convertToHtml(str_limit($this->content, $limit));
	}
}