
	<header class="container mx-auto">
		<div class="col col-12 px2 mb4" id="main-nav-container">
			<a class="brand strong" href="{{ home_url('/') }}"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/RH-logo.jpg" alt="Logotyp"></a>
			<span class="brand">{{ get_bloginfo('name', 'display') }}</span>
			<span class="brand nav-separator">|</span>
			<nav class="nav-primary">
				@if (has_nav_menu('main-menu'))
					{!! wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'nav']) !!}
				@endif
			</nav>
		</div>
	</header>
