<?php
/*
Template Name: Search
*/
get_header(); ?>

<div class="row main-container">
	<div class="container">
	  <div class="col-md-8">

	  	<h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
	    <p><?php the_excerpt(); ?></p>
	    <hr>

		<?php endwhile; ?>

    <div class="container">
      <div class="nav-previous alignleft pull-right"><?php next_posts_link( 'Older posts &raquo;' ); ?></div>
      <div class="nav-next alignright pull-left"><?php previous_posts_link( '&laquo; Newer posts' ); ?></div>
    </div>

    <?php else : ?>
    	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

	  </div>
	  <div class="col-md-4">
	  	<?php get_sidebar(); ?>	
	  </div>
	</div>
</div>

<?php get_footer(); ?>