/*
    Template  : Bling App Landing Page 
    Author    : AlexaTheme
    File Name : Bling Custom Script
*/

(function($){ "use strict";

	$(window).on('load', function() {
        $('body').addClass('loaded');
    });

/*=========================================================================
    Sticky Header
=========================================================================*/    
    var navOffset = $("#header").offset().top;  
    $(window).scroll(function() {    
        var scrollPos = $(window).scrollTop();    
        if (scrollPos > navOffset) {
            $("#header").addClass("scrollActive");
        } else {
            $("#header").removeClass("scrollActive");
        }
    });

/*=========================================================================
    App Carousel
=========================================================================*/
     $('.app-carousel').slick({
			infinite: true,
			autoplay: true,
			centerMode: true,
			dots: true,
			autoplaySpeed: 2000,
			slidesToShow: 5,
			slidesToScroll: 1,
			variableWidth: true,
			responsive: [
			    {
			      breakpoint: 769,
			      settings: {
			        slidesToShow: 3
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
				    dots: false,
			        slidesToShow: 1,
			        variableWidth: false,
			        fade: true,
					cssEase: 'linear'
			      }
			    }
			]
		});
             
/*=========================================================================
    Active Venobox
=========================================================================*/
     $('.img_popup').venobox();

/*=========================================================================
    Video Background
=========================================================================*/
    var YTselector = $(".hero_section");
    YTselector.YTPlayer();
			 
/*=========================================================================
        Testimonial Carousel
=========================================================================*/
    $('#testimonial_carousel').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 500,
        items: 1,
        nav: false
    });

/*=========================================================================
	Initialize smoothscroll plugin
=========================================================================*/
	smoothScroll.init({
		offset: 60
	});
	
/*=========================================================================
	EaseScroll Active
=========================================================================*/
    $("html").easeScroll();
             
/*=========================================================================
	Scroll To Top
=========================================================================*/ 
    $(window).on( 'scroll', function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll-to-top').fadeIn();
        } else {
            $('#scroll-to-top').fadeOut();
        }
    });

/*=========================================================================
    wow Settings
=========================================================================*/
    var wow = new WOW( {
        mobile: false,
        offset: 0
    });
    wow.init();
	
/*=========================================================================
	MAILCHIMP
=========================================================================*/ 

    if ($('.subscribe_form').length>0) {
        /*  MAILCHIMP  */
        $('.subscribe_form').ajaxChimp({
            language: 'es',
            callback: mailchimpCallback,
            url: "//alexatheme.us14.list-manage.com/subscribe/post?u=48e55a88ece7641124b31a029&amp;id=361ec5b369" 
        });
    }

    function mailchimpCallback(resp) {
        if (resp.result === 'success') {
            $('#subscribe-result').addClass('subs-result');
            $('.subscription-success').text(resp.msg).fadeIn();
            $('.subscription-error').fadeOut();

        } else if(resp.result === 'error') {
            $('#subscribe-result').addClass('subs-result');
            $('.subscription-error').text(resp.msg).fadeIn();
        }
    }
    $.ajaxChimp.translations.es = {
        'submit': 'Submitting...',
        0: 'We have sent you a confirmation email',
        1: 'Please enter your email',
        2: 'An email address must contain a single @',
        3: 'The domain portion of the email address is invalid (the portion after the @: )',
        4: 'The username portion of the email address is invalid (the portion before the @: )',
        5: 'This email address looks fake or invalid. Please enter a real email address'
    };
             
             
})(jQuery);
