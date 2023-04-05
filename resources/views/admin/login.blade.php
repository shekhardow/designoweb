<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<title>Admin <?php echo !empty($title) ? $title : NULL; ?> | Designoweb Technologies</title>
<link href="<?php echo url('public/assets/admin/fav.svg'); ?>" rel="icon" type="icon/image">
<meta name="description" content="Buttons examples">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<!----------------------------Google Map---------------------------------------------------->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!----------------------------Google Map---------------------------------------------------->
<script>
	WebFont.load({
		google: {
			"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
		},
		active: function() {
			sessionStorage.fonts = true;
		}
	});
</script>
<!-- To change font to circular std -->
<style>
	@font-face {
		font-family: "CircularStd";
		src: url('{{url("public/front/fonts/CircularStd-Regular.otf")}}');
	}

	@font-face {
		font-family: "CircularStd";
		font-weight: 500;
		src: url('{{url("public/front/fonts/CircularStd-Medium.otf")}}');
	}

	@font-face {
		font-family: "CircularStd";
		font-weight: 700;
		src: url('{{url("public/front/fonts/CircularStd-Bold.otf")}}');
	}

	@font-face {
		font-family: "CircularStd";
		font-weight: 900;
		src: url('{{url("public/front/fonts/CircularStd-Black.otf")}}');
	}

	* {
		/* font-family:"CircularStd",sans-serif !important; */
	}
</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<link href="<?php echo url('public/assets/vendors/base/vendors.bundle.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo url('public/assets/demo/default/base/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo url('public/assets/vendors/custom/datatables/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php //echo url('uploads/profilePic/'.$admin_detail->favicon_icon); ?>" />
<link href="<?php echo url('public/assets/admin/css/style.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo url('public/assets/vendors/custom/datatables/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo url('assets/vendors/dropify/dist/css/dropify.min.css'); ?>">
</head>
<!-- end::Head -->
<!-- end::Head -->

<!-- begin::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
			<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
				<div class="m-stack m-stack--hor m-stack--desktop">
					<div class="m-stack__item m-stack__item--fluid">
						<div class="m-login__wrapper">
							<div class="m-login__logo">
								<?php
								if (!empty($admin_detail->image_url)) { ?>
									<a href="javascript:void(0)">
										<img style="height: auto;width: 250px;" src="<?php echo url('public/assets/admin/fav.svg'); ?>">
									</a>
								<?php } else { ?>
									<a href="javascript:void(0)">
										<img style="height: auto;width: 250px;" src="<?php echo url('public/assets/admin/fav.svg'); ?>">
									</a>
								<?php } ?>
							</div>
							<div class="m-login__signin">
								<div class="m-login__head">
									<h3 class="m-login__title">Sign In To Admin</h3>
								</div>
								<form class="m-login__form m-form" id="common-form" action="<?php echo route('admin/do_login'); ?>">
									<div class="error_msg" id="error_msg"></div>
									<div class="form-group m-form__group">
										<input class="form-control m-input" type="text" placeholder="Email" name="email" id="email">
									</div>
									<div class="form-group m-form__group">
										<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" id="password">
									</div>
									<div class="row m-login__form-sub">
										<div class="col m--align-right">
											<a href="javascript:void(0)" id="m_login_forget_password" class="m-link">Forgot Password ?</a>
										</div>
									</div>
									<div class="m-login__form-action">
										<button type="submit" style="background-color: #5867dd;border-color: #5867dd;" class="btn btn-danger m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
									</div>
								</form>
							</div>

							<div class="m-login__forget-password">
								<div class="m-login__head">
									<h3 class="m-login__title">Forgot Password ?</h3>
									<div class="m-login__desc">We will send you an email on your registered email id to reset your password</div>
									<div class="m-login__desc">Enter your email to reset your password:</div>
								</div>
								<form class="m-login__form m-form" id="submit-form" action="<?php echo url('admin/forgot_password'); ?>" method="POST">
									<div class="error_msg" id="error_msg"></div>
									<div class="form-group m-form__group">
										<input class="form-control m-input" type="text" placeholder="Email" name="email" id="email" oninvalid="this.setCustomValidity('The Email field is required')" oninput="this.setCustomValidity('')" required autocomplete="off">
									</div>
									<div class="m-login__form-action">
										<button type="submit" style="background-color: #5867dd;border-color: #5867dd;" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">Request</button>&nbsp;&nbsp;
										<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center" style="background-image: url(<?php echo url('public/assets/admin/dwlogo.svg'); ?>)">
				<div class="m-grid__item">
					<h3 class="m-login__welcome"></h3>
					<p class="m-login__msg">
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- end:: Page -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php echo url('public/assets/vendors/base/vendors.bundle.js') ?>" type="text/javascript"></script>
	<script src="<?php echo url('public/assets/demo/default/base/scripts.bundle.js') ?>" type="text/javascript"></script>
	<script src="<?php echo url('public/assets/admin/js/event.js') ?>" type="text/javascript"></script>
	<script src="<?php echo url('public/assets/snippets/custom/pages/user/login.js'); ?>" type="text/javascript"></script>
</body>

<!-- end::Body -->

</html>