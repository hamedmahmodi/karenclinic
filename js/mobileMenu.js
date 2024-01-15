var $ = jQuery;
var svg = '<svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1 1" xml:space="preserve" transform="rotate(90)"><path fill="#231F20" d="M.311.817a.02.02 0 0 0 .028 0l.3-.3a.02.02 0 0 0 0-.028l-.3-.3a.02.02 0 1 0-.028.028l.286.286-.286.286a.02.02 0 0 0 0 .028z"/></svg>'

$(document).ready(function(){
   $(".menuMobile").click(function(){
    $(".mobileMenuContainer").addClass("showMenuMobile")
    $(".mobilMenuOverlay").addClass("showMobilMenuOverlay")
   }) 

   $(".closeMenu").click(function(){
    $(".mobileMenuContainer").removeClass("showMenuMobile")
    $(".mobilMenuOverlay").removeClass("showMobilMenuOverlay")
   })

   $(".mobileMenu>ul>.menu-item-has-children>a").click(function(){
    $(".mobileMenu>ul>.menu-item-has-children>ul").slideUp(300);
    $(".mobileMenu>ul>.menu-item-has-children>a>svg").css('transform','rotate(90deg)')
    if($(this).siblings("ul").css('display') == 'block'){
        $(this).siblings('ul').slideUp(400);
    }
    else{
        $(this).siblings('ul').slideToggle(400);
        $(this).find("svg").css('transform','rotate(270deg)')
    }})

    $(".menu-item-has-children>a").append(svg);


    
    $(".imageSlider1").hover(function(){
        $(".clkarenHomeImageSliderImage1").css({"transform": "scale(1.5)","z-index": "2","opacity":"100%"});
        $(".clkarenHomeImageSliderImage2").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage3").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage4").css({"z-index": "1","opacity":"0"});
        $(this).css('background-color','rgba(0, 0, 0, 0.148)');
    });
    $(".imageSlider1").mouseleave(function(){
        $(".clkarenHomeImageSliderImage1").css({"transform": "scale(1)"});
        $(this).css('background-color','transparent');
    });


    $(".imageSlider2").hover(function(){
        $(".clkarenHomeImageSliderImage1").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage2").css({"transform": "scale(1.5)","z-index": "2","opacity":"100%"});
        $(".clkarenHomeImageSliderImage3").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage4").css({"z-index": "1","opacity":"0"});
        $(this).css('background-color','rgba(0, 0, 0, 0.148)');
    });
    $(".imageSlider2").mouseleave(function(){
        $(".clkarenHomeImageSliderImage2").css({"transform": "scale(1)"});
        $(this).css('background-color','transparent');
    });


    $(".imageSlider3").hover(function(){
        $(".clkarenHomeImageSliderImage1").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage2").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage3").css({"transform": "scale(1.5)","z-index": "2","opacity":"100%"});
        $(".clkarenHomeImageSliderImage4").css({"z-index": "1","opacity":"0"});
        $(this).css('background-color','rgba(0, 0, 0, 0.148)');
    });
    $(".imageSlider3").mouseleave(function(){
        $(".clkarenHomeImageSliderImage3").css({"transform": "scale(1)"});
        $(this).css('background-color','transparent');
    });


    $(".imageSlider4").hover(function(){
        $(".clkarenHomeImageSliderImage1").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage2").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage3").css({"z-index": "1","opacity":"0"});
        $(".clkarenHomeImageSliderImage4").css({"transform": "scale(1.5)","z-index": "2","opacity":"100%"});
        $(this).css('background-color','rgba(0, 0, 0, 0.148)');
    });
    $(".imageSlider4").mouseleave(function(){
        $(".clkarenHomeImageSliderImage4").css({"transform": "scale(1)"});
        $(this).css('background-color','transparent');
    });


})
