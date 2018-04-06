<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		@include('partials.components.cookie-notice')
		@include('partials.components.site-notices')
		@php(do_action('get_header'))
		@include('partials.header')
		@include('partials.components.dropdown')
		{{ get_post_type() }}
		@yield('content')
		@php(do_action('get_footer'))
		@include('partials.footer')
		@php(wp_footer())
	</body>
</html>