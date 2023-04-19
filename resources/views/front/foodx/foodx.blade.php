@extends('front/layout')
@section('content')

<section class="foodxWorld boxs">
    <div class="container">
        <div class="foodxWorldMain boxs">
            <div class="row">
                <div class="col-md-7">
                    <div class="foodLeft boxs">
                        <span class="productWebLogo boxs"><img src="<?php echo url('public/front/images/foodxLogo.png'); ?>" class="img-fluid" alt="Product Logo" loading="lazy" /></span>
                        <div class="sectionHeading boxs sectionContent sectionContent2">
                            <h1 class="world">The World’s Best AI Based <span class="colorPrimary">Food Delivery</span> Solution for your Business.</h1>
                        </div>
                        
                        <div class="launch launch2 boxs">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mainlaunch">
                                        <div class="launchImg">
                                            <div class="greenBox iconLightBg"></div>
                                            <img src="<?php echo url('public/front/img/foodx/startup.svg'); ?>" alt="Startup" class="img-fluid" loading="lazy">
                                        </div>
                                        <div class="launchTxt">
                                            <p>Launch in a Week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch">
                                        <div class="launchImg">
                                            <div class="greenBox iconLightBg"></div>
                                            <img src="<?php echo url('public/front/img/foodx/Intelligent.svg'); ?>" alt="Startup" class="img-fluid" loading="lazy">
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
                                            <div class="greenBox iconLightBg"></div>
                                            <img src="<?php echo url('public/front/img/foodx/live.svg'); ?>" alt="Startup" class="img-fluid" loading="lazy">
                                        </div>
                                        <div class="launchTxt">
                                            <p>Live Tracking</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mainlaunch">
                                        <div class="launchImg">
                                            <div class="greenBox iconLightBg"></div>    
                                            <img src="<?php echo url('public/front/img/foodx/online-order.svg'); ?>" alt="Startup" class="img-fluid" loading="lazy">
                                        </div>
                                        <div class="launchTxt">
                                            <p class="realTime">Real Time Sales &
                                                Order Management</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="btns btns1 boxs">
                                        <ul class="sectionBtns boxs">
                                            <li class=""><a class="btnStyle pageBtn" href="<?php echo route('front/contact'); ?>">Get in touch</a></li>
                                            <li class=""><a class="btnStyle pageBtn" href="#pricingSection">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="dots">
                        <img src="<?php echo url('public/front/img/foodx/dots.png'); ?>" alt="dots" class="img-fluid" loading="lazy">
                    </div>
                    <div class="footRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/layer.svg'); ?>" alt="Layer" class="img-fluid" loading="lazy" >
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
                            <img src="<?php echo url('public/front/img/foodx/about.svg'); ?>" alt="about" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutLeft foodxWorldMain boxs sectionContent">
                            <h2>About <span class="colorPrimary">FoodX</span></h2>
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
        <img src="<?php echo url('public/front/img/foodx/new.svg'); ?>" alt="triangle" class="img-fluid" loading="lazy">
    </div>
    <div class="container">
        <div class="perfectMain boxs">
            <div class="row">
                <div class="col-md-5">
                    <div class="perfectLeft perfectPad foodxWorldMain boxs sectionContent">
                        <h2>A Perfect Fit for
                            <span class="colorPrimary">Restaurant Preneurs</span>    
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
                                            <img src="<?php echo url('public/front/img/foodx/delivery.svg'); ?>" alt="delivery" class="img-fluid" loading="lazy">
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
                                            <img src="<?php echo url('public/front/img/foodx/pizza.svg'); ?>" alt="pizza" class="img-fluid" loading="lazy">
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
                                            <img src="<?php echo url('public/front/img/foodx/chain.svg'); ?>" alt="Chain" class="img-fluid" loading="lazy">
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
                                            <img src="<?php echo url('public/front/img/foodx/beer.svg'); ?>" alt="beer" class="img-fluid" loading="lazy">
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
        <img src="<?php echo url('public/front/img/foodx/project.svg'); ?>" alt="triangle" class="img-fluid" loading="lazy">
    </div>
    <div class="container">
        <div class="foodxAppMain boxs">
            <div class="foodxCenter foodxWorldMain foodxWorldMainLists boxs">
                <h2><span class="colorPrimary">FoodX </span>Application Features</h2>
                <div class="btnsgroups boxs">
                  
                    <ul class="nav nav-tabs foodXTab launchBtn boxs foodxWorldMainTabs newTabsDesign" id="myTab" role="tablist">
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
                                <img src="<?php echo url('public/front/img/foodx/customer1.svg'); ?>" alt="object" class="img-fluid customer1" loading="lazy">
                                <p>Register, Login<br>
                                    Forgot Password</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer2.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Offer Banner</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer3.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Food Listing</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer4.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Add to Cart</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer4.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Promo Codes</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer6.svg'); ?>" alt="object" class="img-fluid customer1" loading="lazy">
                                <p>Multiple<br>
                                    Payment Modes
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer7.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Wallet<br>
                                    integration</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer8.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Driver Tip</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer9.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Order<br>
                                    Confirmation</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer10.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Track Order</p>
                            </div> 
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer11.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Push<br>
                                    Notification</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer12.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Call & Chat</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer13.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Reviews</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer14.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Comments</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer16.svg'); ?>" alt="object" class="img-fluid" loading="lazy">
                                <p>Order History</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer18.svg'); ?>" alt="object" class="img-fluid"  loading="lazy">
                                <p>Refer and Earn</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/customer17.svg'); ?>" alt="object" class="img-fluid"  loading="lazy">
                                <p>Language<br>
                                    Conversion</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade placehlderBtn" id="Restaurant" role="tabpanel" aria-labelledby="Restaurant-tab">
                        
                        <div class="placeArea">
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest1.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Register, Login<br>
                                    Change Password</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest2.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Profile Update,<br>
                                    KYC Upload</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest3.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Order Dashboard<br>
                                    Screen
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest4.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Add Food<br>
                                    Items</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest5.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Available & Unavailable<br>
                                    Time Settings
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest6.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Offer<br>
                                    Settings</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest7.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Instant Incoming<br>
                                    Order Notification</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest8.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Order accept, reject<br>
                                    order detail view</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest10.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Order history</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest9.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Commission payout<br>
                                    report with date filter
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest11.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Language<br>
                                    conversion
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/rest12.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Enable, Disable<br>
                                    Foods
                                    </p>
                            </div>  
                        </div>
                       
                    </div>
                    <div class="tab-pane fade placehlderBtn" id="Delivery" role="tabpanel" aria-labelledby="Delivery-tab">
                        
                        <div class="placeArea">
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab1.svg'); ?>" alt="tab" class="img-fluid customer1" loading="lazy">
                                <p>Register, Login<br>
                                    Change Password</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab2.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Profile Update,<br>
                                    KYC Upload</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab3.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Order Details</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab4.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Accept or<br>
                                    Reject Order
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab5.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Google Map<br>
                                    Redirection
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab6.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Auto Reject</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab7.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Order Status</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab8.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Earnings<br>
                                    Report</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab9.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Order History</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab10.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Incentive<br>
                                    Report</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab11.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>COD</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/tab12.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
                                <p>Chat</p>
                            </div>  
                        </div>
                       
                    </div>
                    <div class="tab-pane fade placehlderBtn" id="Admin" role="tabpanel" aria-labelledby="Admin-tab">
                        
                        <div class="placeArea">
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part1.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Super admin<br>
                                    Dashboard</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part2.svg'); ?>" alt="part" class="img-fluid customer1" loading="lazy">
                                <p>Driver Availability<br>
                                    tracking
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part3.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Restaurant</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part4.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Geo-fencing</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part5.svg'); ?>" alt="part" class="img-fluid customer1" loading="lazy">
                                <p>Add, edit, enable,<br>
                                    disable delivery boys
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part6.svg'); ?>" alt="part" class="img-fluid customer1" loading="lazy">
                                <p>Multiple<br>
                                    Payment Modes</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part7.svg'); ?>" alt="part" class="img-fluid customer1" loading="lazy">
                                <p>Popular brands<br>
                                    management</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part8.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Promocode<br>
                                    management
                                    </p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part9.svg'); ?>" alt="part" class="img-fluid customer1" loading="lazy">
                                <p>Order Management<br>
                                    Manual Assign of<br>
                                    Delivery Boys</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part10.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Sub-admin<br>
                                    management</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part11.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Chat with User,<br>
                                    Delivery Boy
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part12.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Language<br>
                                    conversion
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part13.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Order history<br>
                                    reports</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part14.svg'); ?>" alt="part" class="img-fluid customer1" loading="lazy">
                                <p>Payout Reports for<br>
                                    Delivery Boys</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part15.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Automatic payout<br>
                                    feature
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part16.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Content<br>
                                    Management<br>
                                    System</p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part17.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Custom push<br>
                                    notification</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part18.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
                                <p>Incentive<br>
                                    settings</p>
                            </div>
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part19.svg'); ?>" alt="part" class="img-fluid customer1" loading="lazy">
                                <p>Delivery Boy,<br>
                                    Unique and Common<br>
                                    Commission Settings
                                    </p>
                            </div>  
                            <div class="innerPlaceholder">
                                <img src="<?php echo url('public/front/img/foodx/part20.svg'); ?>" alt="part" class="img-fluid" loading="lazy">
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
        <img src="<?php echo url('public/front/img/foodx/one.svg'); ?>" class="img-fluid" alt="one" loading="lazy">
    </div>
    <div class="rectangle rectangle5 rectangle4">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="pattern" class="img-fluid" loading="lazy">
    </div>
    <div class="container">
        <div class="hereWorkMain perfectLeft foodxWorldMain boxs">
            <h2 class="hereWord">Here's how it <span class="colorPrimary">works</span></h2>
            <div class="row hereRow">
                <div class="col-md-6">
                    <div class="workRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/work1.svg'); ?>" class="img-fluid" alt ="work" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workLeft boxs">
                        
                        <div class="perfectLeft foodxWorldMain sectionContent">
                            <h2>On Boarding <span class="colorPrimary">Documentation</span></h2>
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
        <img src="<?php echo url('public/front/img/foodx/two.svg'); ?>" class="img-fluid" alt="two" loading="lazy">
    </div>
    <div class="rectangle rectangle2 rectangle6">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="pattern" class="img-fluid" loading="lazy">
    </div>
    <div class="container"> 
        <div class="hereWorkMain boxs">
            <div class="row">
                <div class="col-md-6">
                    <div class="workRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/work2.svg'); ?>" class="img-fluid" alt ="work" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workLeft workLeft2 boxs">
                        <div class="perfectLeft foodxWorldMain sectionContent">
                            <h2><span class="colorPrimary">Transforming</span> The app for your Brand</h2>
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
        <img src="<?php echo url('public/front/img/foodx/three.svg'); ?>" class="img-fluid" alt="three" loading="lazy">
    </div>
    <div class="rectangle rectangle5 rectangle4">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="pattern" class="img-fluid" loading="lazy">
    </div>
    <div class="container">
        <div class="hereWorkMain boxs">
            <div class="row hereRow2">
                <div class="col-md-6">
                    <div class="workRight boxs">
                        <img src="<?php echo url('public/front/img/foodx/work3.svg'); ?>" class="img-fluid" alt ="work" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workLeft boxs">
                        <div class="perfectLeft foodxWorldMain sectionContent">
                            <h2><img src="<?php echo url('public/front/img/foodx/boom.svg'); ?>" alt="boom" class="img-fluid boom" loading="lazy"><span class="colorPrimary">We are Live</span><br> your Restaurant Ready to Deliver Online </h2>
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
        <div class="dummyMain boxs d-flex">
                <div class="colAreaLeft boxs">
                    <div class="dummyLeft boxs">
                        <h3>Get in touch with our experts today and let 
                            FoodX meet your new business goals.
                            </h3>
                    </div>
                </div>
                <div class="colAreaRight">
                    <div class="dummyRight boxs">
                        <ul>
                            <li class="">
                                <a class="btnStyle pageBtn" href="<?php echo route('front/contact'); ?>">Contact us </a>
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
                        <img src="<?php echo url('public/front/img/foodx/globe.svg'); ?>" alt="globe" class="img-fluid" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="priceLeft priceLeft1 boxs sectionContent">
                        <span class="subHeadText colorPrimary boxs">Pricing</span>
                        <h2>This Price that will surely make a <span class="colorPrimary">Dent in the Universe.</span></h2>
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
                <span class="inclusionsHeading boxs">Inclusions</span>
                <div class="webpart boxs">
                    <div class="mainlaunch webpartInner webpartInner1 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/user.svg'); ?>" alt="User" class="img-fluid" loading="lazy">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Customer</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/android.svg'); ?>" alt="android" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Native Android  </span>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/apple.svg'); ?>" alt="apple" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Native iOS  </span>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Web Panel  </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mainlaunch webpartInner webpartInner2 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/restaurant.svg'); ?>" alt="User" class="img-fluid" loading="lazy">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Restaurant Panel</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/android.svg'); ?>" alt="android" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Native Android  </span>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/apple.svg'); ?>" alt="apple" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Native iOS  </span>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Web Panel  </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mainlaunch webpartInner webpartInner3 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/delivery-bike.svg'); ?>" alt="User" class="img-fluid" loading="lazy">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Delivery</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/android.svg'); ?>" alt="android" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Native Android  </span>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/apple.svg'); ?>" alt="apple" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Native iOS  </span>
                                </div>
                            </div>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Web Panel  </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mainlaunch webpartInner webpartInner4 perfectDemo">
                        <div class="launchImg">
                            <div class="greenBox"></div>
                            <img src="<?php echo url('public/front/img/foodx/admin.svg'); ?>" alt="User" class="img-fluid" loading="lazy">
                        </div>
                        <div class="launchTxt">
                            <p class="cafe cafe1">Admin</p>
                            <div class="os">
                                <div class="osImg">
                                    <img src="<?php echo url('public/front/img/foodx/web-development.svg'); ?>" alt="web-development" class="img-fluid" loading="lazy">
                                </div>
                                <div class="">
                                    <span>Web Panel  </span>
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
        <div class="surpriseMain boxs d-flex">
            <div class="surpriseLeft ">
                <img src="<?php echo url('public/front/img/foodx/box.svg'); ?>" alt="box" class="img-fluid" loading="lazy">
            </div>
            <div class="surpriseRight priceLeft sectionContent ">
                <span class="subHeadText colorPrimary boxs">Surprise for You!</span>
                <h2>Complete suit at an <span class="colorPrimary">Amazing </span><span class="colorPrimary">Package</span> Price of <span class="doller">$5499</span></h2>
                <p>This is only one time Cost, No Hidden Charges</p>
                <div class="surpriseBtn boxs">
                    <a class="btnStyle pageBtn" href="<?php echo route('front/contact'); ?>">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trust boxs">
    <div class="container">
        <div class="trustMain boxs">
            <div class="trustImg">
                <img src="<?php echo url('public/front/img/foodx/trust.svg?v=9.9.8'); ?>" alt="trust" class="deskimg img-fluid" loading="lazy">
                <img src="<?php echo url('public/front/img/foodx/trustMob.svg?v=9.9.8'); ?>" alt="trust" class="mobimg img-fluid" loading="lazy">
            </div>
            <div class="trustTxt priceLeft">
                <h2><span class="colorPrimary">Pay us Just 10%</span> for Booking and
                    Rest when your Apps are Live</h2>
            </div>
            <div class="trustBtn ">
                <a class="btnStyle" href="<?php echo route('front/contact'); ?>">Book Now</a>
            </div>
        </div>
    </div>
