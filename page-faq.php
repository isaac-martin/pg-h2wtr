<?php
/**
 * The template for FAQ pages.
 *
 *
 * @package understrap
 */

 get_header();?>

 <section class="content-wrapper">
   <div class="container">
     <img class="melon-top" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melons-top.png" alt="Fresh Watermelon cut into pieces" />
     <img class="melon-btm" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melons-btm.png" alt="Watermelon's Cut in Pieces - Bottom Image" />
     <div class="row">
       <div class="col-md-12 offset-md-2 mrg-btm-xl">
         <h2 class="text-tpl-header uppercase"><?php the_field('page_intro');?></h2>
         <h3 class="text-tpl-header uppercase"><?php the_field('page_subheading');?></h3>

         <?php if( have_rows('questions') ): $i = 0; ?>
           <div id="accordion" class="faq-accordion" role="tablist" aria-multiselectable="true">

             <?php while( have_rows('questions') ): the_row(); $i++;
               $question = get_sub_field('question');
   		      $answer = get_sub_field('answer');
               ?>

               <div class="card">
                 <div class="card-header" role="tab" id="headingOne">
                     <span data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                       <img class="melon-h" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melon-image.png" alt="Watermelon Piece Small" />
            <?php echo $question; ?>
                    </span>
                 </div>

                 <div id="collapse-<?php echo $i; ?>" class="collapse content" role="tabpanel" aria-labelledby="headingOne">
                      <?php echo $answer; ?>
                 </div>
              </div><!-- End Card -->

            <?php endwhile; ?>
          </div><!-- End Accordion -->

       <?php endif; ?>
       </div>
     </div>
   </div>

   <div class="bottom-section inc-svg img-bg hidden-sm-down">
     <svg class="home-svg svg-top" width="100%" height="100%" viewBox="0 0 1600 100" preserveAspectRatio="xMidYMid slice">
           <polygon class="svg-blue" points="0,0 0,100 1600,0 1600,0"></polygon>
     </svg>
       <img class="type" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/immerse.svg" />
     <img class="drink-carton" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/product_500ml.png" alt="H2Melon Watermelon Juice 500ml Product Image" />
     </div>
   </div>
 </section>
  <?php get_footer(); ?>
