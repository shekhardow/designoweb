@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="serviceBanner mainBanner mainBannerBoxs boxs">
        <div class="container">
            <div class="mainBannerBox serviceBannerBox boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="serviceBannerLeft mainBannerLeft boxs">
                            <div class="bannerHeading boxs">
                                <h1 class="fontSize52">Virtual CTO</h1>
                            </div>
                            <p class="bannerSubHeading bannerSubHeading2 bannerSubHeading3 fontSize28 boxs">
                            Unlock the potential of your technology-driven business with our expert Chief Technology Officer (CTO) services.
                            </p>
                            <p class="bannerSmallContent fontSize18 boxs">
                            As technology continues to evolve at a rapid pace, having a seasoned CTO by your side is crucial for navigating the digital landscape and achieving your business goals. At Designoweb, we offer comprehensive CTO services that empower organizations to leverage technology effectively, innovate, and stay ahead of the competition.
                            </p>
                            <span class="discussIdea discussIdeaBtn boxs"><a class="btnStyle" href="<?php echo route('front/contact'); ?>">Connect With Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="serviceBannerRight mainBannerRight boxs">
                            <x-consultation_form></x-consultation_form>
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
                            <h2 class="blackFont fontSize48 pb-0">Why To Hire Virtual CTO From Us?</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Contact us today to discuss how we can drive your digital transformation and propel your business towards success.</p>
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
                                        <h3 class="fontSize30 boxs">Technology Strategy and Roadmap</h3>
                                        <p class="fontSize18 boxs">Develop a strategic technology roadmap aligned with your business objectives and industry trends.</p>
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
                                        <h3 class="fontSize30 boxs">Team Management and Leadership</h3>
                                        <p class="fontSize18 boxs">Build and lead high-performing tech teams, foster collaboration, and drive innovation.</p>
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
                                        <h3 class="fontSize30 boxs">Technology Evaluation and Implementation</h3>
                                        <p class="fontSize18 boxs">Identify and implement the right technologies, frameworks, and tools for your projects.</p>
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
                                        <h3 class="fontSize30 boxs">Scalability and Performance Optimization</h3>
                                        <p class="fontSize18 boxs">Optimize your systems and infrastructure for scalability, efficiency, and maximum performance.</p>
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
                                        <h3 class="fontSize30 boxs">Security and Risk Management</h3>
                                        <p class="fontSize18 boxs">Implement robust security measures and ensure compliance with industry standards and regulations.</p>
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
                                        <h3 class="fontSize30 boxs">Technology Trends and Innovation</h3>
                                        <p class="fontSize18 boxs">Stay updated with emerging technologies, assess their potential, and drive innovation within your organization.</p>
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
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/benefitsLeftimgNew.png'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">The role of a CTO is not limited to technology; they also play a crucial role in aligning technology with business strategy.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">CTOs are responsible for driving innovation, exploring new opportunities, and fostering a culture of continuous learning.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">They bridge the gap between technical teams and other business functions, ensuring seamless collaboration and communication.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">CTOs often serve as the face of technology for the organization, representing the company's technological vision to stakeholders.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">CTOs play a vital role in mitigating risks, managing cybersecurity, and ensuring data privacy and compliance.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->

    <!-- We Deliver Comprehensive Start -->
    <div class="weDeliverContentBox boxs">
        <div class="container">
            <div class="weDeliverContent weDeliverContent boxs">
                <div class="weDeliverTop boxs">
                    <!-- <span class="smallHeading boxs">
                        <p class="fontSize14">SERVICES</p>
                    </span> -->
                    <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                        <h2 class="blackFont fontSize48 pb-0">Why You Should Choose Our Services?</h2>
                    </div>
                    <div class="subHeading boxs">
                        <p class="regularFont fontSize18">Discover the power of effective technology leadership with Designoweb's CTO services. </p>
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
                                    <h3 class="fontSize30 boxs">Expertise and Experience</h3>
                                    <p class="fontSize18 boxs">Our team of seasoned CTO professionals brings a wealth of experience and technical expertise to the table.</p>
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
                                    <h3 class="fontSize30 boxs">Tailored Solutions</h3>
                                    <p class="fontSize18 boxs">We understand that every business is unique, and our services are customized to address your specific challenges and goals.</p>
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
                                    <h3 class="fontSize30 boxs">Strategic Guidance</h3>
                                    <p class="fontSize18 boxs">With our CTO services, you gain valuable insights, strategic guidance, and technology-driven solutions.</p>
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
                                    <h3 class="fontSize30 boxs">Cost Efficiency</h3>
                                    <p class="fontSize18 boxs">Engaging our CTO services allows you to access top-tier expertise without the need for a full-time, in-house CTO.</p>
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
                                    <h3 class="fontSize30 boxs">Proven Track Record</h3>
                                    <p class="fontSize18 boxs">We have a successful track record of empowering businesses across industries with our CTO services.</p>
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
                                    <h3 class="fontSize30 boxs">Collaborative Partnership</h3>
                                    <p class="fontSize18 boxs">We believe in building strong, collaborative relationships with our clients, fostering open communication, and working together towards your success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Deliver Comprehensive End -->

    <!-- App Development Process Start -->
    <div class="appProcess boxs">
        <div class="container">
            <div class="appProcessInner boxs">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="appProcessSection boxs">
                            <div class="mainSecHeading boxs">
                                <h2 class="fontSize48 pb-0">How The Process Works</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Consultation</h3>
                                        <p class="fontSize16 boxs">We start by understanding your business objectives, challenges, and technological requirements.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Analysis and Planning</h3>
                                        <p class="fontSize16 boxs">Our team conducts a comprehensive analysis to develop a tailored technology strategy and roadmap.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Execution and Implementation</h3>
                                        <p class="fontSize16 boxs">We oversee the execution of the defined roadmap, ensuring smooth implementation and integration.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Monitoring and Optimization</h3>
                                        <p class="fontSize16 boxs">We continuously monitor and optimize your technology ecosystem to enhance performance and efficiency.</p>
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

    <!-- Successfull Client Products Start -->
    <div class="clientProducts bgGrey2 boxs">
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
    <div class="aboutUsSec2 ourTestimonilsBox boxs">
        <div class="container">
            <div class="aboutUsSecInner boxs">
                <div class="mainSecHeading topSectionHead boxs">
                    <div class="secHeadingLeft boxs">
                        <span class="smallSubHeading fontSize18">We Help to Enhance your Business</span>
                        <h2 class="fontSize48 boxs">What People Say About Us</h2>
                    </div>
                    <span class="secHeadingRight"><a href="<?php echo route('front/testimonials'); ?>" class="btnStyle btnStyle3 smallBtn smallBtn2">Read Testimonials<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                    </span>
                </div>
                <div class="quotesList boxs">
                    <div class="row">
                        <?php if(!empty($testimonials_without_video)){ foreach($testimonials_without_video->skip(0)->take(2) as $value){ ?>
                            <div class="quoteCont quoteContInNew col-md-6">
                                <div class="quoteContIn testimonialBoxs testimonialBoxsNew boxs">
                                    <div class="testimonialSecTop boxs">
                                        <span class="testimonialByImage"><img src="<?php echo !empty($value->client_image) ? url('uploads/admin/testimonials/'.$value->client_image) : ''; ?>" class="img-fluid" alt="Testimonial By" /></span>
                                        <span class="aboutQuoteText fontSize16 fadeBlackFont"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                    </div>
                                    <div class="testimonialSecRight boxs">
                                        <div class="testimonialSecBtm boxs">
                                            <div class="quoteAuthorCont boxs">
                                                <span class="quoteIconsBox"><img src="<?php echo url('public/front/img/quotesImgs.svg'); ?>" alt="Quote Icon" class="img-fluid"></span>
                                                <div class="quoteAuthorBtm boxs">
                                                    <span class="quoteAuthorCountry fontSize18 "><?php echo !empty($value->client_name) ? $value->client_name : ''; ?></span>
                                                    <span class="quoteAuthorName fontSize16 boldFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                        <!-- <div class="quoteCont col col-12 col-md-6">
                            <div class="quoteContIn testimonialBoxs boxs">
                                <div class="testimonialSecTop boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuoteText fontSize16 boxs">Needed to make a website for something personal and memorable for the people. I wanted to add a touch of care and love. Designoweb helped me in making my desired website. I gave them my choices on how I want my website to be and it was delivered just the way. Earlframes is an affordable and convenient site where you can get a variety of things like wooden frames with personalized pictures and printable t-shirts with a personalized text for your loved ones. Professionalism was high and my appreciation to the team. Great services and highly recommended for all.</span>
                                </div>
                                <div class="testimonialSecBtm boxs">
                                    <div class="quoteAuthorCont">
                                        <div class="quoteAuthorImg">
                                            <img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/testimonial2.png" class="img-fluid" />
                                        </div>
                                        <div class="quoteAuthorInfo">
                                            <p class="quoteAuthorName fontSize20 boxs">Earl Watson</p>
                                            <p class="quoteAuthorCountry fontSize18 boxs">Earlframes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us Slider End -->

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

    <!-- Awards and recognition section start -->
    <x-award_section></x-award_section>
    <!-- Awards and recognition section end -->

</div>
@endsection