<?php

namespace LBlog\Tag;

trait TaggableTrait
{
	/**
	 * Return the tags for the entity.
	 * @return MorphToMany
	 */
	public function tags()
	{
		return $this->morphToMany('LBlog\Tag\Tag', 'taggable', 'taggable');
	}
}