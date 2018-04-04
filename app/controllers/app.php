<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
	
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
	 * Returns cookie notice from Advanced Custom Fields
	 * @return array
	 */
	public function cookieNotice()
	{
		$cookieName = 'cookie_notice_accepted';

		if (!isset($_COOKIE[$cookieName])) {
			$cookie_notice['message'] = get_field('cookie-notice_message', 'options');
			$cookie_notice['button'] = get_field('cookie-notice_button', 'options');
			return $cookie_notice;
		}
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
