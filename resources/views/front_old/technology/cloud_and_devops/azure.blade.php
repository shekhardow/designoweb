@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="serviceBanner mainBanner boxs">
        <div class="container">
            <div class="techBannerBox serviceBannerBox boxs">
                <div class="row">
                    <div class="col col-12 col-md-6">
                        <div class="mainBannerLeft serviceBannerLeft boxs">
                            <span class="bannerHeading boxs">
                                <h1 class="fontSize52 blackFont">Azure App Development Company</h1>
                            </span>
                            <p class="bannerSubHeading bannerSubHeading2 bannerSubHeading3 fontSize28 boxs">
                                Assemble progressed answers for your business.
                            </p>
                            <p class="bannerSmallContent fontSize18 boxs">
                                We help our clients to accomplish the achievements for their hierarchical accomplishment by making, making due, and sending applications on a huge organization utilizing progressed instruments and systems.
                            </p>
                            <span class="discussIdea discussIdeaBtn boxs"><a class="btnStyle" href="<?php echo route('front/contact'); ?>">Connect With Us <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6">
                        <div class="serviceBannerRight boxs">
                            <img src="<?php echo url('public/front/img/technologies/azure.png'); ?>" alt="iOS App Development" class="techBannerImg" />
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
                        <!-- <span class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </span> -->
                        <span class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="blackFont fontSize48">Services Provided By Our Company</h2>
                        </span>
                        <span class="subHeading boxs">
                            <p class="regularFont fontSize18">We believe in providing what is right for our clients.</p>
                        </span>
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
                                        <h3 class="fontSize30 boxs">Simple Migration</h3>
                                        <p class="fontSize18 boxs"> We invest heavily in putting away your information on cloud stages from the current application by following total safety efforts to our clients.</p>
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
                                        <h3 class="fontSize30 boxs">Information Security</h3>
                                        <p class="fontSize18 boxs">We permit you to store any sort of information in a solid open-source climate for simple import and product of information with secrecy. We don't share or pass on information with respect to your projects.</p>
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
                                        <h3 class="fontSize30 boxs">Integrative Data Solution</h3>
                                        <p class="fontSize18 boxs">Our cloud specialists work on SaaS and PaaS stages to incorporate your information. This lets you entrust us with a climate that is more dependable and advantageous to get to.</p>
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
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/benefitsLeftimgNew2.png'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                        <!-- <span class="benefitTag"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/benefitsTag.png" class="img-fluid" alt="" /></span>
                        <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/benefitsSection.png" class="img-fluid" alt="Image" /></span>
                        <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/benefitsSection2.png" class="img-fluid" alt="Image" /></span> -->
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Design</span>
                            <p class="benefitsListContent fontSize18 boxs">We are profoundly knowledgeable about taking on cloud based IT foundation to stay away from the error of keeping up with the equipment framework.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Security</span>
                            <p class="benefitsListContent fontSize18 boxs">We have specialists to help you in building capable and secure cloud establishment and we assist you with sending and running delicate framework on cloud.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Arrangement</span>
                            <p class="benefitsListContent fontSize18 boxs">The Designoweb’s specialists give clients the board, progressed Devops administration reconciliation, and versatile cloud administration to our clients.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Movement</span>
                            <p class="benefitsListContent fontSize18 boxs">During the movement cycle we take legitimate consideration of extraordinary client experience, reinforcement and catastrophe recuperation of the client's venture.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->

    <!-- Successfull Client Products Start -->
    <div class="clientProducts boxs">
        <div class="container">
            <div class="clientProductsList boxs">
                <div class="mainSecHeading boxs">
                    <h2 class="fontSize48 boxs">Successful Client <br />Product</h2>
                </div>
                <div class="productsListsBox boxs">
                    <div class="row">
                        <?php if(!empty($case_studies)){ foreach($case_studies as $value){ ?>
                            <div class="col col-12 col-sm-12 col-md-6">
                                <div class="productsBox boxs">
                                    <div class="clientProductImage boxs">
                                        <span class="boxs"><a class="boxs" href="<?php echo url('case_study_details/'.encryptionID($value->case_study_id)); ?>"><img src="<?php echo !empty($value->case_detail_card_image) ? url('uploads/admin/case_studies/' . $value->case_detail_card_image) : ''; ?>" class="img-fluid" alt="Product Image" /></a></span>
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
                                            <span class="productName fontSize30 boxs"><a class="caseStudyHeading" href="<?php echo url('case_study_details/'.encryptionID($value->case_study_id)); ?>"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></a></span>
                                            <span class="productDescription fontSize18 boxs"><?php echo !empty($value->description) ? $value->description : ''; ?></span>
                                            <span class="caseStudyLink"><a href="<?php echo url('case_study_details/'.encryptionID($value->case_study_id)); ?>">View Case Study</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
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
    <div class="weDeliverBox weDeliverBox2 boxs" style="background: white">
        <div class="container">
            <div class="weDeliverInner boxs">
                <div class="weDeliverContent boxs">
                    <div class="weDeliverTop boxs">
                        <!-- <span class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </span> -->
                        <span class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="fontSize48 boxs pb-0">Why To Choose Us As Your Web Development Company?</h2>
                        </span>
                        <!-- <span class="subHeading boxs">
                            <p class="regularFont fontSize18">Exemplary Website Designs for Startups, Entrepreneurs & Enterprises</p>
                        </span> -->
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
                                        <h3 class="fontSize30 boxs">Ensured Team</h3>
                                        <p class="fontSize18 boxs">We are a solid group of specialist co-op and have exceptionally gifted architects work around the world to meet their business according to client's requirements.</p>
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
                                        <h3 class="fontSize30 boxs">Quality Assurance</h3>
                                        <p class="fontSize18 boxs">Our great help and items cause us interest in the business as we have confidence in focusing on quality over quantity and convey according to your determinations.</p>
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
                                        <h3 class="fontSize30 boxs">Correspondence</h3>
                                        <p class="fontSize18 boxs">We generally keep you refreshed with regards to your task advancement life cycle to keep you mindful of the work process to assist you with arriving at your objective.</p>
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
                                        <h3 class="fontSize30 boxs">Our Vision</h3>
                                        <p class="fontSize18 boxs">We generally welcome new difficulties to demonstrate our abilities and extraordinary methodology in conveying best items and administrations.</p>
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
                                        <h3 class="fontSize30 boxs">Work Culture</h3>
                                        <p class="fontSize18 boxs">We are a group of savvy and gifted experts from various states and places. We all have a shared objective of conveying the top-class answer for our clients.</p>
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
                                        <h3 class="fontSize30 boxs">First Rate Service</h3>
                                        <p class="fontSize18 boxs">We mostly center around change and development for acquiring the best class administration with the goal that our clients can stay cheerful and fulfilled.</p>
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
    <div class="appProcess appProcessLight boxs">
        <div class="container">
            <div class="appProcessInner boxs">
                <div class="row">
                    <div class="col col-12 col-lg-7">
                        <div class="appProcessSection boxs">
                            <div class="mainSecHeading boxs">
                                <h2 class="fontSize48 pb-0">How Does Our iOS App Development Process Work?</h2>
                            </div>
                            <div class="serviceFor boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h4 class="fontSize22 boxs">- Responsive</h4>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom service ensures to deliver custom service</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h4 class="fontSize22 boxs">- Upgradation</h4>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom service Designoweb Technologies ensures to deliver custom service</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h4 class="fontSize22 boxs">- Security</h4>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom serviceDesignoweb Technologies ensures to deliver custom service</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h4 class="fontSize22 boxs">- Maintenance</h4>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom service Designoweb Technologies ensures to deliver custom service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-5">
                        <div class="appProcessBanner boxs h-100 d-flex align-items-center">
                            <img src="<?php echo url('public/front/img/app-process.png'); ?>" class="img-fluid" alt="Banner Image" />
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
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"
                    ><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"
                    ><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"
                    ><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs"><a class="faqQuestLink" href="javascript:void(0)"
                    ><span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span> <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span></a>
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
                    <?php if(!empty($blogs)){ foreach($blogs as $value){ ?>
                        <div class="col-sm-4">
                            <div class="blogListBox blogListBoxNew boxs">
                                <div class="blogContentTop boxs">
                                    <div class="blogImage boxs">
                                        <span class="boxs"><a class="boxs" href="<?php echo url('blog_details/' . encryptionID($value->blog_id)); ?>"><img src="<?php echo !empty($value->image_url) ? url('uploads/admin/blogs/' . $value->image_url) : ''; ?>" class="img-fluid" alt="Blog Image" /></a></span>
                                    </div>
                                    <div class="blogDetails boxs">
                                        <span class="fontSize12 blogTiming boxs"><?php echo !empty($value->created_at) ? date('M d, Y', strtotime($value->created_at)) : ''; ?></span>
                                        <div class="bloginfo boxs">
                                            <h4 class="blogHeading fontSize22 boxs"><a class="boxs" href="<?php echo url('blog_details/' . encryptionID($value->blog_id)); ?>"><?php echo !empty($value->blog_title) ? $value->blog_title : ''; ?></a></h4>
                                            <p class="blogDescription fontSize16 boxs"><?php echo !empty($value->blog_description) ? substr(strip_tags($value->blog_description), 0, 235) . '...' : ''; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blogContentBtm boxs">
                                    <!-- <span class="blogCategory fontSize14 boxs">#DESIGN</span> -->
                                    <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="<?php echo url('blog_details/' . encryptionID($value->blog_id)); ?>">READ MORE</a></span>
                                </div>
                            </div>
                        </div>
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