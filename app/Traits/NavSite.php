<?php

namespace App\Traits;

trait NavSite
{
	/**
	 * Get navigation tree sidebar menu
	 * @return string Menu markup
	 */
	public function navSite()
	{
		$pages = get_pages(array(
			'parent' => 0
		));

		$frontpage = (int)get_option('page_on_front');

		foreach ($pages as $i => $page) {
			if ($page->ID === $frontpage) {
				unset($pages[$i]);
				continue;
			}

			$page->children = get_pages(array( 
				'child_of' => $page->ID, 
				'parent' => $page->ID,
				'hierarchical' => 0,
				'sort_column' => 'menu_order', 
				'sort_order' => 'asc'
			));
		}

		return $pages;
	}
}