<?php
/**
 * The template for FAQ pages.
 *
 *
 * @package understrap
 */

 get_header();?>

 <section class="content-wrapper content-wrapper-sml cloud-bg">
   <div class="container">
     <div class="row">
       <div class="col-md-12 offset-md-2 mrg-btm-xl padding-top">
         <h1 class="text-center">92% water. 100% fun.</h1>
         <h2 class="text-center">We love our melons as much as you do.</h2>
         <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/8b2bd02ce07a5acb9caf2566c0c63ab2.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
         <a class="pink-btn" target="_blank" href="<?php the_field('instagram_url', 'options')?>">Roll with us @h2melonwater</a>
       </div>
     </div>
   </div>
 </section>
  <?php get_footer(); ?>
