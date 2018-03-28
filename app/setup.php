<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme
 */
new \App\Theme\Enqueue();
new \App\Theme\Support();
new \App\Theme\Navigation();
new \App\Theme\Sidebars();

/**
 * Admin
 */
new \App\Admin\Options\Theme();

/**
 * ACF auto import and export
 */
add_action('init', function() {
	if (class_exists('AcfExportManager\AcfExportManager')) {
		$acfExportManager = new \AcfExportManager\AcfExportManager();
		$acfExportManager->setTextdomain('halland');
		$acfExportManager->setExportFolder(__DIR__ . '/acf/');
		$acfExportManager->autoExport(array(
		    'options-theme-cookie-notice' => 'group_5aa63e3f4d0c8'
		));
		$acfExportManager->import();
	}
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
	sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
	/**
	 * Add JsonManifest to Sage container
	 */
	sage()->singleton('sage.assets', function () {
		return new JsonManifest(config('assets.manifest'), config('assets.uri'));
	});

	/**
	 * Add Blade to Sage container
	 */
	sage()->singleton('sage.blade', function (Container $app) {
		$cachePath = config('view.compiled');
		if (!file_exists($cachePath)) {
			wp_mkdir_p($cachePath);
		}
		(new BladeProvider($app))->register();
		return new Blade($app['view']);
	});

	/**
	 * Create @asset() Blade directive
	 */
	sage('blade')->compiler()->directive('asset', function ($asset) {
		return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
	});
});

/**
 * Add excerpt to pages
 */
add_action('init', function() {
    add_post_type_support( 'page', 'excerpt' );
});
