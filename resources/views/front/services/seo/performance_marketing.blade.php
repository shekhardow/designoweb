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
                                <h1 class="fontSize52">Performance Marketing</h1>
                            </div>
                            <div class="serviceFor serviceFor4 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Performance Media</h2>
                                        <p class="fontSize16 boxs">End- to-end digital media and Commerce</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Performance Content</h2>
                                        <p class="fontSize16 boxs">Design and Conversion optimization, SEO, Content etc</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Planning and Insights</h2>
                                        <p class="fontSize16 boxs">Revealing Computerized Signs to Open BRAND Mindfulness</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Performance Consulting</h2>
                                        <p class="fontSize16 boxs">Promoting consultancy for business results</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight boxs">
                            <div class="serviceBannerContent boxs">
                                <div class="serviceMainContent boxs">
                                    <h2 class="servBannerHeading fontSize32 boxs">Ours is a data-driven approach that focuses on quantifiable results.</h2>
                                    <p class="servBannerContent fontSize18 boxs">We offer a range of services designed to help your business achieve its goals through effective and efficient marketing strategies. Our exemplary team of experts uses the latest tools and technologies to track and analyze performance metrics, allowing us to optimize campaigns in real-time and drive maximum “return on investment”.</p>
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
                            <!--<h2 class="blackFont fontSize48 pb-0">We Deliver Comprehensive Website Design Services</h2>-->
                            <h2 class="blackFont fontSize48 pb-0">Our cutting-edge services  for our clients include</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Offering a range of services designed to help your business achieve its goals through effective and efficient marketing strategies. </p>
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
                                        <h3 class="fontSize30 boxs">Search Engine Marketing (SEM)</h3>
                                        <p class="fontSize18 boxs">We specialize in creating and managing Google Ads campaigns, ensuring that your ads are seen by the right people at the right time. Our team uses advanced targeting techniques and creative ad copy to attract qualified leads and drive conversions.</p>
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
                                        <h3 class="fontSize30 boxs">Social Media Advertising</h3>
                                        <p class="fontSize18 boxs">Our social media advertising services help you reach your target audience on popular platforms like Facebook, Instagram, LinkedIn, and Twitter. We create custom audiences, develop engaging ad creative, and monitor performance metrics to ensure that your campaigns deliver results.</p>
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
                                        <h3 class="fontSize30 boxs">Display Advertising</h3>
                                        <p class="fontSize18 boxs">We offer display advertising services that help you reach potential customers across a wide range of websites and platforms. Our team uses advanced targeting and retargeting techniques to deliver personalized ads that drive engagement and conversions.</p>
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
                                        <h3 class="fontSize30 boxs">Affiliate Marketing</h3>
                                        <p class="fontSize18 boxs">Our affiliate marketing services connect your business with relevant publishers who can promote your products or services to their audiences. We manage the entire process, from identifying potential partners to tracking conversions and managing payouts.</p>
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
                                        <h3 class="fontSize30 boxs">Conversion Rate Optimization (CRO)</h3>
                                        <p class="fontSize18 boxs">We use data-driven techniques to identify areas of your website or landing pages that are underperforming, and then optimize them accordingly.</p>
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
                                        <h3 class="fontSize30 boxs">Analytics And Technology</h3>
                                        <p class="fontSize18 boxs">Our boundless examination, information and designing ability produces noteworthy bits of knowledge that fuel primary concern business results. </p>
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
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/performanceMarketing1.webp'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">It’s measurable and trackable.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Extends your advertising reach.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Helps diversify your revenue stream.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Affiliates add innovation and creativity to your marketing.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Determines return on investment.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">More efficient use of advertising budget.</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->

    <!-- Successfull Client Products Start -->
    <div class="clientProducts clientProductsNewSection boxs">
        <div class="container">
            <div class="clientProductsList boxs">
                <div class="mainSecHeading boxs text-center">
                    <!--<h2 class="fontSize48 boxs">Successful Client <br />Product</h2>-->
                    <h2 class="fontSize48 boxs">Media tools we work on!</h2>
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
                
                <div class="mediaToolsBox boxs">
                    <span class="mediaToolLogo"><img src="<?php echo url('public/front/img/media-tool-google-ads.webp'); ?>" class="img-fluid" alt="media-tools" /></span>
                    <span class="mediaToolLogo"><img src="<?php echo url('public/front/img/media-tool-bing-ads.webp'); ?>" class="img-fluid" alt="media-tools" /></span>
                    <span class="mediaToolLogo"><img src="<?php echo url('public/front/img/media-tool-mera2.webp'); ?>" class="img-fluid" alt="media-tools" /></span>
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
                        <div class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </div>
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="fontSize48 boxs pb-0">Why should you choose us for Performance Marketing</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">We understand the importance of delivering measurable results for our clients. Here are some reasons why you should choose us as your partner in achieving your marketing goals:</p>
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
                                        <h3 class="fontSize30 boxs">Experience and Expertise</h3>
                                        <p class="fontSize18 boxs">We have years of experience in the performance marketing industry, and our team is comprised of experts in various fields such as search engine optimization (SEO), pay-per-click (PPC) advertising, social media advertising, and email marketing.</p>
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
                                        <h3 class="fontSize30 boxs">Customized Strategies</h3>
                                        <p class="fontSize18 boxs">We understand that every business is unique and requires a customized approach to marketing. That's why we develop tailored strategies for each of our clients, based on their specific goals, target audience, and budget.</p>
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
                                        <h3 class="fontSize30 boxs">Data-Driven Approach</h3>
                                        <p class="fontSize18 boxs">Our marketing strategies are based on data and analytics, ensuring that we are constantly monitoring and optimizing your campaigns for maximum performance. We use advanced tracking and analytics tools to measure the success of our campaigns.</p>
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
                                        <h3 class="fontSize30 boxs">Transparency and Communication</h3>
                                        <p class="fontSize18 boxs">We believe in transparency and open communication with our clients. We provide regular reports and updates on the progress of your campaigns, and we are always available to answer any questions or concerns you may have. </p>
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
                                        <h3 class="fontSize30 boxs">Results-Oriented</h3>
                                        <p class="fontSize18 boxs">At the end of the day, what matters most to us is delivering results for our clients. We are committed to achieving measurable success and improving your bottom line.There is no room for boring web pages anymore! It’s time to delve into responsive web design to provide your customers experience that is flexible and fluidic on different devices. We will make this possible with our exemplary web design services.</p>
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
                                        <h3 class="fontSize30 boxs">Continuous Improvement</h3>
                                        <p class="fontSize18 boxs">We believe that there is always room for improvement, and we are committed to constantly testing and refining our campaigns to achieve better results. Our team stays up-to-date on the latest marketing trends and techniques to ensure that we are always delivering cutting-edge solutions for our clients.</p>
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
                                <h2 class="fontSize48 pb-0">How does our process work?</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Strategy Development</h3>
                                        <p class="fontSize16 boxs">Our team works closely with you to understand your business objectives, target audience, and marketing goals to develop a customized strategy.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Campaign Planning</h3>
                                        <p class="fontSize16 boxs">Based on the strategy developed, we create a detailed campaign plan that outlines the specific tactics we will use to achieve your goals.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Campaign Execution</h3>
                                        <p class="fontSize16 boxs">With the campaign plan in place, we execute the various tactics and channels that we have determined will deliver the best results. </p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Campaign Monitoring</h3>
                                        <p class="fontSize16 boxs">We closely monitor the progress of each campaign, regularly reviewing performance metrics to ensure that we are on track to meet our goals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
                            <!--<img src="<?php // echo url('public/front/img/app-process.png'); ?>" class="img-fluid" alt="Banner Image" />-->
                            <img src="<?php echo url('public/front/img/performanceMarketing2.webp'); ?>" class="img-fluid" alt="Banner Image" />
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
                    <?php if (!empty($blogs)) {
                        foreach ($blogs as $value) { ?>
                            <div class="col-sm-4">
                                <div class="blogListBox blogListBoxNew boxs">
                                    <div class="blogContentTop boxs">
                                        <div class="blogImage boxs">
                                            <span class="boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>"><img src="<?php echo !empty($value->image_url) ? url('uploads/admin/blogs/' . $value->image_url) : ''; ?>" class="img-fluid" alt="Blog Image" /></a></span>
                                        </div>
                                        <div class="blogDetails boxs">
                                            <span class="fontSize12 blogTiming boxs"><?php echo !empty($value->created_at) ? date('M d, Y', strtotime($value->created_at)) : ''; ?></span>
                                            <div class="bloginfo boxs">
                                                <h3 class="blogHeading fontSize22 boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>"><?php echo !empty($value->blog_title) ? $value->blog_title : ''; ?></a></h3>
                                                <p class="blogDescription fontSize16 boxs"><?php echo !empty($value->blog_description) ? substr(strip_tags($value->blog_description), 0, 235) . '...' : ''; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blogContentBtm boxs">
                                        <!-- <span class="blogCategory fontSize14 boxs">#DESIGN</span> -->
                                        <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>">READ MORE</a></span>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
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