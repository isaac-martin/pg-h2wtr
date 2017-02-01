(function ($, root, undefined) {

  		$(window).scroll(function() {
      var scroll = $(window).scrollTop();

       //>=, not <=
      if (scroll >= 180) {
          //clearHeader, not clearheader - caps H
          $(".mini-nav").addClass("mini-visible");
      }

  		else {
  			  $(".mini-nav").removeClass("mini-visible");
  		}
  });

  function mrgbtm(){
		var height = $('.home-four').height();
    console.log(height);
		$('.home-three').css({marginBottom: height});
	}

    function removelinktext() {
      $(".shop-nav li a").text('');
    }

  function triggeranimations(){
    // init controller
    	var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 1000}});

    	// build scenes

      	new ScrollMagic.Scene({triggerElement: ".confetti"})
					.setClassToggle(".confetti", "fire") // add class toggle
					.addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".melon-container .text-wrap", duration: 180})
          .setTween(".disco-ball", {left:0})
          .addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".story-four", duration: 300, triggerHook: 'onEnter', offset: -150})
					.setTween(".fist", {y:-110})
					.addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".fail-img-cont", triggerHook: 'onEnter', offset: 200})
					.setClassToggle(".slide", "slide-in") // add class toggle
					.addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".txt-trg-1", triggerHook: 'onEnter', offset: 200})
					.setClassToggle(".txt-trg-1", "text-fade-in") // add class toggle
					.addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".txt-trg-2", triggerHook: 'onEnter', offset: 200})
					.setClassToggle(".txt-trg-2", "text-fade-in") // add class toggle
					.addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".txt-trg-3", triggerHook: 'onEnter', offset: 200})
          .setClassToggle(".txt-trg-3", "text-fade-in") // add class toggle
          .addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".melon-type-cont"})
					.setClassToggle(".melon-slice", "slide-btm-activate") // add class toggle
					.addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".home-banner", duration: 400, triggerHook: 'onEnter', offset: 800})
  				.setTween(".home-banner", {y:300})
  				.addTo(controller);

  }

    // function addBlacklistClass() {
  	// 	$( 'a' ).each( function() {
  	// 		if ( this.href.indexOf('/wp-admin/') !== -1 ||
  	// 			 this.href.indexOf('/wp-login.php') !== -1 ) {
  	// 			$( this ).addClass( 'wp-link' );
  	// 		}
  	// 	});
  	// }


    $( document ).ready(function() {
      // addBlacklistClass();
      triggeranimations();
      removelinktext();
      mrgbtm();
    });


  	// $( function() {
    //
  	// 	var settings = {
  	// 		anchors: 'a',
    //     cacheLength: 3,
    //     loadingClass: 'is-loading',
  	// 		blacklist: '.wp-link',
    //     onReady: {
    //       duration: 0,
    //       // `$container` is a `jQuery Object` of the the current smoothState container
    //       // `$newContent` is a `jQuery Object` of the HTML that should replace the existing container's HTML.
    //       render: function ($container, $newContent) {
    //         var url = smoothState.href // <-- get the current url
    //         var doc = smoothState.cache[url].doc // <-- full html response
    //     }
    //
    //
    //     },
  	// 		onStart: {
  	// 			duration: 280,
  	// 			render: function ( $container ) {
  	// 				$container.addClass( 'slide-out' );
  	// 			}
  	// 		},
  	// 		onAfter: function( $container ) {
    //       addBlacklistClass();
    //       triggeranimations();
    //       removelinktext();
  	// 			var $hash = $( window.location.hash );
    //
  	// 			if ( $hash.length !== 0 ) {
    //
  	// 				var offsetTop = $hash.offset().top;
    //
  	// 				$( 'body, html' ).animate( {
  	// 						scrollTop: ( offsetTop - 60 ),
  	// 					}, {
  	// 						duration: 280
  	// 				} );
  	// 			}
    //
  	// 			$container.removeClass( 'slide-out' );
  	// 		}
  	// 	};
    //
  	// 	$( '#page' ).smoothState( settings );
  	// } );

})(jQuery, this);
