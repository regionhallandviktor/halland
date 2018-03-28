<?php

namespace App;

use Sober\Controller\Controller;

class TemplateSection extends Controller
{

	/**
	 * Returns array for the section nav
	 * @return string
	 */
	public function sectionNav()
	{
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		$args = array( 
			'child_of' => $post->ID,
			'parent' => $post->ID,
			'hierarchical' => 0,
			'sort_column' => 'menu_order', 
			'sort_order' => 'asc'
		);
		$pages = get_pages($args);

		foreach ($pages as $page) {

			if ($page->ID === $post->ID) {
				$page->is_current = true;
			}

			$page->url = get_page_link($page->ID);
		}

		return $pages;
	}

}
