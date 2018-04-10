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
		@foreach($top_links as $key => $top_link)
			@if($top_link["external_link_toggle"])
				<li><a href="{{ $top_link["external_link"] }}">{{ $top_link["link_label"] ? $top_link["link_label"] : $top_link["external_link"]}}</a></li>
				@else
				<li><a href="{{ $top_link["link"] }}">{{ $top_link["link_label"] ? $top_link["link_label"] : $top_link["link"]}}</li>
			@endif
		@endforeach
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
