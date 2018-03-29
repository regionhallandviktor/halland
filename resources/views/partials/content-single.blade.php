<div class="alternation py4">

<div class="container mx-auto clearfix">
	<div class="col col-12 sm-col-9 px2">
		<article @php(post_class('article'))>	
			<header>
				<h1 class="entry-title">{{ get_the_title() }}</h1>
			</header>

			@php(the_content())
			<hr>
			@include('partials/entry-meta')
			<footer>
		{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
	</footer>
		</article>	
	</div>
	<div class="col col-12 sm-col-3 px2 d-print-none">
		<p>Some stuff before the menu</p>
		 <nav id="content-nav">
		 	
		 </nav>
	</div>
</div>
</div>
<div class="alternation clearfix">
<div class="container mx-auto alternation clearfix py4">
		
	<div class="col-12 sm-col-9 px2">
		@php(comments_template('/partials/comments.blade.php'))
	</div>
</div>
</div>
