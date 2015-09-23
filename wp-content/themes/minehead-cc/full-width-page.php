<?php
/*
Template Name: Full-width template
*/



get_header(); ?>

<div class="grid grid-pad">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class-"col-1-1"><h1 class="page-type"><?php the_title(); ?></h1>
			<div id="mcc-featured-image">
				<?php

					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail();
					} 

				?>
			</div>
		</div>

	<?php endwhile; // End of the loop. ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="col-1-1 site-main mcc-page" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php get_footer(); ?>
