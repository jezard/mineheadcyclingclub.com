<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minehead_cc
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,800,700,400italic,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<script src="https://use.typekit.net/wrf3urk.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- Don't forget to change typekit domin -->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site" style="display:inline">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'minehead-cc' ); ?></a>

	<header id="masthead" class="site-header" role="banner" >
		<div class="menu-container">
			<div class="grid">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'minehead-cc' ); ?></button> -->
					<div class="nav-image-container"><img src="<?php echo bloginfo('template_url');?>/theme-images/menu-icon.png" /></div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form( true ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
		<!-- if home, add the full width image -->
		<div id="branding" class="branding-container" style="background: url(<?php echo bloginfo('template_url');?>/theme-images/header-bg.png);background-position: center top;">
			<div class="grid">
				<div class="site-branding">
					<div class="col-2-5">

						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

					</div>
					<div id="site-logo" class="col-1-5">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'description' ); ?>"><img src="<?php echo bloginfo('template_url');?>/theme-images/mcc-site-logo.png" /></a>
					</div>
					<div id="bcf-logo" class="col-2-5">
						<a href="https://www.britishcycling.org.uk/" title="British Cycling Affiliated Club" target="_blank" ><img src="<?php echo bloginfo('template_url');?>/theme-images/bcf-logo.png" alt="British Cycling Affiliated Club" /></a>
					</div>
				</div><!-- .site-branding -->
			</div>
		</div>


		
	</header><!-- #masthead -->

	<div id="content" class="grid site-content">
