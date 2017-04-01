<?php
/**
 * @package understrap
 */

get_header();?>
<div class="bg-img">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/melon-bg.jpg" />
</div>
<section class="content-wrapper content-wrapper-no">
  <img class="pro-disco-ball animate-bounce" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/discoball-product.png" alt="H2Melon Discoball for Watermelon Water Products Page" />
  <div class="container negative-top">
    <div class="row align-items-end">
      <div class="col-sm-8 col-md-3 offset-md-1">
        <div class=" carton-inner align-items-end">
          <img class="carton-1l" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/product_1l.png" alt="H2Melon Watermelon Juice 1L Product Image" />
          <a href="#nip-1l" class="pink-btn" data-toggle="modal" data-target="#nip-1l">Nutritional Information</a>
        </div>
      </div>
      <div class="col-sm-8 col-md-3">
        <div class="carton-inner align-items-end">
          <img class="carton-500ml" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/product_500ml.png" />
          <a href="#nip-500ml" class="pink-btn" data-toggle="modal" data-target="#nip-500ml">Nutritional Information</a>
        </div>
      </div>
      <div class="col-md-6 offset-md-1 product-txt-wrap" >
        <h1 class="loves-melons">EVERYONE LOVES WATERMELONS!</h1>
        <p class="thats-why">
          That's why H2melon has jam-packed everyoneʼs favourite superfood into convenient easy to carry packs, so you can retire your melon-baller and just drink up.
        </p>
        <p class="ingredients">
          The ingredients? We have kept it simple with 100% WATERMELON WATER.
        </p>
        <p class="available-in">
          Available in 500ml or 1L re-sealable bottles, so no matter the size of your thirst weʼve got you covered.</p>
          <a href="/product/watermelon-water/" class="pink-btn buy-btn uppercase">Buy Now</a>
      </div>
    </div>

    <div class="infographic">
      <div class="row align-items-end">
        <div class="col-md-16">
          <h2 class="text-center infog-ttl uppercase">WHEN IT COMES TO SHARING NUTRITIONAL FACTS WITH YOU, WE’RE WONDERFULLY REVEALING.</h2>
        </div>
        <div class="col-md-8 offset-md-4 icon-txt-wrp">
          <p class="infog-intro">
            You already know how well H2melon keeps you
    hydrated and the antioxidant goodness it offers,
    but the impressive stuff has been researched
    and highlighted by independent nutritional
    professionals – and we all know they aren’t
    allowed to exaggerate.
          </p>
        </div>
        <div class="col-md-7  icon-txt-wrp">
          <img class="info-icons" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/icons/lycopene.png" alt="Icon: Laser space gun for Health Benefits" />
          <div class="info-text-wrap">
            <h3>Let’s start with Lycopene.</h3>
            <p>It might sound like the latest Sci-Fi film but Lycopene is a plant nutrient with the kind of antioxidant goodness your body craves*.</p>
          </div>
        </div>
        <div class="col-md-7 offset-md-2 icon-txt-wrp">
          <img class="info-icons" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/icons/potassium.png" alt="Icon: Man Working Out health" />
          <div class="info-text-wrap">
            <h3>Potassium Power</h3>
            <p>When your body needs hydration, potassium comes to the rescue and fortunately H2melon is loaded with it. Skilled at replenishing your body’s electrolyte levels, potassium naturally assists with your muscle functions*, the way nature intended.</p>
          </div>
        </div>
        <!-- <div class="col-md-7 offset-md-2 icon-txt-wrp">
          <img class="info-icons" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/icons/vitaminc.png" alt="Icon: Watermelon's Vitamin C Amounts" />
          <div class="info-text-wrap">
          <h3>Old mate, Vitamin C</h3>
            <p>
              Vitamin C keeps the immune system firing on all cylinders, heals wounds and even helps repair bones and teeth. But its hidden super power is its ability to produce collagen which, as we know, is good news for younger looking skin, not to mention cartilage, tendons, ligaments and blood vessels.
            </p>
          </div>
        </div> -->
        <div class="col-md-7 icon-txt-wrp">
          <img class="info-icons" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/icons/dumped.png" alt="Icon: Heart in the Bin - How Watermelon Water is Different" />
          <div class="info-text-wrap">
            <h3>Sugar is the new Felicia. Bye!</h3>
            <p>Thanks to the natural great taste of watermelon, we don’t need to rely on added sugars to give H2melon the sensational flavour it’s known and loved for. So quench your thirst and hydrate the natural way while telling sugar that the romance is over.</p>
          </div>
        </div>
        <div class="col-md-7 offset-md-2 icon-txt-wrp">
          <img class="info-icons" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/icons/citrulline.png" alt="Chemical Image of Citrulline in Watermelon Juice" />
          <div class="info-text-wrap">
            <h3>We ‘heart’ L-Citrulline</h3>
            <p>H2melon contains the amazing amino acid, L-Citrulline - its name is even derived from the Latin term for watermelon!</p>          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>


<?php require get_template_directory() . '/nip-modals.php';

get_footer(); ?>
