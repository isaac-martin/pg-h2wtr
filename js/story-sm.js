(function ($, root, undefined) {
         "use strict";
      $( document ).ready(function() {

            var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 1000}});

      // build scenes



      new ScrollMagic.Scene({triggerElement: ".story-four", duration: 300, triggerHook: 'onEnter', offset: -150})
                  .setTween(".fist", {y:-110})
                  .addTo(controller);

      new ScrollMagic.Scene({triggerElement: ".fail-img-cont", triggerHook: 'onEnter', offset: 200})
                  .setClassToggle(".slide", "slide-in") // add class toggle
                  .addTo(controller);

      });



})(jQuery, this);
