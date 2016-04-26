<header class="banner">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#faq-nav-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand navbar-brand" href="#"><span class="sr-only">UNSHACKLED.com</span><h3 class="">FAQs</h3></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <nav class="main-nav collapse navbar-collapse" id="faq-nav-collapse">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </nav><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</header>
