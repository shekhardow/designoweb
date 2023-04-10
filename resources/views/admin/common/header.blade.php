<!DOCTYPE html>
<html lang="en">

<head>
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
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
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
            *{
                /* font-family:"CircularStd",sans-serif !important; */
            }
        </style>
		
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
		<link href="<?php echo url('public/assets/vendors/base/vendors.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo url('public/assets/demo/default/base/style.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo url('public/assets/vendors/custom/datatables/datatables.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo url('public/assets/admin/css/style.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo url('public/assets/vendors/custom/datatables/datatables.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo url('public/assets/vendors/dropify/dist/css/dropify.min.css');?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <div class="loader-admin"></div>
            <!-- begin:: Page -->
            <div class="m-grid m-grid--hor m-grid--root m-page">
    
                <!-- BEGIN: Header -->
                <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
                    <div class="m-container m-container--fluid m-container--full-height">
                        <div class="m-stack m-stack--ver m-stack--desktop">
    
                            <!-- BEGIN: Brand -->
                            <div class="m-stack__item m-brand  m-brand--skin-dark ">
                                <div class="m-stack m-stack--ver m-stack--general">
                                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                        <a href="<?php echo url('admin/dashboard');?>" class="m-brand__logo-wrapper">
                                            <img alt="" class="company-logo" src="<?php echo url('uploads/admin/profilePic/'.$admin_detail->image_url);?>" />
                                        </a>
                                    </div>
                                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
    
                                        <!-- BEGIN: Left Aside Minimize Toggle -->
                                        <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                            <span></span>
                                        </a>
    
                                        <!-- END -->
    
                                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                        <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                            <span></span>
                                        </a>
    
                                        <!-- END -->
    
                                        <!-- BEGIN: Responsive Header Menu Toggler -->
                                        <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                            <span></span>
                                        </a>
    
                                        <!-- END -->
    
                                        <!-- BEGIN: Topbar Toggler -->
                                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:void(0);" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                            <i class="flaticon-more"></i>
                                        </a>
    
                                        <!-- BEGIN: Topbar Toggler -->
                                    </div>
                                </div>
                            </div>
    
                            <!-- END: Brand -->
                            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                                <!-- BEGIN: Topbar -->
                                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                                    <div class="m-stack__item m-topbar__nav-wrapper">
                                        <ul class="m-topbar__nav m-nav m-nav--inline">
                                        <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                             m-dropdown-toggle="click">
                                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                                    <span class="m-topbar__userpic">
                                                    <?php if(!empty($admin_detail)){ ?>
                                                        <img src="<?php echo url('uploads/admin/profilePic/'.$admin_detail->profile_image); ?>" class="m--img-rounded m--marginless"alt="" />
                                                    <?php }else{ ?>
                                                        <img src="<?php echo url('public/assets/admin/profile_icon.png'); ?>" class="m--img-rounded m--marginless" alt="" />
                                                    <?php } ?>
                                                    </span>
                                                    <span class="m-topbar__username m--hide">Nick</span>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="color: #f82912;"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__header m--align-center" style="background: url(<?php echo url('public/assets/admin/profile_bg.jpg')?>); background-size: cover;">
                                                            <div class="m-card-user m-card-user--skin-dark">
                                                                <div class="m-card-user__pic">
                                                                <?php if(!empty($admin_detail)){ ?>
                                                                    <img src="<?php echo url('uploads/admin/profilePic/'.$admin_detail->profile_image); ?>" class="m--img-rounded m--marginless"alt="" />
                                                                <?php }else{ ?>
                                                                    <img src="<?php echo url('public/assets/admin/profile_icon.png'); ?>" class="m--img-rounded m--marginless" alt="" />
                                                                <?php } ?>
                                                                    
                                                                </div>
                                                                <div class="m-card-user__details">
                                                                    <span class="m-card-user__name m--font-weight-500"><?php echo ucwords(strtolower($admin_detail->name)); ?></span>
                                                                    <a href="" class="m-card-user__email m--font-weight-300 m-link"><?php echo $admin_detail->email; ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav m-nav--skin-light">
                                                                    <li class="m-nav__section m--hide">
                                                                        <span class="m-nav__section-text">Section</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="<?php echo url('admin/profile');?>" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                            <span class="m-nav__link-title">
                                                                                <span class="m-nav__link-wrap">
                                                                                    <span class="m-nav__link-text">My Profile</span>
                                                                                    <span class="m-nav__link-badge"></span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="<?php echo route('admin/logout'); ?>" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder logout">Logout</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
    
                                <!-- END: Topbar -->
                            </div>
                        </div>
                    </div>
                </header>
    
                <!-- END: Header -->
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">