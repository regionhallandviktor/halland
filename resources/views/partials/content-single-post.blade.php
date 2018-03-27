<div class="alternation py4">

<div class="container mx-auto clearfix">
	<div class="col col-12 sm-col-2 px2">En meny</div>
	<div class="col col-12 sm-col-8 px2">
		<article @php(post_class('article'))>	
			<header>
				<h1 class="entry-title">{{ get_the_title() }}</h1>
			</header>

			@php(the_content())
			<hr>
			@include('partials/entry-meta')
		</article>	
	</div>
	<div class="col col-12 sm-col-2 px2">
		 <nav class="content-nav">
		 	<span class="content-nav__heading">Innehållsmeny</span>
		 	<ul class="content-nav__list">
	 			<li class="content-nav__item">
	 				<a class=content-nav__link" href="#tobaksfritt-i-samband-med-operation">
		 Tobaksfritt i samband med operation</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
</div>
<div class="alternation clearfix">
<div class="container mx-auto alternation clearfix py4">
		
	<div class="col-12 sm-col-8 mx-auto px2">
		
		@php(comments_template('/partials/comments.blade.php'))

	

	</div>

	<footer>
		{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
	</footer>
</div>
</div>
