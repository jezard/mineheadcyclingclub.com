<?php
/*
Template Name: Homepage template
*/

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
	<div class="hide-on-mobile">
		<div class="home-feature-image">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
			?>
		</div>
	</div>
	<div id="iconographics">

	</div>

	<div class="grid grid-pad">
		<div class="col-1-1">
			<?php the_content(); ?>
		</div>
	</div>

<?php endwhile; // End of the loop. ?>

<div class="grid">
	<div class="col-1-4">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-3-4">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

</div>


<?php get_footer(); ?>
