<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">

      <?php
      // IF IT'S NOT THE PORTING PAGE
      if(!is_single('Porting')) { ?>
        <?php the_content(); ?>
      <?php
      // ELSE IF IT'S THE PORTING PAGE
      } else { ?>


      <?php 
        // 1ST SECTION OF CONTENT
        the_content();
      ?>


      <!-- SELECT THE NETWORKS INFO FOR PORTING INTO -->
      <div id="porting-select-1" class="select-wrapper">
       <select class="form-control">
       
       <option disabled selected value>Porting from old network...</option>

      <?php
      $args = array( 'post_type' => 'porting-info', 'posts_per_page' => 100, 'orderby'=> 'title', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        $i = 0;
      if ( $loop->have_posts() ) { 
        while ( $loop->have_posts() ) { 
          $loop->the_post();?>
          
          <option value="option-<?php  echo $i; ?>">
            <?php  the_title(); ?>
          </option>

        <?php $i++; }
      }
      wp_reset_postdata();
      ?>
      </select>
      </div>
      <!-- / SELECT THE NETWORKS INFO FOR PORTING INTO -->


      <!-- RESULTING DATA FROM SELECTED DROPDOWN -->
      <div id="porting-results-1">
      <?php
      $args = array( 'post_type' => 'porting-info', 'posts_per_page' => 100, 'orderby'=> 'title', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        $i = 0;
      if ( $loop->have_posts() ) { 
        while ( $loop->have_posts() ) { 
          $loop->the_post();?>
          
          <div id="option-<?php echo $i; ?>" class="well porting-info">
          <h2><?php the_title(); ?></h2>
            
          <h5>Get your PAC:</h5>
            <p>
              <?php
              // GET DATA
              $value = get_field( "get_your_pac" );
              if( $value ) {
                  echo $value;
              } else {
                  echo 'empty';
              } ?>
            </p>
          </div>

        <?php $i++; }
      }
      wp_reset_postdata();
      ?>
      </div>
      <!-- / RESULTING DATA FROM SELECTED DROPDOWN -->




      <?php
      // 2ND SECTION OF CONTENT
      $value = get_field( "porting_page_content_2" );
      if( $value ) {
          echo $value;
      } else {
          echo 'empty';
      } ?>


     <!-- SELECT THE NETWORKS INFO FOR PORTING FROM -->
      <div id="porting-select-2" class="select-wrapper">
       <select class="form-control">
       
       <option disabled selected value>Porting into new network...</option>

      <?php
      $args = array( 'post_type' => 'porting-info', 'posts_per_page' => 100, 'orderby'=> 'title', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        $i = 0;
      if ( $loop->have_posts() ) { 
        while ( $loop->have_posts() ) { 
          $loop->the_post();?>
          
          <option value="option-<?php  echo $i; ?>">
            <?php  the_title(); ?>
          </option>

        <?php  $i++;  }
      }
      wp_reset_postdata();
      ?>
      </select>
      </div>
      <!-- / SELECT THE NEWTORKS INFO FOR PORTING INTO -->

      <!-- RESULTING DATA FROM SELECTED DROPDOWN -->
      <div id="porting-results-2">
      <?php
      $args = array( 'post_type' => 'porting-info', 'posts_per_page' => 100, 'orderby'=> 'title', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        $i = 0;
      if ( $loop->have_posts() ) { 
        while ( $loop->have_posts() ) { 
          $loop->the_post();?>
          
          <div id="option-<?php  echo $i; ?>" class="well porting-info">
          <h2><?php the_title(); ?></h2>
            
            <h5>What's needed:</h5>
            <p>
              <?php
              // GET DATA
              $value = get_field( "whats_needed" );
              if( $value ) {
                  echo $value;
              } else {
                  echo 'empty';
              } ?>
            </p>

            <h5>Porting into:</h5>
            <p>
              <?php
              // GET DATA
              $value = get_field( "porting_into" );
              if( $value ) {
                  echo $value;
              } else {
                  echo 'empty';
              } ?>
            </p>

            <h5>Activate your new SIM:</h5>
            <p>
              <?php
              // GET DATA
              $value = get_field( "activate_your_new_sim" );
              if( $value ) {
                  echo $value;
              } else {
                  echo 'empty';
              } ?>
            </p>
          </div>


        <?php $i++; }
      }
      wp_reset_postdata();
      ?>
      </div>
      <!-- / RESULTING DATA FROM SELECTED DROPDOWN -->


      <?php 
      // 3RD SECTION OF CONTENT
      $value = get_field( "porting_page_content_3" );
      if( $value ) {
          echo $value;
      } else {
          echo 'empty';
      } ?>


      <?php } // END IF PORTING PAGE ?>

    
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
