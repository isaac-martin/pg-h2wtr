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
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//h2melon.us12.list-manage.com/subscribe/post?u=15a1ba46f2ef3436777ccec17&amp;id=36e7be12c9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">

						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_15a1ba46f2ef3436777ccec17_36e7be12c9" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Newsletter" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div><!--End mc_embed_signup-->
				</div>
				<div class="col-md-3">
				<ul class="social-media-icons align-self-center">
					<li><a href="<?php the_field('instagram_url', 'options')?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('facebook_url', 'options')?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('twitter_url', 'options')?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
				</div>

			</div><!-- row end -->

		</div><!-- container end -->
	</div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
