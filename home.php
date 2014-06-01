<?php
/*
Template Name: Home
The home page template, which is the front page by default. If you use a static front page this is the template for the page with the latest posts.
*/
get_header(); ?>

<div class="row main-container">
	<div class="container">
	  <div class="col-md-8">

	  <!-- <h1>The News</h1> -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<p class="h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
	    <hr>


		<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>

	  </div>
	  <div class="col-md-4">
	  	<?php get_sidebar(); ?>	
	  </div>
	</div>
</div>

<?php get_footer(); ?>