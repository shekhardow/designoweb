// Coupon Code Copied Message Start
// $(document).on('click', '.copyCouponLink', function(){
//     $(".codeCopyToggle").fadeIn();
//     $(".codeCopyToggle").fadeOut(2000);
// });


$(document).on('click', '.copyCouponLink', function (evt) {
	var referlink = $(this).parents('.couponBottomRight').find('.couponNameLink').html();
	navigator.clipboard.writeText(referlink);
    console.log(referlink);
    
    $(".codeCopyToggle").fadeIn();
    $(".codeCopyToggle").fadeOut(2000);
});



// $(document).on('click', '.copyCouponLink', function(){
//     // let copyText = document.getElementsByClassName("copyClipboard");
//     let copyText = $(this).parents('.couponBottomRight').find('.couponNameLink').html();
//     console.log(copyText);
//     copyText.select();
//     copyText.setSelectionRange(0, 99999); 
//     navigator.clipboard.writeText(copyText.value);
    
    
//     $(".codeCopyToggle").fadeIn();
//     $(".codeCopyToggle").fadeOut(2000);
// });
        
        
// Coupon Code Copied Message End


// Fixed Header Start
$(window).scroll(function() {
    if ($(window).scrollTop() >= 1) {
        $(".header").addClass("fixedHeader");
    } else {
        $(".header").removeClass("fixedHeader");
    }
});
// Fixed Header End

$('.navbar-toggler').click(function() {
    if ($(this).parents('.navbar').find('.navbar-collapse').hasClass('show')) {
        $(this).parents('.navbar').find('.navbar-collapse').removeClass('show').addClass('showBox');
        // $('.navbar-expand-md .navbar-collapse').css('top', '-100%');
    } else {
        $(this).parents('.navbar').find('.navbar-collapse').removeClass('showBox').addClass('show');
        // $('.navbar-expand-md .navbar-collapse').css('top', '62px');
    }
});

// Navbar Button Style Start
$(document).ready(function() {
    $(".navbar-toggler").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
        } else {
            $(this).addClass("active");
        }
    });
});
// Navbar Button Style End

// Menu DropDown Start
$(document).ready(function() {
    if ($(window).width() >= 1200) {
        $(".mainMenu .nav-link").on("mouseover", function() {
            $(this).parent(".nav-item").addClass("activeMenu");
        });
        $(".mainMenu .nav-link").on("mouseleave", function() {
            $(this).parent(".nav-item").removeClass("activeMenu");
        });
        $(".subMenus").on("mouseover", function() {
            $(this).parents(".nav-item").addClass("activeMenu");
        });
        $(".subMenus").on("mouseleave", function() {
            $(this).parents(".nav-item").removeClass("activeMenu");
        });
    } else {
        $(".mainMenu .nav-link").on("click", function() {
            $(this).parent(".nav-item").addClass("activeMenu");
        });
    }
});
$(document).ready(function() {
    if ($(window).width() <= 1199) {
        $(".mainMenu").on("click", function() {

        });
    }
})

$(document).ready(function() {
    $('.closeSubMenuLink').on('click', function() {
        $(this).parents('.nav-item').removeClass('activeMenu');
    })
})

// Menu DropDown End

// About Us Counter Slider Start
$(document).ready(function() {
    var helpers = {
        addZeros: function(n) {
            return n < 100 ? "0" + n : "" + n;
        },
    };

    function sliderInit() {
        var $slider = $(".customSlider");
        $slider.each(function() {
            var $sliderParent = $(this).parent();
            $(this).slick({
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                slidesToShow: 1,
                slideToScroll: 1,
                infinite: true,
                fade: true,
            });
            if ($(this).find(".customSlides").length > 1) {
                $(this).siblings(".slidesCounter").show();
            }
            $(this).on("afterChange", function(event, slick, currentSlide) {
                $sliderParent.find(".slidesCounter .active").html(helpers.addZeros(currentSlide + 1));
            });

            var sliderItemsNum = $(this).find(".slick-slide").not(".slick-cloned").length;
            $sliderParent.find(".slidesCounter .totalSlides").html(helpers.addZeros(sliderItemsNum));
        });
    }
    sliderInit();
});
// About Us Counter Slider End

