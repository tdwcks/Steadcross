// =================================================================
// 		Miln Ltd
// 			Digital Experiences
// 		Global Javascript Functions
// =================================================================
$(document).ready(function () {

	if ($(window).width() < 760) {

		// Mobile Show the Menu 
	  	$( ".menu-trigger" ).on( "click", function() {
		 	$('nav').addClass('active');
		 	$('a.menu-cross').addClass('active');
		 	return false;
		});

		// Mobile Hide The Menu 
		$( ".menu-cross" ).on( "click", function() {
		 	$('nav').removeClass('active');
		 	$(this).removeClass('active');
		 	return false;
		});

		// Mobile Show the submenu
		$( "nav ul li.menu-item-has-children" ).on( "click", function(e) {
			$(this).find('ul').toggle();
	 		return false;
		});

		// Mobile allows click on links
		$( "nav ul li.menu-item-has-children ul li" ).on( "click", function() {
			var addressValue = $(this).find('a').attr("href");
	       	$(location).attr('href', addressValue);
			return false;
		});
	}
	else {
	   // Fake full width menu
		$("nav ul li.menu-item-has-children").on({
	    	mouseenter: function () {
	       		$('.submenu-holder').show();
	    	},
	    	mouseleave: function () {
	       		$('.submenu-holder').hide();
	    	}
		});
	}
});

