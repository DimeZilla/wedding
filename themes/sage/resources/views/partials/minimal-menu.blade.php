<div class="minimal-menu position-fixed bounce">
  <div class="minimal-menu-menu d-none mb-3 bg-secondary rounded py-3">
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-dark flex-column px-2']) !!}
  </div>
  <button class="btn btn-lg btn-secondary rounded-circle menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></button>
</div>
