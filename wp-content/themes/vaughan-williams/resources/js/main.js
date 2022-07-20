//get variable from
function getData(type, value) {
   if (typeof WPDATA != "undefined") {
	   if (type in WPDATA) {
			 value = WPDATA[type];
	   }
   }
   return value;
}

var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();

(function($) {

	$(window).resize(function() {
	    delay(function(){
	  		
	    }, 400);
	});

	$(document).ready(function () {
		
		//$('.matchHeight').matchHeight();

		//hamburger animation
		var $hamburger = $(".hamburger");
		$hamburger.on("click", function(e) {
		    $hamburger.toggleClass("is-active");
		    $('body').toggleClass('menu-active');
		});

		//AJAX EXAMPLE (btn) {
		function ajax_filter(btn) {
			var ajaxurl = getData('ajaxurl');
			var formData = {
				'action' : 'ajax_function',
			};

			$.ajax({
				type: "post",
				url: ajaxurl,
				data: formData,
				beforeSend: function() {
					//$(".loading").append('<p>LOADING</p>');
				},
				success: function(msg){
					if (msg) {
						console.log('success');
						$("#ajax_results").replaceWith($('<div class="row justify-content-center">').html(msg));
					}
				}
			});
		}

		$('body').on('click', '.ajax-trigger', function(e) {
			e.preventDefault();
			var btn = $(this);
			ajax_filter(btn);
		});

		// Slick Slider
		$('.slider-testimonial').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			lazyLoad: 'ondemand',
			adaptiveHeight : true,
		});

		// Slick Slider
		$('.slider-news').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			lazyLoad: 'ondemand',
			adaptiveHeight : true,
			infinite: false,
			responsive: [
			    {
			      breakpoint: 1200,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			]
		});

		//function logOut() 
		function logout_user(btn) { 
			var ajaxurl = getData('ajaxurl');
			$.ajax({
				type: "post",
				url: ajaxurl,
				data: {
					action: 'logout_user_starter_theme',
				},
				success: function(msg){
					window.location = window.location.origin;
				}
			});
		}
		
	});
})(jQuery);