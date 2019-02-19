@extends('layouts.minimal')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @if (App::getField('show_page_header'))
      @include('partials.page-header')
    @endif
    @include('partials.content-page')
  @endwhile
@endsection
