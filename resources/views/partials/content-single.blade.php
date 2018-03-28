<div class="alternation py4">

<div class="container mx-auto clearfix">
	<div class="col col-12 sm-col-2 px2 d-print-none">
		
		<nav class="mb4">
			<ul class="vertical-nav">
				<li class="vertical-nav__header">
					<span class="vertical-nav__heading--dynamic">Meny</span>
					<span class="vertical-nav__heading--static">UI-komponenter</span>
					<button class="vertical-nav__button">
		 				<svg class="vertical-nav__icon  icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use>
						</svg>
					</button>
				</li>
				<li class="vertical-nav__item"><a class="vertical-nav__link" href="/components/article">Testmeny 1</a></li>
				<li class="vertical-nav__item"><a class="vertical-nav__link" href="/components/breadcrumbs">Testmeny 2</a></li>
			</ul>
		</nav>


	</div>
	<div class="col col-12 sm-col-8 px2">
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
	<div class="col col-12 sm-col-2 px2 d-print-none">
		 <nav class="content-nav"></nav>
	</div>
</div>
</div>
<div class="alternation clearfix">
<div class="container mx-auto alternation clearfix py4">
		
	<div class="col-12 sm-col-8 mx-auto px2">
		@php(comments_template('/partials/comments.blade.php'))
	</div>
</div>
</div>
