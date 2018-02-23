<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		@include('partials.cookie-notice')
		@include('partials.site-notices')
		@php(do_action('get_header'))
		@include('partials.main-nav')
		<div class="container mx-auto" role="document">
			<div class="clearfix">
				<div class="col col-12 px2">
					@include('partials.breadcrumbs')
				</div>
			</div>
			<main class="main">
				@yield('content')
			</main>
		</div>
		@php(do_action('get_footer'))
		@include('partials.footer')
		@php(wp_footer())
	</body>
</html>
