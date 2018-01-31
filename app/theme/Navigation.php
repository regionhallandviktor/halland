<?php

namespace App\Theme;

class Navigation
{
	public function __construct()
	{
		$this->registerMenus();

		add_action('save_post', array($this, 'purgeTreeMenuTransient'), 10, 2);
	}

	/**
	 * Register menus.
	 * @return void
	 */
	public function registerMenus()
	{
		$menus['main-menu'] = __('Main menu', 'halland');

		register_nav_menus($menus);
	}

	/**
	 * Find out which pages menus must be purged.
	 * @param int $postId The post id to empty for
	 */
	public function purgeTreeMenuTransient($postId, $post)
	{
		$this->purgeTreeMenuTransientForAncestors($post->post_parent);
	}

	/**
	 * Delete tree menu transient for ancestors of post id.
	 * @param int $postId The post id
	 * @return void
	 */
	public function purgeTreeMenuTransientForAncestors($postId)
	{
		// Get page ancestors
		$ancestors = get_post_ancestors($postId);
		$ancestors[] = $postId;

		// Remove front page from ancestors array
		$ancestors = array_reverse($ancestors);

		if ($ancestors[0] == get_option('page_on_front')) {
			unset($ancestors[0]);
		}

		$ancestors = array_values($ancestors);

		// Delete transient for page ancestors
		foreach ($ancestors as $postId) {
			$children = get_children(array(
				'post_parent' => $postId,
				'numberofposts' => -1,
				'post_type' => 'page',
			));

			foreach ($children as $child) {
				delete_transient('main_menu_' . $child->ID);
				delete_transient('mobile_menu_' . $child->ID);
				delete_transient('sidebar_menu_' . $child->ID);

				delete_transient('main_menu_' . $child->ID . '_loggedin');
				delete_transient('mobile_menu_' . $child->ID . '_loggedin');
				delete_transient('sidebar_menu_' . $child->ID . '_loggedin');
			}
		}
	}

	/**
	 * Outputs the html for the breadcrumb.
	 * @return void
	 */
	public static function outputBreadcrumbs()
	{
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		$title = get_the_title();
		$post_type = get_post_type_object($post->post_type);
		$output = array();

		echo '<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';

		if (!is_front_page()) {
			$int = 1;
			$output[] = '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="' . get_home_url() . '" title="' . __('Home') . '">
							<span itemprop="name">' . __('Home') . '</span><meta itemprop="position" content="' . $int++ . '"></a>
						</li>';

			if (is_single() && $post_type->has_archive) {
				$cpt_archive_link = (is_string($post_type->has_archive)) ? get_permalink(get_page_by_path($post_type->has_archive)) : get_post_type_archive_link($post_type->name);

				$output[] = '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
								<a itemprop="item" href="' . $cpt_archive_link . '" title="' .  $post_type->label . '">
								<span itemprop="name">' .  $post_type->label . '</span><meta itemprop="position" content="' . $int++ . '"></a>
							</li>';
			}

			if (is_page() || (is_single() && $post_type->hierarchical == true)) {
				if ($post->post_parent) {
					$anc = array_reverse(get_post_ancestors($post->ID));
					$title = get_the_title();

					foreach ($anc as $ancestor) {
						if (get_post_status($ancestor) != 'private') {
							$output[] = '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
											<a itemprop="item" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">
												<span itemprop="name">' . get_the_title($ancestor) . '</span>
												<meta itemprop="position" content="' . $int++ . '" />
											</a>
									   </li>';
						}
					}

					$output[] = '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
									<span itemprop="name" class="breadcrumbs-current" title="' . $title . '">' . $title . '</span>
									<meta itemprop="position" content="' . ($int++) . '" />
								</li>';
				} else {
					$output[] = '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
									<span itemprop="name" class="breadcrumbs-current">' . get_the_title() . '</span>
									<meta itemprop="position" content="1" />
								</li>';
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
				$output[] = '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
								<span itemprop="name">' . $title . '</span><meta itemprop="position" content="' . $int++ . '" />
							</li>';
			}
		}

		// $output = apply_filters('Municipio/Breadcrumbs/Items', $output, get_queried_object());

		echo implode("\n", $output);
		echo '</ol>';
	}
}