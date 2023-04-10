<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FoodX is the world's most advance, ready to use food delivery application that lets you increase your food business revenue by leaps and bounds."/>
    <title>FoodX - The World’s Best AI Based Food Delivery Solution for your Business</title>

    <link rel="icon" href="<?php echo url('public/front/img/foodx/fav.svg'); ?>" type="image/ico" sizes="16x16">
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/hamburgers.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/intlTelInput.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/slick-theme.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/slick.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/foodx/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/foodx/media.css'); ?>" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162175537-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-162175537-1');
</script>
 <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '2842563315790715'); 
         fbq('track', 'PageView');
        </script>
        <noscript>
         <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=2842563315790715&ev=PageView
        &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        <!-- Hotjar Tracking Code for https://appxhub.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1747998,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>

<body>

<header class="header boxs">
    <div class="container"> 
        <nav class="navbar myNavBar navbar-expand-sm">
            <div class="navbar-header">
                <a href="<?php echo route('front/foodx'); ?>"><img src="<?php echo url('public/front/img/foodx/logo.png'); ?>" class="img-responsive first_logo" alt="logo"></a>
            </div>
            <div class="collapse navbar_right navbar-collapse" id="collapsibleNavbar">
                <div class="navbar navbar-right">
                    <ul class="navbar-nav menu">
                        <li class="nav-item">
                            <a class="nav-link section1" href="javaScript:void(0)">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section2" href="javaScript:void(0)">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section3" href="javaScript:void(0)">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link section4" href="javaScript:void(0)">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link section5" href="javaScript:void(0)">Contact</a>
                        </li>
                        <li class="nav-item logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">
                            <a class="nav-link" href="javaScript:void(0)">Get a Quote</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <button class="hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</header>
<div class="sidenav" id="mySidenav">
        <a href="index.html" class="logo"><img src="<?php echo url('public/front/img/foodx/logo.png'); ?>" class="img-fluid" alt="logo"></a>
    <ul>
        <li class="active"><a href="javaScript:void(0)" class="active section1">About</a></li>
        <li><a href="javaScript:void(0)" class="section2">Features</a></li>
        <li><a href="javaScript:void(0)" class="section3">Services</a></li>
        <li><a href="javaScript:void(0)" class="section4">Pricing</a></li>
        <li><a href="javaScript:void(0)" class="section5">Contact</a></li>
        <li class="nav-item logbtn logbtnGreen" data-toggle="modal" data-target="#myModalApp">
            <a class="nav-link" href="javaScript:void(0)">Get a Quote</a>
        </li>
    </ul>
</div>

