{{--
	Template Name: Section
--}}

@extends('layouts.app')

@section('content')
<div class="px2 py4 background-gradient-blue">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 mt4 mb5 px2">
				<header>
					<h1 class="text-white mb0">{!! get_the_title() !!}</h1>
				</header>
			</div>
		</div>
	</div>
</div>

<div class="px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<main class="col col-12 px2">
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