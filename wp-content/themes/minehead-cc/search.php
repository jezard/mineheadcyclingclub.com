<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package minehead_cc
 */




get_header(); ?>


<div class="grid grid-pad">
	<div class-"col-1-1"><span class="page-type">Club Articles</span></div>
	<div id="mcc-sidebar" class="col-1-4">
		<div id="mob-find-more">Find More Articles &raquo;</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="col-9-12">
		<div id="primary" class="content-area">
			<main id="main" class="mcc-news-feed site-main" role="main">


			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'minehead-cc' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>



			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

</div>
<?php get_footer(); ?>