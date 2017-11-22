/* PRELOADER
jQuery(window).load(function() {
    jQuery(".loader-inner").fadeOut();
    jQuery(".loader").delay(400).fadeOut("slow");
    jQuery('.loader').css("display", "none");
});
*/

jQuery(document).ready(function(){
    /* OWL HEADER CAROUSEL */
	var owl = jQuery('.carousel-header');
	var owl_param = {
	    items: 1,
        center: true,
        autoHeight: true,
        loop: true,
        autoplay: true,
        lazyLoad: true
	};
	if(jQuery('body').hasClass('rtl')) {
        owl_param['rtl'] = true;
        jQuery('.next-btn-carousel').click(function() {
            owl.trigger('prev.owl.carousel');
        })
        jQuery('.prev-btn-carousel').click(function() {
            owl.trigger('next.owl.carousel', [300]);
        })
    } else {
        jQuery('.next-btn-carousel').click(function() {
            owl.trigger('next.owl.carousel');
        })
        jQuery('.prev-btn-carousel').click(function() {
            owl.trigger('prev.owl.carousel', [300]);
        })
    }
    owl.owlCarousel(owl_param);

    /* HAMBURGER MENU */
	var hamburger = jQuery('.hamburger');
	var mobile_menu = jQuery('.mobile-navigation');
	var close = jQuery('.close-mobilemenu');

	hamburger.on('click', function(event) {
		event.preventDefault();
		mobile_menu.toggleClass('active-mobilemenu');
	});

	close.on('click', function(event) {
		event.preventDefault();
		mobile_menu.toggleClass('active-mobilemenu');
	});

	/* CAROUSEL PRELOADER */
	jQuery(window).load(function() {
        jQuery(".preloader-carousel-header").fadeOut();
        jQuery(".preloader-carousel-header").delay(400).fadeOut("slow");
        jQuery(".preloader-carousel-header").css("display", "none");
    });

    if(jQuery('body').hasClass('admin-bar')) {
        jQuery(".preloader-carousel-header").css("top", "32px");
    }
});