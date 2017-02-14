<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();?>
<section class="content-wrapper content-wrapper-sml">
  <section class="blue-bg home-one inc-svg">
    <div class="melon-container container">
      <div class="row">
        <div class="col-md-16">
          <a class="hidden-sm-up" href="<?php echo get_site_url(); ?>"><img class="main-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/logo-full-col.svg"/></a>
            <img class="home-banner" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/home-banner.png" />
            <div class="text-wrap">
              <h1>Hydrate YOself</h1>
              <button type="button" class="btn btn-primary"><a href="/products">Product</a></button>
            </div>
        </div>
      </div>
    </div>
    <svg class="home-svg"width="100%" height="100%" viewBox="0 0 1600 100" preserveAspectRatio="xMidYMid slice">
        <polygon class="svg-pink" points="0,0 0,100 1600,100 1600,100"></polygon>
    </svg>
  </section>


  <section class="pink-bg-light home-two inc-svg after-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-1">
        <div class="disco-cont">
          <img class="disco-ball" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melon_ball.png" />
          <div class='confetti'>
            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
          </div>
        </div>
    </div>

      <div class="col-md-5 offset-md-3 z-10 mob-pad-override">
        <div class="home-txt-cont text-fade txt-trg-1">
          <h2 class="uppercase">A Good Vibes Drink</h2>
          <p>
            Our melon water is 100% natural watermelon juice, not from concentrate and made from just 1 refreshing ingredient, 100% pure watermelon water. H2melon is focused on giving you that refreshing sensation you need, without all the additives that bring you down. A good vibes drink, H2melon is naturally gluten, lactose and dairy free, so it’s able to be enjoyed by everyone with a thirst for deliciousness.
          </p>
        </div>
          <button type="button" class="btn btn-primary"><a href="/our-story">Our Story</a></button>
      </div>
    </div>
  </div>
  <svg class="home-svg"width="100%" height="100%" viewBox="0 0 1600 100" preserveAspectRatio="xMidYMid slice">
        <polygon class="svg-blue" points="0,100 0,100 1600,0 1600,100"></polygon>  				</svg>
  </section>

  <section class="blue-bg home-three inc-svg">
    <div class="container">
      <div class="row">
        <div class="col-md-4 pad-top text-fade txt-trg-2">
          <h2 class="uppercase">Your dehydration salvation</h2>
          <p>
            H2melon has all the electrolytes needed for you to bounce back from a night cutting shapes, with the added boost of L-Citrulline, a fruity little amino acid which aids muscle recovery. Limber up with us and we’ll get you back on the dancefloor!
          </p>
          <!-- <button type="button" class="btn btn-primary"><a href="/shop">Product</a></button> -->

        </div>
        <div class="col-md-4 offset-md-1 pad-top text-fade txt-trg-2">
          <h2 class="uppercase">Superfood Alert!</h2>
          <p>
            We heart watermelon, and you should too because  natural watermelon juice is packed with vitamin C and Lycopene. Lyco-who?! Lycopene is a carotenoid phytonutrient, a super powerful antioxidant which is great for your insides. So the benefits of watermelon packed inside H2melon’s watermelon drink are good for you, and for your taste buds. What a superfood!
          <!-- <button type="button" class="btn btn-primary"><a href="/shop">Product</a></button> -->

        </div>
        <div class="col-md-7">
          <div class="melon-type-cont">
            <img class="melon-slice slide-btm" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melon.png" />
            <img class="type-fresh animate-bounce" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type_fresh.svg" />
            <img class="type-healthy animate-float" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type_healthy.svg" />
            <img class="type-juicy animate-rotate" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type-juicy.svg" />
            <img class="type-heart" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type-heart.png" />
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="img-bg home-four inc-svg">
  <div class="container">
    <div class="row">
      <div class="col-md-5 offset-md-11">
        <div class="home-txt-cont txt-trg-3">
          <h2 class="t-red">Restore the fun</h2>
          <p class="large-p">
Craving that tropical holiday vibe, but the grind is getting you down? Kick back with H2melon and soak up the summer straight out the bottle.          </p>
        </div>
        <!-- <span class="buy-icon"><a href="#"></a></span> -->
        <button type="button" class="btn btn-primary"><a href="/products">Product</a></button>

      </div>
    </div>
  </div>
  <!-- <svg class="home-svg svg-top" width="100%" height="100%" viewBox="0 0 1600 100" preserveAspectRatio="xMidYMid slice">
      <polygon class="svg-blue" points="0,0 0,0 1600,100 1600,0"></polygon>  </svg> -->
  <img class="drink-carton hidden-sm-down" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/product_500ml.png" />
  </section>
</section><!--content-wrapper-->

<?php
require get_template_directory() . '/newsletter-pop.php';
get_footer(); ?>
