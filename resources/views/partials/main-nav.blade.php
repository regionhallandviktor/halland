
	<header class="container mx-auto">
		<div class="col col-12 px2 mb4" id="main-nav-container">
			<div class="burgermenu" id="burgermenu">
				<a class="brand strong nav-logo" href="#">
					<img class="burgermenu-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/menu.png" alt="Meny">
					Meny
				</a>
			</div>
			<a class="brand strong nav-logo" id="nav-logo" href="{{ home_url('/') }}">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/RH-logo.jpg" alt="Logotyp"></a>
			<span class="brand" id="brand-name">{{ get_bloginfo('name', 'display') }}</span>
			<span class="brand nav-separator">|</span>
			<nav class="nav-primary" id="nav-primary">
				@if (has_nav_menu('main-menu'))
					{!! wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'nav']) !!}
				@endif
			</nav>
			<div class="nav-tool" id="nav-search-tool">
				<img class="nav-tool-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/search.png" alt="Sök"><span class="nav-icons-label">Sök</span>
			</div>
			<div class="nav-tool" id="nav-language-tool">
				<img class="nav-tool-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/language.png" alt="Språk"><span class="nav-icons-label">Språk</span>
			</div>
			<div class="nav-tool" id="nav-login-tool">
				<img class="nav-tool-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/profile.png" alt="Profil"><span class="nav-icons-label">Logga in</span>
			</div>
			</div>
		</div>
	</header>
