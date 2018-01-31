<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
	public function siteName()
	{
		return get_bloginfo('name');
	}

	public static function title()
	{
		if (is_home()) {
			if ($home = get_option('page_for_posts', true)) {
				return get_the_title($home);
			}
			return __('Latest Posts', 'sage');
		}
		if (is_archive()) {
			return get_the_archive_title();
		}
		if (is_search()) {
			return sprintf(__('Search Results for %s', 'sage'), get_search_query());
		}
		if (is_404()) {
			return __('Not Found', 'sage');
		}
		return get_the_title();
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
}