<section class="foodxWorld boxs">
    <div class="container">
        <div class="foodxWorldMain boxs">
            <div class="row">
                <div class="col-md-7">
                    <div class="foodLeft boxs">
                        <h2 class="world">The <span class="spanColor">World’s Best<span class="greenBar"></span></span> AI Based Food Delivery Solution for your Business.</h2>
                        <div class="launch launch2 boxs">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mainlaunch">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>
                                            <img src="<?php echo url('public/front/img/foodx/startup.svg'); ?>" alt="Startup" class="img-fluid">
                                        </div>
                                        <div class="launchTxt">
                                            <p>Launch in a Week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>
                                            <img src="<?php echo url('public/front/img/foodx/Intelligent.svg'); ?>" alt="Startup" class="img-fluid">
                                        </div>
                                        <div class="launchTxt">
                                            <p>AI for Customer
                                                Retention</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>
                                            <img src="<?php echo url('public/front/img/foodx/live.svg'); ?>" alt="Startup" class="img-fluid">
                                        </div>
                                        <div class="launchTxt">
                                            <p>Live Tracking</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>    
                                            <img src="<?php echo url('public/front/img/foodx/online-order.svg'); ?>" alt="Startup" class="img-fluid">
                                        </div>
                                        <div class="launchTxt">
                                            <p class="realTime">Real Time Sales &
                                                Order Management</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="btns btns1 boxs">
                                        <ul class="launchBtn">
                                            <li class="nav-item launchBtnGreen logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">
                                                <a class="nav-link" href="javaScript:void(0)">Get in touch</a>
                                            </li>
                                            <li class="nav-item launchBtnGreen logbtnGreen greenHover">
                                                <a class="nav-link" href="#pricingSection">Pricing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="dots">
                        <img src="<?php echo url('public/front/img/foodx/dots.png'); ?>" alt="dots" class="img-fluid">
                    </div>
                    <div class="footRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/layer.svg'); ?>" alt="Layer" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about boxs">
    <div class="container">
        <div class="aboutMain boxs">
            <div class="row aboutRow">
                    <div class="col-md-6">
                        <div class="aboutRight boxs">
                            <img src="<?php echo url('public/front/img/foodx/about.svg'); ?>" alt="about" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutLeft foodxWorldMain boxs">
                            <h2>About <span class="spanColor">FoodX <span class="greenBar"></span></span></h2>
                            <h3>The ultimate food delivery solution</h3>
                            <p>The current changing urban lifestyle of people is favourable for the food-on-the–go and quick home delivery models to grow at higher rates. The ever-increasing population crowded metro cities and longer travel times are drivers for the convenient, ready-to eat and cheaper options of having food and groceries delivered at your doorstep.</p>
    
                            <p>Companies that are aware of the huge potential for growth may venture straight in, but only the fittest will survive. Let us help you with FoodX to increase your business revenue by leaps and bounds.</p>
                                <!--<div class="btns boxs">-->
                                <!--    <ul class="launchBtn">-->
                                <!--        <li class="launchBtnGreen logbtnGreen greenHover">-->
                                <!--            <a class="nav-link" href="javaScript:void(0)">Explore</a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</div>-->
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="perfect boxs">
    <div class="triangle">
        <img src="<?php echo url('public/front/img/foodx/new.svg'); ?>" alt="triangle" class="img-fluid">
    </div>
    <div class="container">
        <div class="perfectMain boxs">
            <div class="row">
                <div class="col-md-5">
                    <div class="perfectLeft perfectPad foodxWorldMain boxs">
                        <h2>A Perfect Fit for
                            <span class="spanColor">Restaurantprenuers<span class="greenBar"></span></span>    
                        </h2>
                        <p>Everyone is  in awe of the online food order and delivery option for the convenience and immediate source 
                        of food at home. Our solution gives your business an edge over the industry and takes you ahead of the curve. 
                        Be it a new startup, a restaurant chain or even the premium dine in restaurants, this application is a perfect fit for all restaurateurs.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="perfectRight boxs">
                        <div class=" boxs">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mainlaunch mainlaunch1 perfectDemo">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>
                                            <img src="<?php echo url('public/front/img/foodx/delivery.svg'); ?>" alt="delivery" class="img-fluid">
                                        </div>
                                        <div class="launchTxt launchTxt1">
                                            <p class="cafe">Food Delivery Startup</p>
                                            <p class="para">Intelligent solution for food startups to increase their customer strength without having to spend much on renting  a big space. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch mainlaunch1 perfectDemo">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>
                                            <img src="<?php echo url('public/front/img/foodx/pizza.svg'); ?>" alt="pizza" class="img-fluid">
                                        </div>
                                        <div class="launchTxt launchTxt1">
                                            <p class="cafe">Cafe/Food Outlets</p>
                                            <p class="para">Serve more customers in the peak dine-in hours. The delivery format keeps the customer loyalty going strong too.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch mainlaunch1 perfectDemo">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>
                                            <img src="<?php echo url('public/front/img/foodx/chain.svg'); ?>" alt="Chain" class="img-fluid">
                                        </div>
                                        <div class="launchTxt launchTxt1">
                                            <p class="cafe">Restaurant Chains</p>
                                            <p class="para">Power your restaurant chain with FoodX to cater all customer needs and manage your chains smoothly with your dashboard.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch mainlaunch1 perfectDemo">
                                        <div class="launchImg">
                                            <div class="greenBox"></div>    
                                            <img src="<?php echo url('public/front/img/foodx/beer.svg'); ?>" alt="beer" class="img-fluid">
                                        </div>
                                        <div class="launchTxt launchTxt1">
                                            <p class="cafe">Pubs & Bars</p>
                                            <p class="para">FoodX will never let you miss the chance to serve your customers with their favorite drinks at just the flick of a finger.</p>
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
</section>

