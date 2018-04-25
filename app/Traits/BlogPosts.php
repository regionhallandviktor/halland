<?php

namespace App\Traits;

trait BlogPosts
{
	/**
	 * Returns array of comments.
	 * @return array
	 */
	public function getBlogPost()
	{
		return 'getPosts';
	}
	
	public function blogposts()
	{
		return get_posts();
	}
}