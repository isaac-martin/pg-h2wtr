<?php /* Template Name: Text Page Template */
/**
 * Page Template For Text
 *
 * @package understrap
 */

get_header();?>
<section class="content-wrapper">
  <div class="container">
    <img class="melon-top" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melons-top.png" />
    <img class="melon-btm" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melons-btm.png" />
    <div class="row">
      <div class="col-md-12 offset-md-2 mrg-btm">
        <h2 class="text-tpl-header"><?php the_field('page_intro');?></h2>
        <div class="text-tpl-wrap">
          <?php the_field('page_content');?>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom-section inc-svg img-bg">
    <svg class="home-svg svg-top" width="100%" height="100%" viewBox="0 0 1600 100" preserveAspectRatio="xMidYMid slice">
          <polygon class="svg-blue" points="0,0 0,100 1600,0 1600,0"></polygon>
    </svg>
    <img class="drink-carton" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/carton.png" />
    </div>
  </div>
</section>
<?php get_footer(); ?>
