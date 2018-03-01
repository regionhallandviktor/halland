
	<header class="container mx-auto">
		<div class="col col-12 px2 mb4 main-nav-container" id="main-nav-container">
			<div class="burgermenu">
				<a class="" href="#">
					<img class="burgermenu-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/menu.png" alt="Meny">
					Meny
				</a>
			</div>
			<a class="brand strong nav-logo-container" href="{{ home_url('/') }}">
				<img class="nav-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/RH-logo.jpg" alt="Logotyp">
			</a>
			<div class="nav-tool nav-tool-search">
				<img class="nav-tool-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/search.png" alt="Sök">
				<span class="nav-icons-label">
					Sök
				</span>
			</div>
			<span class="brand brand-name">
				{{ get_bloginfo('name', 'display') }}
			</span>
			<span class="brand nav-separator">
				|
			</span>
			<nav class="nav-primary">
				@if (has_nav_menu('main-menu'))
					{!! wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'nav']) !!}
				@endif
			</nav>
			<div class="nav-padder"></div>
			<div class="nav-tool nav-tool-language">
				<img class="nav-tool-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/language.png" alt="Språk">
				<span class="nav-icons-label">
					Språk
				</span>
			</div>
			<div class="nav-tool nav-tool-login">
				<img class="nav-tool-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/black/profile.png" alt="Profil">
				<span class="nav-icons-label">
					Logga in
				</span>
			</div>
			</div>
		</div>
	</header>