// Project Slider Start
$(document).ready(function() {
    $(".projectSlideBox").slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 3000,
        arrows: false,
        dots: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        cssEase: 'linear',
        infinite: true,
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 415,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });
});
// Project Slider End

// Faq Dropdown Start
$(document).ready(function() {
    $(".faqQuestion a").on("click", function() {
        if ($(this).parents(".faqList").hasClass("activeTab")) {
            $(this).parents(".faqList").removeClass("activeTab");
            $(this).parents(".faqList").find(".faqAnswer").slideUp();
        } else {
            $(".faqQuestion a").parents(".faqList").removeClass("activeTab");
            $(".faqQuestion a").parents(".faqList").find(".faqAnswer").slideUp();
            $(this).parents(".faqList").addClass("activeTab");
            $(this).parents(".faqList").find(".faqAnswer").slideDown();
        }
    });
});
// Faq Dropdown End

// Members Slider

$(document).ready(function() {
    $(".memberSlides").slick({

        autoplay: true,
        autoplaySpeed: 0,
        speed: 9000,
        arrows: false,
        // prevArrow: $(".memberArrLBtn"),
        // nextArrow: $(".memberArrRBtn"),
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        cssEase: 'linear',
        infinite: true,
        pauseOnHover: false,

        // autoplay: true,
        // autoplaySpeed: 1000,
        // arrows: true,
        // prevArrow: $(".memberArrLBtn"),
        // nextArrow: $(".memberArrRBtn"),
        // dots: false,
        // slidesToShow: 3,
        // infinite: true,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});

// Page Load Animation 
// index page
$(window).on('load', function() {
    $('.highlightHeading span').addClass('highlightHeading2');
});

// header and footer menus/submenus hover effect start 
$(document).ready(function() {
    $('.submenuInnerBox .subMenuList ul li a').on('mouseover', function() {
        $(this).parent('span').addClass('menuActives');
        $(this).parents('.submenuInnerBox .subMenuList').find('ul li a').addClass('activeLinks').removeClass('mainActiveLink');
        $(this).addClass('mainActiveLink').removeClass('activeLinks');
    });
    $('.submenuInnerBox .subMenuList ul li a').on('mouseleave', function() {
        $(this).parent('span').removeClass('menuActives');
        $(this).parents('.submenuInnerBox .subMenuList').find(' ul li a').removeClass('activeLinks mainActiveLink');
        $(this).removeClass('activeLinks mainActiveLink');
    });
});

$(document).ready(function() {
    $('.footMenuList ul li a').on('mouseover', function() {
        $(this).parent('li').addClass('menuActives');
        $(this).parents('.footMenuList').find('ul li a').addClass('activeLinks').removeClass('mainActiveLink');
        $(this).addClass('mainActiveLink').removeClass('activeLinks');
    });
    $('.footMenuList ul li a').on('mouseleave', function() {
        $(this).parent('span').removeClass('menuActives');
        $(this).parents('.footMenuList').find(' ul li a').removeClass('activeLinks mainActiveLink');
        $(this).removeClass('activeLinks mainActiveLink');
    });
});
// header and footer menus/submenus hover effect end


// Testimonial video start
$(document).ready(function() {
    $('.testimonialVideoLink').on('click', function() {
        var videoLink = $(this).attr('data-src');
        var autoPlay = '?autoplay=1';
        $('body').find('.testimonialModal .testimonialVideo iframe').attr('src', videoLink + autoPlay);
    });
    $('.modalclose').on('click', function() {
        $('body').find('.testimonialModal .testimonialVideo iframe').attr('src', '');
    })
})

// Testimonial video end

// Terms/Privacy scroll

$(document).ready(function() {
    function scrollToSection(event) {
        event.preventDefault();
        var $section = $($(this).attr('href'));
        $('html, body').animate({
            scrollTop: $section.offset().top - 100
        }, );
    }
    $('[data-scroll]').on('click', scrollToSection);
}());

$(document).ready(function() {
    $('.sideSection ul li a').on('click', function() {
        if ($(this).hasClass('activeLink')) {
            return;
        } else {
            $('.sideSection ul li a').removeClass('activeLink');
            $(this).addClass('activeLink');
        }
    })
});