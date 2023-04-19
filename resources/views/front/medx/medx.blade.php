@extends('front/layout')
@section('content')

    <!--	banner section start-->
    <section class="bannnerStart boxs medxBanner">
        <div class="container">
            <div class="bannerLeft boxs">
                <span class="productWebLogo boxs"><img src="https://designoweb.com/public/front/img/images/medxLogo.png" class="img-fluid" alt="Product Logo"></span>
                <div class="bannerLeftIn sectionContent sectionContent2">
                    <h1 class="">The World’s Best AI Based <br><span class="colorPrimary"> Pharmacy Delivery </span>Solution<br>
                        for your Business.</h1>
                    <p class="headingSize">Are you a pharmacist? And wish to expand your business with full enforcement,
                        Medx is a precise platform for you. Providing a bombshell team for your app with fully equipped
                        technologies, resources.
                    </p>
                    <p class="headingSize">Be a major pharmacist internationally and find a cost-effective app with customized attire
                        by your choice.</p>
                    <ul class="sectionBtns boxs">
                        <li><a href="<?php echo route('front/contact'); ?>" class="btnStyle pageBtn">Get in touch</a></li>
                        <li><a href="#inclusionPrice" class="btnStyle pageBtn">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightImg">
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
            <div class="aboutAppChild boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="aboutApImg">
                            <img src="<?php echo url('public/front/img/medx/about.svg'); ?>" class="img-fluid" alt="img">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="aboutContentnt sectionContent">
                            <h2 class="heading">About <span class="colorPrimary">Your App</span></h2>
                            <p class="subHeading"> Give identity to your business and make it run on a big platform as well
                                as make your business outshine from others, and easily grab public attention for your
                                business by your unique identity.
                            </p>
                            <p class="subHeading">Medx will help you to achieve paramount for your business by building an
                                app for your business which will be customized according to your will. </p>
                            <span class="sectionBtns boxs">
                                <a href="<?php echo route('front/contact'); ?>" class="btnStyle pageBtn">Explore</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="AboutApp boxs">
        <div class="aboutAppIn boxs">
            <div class="container">
                <div class="aboutAppChild boxs">
                
                    <div class="aboutAppLeft sectionContent">
                        <h2 class="heading">Sole <span class="colorPrimary">Features</span> of apps </h2>
                        <p class="subHeading">Designoweb has salient exciting features, which will make you run your app
                            and cart orders smoothly. Cause we want to offer you the best service in the time your need.
                        </p>
                    </div>
                    <div class="aboutAppRight">
                        <div class="deliverySetUp">
                            <div class="devilaryImg">
                                <div class="devilaryImgIn">
                                    <img src="<?php echo url('public/front/img/medx/fast.svg'); ?>" class="img-fluid" alt="delivry">
                                </div>
                            </div>
                            <h2 class="subHeading">Fast deliveries </h2>
                            <p class="smallSize">Get items to deliver as soon as possible at your location, We use the best
                                drivers and in-built GPS to deliver your product with a very less time. </p>
                        </div>
                        <div class="deliverySetUp">
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
                        <div class="deliverySetUp">
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
                        <div class="deliverySetUp">
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
                <h2 class="heading">Pharma Store Software <span class="colorPrimary">Graphical Flow</span></h2>
            </div>
        </div>
        <div class="graphicSlider boxs">
            <div class="graphicsScreenAll">
                <div class="graphicScreen content1">
                    <div class="container">
                        <div class="grapLeft">
                            <img src="<?php echo url('public/front/img/medx/phone1.png'); ?>" class="img-fluid" alt="screen">
                        </div>
                        <div class="grapRight sectionContent">
                            <h2 class="heading">Explore <span class="colorPrimary">product & huge varieties </span></h2>
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
                        <div class="grapRight sectionContent">
                            <h2 class="heading">Get exciting <span class="colorPrimary">ongoing offers</span></h2>
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
                        <div class="grapRight sectionContent">
                            <h2 class="heading">Foremost <span class="colorPrimary">search and high-tech option </span>
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
                        <div class="grapRight sectionContent">
                            <h2 class="heading">Advanced <span class="colorPrimary">search filtering</span></h2>
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
                <h2 class="heading"><span class="colorPrimary">Med X</span> Application Features</h2>
                <ul class="medxAppInLists">
                    <li><a href="javascript:void(0)" class="active" data-id="1">Customers</a></li>
                    <li><a href="javascript:void(0)" data-id="2">Store/Vendor Panel</a></li>
                    <li><a href="javascript:void(0)" data-id="3">Delivery Panel</a></li>
                    <li><a href="javascript:void(0)" data-id="4">Admin Panel</a></li>
                </ul>
                <div class="totalApp appTabsLists">
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
            <div class="dummyMain boxs d-flex">
                <div class="colAreaLeft boxs">
                    <div class="dummyLeft boxs">
                        <h3>Get in touch with our experts today and let Medx strike your business target.
                        </h3>
                    </div>
                </div>
                <div class="colAreaRight">
                    <div class="dummyRight boxs">
                        <ul>
                            <li class="nav-item">
                                <a href="<?php echo route('front/contact'); ?>" class="btnStyle pageBtn">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Inclusions code start-->
    <section class="inclusionPrice boxs" id="inclusionPrice">
        <div class="container">
            <div class="priceAll boxs d-flex">
                <div class="priceIn sectionContent">
                    <span class="subHeadText colorPrimary boxs">Friendly Price</span>
                    <h2 class="heading">The Price is soo lite which will gonna make your <span class="colorPrimary">Basket
                            Heavier</span></h2>
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
                <h2 class="heading">Offerings of our <span class="colorPrimary">Pharmacy app</span></h2>
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
                                <li><a href="<?php echo route('front/contact'); ?>" class="btnStyle">Get It For $5499</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Exclusive Offerings of our Instacart Clone code end-->


   <!-- Query Section Start -->
    <div class="querySection boxs">
        <x-query_section></x-query_section>
    </div>
    <!-- Query Section End -->
        
    <!-- Awards and recognition section start -->
        <x-award_section></x-award_section>
    <!-- Awards and recognition section end -->

@endsection