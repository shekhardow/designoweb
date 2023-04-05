<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MedX | The World’s Best AI-Based Pharmacy Delivery Solution for your Business.</title>
    <link rel="icon" href="<?php echo url('public/front/img/medx/fav.svg'); ?>" type="icon/image" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/hamburgers.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/intlTelInput.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/slick-theme.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/common/slick.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/medx/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo url('public/front/css/medx/media.css'); ?>" />
    <!-- <link rel="stylesheet" href="<?php // echo esc_url(get_stylesheet_directory_uri());
    ?>/css/medx/font-awesome.min.css" /> -->

</head>

<body>
    <!-- Header Start -->
    <div class="header boxs">
        <div class="container">
            <nav class="navbar navbar-default">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="<?php echo route('front/medx'); ?>"><img src="<?php echo url('public/front/img/medx/logo.svg'); ?>" class="img-fluid"
                            alt="logo"></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav"><span
                            class="navIcon"></span></button>
                    <div class="navbar-collapse" id="nav">
                        <div class="headerBox d-flex align-items-center float-right">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link active About"
                                        href="javascript:void(0)">About</a></li>
                                <li class="nav-item afterLogin categoryBox"><a class="nav-link subMenu Features"
                                        href="javascript:void(0)">Features</a>
                                </li>
                                <li class="nav-item"><a class="nav-link Services" href="javascript:void(0)">Services</a>
                                </li>
                                <li class="nav-item"><a class="nav-link Pricing" href="javascript:void(0)">Pricing</a>
                                </li>
                                <li class="nav-item"><a class="nav-link Contact" href="javascript:void(0)">Contact</a>
                                </li>
                                <li class="nav-item"><a class="nav-link watchBtn active Hoverbtn"
                                        href="javascript:void(0)" data-toggle="modal" data-target="#myModalApp">Get a
                                        Quote</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </nav>

        </div>
    </div>
    <!-- Header End -->

    <!--	banner section start-->
    <section class="bannnerStart boxs">
        <div class="container">
            <div class="bannerLeft boxs">
                <div class="bannerLeftIn">
                    <h1>The World’s Best AI Based <br><span class="colorWhite"> Pharmacy Delivery </span>Solution<br>
                        for your Business.</h1>
                    <p class="headingSize">Are you a pharmacist? And wish to expand your business with full enforcement,
                        Medx is a precise platform for you. Providing a bombshell team for your app with fully equipped
                        technologies, resources.
                        <br>Be a major pharmacist internationally and find a cost-effective app with customized attire
                        by your choice.
                    </p>
                    <ul>
                        <li><a href="javascript:void(0)" class="allbtn active Hoverbtn" data-toggle="modal"
                                data-target="#myModalApp">Get in touch</a></li>
                        <li><a href="javascript:void(0)" class="allbtn Hoverbtn active Pricing">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightImg boxs">
            <img src="<?php echo url('public/front/img/medx/bannerRight.svg'); ?>" class="img-fluid" alt="banner">
        </div>
    </section>


    <!--	section about your App start-->
    <section class="AboutApp boxs">
        <div class="aboutRightimg">
            <img src="<?php echo url('public/front/img/medx/backblue.svg'); ?>" class="img-fluid" alt="banner">
        </div>
        <div class="aboutLeftimg">
            <img src="<?php echo url('public/front/img/medx/backblue.svg'); ?>" class="img-fluid" alt="banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="aboutApImg">
                        <img src="<?php echo url('public/front/img/medx/about.svg'); ?>" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="aboutContentnt">
                        <h2 class="heading">About <span class="colorBlue">Your App</span></h2>
                        <p class="subHeading"> Give identity to your business and make it run on a big platform as well
                            as make your business outshine from others, and easily grab public attention for your
                            business by your unique identity.
                        </p>
                        <p class="subHeading">Medx will help you to achieve paramount for your business by building an
                            app for your business which will be customized according to your will. </p>
                        <a href="javascript:void(0)" class="allbtn Hoverbtn" data-toggle="modal"
                            data-target="#myModalApp">Explore</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="AboutApp boxs">
        <div class="aboutAppIn boxs">
            <div class="container">
                <div class="aboutAppLeft">
                    <h2 class="heading">Sole <span>Features</span> of apps </h2>
                    <p class="subHeading">Designoweb has salient exciting features, which will make you run your app
                        and cart orders smoothly. Cause we want to offer you the best service in the time your need.
                    </p>
                </div>
                <div class="aboutAppRight boxs">
                    <div class="deliverySetUp boxs">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/fast.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2 class="subHeading">Fast deliveries </h2>
                        <p class="smallSize">Get items to deliver as soon as possible at your location, We use the best
                            drivers and in-built GPS to deliver your product with a very less time. </p>
                    </div>
                    <div class="deliverySetUp boxs">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/food-delivery.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2 class="subHeading">Easily order your product</h2>
                        <p class="smallSize">Easily order your product without any hassle or formality in just a few
                            taps and receive your order and relax.</p>
                        <p class="smallSize">Our GPS navigation efficiently detects your location and without taking
                            much details and formalities.</p>
                    </div>
                    <div class="deliverySetUp boxs">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/payment-1.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2 class="subHeading">E-commerce transactions </h2>
                        <p class="smallSize">We accept all kinds of payments, by using one of the best technologies in
                            transactions. We accept all kinds of cards and wallets as well as cash payments.
                            Cause we are here to make your life run smoothly and make you provide the
                            best medications.
                        </p>
                    </div>
                    <div class="deliverySetUp boxs">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/easy.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2 class="subHeading">Refunds & returns</h2>
                        <p class="smallSize">We provide you returns and refund policy when, As providing you the
                            satisfaction is our major role. Stay relaxed with our refunds and returns are very easy and
                            provide you assistance in such situations.
                    </div>
                </div>
            </div>
    </section>
    <!--	section about your App end-->

    <!--	Pharma Store Software Graphical Flow code start-->
    <section class="graphical boxs">
        <div class="graphicSlider1">
            <ul>
                <li><a href="javascript:void(0)" class="dotAll dot_All dot_All1 active" data-type="1"></a></li>
                <li><a href="javascript:void(0)" class="dotAll dot_All2" data-type="2"></a></li>
                <li><a href="javascript:void(0)" class="dotAll dot_All3" data-type="3"></a></li>
                <li><a href="javascript:void(0)" class="dotAll dot_All4" data-type="4"></a></li>
            </ul>
        </div>
        <div class="graphicalIn">
            <div class="container">
                <h2 class="heading">Pharma Store Software <span class="colorWhite">Graphical Flow</span></h2>
            </div>
        </div>
        <div class="graphicSlider boxs">
            <div class="graphicsScreenAll">
                <div class="graphicScreen content1">
                    <div class="container">
                        <div class="grapLeft">
                            <img src="<?php echo url('public/front/img/medx/phone1.png'); ?>" class="img-fluid" alt="screen">
                        </div>
                        <div class="grapRight">
                            <h2 class="heading">Explore <span class="colorWhite">product & huge varieties </span></h2>
                            <p class="subHeading"> We are here to simplify your life and provide the best health care
                                as soon as possible.</p>

                            <p class="subHeading">Find the product you according to your wish, just by one tap, and get
                                a huge variety of similar products.</p>
                            <p class="subHeading">
                                Upload your prescription and find the right products for your health at an efficient
                                price. Even explore an immense variety of health care, maternity products, health
                                devices, daily use products. </p>
                        </div>
                    </div>
                </div>
                <div class="graphicScreen content2">
                    <div class="container">
                        <div class="grapLeft">
                            <img src="<?php echo url('public/front/img/medx/phone2.png'); ?>" class="img-fluid" alt="screen">
                        </div>
                        <div class="grapRight">
                            <h2 class="heading">Get exciting <span class="colorWhite">ongoing offers</span></h2>
                            <p class="subHeading">Find an effective offer in your order from your trusted pharmacy and
                                continue saving, Medix will provide you staggering offers on each order. Soo stay home
                                to relax and make your cart full and keep ordering to win and get exciting offers.</p>
                        </div>
                    </div>
                </div>
                <div class="graphicScreen content3">
                    <div class="container">
                        <div class="grapLeft">
                            <img src="<?php echo url('public/front/img/medx/phone3.png'); ?>" class="img-fluid" alt="screen">
                        </div>
                        <div class="grapRight">
                            <h2 class="heading">Foremost <span class="colorWhite">search and high-tech option </span>
                            </h2>
                            <p class="subHeading">Have an advanced search option according to your requirements, be
                                smart, and get fast products and essentials you want. Advanced search options will help
                                you to get the best product at an affordable price from the nearest pharmacy and get
                                exciting offers. We are here to make you feel relax and provide the best health care as
                                soon as possible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="graphicScreen content4">
                    <div class="container">
                        <div class="grapLeft">
                            <img src="<?php echo url('public/front/img/medx/phone4.png'); ?>" class="img-fluid" alt="screen">
                        </div>
                        <div class="grapRight">
                            <h2 class="heading">Advanced <span class="colorWhite">search filtering</span></h2>
                            <p class="subHeading">Advanced search filtering will help you to get the product from the
                                most reasonable pharmacy. So get the best price of the product and even compare the
                                pharmacy by its reviews and rating and even provide your valuable feedback. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Pharma Store Software Graphical Flow code end-->

    <!--	Med X Application Features code start-->
    <section class="medxApplication boxs">
        <div class="container">
            <div class="medxAppIn">
                <h2 class="heading"><span class="colorBlue">Med X</span> Application Features</h2>
                <ul>
                    <li><a href="javascript:void(0)" class="active" data-id="1">Customers</a></li>
                    <li><a href="javascript:void(0)" data-id="2">Medical Store/Vendor Panel</a></li>
                    <li><a href="javascript:void(0)" data-id="3">Delivery Panel</a></li>
                    <li><a href="javascript:void(0)" data-id="4">Admin Panel</a></li>
                </ul>
                <div class="totalApp  ">
                    <div class="ShowApp app1 active">
                        <ul>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/register.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Register, Login<br>
                                        Forgot Password</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/offerbanner.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Store List</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/addtocart.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Add to Cart</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/promo.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Offers &amp; Discounts</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/mutiple.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Payment<br>
                                        Methods
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/drive.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Driver Tip</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/order.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Order<br>
                                        Confirmation</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/track.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Track Order</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/push.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Push<br>
                                        Notification</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/call.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p> Re-Booking</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/commont.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Chat With <br>Delivery person</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/loyal.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Ratings &amp; Feedback</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/histry.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Password <br>Recovery</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/refer.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Refer and Earn</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/lang.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Language<br>
                                        Conversion</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/file-upload.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Upload <br>
                                        Prescription</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="ShowApp app2">
                        <ul>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/review.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Profile <br>Management</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/track.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Track Order</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest2.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Profile Update, <br>KYC Upload</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest3.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Dashboard <br>Management</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest5.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Available & Unavailable<br>Time Settings</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest6.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Offer<br>Settings</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest7.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Instant Incoming<br>Order Notification</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest8.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Order accept, reject<br>order detail view</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest10.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Order history</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest9.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Commission payout<br>report with date filter</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest11.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Language<br>conversion</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest12.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Fare Setup</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/payroll.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Payroll</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/menu.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Manage Menu</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/transaction.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Payment Gateway</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab10.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Order Analytics</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/push.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Push<br>
                                        Messaging</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/shelf.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Store Inventory<br>
                                        Management</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/hospital.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Medicines<br>
                                        Management</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/report.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>REPORTS &<br>
                                        REVIEWS</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ShowApp app3">
                        <ul>

                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/register.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Register, Login<br>
                                        Forgot Password</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest2.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Profile Update,<br>
                                        KYC Upload
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab3.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Order Details</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab4.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Accept or<br>
                                        Reject Order
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab5.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Google Map<br>
                                        Redirection
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab7.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Work Status</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab8.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Earnings<br>
                                        Report</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab10.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Incentive<br>
                                        Report</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/reminder.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Alerts & Reminders</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab12.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Chat</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="ShowApp app4">
                        <ul>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part1.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Super admin<br>
                                        Dashboard</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part2.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Driver Availability<br>
                                        tracking
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab4.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>App Monitoring
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/push.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Push<br>
                                        Notification</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/tab10.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Data <br>Analytics</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/rest3.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Automate <br>Workflow</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/track.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Track Agents</p>
                                </div>
                            </li>

                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part6.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Manage Payments</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part9.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>MANAGE products<br> & stores</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part10.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Manage Customers</p>
                                </div>
                            </li>

                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part15.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Manage <br>Agents/Orders
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part16.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Content<br>
                                        Management<br>
                                        System</p>
                                </div>
                            </li>
                            <li>
                                <div class="tAppImg">
                                    <img src="<?php echo url('public/front/img/medx/part20.svg'); ?>" class="img-fluid" alt="icon">
                                </div>
                                <div class="tAppname">
                                    <p>Reports & Reviews
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Med X Application Features code end-->

    <!--	book now code start-->
    <!--
 <section class="bookNow boxs">
  <div class="container">
   <div class="bookNowIn">
    <p>Lorem Ipsum is simply dummy<br>
