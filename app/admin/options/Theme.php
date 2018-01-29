<?php

namespace App\Admin\Options;

class Theme
{
	public function __construct()
	{
		if (function_exists('acf_add_options_page')) {
			$themeOptionsCapability = 'administrator';
			$themeOptionsParent = 'themes.php';

			add_action('admin_menu', function () use ($themeOptionsParent) {
				global $submenu;
				$submenu[$themeOptionsParent][] = array( '', 'read', '', '', 'wp-menu-separator');
			}, 11);

			acf_add_options_sub_page(array(
				'page_title'    => __('Theme Options', 'halland'),
				'menu_title'    => __('Theme Options', 'halland'),
				'parent_slug'   => $themeOptionsParent,
				'capability'    => $themeOptionsCapability,
				'redirect'      => false
			));
		}
	}
}

