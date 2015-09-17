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
	<div id="iconographics" class="grid grid-pad">
		<div class="col-1-1">
			<h2>Quick links</h2>
		</div>
		<div class="col-1-5">
			<nav class="icon-container">
				<a href="#">
					<img src ="<?php echo bloginfo('template_url');?>/theme-images/information-icon.png" alt="" height="100" width="100" />
					<span>Information</span>
				</a>
			</nav>
		</div>
		<div class="col-1-5">
			<nav class="icon-container">
				<a href="#">
					<img src ="<?php echo bloginfo('template_url');?>/theme-images/pics-vids-icon.png" alt="" height="100" width="107" />
					<span>Pictures &amp; Videos</span>
				</a>
			</nav>
		</div>
		<div class="col-1-5">
			<nav class="icon-container">
				<a href="#">
					<img src ="<?php echo bloginfo('template_url');?>/theme-images/news-ads-icon.png" alt="" height="100" width="100" />
					<span>News &amp; Ads</span>
				</a>
			</nav>
		</div>
		<div class="col-1-5">
			<nav class="icon-container">
				<a href="#">
					<img src ="<?php echo bloginfo('template_url');?>/theme-images/results-icon.png" alt="" height="100" width="100" />
					<span>Results</span>
				</a>
			</nav>
		</div>
		<div class="col-1-5">
			<nav class="icon-container">
				<a href="#">
					<img src ="<?php echo bloginfo('template_url');?>/theme-images/links-icon.png" alt="" height="100" width="100" />
					<span>Useful links</span>
				</a>
			</nav>
		</div>
	</div>

	<div id="home-blurb">
		<?php the_content(); ?>
	</div>

<?php endwhile; // End of the loop. ?>

<div class="grid grid-pad">
	<div class="col-1-4">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-9-12">
		<div id="primary" class="content-area">
			<main id="main" class="mcc-news-feed site-main" role="main">


			<?php //https://codex.wordpress.org/Template_Tags/get_posts


			$args = array( 'posts_per_page' => 5 );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<aside>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_excerpt(); ?>
				</aside>

			<?php endforeach; 
			wp_reset_postdata();

			?>



			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

</div>


<?php get_footer(); ?>
