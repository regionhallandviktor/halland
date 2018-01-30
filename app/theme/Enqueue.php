<?php

namespace App\Theme;

class Enqueue
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'styles'));
		add_action('wp_enqueue_scripts', array($this, 'scripts'));
	}

	/**
	 * Enqueue styles
	 * @return void
	 */
	public function styles()
	{	
		wp_enqueue_style('halland/main.css', \App\asset_path('styles/main.css'), false, null);
		// Enqueue Region Halland Component Library
		wp_enqueue_style('rh-components', '//regionhalland.github.io/styleguide/dist/css/main.min.css', false, null);
	}

	/**
	 * Enqueue styles
	 * @return void
	 */
	public function scripts()
	{
		// Theme JS
		wp_enqueue_script('halland/main.js', \App\asset_path('scripts/main.js'), ['jquery'], null, true);
	}
}
