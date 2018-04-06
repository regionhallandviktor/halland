<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {

	/**
	 * Returns array of comments for a post
	 * @return array
	 */
	public function comments()
	{
		$comments = new \App\Theme\Blogpost();
		$comments = $comments->getComments();
		return $comments;
	}

	public function tags()
	{
		$tags = new \App\Theme\Blogpost();
		$tags = $tags->getTags();
		return $tags;
	}

	public function categories()
	{
		$item = new \App\Theme\Blogpost();
		$item = $item->getCategories();
		return $item;
	}
}