<section class="foodxApp boxs">
    <div class="rectangle rectangle11">
        <img src="<?php echo url('public/front/img/foodx/project.svg'); ?>" alt="triangle" class="img-fluid">
    </div>
    <div class="container">
        <div class="foodxAppMain boxs">
            <div class="foodxCenter foodxWorldMain boxs">
                <h2><span class="foody">Food</span>X Application  <span class="spanColor">Features <span class="greenBar"></span></span></h2>
                <div class="btnsgroups boxs">
                  
                    <ul class="nav nav-tabs foodXTab launchBtn boxs" id="myTab" role="tablist">
                        <li class="nav-item btnfixed launchBtnWhite logbtnWhite disableBtn">
                            <a class="nav-link active" id="Customers-tab" data-toggle="tab" href="#Customers" role="tab" aria-controls="Customers" aria-selected="true">Customers</a>
                        </li>
                        <li class="nav-item btnfixed launchBtnWhite logbtnWhite disableBtn">
                            <a class="nav-link" id="Restaurant-tab" data-toggle="tab" href="#Restaurant" role="tab" aria-controls="Restaurant" aria-selected="false">Restaurant</a>
                        </li>
                        <li class="nav-item btnfixed launchBtnWhite logbtnWhite disableBtn">
                            <a class="nav-link" id="Delivery-tab" data-toggle="tab" href="#Delivery" role="tab" aria-controls="Delivery" aria-selected="false">Delivery Panel</a>
                        </li>
                        <li class="nav-item btnfixed launchBtnWhite logbtnWhite disableBtn">
                            <a class="nav-link" id="Admin-tab" data-toggle="tab" href="#Admin" role="tab" aria-controls="Admin" aria-selected="false">Admin</a>
                        </li>
                    </ul>

                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active placehlderBtn" id="Customers" role="tabpanel" aria-labelledby="Customers-tab">
                        <div class="placeArea">
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer1.svg'); ?>" alt="object" class="img-fluid customer1">
                                <p>Register, Login<br>
                                    Forgot Password</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer2.svg'); ?>" alt="object" class="img-fluid">
                                <p>Offer Banner</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer3.svg'); ?>" alt="object" class="img-fluid">
                                <p>Food Listing</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer4.svg'); ?>" alt="object" class="img-fluid">
                                <p>Add to Cart</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer4.svg'); ?>" alt="object" class="img-fluid">
                                <p>Promo Codes</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer6.svg'); ?>" alt="object" class="img-fluid customer1">
                                <p>Multiple<br>
                                    Payment Modes
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer7.svg'); ?>" alt="object" class="img-fluid">
                                <p>Wallet<br>
                                    integration</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer8.svg'); ?>" alt="object" class="img-fluid">
                                <p>Driver Tip</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer9.svg'); ?>" alt="object" class="img-fluid">
                                <p>Order<br>
                                    Confirmation</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer10.svg'); ?>" alt="object" class="img-fluid">
                                <p>Track Order</p>
                            </div> 
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer11.svg'); ?>" alt="object" class="img-fluid">
                                <p>Push<br>
                                    Notification</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer12.svg'); ?>" alt="object" class="img-fluid">
                                <p>Call & Chat</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer13.svg'); ?>" alt="object" class="img-fluid">
                                <p>Reviews</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer14.svg'); ?>" alt="object" class="img-fluid">
                                <p>Comments</p>
                            </div>
<!--                             <div class="innerPlaceholder">
                                <img src="img/foodx/customer15.svg" alt="object" class="img-fluid">
                                <p>Loyalty Points</p>
                            </div> -->
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer16.svg'); ?>" alt="object" class="img-fluid">
                                <p>Order History</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer18.svg'); ?>" alt="object" class="img-fluid">
                                <p>Refer and Earn</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer17.svg'); ?>" alt="object" class="img-fluid">
                                <p>Language<br>
                                    Conversion</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade placehlderBtn" id="Restaurant" role="tabpanel" aria-labelledby="Restaurant-tab">
                        
                        <div class="placeArea">
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest1.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Register, Login<br>
                                    Change Password</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest2.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Profile Update,<br>
                                    KYC Upload</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest3.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Order Dashboard<br>
                                    Screen
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest4.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Add Food<br>
                                    Items</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest5.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Available & Unavailable<br>
                                    Time Settings
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest6.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Offer<br>
                                    Settings</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest7.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Instant Incoming<br>
                                    Order Notification</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest8.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Order accept, reject<br>
                                    order detail view</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest10.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Order history</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest9.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Commission payout<br>
                                    report with date filter
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest11.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Language<br>
                                    conversion
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest12.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Enable, Disable<br>
                                    Foods
                                    </p>
                            </div>  
                        </div>
                       
                    </div>
                    <div class="tab-pane fade placehlderBtn" id="Delivery" role="tabpanel" aria-labelledby="Delivery-tab">
                        
                        <div class="placeArea">
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab1.svg'); ?>" alt="tab" class="img-fluid customer1">
                                <p>Register, Login<br>
                                    Change Password</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab2.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Profile Update,<br>
                                    KYC Upload</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab3.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Order Details</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab4.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Accept or<br>
                                    Reject Order
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab5.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Google Map<br>
                                    Redirection
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab6.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Auto Reject</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab7.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Order Status</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab8.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Earnings<br>
                                    Report</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab9.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Order History</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab10.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Incentive<br>
                                    Report</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab11.svg'); ?>" alt="tab" class="img-fluid">
                                <p>COD</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab12.svg'); ?>" alt="tab" class="img-fluid">
                                <p>Chat</p>
                            </div>  
                        </div>
                       
                    </div>
                    <div class="tab-pane fade placehlderBtn" id="Admin" role="tabpanel" aria-labelledby="Admin-tab">
                        
                        <div class="placeArea">
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part1.svg'); ?>" alt="part" class="img-fluid">
                                <p>Super admin<br>
                                    Dashboard</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part2.svg'); ?>" alt="part" class="img-fluid customer1">
                                <p>Driver Availability<br>
                                    tracking
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part3.svg'); ?>" alt="part" class="img-fluid">
                                <p>Restaurant</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part4.svg'); ?>" alt="part" class="img-fluid">
                                <p>Geo-fencing</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part5.svg'); ?>" alt="part" class="img-fluid customer1">
                                <p>Add, edit, enable,<br>
                                    disable delivery boys
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part6.svg'); ?>" alt="part" class="img-fluid customer1">
                                <p>Multiple<br>
                                    Payment Modes</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part7.svg'); ?>" alt="part" class="img-fluid customer1">
                                <p>Popular brands<br>
                                    management</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part8.svg'); ?>" alt="part" class="img-fluid">
                                <p>Promocode<br>
                                    management
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part9.svg'); ?>" alt="part" class="img-fluid customer1">
                                <p>Order Management<br>
                                    Manual Assign of<br>
                                    Delivery Boys</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part10.svg'); ?>" alt="part" class="img-fluid">
                                <p>Sub-admin<br>
                                    management</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part11.svg'); ?>" alt="part" class="img-fluid">
                                <p>Chat with User,<br>
                                    Delivery Boy
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part12.svg'); ?>" alt="part" class="img-fluid">
                                <p>Language<br>
                                    conversion
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part13.svg'); ?>" alt="part" class="img-fluid">
                                <p>Order history<br>
                                    reports</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part14.svg'); ?>" alt="part" class="img-fluid customer1">
                                <p>Payout Reports for<br>
                                    Delivery Boys</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part15.svg'); ?>" alt="part" class="img-fluid">
                                <p>Automatic payout<br>
                                    feature
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part16.svg'); ?>" alt="part" class="img-fluid">
                                <p>Content<br>
                                    Management<br>
                                    System</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part17.svg'); ?>" alt="part" class="img-fluid">
                                <p>Custom push<br>
                                    notification</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part18.svg'); ?>" alt="part" class="img-fluid">
                                <p>Incentive<br>
                                    settings</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part19.svg'); ?>" alt="part" class="img-fluid customer1">
                                <p>Delivery Boy,<br>
                                    Unique and Common<br>
                                    Commission Settings
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part20.svg'); ?>" alt="part" class="img-fluid">
                                <p>Banner<br>
                                    management
                                    </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>  

