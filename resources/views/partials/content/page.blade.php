<div class="article">
	{{ get_post_type() }}
	@if(isset($title))
	<h1>{{ get_post_type() }} - {{ $title }}</h1>
	@endif
	@php(the_content())
	{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>