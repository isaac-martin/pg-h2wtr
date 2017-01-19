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
     <div class="row">
       <div class="col-md-12 offset-md-2">
         <h2 class="text-tpl-header"><?php the_field('page_intro');?></h2>

         <?php if( have_rows('questions') ): $i = 0; ?>
           <div id="accordion" role="tablist" aria-multiselectable="true">

             <?php while( have_rows('questions') ): the_row(); $i++;
               $question = get_sub_field('question');
   		      $answer = get_sub_field('answer');
               ?>

               <div class="card">
                 <div class="card-header" role="tab" id="headingOne">
                   <h5>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                       <?php echo $question; ?>
                     </a>
                   </h5>
                 </div>

                 <div id="collapse-<?php echo $i; ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                   <div>
                      <?php echo $answer; ?>
                   </div>
                 </div>
               </div>

            <?php endwhile; ?>
          </div><!-- End Accordion -->

       <?php endif; ?>


       </div>
     </div>
   </div>
 </section>
 <?php get_footer(); ?>
