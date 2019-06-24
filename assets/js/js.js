// Customer Testimonial
$(function() {
    $("#customers-testimonial").owlCarousel({
        items : 1,
        autoPlay : true,
        smartSpeed : 800,
        look : true,
        autoPlayHoverPause : true
    });
});

// Sticky navbar
$(document).ready(function () {
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        }
        else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };

    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); 
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        stickyToggle(sticky, stickyWrapper, $(window));
    });
});



$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 50) {
            $("#nav").css("background-color" , "#06061fa1");
            $("#nav").css("transition" , ".3s");
        }
        else{
            $("#nav").css("background" , "transparent");  	
        }
    })
})

/* ===================== GOOGLE MAPS API ======================= */
function initMap() {
    var location = {lat: -7.759827,lng: 110.408346};
    var map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 12,
        center: location,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}

