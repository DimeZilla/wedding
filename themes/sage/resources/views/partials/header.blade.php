<header class="banner d-lg-none bg-primary">
  <div class="container-fluid">
    <div class="row py-4">
      <div class="col-6">
        @include('partials.brand')
      </div>
      <div class="col-6">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav justify-content-end navbar-dark']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
  <hr>
</header>
