<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body style="min-height: 40000px">
		@include('partials.cookie-notice')
		@include('partials.site-notices')

		@include('partials.header')

		@yield('content')
	
		@include('partials.footer')
	</body>
</html>