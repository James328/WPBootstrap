<?php
/*
Template Name: Archives
The archive template. Used when a category, author, or date is queried. Note that this template will be overridden by category.php, author.php, and date.php for their respective query types.
*/
get_header(); ?>

<div class="row main-container">
	<div class="container">
	  <div class="col-md-8">

			<p class="h2">Archives by Month:</p>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
			
			<p class="h2">Archives by Subject:</p>
			<ul>
				 <?php wp_list_categories(); ?>
			</ul>

			<p class="h2">All Posts Alphabetically:</p>
			<ul>
				<?php wp_get_archives('type=alpha'); ?>
			</ul>

	  </div>
	  <div class="col-md-4">
	  	<?php get_sidebar(); ?>	
	  </div>
	</div>
</div>

<?php get_footer(); ?>