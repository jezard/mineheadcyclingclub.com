<?php
/*
Template Name: Narrow-main template
*/


get_header(); ?>

<div class="grid grid-pad">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class-"col-1-1">
			<h1 class="page-type"><?php the_title(); ?></h1>
			<div id="mcc-featured-image">
				<?php

					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail();
					} 

				?>
			</div>
		</div>

	<?php endwhile; // End of the loop. ?>
	

	<div id="mcc-sidebar" class="col-1-4">
		<div id="mob-find-more">Find More Articles &raquo;</div>
		<?php get_sidebar(); ?>
	</div>

	<div id="primary" class="col-9-12 content-area">
		<main id="main" class="site-main mcc-page" role="main" style="max-width:600px">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php get_footer(); ?>