<section class="hereWork boxs">
    <div class="leftImg leftImg1">
        <img src="<?php echo url('public/front/img/foodx/one.svg'); ?>" class="img-fluid" alt="one">
    </div>
    <div class="rectangle rectangle5 rectangle4">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="pattern" class="img-fluid">
    </div>
    <div class="container">
        <div class="hereWorkMain perfectLeft foodxWorldMain boxs">
            <h2 class="hereWord">Here's how it <span class="spanColor">works.<span class="greenBar"></span></span></h2>
            <div class="row hereRow">
                <div class="col-md-6">
                    <div class="workRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/work1.svg'); ?>" class="img-fluid" alt ="work">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workLeft boxs">
                        
                        <div class="perfectLeft foodxWorldMain">
                            <h2>On Boarding <span class="spanColor">Documentation<span class="greenBar"></span></span></h2>
                            <p class="paraSub">We will send you a Proposal & Demo to begin with. If you agree to purchase our solutions, a contract will be sent for signing. 50% upfront payment will be required at the time of signing.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section> 

<section class="hereWork hereWork2 boxs">
    <div class="leftImg leftImg2">
        <img src="<?php echo url('public/front/img/foodx/two.svg'); ?>" class="img-fluid" alt="two">
    </div>
    <div class="rectangle rectangle2 rectangle6">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="pattern" class="img-fluid">
    </div>
    <div class="container"> 
        <div class="hereWorkMain boxs">
            <div class="row">
                <div class="col-md-6">
                    <div class="workRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/work2.svg'); ?>" class="img-fluid" alt ="work">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workLeft workLeft2 boxs">
                        <div class="perfectLeft foodxWorldMain">
                            <h2><span class="spanColor">Transforming<span class="greenBar"></span></span> The app for your Brand</h2>
                            <p class="paraSub">In the beginning, our Design Team will provide you an updated design of our solution with your branding and colors. You will have to provide us with your brand name and logo. Any minor changes in layouts will be accomodated.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="hereWork hereWork3 boxs">
    <div class="leftImg leftImg3">
        <img src="<?php echo url('public/front/img/foodx/three.svg'); ?>" class="img-fluid" alt="three">
    </div>
    <div class="rectangle rectangle5 rectangle4">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="pattern" class="img-fluid">
    </div>
    <div class="container">
        <div class="hereWorkMain boxs">
            <div class="row hereRow2">
                <div class="col-md-6">
                    <div class="workRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/work3.svg'); ?>" class="img-fluid" alt ="work">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workLeft boxs">
                        <div class="perfectLeft foodxWorldMain">
                            <h2><img src="<?php echo url('public/front/img/foodx/boom.svg'); ?>" alt="boom" class="img-fluid boom"><span class="spanColor">We are Live<span class="greenBar"></span></span><br> your Restaurant Ready to Deliver Online </h2>
                            <p class="paraSub">In the next step, our team will set up a server and send you the app for testing. After your nod, the app will be uploaded on all the required App Stores for approval and will be live!
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section> 

