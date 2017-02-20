(function ($, root, undefined) {
       "use strict";
      $( document ).ready(function() {
            var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 1000}});

// build scenes

      new ScrollMagic.Scene({triggerElement: ".confetti"})
                        .setClassToggle(".confetti", "fire") // add class toggle
                        .addTo(controller);

 new ScrollMagic.Scene({triggerElement: ".melon-container .text-wrap", duration: 180})
    .setTween(".disco-ball", {left:0})
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


});

})(jQuery, this);
