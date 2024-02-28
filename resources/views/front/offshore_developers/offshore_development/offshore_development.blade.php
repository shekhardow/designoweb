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
                                <h1 class="fontSize52">Offshore Development</h1>
                            </div>
                            <p class="bannerSubHeading bannerSubHeading2 bannerSubHeading3 fontSize28 boxs">Achieve your business goals and objectives by hiring our skilled java developers.</p>
                            <p class="bannerSmallContent fontSize18 boxs">The JAVA programmers at Designoweb are experts with the latest tools and techniques of JAVA framework to provide you with cutting-edge solutions.</p>
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
                            <h2 class="blackFont fontSize48 pb-0">Why Hire Java Developers From Us?</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Our Java engineers are expertly experienced to make your project come to life. </p>
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
                                        <h3 class="fontSize30 boxs">Java System Integration</h3>
                                        <p class="fontSize18 boxs">We can coordinate your happening frameworks with the most recent possibilities in the JAVA domain. We can help in expanding the toughness and execution of your applications and web-based interfaces with our improved innovations in the field of JAVA.</p>
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
                                        <h3 class="fontSize30 boxs">Committed Java Developers</h3>
                                        <p class="fontSize18 boxs">You can believe in Designoweb’s JAVA engineers as we will give you the JAVA modified applications worked for your business relying absolutely upon your inclinations and they can be altered.</p>
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
                                        <h3 class="fontSize30 boxs">Endeavor Application Development</h3>
                                        <p class="fontSize18 boxs">Our JAVA engineers can make you a tweaked application in view of the necessities of your organization. Undertaking level web applications that are known for their solidarity and compelling execution are made by our team.</p>
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
                                        <h3 class="fontSize30 boxs">Java Services Expansion</h3>
                                        <p class="fontSize18 boxs">Our Java engineers help varied endeavors with supporting business in the flexible business community through painstakingly arranged web organizations.</p>
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
                                        <h3 class="fontSize30 boxs">Java Serverless Application</h3>
                                        <p class="fontSize18 boxs">We influence progressed capacities to fabricate serverless Java applications which will help in computerizing the work process of association undertakings or obligations.</p>
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
                                        <h3 class="fontSize30 boxs">Java Ecommerce Development</h3>
                                        <p class="fontSize18 boxs">Java-based eCommerce stages are very famous and you can enlist devoted Java engineers from Designoweb who will work according to your prerequisites to send off a solid, extending and secure web store for your business.</p>
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

    <!-- We Deliver Section Start -->
    <!-- <div class="weDeliverBox weDeliverBox3 boxs">
    <div class="container">
        <div class="weDeliverInner boxs">
        <div class="weDeliverAwards boxs">
            <div class="weDeliverCertified weCertified weCertified2 boxs">
            <div class="ourCertificateBox boxs">
                <div class="ourCertificate boxs">
                <div class="awardBoxsTop boxs">
                    <span class="awardSubHeading fontSize11 regularFont boxs">AWARD 2021</span>
                    <span class="awardHeading fontSize16 boldFont boxs">Trusted Android App Development Companies</span>
                </div>
                <span class="awardImage boxs"
                    ><span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/awardImage.png" class="img-fluid" alt="Award Image" /></span></span>
                </div>
            </div>
            <div class="ourCertificateBox boxs">
                <div class="ourCertificate boxs">
                <div class="awardBoxsTop boxs">
                    <span class="awardSubHeading fontSize11 regularFont boxs">AWARD 2021</span>
                    <span class="awardHeading fontSize16 boldFont boxs">Best App Developers of 2021 in India</span>
                </div>
                <span class="awardImage boxs"
                    ><span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/awardImage2.png" class="img-fluid" alt="Award Image" /></span
                ></span>
                </div>
            </div>
            <div class="ourCertificateBox boxs">
                <div class="ourCertificate boxs">
                <div class="awardBoxsTop boxs">
                    <span class="awardSubHeading fontSize11 regularFont boxs">AWARD 2021</span>
                    <span class="awardHeading fontSize16 boldFont boxs">Best BI App Development Companies in 2021</span>
                </div>
                <span class="awardImage boxs"
                    ><span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/awardImage3.png" class="img-fluid" alt="Award Image" /></span
                ></span>
                </div>
            </div>
            </div>
        </div>
        <div class="recognitionBox boxs">
            <div class="container">
            <div class="recognitionInner flexBox boxs">
                <div class="awardsSection boxs">
                <div class="awardsCard boxs">
                    <div class="awardsImage boxs">
                    <span class=""><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/recognition1.png" class="img-fluid" alt="Award Icon" /></span>
                    </div>
                    <div class="awardsInfo boxs">
                    <span class="awardsHeading fontSize20 boxs">The most promising mobile apps solution providers globally</span>
                    <span class="awardsContent fontSize16 boxs">We have been recognized as a market leader globally, post a rigorous evaluation of factors presence & client experience</span>
                    </div>
                </div>
                <div class="awardsCard boxs">
                    <div class="awardsImage boxs">
                    <span class=""><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/recognition2.png" class="img-fluid" alt="Award Icon" /></span>
                    </div>
                    <div class="awardsInfo boxs">
                    <span class="awardsHeading fontSize20 boxs">The most promising mobile apps solution providers globally</span>
                    <span class="awardsContent fontSize16 boxs">We have been recognized as a market leader globally, post a rigorous evaluation of factors presence & client experience</span>
                    </div>
                </div>
                </div>
                <div class="awardsSection awardsSectionMid boxs">
                <div class="awardsMidContent boxs">
                    <span class="awardsMidImage boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/recognitionMain.png" class="img-fluid" alt="Recognitions Icon" /></span>
                    <span class="awardsMidHeading fontSize48 boxs">Awards & Recognition</span>
                </div>
                </div>
                <div class="awardsSection boxs">
                <div class="awardsCard boxs">
                    <div class="awardsImage boxs">
                    <span class=""><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/recognition2.png" class="img-fluid" alt="Award Icon" /></span>
                    </div>
                    <div class="awardsInfo boxs">
                    <span class="awardsHeading fontSize20 boxs">The most promising mobile apps solution providers globally</span>
                    <span class="awardsContent fontSize16 boxs">We have been recognized as a market leader globally, post a rigorous evaluation of factors presence & client experience</span>
                    </div>
                </div>
                <div class="awardsCard boxs">
                    <div class="awardsImage boxs">
                    <span class=""><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/recognition1.png" class="img-fluid" alt="Award Icon" /></span>
                    </div>
                    <div class="awardsInfo boxs">
                    <span class="awardsHeading fontSize20 boxs">The most promising mobile apps solution providers globally</span>
                    <span class="awardsContent fontSize16 boxs">We have been recognized as a market leader globally, post a rigorous evaluation of factors presence & client experience</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div> -->
    <!-- We Desliver Section End -->

    <!-- We Deliver Comprehensive Start -->

    <!-- <div class="weDeliverContentBox boxs">
    <div class="container">
        <div class="weDeliverContent weDeliverContent boxs">
        <div class="weDeliverTop boxs">
            <span class="smallHeading boxs">
            <p class="fontSize14">SERVICES</p>
            </span>
            <span class="sectionHeading mainSecHeading mainSecHeading3 boxs">
            <h2 class="blackFont fontSize48 pb-0">We Deliver Comprehensive Website Design Services</h2>
            </span>
            <span class="subHeading boxs">
            <p class="regularFont fontSize18">Exemplary Website Designs for Startups, Entrepreneurs & Enterprises</p>
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
                    <h3 class="fontSize30 boxs">Corporate Website Design</h3>
                    <p class="fontSize18 boxs">Our aim is to strengthen your brand by building a reputation. The first impression for your potential customer is through your website. We offer an exquisite and informative website that caters to your services and operations. We tailor our website design services with the objective that your brand represents.</p>
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
                    <h3 class="fontSize30 boxs">eCommerce Websites</h3>
                    <p class="fontSize18 boxs">We understand the significance of an admirable website for your business. We will enhance your online reputation with aesthetically appealing web design services. We will include easy call-to-action buttons and multiple categories relating to your business for effortless use.</p>
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
                    <h3 class="fontSize30 boxs">Customized Website</h3>
                    <p class="fontSize18 boxs">Without a touch of personalization, your website is just another page on the internet. As a proficient website design company, we promise to create a website that would make your audience put trust in your ability to offer service.</p>
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
                    <h3 class="fontSize30 boxs">Landing Page Design</h3>
                    <p class="fontSize18 boxs">The first thing that your customer would see is a landing page. It should be astonishing enough to keep the viewer stay on the webpage. We’ll hook you up with a landing page that would flaunt your business’s goals and achievements.</p>
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
                    <h3 class="fontSize30 boxs">Responsive Web Design</h3>
                    <p class="fontSize18 boxs">There is no room for boring web pages anymore! It’s time to delve into responsive web design to provide your customers experience that is flexible and fluidic on different devices. We will make this possible with our exemplary web design services.</p>
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
                    <p class="fontSize18 boxs">As a renowned website design company, we offer services for enhanced wireframing. Our profound and experienced professional will illustrate the basic structure and elements for your website on different webpages. This will give you an idea of how your website is going to appear in front of the viewers.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div> -->

    <!-- We Deliver Comprehensive End -->

    <!-- Benefits Section Start -->
    <div class="benefitsSection boxs">
        <div class="container">
            <div class="benefitsBox boxs">
                <div class="benefitsInner flexBox boxs">
                    <div class="benefitsLeft flexBox boxs">
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/images/offshoredDevelopment1.webp'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont"></span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont"></span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont"></span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont"></span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont"></span>
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
                        <h2 class="blackFont fontSize48 pb-0">Why You Should Hire Offshore Developers?</h2>
                    </div>
                    <div class="subHeading boxs">
                        <p class="regularFont fontSize18">Recruiting a seaward designer who is a specialist in the field permits the organization to exploit the relevant information they offer that would be useful.</p>
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
                                    <h3 class="fontSize30 boxs">Highly-Technical Abilities At Cost Effective Rates</h3>
                                    <p class="fontSize18 boxs">When you enlist engineers, it's more intelligent to vet and pick the individuals who have central information and specialized capacities. In this way, you can find reasonably gifted developers all under your spending
                                        plan.
                                    </p>
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
                                    <h3 class="fontSize30 boxs">Adjust To Language And Frameworks</h3>
                                    <p class="fontSize18 boxs">Programming dialects are utilized for fostering a wide scope of portable and web applications. The engineers that are in our Designoweb are proficient with the expansive assortment of systems , languages and technologies.</p>
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
                                    <h3 class="fontSize30 boxs">Catch Access To Latest Techs</h3>
                                    <p class="fontSize18 boxs">Companies consider developers with taste in varieties and taken in the most recent programming languages, systems and advancement technologies to better the assistance they can propose to your business. Thus, they
                                        can suggest you with the techs which are the most appropriate for your projects.</p>
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
                                    <h3 class="fontSize30 boxs">Lessen Your Time To Market</h3>
                                    <p class="fontSize18 boxs">When you recruit engineers seaward, you can observe the ability you really want in as quick as about fourteen days contrasted with employing full-time workers locally which ordinarily require months. They empower
                                        you to have a committed group that is centered around your project's turn of events.</p>
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
                                    <h3 class="fontSize30 boxs">Accomplish Access To A Large Pool Of Experience</h3>
                                    <p class="fontSize18 boxs">When you employ engineers seaward, you get to tap a huge pool of tech talents.Then they can promptly begin working on your project without the requirement for additional preparation.</p>
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
                                    <h3 class="fontSize30 boxs">No Need For Capacity</h3>
                                    <p class="fontSize18 boxs">If you unexpectedly face a convergence of work, you will not need to turn these undertakings down because of an absence of room in the workplace or assets. Employing a seaward advancement group implies you will
                                        not need to furnish them with office space or innovations; they will as of now have this any place they are found.</p>
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
                                <!-- <h2 class="fontSize48 pb-0">How Does Our iOS App Development Process Work?</h2> -->
                                <h2 class="fontSize48 pb-0">How The Process Works</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Send Us Your Detailed Project Requirements</h3>
                                        <p class="fontSize16 boxs">Share your requirements with us and we will furnish you with the appropriate cv's as per your task. Inform us as to whether they're able or not. In the event that they are not, we will give you more cv's.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Select A Candidate</h3>
                                        <p class="fontSize16 boxs">Choosing a right contender for your forthcoming undertaking is truly significant. Select a candidate as per your prerequisites and what will be great for your project.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Interview Of The Selected Candidates</h3>
                                        <p class="fontSize16 boxs">Once you have chosen the proper contender for your undertaking, we will begin with the meeting. It relies upon the individual the number of rounds it will occur. During this interaction you can actually look
                                            at their capacities and designer abilities.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Onboarding And Introduction To Tasks</h3>
                                        <p class="fontSize16 boxs">If you have picked an applicant as indicated by your likings , then at that point, we can have further presentation and conversation about the project.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
                            <img src="<?php echo url('public/front/images/offshoredDevelopment2.webp'); ?>" class="img-fluid" alt="Banner Image" />
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