<section class="dummyPart boxs">
    <div class="container">
        <div class="dummyMain boxs">
                <div class="colAreaLeft">
                    <div class="dummyLeft boxs">
                        <h3>Get in touch with our experts today and let 
                            FoodX meet your new business goals.
                            </h3>
                    </div>
                </div>
                <div class="colAreaRight">
                    <div class="dummyRight boxs">
                        <ul>
                            <li class="nav-item launchBtnWhite dummyBtn greenHover logbtnWhite" data-toggle="modal" data-target="#myModalApp">
                                <a class="nav-link" href="javaScript:void(0)">Contact us </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="price boxs" id="pricingSection">
    <div class="container">
        <div class="priceMain boxs">
            <div class="row priceRow">
                <div class="col-md-6">
                    <div class="priceRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/globe.svg'); ?>" alt="globe" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="priceLeft priceLeft1 boxs">
                        <h5>Pricing</h5>
                        <h2>This Price that will surely make a <span class="spanColor">Dent in the Universe. <span class="greenBar greenBar2"></span></span></h2>
                        <p class="pricePara">The most affordable and transparent pricing ever. Full transparency, no hidden costs. Pay once and enjoy your product forever.</p>
                        
                         <!--<div class="col-md-12">-->
                         <!--           <div class="btns btns1 boxs">-->
                         <!--               <ul class="launchBtn">-->
                         <!--                   <li class="nav-item launchBtnGreen logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">-->
                         <!--                       <a class="nav-link" href="javaScript:void(0)">Get in touch</a>-->
                         <!--                   </li>-->
                         <!--                   <li class="nav-item launchBtnGreen logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">-->
                         <!--                       <a class="nav-link" href="javaScript:void(0)">Pricing</a>-->
                         <!--                   </li>-->
                         <!--               </ul>-->
                         <!--           </div>-->
                         <!--       </div>-->
                    </div>
                    
                
                </div>
                
            </div>
            
            <div class="Inclusions priceLeft boxs">
                <h5>Inclusions</h5>
                <div class="webpart boxs">
                    <div class="mainlaunch webpartInner webpartInner1 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/user.svg'); ?>" alt="User" class="img-fluid">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Customer</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/android.svg'); ?>" alt="android" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Native Android  </h6>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/apple.svg'); ?>" alt="apple" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Native iOS  </h6>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Web Panel  </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mainlaunch webpartInner webpartInner2 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/restaurant.svg'); ?>" alt="User" class="img-fluid">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Restaurant Panel</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/android.svg'); ?>" alt="android" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Native Android  </h6>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/apple.svg'); ?>" alt="apple" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Native iOS  </h6>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Web Panel  </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mainlaunch webpartInner webpartInner3 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/delivery-bike.svg'); ?>" alt="User" class="img-fluid">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Delivery</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/android.svg'); ?>" alt="android" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Native Android  </h6>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/apple.svg'); ?>" alt="apple" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Native iOS  </h6>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Web Panel  </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mainlaunch webpartInner webpartInner4 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/admin.svg'); ?>" alt="User" class="img-fluid">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Admin</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid">
                                </div>
                                <div class="osTxt">
                                    <h6>Web Panel  </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="surprise boxs">
    <div class="container">
        <div class="surpriseMain boxs">
                    <div class="surpriseLeft ">
                        <img src="<?php echo url('public/front/img/foodx/box.svg'); ?>" alt="box" class="img-fluid">
                    </div>
                    <div class="surpriseRight priceLeft ">
                        <h5>Surprise for You!</h5>
                        <h2>Complete suit at an <span class="spanColor">Amazing <span class="greenBar greenBar2"></span></span> <span class="spanColor">Package<span class="greenBar greenBar2"></span></span> Price of <span class="doller">$5499</span></h2>
                        <p>This is only one time Cost, No Hidden Charges</p>
                        <div class="surpriseBtn btnfixed launchBtnGreen logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">
                            <a class="nav-link" href="javaScript:void(0)">Buy Now</a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<section class="trust boxs">
    <div class="container">
        <div class="trustMain boxs">
            <div class="trustImg">
                <img src="<?php echo url('public/front/img/foodx/trust.svg?v=9.9.8'); ?>" alt="trust" class="deskimg img-fluid">
                <img src="<?php echo url('public/front/img/foodx/trustMob.svg?v=9.9.8'); ?>" alt="trust" class="mobimg img-fluid">
            </div>
            <div class="trustTxt priceLeft">
                <h2><span class="spanColor">Pay us Just 10%<span class="greenBar greenBar2"></span></span> for Booking and
                    Rest when your Apps are Live</h2>
            </div>
            <div class="trustBtn launchBtnGreen logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">
                <a class="nav-link" href="javaScript:void(0)">Book Now</a>
            </div>
        </div>
    </div>
</section>

