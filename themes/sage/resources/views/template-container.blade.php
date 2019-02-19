{{--
  Template Name: Contain
--}}
@extends('layouts.minimal')

@section('content')
  <div class="container">
    @while(have_posts())
      @php the_post() @endphp
      @if (App::getField('show_page_header'))
        @include('partials.page-header')
      @endif
      @include('partials.content-page')
    @endwhile
  </div>
@endsection
