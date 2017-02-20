(function ($, root, undefined) {
       "use strict";

  		$(window).scroll(function() {
        var scroll = $(window).scrollTop();

         //>=, not <=
        if (scroll >= 180) {
            $(".mini-nav").addClass("mini-visible");
        }
    		else {
    			  $(".mini-nav").removeClass("mini-visible");
    		}
      });

    $( document ).ready(function() {


      //Icons for menu

      $(".shop-nav li a").text('');


      // GForm BTNS

      $('.gchoice_1_9_0').click(function() {
        $("#gform_target_page_number_1").val("2");
        $("#gform_1").trigger("submit",[true]);
      });

      $('.gchoice_1_9_1').click(function() {
        $("#gform_target_page_number_2").val("2");
        $("#gform_1").trigger("submit",[true]);
      });

      $('.gchoice_1_9_2').click(function() {
        $("#gform_target_page_number_3").val("2");
        $("#gform_1").trigger("submit",[true]);
      });


      //Cookie for Modal

         // If no cookie with our chosen name (e.g. no_thanks)...
         if ($.cookie("modal-no") == null) {

           // Show the modal, with delay func.
           $('#newsletter-modal').appendTo("body");
           function show_modal(){
             $('#newsletter-modal').modal();
           }

           // Set delay func. time in milliseconds
           window.setTimeout(show_modal, 2000);
           }

         // On click of specified class (e.g. 'nothanks'), trigger cookie, which expires in 100 years
         $(".news-close").click(function() {
           $.cookie('modal-no', 'true', { expires: 14, path: '/' });
         });


      $('.filter-trigger').click(function(e) {
      	// console.log('clicked');
      	e.preventDefault();
      	var filterCat = $(this).attr('data-filter');
      	$('.filter-trigger, .all-filters').removeClass('filter-active');
      	console.log(filterCat);
      	$(this).addClass('filter-active');
      	$('.content_filterable').removeClass('content-filter-hide');
      	$('.content_filterable').each(function(index, element) {
      			if($(element).hasClass(filterCat)) {
      				$(element).addClass('content-filter-show');
      			} else {
      				$(element).addClass('content-filter-hide');
      			}
      	});
      })

      $('.all-filters').click(function(e) {
      	e.preventDefault();
      	$('.filter-trigger, .all-filters').removeClass('filter-active');
      	$(this).addClass('filter-active');
      	$('.content_filterable').removeClass('content-filter-hide , content-filter-show');
      })




      $('.news-form').ajaxChimp();
    });

})(jQuery, this);