<section class="support boxs">
    <div class="rectangle rectangle2">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="repeatgrid" class="img-fluid">
    </div>
    <div class="container">
        <div class="supportMain boxs">
            <div class="supportLeft priceLeft boxs">
                <h2>We want to see you Grow
                    with our <span class="spanColor">2 Month Free Support<span class="greenBar greenBar2"></span></span></h2>
                <p>We provide free maintenance for 2 months! FoodX comes with a dedicated service level agreement of 2 months free support & maintenance. Our tech experts will ensure that your application is secure, updated, bug-free and live 24x7.</p>
            </div>
        </div>
    </div>
    <div class="supportRight boxs">
        <img src="<?php echo url('public/front/img/foodx/tab.svg'); ?>" alt="tab" class="img-fluid">
    </div>
</section>

<section class="faq boxs">
    <div class="container">
        <div class="faqMain boxs">
            <div class="faqAccordions priceLeft boxs">
                <h2><span class="spanColor">FAQ's<span class="greenBar greenBar2"></span></span></h2>
                <div class="disacord boxs">
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class="active"><i class="fa fa-minus"></i><span>Is there an option for customization available?</span></a>
                        <div class="content content2" style="display: block;">
                            <div class="cont_full boxs">
                                <p>There will be customization only of the logo and color which will be as per your preference. For other customizations you can connect with our team and they will share a quote based on the additional customisations required.</p>
                            </div>
                        </div>
                    </div>
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class=""><i class="fa fa-plus  "></i><span>Why should we have your application rather than collaborating with bigger platforms like uber eats, Talabat, Careem etc? </span></a>
                        <div class="content content2" style="display: none;">
                            <div class="cont_full boxs">
                                <p>If you have a separate app then you don’t need to be dependent upon other platforms for your sale, you can build a list of your own loyal customers that can order food directly from your application without wasting much time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class=""><i class="fa fa-plus"></i><span>How the app will be useful in current COVID-19 situation?</span></a>
                        <div class="content content2" style="display: none;">
                            <div class="cont_full boxs">
                                <p>People are afraid to go out and eat due to the lockdown , so, if they get their favourite food at their home with full hygiene and taste then they will definitely prefer you rather than wasting time over shortlisting other restaurants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class=""><i class="fa fa-plus"></i><span>Why people will download my application?</span></a>
                        <div class="content content2" style="display: none;">
                            <div class="cont_full boxs">
                                <p>You can provide discounts or loyalty points to your customer for the next order. You can run a campaign at your restaurant to order food from your app to avail discount. This way your regular customers will be connected with you via your app and then they will download your application</p>
                            </div>
                        </div>
                    </div>
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class=""><i class="fa fa-plus"></i><span>Why people will download my application?How can I manage my customers on the platform?</span></a>
                        <div class="content content2" style="display: none;">
                            <div class="cont_full boxs">
                                <p>Unlike other apps, FoodX gives you complete ownership of the app control panel. Your customers belong to you and we entirely allow you to manage them. We allow you to manage the customer details, orders and payments. A simple demo will help you run your business easily through your restaurant's mobile app. You can even download a list of your customers and send them email campaigns and notifications on the app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class=""><i class="fa fa-plus"></i><span>How does FOODX work?</span></a>
                        <div class="content content2" style="display: none;">
                            <div class="cont_full boxs">
                                <p>FoodX is a deployment ready food delivery model. You just have to send us your logo and colors. We will deploy your apps, with your brand within a week and then you can start promoting your apps amongst your customers, friends and family..</p>
                            </div>
                        </div>
                    </div>
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class=""><i class="fa fa-plus"></i><span>What payment methods do you offer in your ordering system software ?</span></a>
                        <div class="content content2" style="display: none;">
                            <div class="cont_full boxs">
                                <p>There are different payment options available for the easy checkout of your customers. Cash on Delivery,Credit Card,Debit Card). The other payment methods can also be added as per client request.</p>
                            </div>
                        </div>
                    </div>
                    <div class="set set2 boxs">
                        <a href="javascript:void(0)" class=""><i class="fa fa-plus"></i><span>How much time will it take to build the on-demand food delivery app and run?</span></a>
                        <div class="content content2" style="display: none;">
                            <div class="cont_full boxs">
                                <p>After understanding your perspective, we strive to build the app in the least possible </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="customer boxs">
    <div class="patterns"></div>
    <div class="rectangle rectangle3">
        <img src="<?php echo url('public/front/img/foodx/pattern.svg'); ?>" alt="pattern" class="img-fluid">
    </div>
    <div class="container">
        <div class="customerMain boxs">
            <div class="row">
                <div class="col-md-5">
                    <div class="customerLeft priceLeft boxs">
                        <h2>Customer <span class="spanColor">Stories<span class="greenBar greenBar2"></span></span></h2>
                        <div class="prolftSlick boxs">

                            <div class="slicko">
                              <div class="slkimg boxs">
                                <div class="menImg">
                                    <img src="<?php echo url('public/front/img/foodx/client1.jpeg'); ?>" alt="men" class="img-fluid">
                                </div>
                                <div class="menTxt">
                                    <h3>David Smith</h3>
                                    <span>	Mexico</span>
                                </div>
                              </div>
                              <p>FoodX has been a great initiative to my business. It has just changed my way of strategies all the profit lies in my hand now. Apart from this, my dine-in customer base has also increased due to the reach out by app in the whole city.</p>
                            </div>
              
                            <div class="slicko">
                                <div class="slkimg boxs">
                                  <div class="menImg">
                                      <img src="<?php echo url('public/front/img/foodx/client2.jpeg'); ?>" alt="men" class="img-fluid">
                                  </div>
                                  <div class="menTxt">
                                      <h3>Juan Carlos</h3>
                                      <span>Venezuela</span>
                                  </div>
                                </div>
                                <p>The features and functioning of the FoodX is very smooth. One can experience a staggering flow of application that is totally user friendly. The UI and UX is impressively great and quick to choose from a large variety of restaurants.</p>
                              </div>
              
                              <div class="slicko">
                                <div class="slkimg boxs">
                                  <div class="menImg">
                                      <img src="<?php echo url('public/front/img/foodx/client3.jpeg'); ?>" alt="men" class="img-fluid">
                                  </div>
                                  <div class="menTxt">
                                      <h3>	Sophia Smith</h3>
                                      <span>	Canada</span>
                                  </div>
                                </div>
                                <p>FoodX has been a remarkable product to my restaurant agencies. It has been a valuable asset that provides a sustainable profit. I can have a regular quality check on my employees and can receive much faster and accurate which help in growing my business sales.</p>
                              </div>

                              <div class="slicko">
                                <div class="slkimg boxs">
                                  <div class="menImg">
                                      <img src="<?php echo url('public/front/img/foodx/client4.jpeg'); ?>" alt="men" class="img-fluid">
                                  </div>
                                  <div class="menTxt">
                                      <h3>Mike Jones</h3>
                                      <span>	Argentina</span>
                                  </div>
                                </div>
                                <p>Great Experience! I would recommend FoodX to all types of companies – not just big restaurants but small vendors too. FoodX adjusts to companies accordingly. The smaller companies get a lot of experience from the significantly increased exposure to the market and that's the greatest point to have it.</p>
                              </div>
              
                          </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="customerRight boxs">
                        <form id="submit-form3" action="<?php echo route('front/send_foodx_mail'); ?>" method="post" enctype="multipart/form-data">
                            <div class="customerForm priceLeft boxs">
                                <h2>Let's take your Food Business to the next level</h2>
                                <x-food_business_form></x-food_business_form>
                                <p class="contactmessage d-none">Thanks for connecting with us. We will response soon.</p>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rectangle rectangle4">
        <img src="<?php echo url('public/front/img/foodx/template.svg'); ?>" alt="pattern" class="img-fluid">
    </div>
