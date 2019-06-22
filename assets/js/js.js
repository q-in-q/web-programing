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