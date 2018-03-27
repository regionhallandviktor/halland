<?php

namespace App\Theme;

class Comments
{
	public function __construct()
	{

	}

	/**
	 * Returns array of comments.
	 * @return array
	 */
	public function getComments()
	{
		$comments = get_comments();
		return $comments;
	}
}
