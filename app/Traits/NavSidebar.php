<?php

namespace App\Traits;

trait NavSidebar
{
	/**
	 * Get navigation tree sidebar menu
	 * @return string Menu markup
	 */
	public function navSidebar()
	{
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		$topAncestor = self::getTopPageAncestor($post);

		var_dump($topAncestor);

	}

	/**
	 * Get top ancestor that uses the page.php template
	 * @return string Menu markup
	 */
	private function getTopPageAncestor($post)
	{
		$ancestors = get_ancestors($post->ID, $post->post_type);
		$topDefaultAncestor;

		foreach($ancestors as $key => $value) {
			$template = get_post_meta($value, '_wp_page_template', true);
			
			if ($template !== 'default') {
				return $ancestors[$key + 1];
			}
		}
	}
}

