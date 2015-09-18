<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package minehead_cc
 */



get_header(); ?>

<div class="grid grid-pad">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class-"col-1-1"><h1 class="page-type"><?php the_title(); ?></h1>
		<?php

			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 

		?>
		</div>

	<?php endwhile; // End of the loop. ?>
	

	<div class="col-1-4">
		<?php get_sidebar(); ?>
	</div>

	<div id="primary" class="col-9-12 content-area">
		<main id="main" class="site-main mcc-page" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php get_footer(); ?>
