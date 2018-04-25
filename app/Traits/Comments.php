<?php

namespace App\Traits;

trait Comments
{
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