<div class="modal fade" id="newsletter-modal">
  <div class="modal-dialog melon-bg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
          <div class="col-md-6">
            <img class="pop-carton" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/carton.png" />
          </div>
          <div class="col-md-10">
            <img class="close-icon" data-dismiss="modal" aria-label="Close" src="<?php bloginfo('stylesheet_directory'); ?>/assetts/img/pop-upclose.png" />
            <h2><?php the_field('title','option');?></h2>
            <p>
              <?php the_field('content','option');?>
            </p>
            <div id="mc_embed_signup">
  					<form action="//h2melon.us12.list-manage.com/subscribe/post?u=15a1ba46f2ef3436777ccec17&amp;id=36e7be12c9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate news-form" target="_blank" novalidate>
  					    <div id="mc_embed_signup_scroll" class="popform-cont">
              <label class="form-response" for="mce-email"></label>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_15a1ba46f2ef3436777ccec17_36e7be12c9" tabindex="-1" value=""></div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
  						<input type="email" value="" name="email" class="email" id="mce-email" placeholder="email address" required>
  					    <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
  					    </div>
  					</form>
  					</div><!--End mc_embed_signup-->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
