var Events = function () {
	this.__construct = function () {
		this.loader();
		this.commonForm();
		this.submitForm();
	};

	this.loader = function () {
		$(document).ready(function () {
			$(".loadermain").fadeOut("slow");
		});
	};

	this.commonForm = function () {
		$(document).on("submit", "#common-form", function (evt) {
			evt.preventDefault();
			$(".loader").fadeIn("slow");
			var url = $(this).attr("action");
			var contact_us = $(this).data("contact");
			var postdata = $(this).serialize();
			$('.loadermain').fadeIn('slow');
			$.post(url, postdata, function (out) {
				$(".loadermain").fadeOut("slow");
				$(".form-group > .text-danger").remove();
				if (out.result === 0) {
					if (contact_us === "") {
						$("html, body").animate({ scrollTop: 0, }, 800);
					}
					for (var i in out.errors) {
						$("#" + i).parents(".form-group").append('<span class="text-danger">' + out.errors[i] + "</span>");
					}
				}
				if (out.result === 1) {
					toastr.remove();
					toastr.success(out.msg);
					if (out.url !== undefined) {
						window.setTimeout(function () {
							window.location.href = out.url;
						}, 1000);
					}
				}
				if (out.result === -1) {
					toastr.remove();
					toastr.error(out.msg);
				}
				if (out.result === -2) {
					toastr.remove();
					toastr.error(out.msg);
					window.setTimeout(function () {
						window.location.href = out.url;
					}, 1000);
				}
				if (out.result === 5) {
					toastr.remove();
					toastr.success(out.msg);
					if (out.url !== undefined) {
						window.setTimeout(function () {
							window.location.href = out.url;
						}, 1000);
					}
				}
				if (out.result === -5) {
					toastr.remove();
					toastr.error(out.msg);
					window.setTimeout(function () {
						window.location.href = out.url;
					}, 1000);
				}
			});
		});
	};

	this.submitForm = function () {
		$(document).on("submit", "#submit-form", function (evt) {
			evt.preventDefault();
			$(".loader").fadeIn("slow");
			$.ajax({
				url: $(this).attr("action"),
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				success: function (out) {
					$(".loader").fadeOut("slow");
					$(".form-group > .text-danger").remove();
					if (out.result === 0) {
						// $("html, body").animate( { scrollTop: 0, }, 800 );
						for (var i in out.errors) {
							$("#" + i).parents(".form-group").append('<span class="text-danger">' + out.errors[i] + "</span>");
							$("#" + i).focus();
						}
					}
					if (out.result === 1) {
						toastr.remove();
						toastr.success(out.msg);
						window.setTimeout(function () { 
						    window.location.href = out.url;
						}, 1000);
					}
					if (out.result === -1) {
						toastr.remove();
						toastr.error(out.msg);
						return false;
					}
				},
			});
		});
		
		$(document).on("submit", "#submit-form2", function (evt) {
			evt.preventDefault();
			$(".loader").fadeIn("slow");
			$.ajax({
				url: $(this).attr("action"),
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				success: function (out) {
					$(".loader").fadeOut("slow");
					$(".form-group > .text-danger").remove();
					if (out.result === 0) {
						for (var i in out.errors) {
							$("#" + i).parents(".form-group").append('<span class="text-danger">' + out.errors[i] + "</span>");
							$("#" + i).focus();
						}
					}
					if (out.result === 1) {
						toastr.remove();
						toastr.success(out.msg);
						window.setTimeout(function () { 
						    window.location.href = out.url;
						}, 1000);
					}
					if (out.result === -1) {
						toastr.remove();
						toastr.error(out.msg);
						return false;
					}
				},
			});
		});
		
		$(document).on("submit", "#submit-form3", function (evt) {
			evt.preventDefault();
			$(".loader").fadeIn("slow");
			$.ajax({
				url: $(this).attr("action"),
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				success: function (out) {
					$(".loader").fadeOut("slow");
					$(".form-group > .text-danger").remove();
					if (out.result === 0) {
						for (var i in out.errors) {
							$("#" + i).parents(".form-group").append('<span class="text-danger">' + out.errors[i] + "</span>");
							$("#" + i).focus();
						}
					}
					if (out.result === 1) {
						toastr.remove();
						toastr.success(out.msg);
						window.setTimeout(function () { 
						    window.location.href = out.url;
						}, 1000);
					}
					if (out.result === -1) {
						toastr.remove();
						toastr.error(out.msg);
						return false;
					}
				},
			});
		});
		
		$(document).on("submit", "#submit-form4", function (evt) {
			evt.preventDefault();
			$(".loader").fadeIn("slow");
			$.ajax({
				url: $(this).attr("action"),
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				success: function (out) {
					$(".loader").fadeOut("slow");
					$(".form-group > .text-danger").remove();
					if (out.result === 0) {
						for (var i in out.errors) {
							$("#" + i).parents(".form-group").append('<span class="text-danger">' + out.errors[i] + "</span>");
							$("#" + i).focus();
						}
					}
					if (out.result === 1) {
						toastr.remove();
						toastr.success(out.msg);
						window.setTimeout(function () { 
						    window.location.href = out.url;
						}, 1000);
					}
					if (out.result === -1) {
						toastr.remove();
						toastr.error(out.msg);
						return false;
					}
				},
			});
		});
	};

	this.__construct();
};
var obj = new Events();
