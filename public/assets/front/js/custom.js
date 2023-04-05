$(window).scroll(function () {
  if ($(window).scrollTop() >= 50) {
    $(".pageHeader").addClass("fixedHeader");
  } else {
    $(".pageHeader").removeClass("fixedHeader");
  }
});

// Top Creations Slider Start

// $(".creationSlider").slick({
//   dots: true,
//   arrows: false,
//   autoplay: true,
//   autoplaySpeed: 3000,
//   infinite: false,
//   slidesToShow: 1,
//   fade: true,
// });

// Top Creations Slider End

// Faqs Dropdown Start
$(document).ready(function () {
  $(".faqHeading a").on("click", function () {
    if ($(this).parents(".faqsQuest").hasClass("active")) {
      $(this).parents(".faqsQuest").removeClass("active");
      $(this).parents(".faqsQuest").find(".faqContent").slideUp();
      $(this)
        .parents(".faqsQuest")
        .find(".faqToggleIcon i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    } else {
      $(".faqHeading a").parents(".faqsQuest").removeClass("active");
      $(".faqHeading a").parents(".faqsQuest").find(".faqContent").slideUp();
      $(".faqHeading a")
        .parents(".faqsQuest")
        .find(".faqToggleIcon i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this).parents(".faqsQuest").addClass("active");
      $(this).parents(".faqsQuest").find(".faqContent").slideDown();
      $(this)
        .parents(".faqsQuest")
        .find(".faqToggleIcon i")
        .addClass("fa-minus")
        .removeClass("fa-plus");
    }
  });
});
// Faqs Dropdown End

// Sidebar Start

$(".navbar-toggler").click(function () {
  if ($(this).parents(".navbar").find(".navbar-collapse").hasClass("show")) {
    $(".navbar-expand-md .navbar-collapse").css("left", "-250px");
  } else {
    $(".navbar-expand-md .navbar-collapse").css("left", "0px");
  }
});

// Sidebar End

// Navbar Button Style Start

$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    } else {
      $(this).addClass("active");
    }
  });
});

// Navbar Button Style End


// Menus scroll to section start
$(document).on('click', '.scrollAbout', function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#aboutSection").offset().top - 50
    }, 1000);
});

$(document).on('click', '.scrollServices', function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#servicesSection").offset().top - 50
    }, 1000);
});

$(document).on('click', '.scrollTechnology', function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#techSection").offset().top - 50
    }, 1000);
});

$(document).on('click', '.scrollProject', function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#projetsSection").offset().top - 80
    }, 1000);
});

$(document).on('click', '.scrollAbout, .scrollServices, .scrollTechnology, .scrollProject, .menuOverlay', function(){
  if($(window).width() < 991){
    $('.navbar').find(".navbar-collapse").removeClass("show");
    $(".navbar-expand-md .navbar-collapse").css("left", "-250px");
    $('.navbar-toggler').removeClass('active');
  }
})


// Menus scroll to section end

// $(document).on('click', '.nav-link', function(){
//     if($(this).hasClass('activeMenu')){
//         $(this).addClass('activeMenu');
//     }
//     else{
//         $('.nav-link').removeClass('activeMenu');
//         $(this).addClass('activeMenu');
//     }
// })