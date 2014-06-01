<?php
/*
Template Name: Single
The single post template. Used when a single post is queried. For this and all other query templates, index.php is used if the query template is not present.
*/
get_header(); ?>

<div class="row main-container">
	<div class="container">
	  <div class="col-md-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p><em><?php the_time('l, F jS, Y'); ?></em></p>

		  	<?php the_content(); ?>

		  	<hr>
			<?php comments_template(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>

	  </div>
	  <div class="col-md-4">
	  	<?php get_sidebar(); ?>	
	  </div>
	</div>
</div>

<?php get_footer(); ?>