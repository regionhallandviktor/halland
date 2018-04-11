<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
<<<<<<< HEAD
		@include('partials.components.cookie-notice')
		@include('partials.components.site-notices')
		@php(do_action('get_header'))
		@include('partials.header')
		@include('partials.components.dropdown')
		{{ get_post_type() }}
=======
		@include('partials.cookie-notice')
		@include('partials.site-notices')

		@include('partials.header')

>>>>>>> master
		@yield('content')
	
		@include('partials.footer')
	</body>
</html>