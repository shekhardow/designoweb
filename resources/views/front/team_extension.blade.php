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
                                <h1 class="fontSize52">Team Extension</h1>
                            </div>
                            <p class="bannerSubHeading bannerSubHeading2 bannerSubHeading3 fontSize28 boxs">Extend Your Team's Capabilities with Designoweb's Team Extension Services.</p>
                            <p class="bannerSmallContent fontSize18 boxs">Welcome to Designoweb's Team Extension Services - Our team extension model allows you to seamlessly augment your existing team with top-notch talent, whether it's for a specific project or long-term support. Leverage our pool of skilled professionals to scale your team, drive innovation, and achieve your business goals with confidence.</p>
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
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="blackFont fontSize48 pb-0">Welcome to Designoweb's Team Extension Policies</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Seamlessly integrate skilled professionals into your existing team, leveraging their expertise and boosting productivity to achieve your project goals with confidence</p>
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
                                        <h3 class="fontSize30 boxs">Scale Your Team Effortlessly</h3>
                                        <p class="fontSize18 boxs">Our team extension model allows you to quickly and easily expand your workforce with top-tier talent, enabling you to take on new projects and meet increased demand without the hassle of traditional hiring.</p>
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
                                        <h3 class="fontSize30 boxs">Access to Diverse Skill Sets</h3>
                                        <p class="fontSize18 boxs">With our extensive network of skilled professionals, you gain access to a wide range of expertise across various domains, ensuring that you can find the right talent to complement your existing team and address specific project requirements.</p>
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
                                        <h3 class="fontSize30 boxs">Seamless Collaboration</h3>
                                        <p class="fontSize18 boxs">We seamlessly integrate our team members with your in-house team, fostering a collaborative environment where everyone works together towards a shared goal. Communication and coordination are key to our team extension approach.</p>
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
                                        <h3 class="fontSize30 boxs">Cost-Effective Solution</h3>
                                        <p class="fontSize18 boxs">Hiring and retaining full-time employees can be costly. With our team extension services, you can mitigate expenses by leveraging flexible engagement models, paying only for the resources and time you need.</p>
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
                                        <h3 class="fontSize30 boxs">Agile Scalability</h3>
                                        <p class="fontSize18 boxs">As your project requirements evolve, our team extension services offer the flexibility to scale up or down quickly. Whether you need to ramp up resources for a large-scale project or reduce the team size during quieter periods, we adapt to your changing needs.</p>
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
                                        <h3 class="fontSize30 boxs">Retain Full Control</h3>
                                        <p class="fontSize18 boxs">With Designoweb's team extension, you maintain full control and oversight of your project. Our team seamlessly integrates into your existing workflows, following your established processes and guidelines to ensure a smooth collaboration.</p>
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
    
    
    <!-- Technologies Sections -->
    <div class="technologiesMenusItems boxs">
        <div class="container">
            <div class="techMenuSectionsChild boxs">
                <div class="menuTechListBox boxs" id="offshoreDevelopmentSec">
                    <h2 class="fontSize30 boxs boldFont">Offshore Development Center</h2>
                    <p class="fontSize18 boxs">Unlock the Power of Global Talent with Designoweb's Offshore Development Center - Build a dedicated, cost-effective team that works in sync with your organization, delivering high-quality software solutions and accelerating your digital transformation journey.</p>
                </div>
                <div class="menuTechListBox boxs" id="offshoreDevelopmentSec">
                    <h2 class="fontSize30 boxs boldFont">Dedicated Teams</h2>
                    <p class="fontSize18 boxs">Drive Success with Designoweb's Dedicated Teams - Benefit from a handpicked, specialized team fully dedicated to your project, ensuring seamless collaboration, faster time-to-market, and exceptional results.</p>
                </div>
                <div class="menuTechListBox boxs" id="offshoreDevelopmentSec">
                    <h2 class="fontSize30 boxs boldFont">IT Staff Augmentation</h2>
                    <p class="fontSize18 boxs">Boost Your Team's Capacity and Expertise with Designoweb's IT Staff Augmentation - Leverage our pool of skilled professionals who seamlessly integrate into your team, providing on-demand support and maximizing productivity for your projects.</p>
                </div>
                <div class="menuTechListBox boxs" id="offshoreDevelopmentSec">
                    <h2 class="fontSize30 boxs boldFont">Virtual CTO</h2>
                    <p class="fontSize18 boxs">Unlock Strategic Technology Leadership with Designoweb's Virtual CTO - Tap into the expertise of our experienced Chief Technology Officers to drive innovation, align technology with business goals, and propel your organization forward.</p>
                </div>
                <div class="menuTechListBox boxs" id="offshoreDevelopmentSec">
                    <h2 class="fontSize30 boxs boldFont">Developer Cost Optimization</h2>
                    <p class="fontSize18 boxs">Maximize Your ROI with Developer Cost Optimization by Designoweb - Our proven strategies and tailored solutions help you optimize your development costs without compromising quality, enabling you to achieve more with your budget.</p>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Benefits Section Start -->
    <div class="benefitsSection boxs">
        <div class="container">
            <div class="benefitsBox boxs">
                <div class="benefitsInner flexBox boxs">
                    <div class="benefitsLeft flexBox boxs">
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/benefitsLeftimgNew.png'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="sectionHeading mainSecHeading mainSecHeading3 mainSecHeading7 boxs">
                            <h2 class="blackFont fontSize32 pb-0">How To Choose The Best Way To Hire A Developer?</h2>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Develop a Team</span>
                            <p class="benefitsListContent fontSize18 boxs">This technique can assist business people with making a group for their organization which won't be situated in their local region but offshore. This aids in setting aside cash and time for both the engineer and the top
                                of the organization. It helps in diminishing advancement cost also.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Hire Briefly</span>
                            <p class="benefitsListContent fontSize18 boxs">If you need to start at short term projects then you can recruit engineers which will give you anticipated results in less time frame without squandering your cash. This technique saves your time and furthermore gives you
                                agreeable administrations for a brief timeframe.</p>
                        </div>
                        <div class="benefitsLists boxs">
                            <span class="benefitsListHeading fontSize24 boxs">Devoted Developers</span>
                            <p class="benefitsListContent fontSize18 boxs">Got a long task to deal with? Reach experts with the perfect abilities and experience. You can employ designers who will exclusively devote themselves to chip away at your activities. This limits cost and time yet will
                                get you a total undertaking. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->

    <!-- We Deliver Comprehensive Start -->
    <!--<div class="weDeliverContentBox boxs d-none">-->
    <!--    <div class="container">-->
    <!--        <div class="weDeliverContent weDeliverContent boxs">-->
    <!--            <div class="weDeliverTop boxs">-->
    <!--                <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">-->
    <!--                    <h2 class="blackFont fontSize48 pb-0">Why You Should Hire Offshore Developers?</h2>-->
    <!--                </div>-->
    <!--                <div class="subHeading boxs">-->
    <!--                    <p class="regularFont fontSize18">Recruiting a seaward designer who is a specialist in the field permits the organization to exploit the relevant information they offer that would be useful.</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="weDeliverListing listcounterSec boxs">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-sm-4">-->
    <!--                        <div class="deliverListBox boxs">-->
    <!--                            <div class="listCounts boxs">-->
    <!--                                <span class="listCounter"></span>-->
    <!--                                <span class="listCounter2"></span>-->
    <!--                            </div>-->
    <!--                            <div class="deliverListContent boxs">-->
    <!--                                <h3 class="fontSize30 boxs">Highly-Technical Abilities At Cost Effective Rates</h3>-->
    <!--                                <p class="fontSize18 boxs">When you enlist engineers, it's more intelligent to vet and pick the individuals who have central information and specialized capacities. In this way, you can find reasonably gifted developers all under your spending-->
    <!--                                    plan.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-4">-->
    <!--                        <div class="deliverListBox boxs">-->
    <!--                            <div class="listCounts boxs">-->
    <!--                                <span class="listCounter"></span>-->
    <!--                                <span class="listCounter2"></span>-->
    <!--                            </div>-->
    <!--                            <div class="deliverListContent boxs">-->
    <!--                                <h3 class="fontSize30 boxs">Adjust To Language And Frameworks</h3>-->
    <!--                                <p class="fontSize18 boxs">Programming dialects are utilized for fostering a wide scope of portable and web applications. The engineers that are in our Designoweb are proficient with the expansive assortment of systems , languages and technologies.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-4">-->
    <!--                        <div class="deliverListBox boxs">-->
    <!--                            <div class="listCounts boxs">-->
    <!--                                <span class="listCounter"></span>-->
    <!--                                <span class="listCounter2"></span>-->
    <!--                            </div>-->
    <!--                            <div class="deliverListContent boxs">-->
    <!--                                <h3 class="fontSize30 boxs">Catch Access To Latest Techs</h3>-->
    <!--                                <p class="fontSize18 boxs">Companies consider developers with taste in varieties and taken in the most recent programming languages, systems and advancement technologies to better the assistance they can propose to your business. Thus, they-->
    <!--                                    can suggest you with the techs which are the most appropriate for your projects.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-4">-->
    <!--                        <div class="deliverListBox boxs">-->
    <!--                            <div class="listCounts boxs">-->
    <!--                                <span class="listCounter"></span>-->
    <!--                                <span class="listCounter2"></span>-->
    <!--                            </div>-->
    <!--                            <div class="deliverListContent boxs">-->
    <!--                                <h3 class="fontSize30 boxs">Lessen Your Time To Market</h3>-->
    <!--                                <p class="fontSize18 boxs">When you recruit engineers seaward, you can observe the ability you really want in as quick as about fourteen days contrasted with employing full-time workers locally which ordinarily require months. They empower-->
    <!--                                    you to have a committed group that is centered around your project's turn of events.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-4">-->
    <!--                        <div class="deliverListBox boxs">-->
    <!--                            <div class="listCounts boxs">-->
    <!--                                <span class="listCounter"></span>-->
    <!--                                <span class="listCounter2"></span>-->
    <!--                            </div>-->
    <!--                            <div class="deliverListContent boxs">-->
    <!--                                <h3 class="fontSize30 boxs">Accomplish Access To A Large Pool Of Experience</h3>-->
    <!--                                <p class="fontSize18 boxs">When you employ engineers seaward, you get to tap a huge pool of tech talents.Then they can promptly begin working on your project without the requirement for additional preparation.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-4">-->
    <!--                        <div class="deliverListBox boxs">-->
    <!--                            <div class="listCounts boxs">-->
    <!--                                <span class="listCounter"></span>-->
    <!--                                <span class="listCounter2"></span>-->
    <!--                            </div>-->
    <!--                            <div class="deliverListContent boxs">-->
    <!--                                <h3 class="fontSize30 boxs">No Need For Capacity</h3>-->
    <!--                                <p class="fontSize18 boxs">If you unexpectedly face a convergence of work, you will not need to turn these undertakings down because of an absence of room in the workplace or assets. Employing a seaward advancement group implies you will-->
    <!--                                    not need to furnish them with office space or innovations; they will as of now have this any place they are found.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- We Deliver Comprehensive End -->

    <!-- App Development Process Start -->
    <!--<div class="appProcess boxs d-none">-->
    <!--    <div class="container">-->
    <!--        <div class="appProcessInner boxs">-->
    <!--            <div class="row">-->
    <!--                <div class="col-sm-7">-->
    <!--                    <div class="appProcessSection boxs">-->
    <!--                        <div class="mainSecHeading boxs">-->
    <!--                            <h2 class="fontSize48 pb-0">How The Process Works</h2>-->
    <!--                        </div>-->
    <!--                        <div class="serviceFor serviceFor2 boxs">-->
    <!--                            <div class="serviceForLists boxs">-->
    <!--                                <div class="serviceForBox boxs">-->
    <!--                                    <h3 class="fontSize22 boxs">- Send Us Your Detailed Project Requirements</h3>-->
    <!--                                    <p class="fontSize16 boxs">Share your requirements with us and we will furnish you with the appropriate cv's as per your task. Inform us as to whether they're able or not. In the event that they are not, we will give you more cv's.</p>-->
    <!--                                </div>-->
    <!--                                <div class="serviceForBox boxs">-->
    <!--                                    <h3 class="fontSize22 boxs">- Select A Candidate</h3>-->
    <!--                                    <p class="fontSize16 boxs">Choosing a right contender for your forthcoming undertaking is truly significant. Select a candidate as per your prerequisites and what will be great for your project.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="serviceForLists boxs">-->
    <!--                                <div class="serviceForBox boxs">-->
    <!--                                    <h3 class="fontSize22 boxs">- Interview Of The Selected Candidates</h3>-->
    <!--                                    <p class="fontSize16 boxs">Once you have chosen the proper contender for your undertaking, we will begin with the meeting. It relies upon the individual the number of rounds it will occur. During this interaction you can actually look-->
    <!--                                        at their capacities and designer abilities.</p>-->
    <!--                                </div>-->
    <!--                                <div class="serviceForBox boxs">-->
    <!--                                    <h3 class="fontSize22 boxs">- Onboarding And Introduction To Tasks</h3>-->
    <!--                                    <p class="fontSize16 boxs">If you have picked an applicant as indicated by your likings , then at that point, we can have further presentation and conversation about the project.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-sm-5">-->
    <!--                    <div class="appProcessBanner boxs">-->
    <!--                        <img src="<?php echo url('public/front/img/app-process.png'); ?>" class="img-fluid" alt="Banner Image" />-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
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