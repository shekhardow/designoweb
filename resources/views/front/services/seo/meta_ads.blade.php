@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="mainBanner serviceBanner boxs">
        <div class="container">
            <div class="mainBannerBox serviceBannerBox boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mainBannerLeft serviceBannerLeft boxs">
                            <div class="bannerHeading boxs">
                                <h1 class="fontSize52">Meta Ads Services</h1>
                            </div>
                            <div class="serviceFor serviceFor4 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Easy to Use</h2>
                                        <p class="fontSize16 boxs">Our platform is easy to use and navigate, so you can get started right away.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Customized Campaigns</h2>
                                        <p class="fontSize16 boxs">We work closely with our clients to develop customized campaigns that are tailored to their specific needs and objectives.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Expertise</h2>
                                        <p class="fontSize16 boxs">Our team of experts has years of experience in online advertising and is well-versed in the latest trends and strategies.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Cost-effective</h2>
                                        <p class="fontSize16 boxs">With our Meta Ads services, you can optimize your ad spend and achieve a better return on investment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight boxs">
                            <div class="serviceBannerContent boxs">
                                <div class="serviceMainContent boxs">
                                    <h2 class="servBannerHeading fontSize32 boxs">Making Meta Ads Promotions that Proselyte</h2>
                                    <p class="servBannerContent fontSize18 boxs">Are you looking for a powerful and effective way to boost your online advertising efforts? Look no further than Meta Ads! Our innovative platform allows you to reach a wider audience, increase conversions, and achieve your marketing goals. With Meta Ads, you can streamline your advertising campaigns and optimize your ad spend. Our cutting-edge technology uses advanced algorithms and machine learning to identify the most relevant audience for your ads, ensuring that you get the highest ROI possible.</p>
                                </div>
                                <span class="discussIdea boxs"><a class="btnStyle" href="<?php echo route('front/contact'); ?>">Connect With Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Banner End -->

    <!-- We Deliver Section Start -->
    <div class="weDeliverBox boxs">
        <div class="container">
            <div class="weDeliverInner boxs">
                
                <x-we_deliver_section></x-we_deliver_section>

                <div class="weDeliverContent boxs">
                    <div class="weDeliverTop boxs">
                        <div class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </div>
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="blackFont fontSize48 pb-0">We Deliver Comprehensive Meta Ads Services</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Our Meta Ads services offer a powerful and effective way to boost your online advertising efforts. They  are designed to help you achieve your marketing goals and take your app to the next level.</p>
                        </div>
                    </div>
                    <div class="weDeliverListing listcounterSec boxs">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">App Install Campaigns</h3>
                                        <p class="fontSize18 boxs">We help you reach your target audience and drive app downloads with highly targeted and effective app install campaigns.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Re-Engagement Campaigns</h3>
                                        <p class="fontSize18 boxs">Our re-engagement campaigns are designed to bring back users who have previously installed your app but are no longer active, helping you improve user engagement and retention.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">In-App Advertising</h3>
                                        <p class="fontSize18 boxs">We help you monetize your app and increase revenue through in-app advertising campaigns that are highly targeted and relevant to your users.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">App Store Optimization (ASO)</h3>
                                        <p class="fontSize18 boxs">We help you optimize your app store listing to improve visibility and drive more app downloads, including keyword research, app description optimization, and more.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Retargeting Campaigns</h3>
                                        <p class="fontSize18 boxs">Our retargeting campaigns are designed to target users who have previously interacted with your app or website, helping you improve conversion rates and maximize ROI.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Advanced targeting</h3>
                                        <p class="fontSize18 boxs">Our platform uses advanced algorithms and machine learning to identify the most relevant audience for your ads.This targeted approach can result in higher conversion rates and a better return on your ad spend.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Desliver Section End -->

    <!-- Benefits Section Start -->
    <div class="benefitsSection boxs">
        <div class="container">
            <div class="benefitsBox boxs">
                <div class="benefitsInner flexBox boxs">
                    <div class="benefitsLeft flexBox boxs">
                        <!--<span class="benefitsLeftImg"><img src="<?php // echo url('public/front/img/benefitsLeftimg.png'); ?>" class="img-fluid" alt="Benefits Banner"></span>-->
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/metaAds1.webp'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <!--<div class="benefitsRight boxs">-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Effective Layout</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">We create a layout that is sleek yet aesthetically appealing. Your customer will be able to easily contact you with facile call-to-action buttons.</p>-->
                    <!--    </div>-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Personalization</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">We will create a website that speaks your language with alluring web design.We aim to provide optimal user experience, along with adequate information.</p>-->
                    <!--    </div>-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Effective Call-to-Action</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">Your customer will be able to easily contact you with facile call-to-action buttons.</p>-->
                    <!--    </div>-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Easy Access To Information</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">We aim to provide optimal user experience, along with adequate information.We create a layout that is sleek yet aesthetically appealing.Your customer will be</p>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">We'll work closely with you to create a customized campaign that meets your specific needs and objectives.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Whether you're looking to increase app downloads, improve user engagement, or drive revenue growth, our team will work closely with you to create a campaign that meets your goals.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">We provide a range of tools and features to help you manage and optimize your campaigns, including real-time reporting and analytics, ad testing and optimization, and more.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Whether you're looking to increase brand awareness, drive traffic to your website, or boost sales, we've got you covered.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Our platform is easy to use and navigate, so you can get started right away.</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->

    <!-- Successfull Client Products Start -->
    <div class="clientProducts clientProductsNewsec boxs">
        <div class="container">
            <div class="clientProductsList boxs">
                <div class="mainSecHeading boxs">
                    <h2 class="fontSize48 boxs">Why Meta Ads?</h2>
                </div>
                <div class="productsListsBox boxs d-none">
                    <div class="row">
                        <?php if(!empty($case_studies)){ foreach($case_studies as $value){ ?>
                            <div class="col col-12 col-sm-12 col-md-6">
                                <div class="productsBox boxs">
                                    <div class="clientProductImage boxs">
                                        <span class="boxs"><a class="boxs" href="<?php echo route('front/case_study_details',['slug' => $value->slug]); ?>"><img src="<?php echo !empty($value->case_detail_card_image) ? url('uploads/admin/case_studies/' . $value->case_detail_card_image) : ''; ?>" class="img-fluid" alt="Product Image" /></a></span>
                                    </div>
                                    <div class="clientProductInfo boxs">
                                        <!-- <div class="productKeys boxs">
                                            <ul>
                                                <li class="fontSize16">#RESEARCH</li>
                                                <li class="fontSize16">#DEVELOPMENT</li>
                                                <li class="fontSize16">#OPTIMIZATION</li>
                                            </ul>
                                        </div> -->
                                        <div class="productDetail boxs">
                                            <span class="productName fontSize30 boxs"><a class="caseStudyHeading" href="<?php echo route('front/case_study_details',['slug' => $value->slug]); ?>"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></a></span>
                                            <span class="productDescription fontSize18 boxs"><?php echo !empty($value->description) ? $value->description : ''; ?></span>
                                            <span class="caseStudyLink"><a href="<?php echo route('front/case_study_details',['slug' => $value->slug]); ?>">View Case Study</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
                
                
                <div class="seoTestimonialsBox boxs">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="seoTestimonialCard seoTestimonialCard2 boxs">
                                <div class="seoWebsite boxs">
                                    <h3 class="fontSize22 boxs">Micro-target your exact audiences</h3>
                                </div>
                                <div class="seoTestimonialDetail boxs">
                                    <ul>
                                        <li class="seoTestimonialList boxs">
                                            <span class="fontSize16">Online entertainment promoting for most stages implies enabling publicists to concentrate advertisements towards their own ideal interest groups utilizing information from clients - and Facebook is the same. Facebook has a fastidious degree of detail that allows you to limit the segment for each promotion you run.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="seoTestimonialCard seoTestimonialCard2 boxs">
                                <div class="seoWebsite boxs">
                                    <h3 class="fontSize22 boxs">Facebook offers ads for your specific business goals</h3>
                                </div>
                                <div class="seoTestimonialDetail boxs">
                                    <ul>
                                        <li class="seoTestimonialList boxs">
                                            <span class="fontSize16">Marketers can also choose from a range of “advertising objectives” that suit their business goals. This is great for businesses that want to prioritize different results for their ads. For example ads can be designed to drive more: post engagement/interaction, more site traffic, lead generation, etc.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="seoTestimonialCard seoTestimonialCard2 boxs">
                                <div class="seoWebsite boxs">
                                    <h3 class="fontSize22 boxs">Access to one of the largest audiences in the world</h3>
                                </div>
                                <div class="seoTestimonialDetail boxs">
                                    <ul>
                                        <li class="seoTestimonialList boxs">
                                            <span class="fontSize16">With more than 2.7 billion active users, the Facebook ads platform gives businesses access to one of the single largest digital ad networks. But that’s not all, since its acquisition of Instagram in 2012, the social media giant has built out its ad network to give easy access to both platforms.</span>
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
    <!-- Successfull Client Products End -->

    <!-- About us Slider Start -->
    <!-- <div class="aboutUsSection boxs">
        <div class="container">
            <div class="aboutUsSlidebox boxs">
                <div class="mainSecHeading mainSecHeading2 boxs">
                    <span class="smallSubHeading fontSize18">We Help to Enhance your Business</span>
                    <h2 class="fontSize48 boxs">What People Say About Us</h2>
                </div>
                <div class="aboutSliderBox boxs">
                    <div class="slidesCounter" style="display: block">
                        <span class="slideCount"><span class="active">01</span> / <span class="totalSlides"></span></span>
                    </div>
                    <div class="aboutSlider customSlider boxs">
                        <div class="aboutSlides customSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">I built my website using Joomla. It was around 10 months that I spent on this website. The time I started facing problem, I thought to hire an expert. I must say that you guys worked wonders. You hard work and dedication made me work with you for more three projects. Your expertise, hard work and custom-script are worth-appreciating.</span>
                                    <span class="quoteBy fontSize20 boxs">Bree Argetsinger</span>
                                    <span class="quoteCountry fontSize18 boxs">United States</span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="aboutSlides customSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">I built my website using Joomla. It was around 10 months that I spent on this website. The time I started facing problem, I thought to hire an expert. I must say that you guys worked wonders. You hard work and dedication made me work with you for more three projects. Your expertise, hard work and custom-script are worth-appreciating.</span>
                                    <span class="quoteBy fontSize20 boxs">Bree Argetsinger 2</span>
                                    <span class="quoteCountry fontSize18 boxs">United States 2</span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="aboutSlides customSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">I built my website using Joomla. It was around 10 months that I spent on this website. The time I started facing problem, I thought to hire an expert. I must say that you guys worked wonders. You hard work and dedication made me work with you for more three projects. Your expertise, hard work and custom-script are worth-appreciating.</span>
                                    <span class="quoteBy fontSize20 boxs">Bree Argetsinger 3</span>
                                    <span class="quoteCountry fontSize18 boxs">United States 3</span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About us Slider End -->

    <!-- We Desliver Section Start -->
    <div class="weDeliverBox weDeliverBox2 boxs">
        <div class="container">
            <div class="weDeliverInner boxs">
                <div class="weDeliverContent boxs">
                    <div class="weDeliverTop boxs">
                        <!--<span class="smallHeading boxs">-->
                        <!--    <p class="fontSize14">SERVICES</p>-->
                        <!--</span>-->
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="fontSize48 boxs pb-0">Why use our services?</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">We offer a range of customized campaigns to help you achieve your specific marketing objectives. Whether you're looking to increase app downloads, improve user engagement, or drive revenue growth, our team of experts will work closely with you to create a campaign that meets your goals.</p>
                        </div>
                    </div>
                    <div class="weDeliverListing listcounterSec boxs">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Transparency</h3>
                                        <p class="fontSize18 boxs">Our process is designed to be collaborative and transparent, so you'll have full visibility into the campaign at all times. We'll work closely with you to ensure that the campaign meets your specific needs and objectives, and we'll make adjustments as needed to achieve the best results possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Flexibility</h3>
                                        <p class="fontSize18 boxs">We'll analyze data to identify areas for improvement and adjust targeting, messaging, and ad creatives accordingly. We'll also provide insights and recommendations to help you make data-driven decisions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Proven Results</h3>
                                        <p class="fontSize18 boxs">We'll work closely with you to create a customized campaign that meets your specific needs and objectives, ensuring that you get the best results possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">In-budget</h3>
                                        <p class="fontSize18 boxs">Our Meta Ads services for app development companies are cost-effective, helping you get the most out of your advertising budget. With our platform, you can optimize your ad spend for maximum ROI, ensuring that you achieve your marketing goals without overspending.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Innovative platform</h3>
                                        <p class="fontSize18 boxs">With our innovative platform, you can reach a wider audience, target the right users, and optimize your ad spend for maximum ROI.Moreover, Our platform is easy to use and navigate, so you can get started right away. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">Advanced Technologies</h3>
                                        <p class="fontSize18 boxs">Our advanced algorithms and machine learning capabilities allow us to identify the most relevant audience for your app, ensuring that your campaigns are highly targeted and effective.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Desliver Section End -->

    <!-- App Development Process Start -->
    <div class="appProcess boxs">
        <div class="container">
            <div class="appProcessInner boxs">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="appProcessSection boxs">
                            <div class="mainSecHeading mainSecHeading4 boxs">
                                <h2 class="fontSize48 pb-0">Our Process Includes</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Discovery</h3>
                                        <p class="fontSize16 boxs">We start by learning about your app and your marketing goals. We'll conduct research to develop a strategy that aligns with your objectives</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Campaign Planning</h3>
                                        <p class="fontSize16 boxs">Based on our research and analysis, we'll create a customized campaign plan that includes a detailed strategy, targeting, ad formats, messaging, and budget allocation</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Campaign Execution</h3>
                                        <p class="fontSize16 boxs">Once the campaign plan is approved, we'll execute the campaign across relevant ad networks and platforms</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Optimization and Reporting</h3>
                                        <p class="fontSize16 boxs">We'll continuously monitor and optimize the campaign to improve performance.  We provide regular reports on campaign performance, including key metrics </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
                            <!--<img src="<?php // echo url('public/front/img/app-process.png'); ?>" class="img-fluid" alt="Banner Image" />-->
                            <img src="<?php echo url('public/front/img/metaAds2.webp'); ?>" class="img-fluid" alt="Banner Image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App Development Process End -->

    <!-- Faq Section Start -->
    <!-- <div class="faqSection boxs">
        <div class="container">
            <div class="faqBox boxs">
                <div class="mainSecHeading boxs">
                    <span class="smallSubHeading fontSize18">WE HELP YOU OUT</span>
                    <h2 class="fontSize48 boxs">Frequently Asked <br />Question</h2>
                </div>
                <div class="faqDetail boxs">
                    <div class="faqLists boxs">
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Faq Section End -->

    <!-- Company Blogs Section Start -->
    <div class="companyBlogs boxs">
        <div class="container">
            <div class="mainSecHeading boxs">
                <h2 class="fontSize48 boxs">More Blogs</h2>
            </div>
            <div class="blogsSection boxs">
                <div class="row">
                    <?php if(!empty($blogs)){ foreach($blogs as $blog){ ?>
                        <x-more_blogs :blog="$blog" ></x-more_blogs>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Company Blogs Section End -->

    <!-- Query Section Start -->
    <div class="querySection boxs">
        <x-query_section></x-query_section>
    </div>
    <!-- Query Section End -->

    <!-- Awards and recognition section start -->
    <x-award_section></x-award_section>
    <!-- Awards and recognition section end -->
</div>
@endsection