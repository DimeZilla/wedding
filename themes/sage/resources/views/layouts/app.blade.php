<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="main-sidebar bg-primary position-fixed d-none d-lg-block h-100 border-right">
      @include('partials.sidebar')
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="main-content wrap col pt-5" role="document">
          <main class="main px-3">
            @yield('content')
          </main>
        </div>

      </div>
    </div>

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