</section>

<section class="certificates boxs">
    <div class="container">
        <div class="certificatesMain boxs">
            <img src="<?php echo url('public/front/img/foodx/iso.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/iec.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/msme.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/clutch.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/app.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/good.svg'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/ger.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/top.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/topdev.png'); ?>" alt="iOS" class="img-fluid">
            <img src="<?php echo url('public/front/img/foodx/topmob.png'); ?>" alt="iOS" class="img-fluid">
        </div>
    </div>
</section>

<footer class="footer boxs">
    <div class="container">
        <div class="footerall d-inline-block boxs">
            <div class="footleft d-inline-block ">
                <div class="footLogoImg">
                   <a href="https://www.appxhub.com/"> <img src="<?php echo url('public/front/img/foodx/appx.png'); ?>" class="img-fluid appx" alt="logo"></a>
                    <div class="ventureby">
                        <p>A Venture By:</p>
                      <a href="https://designoweb.com/">  <img src="<?php echo url('public/front/img/foodx/dw.png?version = 1.0.1'); ?>" class="img-fluid" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="footmiddle d-inline-block ">
                <div class="footpart">
                    <h3>Call</h3>
                    <ul>
                        <li>Sales: <span><a href="tel:+91 8923743143">+91 8923743143</a></span></li>
                        <li>Whatsapp: <span> +91 8923743143</span></li>
                    </ul>
                </div>
            </div> 
            <div class="footmiddle d-inline-block ">
                <div class="footpart">
                    <h3>Chat With Me</h3>
                    <ul>
                        <li>Whatsapp</li>
                        <li>Sales: <span><a href="tel:+91 8923743143">+91 8923743143</a></span></li>
                        <li>Skype: <span> bhavik_dow</span></li>
                    </ul>
                </div>
            </div>
                
            <div class="footmiddle d-inline-block ">
                <div class="footpart">
                    <h3>Email</h3>
                    <ul>
                        <li>Business inquiry <span class="d-block"><a href="mailto:info@designoweb.com">info@designoweb.com</a></span></li>
                    </ul>
                </div>
            </div>
                
        </div>
    </div>
