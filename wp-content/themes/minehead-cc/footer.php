<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minehead_cc
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-container" class="grid grid-pad">
			<div class="col-1-2 site-info">
				<span><strong>&copy; Minehead CC <?php echo date("Y"); ?></strong></span>
				<br>
				<small>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'minehead-cc' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'minehead-cc' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'minehead-cc' ), 'Minehead CC', '<a href="http://wizard.technology" rel="designer">Jeremy Summers</a>' ); ?>
				</small>
			</div><!-- .site-info -->
			<div class="col-1-2 footer-link-img">
				<img src="<?php echo bloginfo('template_url');?>/theme-images/footer-link-image.png" width="289" height="37" usemap="#Map" border="0" target="_blank" />
				<map name="Map" id="Map">
				  <area shape="rect" coords="-3,1,44,37" href="http://www.cyclingtimetrials.org.uk/events" target="_blank" alt="Cycling Time Trials" />
				  <area shape="rect" coords="80,-1,205,38" href="http://www.goskyride.com/" target="_blank" alt="go-ride" />
				  <area shape="rect" coords="230,-3,293,37" href="http://www.ctc.org.uk/" target="_blank" />
				</map>
			</div>
		</div>
	</footer><!-- #colophon -->
</div> <!-- page -->

<?php wp_footer(); ?>

</body>
</html>
