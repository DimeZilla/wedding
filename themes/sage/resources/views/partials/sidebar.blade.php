
@include('partials.brand')

<nav class="nav-primary py-3">
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-dark flex-column pl-3']) !!}
  @endif
</nav>
