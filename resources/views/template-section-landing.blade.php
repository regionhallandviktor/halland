{{--
	Template Name: Section Landing
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
<div>
	<h1>{!! get_the_title() !!}</h1>
</div>

<div>
	<h2>Topplänkar för dig</h2>
	<i>Här hittar du de mest populära länkarna</i>
	<ul>
		@if($top_links)
			@foreach($top_links as $key => $top_link)
				@if($top_link["external_link_toggle"])
					<li class="link--external"><a href="{{ $top_link["external_link"]["link"] }}">{{ $top_link["external_link"]["link_label"] ? $top_link["external_link"]["link_label"] : $top_link["external_link"]["link"]}}</a></li>
				@else
					<li class="link--internal"><a href="{{ get_permalink($top_link["internal_link"]["link"][0]->ID) }}">{{ $top_link["internal_link"]["link_label"] ? $top_link["internal_link"]["link_label"] : $top_link["internal_link"]["link"][0]->post_title }}</li>
				@endif
			@endforeach
		@endif
	</ul>
</div>

<h2>Om {!! get_the_title() !!}</h2>
@php(the_content())
<div class="px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<main class="col col-12 px2">
				<div class="col col-12 mb3">
					@include('partials.nav-section')
				</div>
			</main>
		</div>
	</div>
</div>
@endwhile


@endsection