text of the printing.</p>
    <a href="javascript:void(0)">Book Now</a>
   </div>
  </div>
 </section>
-->
    <!--	book now code end-->
    <section class="dummyPart boxs">
        <div class="container">
            <div class="dummyMain boxs">
                <div class="colAreaLeft">
                    <div class="dummyLeft boxs">
                        <h3>Get in touch with our experts today and let Medx strike your business target.
                        </h3>
                    </div>
                </div>
                <div class="colAreaRight">
                    <div class="dummyRight boxs">
                        <ul>
                            <li class="nav-item launchBtnWhite dummyBtn greenHover logbtnWhite" data-toggle="modal"
                                data-target="#myModalApp">
                                <a href="javascript:void(0)" class="allbtn Hoverbtn active">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Inclusions code start-->
    <section class="inclusionPrice boxs">
        <div class="container">
            <div class="priceAll boxs">
                <div class="priceIn">
                    <h2>Friendly Price</h2>
                    <h3>The Price is soo lite which will gonna<br> make your <span class="colorBlue">Basket
                            Heavier</span></h3>
                    <p>Get the best and affordable price of your product by Medx and relax while staying home. <br>Medx
                        will provide you the most affordable price of your product, and make your life.
                    </p>
                </div>
                <div class="priceout">
                    <img src="<?php echo url('public/front/img/medx/price.svg'); ?>" class="img-fluid" alt="price">
                </div>
            </div>
        </div>
    </section>
    <section class="inclusion boxs">
        <div class="container">
            <div class="inclusionIn">
                <h2 class="heading colorWhite">Inclusions</h2>
                <div class="inclusionAll">
                    <div class="inclusFirst">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/ues.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2>Customer</h2>
                        <div class="nativeAnd">
                            <ul>
                                <li><span><img src="<?php echo url('public/front/img/medx/android.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Native Android</li>
                                <li><span><img src="<?php echo url('public/front/img/medx/apple.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Native iOS</li>
                                <li><span><img src="<?php echo url('public/front/img/medx/web-development.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Web Panel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inclusFirst">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/rest.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2>Restaurant Panel</h2>
                        <div class="nativeAnd">
                            <ul>
                                <li><span><img src="<?php echo url('public/front/img/medx/android.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Native Android</li>
                                <li><span><img src="<?php echo url('public/front/img/medx/apple.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Native iOS</li>
                                <li><span><img src="<?php echo url('public/front/img/medx/web-development.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Web Panel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inclusFirst">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/bike.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2>Delivery</h2>
                        <div class="nativeAnd">
                            <ul>
                                <li><span><img src="<?php echo url('public/front/img/medx/android.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Native Android</li>
                                <li><span><img src="<?php echo url('public/front/img/medx/apple.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Native iOS</li>
                                <li><span><img src="<?php echo url('public/front/img/medx/web-development.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Web Panel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inclusFirst">
                        <div class="devilaryImg">
                            <div class="devilaryImgIn">
                                <img src="<?php echo url('public/front/img/medx/admin.svg'); ?>" class="img-fluid" alt="delivry">
                            </div>
                        </div>
                        <h2>Admin</h2>
                        <div class="nativeAnd">
                            <ul>
                                <li><span><img src="<?php echo url('public/front/img/medx/android.svg'); ?>" class="img-fluid"
                                            alt="img"></span>Native Android</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Inclusions code end-->

    <!--	Exclusive Offerings of our Instacart Clone code start-->
    <section class="instacart boxs">
        <div class="container">
            <div class="instaInner">
                <!--<h2 class="heading">Offerings of our  <span class="colorBlue">Instacart Clone</span></h2>-->
                <h2 class="heading">Offerings of our <span class="colorBlue">Pharmacy app</span></h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="instacartImg">
                            <img src="<?php echo url('public/front/img/medx/medx.png'); ?>" class="img-fluid" alt="medx">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="instacartApp">
                            <ul>
                                <li>
                                    <div class="instaIMgg">
                                        <img src="<?php echo url('public/front/img/medx/mobile.svg'); ?>" class="img-fluid" alt="mobile">
                                    </div>
                                    <div class="instaContent">
                                        <h2>Mobile Apps</h2>
                                        <p>Whitelabel iOS and Android applications for your clients and bread cooks all
                                            implicit local iOS and Android source code for splendid execution. And
                                            excellent implication of each tool in-built in-app.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="instaIMgg">
                                        <img src="<?php echo url('public/front/img/medx/web.svg'); ?>" class="img-fluid" alt="mobile">
                                    </div>
                                    <div class="instaContent">
                                        <h2>Web App</h2>
                                        <p>A featureful front end site for your clients and dough punchers to log in,
                                            purchase an item, pay, provide input and check request history. And make a
                                            strong website that attracts the public and give an impact on the customers.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="instaIMgg">
                                        <img src="<?php echo url('public/front/img/medx/adminweb.svg'); ?>" class="img-fluid" alt="mobile">
                                    </div>
                                    <div class="instaContent">
                                        <h2>Admin Area</h2>
                                        <p>You likewise get an amazing Admin Dashboard to control your whole business
                                            from approving and supporting distinctive client gatherings to including
                                            diverse installment strategies versatile </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="instaIMgg">
                                        <img src="<?php echo url('public/front/img/medx/pencil.svg'); ?>" class="img-fluid" alt="mobile">
                                    </div>
                                    <div class="instaContent">
                                        <h2>100% Customizable according to your wish</h2>
                                        <p>The whole code of the Server, Admin Dashboard, iOS, and Android applications
                                            are given with decoded code and complete documentation. Get a customized
                                            website for you and according to your business.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="instaIMgg">
                                        <img src="<?php echo url('public/front/img/medx/payment.svg'); ?>" class="img-fluid" alt="mobile">
                                    </div>
                                    <div class="instaContent">
                                        <h2>Payment & Installment Options</h2>
                                        <p>Instacart Clone is worked with Paypal Mobile SDK, Stripe Credit Card
                                            Processing, and Cash on Delivery as default accessible techniques. We can
                                            include more upon demand of the business and way of procedure.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="cloneBtn">
                            <ul>
                                <li><a href="javascript:void(0)" class="allbtn active Hoverbtn getItBtn"
                                        data-toggle="modal" data-target="#myModalApp">Get It For $5499</a></li>
                                <!-- 								<li><a href="javascript:void(0)" class="allbtn Hoverbtn">Watch Live Demo</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Exclusive Offerings of our Instacart Clone code end-->


    <section class="customer boxs">
        <div class="patterns"></div>
        <div class="container">
            <div class="customerMain boxs">
                <div class="row">
                    <div class="col-md-5">
                        <div class="customerLeft priceLeft boxs">
                            <h2>Customer <span class="spanColor">Stories<span
                                        class="greenBar greenBar2"></span></span></h2>
                            <div class="prolftSlick boxs">

                                <div class="slicko">
                                    <div class="slkimg boxs">
                                        <div class="menImg">
                                            <img src="<?php echo url('public/front/img/medx/client1.jpeg'); ?>" alt="men" class="img-fluid">
                                        </div>
                                        <div class="menTxt">
                                            <h3>David Smith</h3>
                                            <span> Mexico</span>
                                        </div>
                                    </div>
                                    <p>The highlights and working of the MedX is smooth. One can encounter an amazing
                                        progression of use that is absolutely easy to understand. The UI and UX are
                                        astonishingly extraordinary and brisk to browse a huge assortment of pharmacies.
                                    </p>
                                </div>

                                <div class="slicko">
                                    <div class="slkimg boxs">
                                        <div class="menImg">
                                            <img src="<?php echo url('public/front/img/medx/client2.jpeg'); ?>" alt="men" class="img-fluid">
                                        </div>
                                        <div class="menTxt">
                                            <h3>Juan Carlos</h3>
                                            <span>Venezuela</span>
                                        </div>
                                    </div>
                                    <p>Medx has been a momentous item for my pharmacy organizations. It has been a
                                        significant resource that gives a practical benefit. I can have a standard
                                        quality keep an eye on my workers and can get a lot quicker and precise which
                                        helps in developing my business deals. </p>
                                </div>

                                <div class="slicko">
                                    <div class="slkimg boxs">
                                        <div class="menImg">
                                            <img src="<?php echo url('public/front/img/medx/client3.jpeg'); ?>" alt="men" class="img-fluid">
                                        </div>
                                        <div class="menTxt">
                                            <h3> Sophia Smith</h3>
                                            <span> Canada</span>
                                        </div>
                                    </div>
                                    <p>MedX has been an incredible activity for my business. It has recently changed my
                                        method of systems. All the benefits lie in my grasp now. Aside from this, my
                                        eat-in client base has likewise expanded because of the connection by
                                        application in the entire city. </p>
                                </div>

                                <div class="slicko">
                                    <div class="slkimg boxs">
                                        <div class="menImg">
                                            <img src="<?php echo url('public/front/img/medx/client4.jpeg'); ?>" alt="men" class="img-fluid">
                                        </div>
                                        <div class="menTxt">
                                            <h3>Mike Jones</h3>
                                            <span> Argentina</span>
                                        </div>
                                    </div>
                                    <p>Incredible Experience! I would prescribe Medx to a wide range of organizations –
                                        huge pharmacies and stores as well as little sellers as well. Medx acclimates to
                                        organizations likewise. The littler organizations get a ton of experience from
                                        the fundamentally expanded presentation to the market and that is the best point
                                        to have it.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="customerRight boxs">
                            <div class="customerForm priceLeft boxs">
                                <div class="priceLeft boxs">
                                    <h2>Let's take your Pharma Business to the next level</h2>
                                </div>
                                <!-- <?php // echo do_shortcode("[contact-form-7 id='5' title='footer Contact form']");
                                ?> -->
                                {{-- <?php // echo do_shortcode('[contact-form-7 id="1400" title="Fooedx Contact Form"]');
                                ?> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="certificates boxs">
        <div class="container">
            <div class="certificatesMain boxs">
                <img src="<?php echo url('public/front/img/medx/iso.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/iec.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/msme.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/clutch.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/app.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/good.svg'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/ger.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/top.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/topdev.png'); ?>" alt="iOS" class="img-fluid">
                <img src="<?php echo url('public/front/img/medx/topmob.png'); ?>" alt="iOS" class="img-fluid">
            </div>
        </div>
    </section>

    <footer class="footer boxs">
        <div class="container">
            <div class="footerall  boxs">
                <div class="footleft d-inline-block ">
                    <div class="footLogoImg">
                        <a href="https://www.appxhub.com/"> <img src="<?php echo url('public/front/img/medx/appx.png'); ?>" class="img-fluid appx"
                                alt="logo"></a>
                        <div class="ventureby">
                            <p>A Venture By:</p>
                            <a href="https://designoweb.com/"> <img src="<?php echo url('public/front/img/medx/dw.png?version = 1.0.1'); ?>"
                                    class="img-fluid" alt="logo"></a>
                        </div>
                    </div>
                </div>
                <div class="footmiddle d-inline-block ">
                    <div class="footpart">
                        <h3>Call</h3>
                        <ul>
                            <li>Sales: <span class="colorBlue"><a href="tel:+91 8923743143">+91 8923743143</a></span>
                            </li>
                            <li>Whatsapp: <span class="colorBlue"> +91 8923743143</span></li>
                        </ul>
                    </div>
                </div>
                <div class="footmiddle d-inline-block ">
                    <div class="footpart">
                        <h3>Chat With Me</h3>
                        <ul>
                            <li>Whatsapp</li>
                            <li>Sales: <span class="colorBlue"><a href="tel:+91 8923743143">+91 8923743143</a></span>
                            </li>
                            <li>Skype: <span class="colorBlue"> AppXhub</span></li>
                        </ul>
                    </div>
                </div>

                <div class="footmiddle d-inline-block ">
                    <div class="footpart">
                        <h3>Email</h3>
                        <ul>
                            <li>Business inquiry <span class="d-block colorBlue"><a
                                        href="mailto:info.appxhub@gmail.com">info.appxhub@gmail.com</a></span></li>
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
                    <p><span><i class="far fa-copyright"></i></span> <?php echo date('Y'); ?> Designoweb Technologies</p>
                </div>
                <div class="secure">
                    <img src="<?php echo url('public/front/img/medx/secure.png'); ?>" alt="secure" class="img-fluid">
                </div>
                <div class="btmright d-inline-block float-right ">
                    <h5 class="d-inline-block">We are Social:</h5>
                    <a href="https://www.facebook.com/designowebtech/" target="_blank" class="facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/designoweb/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/designoweb" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="https://dribbble.com/designoweb" target="_blank"><i class="fab fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!--	modal code start-->
    <!--for buy now-->
    <div class="custBox modal" id="myModalApp">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="customerRight boxs">
                        <div class="customerForm priceLeft boxs">
                            <h2>Let's take your Pharma Business to the next level</h2>
                            <button type="button" class="close" data-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.523" height="18.523"
                                    viewBox="0 0 18.523 18.523">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #1e73c9
                                            }
                                        </style>
                                    </defs>
                                    <g id="ic_close_48px" transform="translate(-10 -10)">
                                        <path id="Path_270"
                                            d="M28.523 11.872L26.651 10l-7.389 7.389L11.872 10 10 11.872l7.389 7.389L10 26.651l1.872 1.872 7.389-7.389 7.389 7.389 1.872-1.872-7.389-7.389z"
                                            class="cls-1" data-name="Path 270" />
                                    </g>
                                </svg>

                            </button>
                            <!-- <?php // echo do_shortcode("[contact-form-7 id='19' title='modal Contact form']");
                            ?> -->
                            {{-- <!-- <?php // echo do_shortcode('[contact-form-7 id="1400" title="Products Contact Form"]');
                            ?> --> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--for buy now-->

    <script src="<?php echo url('public/front/js/common/jquery.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/intlTelInput.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/intlTelInput.min.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/jquery.formatter.min.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/countryscript.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/common/slick.js'); ?>"></script>
    <script src="<?php echo url('public/front/js/medx/custom.js'); ?>"></script>

    <script>
        $(".phoneNumbers").intlTelInput({
            preferredCountries: ["in"],
            separateDialCode: false,
            nationalMode: false,
            utilsScript: "",
        });
    </script>

</body>

</html>
