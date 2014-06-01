<?php
/*
Template Name: Page
The page template. Used when an individual Page is queried.
*/
get_header(); ?>

<div class="row main-container">
	<div class="container">
	  <div class="col-md-12">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<hr />
		  <?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>

	  </div>
	</div>
</div>

<?php get_footer(); ?>