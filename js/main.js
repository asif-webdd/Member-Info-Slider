
(function($) {

    /* Owl Carousel */

    $(window).on("elementor/frontend/init", function(){
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/MemberInfoSlider.default",
            function(scope, $){
                $('.main-slider').owlCarousel({
                    loop: true,
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    nav:true,
                    navText: [
                        "<i class='fas fa-long-arrow-alt-left'></i>",
                        "<i class='fas fa-long-arrow-alt-right'></i>"
                    ]
                });
            };
        );
    });



})(jQuery);