{{-- 	<header class="container mx-auto">
		<div class="col col-12 px2 mb4">
			<a class="brand strong" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
			<nav class="nav-primary">
				@if (has_nav_menu('main-menu'))
					{!! wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'nav']) !!}
				@endif
			</nav>
		</div>
	</header> --}}

@include('partials.main-nav')

@if(isset($breadcrumbs))
<div class="breadcrumbs-container">
	<div class="container mx-auto">
		<div class="clearfix">
			<div class="col col-12 px2">
				@include('partials.breadcrumbs')
			</div>
		</div>
	</div>
</div>
@endif