<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
	use Traits\CookieNotice;
	use Traits\Breadcrumbs;
	use Traits\NavSidebar;


	/**
	 * Returns the name of the site
	 * @return string
	 */
	public function siteName()
	{
		return get_bloginfo('name');
	}

	/**
	 * Returns array of comments for a post
	 * @return array
	 */
	public function comments()
	{
		$comments = new \App\Theme\Comments();
		$comments = $comments->getComments();
		return $comments;
	}

	/**
	 * Returns notices from Advanced Custom Fields
	 * @return array
	 */
	public function notices()
	{
		$notices = get_field('site_notices', 'options');
		
		if (isset($notices) && !empty($notices)) {
			$notices = array_filter($notices, function($notice) use ($notices) {
				return $notice['notice_active'] === true;
			});
		};

		return $notices;
	}

	/**
	 * Return the main nav
	 * @return array
	 */
	public function navMain()
	{
		$menu = new \App\Theme\Navigation();
		$menu = $menu->getNavMenuItems('main-menu');
		return $menu;
	}

	public function dropdown()
	{
		$menu = new \App\Theme\NavigationTree();
		//return $menu;
	}
}
