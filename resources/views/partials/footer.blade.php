<footer class="footer px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<ul class="col col-12 md-col-3 px2 mt4">
				<header class="h3">Innehåll</header>
				@foreach($nav_site as $topLevelPage)
					<li class="mt2 block">
						<a href="{{ get_page_link($topLevelPage->ID) }}">{{ $topLevelPage->post_title }}</a>
					</li>
				@endforeach
			</ul>

			<ul class="col col-12 md-col-3 px2 mt4">
				<header class="h3">Hitta snabbt</header>
				<li>
					<a class="mt2 block" href="">Nyheter</a>
				</li>
			</ul>

			<ul class="col col-12 md-col-3 px2 mt4">
				<header class="h3">Driftinformation</header>
				<li>
					<a class="mt2 block" href="">Länktext hit</a>
				</li>
				<li>
					<a class="mt2 block" href="">Länktext hit</a>
				</li>
			</ul>

			<ul class="col col-12 md-col-3 px2 mt4">
				<header class="h3">Om webbplatsen</header>
				<li>
					<a class="mt2 block" href="">Anmäl fel</a>
				</li>
				<li>
					<a class="mt2 block" href="">Cookies & Användarvillkor</a>
				</li>
			</ul>
		</div>
	</div>
</footer>
@php(wp_footer())