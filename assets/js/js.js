$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 50) {
            $("#nav").css("background-color" , "#555");
        }

        else{
            $("#nav").css("background" , "transparent");  	
        }
    })
    })