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
        $(".clkarenHomeImageSliderContainer>img").attr("src", "http://localhost/karenclinic/wp-content/themes/karenclinic/img/image-slider1.jpg")
        
    });
    $(".imageSlider2").hover(function(){
        $(".clkarenHomeImageSliderContainer>img").attr("src", "http://localhost/karenclinic/wp-content/themes/karenclinic/img/image-slider2.jpg")
        
    });
    $(".imageSlider3").hover(function(){
        $(".clkarenHomeImageSliderContainer>img").attr("src", "http://localhost/karenclinic/wp-content/themes/karenclinic/img/image-slider3.jpg")
        
    });
    $(".imageSlider4").hover(function(){
        $(".clkarenHomeImageSliderContainer>img").attr("src", "http://localhost/karenclinic/wp-content/themes/karenclinic/img/image-slider4.jpg")
        
    });
})
