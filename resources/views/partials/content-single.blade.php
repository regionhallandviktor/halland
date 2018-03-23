<div class="alternation py4">

<div class="container mx-auto alternation clearfix">
	

		<div class="col-12 sm-col-8 mx-auto">
			<article @php(post_class('article'))>	
				<header>
					<h1 class="entry-title">{{ get_the_title() }}</h1>
				</header>

				@php(the_content())
				<hr>
				@include('partials/entry-meta')
			</article>	
		</div>

	
	
	
</div>
</div>
<div class="alternation">
<div class="container mx-auto alternation clearfix py4">
		
	<div class="col-12 sm-col-8 mx-auto">
		@php(comments_template('/partials/comments.blade.php'))
	</div>

	<footer>
		{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
	</footer>
</div>
</div>
