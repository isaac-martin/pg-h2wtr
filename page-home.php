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
<section class="content-wrapper">
  <section class="blue-bg home-one inc-svg">
    <div class="melon-container container">
      <div class="row">
        <div class="col-md-16">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/home-banner.png" />
          <div class="text-wrap">
            <h1>Hydrate YOself</h1>
            <button type="button" class="btn btn-primary"><a href="/shop">Shop</a></button>
          </div>

        </div>
      </div>
    </div>
    <svg class="home-svg"width="100%" height="100%" viewBox="0 0 1600 100" preserveAspectRatio="xMidYMid slice">
                <polygon class="svg-pink" points="0,0 0,100 1600,100 1600,100"></polygon>
            </svg>
  </section>


  <section class="pink-bg-light home-two inc-svg">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="disco-cont">
          <img class="straw animate-bounce" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/straw.png" />
          <img class="disco-ball" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melon-ball.png" />
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

      <div class="col-md-5 offset-md-4 z-10">
        <div class="home-txt-cont">
          <h2>A Good Vibes Drink</h2>
          <p>
            Our melon water is 100% natural, not from concentrate and made from just 1 refreshing ingredient, 100% pure watermelon water. H2Melon is focused on giving you that refreshing sensation you need, without all the additives that bring you down. A good vibes drink, H2Melon is naturally gluten, lactose and dairy free, so it’s able to be enjoyed by everyone with a thirst for deliciousness.
          </p>
        </div>
          <button type="button" class="btn btn-primary"><a href="/our-story">Our Story</a></button>
      </div>
    </div>
  </div>
  <svg class="home-svg"width="100%" height="100%" viewBox="0 0 1600 100" preserveAspectRatio="xMidYMid slice">
        <polygon class="svg-blue" points="0,100 0,100 1600,0 1600,100"></polygon>  				</svg>
  </section>

  <section class="blue-bg home-three">
    <div class="container">
      <div class="row">
        <div class="col-md-4 pad-top">
          <h2>Your dehydration salvation</h2>
          <p>
            H2Melon has all the electrolytes found in our nutty sister H2Coco needed for you to bounce back from a night cutting shapes, with the added boost of Citrulline, a fruity little amino acid which aids muscle recovery. Limber up with us and we’ll get you back on the dancefloor!
          </p>
          <button type="button" class="btn btn-primary"><a href="/shop">Product</a></button>

        </div>
        <div class="col-md-4 offset-md-1 pad-top">
          <h2>Superfood Alert!</h2>
          <p>
  We heart watermelon, and you should too because it’s full of the antioxidant Lycopene. Lyco-who?! Lycopene is a carotenoid phytonutrient that is super important for our cardiovascular health. So H2Melon is good for your ticker, and for your taste buds. What a superfood!        </p>
          <button type="button" class="btn btn-primary"><a href="/shop">Product</a></button>

        </div>
        <div class="col-md-7">
          <div class="melon-type-cont">
            <img class="melon-slice" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melon.png" />
            <img class="type-fresh" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type_fresh.svg" />
            <img class="type-healthy" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type_healthy.svg" />
            <img class="type-juicy" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type-juicy.svg" />
            <img class="type-heart" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/type-heart.png" />
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="img-bg home-four">
  <div class="container">
    <div class="row">
      <div class="col-md-5 offset-md-8">
        <div class="home-txt-cont">
          <h2 class="t-red">Restore the fun</h2>
          <p>
            Craving that tropical holiday vibe, but the grind is getting you down? Kick back with H2Melon and soak up the summer straight out the bottle.
          </p>
        </div>
        <span class="buy-icon"><a href="#"></a></span>

      </div>
    </div>
  </div>
  </section>
</section><!--content-wrapper-->

<?php get_footer(); ?>
