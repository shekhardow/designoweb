<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo !empty($meta_title) ? $meta_title : "$title | Designoweb Technologies"; ?></title>
    <?php if(!empty($meta_description)){ ?>
        <meta name="description" content="<?php echo @$meta_description; ?>" />
    <?php } ?>
    <?php if(!empty($meta_keywords)){ ?>
        <meta name="keywords" content="<?php echo @$meta_keywords; ?>" />
    <?php } ?>
    <link href="<?php echo url('public/front/img/fav.svg'); ?>" rel="icon" type="icon/image" />
    <link href="<?php echo url('public/front/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/slick-theme.css'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/intlTelInput.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/style.css?v:2.6'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/media.css?v:2.6'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Google tag (gtag.js) Start -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5KZ1PBQQGB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5KZ1PBQQGB');
</script>
<!-- Google tag (gtag.js) End -->

</head>

<body>

    <!-- Header Start -->
    <div class="header boxs">
        <div class="container">
            <div class="headerInner boxs">
                <nav class="navbar navbar-default">
                    <nav class="navbar navbar-expand-md flexBox boxs">
                        <div class="headerLogo">
                            <span class="navbar-brand">
                                <a href="<?php echo route('front/index'); ?>"><img src="<?php echo url('public/front/img/logo.png'); ?>" class="img-fluid" alt="Logo"></a>
                            </span>
                        </div>
                        <div class="headerRight boxs flexBox">
                            <div id="mainMenu" class="navbar-collapse mainMenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Services</a>
                                        <div class="subMenusOuter boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs">
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner servicesSubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="container">
                                                            <div class="submenuDropbox boxs">
                                                                <div class="menuLeft boxs">
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo url('services_ui_ux_design/ui_ux_design'); ?>">UI/UX Design</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_ui_ux_design/product_design'); ?>">Product Design</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_ui_ux_design/web_design'); ?>">Web Design</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_ui_ux_design/mobile_app_design'); ?>">Mobile App Design</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_ui_ux_design/brand_design'); ?>">Brand Design</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo url('services_web_app_development/web_app_development'); ?>">Web App Development</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_web_app_development/saas_website'); ?>">SAAS Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_web_app_development/cms_website'); ?>">CMS Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_web_app_development/ecommerce_website'); ?>">Ecommerce Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_web_app_development/custom_website'); ?>">Custom Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_web_app_development/custom_crm'); ?>">Custom CRM</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo url('services_mobile_app_development/mobile_app_development'); ?>">Mobile App Development</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_mobile_app_development/native_apps'); ?>">Native Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_mobile_app_development/hybrid_apps'); ?>">Hybrid Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_mobile_app_development/tv_apps'); ?>">TV Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_mobile_app_development/wearable_apps'); ?>">Wearable Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_mobile_app_development/iot_apps'); ?>">IOT Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_mobile_app_development/ar_vr_apps'); ?>">AR VR Apps</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs"><a class="subMenuLinks" href="<?php echo url('services_quality_assurance/quality_assurance'); ?>">Quality Assurance</a></span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_quality_assurance/manual_testing'); ?>">Manual Testing</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_quality_assurance/automation_testing'); ?>">Automation Testing</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('services_quality_assurance/user_experience_testing'); ?>">User Experience Testing</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('front/services_growth_hacking'); ?>">Growth Hacking</a>
                                                                            </span>
                                                                            <!-- <span class="submenuSubhead boxs">With Designoweb, center around the quick development of an organization.</span> -->
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--<div class="submenuBoxs boxs">-->
                                                                    <!--    <div class="subMenuLists boxs">-->
                                                                    <!--        <span class="subMenuHeading boxs"><a class="subMenuLinks" href="<?php echo url('services_seo/seo'); ?>">SEO</a></span>-->
                                                                    <!--        <div class="subMenuList boxs">-->
                                                                    <!--            <ul>-->
                                                                    <!--                <li>-->
                                                                    <!--                    <span><a href="<?php echo url('services_seo/performance_marketing'); ?>">Performance Marketing</a></span>-->
                                                                    <!--                </li>-->
                                                                    <!--                <li>-->
                                                                    <!--                    <span><a href="<?php echo url('services_seo/google_ads'); ?>">Google Ads</a></span>-->
                                                                    <!--                </li>-->
                                                                    <!--                <li>-->
                                                                    <!--                    <span><a href="<?php echo url('services_seo/meta_ads'); ?>">Meta Ads</a></span>-->
                                                                    <!--                </li>-->
                                                                    <!--            </ul>-->
                                                                    <!--        </div>-->
                                                                    <!--    </div>-->
                                                                    <!--</div>-->
                                                                </div>
                                                                <div class="menuRight boxs">
                                                                    <div class="menuRightInner submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading subMenuHeading2 boxs">Startup Booster</span>
                                                                            <!-- <span class="submenuSubhead submenuSubhead2 boxs">At Designoweb Technologies, work and fun go hand in hand.</span> -->
                                                                            <div class="subMenuList subMenuList2 boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_idea_consulting'); ?>">Idea Consulting</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_prototyping'); ?>">Prototyping</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_mvp_development'); ?>">MVP Development</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_product_development'); ?>">Product Development</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="subMenuBtn boxs">
                                                                                <a class="btnStyle smallBtn smallBtn3" href="<?php echo route('front/contact'); ?>">Let’s Build Your Idea<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item customMenuNew">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Our Products</a>
                                        <div class="subMenusOuter boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs">
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner technologySubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="submenuDropbox boxs">
                                                            <div class="menuLeft boxs">
                                                                <div class="submenuBoxs boxs">
                                                                    <div class="subMenuLists boxs">
                                                                        <div class="subMenuList boxs">
                                                                            <ul>
                                                                                <li>
                                                                                    <span><a href="<?php echo route('front/foodx'); ?>" target="_blank">FoodX</a></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span><a href="<?php echo route('front/grocerx'); ?>" target="_blank">GrocerX</a></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span><a href="<?php echo route('front/medx'); ?>" target="_blank">MedX</a></span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Offshore Developers</a>
                                        <span class="hireOption">Hire</span>
                                        <div class="subMenusOuter boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs">
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner offshoreSubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="container">
                                                            <div class="submenuDropbox boxs">
                                                                <div class="menuLeft boxs">
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo url('offshore_hire_web_developers/hire_web_developers'); ?>">Hire Web Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/java'); ?>">Java</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/python'); ?>">Python</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/php'); ?>">PHP</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/dotnet'); ?>">.NET</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/ruby_on_rails'); ?>">Ruby on Rails</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/laravel'); ?>">Laravel</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/magento'); ?>">Magento</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/shopify'); ?>">Shopify</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_web_developers/wordpress'); ?>">Wordpress</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo url('offshore_hire_app_developers/hire_app_developers'); ?>">Hire App Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_app_developers/android'); ?>">Android</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_app_developers/ios'); ?>">iOS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_app_developers/react_native'); ?>">React Native</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_app_developers/flutter'); ?>">Flutter</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo url('offshore_hire_js_developers/hire_js_developers'); ?>">Hire JS Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_js_developers/react_js'); ?>">React JS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_js_developers/angular_js'); ?>">Angular JS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_js_developers/node_js'); ?>">Node JS</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo url('offshore_hire_fullstack_developers/hire_fullstack_developers'); ?>">Hire Full Stack Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_fullstack_developers/mean_stack'); ?>">Mean Stack</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo url('offshore_hire_fullstack_developers/mern_stack'); ?>">Mern Stack</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs"><span class="">Others</span></span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_ui_ux_designer'); ?>">UI/UX Designer</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_business_analyst'); ?>">Business Analyst</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_project_manager'); ?>">Project Manager</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_blockchain_developer'); ?>">Blockchain Developer</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_salesforce_developer'); ?>">Salesforce Developer</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="menuRight boxs">
                                                                    <div class="menuRightInner submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading subMenuHeading2 boxs">Team Extension</span>
                                                                            <span class="submenuSubhead submenuSubhead2 boxs">We help global industries, innovators, enterprises, and entrepreneurs enhance their development strength with dedicated teams and staff augmentation services.</span>
                                                                            <div class="subMenuList subMenuList2 boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_development_center'); ?>">Offshore Development Center</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_dedicated_teams'); ?>">Dedicated Teams</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_staff_augmentation'); ?>">IT Staff Augmentation</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="subMenuBtn boxs">
                                                                                <a class="btnStyle smallBtn smallBtn3" href="<?php echo route('front/contact'); ?>">Build Your Team<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Technologies</a>
                                        <div class="subMenusOuter boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs">
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner technologySubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="container">
                                                            <div class="submenuDropbox boxs">
                                                                <div class="menuLeft boxs">
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs"><span class="">Mobile</span></span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_ios'); ?>">iOS App</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_android'); ?>">Android App</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_flutter'); ?>">Flutter App</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_react_native'); ?>">React Native App</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_iot'); ?>">Internet of Things (IOT)</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_ar'); ?>">Augmented Reality</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_vr'); ?>">Virtual Reality</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs"><span class="">Web</span></span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_java'); ?>">Java</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_php'); ?>">PHP</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_python'); ?>">Python</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_ruby_on_rails'); ?>">Ruby on Rails</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_laravel'); ?>">Laravel</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_mean'); ?>">MEAN</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_mern'); ?>">MERN</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_angular_js'); ?>">Angular JS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_react_js'); ?>">React JS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_shopify'); ?>">Shopify</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_wordpress'); ?>">Wordpress</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs"><span class="">Cloud & Devops</span></span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_aws'); ?>">AWS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_azure'); ?>">Azure</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/technology_docker'); ?>">Docker</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="menuRight menuRight2 boxs">
                                                                    <div class="menuRightInner submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <div class="menuRightTop boxs">
                                                                                <span class="subMenuHeadingTop subMenuHeadingTopNew boxs">Providing Data And Facts <br />To The Property Industry</span>
                                                                                <span class="subMenuTopBanner boxs">
                                                                                    <img class="img-fluid" src="<?php echo url('public/front/img/tech-menu-banner.png'); ?>" alt="Project Image" />
                                                                                </span>
                                                                            </div>
                                                                            <div class="menuRightBtm boxs">
                                                                                <span class="subMenuHeading subMenuHeading4 boxs">Ultimate Property Dashboard</span>
                                                                                <span class="submenuSubhead submenuSubhead2 boxs">Enter into the world of properties and it's industry from immense activity and opportunity to one of knowledge and obviously recognizable open doors...</span>
                                                                                <span class="subMenuLinks boxs"><a class="lnkStyle" href="<?php echo route('front/case_studies'); ?>">View Case Study</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item customMenuNew">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Work</a>
                                        <div class="subMenusOuter boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs">
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner technologySubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <!-- <div class="container"> -->
                                                        <div class="submenuDropbox boxs">
                                                            <div class="menuLeft boxs">
                                                                <div class="submenuBoxs boxs">
                                                                    <div class="subMenuLists boxs">
                                                                        <div class="subMenuList boxs">
                                                                            <ul>
                                                                                <li>
                                                                                    <span><a href="<?php echo route('front/case_studies'); ?>">Case Studies</a></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span><a href="<?php echo route('front/portfolio'); ?>">Portfolio</a></span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Company</a>
                                        <div class="subMenusOuter boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs">
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner companySubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="container">
                                                            <div class="submenuDropbox boxs">
                                                                <div class="menuLeft menuLeft2 boxs">
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/about'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg1.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <span class="subMenuHeadings boxs">
                                                                                    <span class="boxs">
                                                                                        <h5>About Us</h5>
                                                                                    </span>
                                                                                    <p class="boxs">Designoweb will help you to design and develop greatness.</p>
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/our_process'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg2.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <span class="subMenuHeadings boxs">
                                                                                    <span class="boxs">
                                                                                        <h5>Our Process</h5>
                                                                                    </span>
                                                                                    <p class="boxs">Weave your dreams together with the team of Designoweb.</p>
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/testimonials'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg3.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <span class="subMenuHeadings boxs">
                                                                                    <span class="boxs">
                                                                                        <h5>Testimonials</h5>
                                                                                    </span>
                                                                                    <p class="boxs">Statements from our past customers to build your trust.</p>
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/career'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg4.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <span class="subMenuHeadings boxs">
                                                                                    <span class="boxs">
                                                                                        <h5>Careers</h5>
                                                                                    </span>
                                                                                    <p class="boxs">A place to provide everyone an opportunity in the areas of their expertise.</p>
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/blog'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg5.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <span class="subMenuHeadings boxs">
                                                                                    <span class="boxs">
                                                                                        <h5>Blog</h5>
                                                                                    </span>
                                                                                    <p class="boxs">Some blogs to freshen up your mind and knock ideas.</p>
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/press_release'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg6.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <span class="subMenuHeadings boxs">
                                                                                    <span class="boxs">
                                                                                        <h5>Press Release</h5>
                                                                                    </span>
                                                                                    <p class="boxs">Official statement from the news directed for public release.</p>
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="headerButton">
                                <span><a href="<?php echo route('front/contact'); ?>" class="btnStyle smallBtn">Contact Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                <span><button class="navbar-toggler"><i class="fas fa-bars"></i></button></span>
                            </div>
                        </div>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->