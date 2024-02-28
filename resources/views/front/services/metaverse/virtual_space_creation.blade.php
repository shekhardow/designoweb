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
                                <h1 class="fontSize52">Virtual Space Creation</h1>
                            </div>
                            <div class="serviceFor serviceFor4 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Immersive Experiences, Realistic Environments</h2>
                                        <p class="fontSize16 boxs">Our team of expert designers and developers meticulously craft virtual spaces that are as real as they come. </p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Tailored to Your Needs</h2>
                                        <p class="fontSize16 boxs">Your vision is our canvas. We work closely with you to understand your unique requirements and objectives.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Interactive and Engaging</h2>
                                        <p class="fontSize16 boxs">Get ready to be part of the action. Our virtual spaces are not just static environments; they are interactive and engaging.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Seamless Integration</h2>
                                        <p class="fontSize16 boxs">Virtual spaces shouldn't exist in isolation. We ensure seamless integration of your virtual space into various platforms and technologies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight boxs">
                            <div class="serviceBannerContent boxs">
                                <div class="serviceMainContent boxs">
                                    <h2 class="servBannerHeading fontSize32 boxs">Where Imagination Transcends Reality in Virtual Space Creation.</h2>
                                    <p class="servBannerContent fontSize18 boxs">Step into a realm where imagination knows no bounds. Our virtual space creation services offer you the chance to bring your wildest dreams to life. From enchanting landscapes to futuristic cityscapes, we transform your ideas into immersive virtual worlds that captivate and inspire.</p>
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
                            <h2 class="blackFont fontSize48 pb-0">Virtual Space Creation Services Of Designoweb</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Welcome to the World of Infinite Possibilities: Virtual Space Creation Services Redefined.</p>
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
                                        <h3 class="fontSize30 boxs">Step into a New Reality</h3>
                                        <p class="fontSize18 boxs">Immerse yourself in a world beyond imagination with our cutting-edge virtual space creation services. Step into a new reality where boundaries dissolve, and your wildest dreams come to life. Our team of skilled designers and developers are here to turn your vision into a breathtaking virtual experience.</p>
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
                                        <h3 class="fontSize30 boxs">Unleash Creativity, Unveil Spectacle</h3>
                                        <p class="fontSize18 boxs">Prepare to be amazed as we unleash creativity and unveil spectacular virtual spaces. From enchanting fantasy realms to futuristic cityscapes, we craft virtual environments that transport users to extraordinary worlds. With attention to detail and advanced technology, we ensure an immersive experience that captivates and leaves a lasting impression.</p>
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
                                        <h3 class="fontSize30 boxs">Tailored to Your Needs</h3>
                                        <p class="fontSize18 boxs">Your vision is our inspiration. We collaborate closely with you to understand your unique requirements and objectives. Whether it's for gaming, education, training, or marketing purposes, our virtual space creation services are tailored to suit your specific needs. Together, we'll create an interactive and engaging virtual world that surpasses your expectations.</p>
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
                                        <h3 class="fontSize30 boxs">Interactive Adventures Await</h3>
                                        <p class="fontSize18 boxs">Get ready for interactive adventures like never before. Our virtual spaces are more than just static environments; they are dynamic, interactive playgrounds. Discover hidden treasures, solve puzzles, and engage with virtual objects that respond to your touch. Our goal is to provide an exhilarating experience that sparks curiosity and keeps users coming back for more.</p>
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
                                        <h3 class="fontSize30 boxs">Seamless Integration, Multiplatform Access</h3>
                                        <p class="fontSize18 boxs">Our virtual spaces seamlessly integrate with a variety of platforms and technologies. Whether it's virtual reality (VR) headsets, web browsers, or mobile devices, we ensure compatibility and accessibility across multiple platforms. With our expertise, your virtual space will reach and engage users wherever they are, enhancing their overall experience.</p>
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
                                        <h3 class="fontSize30 boxs">Real-World Applications</h3>
                                        <p class="fontSize18 boxs">Virtual spaces offer more than just entertainment; they have real-world applications too. From architectural visualization and product showcases to virtual training and remote collaboration, our virtual space creation services cater to a wide range of industries. Experience the practical benefits of virtual spaces and unlock new possibilities for your business.</p>
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
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/images/virtualSpace1.webp'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                    </div>
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">When you choose us for virtual space creation, you're not just a client; you're a valued partner.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">We foster a collaborative partnership where your ideas and feedback are essential to the creative process.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Our dedicated team ensures transparent communication, timely updates, and a seamless workflow, making your virtual space creation journey an enjoyable and rewarding experience.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Our virtual space creation services push the boundaries of innovation and creativity.</span>
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="https://designoweb.com/public/front/img/milestones.svg" class="img-fluid" alt="milestone"></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">From concept to execution, we strive to deliver virtual spaces that amaze, inspire, and leave a lasting impact.</span>
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
                            <h2 class="fontSize48 boxs pb-0">Why To Choose Us As Your Virtual Space Creation Partner?</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Step into a World of Imagination with Designoweb: Your Ultimate Virtual Space Creation Partner.</p>
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
                                        <h3 class="fontSize30 boxs">Elevate Your Virtual Experiences</h3>
                                        <p class="fontSize18 boxs">At Designoweb, we understand the power of virtual spaces to transport people into extraordinary realms. Our team of creative visionaries and technical wizards is dedicated to crafting virtual experiences that captivate and inspire. With our expertise, your virtual spaces will transcend boundaries and leave a lasting impression on users.</p>
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
                                        <h3 class="fontSize30 boxs">Innovative and Cutting-Edge Approach</h3>
                                        <p class="fontSize18 boxs">We pride ourselves on our innovative and cutting-edge approach to virtual space creation. Our team stays at the forefront of technological advancements, utilizing the latest tools and techniques to bring your visions to life. With us, you can expect nothing short of awe-inspiring virtual environments that push the boundaries of what's possible.</p>
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
                                        <h3 class="fontSize30 boxs">Tailored to Your Unique Vision</h3>
                                        <p class="fontSize18 boxs">Your vision is our top priority. We collaborate closely with you to understand your objectives, ensuring that every aspect of your virtual space aligns with your goals. From the overall concept to the tiniest details, we meticulously tailor the experience to reflect your brand identity and deliver a cohesive and immersive journey for your audience.</p>
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
                                        <h3 class="fontSize30 boxs">Unparalleled Creativity and Attention to Detail</h3>
                                        <p class="fontSize18 boxs">At Designoweb, we believe in the power of creativity and attention to detail. Our team of talented artists and designers brings a wealth of experience and a keen eye for aesthetics to every project. We meticulously craft virtual spaces with intricate details, stunning visuals, and seamless navigation, ensuring a truly immersive and memorable experience.</p>
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
                                        <h3 class="fontSize30 boxs">Seamless Integration and Accessibility</h3>
                                        <p class="fontSize18 boxs">We understand the importance of accessibility and seamless integration of virtual spaces across different platforms and devices. Whether it's virtual reality (VR) headsets, web browsers, or mobile applications, we ensure your virtual space is optimized for smooth performance and easy access. Your audience can enjoy your virtual experiences wherever they are, enhancing engagement and reach.</p>
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
                                        <h3 class="fontSize30 boxs">Collaborative Partnership and Transparent Communication</h3>
                                        <p class="fontSize18 boxs">When you choose Designoweb, you're not just hiring a service provider – you're gaining a trusted partner. We value collaboration and transparent communication throughout the entire project journey. Our dedicated team will keep you involved, provide regular updates, and incorporate your feedback to ensure your virtual space creation exceeds expectations.</p>
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
                                <h2 class="fontSize48 pb-0">Process of Virtual Space Creation</h2>
                            </div>
                            <div class="serviceFor serviceFor2 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Conceptualization and Storyboarding</h3>
                                        <p class="fontSize16 boxs">Once we have a clear understanding of your vision, our creative wizards transform it into a concrete concept.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Design Magic Unveiled</h3>
                                        <p class="fontSize16 boxs">Now comes the time to weave magic into the visual design of your virtual space.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Technical Wizardry</h3>
                                        <p class="fontSize16 boxs">Behind the scenes, our technical wizards bring the virtual space to life.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Iterative Development and Testing</h3>
                                        <p class="fontSize16 boxs">We believe in the power of iteration and constant improvement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
                            <img src="<?php echo url('public/front/images/virtualSpace2.webp'); ?>" class="img-fluid" alt="Banner Image" />
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