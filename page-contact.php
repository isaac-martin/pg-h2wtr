<?php
/**
 * Page Template For Text
 *
 * @package understrap
 */

get_header();?>
<section class="content-wrapper">
  <div class="container">
    <div class="row melon-slice-btm">
      <div class="col-md-16">
        <h1 class="text-center">GIVE US A HIGH 5</h1>
      </div>
      <div class="col-md-6 offset-md-2 mrg-btm">

          <p class="contact-wrap">
            <span class="contact-label">PHONE</span>
            <span class="contact-info">1800 422 626</span>
            <span class="contact-label">EMAIL</span>
            <span class="contact-info"><a href=mailto:yo@h2melon.com>YO@H2MELON.COM</a></span>
            <span class="contact-label">ADDRESS</span>
            <span class="contact-info">H2COCO Pty Ltd, 34 Fitzroy Street, Surry Hills, Sydney, NSW 2010, Australia</span>
          </p>
      </div>
      <div class="col-md-6">
        <h2 class="text-center">Use the below form to contact us</h2>
        <?php gravity_form(1, false, false, false, '', true, 12); ?>
      </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
