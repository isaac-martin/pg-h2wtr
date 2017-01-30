<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();
?>
<section class="content-wrapper">
  <div class="container">
    <div class="container-404">
      <h1>404 Error</h1>
      <h3>Sorry the page you are looking for could not be found. <a href="<?php echo get_site_url(); ?>">Go Home?</a> or <a href="<?php echo get_site_url(); ?>/product">Buy some delicous watermelon water?</a></h3>
      <img class="gif-melon" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/gif-melon.gif" />

    </div>
  </div>
</section>

<?php get_footer(); ?>
