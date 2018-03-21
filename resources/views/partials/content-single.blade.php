<article @php(post_class('article'))>

	<div class="container mx-auto alternation">
		<div class="col col-12 sm-col-10">
					
			<header>
				<h1 class="entry-title">{{ get_the_title() }}</h1>
				@include('partials/entry-meta')
			</header>

			@php(the_content())			
		</div>

		<div class="col col-12 sm-col-2">
			<h2>Hitta på sidan</h2>
		</div>
	</div>
	<div class="container mx-auto alternation">
		
		<div class="col col-12 sm-col-10">
			@php(comments_template('/partials/comments.blade.php'))
		</div>
	</div>
	<footer>
		{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
	</footer>
	
</article>
