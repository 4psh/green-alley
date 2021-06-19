require('./bootstrap');

    $(document).ready(function() {
    $("#news-slider").owlCarousel({
        items:3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[1000,2],
        itemsMobile:[650,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
});
