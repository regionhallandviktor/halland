@if(isset($nav_site))
<header class="site-nav">
	<nav class="site-nav-top">
		<div class="site-nav__container">
			<a class="site-nav__logo" href="{{ esc_url( home_url( '/' ) ) }}">
				<img src="@asset('images/navigation_logo.svg')">
			</a>
			<ul class="site-nav__utilities">
				<li class="site-nav__icon-btn">
					<button class="icon-button site-nav__search-btn" href="#">
						<svg class="icon">
							<use xlink:href="#magnifying-glass"/>
						</svg>
					</button>
				</li>
				<li class="main-nav__icon-btn">
					<button class="icon-button site-nav__menu-btn" href="#">
						<svg class="icon">
							<use xlink:href="#menu"/>
						</svg>
					</button>
				</li>
			</ul>
		</div>
	</nav>
	<nav class="site-nav-bottom">
		<div class="site-nav__container">
			<ul class="site-nav__list">
				@foreach ($nav_site as $item)
					<li class="site-nav__item @if ($item->is_current) active @endif">
					<a class="site-nav__link" href="{{ $item->url }}">{!! $item->title !!}</a>
				</li>
				@endforeach
			</ul>
			<a href="#" class="site-nav__show-more-btn">
				<span>Visa alla</span>
				<svg class="icon icon--sm"><use xlink:href="#caret-right"/></svg>
			</a>
			</div>
		</div>
	</nav>
</header>
<nav class="dropdown">
	<div class="dropdown__container">
		
		<div class="dropdown__col">
			<header class="dropdown__header">Medicinska områden</header>
			<ul class="dropdown__list">
				<li class="dropdown__item has-sublist">
					<a href="#" class="dropdown__link">Medicinska områden</a>
					<button class="dropdown__toggle-btn">
						<svg class="icon--sm">
							<use xlink:href="#caret-bottom"/>
						</svg>
					</button>
					<ul class="dropdown__sublist">
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Nära vård</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Akut vård</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Infektionssjukdomar</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Cancersjukdomar</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Endokrina sjukdomar</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Psykisk hälsa</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="dropdown__col">
			<header class="dropdown__header">Patientadministration</header>
			<ul class="dropdown__list">
				<li class="dropdown__item has-sublist">
					<a href="#" class="dropdown__link">Patientadministration</a>
					<button class="dropdown__toggle-btn">
						<svg class="icon--sm">
							<use xlink:href="#caret-bottom"/>
						</svg>
					</button>
					<ul class="dropdown__sublist">
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Avvikelsehantering</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Beläggningsöversikt</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Avgiftshandboken</a>
						</li>
						<li class="dropdown__item has-sublist">
							<a href="#" class="dropdown__link">Patientens rättigheter</a>
							<button class="dropdown__toggle-btn">
								<svg class="icon--sm">
									<use xlink:href="#caret-bottom"/>
								</svg>
							</button>
							<ul class="dropdown__sublist">
								<li class="dropdown__item">
									<a href="#" class="dropdown__link">Patientlagen</a>
								</li>
								<li class="dropdown__item">
									<a href="#" class="dropdown__link">Valfrihet väntetider</a>
								</li>
							</ul>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Patientnära rutiner</a>
						</li>
						<li class="dropdown__item">
							<a href="#" class="dropdown__link">Asylsökande och patienter utan tillstånd</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
@endif