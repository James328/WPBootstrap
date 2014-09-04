<?php
/*
Template Name: Front Page
*/
get_header(); ?>

    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <?php
        $include = get_pages('include=2');
        $content = apply_filters('the_content',$include[0]->post_content);
        echo $content;
        ?>
      </div>
    </div> <!-- /container -->

    <div class="container">
      <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-6 col-sm-6 col-lg-4">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><em><?php the_time('l, F jS, Y'); ?></em></p>
            <p><?php the_excerpt(); ?></p>
            <p><a class="btn btn-default" href="<?php the_permalink(); ?>" role="button">View details &raquo;</a></p>
          </div><!--/span-->
        <?php endwhile; ?>
      </div><!--/row-->
    </div>

    <div class="container">
      <div style="margin:40px 0;">
        <div class="nav-previous alignleft pull-right"><?php next_posts_link( 'Older posts &raquo;' ); ?></div>
        <div class="nav-next alignright pull-left"><?php previous_posts_link( '&laquo; Newer posts' ); ?></div>
      </div>
    </div>


    <?php else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>