var Events = function() {
		(this.__construct = function() {
			this.loader(), this.commonForm(), this.submitForm();
		}),
		(this.loader = function() {
			$(document).ready(function() {
				$(".loadermain").fadeOut("slow");
			});
		}),
		(this.commonForm = function() {
			$(document).on("submit", "#common-form", function(r) {
				r.preventDefault(), $(".loader").fadeIn("slow");
				var e = $(this).attr("action"),
					o = $(this).data("contact"),
					t = $(this).serialize();
				$(".loadermain").fadeIn("slow"),
					$.post(e, t, function(r) {
						if (
							($(".loadermain").fadeOut("slow"),
								$(".form-group > .text-danger").remove(),
								0 === r.result)
						)
							for (var e in ("" === o &&
									$("html, body").animate({
										scrollTop: 0
									}, 800),
									r.errors))
								$("#" + e)
								.parents(".form-group")
								.append(
									'<span class="text-danger">' + r.errors[e] + "</span>"
								);
						1 === r.result &&
							((toastr.options = {
									closeButton: false,
									debug: false,
									newestOnTop: false,
									progressBar: false,
									positionClass: "toast-top-center",
									preventDuplicates: false,
									onclick: null,
									showDuration: "300",
									hideDuration: "1000",
									timeOut: "5000",
									extendedTimeOut: "1000",
									showEasing: "swing",
									hideEasing: "linear",
									showMethod: "fadeIn",
									hideMethod: "fadeOut",
								}),
								toastr.remove(),
								toastr.success(r.msg),
								void 0 !== r.url &&
								window.setTimeout(function() {
									window.location.href = r.url;
								}, 1e3)),
							-1 === r.result && (toastr.remove(), toastr.error(r.msg)),
							-2 === r.result &&
							(toastr.remove(),
								toastr.error(r.msg),
								window.setTimeout(function() {
									window.location.href = r.url;
								}, 1e3)),
							5 === r.result &&
							(toastr.remove(),
								toastr.success(r.msg),
								void 0 !== r.url &&
								window.setTimeout(function() {
									window.location.href = r.url;
								}, 1e3)),
							-5 === r.result &&
							(toastr.remove(),
								toastr.error(r.msg),
								window.setTimeout(function() {
									window.location.href = r.url;
								}, 1e3));
					});
			});
		}),
		(this.submitForm = function() {
			$(document).on("submit", "#submit-form", function(event) {
				event.preventDefault();
				$(".loader").fadeIn("slow");

				$.ajax({
					url: $(this).attr("action"),
					type: "post",
					data: new FormData(this),
					processData: false,
					contentType: false,
					success: function(response) {
						$(".loader").fadeOut("slow");
						$(".form-group > .text-danger").remove();
						$(".g-recaptcha").find("#g-recaptcha-response-error").remove();

						if (response.result === 0) {
							for (var field in response.errors) {
								$("#" + field).parents(".form-group").append('<span class="text-danger">' + response.errors[field] + "</span>");
								$("#" + field).focus();
							}

							if (response.errors["g-recaptcha-response"]) {
								// toastr.error(r.errors["g-recaptcha-response"], "reCAPTCHA Error");
								$(".g-recaptcha").append(
									'<span class="text-danger" id="g-recaptcha-response-error">' + response.errors["g-recaptcha-response"] + "</span>"
								);
							}
						}

						if (response.result === 1) {
							toastr.remove();
							toastr.success(response.msg);
							window.location.reload();
						}

						if (response.result === -1) {
							toastr.remove();
							toastr.error(response.msg);
							return false;
						}
					},
				});
			});


			$(document).on("submit", "#submit-form2", function(event) {
				event.preventDefault();
				$(".loader").fadeIn("slow");

				$.ajax({
					url: $(this).attr("action"),
					type: "post",
					data: new FormData(this),
					processData: false,
					contentType: false,
					success: function(response) {
						$(".loader").fadeOut("slow");
						$(".form-group > .text-danger").remove();
						$(".g-recaptcha").find("#g-recaptcha-response-error").remove();

						if (response.result === 0) {
							for (var field in response.errors) {
								$("#" + field).parents(".form-group").append('<span class="text-danger">' + response.errors[field] + "</span>");
								$("#" + field).focus();
							}

							if (response.errors["g-recaptcha-response"]) {
								// toastr.error(r.errors["g-recaptcha-response"], "reCAPTCHA Error");
								$(".g-recaptcha").append(
									'<span class="text-danger" id="g-recaptcha-response-error">' + response.errors["g-recaptcha-response"] + "</span>"
								);
							}
						}

						if (response.result === 1) {
							toastr.remove();
							toastr.success(response.msg);

							if (response.url !== undefined) {
								window.setTimeout(function() {
									window.location.href = response.url;
								}, 1000);
							}
						}

						if (response.result === -1) {
							toastr.remove();
							toastr.error(response.msg);
							return false;
						}
					},
				});
			});


			$(document).on("submit", "#submit-form3", function(r) {
				r.preventDefault();
				$(".loader").fadeIn("slow");

				$.ajax({
					url: $(this).attr("action"),
					type: "post",
					data: new FormData(this),
					processData: false,
					contentType: false,
					success: function(r) {
						$(".loader").fadeOut("slow");
						$(".error-form > .text-danger").remove();
						$(".g-recaptcha").find("#g-recaptcha-response-error").remove();

						if (r.result === 0) {
							for (var e in r.errors) {
								$("#" + e).parents(".error-form").append('<span class="text-danger">' + r.errors[e] + "</span>");
							}

							if (r.errors["g-recaptcha-response"]) {
								// toastr.error(r.errors["g-recaptcha-response"], "reCAPTCHA Error");
								$(".g-recaptcha").append(
									'<span class="text-danger" id="g-recaptcha-response-error">' + r.errors["g-recaptcha-response"] + "</span>"
								);
							}
						}

						if (r.result === 1) {
							toastr.remove();
							toastr.success(r.msg);
							window.location.reload();
						}

						if (r.result === -1) {
							toastr.remove();
							toastr.error(r.msg);
							return false;
						}
					},
				});
			});

		}),
		this.__construct();
	},
	obj = new Events();