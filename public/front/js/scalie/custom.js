$(document).on('click', '.blogDetailItemsLink', function(){
    $('.blogDetailItemsLink').removeClass('active');
    $(this).addClass('active');
})

$(document).on('mouseover', '.mainSubMenuLink', function(){
    $('.mainSubMenu').addClass('mainSubMenu2');
});
$(document).on('mouseover', '.submenuDropdown', function(){
    $('.mainSubMenu').addClass('mainSubMenu2');
});
$(document).on('mouseout', '.mainSubMenuLink, .submenuDropdown', function(){
    $('.mainSubMenu').removeClass('mainSubMenu2');
})

$(document).ready(function () {
    $(".faqQuestion a").on("click", function () {
      $(this).parents(".faqList").hasClass("activeTab")
        ? ($(this).parents(".faqList").removeClass("activeTab"),
          $(this).parents(".faqList").find(".faqAnswer").slideUp())
        :($(".faqQuestion a").parents(".faqList").removeClass("activeTab"),
          $(".faqQuestion a").parents(".faqList").find(".faqAnswer").slideUp(),
          $(this).parents(".faqList").addClass("activeTab"),
          $(this).parents(".faqList").find(".faqAnswer").slideDown());
    });
}),

// Testimonial Slider Start
$(document).ready(function(){
    $('.testimonialSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
        slidesToShow: 1,
        infinite: true,
        // fade: true,
    });
})
// Testimonial Slider End

// Testimonial Slider2 Start
$(document).ready(function(){
    $('.clientTestimonialSlider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
})
// Testimonial Slider2 End

// Fixed Header Start
$(window).scroll(function() {
    if ($(window).scrollTop() >= 1) {
        $(".header").addClass("fixedHeader");
        $(".newFormHeaderSec").addClass("newFormHeaderSec2");
    } else {
        $(".header").removeClass("fixedHeader");
        $(".newFormHeaderSec").removeClass("newFormHeaderSec2");
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


// Clients Slider Start
$(document).ready(function() {
    $(".startupSlider").slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 9000,
        arrows: false,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        cssEase: 'linear',
        infinite: true,
        pauseOnHover: false,
        
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 561,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});
// Project Slider End

$(document).ready(function(){
    $(".plusExperience").on("click", function () {
        var $elm = $(this).parents(".valuebox").find(".qty");
        $elm.val(Number($elm.val()) + 1);
    });

    $(".minusExperience").on("click", function () {
        var $elm = $(this).parents(".valuebox").find(".qty");
        var amount = Number($elm.val());
        if (amount > 1) {
            $elm.val(amount - 1);
        }
    });
});

$(document).ready(function(){
    $(".plusDevelopers").on("click", function () {
        var $elm = $(this).parents(".valuebox").find(".qty");
        $elm.val(Number($elm.val()) + 1);
    });

    $(".minusDevelopers").on("click", function () {
        var $elm = $(this).parents(".valuebox").find(".qty");
        var amount = Number($elm.val());
        if (amount > 1) {
            $elm.val(amount - 1);
        }
    });
});

// Show more tech options start
$(document).ready(function(){
    $('.addMoreTechInner').on('click', function(){
        $(this).parents('.formBody').find('.otherSkillsBoxParent').css('display', 'block');
    })
})

// Show more tech options end

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


// Iframe loading
$(window).bind('load', function(){
    $('#airtableBox').prepend('<iframe class="airtable-embed" src="https://airtable.com/embed/shrLH2xRTyi9Oor5e?backgroundColor=red&layout=card" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>');
});


// new js start

let hideButton = document.querySelectorAll(".hideButton")

for(let x = 0; x < hideButton.length; x++){
    hideButton[x].addEventListener("click", function(){
        hideButton[x].parentElement.style.display = 'none';
    })
}

// new js end