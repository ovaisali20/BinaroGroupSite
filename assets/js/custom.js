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
    $(".accordian h5").click(function () {
        $(".accordian li").removeClass("active");
        $(this).parent("li").addClass("active");
        $(".accordian li div").slideUp();
        $(this).parent("li").find("div").slideDown();
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


    $('.slider-style-1').slick({
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



