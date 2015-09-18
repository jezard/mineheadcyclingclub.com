<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package minehead_cc
 */

get_header(); ?>

<div id="blog-content" class="grid grid-pad">
	<div class-"col-1-1"><span class="page-type">Club Article</span></div>

	<div class="col-1-4">
		<?php get_sidebar(); ?>
	</div>

	<div id="primary" class="col-9-12 content-area">
		<main id="main" class="site-main mcc-news-article" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php

			$args = wp_parse_args( $args, array(
		        'prev_text'          => '&laquo; %title',
		        'next_text'          => '%title &raquo;',
		        'screen_reader_text' => __( 'Post navigation' ),
		    ) );


			the_post_navigation($args); 
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php get_footer(); ?>
