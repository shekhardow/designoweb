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
                                <h1 class="fontSize52">Prototyping Services</h1>
                            </div>
                            <div class="serviceFor serviceFor4 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Responsive</h2>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom service</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Upgradation</h2>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom service</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Security</h2>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom service</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Maintenance</h2>
                                        <p class="fontSize16 boxs">Designoweb Technologies ensures to deliver custom service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight boxs">
                            <div class="serviceBannerContent boxs">
                                <div class="serviceMainContent boxs">
                                    <h2 class="servBannerHeading fontSize32 boxs">IT model improvement way to deal with envision progressed items.</h2>
                                    <p class="servBannerContent fontSize18 boxs">Our first class item configuration administrations and constancy have empowered us to turn into a trustworthy model improvement organization in the worldwide market space.</p>
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
                        <!-- <span class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </span> -->
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="blackFont fontSize48 pb-0">Services Provided By Our Company</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Designoweb is a renowned company that provides amazing solutions for your needs.</p>
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
                                        <h3 class="fontSize30 boxs">Web Architecture Prototype</h3>
                                        <p class="fontSize18 boxs">We can make an item model in a state of harmony with your prerequisites. We comprehend the particular site includes and change that into a thorough project.</p>
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
                                        <h3 class="fontSize30 boxs">Portable App Prototype</h3>
                                        <p class="fontSize18 boxs">We have the skill to construct a viable item representation. You will get a significance of how actually possible your undertaking is and how we made your dream project.</p>
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
                                        <h3 class="fontSize30 boxs">Wireframing</h3>
                                        <p class="fontSize18 boxs">Team of Designoweb’s site wireframe designers works with devotion to guarantee that the perception of web items is liberated from blunder and reflect highlights.</p>
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
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/benefitsLeftimg.png'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Start To Finish Development</span>
                            <p class="benefitsListContent fontSize18 boxs">Right from model ideation to its turn of events, we offer total help.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Practical Prototyping</span>
                            <p class="benefitsListContent fontSize18 boxs">Our group can make a completely utilitarian model utilizing progressed plan apparatuses.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Customized</span>
                            <p class="benefitsListContent fontSize18 boxs">We keep our advanced model plans that meet a precise arrangement of necessities.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Without Bug Results</span>
                            <p class="benefitsListContent fontSize18 boxs">Designoweb renders impeccable prototyping improvement results to picture the eventual outcomes.</p>
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
                        <!-- <span class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </span> -->
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="fontSize48 boxs pb-0">Why To Choose Us For A Prototyping Company?</h2>
                        </div>
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
                                        <h3 class="fontSize30 boxs">Time-Efficient</h3>
                                        <p class="fontSize18 boxs">Designoweb is valued 100% of the time for convenient conveyances of the undertakings. The mystery for this is the smooth coordination among the colleagues that leads towards the quick and ideal production.</p>
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
                                        <h3 class="fontSize30 boxs">Demonstrated Expertise</h3>
                                        <p class="fontSize18 boxs">The team of Designoweb's model engineers has adequate involvement with planning programming models for bunches of business verticals by sharing your task thought with us and we will repeat your plan into a legitimate casing.</p>
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
                                        <h3 class="fontSize30 boxs">Cost Effectiveness</h3>
                                        <p class="fontSize18 boxs">Designoweb offers different estimating arrangements where clients can enlist improvement and the clients who have a severe spending plan can save a great deal on the computerized model improvement cost.</p>
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
                                <h2 class="fontSize48 pb-0">Types Of Protoyping Models</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Fast Throwaway Prototype</h3>
                                        <p class="fontSize16 boxs">In this technique, a created model will be disposed of and won't be a piece of the eventually acknowledged model. This strategy is helpful for investigating thoughts and getting moment input for client necessities.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Transformative Prototyping</h3>
                                        <p class="fontSize16 boxs">This model is useful for a task which utilizes another innovation that isn't surely known. It is additionally utilized for a mind boggling project where each usefulness should be checked once.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Steady Prototyping</h3>
                                        <p class="fontSize16 boxs">In steady Prototyping, the end result is crushed into various little models and grown separately. This strategy is useful to lessen the input time between the client and the application advancement group.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Outrageous Prototyping</h3>
                                        <p class="fontSize16 boxs">This strategy is generally utilized for web improvement. It comprises Basic model recreation of information process and The administrations are carried out and coordinated.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
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