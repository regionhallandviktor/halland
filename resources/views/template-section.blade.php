{{--
	Template Name: Section
--}}

@extends('layouts.app')

@section('content')
<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<main class="col col-12 px2">
				<div class="col col-12 mb4">
					<header>
						<h1>{!! get_the_title() !!}</h1>
					</header>

					@include('partials.content-page')

				</div>

				<div class="col col-12 mb3">
					@include('partials.nav-section')
				</div>

				@if (is_active_sidebar('sidebar-bottom'))
				<div class="col col-12">
					@include('partials.sidebar-bottom')
				</div>
				@endif
			</main>	
		</div>
	</div>
</div>

@endsection