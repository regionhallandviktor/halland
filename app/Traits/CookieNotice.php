<?php

namespace App\Traits;

trait CookieNotice
{
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
}