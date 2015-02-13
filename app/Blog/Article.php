<?php

namespace LBlog\Blog;

use Model;
use Markdown;
use LBlog\Tag\TaggableTrait;

class Article extends Model
{
	use TaggableTrait;

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

	/**
	 * Returns the article author.
	 * @return BelongsTo
	 */
	public function author()
	{
		return $this->belongsTo('LBlog\User');
	}

	/**
	 * Returns the article category.
	 * @return BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo('LBlog\Blog\Category');
	}
}