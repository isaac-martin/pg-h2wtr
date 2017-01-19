<?php /* Template Name: Text Page Template */
/**
 * Page Template For Text
 *
 * @package understrap
 */

get_header();?>
<section class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12 offset-md-2">
        <h2 class="text-tpl-header"><?php the_field('page_intro');?></h2>
        <div class="text-tpl-wrap">
          <?php the_field('page_content');?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
