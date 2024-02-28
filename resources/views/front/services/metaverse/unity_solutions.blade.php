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
                                <h1 class="fontSize52">Unity Solutions</h1>
                            </div>
                            <div class="serviceFor serviceFor4 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Amplify Your Digital Presence</h2>
                                        <p class="fontSize16 boxs">In today's digital landscape, standing out is crucial.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">From Concept to Reality</h2>
                                        <p class="fontSize16 boxs">Your vision is our driving force.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Pushing the Boundaries of Innovation</h2>
                                        <p class="fontSize16 boxs">At Unity Solutions, we thrive on pushing the boundaries of innovation.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Tailored Solutions for Every Industry</h2>
                                        <p class="fontSize16 boxs">We understand that each industry has unique challenges and requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight boxs">
                            <div class="serviceBannerContent boxs">
                                <div class="serviceMainContent boxs">
                                    <h2 class="servBannerHeading fontSize32 boxs">Unleash the Power of Unity: Unveiling Cutting-Edge Solutions for Your Digital Journey.</h2>
                                    <p class="servBannerContent fontSize18 boxs">Step into a world where imagination knows no bounds. At Unity Solutions, we bring to life captivating experiences and transformative solutions using the power of Unity. Get ready to embark on a journey that merges creativity, innovation, and technology in ways you've never imagined.</p>
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
                            <h2 class="blackFont fontSize48 pb-0">Unity Solutions Services Of Designoweb</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Unlock Limitless Possibilities with Designoweb's Unity Solutions: Elevate Your Digital Experience to Extraordinary Heights.</p>
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
                                        <h3 class="fontSize30 boxs">Enter the World of Unity Solutions</h3>
                                        <p class="fontSize18 boxs">Welcome to Designoweb, where innovation and creativity converge to shape immersive digital experiences. Our Unity Solutions services are designed to unleash the full potential of Unity, enabling you to captivate your audience and stand out in the digital realm. Get ready to embark on an extraordinary journey that pushes the boundaries of possibility.</p>
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
                                        <h3 class="fontSize30 boxs">Transformative Unity Solutions</h3>
                                        <p class="fontSize18 boxs">At Designoweb, we believe in the power of transformative solutions. Our team of skilled designers and developers harness the power of Unity to create captivating games, interactive simulations, virtual reality experiences, and much more. Whether you're looking to engage customers, educate learners, or revolutionize your industry, our Unity Solutions are the key to making your vision a reality.</p>
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
                                        <h3 class="fontSize30 boxs">Immersive Visual Experiences</h3>
                                        <p class="fontSize18 boxs">Immerse your audience in visually stunning worlds with our Unity Solutions. From breathtaking 3D environments to lifelike characters and animations, we craft immersive visual experiences that leave a lasting impact. Engage your users on a whole new level and make a memorable impression with our creative and captivating designs.</p>
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
                                        <h3 class="fontSize30 boxs">Seamless Cross-Platform Integration</h3>
                                        <p class="fontSize18 boxs">In a world of diverse devices and platforms, we understand the importance of seamless integration. Our Unity Solutions are built with cross-platform compatibility in mind, ensuring that your digital experiences reach users across mobile, web, virtual reality, and augmented reality platforms. Reach your audience wherever they are and provide an immersive experience that transcends boundaries.</p>
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
                                        <h3 class="fontSize30 boxs">Customized Solutions for Every Industry</h3>
                                        <p class="fontSize18 boxs">No matter your industry, our Unity Solutions are tailored to suit your specific needs. We work closely with you to understand your objectives, challenges, and target audience, allowing us to create customized solutions that align with your brand and goals. Whether you're in gaming, education, real estate, or beyond, we have the expertise to deliver exceptional results.</p>
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
                                        <h3 class="fontSize30 boxs">Collaborative Partnership for Success</h3>
                                        <p class="fontSize18 boxs">At Designoweb, we believe in the power of collaboration. When you choose us as your Unity Solutions provider, you become part of our team. We value your input and insights, fostering a collaborative partnership that ensures your vision is brought to life. Together, we'll embark on a journey of creativity, innovation, and success.</p>
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
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/images/unitySolution1.webp'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Get ready to embark on a journey that merges creativity, innovation, and technology in ways you've never imagined.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Whether it's a mobile app, a virtual reality experience, or a gamified website, we create solutions that captivate and engage your audience.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Our team of talented designers, developers, and storytellers harness the full potential of Unity to breathe life into your concepts, crafting experiences that leave a lasting impact.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">We create groundbreaking solutions that redefine the digital landscape with our expertise in areas such as virtual reality and augmented reality.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Together, we embark on a journey where your input is vital, ensuring that the end result exceeds your expectations.</span>
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
                            <h2 class="fontSize48 boxs pb-0">Why To Choose Us As Your Unity Solutions Partner?</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Embark on a transformative digital journey with Designoweb. Our Unity Solutions redefine what's possible.</p>
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
                                        <h3 class="fontSize30 boxs">Future-Proof Your Digital Strategy</h3>
                                        <p class="fontSize18 boxs">In a rapidly evolving digital landscape, future-proofing your digital strategy is crucial. Unity Solutions empower you to stay ahead of the curve, providing scalable and adaptable solutions that can evolve with your needs. From game development to virtual simulations and beyond, our solutions set you up for long-term success.</p>
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
                                        <h3 class="fontSize30 boxs">Embrace the Unity Advantage</h3>
                                        <p class="fontSize18 boxs">Join the ranks of industry leaders who have harnessed the power of Unity. Embrace the Unity Advantage and unlock endless possibilities for your digital journey. Let us be your trusted partner in crafting remarkable experiences that inspire, engage, and propel your brand to new heights.</p>
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
                                        <h3 class="fontSize30 boxs">Step into the Unity Universe</h3>
                                        <p class="fontSize18 boxs">Embark on a transformative digital journey with [Your Company Name]. Our Unity Solutions redefine what's possible, bringing your ideas to life in ways that captivate, inspire, and drive results. Step into the Unity Universe and unlock the full potential of your digital presence. Together, we'll create something truly extraordinary.</p>
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
                                        <p class="fontSize18 boxs">At Designoweb, we believe in the power of pixel-perfection. Our team pays meticulous attention to every detail, ensuring that your Unity Solutions are visually stunning and polished. From intricate character animations to realistic environments, we bring your vision to life with precision and finesse, creating immersive experiences that captivate and engage your audience.</p>
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
                                        <h3 class="fontSize30 boxs">Choose Designoweb for Unparalleled Unity Solutions</h3>
                                        <p class="fontSize18 boxs">When it comes to Unity Solutions, Designoweb stands out from the crowd. Our talented team, innovative approach, and commitment to excellence set us apart. Experience the Designoweb difference and unlock the limitless possibilities of Unity. Let us be your trusted partner in crafting immersive, engaging, and unforgettable digital experiences.</p>
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
                                        <h3 class="fontSize30 boxs">Take Your Digital Experience to New Heights</h3>
                                        <p class="fontSize18 boxs">Ready to elevate your digital experience to extraordinary heights? Choose Designoweb's Unity Solutions and embark on a journey that defies boundaries. Step into a world where creativity knows no limits, where innovation reigns supreme, and where your digital presence becomes a force to be reckoned with. Let's create something truly remarkable together.</p>
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
                                <h2 class="fontSize48 pb-0">How Does Our Process Work?</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Conceptualization - From Vision to Virtual Reality</h3>
                                        <p class="fontSize16 boxs">At Designoweb, our process begins with a deep dive into your vision.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Design and Development - Where Creativity Meets Technology</h3>
                                        <p class="fontSize16 boxs">With the concept in place, our talented designers and developers spring into action.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Testing and Refinement - Polishing for Perfection</h3>
                                        <p class="fontSize16 boxs">Quality is at the heart of everything we do. Before launching your Unity Solution, we rigorously test it across various devices.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Deployment and Support - Bringing Your Vision to the World</h3>
                                        <p class="fontSize16 boxs">The time has come to unveil your Unity Solution to the world.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
                            <img src="<?php echo url('public/front/images/unitySolution2.webp'); ?>" class="img-fluid" alt="Banner Image" />
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