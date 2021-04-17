
(function($) {
    "use strict";


    $(document).ready(function() {

        /*  [ owl-carousel ]
        - - - - - - - - - - - - - - - - - - - - */

        $('.block-slide-top .owl-carousel').owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false,
            dots:true,
            navText: ["",""],
            nav: true,
            smartSpeed: 600
        });

         $('.img-thumb.owl-carousel').owlCarousel({
            loop:false,
            margin: 10,
            dots:false,
            navText: ["",""],
            nav: true,
            responsiveClass:true,
            autoplay:false,
            autoplayTimeout:4000,
            smartSpeed: 600,
            responsive:{
                0:{
                    items:4
                },
                360:{
                    items:5
                },
                768:{
                    items:5
                },
                992:{
                    items:5
                },

                1200:{
                    items:5
                }
            }
        });

        jQuery(".img-thumb a.thumb").on( 'click', function() {
            var urlimg = jQuery(jQuery(this)).data('img');
            jQuery("#img-lag").attr('src', urlimg);
            return false;
        }) ;
        

        $('.block-brand .owl-carousel').owlCarousel({
            loop:false,
            margin: 30,
            dots:true,
            navText: ["",""],
            nav: true,
            responsiveClass:true,
            autoplay:false,
            autoplayTimeout:4000,
            smartSpeed: 600,
            responsive:{
                0:{
                    items:2
                },
                360:{
                    items:3
                },
                768:{
                    items:4
                },
                992:{
                    items:5
                },

                1200:{
                    items:7
                }
            }
        });

        /*$('.dropdown-menu a.dropdown-toggle').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });*/

       

        /*  [Mobile menu ]
        - - - - - - - - - - - - - - - - - - - - */
        
        $(".ui-menu .sub-menu-toggle").on( 'click', function() {
            $( this ).parent().toggleClass('open-sub-menu');
            $( this ).toggleClass('active');
            return false;
        }) ;
        
        $("[data-action='toggle-nav']").on( 'click', function() {
            $( this ).toggleClass('active');
            $(".header-nav").toggleClass("active");
            $("body").toggleClass("menu-open");
            return false;
            
        }) ;

        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
        $('.back-to-top').on( 'click', function(e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 500);
            return false;
        });

        
        if(jQuery('#product-image-gallery-thumb').length){
            jQuery('#product-image-gallery-thumb').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '#product-image-gallery',
                dots: false,
                centerMode: false,
                focusOnSelect: true,
                arrows: false,
                centerPadding: '0px',
                infinite: true,
            });
        }

        if(jQuery('#product-image-gallery').length){
            jQuery('#product-image-gallery').slick({
                centerMode: false,
                centerPadding: '0px',
                arrows: false,
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: false,
                asNavFor: '#product-image-gallery-thumb',
                speed: 300,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        }

    }); 

})(jQuery);