<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><span class="sr-only">UNSHACKLED.com</span><h3 class="">FAQs</h3></a>

    <nav class="main-nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </nav>
  </div>
</header>
