 {{--
	Template Name: Single Post
	Controller: Single
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content.'.get_post_type())
  @endwhile
@endsection
