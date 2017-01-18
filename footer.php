<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>


<footer class="site-footer" id="colophon">
	<div class="footer-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'menu_class'      => 'footer-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div>

				<div class="col-md-4">
					<a href="<?php echo get_site_url(); ?>"><img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/logo-white.svg"/></a>
				</div>

				<div class="col-md-3">
					Newsletter Signup
				</div>
				<div class="col-md-3">
					Soical icons
				</div>

			</div><!-- row end -->

		</div><!-- container end -->
	</div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
