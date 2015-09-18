<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

		<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'minehead-cc' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links to the left (or above), or a search?', 'minehead-cc' ); ?></p>

					<?php get_search_form(); ?>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php get_footer(); ?>