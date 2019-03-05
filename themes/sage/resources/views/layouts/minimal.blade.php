<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp

    <main class="main">
      @yield('content')
    </main>

    @include("partials.minimal-menu")

    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
  </body>
</html>
