<<<<<<< HEAD
@include('partials.nav.main')

@if(isset($breadcrumbs))
<div class="breadcrumbs-container">
	<div class="container mx-auto">
		<div class="clearfix">
			<div class="col col-12 px2">
				@include('partials.components.breadcrumbs')
			</div>
		</div>
	</div>
</div>
@endif
=======
@include('partials.nav-site')
@include('partials.breadcrumbs')
>>>>>>> master
