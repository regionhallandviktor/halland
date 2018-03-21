<article @php(post_class())>
	<header>
		<h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
	</header>
	@php(the_content())
	<hr>
	@include('partials/entry-meta')
	<hr>
</article>