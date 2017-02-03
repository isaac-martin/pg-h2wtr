<?php
/**
 * Page Template For Text
 *
 * @package understrap
 */

get_header();?>
<section class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12 offset-md-2 mrg-btm">
        <h2 class="text-tpl-header">Say Hello</h2>
          <p>PHONE 1800 422626
              EMAIL YO@H2MELON.COM
ADDRESS
H2COCO Pty Ltd, 34 Fitzroy Street, Surry
Hills, Sydney, NSW 2010, Australia</p>
<?php gravity_form(1, false, false, false, '', true, 12); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
