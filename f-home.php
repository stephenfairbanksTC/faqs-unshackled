<?php // get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>

<!-- ROW -->
<div class="row">

	<div class="col-md-8">

		<h1>Latest</h1>

		<?php query_posts( array ('category__in' => array(10, 11, 12, 13), 'posts_per_page' => 10 ) ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
		   <a href="<?php the_permalink(); ?>" title="the_title_attribute();"><h1><?php the_title(); ?></h1></a>
		   <?php the_excerpt(); ?>
		   </article>
		<?php endwhile; endif; ?>

	</div>

	<aside class="sidebar">

		<div class="well">
			<h3>Porting Info</h3>
			<p>Looking to transfer your number to your new phone?</p>
			<p>Check out our guide:</p>
			<a href="<?php bloginfo('url');?>/porting" class="button-yellow">View</a>
		</div>

	</aside>

</div>
<!-- / ROW -->

<?php the_posts_navigation(); ?>
