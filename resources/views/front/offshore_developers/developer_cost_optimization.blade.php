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
                                <h1 class="fontSize52">Developer Cost Optimization</h1>
                            </div>
                            <p class="bannerSubHeading bannerSubHeading2 bannerSubHeading3 fontSize28 boxs">Unlock cost-saving opportunities and boost your development team's productivity with our expert Developer Cost Optimization services.</p>
                            <p class="bannerSmallContent fontSize18 boxs">Managing development resources efficiently is essential for any organization looking to optimize costs without compromising quality. At Designoweb, we specialize in helping businesses streamline their development processes, enhance productivity, and achieve significant cost savings.</p>
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
                            <h2 class="blackFont fontSize48 pb-0">Why Choose Us for Developer Cost Optimization?</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Maximize Efficiency. Minimize Costs. Optimize Your Development Resources.</p>
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
                                        <h3 class="fontSize30 boxs">Resource Assessment and Allocation</h3>
                                        <p class="fontSize18 boxs">Analyze your development team's composition, skill sets, and workload to optimize resource allocation and productivity.</p>
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
                                        <h3 class="fontSize30 boxs">Process Optimization</h3>
                                        <p class="fontSize18 boxs">Identify bottlenecks, streamline workflows, and implement best practices to enhance efficiency and reduce development time.</p>
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
                                        <h3 class="fontSize30 boxs">Agile Implementation</h3>
                                        <p class="fontSize18 boxs">Adopt agile methodologies, such as Scrum or Kanban, to improve collaboration, transparency, and project delivery.</p>
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
                                        <h3 class="fontSize30 boxs">Technology Stack Assessment</h3>
                                        <p class="fontSize18 boxs">Evaluate your technology stack and suggest optimizations or alternatives that align with your business needs.</p>
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
                                        <h3 class="fontSize30 boxs">Outsourcing and Offshoring Strategies</h3>
                                        <p class="fontSize18 boxs">Identify suitable opportunities for outsourcing or offshoring to leverage cost advantages without compromising quality.</p>
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
                                        <h3 class="fontSize30 boxs">Team Training and Skill Enhancement</h3>
                                        <p class="fontSize18 boxs">Provide training and skill development programs to enhance your development team's capabilities and productivity.</p>
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
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Developer cost optimization focuses on finding the right balance between resource utilization, cost efficiency, and maintaining high-quality output.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">It involves a holistic approach, addressing both technical and process-related aspects to optimize the overall development ecosystem.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Optimizing developer costs can result in significant savings for businesses, allowing them to allocate resources to other critical areas.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Developer cost optimization encourages a culture of continuous improvement, innovation, and knowledge sharing within development teams.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">It enables businesses to adapt quickly to changing market demands, scale their development capabilities, and stay competitive.</span>
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
                        <h2 class="blackFont fontSize48 pb-0">Why Choose Our Developer Cost Optimization Services?</h2>
                    </div>
                    <div class="subHeading boxs">
                        <p class="regularFont fontSize18">At Designoweb, we specialize in helping businesses streamline their development processes, enhance productivity, and achieve significant cost savings.</p>
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
                                    <p class="fontSize18 boxs">Our team of skilled professionals has extensive experience in developer cost optimization and process improvement.</p>
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
                                    <p class="fontSize18 boxs">We understand that each organization has unique needs, and we offer customized solutions based on your specific requirements.</p>
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
                                    <h3 class="fontSize30 boxs">Cost Savings</h3>
                                    <p class="fontSize18 boxs">Our services help identify cost-saving opportunities, allowing you to optimize your development budget without compromising quality.</p>
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
                                    <h3 class="fontSize30 boxs">Enhanced Productivity</h3>
                                    <p class="fontSize18 boxs">By streamlining processes and optimizing resource allocation, we help your development team work more efficiently, leading to increased productivity.</p>
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
                                    <p class="fontSize18 boxs">We have successfully helped numerous businesses optimize their developer costs and achieve tangible results.</p>
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
                                    <h3 class="fontSize30 boxs">Collaboration and Support</h3>
                                    <p class="fontSize18 boxs">We work closely with your team, fostering collaboration and providing ongoing support throughout the optimization process.</p>
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
                                <h2 class="fontSize48 pb-0">How Does Our Process Work</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Initial Assessment</h3>
                                        <p class="fontSize16 boxs">We conduct a thorough assessment of your development team, processes, and technology stack to identify optimization areas.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Customized Strategy</h3>
                                        <p class="fontSize16 boxs">Based on the assessment findings, we create a tailored strategy that aligns with your business goals and objectives.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Implementation and Execution</h3>
                                        <p class="fontSize16 boxs">Our team collaborates with your organization to implement the recommended optimizations and monitor progress.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Ongoing Monitoring and Support</h3>
                                        <p class="fontSize16 boxs">We continuously monitor the results, provide support, and make necessary adjustments to ensure long-term success.</p>
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