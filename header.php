<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="<?php echo get_template_directory_uri(); ?>/assetts/favicon.ico" rel="shortcut icon">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<div class="mobile-nav hidden-lg-up">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
  </button>
								<?php wp_nav_menu(
						array(
							'theme_location'  => 'mobile',
							'container_class' => 'collapse navbar-collapse mobile-menu',
							'container_id'    => 'mobile-menu',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'mobile-items',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					); ?>
	</div>

	<div class="mini-nav hidden-md-down">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'mini',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'mini-menu',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div>
				<div class="col-md-7">
					<p>
						<?php echo get_bloginfo( 'description' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>


	<!-- ******************* The Navbar Area ******************* -->

	<div class="wrapper-info-bar full-w pink-bg-drk hidden-md-down">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<a class="account-link" href="/my-account">My Account</a>
				</div>
				<div class="col-md-8">
					<div class="info-bar-inner right">
						<p><?php the_field('general_text','options')?></p>
						<?php if(get_field('button_link','options') == 'page'):
						        $linkURL = get_field('page','options');
						    else:
						        $linkURL = get_field('link','options');
						    endif; ?>
								<button type="button" class="btn btn-secondary"><a href="<?php echo $linkURL; ?>"><?php the_field('button_text','options');?></a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-fluid wrapper-navbar hidden-md-down" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md">

			<div class="<?php echo esc_html( $container ); ?>">
				<div class="row align-items-center">
					<div class="col-md-6">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>

					<div class="col-md-4">
						<a href="<?php echo get_site_url(); ?>"><img class="main-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/logo-full-col.svg" alt="H2Melon Watermelon Juice Top Half of Logo"/></a>
					</div>

					<div class="col-md-4">
						<p class="tagline">
							<?php echo get_bloginfo( 'description' ); ?>
						</p>
					</div>

					<div class="col-md-2">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'shopping-header',
								'menu_id'         => 'shopping-menu',
								'menu_class'      => 'shop-nav align-items-end'
								// 'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>


				 </div><!-- .row -->
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
