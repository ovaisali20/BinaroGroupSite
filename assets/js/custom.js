$(document).ready(function () {

    // Mobile Menu
    $(".hamburger").click(function () {
        $(this).toggleClass("active");
        $(".mobile-navigation").toggleClass("active");
        $("body").toggleClass("over-hidden");
    });

    /* Tabbing Function */
    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var target = $(this).data("targetit");
        $("." + target).siblings('[class^="box-"]').hide();
        $("." + target).fadeIn();
        $(".process-slider").slick("setPosition", 0);
    });

    // Accordian
    $(".expand-arrow").click(function () {
        $(".accordian li").removeClass("active");
        $(this).closest("li").addClass("active");
        $(".accordian li .content-box").slideUp();
        $(this).closest("li").find(".content-box").slideDown();
    });

    // Popup Default
    $(".popup-default-click").click(function () {
        $("body").addClass("over-hidden");
        $(".overlay").fadeIn();
        $(".popup-default").fadeIn();
    });
    $(".popup-close, .overlay").click(function () {
        closePopup();
    });


    $('.slider-style-01').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        //autoplay: 2000,
        arrows: false,
        dots: true,
        fade: true,
        infinite: true,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 840,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
          ]
    });

    // Banner Top Rated Slider
    $('.customer-feedback-block-slider').slick({
        infinite: true,
        arrows: false,
        dots: true,
       // autoplay: true,
        speed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1440,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 864,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
      ]
    });

    // Profile slider
    $('.js-profile-slider').slick({
        centerMode: true,
        centerPadding: '250px',
        slidesToShow: 1,
        arrows: false,
        dots: true,
      });

      // Digital realities slider
      $('.js-digital-realities').slick({
        infinite: true,
        slidesToShow:2,
        slidesToScroll: 1,
        dots: false,
        arrows: true
      });

});


// Window Scroll
$(window).scroll(function () {
    
    var scroll = $(window).scrollTop();

    if ($(window).scrollTop() >= 50) {
        $("header").addClass("sticky-header");
    } else {
        $("header").removeClass("sticky-header");
    }

});


if ($(window).width() < 825) {

    $(".responsive-slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });

}


$(window).on('load', function () {});

function closePopup() {
    $(".popup").hide();
    $("body").removeClass("over-hidden");
    $(".overlay").fadeOut();
}
function fun_all() {
    $(".design_blogs").removeClass("intro");
    $(".design_blogs").removeClass("intro");
    $(".development_blogs").removeClass("intro");
    $(".media_blogs").removeClass("intro");
    $(".security_blogs").removeClass("intro");
    $(".marketing_blogs").removeClass("intro");
    $(".design").hide();
    $(".development").hide();
    $(".media_content").hide();
    $(".security").hide();
    $(".marketing").hide();
    $(".all_content").show();
}
function fun_design() {
    $(".design_blogs").addClass("intro");
    $(".all_blogs").removeClass("intro");
    $(".development_blogs").removeClass("intro");
    $(".media_blogs").removeClass("intro");
    $(".security_blogs").removeClass("intro");
    $(".marketing_blogs").removeClass("intro");
    $(".design").show();
    $(".all_content").hide();
    $(".development").hide();
    $(".media_content").hide();
    $(".security").hide();
    $(".marketing").hide();
}
function fun_devlope() {
    $(".development_blogs").addClass("intro");
    $(".all_blogs").removeClass("intro");
    $(".design_blogs").removeClass("intro");
    $(".media_blogs").removeClass("intro");
    $(".security_blogs").removeClass("intro");
    $(".marketing_blogs").removeClass("intro");
    $(".design").hide();
    $(".all_content").hide();
    $(".development").show();
    $(".media_content").hide();
    $(".security").hide();
    $(".marketing").hide();
}
function fun_media() {
    $(".media_blogs").addClass("intro");
    $(".all_blogs").removeClass("intro");
    $(".design_blogs").removeClass("intro");
    $(".development_blogs").removeClass("intro");
    $(".security_blogs").removeClass("intro");
    $(".marketing_blogs").removeClass("intro");
    $(".design").hide();
    $(".all_content").hide();
    $(".development").hide();
    $(".media_content").show();
    $(".security").hide();
    $(".marketing").hide();
}
function fun_Security() {
    $(".security_blogs").addClass("intro");
    $(".all_blogs").removeClass("intro");
    $(".design_blogs").removeClass("intro");
    $(".media_blogs").removeClass("intro");
    $(".development_blogs").removeClass("intro");
    $(".marketing_blogs").removeClass("intro");
    $(".design").hide();
    $(".all_content").hide();
    $(".development").hide();
    $(".media_content").hide();
    $(".security").show();
    $(".marketing").hide();
}
function fun_Marketing() {
    $(".marketing_blogs").addClass("intro");
    $(".all_blogs").removeClass("intro");
    $(".design_blogs").removeClass("intro");
    $(".media_blogs").removeClass("intro");
    $(".security_blogs").removeClass("intro");
    $(".development_blogs").removeClass("intro");
    $(".design").hide();
    $(".all_content").hide();
    $(".development").hide();
    $(".media_content").hide();
    $(".security").hide();
    $(".marketing").show();
    
}

$(".support-green").hover(function(){
    $('#support').toggle("slide");
});
$(".infinite-blue").hover(function(){
    $('#Infinite').toggle("slide");
});
$(".Provider-red").hover(function(){
    $('#Provider').toggle("slide");
});
$(".Attract-seablue").hover(function(){
    $('#Attract').toggle("slide");
});



