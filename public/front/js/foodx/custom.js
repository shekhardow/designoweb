  // privacy scroll
function scrollNav() {
	$('.contentPrivacy .privnav a').click(function(){  
	  //Toggle Class
	  $(".contentPrivacy .privnav .active").removeClass("active");      
	  $(this).closest('.contentPrivacy .privnav li').addClass("active");
	  var theClass = $(this).attr("class");
	  $('.'+theClass).parent('.contentPrivacy .privnav li').addClass('active');
	  //Animate
	  $('html, body').stop().animate({
		  scrollTop: $( $(this).attr('href') ).offset().top - 160
	  }, 400);
	  return false;
	});
	$('.scrollTop a').scrollTop();
  }
  scrollNav();
  
 
 // fixed header

  $(window).scroll(function () {
    if ($(window).scrollTop() >= 45) {
        $('.header').addClass('fixed_header');
    } else {
        $('.header').removeClass('fixed_header');
    }
});

// fixed header end
// Sidebar Start

//     $('.appxheader .navbar-toggler').click(function () {
//         if ($(this).parents('.appxheader').find('.navbar-collapse').hasClass('show')) {
//             $('.navbar-expand-md .navbar-collapse').css('left', '-250px');
//         } else {
//             $('.navbar-expand-md .navbar-collapse').css('left', '0px');
//         }
//     });
  
  // Sidebar End

  // Navbar Button Style Start

//     $(document).ready(function(){
//         $('.appxheader .navbar-toggler').click(function(){
//             if($(this).hasClass('active'))
//             {
//                 $(this).removeClass('active')
//             }
//             else{
//                 $(this).addClass('active')
//             }
//         });
//     });
  
  // Navbar Button Style End
// hamburger 

var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else
        for (var e = 0, l = t.length; l > e; e++)
            o.call(r, t[e], e, t)
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener("click", function () {
            this.classList.toggle("is-active");
        }, false);
    });
}

$('.hamburger').click(function () {

    if ($(this).hasClass('is-active')) {
        $('#mySidenav').css('left', '0px');
    } else {
        $('#mySidenav').css('left', '-250px');
    }
});


// hamburger end

// accordian
$(document).ready(function() {
    $(".set > a").on("click", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this)
                .siblings(".content")
                .slideUp(200);
            $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
        } else {
            $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
            $(this)
                .find("i")
                .removeClass("fa-plus")
                .addClass("fa-minus");
            $(".set > a").removeClass("active");
            $(this).addClass("active");
            $(".content").slideUp(200);
            $(this)
                .siblings(".content")
                .slideDown(200);
        }
    });
});

// accordian end

// slick 
$('.prolftSlick').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: false,
    speed: 1000,
    slidesToScroll: 1,
    slidesToShow: 1,
});

// slick end

// select 2
$(document).ready(function() {
    $(".js-select2").select2();
    $(".js-select2-multi").select2();
  
    $(".large").select2({
      dropdownCssClass: "big-drop",
    });
  });

// select 2 end 
// scroll tab 
$(".section1").click(function() {
	$('html, body').animate({
	scrollTop: $(".about").offset().top
	}, 1000);
	});
	$(".section2").click(function() {
	$('html, body').animate({
	scrollTop: $(".foodxApp").offset().top
	}, 1000);
	});
	$(".section3").click(function() {
	$('html, body').animate({
	scrollTop: $(".hereWork").offset().top
	}, 1000);
	});
	$(".section4").click(function() {
	$('html, body').animate({
	scrollTop: $(".price").offset().top
	}, 1000);
	});
	$(".section5").click(function() {
	$('html, body').animate({
	scrollTop: $(".customer").offset().top
	}, 1000);
	});
// scroll tab end

// setTimout is not necessary
setTimeout(function() {
  
    $('.recaptcha').each(function() {
      grecaptcha.render(this.id, {
        'sitekey': '6LdVkwkUAAAAACeeETRX--v9Js0vWyjQOTIZxxeB',
        "theme":"light"
      });
    });
    
  }, 2000);


//   country code 
var input = document.querySelector("#phone");
window.intlTelInput(input, {
    nationalMode: false,
    utilsScript: "js/utils.js",
});

var input = document.querySelector("#phone2");
window.intlTelInput(input, {
    nationalMode: false,
    utilsScript: "https://www.appxhub.com/foodx/js/utils.js",

});



$('#phone').click(function() {
    var elmcode = $(this).prev('.iti__flag-container').find('ul.iti__country-list').find('.iti__active').find(".iti__dial-code").text();
    $(this).val(elmcode + ' - ');
});

$('#phone2').click(function() {
    var elmcode = $(this).prev('.iti__flag-container').find('ul.iti__country-list').find('.iti__active').find(".iti__dial-code").text();
    $(this).val(elmcode + ' - ');
});


//modal
  