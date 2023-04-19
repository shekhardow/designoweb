
$(document).on("click", ".navbar-expand-md .navbar-nav .nav-link", function () {
  $(".navbar-expand-md .navbar-nav .nav-link").removeClass("active");
  $(this).addClass("active");
});
$(document).on("click", ".medxAppIn ul li a", function () {
  var id = $(this).data("id");
  $(".medxAppIn ul li a").removeClass("active");
  $(this).addClass("active");
  $(".ShowApp").removeClass("active");
  $(".app" + id).addClass("active");
});
$(document).on("click", ".cloneBtn ul li a", function () {
  $(".cloneBtn ul li a").removeClass("active");
  $(this).addClass("active");
});

