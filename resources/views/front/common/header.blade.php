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
    
    
     @stack('scalie_css')
    
    <!--<link rel="canonical" href="<?php // echo url('/').$_SERVER['REQUEST_URI'] ?>" />-->
    
    
    <!-- Open Graph / Facebook -->
    <!--<meta property="og:type" content="website">-->
    <!--<meta property="og:url" content="https://designoweb.com/">-->
    <!--<meta property="og:title" content="App Development Company in India & USA | Designoweb Technologies">-->
    <!--<meta property="og:description" content="Designoweb Technologies is a leading mobile app development company with a global presence in India & USA. We specialize in delivering digital solutions to startups & enterprises worldwide.">-->
    <!--<meta property="og:image" content="https://secure.designoweb.com/public/front/images/logonew.png">-->
    
    
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="favicon" type="image/ico" href="https://designoweb.com/favicon.ico"/>
    
    <?php if(@$title == "FoodX"){ ?>
        <!--<link rel="stylesheet" href="<?php // echo url('public/front/css/common/bootstrap.min.css'); ?>" />-->
        <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo url('public/front/css/foodx/style.css?v:37.3'); ?>" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/foodx/media.css?v:37.1'); ?>" />
        <!--<link href="<?php // echo url('public/front/images/fav.ico'); ?>" rel="icon" type="icon/image" />-->
        <!--<link href="<?php // echo url('public/front/css/bootstrap.min.css'); ?>" rel="stylesheet" />-->
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
        <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/slick-theme.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/intlTelInput.min.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/style.css?v:35.1'); ?>" rel="stylesheet" rel="preload" as="style" />
        <link href="<?php echo url('public/front/css/style.css?v:35.1'); ?>" rel="stylesheet" rel="stylesheet" />
        <link defer href="<?php echo url('public/front/css/media.css?v:35.1'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
        <link rel="stylesheet" href="<?php echo url('public/front/css/global.css?v:36.8'); ?>" />
        
    <?php }elseif(@$title == "GrocerX"){ ?>
    	<!--<link rel="stylesheet" href="<?php // echo url('public/front/css/common/bootstrap.min.css'); ?>" />-->
    	<link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    	<link rel="stylesheet" href="<?php echo url('public/front/css/grocerx/style.css?v:36.7'); ?>" />
    	<link rel="stylesheet" href="<?php echo url('public/front/css/grocerx/media.css?v:37.2'); ?>" />
        <!--<link href="<?php // echo url('public/front/images/fav.ico'); ?>" rel="icon" type="icon/image" />-->
        <!--<link href="<?php // echo url('public/front/css/bootstrap.min.css'); ?>" rel="stylesheet" />-->
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
        <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/slick-theme.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/intlTelInput.min.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/style.css?v:35.1'); ?>" rel="stylesheet" rel="preload" as="style" />
        <link href="<?php echo url('public/front/css/style.css?v:35.1'); ?>" rel="stylesheet" rel="stylesheet" />
        <link defer href="<?php echo url('public/front/css/media.css?v:35.1'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
        <link rel="stylesheet" href="<?php echo url('public/front/css/global.css?v:36.9'); ?>" />
        
    <?php }elseif(@$title == "MedX"){ ?>
        <!--<link rel="stylesheet" href="<?php // echo url('public/front/css/common/bootstrap.min.css'); ?>" />-->
        <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo url('public/front/css/medx/style.css?v:36.3'); ?>" />
        <link rel="stylesheet" href="<?php echo url('public/front/css/medx/media.css?v:36.5'); ?>" />
        <!--<link href="<?php // echo url('public/front/images/fav.ico'); ?>" rel="icon" type="icon/image" />-->
        <!--<link href="<?php // echo url('public/front/css/bootstrap.min.css'); ?>" rel="stylesheet" />-->
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
        <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/slick-theme.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/intlTelInput.min.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/style.css?v:35.1'); ?>" rel="stylesheet" rel="preload" as="style" />
        <link href="<?php echo url('public/front/css/style.css?v:35.1'); ?>" rel="stylesheet" rel="stylesheet" />
        <link defer href="<?php echo url('public/front/css/media.css?v:35.1'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
        <link rel="stylesheet" href="<?php echo url('public/front/css/global.css?v:36.8'); ?>" />
        
    <?php }else{ ?>
    
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://designoweb.com/">
        <meta property="og:title" content="App Development Company in India & USA | Designoweb Technologies">
        <meta property="og:description" content="Designoweb Technologies is a leading mobile app development company with a global presence in India & USA. We specialize in delivering digital solutions to startups & enterprises worldwide.">
        <meta property="og:image" content="https://designoweb.com/public/front/images/ogImage.png">
    
        <!--<link href="<?php // echo url('public/front/images/fav.ico'); ?>" rel="icon" type="icon/image" />-->
        <!--<link href="<?php // echo url('public/front/css/bootstrap.min.css'); ?>" rel="stylesheet" />-->
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css">-->
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
        <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/slick-theme.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="<?php echo url('public/front/css/intlTelInput.min.css?v:1.1'); ?>" rel="stylesheet" />
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <link href="<?php echo url('public/front/css/style.css?v:35.2'); ?>" rel="stylesheet" rel="preload" as="style" />
        <!--<link href="<?php // echo url('public/front/css/style.css?v:35.1'); ?>" rel="stylesheet" rel="stylesheet" />-->
        <link defer href="<?php echo url('public/front/css/media.css?v:35.1'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    
    <?php } ?>
    
    <!-- Google tag (gtag.js) Start -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-5KZ1PBQQGB"></script>-->
    <script async>
        // window.dataLayer = window.dataLayer || [];
        // function gtag(){dataLayer.push(arguments);}
        // gtag('js', new Date());
        // gtag('config', 'G-5KZ1PBQQGB');
    </script>
    <!-- Google tag (gtag.js) End -->
    
    
    <script>
        function loadGTM() {
            var gtmScript = document.createElement('script');
            gtmScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-5KZ1PBQQGB';
            gtmScript.async = true;
            document.body.appendChild(gtmScript);
        }
        setTimeout(loadGTM, 7000);
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-5KZ1PBQQGB');
        // gtag('config', 'GTM-TWNHWBX');
    </script>
    
    
    
    
    <!--Organisation Schema For SEO Start-->
    <script type="application/ld+json" async>
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
                                        <div class="subMenusOuter subMenusOuterNew boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs" >
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner servicesSubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="container">
                                                            <div class="submenuDropbox boxs flexBox">
                                                                <div class="menuLeft boxs flexBox">

                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('designSolutions'); ?>">Design Solutions</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li><span><a href="<?php echo route('front/services_product_design'); ?>">SAAS Product Design</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_web_design'); ?>">Web Design</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_mobile_app_design'); ?>">Mobile App Design</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_brand_design'); ?>">Brand Design</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('webSolutions'); ?>">Web Solutions</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li><span><a href="<?php echo route('front/services_saas_website'); ?>">SAAS Website</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_cms_website'); ?>">CMS Website</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_ecommerce_website'); ?>">Ecommerce Website</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_custom_website'); ?>">Custom Website</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_custom_crm'); ?>">Custom CRM</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('mobileSolutions'); ?>">Mobile Solutions</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li><span><a href="<?php echo route('front/services_native_apps'); ?>">Native Apps</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_hybrid_apps'); ?>">Hybrid Apps</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_tv_apps'); ?>">TV Apps</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_wearable_apps'); ?>">Wearable Apps</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_iot_apps'); ?>">IOT Apps</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_ar_vr_apps'); ?>">AR VR Apps</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <a class="subMenuLinks" href="<?php echo route('front/metaverse'); ?>">Metaverse</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li><span><a href="<?php echo route('front/threedProductDesign'); ?>">3d Product Design</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/virtualSpaceCreation'); ?>">Virtual Space Creation</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/unitySolutions'); ?>">Unity Solutions</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/animations'); ?>">Animations</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">Startup Booster</span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul>
                                                                                    <li><span><a href="<?php echo route('front/services_idea_consulting'); ?>">Idea Consulting</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_prototyping'); ?>">Prototyping</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_mvp_development'); ?>">MVP Development</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/services_product_development'); ?>">Product Development</a></span></li>
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
                                        </div>
                                    </li>

                                    <li class="nav-item staffAugmentationMenuLists">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Staff Augmentation</a>
                                        <span class="hireOption">Hire</span>
                                        <div class="subMenusOuter subMenusOuterNew boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs" >
                                            <!-- <div class="subMenus boxs"> -->
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner offshoreSubmenu offshoreSubmenuNew boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="container">
                                                            <div class="submenuDropbox boxs">
                                                                <div class="menuLeft boxs flexBox w-100 offshoreDevelopmentMenu">

                                                                    <div class="submenuBoxs boxs itStaffingSubMenu">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">
                                                                                <!-- <a class="subMenuLinks" href="javascript:void(0)">Nearshore Development</a> -->
                                                                                <a class="subMenuLinks" href="<?php echo route('front/it-staffing'); ?>">IT Staffing</a>
                                                                            </span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul class="staffAugmentationSubMenuLists menuRedirectUrls">
                                                                                    <li><span><a href="<?php echo route('front/it-staffing'); ?>#offshoreDevelopmentSec" data-id="offshoreDevelopmentSec">Offshore Development</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/it-staffing'); ?>#nearshoreDevelopmentSec" data-id="nearshoreDevelopmentSec">Nearshore Development</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/it-staffing'); ?>#contractualStaffingSec" data-id="contractualStaffingSec">Contractual Staffing</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/it-staffing'); ?>#permanentStaffingSec" data-id="permanentStaffingSec">Permanent Staffing</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/it-staffing'); ?>#rpoStaffingSec" data-id="rpoStaffingSec">Recruitment Process Outsourcing</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/it-staffing'); ?>#leadershipHiringSec" data-id="leadershipHiringSec">Leadership Hiring</a></span></li>
                                                                                    <!-- <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Mobile App Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Frontend Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Backend Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Full Stack Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">JS Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Automation Engineers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Software Architects</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">AI Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Machine Learning Engineers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Blockchain Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">DevOps Engineers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Data Engineers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Data Scientists</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">Tableau Developers</a></span></li>
                                                                                    <li><span><a href="<?php // echo route('front/it-staffing'); ?>" data-id="leadershipHiringSec">BI Developers</a></span></li> -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs itStaffingSubMenu">
                                                                        <div class="subMenuLists boxs">
                                                                            <span class="subMenuHeading boxs">Technologies</span>
                                                                            <div class="subMenuList boxs">
                                                                                <ul class="">
                                                                                    <li><span><a href="<?php echo route('front/offshore_hire_web_developers'); ?>">Hire Web Developers</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/offshore_hire_app_developers'); ?>">Hire App Developers</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/offshore_hire_js_developers'); ?>">Hire JS Developers</a></span></li>
                                                                                    <li><span><a href="<?php echo route('front/offshore_hire_fullstack_developers'); ?>">Hire Full Stack Developers</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="submenuBoxs boxs teamExtensionSubMenu">
                                                                        <div class="subMenuLists boxs">
                                                                            <div class="subMenuListsChild boxs">
                                                                                <span class="subMenuHeading subMenuHeading2 boxs">Team Extension</span>
                                                                                <div class="subMenuList subMenuList2 boxs">
                                                                                    <ul>
                                                                                        <li><span><a href="<?php echo route('front/offshore_development_center'); ?>">Offshore Development Center</a></span></li>
                                                                                        <li><span><a href="<?php echo route('front/offshore_dedicated_teams'); ?>">Dedicated Teams</a></span></li>
                                                                                        <li><span><a href="<?php echo route('front/offshore_staff_augmentation'); ?>">IT Staff Augmentation</a></span></li>
                                                                                        <li><span><a href="<?php echo route('front/virtual-cto'); ?>">Virtual CTO</a></span></li>
                                                                                        <li><span><a href="<?php echo route('front/developer-cost-optimization'); ?>">Developer Cost Optimization</a></span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <span class="subMenuBtn boxs">
                                                                                <a class="btnStyle smallBtn smallBtn3 hoverDisable hoverBtn blueBtn" href="<?php echo route('scalie/build-team'); ?>">Build Your Team<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="submenuBoxs boxs becomePartnerSubMenu">
                                                                        <div class="subMenuLists boxs">
                                                                            <div class="subMenuListsChild boxs">
                                                                                <span class="subMenuHeading boxs">Become Partner</span>
                                                                                <span class="submenuSubhead submenuSubhead2 submenuSubhead3 boxs">Unlock new possibilities and expand your horizons by partnering with us. Join our thriving community and enjoy the benefits of a successful collaboration.</span>
                                                                            </div>
                                                                            <span class="subMenuBtn boxs">
                                                                                <a class="btnStyle smallBtn smallBtn3 redBtn hoverDisable hoverBtn" href="<?php echo route('scalie/become-partner'); ?>">Become Partner<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
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
                                                                <div class="menuLeft boxs flexBox">
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
                                                                                    <img class="img-fluid" src="<?php echo url('public/front/img/images/tech-menu-banner.webp'); ?>" alt="Project Image" />
                                                                                </span>
                                                                            </div>
                                                                            <div class="menuRightBtm boxs">
                                                                                <span class="subMenuHeading subMenuHeading4 boxs">Ultimate Property Dashboard</span>
                                                                                <span class="submenuSubhead submenuSubhead2 boxs">Enter into the world of properties and it's industry from immense activity and opportunity to one of knowledge and obviously recognizable open doors...</span>
                                                                                <span class="subMenuLinks boxs"><a class="lnkStyle" href="<?php echo route('front/portfolio'); ?>">View Case Study</a></span>
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
                                        <a class="nav-link menuLink" href="<?php echo route('front/portfolio'); ?>">Work</a>
                                    </li>
                                    
                                    <li class="nav-item newCompanyMenu">
                                        <a class="nav-link menuLink" href="javascript:void(0)">Company</a>
                                        <div class="subMenusOuter boxs">
                                            <div class="subMenusBox"></div>
                                            <div class="subMenus boxs">
                                                <span class="closeSubMenu"><a href="javascript:void(0)" class="closeSubMenuLink">X</a></span>
                                                <div class="submenuInner companySubmenu boxs">
                                                    <div class="submenuInnerBox boxs">
                                                        <div class="container">
                                                            <div class="submenuDropbox boxs companyMenuNewDesign">
                                                                <!--New Menu-->
                                                                <div class="menuLeft menuLeft2 companyMenuLeft boxs ">
                                                                    <div class="companyMenuLeftChild boxs">
                                                                        <span class="leftMenuHeading boxs fontSize22 blackFont">About Us</span>
                                                                        <span class="leftMenuDescription boxs fontSize16">Designoweb will help you to design and develop greatness.</span>
                                                                        <span class="lemuMenuRedirect boxs">
                                                                            <a class="exploreMoreProductsLInk hoverBtn2" href="<?php echo route('front/about'); ?>">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="companyMenuLeftChild boxs">
                                                                        <span class="leftMenuHeading boxs fontSize22 blackFont">Our Process</span>
                                                                        <span class="leftMenuDescription boxs fontSize16">Weave your dreams together with the team of Designoweb</span>
                                                                        <span class="lemuMenuRedirect boxs">
                                                                            <a class="exploreMoreProductsLInk hoverBtn2" href="<?php echo route('front/our_process'); ?>">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="companyMenuLeftChild boxs">
                                                                        <span class="leftMenuHeading boxs fontSize22 blackFont">Testimonials</span>
                                                                        <span class="leftMenuDescription boxs fontSize16">Statements from our past customers to build your trust.</span>
                                                                        <span class="lemuMenuRedirect boxs">
                                                                            <a class="exploreMoreProductsLInk hoverBtn2" href="<?php echo route('front/testimonials'); ?>">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="companyMenuLeftChild boxs">
                                                                        <span class="leftMenuHeading boxs fontSize22 blackFont">Blogs</span>
                                                                        <span class="leftMenuDescription boxs fontSize16">Some blogs to freshen up your mind and knock ideas.</span>
                                                                        <span class="lemuMenuRedirect boxs">
                                                                            <a class="exploreMoreProductsLInk hoverBtn2" href="<?php echo route('front/blog'); ?>">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!--New Menu-->
                                                                <div class="companyMenuRight">
                                                                    <div class="menuRightImage boxs">
                                                                        <img src="<?php echo url('public/front/images/career/menu-career-banner.webp'); ?>" class="img-fluid" alt="Banner">
                                                                    </div>
                                                                    <div class="menuRightContent boxs">
                                                                        <span class="leftMenuHeading boxs fontSize22 blackFont">Careers</span>
                                                                        <span class="leftMenuDescription boxs fontSize16">A place to provide everyone an opportunity in the areas of their expertise.</span>
                                                                        <span class="lemuMenuRedirect boxs">
                                                                            <a class="exploreMoreProductsLInk hoverBtn2 readmoreOption" href="<?php echo route('front/career'); ?>">Read More<span class="arrowIcn"></span></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!--Old Menu-->
                                                                <div class="menuLeft menuLeft2 boxs d-none">
                                                                    <div class="submenuBoxs boxs">
                                                                        <a href="<?php echo route('front/about'); ?>" class="boxs">
                                                                            <div class="subMenuLists subMenuListsSec boxs flexBox">
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
                                                                            <div class="subMenuLists subMenuListsSec boxs flexBox">
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
                                                                            <div class="subMenuLists subMenuListsSec boxs flexBox">
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
                                                                            <div class="subMenuLists subMenuListsSec boxs flexBox">
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
                                                                            <div class="subMenuLists subMenuListsSec boxs flexBox">
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
                                                                            <div class="subMenuLists subMenuListsSec boxs flexBox">
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
                                <span><a href="<?php echo route('front/contact'); ?>" class="btnStyle smallBtn">Let's Connect<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                <span><button class="navbar-toggler"><i class="fas fa-bars"></i></button></span>
                            </div>
                        </div>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->
