<?php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{
	use Traits\Comments;

	public function categories() {
		global $post;

		$items = get_the_terms($post->ID, 'category');

		$r = array();

		foreach ($items as $item) {

			$r[] = array(
				'label' => $item->name, 
				'href' => get_category_link( $item->term_id ), 
				'count' => $item->count
			);
			
		}

		return $r;
	}

	public function tags() {
		global $post;
		
		$items = get_tags($post->ID);

		$r = array();

		foreach ($items as $item) {

			$r[] = array(
				'label' => $item->name, 
				'href' => get_tag_link( $item->term_id ), 
			);
			
		}

		return $r;

	}
}
