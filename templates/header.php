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
      <a class="brand navbar-brand" href="<?php bloginfo('url'); ?>"><span class="sr-only">UNSHACKLED.com</span><h3 class="">FAQs</h3></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <?php
      if (has_nav_menu('primary_navigation')) :

            wp_nav_menu( array(
                'menu'              => 'primary_navigation',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'nav',
                'container_class'   => 'collapse navbar-collapse main-nav',
                'container_id'      => 'faq-nav-collapse',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
      endif;
      ?>
  </div><!-- /.container -->
</header>
