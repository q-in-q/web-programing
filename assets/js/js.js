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
            $("#nav").css("background-color" , "#000000ce");
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

const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown1 = new Date('Sep 30, 2019 00:00:00').getTime(),
        x1 = setInterval(function() {

        let now = new Date().getTime(),
          distance = countDown1 - now;

        document.getElementById('days1').innerText = Math.floor(distance / (day)),
        document.getElementById('hours1').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes1').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds1').innerText = Math.floor((distance % (minute)) / second);

}, second)

let countDown2 = new Date('Aug 22, 2019 12:30:20').getTime(),
        x2 = setInterval(function() {

        let now = new Date().getTime(),
          distance = countDown2 - now;

        document.getElementById('days2').innerText = Math.floor(distance / (day)),
        document.getElementById('hours2').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes2').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds2').innerText = Math.floor((distance % (minute)) / second);

}, second)

let countDown3 = new Date('Sep 01, 2019 20:10:20').getTime(),
        x3 = setInterval(function() {

        let now = new Date().getTime(),
          distance = countDown3 - now;

        document.getElementById('days3').innerText = Math.floor(distance / (day)),
        document.getElementById('hours3').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes3').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds3').innerText = Math.floor((distance % (minute)) / second);

}, second)

let countDown4 = new Date('July 20, 2019 01:17:30').getTime(),
        x4 = setInterval(function() {

        let now = new Date().getTime(),
          distance = countDown4 - now;

        document.getElementById('days4').innerText = Math.floor(distance / (day)),
        document.getElementById('hours4').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes4').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds4').innerText = Math.floor((distance % (minute)) / second);

}, second)

let countDown5 = new Date('July 12, 2019 01:25:15').getTime(),
        x5 = setInterval(function() {

        let now = new Date().getTime(),
          distance = countDown5 - now;

        document.getElementById('days5').innerText = Math.floor(distance / (day)),
        document.getElementById('hours5').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes5').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds5').innerText = Math.floor((distance % (minute)) / second);

}, second)

var myApp = {
    loadingTimer: null,
    
    loading: function(show, delay) {
      clearTimeout(myApp.loadingTimer);
      if (show === undefined) {
          show = true;
      }
      if (show && (delay !== undefined)) {
          myApp.loadingTimer = setTimeout(function() {
            myApp.loading(true);
          }, delay);
          return;
      }
      $overlay = $("div#loading-overlay");
      if (show) {
          var screenTop = $(document).scrollTop();
          var w = $(window).width().toString()
          var h = $(window).height().toString();
          $overlay.css("top", screenTop);
          $overlay.width(w);
          $overlay.height(h);
          $overlay.show();
      }
      else {
        $overlay.hide();
      }
    }
  }
  
  $(function() {
    
    
    $("#slow-load").click(function() {
      myApp.loading(true, 500);
      //-- Simulate a slow-loading site through a 2 second delay
      window.setTimeout(function() {
        $.ajax({
          url: '../promo-detail.php',
          async: true,
          error: function (jqXHR, textStatus, errorThrown) {
            myApp.loading(false);
            alert("Loading Success, Happy Your Explore!");
          },
          success: function (data, textStatus, jqXHR) {
            myApp.loading(false);
            alert("Loading Success, Happy Your Explore!");
          }
        });
      }, 2000);
    });
  });
  
//GENERATE PASSWORD

