<?php

namespace App\Theme;

class Blogpost
{
	public function __construct()
	{

	}

	/**
	 * Returns array of comments.
	 * @return array
	 */
	public function getComments()
	{
		$items = get_comments();
		return $items;
	}

	public function getTags()
	{
		$tags = get_the_tags();

		$tag_array = array();
		
		foreach ($tags as $tag) {
			$tag_array = $this->addItem($tag_array, __($tag->name), get_tag_link($tag->term_id), $tag->count);
		}

		return $tag_array;
	}

	public function getCategories()
	{
		$categories = get_the_category();



		$c_array = array();

		foreach ($categories as $category) {
			$c_array = $this->addItem($c_array, __($category->name), get_category_link($category->term_id), $category->category_count);
		}

		return $c_array;
	}

	private function addItem($list, $name, $url, $count) {
		$list[] = array(
			'name' => $name,
			'url' => $url,
			'count' => $count,
		);
		return $list;
	}
}