</section>

<section class="support boxs">
    <div class="rectangle rectangle2">
        <img src="<?php echo url('public/front/img/foodx/repeatgrid.svg'); ?>" alt="repeatgrid" class="img-fluid" loading="lazy">
    </div>
    <div class="container">
        <div class="supportMain boxs">
            <div class="supportLeft priceLeft boxs sectionContent">
                <h2>We want to see you Grow
                    with our <span class="colorPrimary">2 Month Free Support</span></h2>
                <p>We provide free maintenance for 2 months! FoodX comes with a dedicated service level agreement of 2 months free support & maintenance. Our tech experts will ensure that your application is secure, updated, bug-free and live 24x7.</p>
            </div>
        </div>
    </div>
    <div class="supportRight boxs">
        <img src="<?php echo url('public/front/img/foodx/tab.svg'); ?>" alt="tab" class="img-fluid" loading="lazy">
    </div>
</section>

<section class="faq boxs">
    <div class="container">
        <div class="faqMain boxs">
            <div class="faqAccordions priceLeft boxs">
                <h2><span class="colorPrimary">FAQ's</span></h2>
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





<!-- Query Section Start -->
    <div class="querySection boxs">
        <x-query_section></x-query_section>
    </div>
<!-- Query Section End -->
    
<!-- Awards and recognition section start -->
    <x-award_section></x-award_section>
<!-- Awards and recognition section end -->


@endsection

