<?php

namespace App\Traits;

trait SiteName
{
	/**
	 * Returns the name of the site
	 * @return string
	 */
	public function siteName()
	{
		return get_bloginfo('name');
	}
}