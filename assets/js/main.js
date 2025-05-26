$(document).ready(function () {
    $('.hero-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        smartSpeed: 700,
        dots: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn'
    });
    // 
    $('.testimonial-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        center: true,
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    jQuery(document).ready(function ($) {
        // Toggle sub-menu on click for mobile
        $('.menu-item-has-children > a').click(function (event) {
            event.preventDefault();
            var $parent = $(this).parent();

            // Close other open sub-menus
            $('.menu-item-has-children').not($parent).removeClass('active').find('.sub-menu').slideUp();

            // Toggle the clicked sub-menu
            $parent.toggleClass('active');
            $parent.find('.sub-menu').slideToggle();
        });
    });

});
