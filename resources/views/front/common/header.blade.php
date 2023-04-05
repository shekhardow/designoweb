<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php if(!empty($title)){ ?>
        <title><?php echo !empty($meta_title) ? @$meta_title : @$title." | Designoweb Technologies"; ?></title>
    <?php }else{ ?>
        <title><?php echo "404 Not Found | Designoweb Technologies"; ?></title>
    <?php } ?>
    <?php if(!empty($meta_description)){ ?>
        <meta name="description" content="<?php echo @$meta_description; ?>" />
    <?php } ?>
    <?php if(!empty($meta_keywords)){ ?>
        <meta name="keywords" content="<?php echo @$meta_keywords; ?>" />
    <?php } ?>
    
    <?php if($title == "FoodX"){ ?>
    
    
        <link rel="icon" href="<?php echo url('public/front/img/foodx/fav.svg'); ?>" type="image/ico" sizes="16x16">
        <link rel="stylesheet" href="<?php echo url('public/front/css/common/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/common/hamburgers.css'); ?>" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/common/intlTelInput.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/common/slick-theme.css'); ?>" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/common/slick.css'); ?>" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/foodx/style.css'); ?>" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/foodx/media.css'); ?>" />
        
        <link href="<?php echo url('public/front/img/fav.svg'); ?>" rel="icon" type="icon/image" />
        <link href="<?php echo url('public/front/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
        <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/slick-theme.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/intlTelInput.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/style.css?v:16.0'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/media.css?v:16.0'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        
        
        
    <?php }else{ ?>
        <link href="<?php echo url('public/front/img/fav.svg'); ?>" rel="icon" type="icon/image" />
        <link href="<?php echo url('public/front/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
        <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/slick-theme.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/intlTelInput.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/style.css?v:16.0'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/media.css?v:16.0'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php } ?>
    
    <!-- Google tag (gtag.js) Start -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5KZ1PBQQGB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-5KZ1PBQQGB');
    </script>
    <!-- Google tag (gtag.js) End -->
    
    <!--Organisation Schema For SEO Start-->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Designoweb Technologies Pvt Ltd",
          "alternateName": "Designoweb Technologies",
          "url": "https://designoweb.com",
          "logo": "https://designoweb.com/public/front/img/logo.png",
          "sameAs": [
            "https://www.instagram.com/designoweb/",
            "https://www.linkedin.com/company/designoweb",
            "https://www.facebook.com/designowebtech/"
          ]
        }
    </script>
    <!--Organisation Schema For SEO End-->
    
    <!--Faqs schema start-->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What services does your app development company provide?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our app development company provides end-to-end mobile app development services, including app design, development, testing, deployment, and maintenance. We provide Web App Solutions, SAAS Solutions, E-commmerce , Mobile App Development, UX Strategy, Quality Assurance and AR/VR Tech to name a few."
        }
      },{
        "@type": "Question",
        "name": "What is the process for developing an app with your company?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our app development process typically includes the following steps: requirements gathering, app design, development, testing, deployment, and maintenance. We work closely with our clients throughout the process to ensure that their vision is realized and that the app meets their specific needs."
        }
      },{
        "@type": "Question",
        "name": "What platforms do you develop apps for?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We develop apps for both iOS and Android platforms. We also provide cross-platform app development services using technologies such as React Native and Flutter."
        }
      },{
        "@type": "Question",
        "name": "How long does it typically take to develop an app?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The time required to develop an app depends on several factors, including the complexity of the app, the number of features, and the platform. However, on average, it can take anywhere from 4-8 months to develop a high-quality mobile app."
        }
      },{
        "@type": "Question",
        "name": "What is your app development team's experience?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our app development team consists of experienced developers, designers, and testers who have worked on a variety of projects across multiple industries. We have experience developing apps for startups, small businesses, and large enterprises."
        }
      },{
        "@type": "Question",
        "name": "Can you provide examples of apps you have developed in the past?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we can provide examples of apps we have developed in the past. Please visit our website or contact us to learn more about our past projects."
        }
      },{
        "@type": "Question",
        "name": "How do you ensure the security and privacy of user data?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We take security and privacy seriously and follow industry best practices to ensure the security and privacy of user data. We use encryption technologies, implement user authentication and authorization, and follow security guidelines to protect user data."
        }
      },{
        "@type": "Question",
        "name": "How do you handle post-launch support and maintenance?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide post-launch support and maintenance services to ensure that the app runs smoothly and any issues are resolved quickly. We offer different maintenance plans to cater to our client's specific needs."
        }
      },{
        "@type": "Question",
        "name": "What is the cost of app development with your company?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The cost of app development varies depending on the scope of the project, the features, and the platform. We provide customized pricing for each project, and we work closely with our clients to ensure that the development cost fits within their budget."
        }
      },{
        "@type": "Question",
        "name": "How do you approach app design and user experience?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We follow a user-centric approach to app design and development. We conduct user research, create user personas, and develop user journeys to ensure that the app meets the needs of the target audience. Our design team works closely with our clients to create a visually appealing and intuitive user interface."
        }
      },{
        "@type": "Question",
        "name": "Can you integrate third-party APIs into the app?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we can integrate third-party APIs into the app to enhance its functionality and provide a better user experience. We have experience integrating APIs such as payment gateways, social media APIs, and location-based APIs."
        }
      },{
        "@type": "Question",
        "name": "What is your approach to testing and quality assurance?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We follow a comprehensive testing and quality assurance process to ensure that the app is bug-free and meets the client's requirements. We conduct manual and automated testing and use tools such as Appium and Selenium to test the app on multiple devices and platforms."
        }
      },{
        "@type": "Question",
        "name": "Do you provide app analytics and reporting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide app analytics and reporting services to track the app's performance and user behavior. We use analytics tools such as Google Analytics and Mixpanel to provide detailed insights into the app's usage."
        }
      },{
        "@type": "Question",
        "name": "How do you handle app updates and new feature requests?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide app updates and new feature development services to ensure that the app stays relevant and up-to-date. We work closely with our clients to understand their requirements."
        }
      }]
    }
    </script>
    <!--Faqs schema End-->

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
                                                                                <a class="subMenuLinks" href="<?php echo route('front/services_ui_ux_design'); ?>">UI/UX Design</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_product_design'); ?>">Product Design</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_web_design'); ?>">Web Design</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_mobile_app_design'); ?>">Mobile App Design</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_brand_design'); ?>">Brand Design</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('front/services_web_app_development'); ?>">Web App Development</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_saas_website'); ?>">SAAS Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_cms_website'); ?>">CMS Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_ecommerce_website'); ?>">Ecommerce Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_custom_website'); ?>">Custom Website</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_custom_crm'); ?>">Custom CRM</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('front/services_mobile_app_development'); ?>">Mobile App Development</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_native_apps'); ?>">Native Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_hybrid_apps'); ?>">Hybrid Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_tv_apps'); ?>">TV Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_wearable_apps'); ?>">Wearable Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_iot_apps'); ?>">IOT Apps</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_ar_vr_apps'); ?>">AR VR Apps</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs"><a class="subMenuLinks" href="<?php echo route('front/services_quality_assurance'); ?>">Quality Assurance</a></span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_manual_testing'); ?>">Manual Testing</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_automation_testing'); ?>">Automation Testing</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_user_experience_testing'); ?>">User Experience Testing</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">Marketing Strategies</span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_google_ads'); ?>">Google Ads</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_meta_ads'); ?>">Meta Ads</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_performance_marketing'); ?>">Performance Marketing</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/services_seo'); ?>">SEO</a></span>
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
                                                                                <a class="subMenuLinks" href="<?php echo route('front/offshore_hire_web_developers'); ?>">Hire Web Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_java_developers'); ?>">Java</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_python_developers'); ?>">Python</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_php_developers'); ?>">PHP</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_dotnet_developers'); ?>">.NET</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_ruby_on_rails_developers'); ?>">Ruby on Rails</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_laravel_developers'); ?>">Laravel</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_magento_developers'); ?>">Magento</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_shopify_developers'); ?>">Shopify</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_wordpress_developers'); ?>">Wordpress</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('front/offshore_hire_app_developers'); ?>">Hire App Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_android_developers'); ?>">Android</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_ios_developers'); ?>">iOS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_react_native_developers'); ?>">React Native</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_flutter_developers'); ?>">Flutter</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('front/offshore_hire_js_developers'); ?>">Hire JS Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_react_js_developers'); ?>">React JS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_angular_js_developers'); ?>">Angular JS</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_node_js_developers'); ?>">Node JS</a></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('front/offshore_hire_fullstack_developers'); ?>">Hire Full Stack Developers</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_mean_stack_developers'); ?>">Mean Stack</a></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span><a href="<?php echo route('front/offshore_hire_mern_stack_developers'); ?>">Mern Stack</a></span>
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
                                                                                <div class="subMenuHeadings boxs">
                                                                                    <div class="boxs">
                                                                                        <span class="subMenusListItems boxs2">About Us</span>
                                                                                    </div>
                                                                                    <p class="boxs">Designoweb will help you to design and develop greatness.</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/our_process'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg2.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <div class="subMenuHeadings boxs">
                                                                                    <div class="boxs">
                                                                                        <span class="subMenusListItems boxs2">Our Process</span>
                                                                                    </div>
                                                                                    <p class="boxs">Weave your dreams together with the team of Designoweb.</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/testimonials'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg3.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <div class="subMenuHeadings boxs">
                                                                                    <div class="boxs">
                                                                                        <span class="subMenusListItems boxs2">Testimonials</span>
                                                                                    </div>
                                                                                    <p class="boxs">Statements from our past customers to build your trust.</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/career'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg4.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <div class="subMenuHeadings boxs">
                                                                                    <div class="boxs">
                                                                                        <span class="subMenusListItems boxs2">Careers</span>
                                                                                    </div>
                                                                                    <p class="boxs">A place to provide everyone an opportunity in the areas of their expertise.</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/blog'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg5.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <div class="subMenuHeadings boxs">
                                                                                    <div class="boxs">
                                                                                        <span class="subMenusListItems boxs2">Blog</span>
                                                                                    </div>
                                                                                    <p class="boxs">Some blogs to freshen up your mind and knock ideas.</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/press_release'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs">
                                                                                <span class="aboutMenuImage">
                                                                                    <img class="subMenuImg img-fluid" src="<?php echo url('public/front/img/compMenuImg6.png'); ?>" alt="Section Image" />
                                                                                </span>
                                                                                <div class="subMenuHeadings boxs">
                                                                                    <div class="boxs">
                                                                                        <span class="subMenusListItems boxs2">Press Release</span>
                                                                                    </div>
                                                                                    <p class="boxs">Official statement from the news directed for public release.</p>
                                                                                </div>
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