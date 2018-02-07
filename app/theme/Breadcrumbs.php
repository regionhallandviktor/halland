<?php

namespace App\Theme;

class Breadcrumbs
{
	public function __construct()
	{

	}

	/**
	 * Returns the tree for breadcrumbs.
	 * @return array
	 */
	public function getBreadcrumbs()
	{

		global $post;

		if (!is_a($post, 'WP_Post') || is_front_page()) {
			return;
		}
		
		$title = get_the_title();
		$post_type = get_post_type_object($post->post_type);
		$breadcrumbs = array();
		
		$breadcrumbs[] = array(
			'name' => __('Home'),
			'url' => get_home_url()
		);
		

		if (is_single() && $post_type->has_archive) {
			$cpt_archive_link = (is_string($post_type->has_archive)) ? get_permalink(get_page_by_path($post_type->has_archive)) : get_post_type_archive_link($post_type->name);

			$breadcrumbs[] = array(
				'name' => $post_type->label,
				'url' => $cpt_archive_link
			);
		}

		if (is_page() || (is_single() && $post_type->hierarchical == true)) {
				if ($post->post_parent) {
					$anc = array_reverse(get_post_ancestors($post->ID));
					$title = get_the_title();

					foreach ($anc as $ancestor) {
						if (get_post_status($ancestor) != 'private') {

							$breadcrumbs[] = array(
								'name' => get_the_title($ancestor),
								'url' => get_permalink($ancestor)
							);
						}
					}
					
					$breadcrumbs[] = array(
						'name' => $title,
						'url' => false
					);
				} else {
					$breadcrumbs[] = array(
						'name' => get_the_title(),
						'url' => false
					);
				}
			} else {
				if (is_home()) {
					$title = single_post_title();
				} elseif (is_tax()) {
					$title = single_cat_title(null, false);
				} elseif (is_category()) {
					$title = get_the_category();
				} elseif (is_archive()) {
					$title = post_type_archive_title(null, false);
				} else {
					$title = get_the_title();
				}
				$breadcrumbs[] = array(
					'name' => get_the_title(),
					'url' => false
			);
		}

		return $breadcrumbs;
    }
}
