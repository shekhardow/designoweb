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
                                <h1 class="fontSize52">Mobile App Design Services</h1>
                            </div>
                            <div class="serviceFor serviceFor4 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Convenience Testing</h2>
                                        <p class="fontSize16 boxs">It ordinarily comprises of assessing an item by testing it</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Cooperation</h2>
                                        <p class="fontSize16 boxs">Permits a client to cooperate with it easily and naturally</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Client Research</h2>
                                        <p class="fontSize16 boxs">Zero in on client through perceptions, task investigation, and different criticisms.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">UX System</h2>
                                        <p class="fontSize16 boxs">guarantee that the UX vision is adjusted by zeroing in on tackling the right issues.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight boxs">
                            <div class="serviceBannerContent boxs">
                                <div class="serviceMainContent boxs">
                                    <h2 class="servBannerHeading fontSize32 boxs">Creating  mobile app designs that stands out and drives success for your business.</h2>
                                    <p class="servBannerContent fontSize18 boxs">Our agency is the best choice for your mobile app design needs. We offer expertise, user-centered design, collaboration, attention to detail, communication, results-driven design, and competitive pricing to deliver a high-quality product that meets your business goals. Our mobile app design process is a collaborative and iterative approach that prioritizes the user experience.</p>
                                </div>
                                <span class="discussIdea boxs"><a class="btnStyle" href="<?php echo route('front/contact'); ?>">Connect With Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                </span>
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
                            <h2 class="blackFont fontSize48 pb-0">Providing Different Types Of Mobile Design Services</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">At Designoweb, a variety of mobile design services are deployed to make your applications worthy.</p>
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
                                        <h3 class="fontSize30 boxs">Plan Disclosure</h3>
                                        <p class="fontSize18 boxs">Gain upper hands over contention by considering broad statistical surveying. We complete a definite industry examination to comprehend application plan procedures of your rivals and industry pioneers.</p>
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
                                        <h3 class="fontSize30 boxs">Client Venture</h3>
                                        <p class="fontSize18 boxs">Enable clients with superb encounters by making an application that tends to problem areas. We plan a drawing in client venture in the wake of investigating the conduct, inspirations, and perspectives of your designated clients.</p>
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
                                        <h3 class="fontSize30 boxs">Idea Definition</h3>
                                        <p class="fontSize18 boxs">Designoweb converts your extraordinary business thought into an idea with broad statistical surveying and inside and out comprehension of clients' conduct. We characterize the versatile application plan system as needs be.</p>
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
                                        <h3 class="fontSize30 boxs">Data Engineering</h3>
                                        <p class="fontSize18 boxs">Accelerate the application improvement lifecycle by characterizing required highlights, capacities, number of screens, formats, route stream, and other versatile application plan components under data design.</p>
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
                                        <h3 class="fontSize30 boxs">Interactive Model</h3>
                                        <p class="fontSize18 boxs">Get clearness on the future construction of impending endeavor portability arrangements from dynamic models. We make a skeleton of a versatile application by interconnecting the screen according to the stream.</p>
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
                                        <h3 class="fontSize30 boxs">UI Plan</h3>
                                        <p class="fontSize18 boxs">We make application UI plans with insightful shading blends and appealing plan components and activities that address your image theory and satisfy extreme business goals.</p>
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
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/images/mobileapp_design.webp'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Application Design</span>
                            <p class="benefitsListContent fontSize18 boxs">You work with our group to foster the custom UI/UX Mobile application plan.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Quicker Deployment</span>
                            <p class="benefitsListContent fontSize18 boxs">We care about your time, so we foster quickly and send your application on schedule.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Shrewd Developers</span>
                            <p class="benefitsListContent fontSize18 boxs">Our engineers are brilliant and they can handle and execute your thoughts.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Best Functionality</span>
                            <p class="benefitsListContent fontSize18 boxs">The application ease of use is at the center of our application plan and improvement process.</p>
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
                    <h2 class="fontSize48 boxs">Successful Client <br />Deliveries</h2>
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
                            <h2 class="fontSize48 boxs pb-0">Why To Choose Us As A Designer?</h2>
                        </div>
                        <span class="subHeading boxs">
                            <p class="regularFont fontSize18">When it comes to mobile app design, choosing the right design agency can make all the difference. At our agency, we specialize in creating mobile app designs that are not only visually stunning, but also functional, user-friendly, and optimized for success.</p>
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
                                        <h3 class="fontSize30 boxs">Expertise</h3>
                                        <p class="fontSize18 boxs">Our team of designers has years of experience in mobile app design and a deep understanding of user experience and user interface design principles. We stay up-to-date with the latest design trends and best practices to create apps that are visually engaging and intuitive to use.</p>
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
                                        <h3 class="fontSize30 boxs">User-centered Design</h3>
                                        <p class="fontSize18 boxs">We believe that user-centered design is key to creating successful mobile apps. We prioritize the user experience and ensure that your app is easy to navigate, with clear calls to action and a seamless flow from screen to screen. Our goal is to create an app that users will love and keep coming back to.</p>
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
                                        <h3 class="fontSize30 boxs">Collaboration</h3>
                                        <p class="fontSize18 boxs">We believe in working closely with our clients to understand their unique needs and goals. We keep you involved throughout the design process, from ideation to final design, and value your input and feedback. We believe that collaboration leads to better designs and a more successful app.</p>
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
                                        <h3 class="fontSize30 boxs">Attention to Detail</h3>
                                        <p class="fontSize18 boxs">We pay close attention to every detail of your mobile app design, from color palettes to typography to the placement of buttons. We ensure that your app is optimized for performance and usability, and that it looks great on every device.</p>
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
                                        <h3 class="fontSize30 boxs">Communication</h3>
                                        <p class="fontSize18 boxs">We understand the importance of clear and effective communication throughout the mobile app design process. We keep you informed and involved every step of the way, providing regular updates and responding promptly to any questions or concerns.</p>
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
                                        <h3 class="fontSize30 boxs">Competitive Pricing</h3>
                                        <p class="fontSize18 boxs">We offer competitive pricing for our mobile app design services, without sacrificing quality or expertise. We understand that cost is an important consideration for any business, and we work hard to provide value for our clients.</p>
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
                                <h2 class="fontSize48 pb-0">What is our process of mobile app design?</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Discovery</h3>
                                        <p class="fontSize16 boxs">The first step is to understand your business goals, target audience, and what you want to achieve with the app.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Design</h3>
                                        <p class="fontSize16 boxs">Our team of expert designers will create wireframes, prototypes, and high-fidelity designs to define the app's visual style and user interface.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Development</h3>
                                        <p class="fontSize16 boxs">Our team of skilled developers will bring the app to life, writing code and integrating any necessary third-party APIs.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Testing and Launch</h3>
                                        <p class="fontSize16 boxs">We conduct rigorous testing to ensure the app is functional, bug-free, and user-friendly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
                            <img src="<?php echo url('public/front/img/images/mobileapp_design2.webp'); ?>" class="img-fluid" alt="Banner Image" />
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