</footer>

<section class="footerbtm boxs">
    <div class="container">
        <div class="bottomFooter boxs">
            <div class="btmleft d-inline-block ">
                <p><span><i class="far fa-copyright"></i></span>  <?php echo date("Y"); ?> Designoweb Technologies</p>
            </div>
            <div class="secure">
                <img src="<?php echo url('public/front/img/foodx/secure.png'); ?>" alt="secure" class="img-fluid">
            </div>
            <div class="btmright d-inline-block float-right ">
                <h5 class="d-inline-block">We are Social:</h5>
                <a href="https://www.facebook.com/designowebtech/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/designoweb/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/designoweb" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://dribbble.com/designoweb" target="_blank"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
    </div>
</section>

<!--for buy now-->
<!--for buy now-->
<div class="custBox modal" id="myModalApp">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <div class="customerRight boxs">
                <form id="submit-form4" action="<?php echo route('front/send_foodx_modal_mail'); ?>" method="post" enctype="multipart/form-data">
                    <div class="customerForm priceLeft boxs">
                        <h2>Let's take your Food Business to the next level</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.523" height="18.523" viewBox="0 0 18.523 18.523">
                                <defs>
                                    <style>.cls-1{fill:#5fb709}</style>
                                </defs>
                                <g id="ic_close_48px" transform="translate(-10 -10)">
                                    <path id="Path_270" d="M28.523 11.872L26.651 10l-7.389 7.389L11.872 10 10 11.872l7.389 7.389L10 26.651l1.872 1.872 7.389-7.389 7.389 7.389 1.872-1.872-7.389-7.389z" class="cls-1" data-name="Path 270"/>
                                </g>
                            </svg>
                        </button>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name1" id="name1" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email1" id="email1" placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone1" id="phone1" placeholder="Contact Number" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="skypeid1" id="skypeid1" placeholder="Skype ID (If available)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="requirements1" id="requirements1" placeholder="Requirements">
                                </div>
                            </div>
                            <!-- <div class="capta"> -->
                            <div class="col-md-12 form-group">
                                <div class="g-recaptcha" name="g-recaptcha-response-1" data-sitekey="6LcWPtghAAAAAMeNPgulr6ZifhyOr--_XIl9SB-R"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="newbtn text-center">
                                    <button type="submit" class="surpriseButtn">Send</button>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <p class="contactmessage1 d-none">Thanks for connecting with us. We will response soon.</p>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
<!--for buy now-->

    <script src="<?php echo url('public/front/js/common/jquery.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/bootstrap.min.js'); ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="<?php echo url('public/front/js/common/intlTelInput.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/intlTelInput.min.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/jquery.formatter.min.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/countryscript.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/slick.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/foodx/custom.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo url('public/front/js/event.js'); ?>" type="text/javascript"></script>

    <!-- <script src="<?php // echo esc_url(get_stylesheet_directory_uri()); ?>/js/foodx/intlTelInput.js?v=9.9.9"></script> -->
    <!-- <script src='https://1cf5229636340d3e1dd5-0eccc4d82b7628eccb93a74a572fd3ee.ssl.cf1.rackcdn.com/testing/intlTelInput.min.js'></script> -->
    <!-- <script src='https://1cf5229636340d3e1dd5-0eccc4d82b7628eccb93a74a572fd3ee.ssl.cf1.rackcdn.com/testing/jquery.formatter.min.js'></script> -->
    <!-- <script src="<?php // echo esc_url(get_stylesheet_directory_uri()); ?>/js/foodx/countryscript.js?v=1.1.1"></script> -->
    <!-- <script src="<?php // echo esc_url(get_stylesheet_directory_uri()); ?>/js/foodx/slick.js"></script> -->
    
    <script>
        $(".phoneNumbers").intlTelInput({
            preferredCountries: ["in" ],
            separateDialCode:false,
            nationalMode: false,
            utilsScript:"",
        });
    </script>

    <script>
        $('#footerForm').submit(function (evt) {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-errorfooter').innerHTML = '<span style="color:red;">This field is required.</span>';
                return false;
            } else {
                document.getElementById('g-recaptcha-errorfooter').innerHTML = '';
            }
            evt.preventDefault();
            var postdata = $(this).serialize();
            var url = $(this).attr('action');
            $.get(url, postdata, function (out) {
                $("#footerForm")[0].reset();
            window.location.href = "/thankyou.php";
            });
        });
    
        // modal
        $(document).on('submit', '#modalForm', function (evt) {
            evt.preventDefault();
            var postdata = $(this).serialize();
            var url = $(this).attr('action');
            $.get(url, postdata, function (out) {
                $("#modalForm")[0].reset();
            window.location.href = "/thankyou.php";
            });
        });
    </script>

    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            window.location.href = 'https://localhost/designoweb/foodx/';
        }, false );
    </script>

    <!-- <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event){
            location = '/';
        }, false);
    </script> -->

</body>

</html>