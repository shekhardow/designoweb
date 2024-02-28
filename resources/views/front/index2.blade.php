@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->

    <div class="homeBanner homeBannerNew homeBannerNew2 boxs">
        
        <div class="newBannerChild boxs">
            <div class="container">
                <div class="homeBannerBOx boxs">
                    <!--<div class="row">-->
                    <!--    <div class="col-sm-12 col-md-5 col-lg-6">-->
                            <div class="homeBannerLeft homeBannerLeft2 boxs">
                                <span class="fontSize24 topSubHeading topSubHeading2 boxs">#designoweb</span>
                                <div class="bannerHeading boxs">
                                    <!--<h2 class="fontSize48 boxs"> We Build <span class="highlightHeading"><span class="highlightHeading2">Web &amp; Mobile Apps</span> </span>That Users Love</h2>-->
                                    <!--<h1 class="fontSize48 boxs">We Build <span class="highlightHeading"><span class="highlightHeading2">Web & Mobile Apps</span> </span>That Users Love</h1>-->
                                    <h1 class="fontSize42 boxs">Inspiring Innovation <span class="highlightHeading"><span class="highlightHeading2">through Seamless </span> </span>IT Solutions</h1>
                                </div>
                                <!--<h2 class="bannerSubHeading bannerSubHeadingNew fontSize20 boxs">The team of Designoweb provides the best services out there for web and mobile applications to deliver you the best projects.</h2>-->
                                <h2 class="bannerSubHeading bannerSubHeadingNew fontSize20 boxs">A Full Stack Development Team delivering innovative Solutions for Mobile, Web & Wearables using technologies like AR, VR, Metaverse, Blockchain, IOT and Generative AI.</h2>
                                <span class="homeBannerLink boxs">
                                    <!--<a class="btnStyle smallBtn smallBtn3 btnStyle3 redBtn" href="<?php echo route('front/contact'); ?>">Let’s Build Your Idea <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>-->
                                    <a class="btnStyle smallBtn smallBtn3 btnStyle3 redBtn" href="javascript:void(0)" data-bs-target="#contactFormModal" data-bs-toggle="modal">Let’s Build Your Idea <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                </span>
                            </div>
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <div class="videoOverlay boxs" id="contentSection">
            <video id="dowVideo"  playsinline="" autoplay="" loop="" muted="">
				<!--<source src="https://res.cloudinary.com/ddmcr5vc1/video/upload/v1680515526/Designoweb/dowVideo_ev4kjt.mp4">-->
				<source src="<?php echo url('public/front/images/dowVideo2.mp4'); ?>">
            </video>
        </div>
        
    </div>
    <!-- Services Banner End -->
    
    <!--About Us New Section-->
    <div class="aboutUsNewBox boxs d-none negativeMargin">
        <div class="container">
            <div class="aboutUsNewSection sectionPadding boxs">
                <div class="aboutUsNewLeft bpxs">
                    <div class="mottoContent boxs">
                        <span class="mottoTags fontSize18 boxs">Ideate. Innovate. Create</span>
                        <h4 class="mottoHeading fontSize48 boxs">Your Dream, <br>Our Mission</h4>
                        <p class="fontSize18 boxs">At Designoweb, everything is completely taken in regards. Your project is not just yours, it’s our mission to accomplish your dreams.</p>
                        <p class="fontSize18 boxs">With expertise in cutting-edge technologies like Blockchain, IoT, AR/VR, AI, Big Data, and Machine Learning, we offer comprehensive web and mobile app development services, empowering businesses of all sizes to enhance their online success. We also aid Startups, SMEs, and large-scale Enterprises to upgrade their every business process from ideation to final execution.</p>
                        <span>
                            <a class="btnStyle smallBtn smallBtn3 btnStyle3 redBtn" href="<?php echo route('front/our_process'); ?>">See Our Process <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- One Team Innovation Section Start -->
    <div class="oneTeamSection boxs oneTeamSectionNew statsSectionNew oneTeamSectionNewSection negativeMargin">
        <div class="teamSectionContent boxs sectionPadding pb-0">
            <div class="container">
                <div class="teamSectionContentChild boxs">
                    <div class="statsSecNewBtm statsSecNewBtmNewSection boxs">
                        <h3 class="fontSize48 boxs dowFontBold">About Designoweb</h3>
                        <p class="fontSize20 boxs dowFontRegular"><strong>Designoweb Technologies</strong> was founded in 2016 with a vision and dream to become one of the Top Rated companies that helps in the upliftment of business through innovative technology solutions. We value people and invest most of our time consulting business owners about what resolution technology can bring to their businesses. We provide services for the world’s leading brands including startups and enterprise-scale businesses. Our aim is to deliver innovative mobile and web solutions that transform businesses for the better. What makes us stand out in the market is the hunger to innovate and experiment. We have hand-picked a team of experts that are ready to challenge themselves to build something that drives value.</p>
                        <span class="ourProcess boxs aboutUsNewBottom">
                            <a class="btnStyle smallBtn smallBtn3" href="<?php echo route('front/our_process'); ?>">See our Process<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                            <a class="btnStyle smallBtn smallBtn3 blueBtnNew" href="<?php echo route('front/about'); ?>">More About Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                        </span>
                    </div>
                </div>
                <div class="oneTeamSectionNewSectionChild boxs sectionPadding2">
                    <div class="oneTeamBox boxs">
                        <div class="statsSectionNew boxs">
                            <div class="statsSecNewTop statsSecNewTopSection boxs">
                                <div class="statsCountNew boxs">
                                    <h3 class="fontSize48 boxs"><span class="counter">100</span>+</h3>
                                    <p class="fontSize18 boxs">Developers</p>
                                </div>
                                <div class="statsCountNew boxs">
                                    <h3 class="fontSize48 boxs"><span class="counter">250</span>+</h3>
                                    <p class="fontSize18 boxs">Projects Delivered</p>
                                </div>
                                <div class="statsCountNew boxs">
                                    <h3 class="fontSize48 boxs"><span class="counter">120</span>+</h3>
                                    <p class="fontSize18 boxs">Global Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="joinTeamSec joinTeamSec2 boxs">
            <div class="joinOurTeamBanner boxs mt-0">
                <span><img src="<?php echo url('public/front/images/teamImage2-old.webp'); ?>" class="img-fluid" alt="Team Image" loading="lazy"></span>
            </div>
        </div>
        
    </div>
    
    <!--Stats Old Design-->
    <div class="oneTeamSection boxs oneTeamSectionNewe negativeMargin sectionPadding d-none">
        <div class="container">
            <div class="oneTeamBox boxs">
                <div class="statsSectionNew boxs">
                    <div class="statsSecNewTop boxs">
                        <div class="statsCountNew boxs">
                            <h3 class="fontSize48 boxs"><span class="counter">200</span>+</h3>
                            <p class="fontSize18 boxs">Imaginative geeks under one rooftop</p>
                        </div>
                        <div class="statsCountNew boxs">
                            <h3 class="fontSize48 boxs"><span class="counter">270</span>+</h3>
                            <p class="fontSize18 boxs">Projects conveyed </p>
                        </div>
                        <div class="statsCountNew boxs">
                            <h3 class="fontSize48 boxs">$<span class="counter">70</span>M</h3>
                            <p class="fontSize18 boxs">Financing raised for new businesses</p>
                        </div>
                    </div>
                    <div class="statsSecNewBtm boxs">
                        <h3 class="fontSize48 boxs">Your Dream, Our Mission</h3>
                        <p class="fontSize20 boxs">At Designoweb , everything is completely taken in regards. We work on details and execute the perfection. Yet more than that , the team of Designoweb works in coordination to provide you with the best results. Your project is not just yours, it’s our mission as well to accomplish your dreams. </p>
                        <span class="ourProcess boxs">
                            <a class="btnStyle smallBtn smallBtn3" href="<?php echo route('front/our_process'); ?>">See our Process<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- One Team Innovation Section End -->

    <!-- Our Solutions Section Start -->
    <div class="ourSolutions boxs">
        <div class="container">
            <div class="ourSolutionInner boxs">
                <div class="mainSecHeading boxs">
                     <span class="smallSubHeading fontSize18">Our Services</span> 
                    <h2 class="fontSize48 boxs">Reshaping Dynamics of Modern-Age Businesses With Our Solutions</h2>
                </div>
                <div class="ourSolutionsTypes ourSolutionsTypesNew boxs">
                    <div class="ourSoluitonsTop ourSoluitonsTopNew flexBox boxs">

                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="growthHacking boxs d-flex">
                                    <div class="growthHackImg grwothHackInners boxs">
                                        <!--<img src="<?php // echo url('public/front/images/growth-banner-new.png'); ?>" class="img-fluid" alt="Section Image" loading="lazy" />-->
                                        <img src="<?php echo url('public/front/images/metaverseBanner.png'); ?>" class="img-fluid" alt="Section Image" loading="lazy" />
                                    </div>
                                    <div class="growthHackingInner grwothHackInner metaverseInfoRight boxs">
                                        <div class="grwothInnerBox boxs">
                                            <!--<h4 class="fontSize36 boxs"><span>Growth Hacking</span></h4>-->
                                            <!--<p class="fontSize18 boxs">New businesses that need fast development inside brief time frame on limited spending plans, and furthermore to arrive at greater corporate organizations.</p>-->
                                            <h4 class="fontSize36 boxs"><span>Metaverse & Digital Twinning</span></h4>
                                            <p class="fontSize18 boxs">Designoweb, provides metaverse services including VR/AR/MR solutions, immersive gaming experiences, virtual learning environments, interactive retail platforms, and real estate visualization tools.</p>
                                            <ul class="stepsList stepsList2 boxs">
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/threedProductDesign'); ?>">3D Product Design</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/virtualSpaceCreation'); ?>">Virtual Space Creation</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/unitySolutions'); ?>">Unity Solutions</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/animations'); ?>">Animations</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_ar_vr_apps'); ?>">AR VR Apps</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="connectGrowth boxs"><a class="btnStyle smallBtn smallBtn3 btnStyle3 redBtn" href="<?php echo route('front/contact'); ?>">Consult Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="ourAppSolutions boxs">
                                    <div class="ourSolutionBox ourSolutionBox2 appDevelopment boxs">
                                        <div class="solutionBoxBanner boxs">
                                            <a href="<?php echo route('front/services_mobile_app_development'); ?>" class="boxs">
                                                <h3 class="fontSize28 boxs"><span>Mobile Solutions</span></h3>
                                                <p class="fontSize18 boxs">Create programming applications that suddenly spike in demand for a cell phone, and a regular portable application uses an organization associated with work with remote figuring assets.</p>
                                            </a>
                                        </div>
                                        <div class="solutionBoxContnet boxs">
                                            <ul class="stepsList stepsList2 boxs">
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_native_apps'); ?>">Native Apps</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_hybrid_apps'); ?>">Hybrid Apps</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_tv_apps'); ?>">TV Apps</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_wearable_apps'); ?>">Wearable Apps</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_iot_apps'); ?>">IOT Apps</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_ar_vr_apps'); ?>">AR VR Apps</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="ourWebSolutions boxs">
                                    <div class="ourSolutionBox webDevelopment boxs">
                                        <div class="solutionBoxBanner boxs">
                                            <a href="<?php echo route('front/services_web_app_development'); ?>" class="boxs">
                                                <h4 class="fontSize28 boxs"><span>Web Solutions</span></h4>
                                                <p class="fontSize18 boxs">Build programs that dwell on far off servers and are conveyed to the client's gadget over the Internet.</p>
                                            </a>
                                        </div>
                                        <div class="solutionBoxContnet boxs">
                                            <ul class="stepsList boxs">
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_saas_website'); ?>">SAAS Website</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_cms_website'); ?>">CMS Website</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_ecommerce_website'); ?>">Ecommerce Website</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_custom_website'); ?>">Custom Website</a></span>
                                                </li>
                                                <li class="stepsListItem">
                                                    <span class="fontSize18"><a href="<?php echo route('front/services_custom_crm'); ?>">Custom CRM</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="ourSolutionsBottom boxs">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="ourSolutionBox webDesign boxs">
                                    <div class="solutionBoxBanner boxs">
                                        <a href="<?php echo route('front/services_ui_ux_design'); ?>" class="boxs">
                                            <h4 class="fontSize28 boxs"><span>Design Solutions</span></h4>
                                            <p class="fontSize18 boxs">Make proof based, cooperation plans between human clients and items or sites.</p>
                                        </a>
                                    </div>
                                    <div class="solutionBoxContnet boxs">
                                        <ul class="stepsList boxs">
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_product_design'); ?>">SAAS Product Design</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_web_design'); ?>">Web Design</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_mobile_app_design'); ?>">Mobile App Design</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_brand_design'); ?>">Brand Design</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="ourSolutionBox qualifyAssurance boxs">
                                    <div class="solutionBoxBanner boxs">
                                        <a href="<?php echo route('front/services_quality_assurance'); ?>" class="boxs">
                                            <h4 class="fontSize28 boxs"><span>Quality Assurance</span></h4>
                                            <p class="fontSize18 boxs">Lead Your Company, Marketing, Networking, Personal Development, Start-Up, Take Action.</p>
                                        </a>
                                    </div>
                                    <div class="solutionBoxContnet boxs">
                                        <ul class="stepsList boxs">
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_manual_testing'); ?>">Mannual Testing</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_automation_testing'); ?>">Automation Testing</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_user_experience_testing'); ?>">User Experience Testing</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="ourSolutionBox startupBooster boxs">
                                    <div class="solutionBoxBanner solutionBoxStartup boxs">
                                        <div class="solutionBoxBannerNew boxs">
                                            <h4 class="fontSize28 boxs">Startup Booster</h4>
                                            <p class="fontSize18 boxs">Accelerate its turn of events and furnish them with the most reasonable apparatuses.</p>
                                        </div>
                                    </div>
                                    <div class="solutionBoxContnet boxs">
                                        <ul class="stepsList boxs">
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_idea_consulting'); ?>">Idea Consulting</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_prototyping'); ?>">Prototyping</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_mvp_development'); ?>">MVP Development</a></span>
                                            </li>
                                            <li class="stepsListItem">
                                                <span class="fontSize18"><a href="<?php echo route('front/services_product_development'); ?>">Product Development</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Solutions Section End -->
    
    <!--Investment Facilitator Bundle Start-->
    <div class="bundleSectionBox boxs">
        <div class="container">
            <div class="bundleSectionChild sectionPadding boxs">
                <div class="mainSecHeading boxs">
                     <span class="smallSubHeading fontSize18">Investment Facilitator Bundle</span> 
                    <h2 class="fontSize48 boxs">We provide 5 documents of successful product delivery at $4999/- </h2>
                </div>
                <div class="bundleSectionInner boxs">
                    <div class="bundleSectionInnerHead fontSize20 boxs">As part of our work on the UnCruise project, we ensure comprehensive preparation by providing the following five elements prior to project initiation:</div>
                    <div class="bundleSectionListing boxs">
                        <div class="bundleSectionList boxs">
                            <div class="bundleListContent boxs">
                                <div class="bundleContent boxs">
                                    <span class="bundleItemHeading fontSize24 dowFontSemiBold boxs">DFD (Data Flow Diagram):</span>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">We are a leading app development company known for our expertise in creating customized mobile applications that precisely cater to the requirements of our clients. </p>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">In line with the UnCruise project, we recognize the importance of designing highly efficient systems. That is why we provide specialized Data Flow  services to optimize the flow of information within your application. We offer you a clear and organized representation of how data moves throughout the UnCruise application. By meticulously mapping out the inputs, processes, and outputs, we can identify overall functionality of the app. </p>
                                </div>
                                <span class="bundleDownload boxs"><a class="bundleDownloadLink hoverBtn2" href="javascript:void(0)">See Example<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <div class="bindleListImage">
                                <img src="<?php echo url('public/front/images/bundle/bundleDfd.webp'); ?>" class="img-fluid" alt="Feature Image">
                            </div>
                        </div>
                        <div class="bundleSectionList boxs">
                            <div class="bundleListContent boxs">
                                <div class="bundleContent boxs">
                                    <span class="bundleItemHeading fontSize24 dowFontSemiBold boxs">Feature Listing:</span>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">Our dedicated team of experienced developers is committed to crafting feature-rich applications that deliver exceptional user experiences. Keeping the UnCruise project in mind, we offer a comprehensive feature listing service to ensure that your app is equipped with all the necessary functionalities to meet and surpass your users' expectations.</p>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">By working closely with the client, we gain a deep understanding of their target audience, business objectives, and unique  points. Our team then creates a detailed feature listing that encompasses all the key features your app will offer. Our team crafts a detailed feature list for your app, covering seamless navigation, social media integration, secure payments, and personalized user profiles.</p>
                                </div>
                                <span class="bundleDownload boxs"><a class="bundleDownloadLink hoverBtn2" href="javascript:void(0)">See Example<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <div class="bindleListImage">
                                <img src="<?php echo url('public/front/images/bundle/bundleFeature.webp'); ?>" class="img-fluid" alt="Feature Image">
                            </div>
                        </div>
                        <div class="bundleSectionList boxs">
                            <div class="bundleListContent boxs">
                                <div class="bundleContent boxs">
                                    <span class="bundleItemHeading fontSize24 dowFontSemiBold boxs">User Story:</span>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">Our user story services crafted an app for UnCruise that resonates deeply. with the target audience.</p>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">By immersing ourselves in the users' perspective, our team  gained a profound understanding of their interactions with the application. This approach allowed us to identify pain points, anticipate their needs, and craft intuitive and engaging experiences. Working closely with the UnCruise client, our skilled team developed comprehensive user stories that encompassed various user scenarios. The collaborative process ensured seamless alignment with user expectations and preferences for the UnCruise app.</p>
                                </div>
                                <span class="bundleDownload boxs"><a class="bundleDownloadLink hoverBtn2" href="javascript:void(0)">See Example<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <div class="bindleListImage">
                                <img src="<?php echo url('public/front/images/bundle/bundleStory.webp'); ?>" class="img-fluid" alt="Feature Image">
                            </div>
                        </div>
                        <div class="bundleSectionList boxs">
                            <div class="bundleListContent boxs">
                                <div class="bundleContent boxs">
                                    <span class="bundleItemHeading fontSize24 dowFontSemiBold boxs">FRD (Functional Requirement Document):</span>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">For the UnCruise project, we emphasize the importance of defining and documenting functional requirements to facilitate a smooth development process.</p>
                                    <p class="bundleContentList fontSize18 fadeFontColor boxs">Our team works closely with you to understand your business goals, target audience, and technical needs. Together, we create a detailed document called the Functional Requirements Document (FRD).  This document serves as a roadmap for our development team, outlining the specific features, design guidelines, and system behavior required for your project. By following the FRD, we ensure that your app is developed exactly according to your specified requirements.</p>
                                </div>
                                <span class="bundleDownload boxs"><a class="bundleDownloadLink hoverBtn2" href="javascript:void(0)">See Example<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <div class="bindleListImage">
                                <img src="<?php echo url('public/front/images/bundle/bundleStory.webp'); ?>" class="img-fluid" alt="Feature Image">
                            </div>
                        </div>
                    </div>
                    <div class="bundleSectionListing bundleSectionListingLastitem boxs">
                        <div class="lastListItemHeading bundleContent boxs">
                            <span class="bundleItemHeading fontSize24 dowFontSemiBold boxs">Wireframes with Prototype:</span>
                        </div>
                        <div class="lastListItemImages boxs">
                            <span class="lastListItemImage ItemWireframeImage boxs"><img src="<?php echo url('public/front/images/bundle/bundleWireframes.webp'); ?>" class="img-fluid" alt="Wireframe Image"></span>
                            <span class="lastListItemImage ItemPrototypeImage boxs"><img src="<?php echo url('public/front/images/bundle/bundlePrototype.webp'); ?>" class="img-fluid" alt="Wireframe Image"></span>
                        </div>
                        <div class="bundleListContent bundleContent boxs">
                            <p class="bundleContentList fontSize18 fadeFontColor boxs">We believe that visualizing your app's design and functionality is crucial before diving into development. That's why we offer wireframes with prototype services to provide you with a clear and interactive representation of your app's user interface and user experience.</p>
                            <p class="bundleContentList fontSize18 fadeFontColor boxs">For the UnCruise project, we created wireframes that outline the app's layout, navigation, and structure. Once these wireframes are confirmed, we transform them into interactive prototypes. This enables our clients to personally experience and test the app's functionality before the actual development process commences. By adopting this iterative approach, we ensure that our clients have a clear understanding of the final product. It also allows for early feedback and revisions, resulting in an app that exceeds expectations and fulfils the desired vision.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="sampleDownloadStrip boxs">
            <div class="container">
                <div class="sampleDownloadStripChild boxs">
                    <span class="sampleDownloadText fontSize32 boxs colorWhite">View Sample Records</span>
                    <span class="sampleDownloadBtn"><a class="btnStyle btnStyle3 btnStyleWhite btnHover sampleDownloadLink">Download PDF<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                </div>
            </div>
        </div>
    </div>
    
    <!--Investment Facilitator Bundle End-->
    
    
    <!--3D Modals Start-->
    <div class="threeddModalsSection boxs sectionPadding pb-0">
        <div class="container">
            <div class="threeddModalsChild boxs">
                <div class="mainSecHeading boxs">
                    <span class="smallSubHeading fontSize18">3D modeling</span>
                    <h2 class="fontSize48 boxs">3D modeling for product demonstration</h2>
                </div>
                <div class="threedModalsInner boxs">
                    <div class="threedModalsChildList boxs">
                        <div class="threedModalWrapper boxs">
                             
                            <!--<div class="threedModalWrapperSec boxs">-->
                            <!--    <div class="sketchfab-embed-wrapper threedModalWrapperChild"> -->
                            <!--        <iframe height="100%" width="100%"  title="Bioreactor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/a8b344bac3cc484d874f15a7fc423692/embed"></iframe> -->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="threedModalWrapperSec boxs">
                                <div class="sketchfab-embed-wrapper threedModalWrapperChild"> 
                                    <iframe height="100%" width="100%"  title="Bioreactor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/50773e6011fa4df398bf52ab114fa169/embed"></iframe> 
                                </div>
                            </div>
                            <div class="threedModalWrapperSec boxs">
                                <div class="sketchfab-embed-wrapper threedModalWrapperChild"> 
                                    <iframe height="100%" width="100%"  title="Bioreactor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/653399916c7f435cab2534e8259f3d65/embed"></iframe> 
                                </div>
                            </div>
                            <div class="threedModalWrapperSec boxs">
                                <div class="sketchfab-embed-wrapper threedModalWrapperChild"> 
                                    <iframe height="100%" width="100%"  title="Bioreactor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/420b69867c3b45f4ac4ee6d57d34615e/embed"></iframe> 
                                </div>
                            </div>
                            <div class="threedModalWrapperSec boxs">
                                <div class="sketchfab-embed-wrapper threedModalWrapperChild"> 
                                    <iframe height="100%" width="100%"  title="Bioreactor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/82c0ebaf8bb54d79acf62814ab594831/embed"></iframe> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--3D Modals Start-->
    
    
    
    
    <!--<Our Services Section Start-->
    <div class="ourProductsSectionNew boxs sectionPadding ourSolutionInner">
        <div class="container">
            <div class="mainSecHeading boxs">
                <span class="smallSubHeading fontSize18">Our Solutions</span>
                <h2 class="fontSize48 boxs">Our Products Deliver Innovative Solutions To Meet Our Client Needs</h2>
            </div>
            <div class="ourProductsChild boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="<?php echo url('public/front/images/products/productImage1.webp'); ?>" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize22 productHeadText boxs">DeliverX: On-Demand Delivery Solution</span>
                                    <span class="fontSize16 productDescriptionText boxs mb-0">Experience the future of efficient and reliable on-demand delivery with DeliverX. Our comprehensive solution empowers businesses to seamlessly manage deliveries, optimize routes, and provide exceptional customer experiences. Simplify logistics and exceed customer expectations with DeliverX.</span>
                                </div>
                                <span class="ourProductRedirect boxs d-none"><a class="exploreMoreProductsLInk hoverBtn2" href="javascript:void(0)">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="<?php echo url('public/front/images/products/productImage2.webp'); ?>" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize22 productHeadText boxs">ChatX: On-In-App Full Stack Chat</span>
                                    <span class="fontSize16 productDescriptionText boxs mb-0">Elevate your app's user engagement with ChatX, the robust full stack chat SDK. Enable seamless in-app messaging, real-time communication, and personalized customer support. Empower your app with ChatX and unlock enhanced user experiences that foster meaningful connections.</span>
                                </div>
                                <span class="ourProductRedirect boxs d-none"><a class="exploreMoreProductsLInk hoverBtn2" href="javascript:void(0)">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="<?php echo url('public/front/images/products/productImage3.webp'); ?>" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize22 productHeadText boxs">Pronto AR: Augmented Reality Builder</span>
                                    <span class="fontSize16 productDescriptionText boxs mb-0">Unleash the power of augmented reality with Pronto AR, our cutting-edge AR builder. Transform products and experiences with immersive AR technology, creating captivating and interactive user engagements. Harness the potential of Markerbased and Markerless startegies to redefine how users interact with the world around them.</span>
                                </div>
                                <span class="ourProductRedirect boxs d-none"><a class="exploreMoreProductsLInk hoverBtn2" href="javascript:void(0)">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="ourProductsBox scalieProductBox boxs">
                            <div class="ourProductContentBox boxs">
                                <div class="ourProductContentTop boxs">
                                    <div class="ourProductContentTopChild boxs">
                                        <span class="ourProductContentLogo boxs"><img src="<?php echo url('public/front/images/products/productImageLogo.webp'); ?>" /></span>
                                        <span class="fontSize30 productHeadText boxs">On-Demand Talent Hiring</span>
                                    </div>
                                    <span class="fontSize22 productDescriptionText boxs">Build & Scale your Remote Engineering Team</span>
                                    <p class="productSubheadText fontSize16 colorWhite boxs">We stand out in building amazing teams on immediate and urgent need with a whole lot of benefits compared to In house and freelance sources.</p>
                                </div>
                                <span class="ourProductRedirect ourProductRedirect2 boxs">
                                    <!--<a class="exploreMoreProductsLInk hoverBtn2 btnStyle smallBtn btnStyle3 orangeBtnNew" href="https://scalie.io">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>-->
                                    <a class="exploreMoreProductsLInk btnStyle smallBtn btnStyle3 orangeBtnNew" href="https://scalie.io">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                </span>
                            </div>
                            <div class="ourProductsBoxImage scalieProductsBoxImage boxs">
                                <img src="<?php echo url('public/front/images/products/productScalieImage.webp'); ?>" class="img-fluid" alt="Product Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="<?php echo url('public/front/images/products/productImage4.webp'); ?>" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize22 productHeadText boxs">i-Create: Interactive Product Catalog</span>
                                    <span class="fontSize16 productDescriptionText boxs mb-0">Step into the world of interactive product discovery with i-Create, the ultimate interactive product catalog. Empower your customers to explore, customize, and visualize products in an engaging way, driving conversion and delivering a personalized shopping experience. Revolutionize your product showcase with i-Create.</span>
                                </div>
                                <span class="ourProductRedirect boxs d-none"><a class="exploreMoreProductsLInk hoverBtn2" href="javascript:void(0)">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--<Our Services Section End-->

    <!-- Our Motto Section Start -->
    <div class="ourMottoSection boxs d-none">
        <div class="container">
            <div class="ourMottoInner boxs">
                <div class="ourMottoBox boxs">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mottoLeft boxs">
                                <div class="mottoBanner boxs">
                                    <span><img src="<?php echo url('public/front/images/ourMotto2.webp'); ?>" class="img-fluid" alt="Banner Image" loading="lazy" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mottoRight boxs">
                                <div class="mottoContent boxs">
                                    <span class="mottoTags fontSize18 boxs">Ideate. Innovate. Create</span>
                                    <h4 class="mottoHeading fontSize48 boxs">Our Motto</h4>
                                    <p class="fontSize18 boxs">We provide end-to-end development of web and mobile apps in integration with dynamic contemporary technologies like Blockchain, IoT, AR/VR, AI, Big Data and Machine Learning to boost the online-success of businesses.</p>
                                    <p class="fontSize18 boxs">With a perfect blend of technology, innovation, and expertise, we deliver cutting-edge digital solutions. We aid Startups, SMEs, and large-scale Enterprises to upgrade their every business process from ideation
                                        to final execution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guideYouBtm boxs boxs">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="guideYouLeft boxs">
                                <h4 class="fontSize30 boxs">Let Us Guide You</h4>
                                <p class="fontSize18 boxs">From ideation to final execution, we stand by our clients and establish their strong digital presence.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="guideYouRight boxs">
                                <ul class="stepsList stepsListNewDesign boxs">
                                    <li class="stepsListItem">
                                        <span class="fontSize22"><a href="<?php echo route('front/services_prototyping'); ?>">Prototyping</a></span>
                                    </li>
                                    <li class="stepsListItem">
                                        <span class="fontSize22"><a href="<?php echo route('front/services_brand_design'); ?>">Branding</a></span>
                                    </li>
                                    <li class="stepsListItem">
                                        <span class="fontSize22"><a href="<?php echo route('front/services_idea_consulting'); ?>">Idea Consulting</a></span>
                                    </li>
                                    <li class="stepsListItem">
                                        <span class="fontSize22"><a href="<?php echo route('front/services_mvp_development'); ?>">MVP</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Motto Section End -->

    <!-- Join Our Team Section Start -->
    <div class="joinTeamSec joinTeamSec2 p80sec boxs d-none">
        <div class="container">
            <div class="joinTeamSecIn boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="joinTeamIntroCont">
                            <h2 class="joinTeamTitle fontSize48 blackFont">Join Our Team</h2>
                            <p class="joinTeamDesc mt-3 fontSize20">At Designoweb, there's dependably a place for splendid individuals who are energetic about advanced, and innovation, are continually anticipating see what's straightaway. Turn into a piece of our vision to convey powerful, effective and exquisite arrangements. Turn into a piece of our vision to convey powerful, effective and exquisite arrangements.</p>
                            <a href="<?php echo route('front/contact'); ?>" class="joinTeamBtn btnStyle redBtn">Contact Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="joinOurTeamBanner boxs">
            <span><img src="<?php echo url('public/front/images/teamImage.webp'); ?>" class="img-fluid" alt="Team Image" loading="lazy"></span>
        </div>
    </div>
    <!-- Join Our Team Section End -->

    <!-- Awards and recognition section start -->
    <div class="recognitionBox recognitionBox2 boxs">
        <div class="container">
            <div class="recognitionInner recognitionInnerNew flexBox boxs">
                <div class="row">
                    <div class="col-md-12 col-lg-4 awardsCardMidSec1">
                        <div class="awardsCard boxs">
                            <div class="awardsImage boxs">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo1.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs">Awarded as the most promising mobile apps company of the Year</span>
                                <span class="awardsContent fontSize16 boxs">We have been recognised as a market leader globally, post a rigorous evaluation of factors presence & client experience.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 awardsCardMidSec">
                        <div class="awardsCard awardsCardMid boxs">
                            <span class="awardsMidImage"><img src="<?php echo url('public/front/images/recognitionMain.webp'); ?>" class="img-fluid" alt="Recognitions Icon" loading="lazy" /></span>
                            <span class="awardsMidHeading fontSize38 tect-center">Awards & Recognition</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="awardsCard boxs">
                            <div class="awardsImage boxs">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo2.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs">ISO 9001:2005 certified by the International Organisation for Standardisation</span>
                                <span class="awardsContent fontSize16 boxs">We are ISO certified for high performance business excellence, significantly low costs and optimized business operations.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="awardsCard boxs">
                            <div class="awardsImage boxs">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo3.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs">Certified Mobile App Development Company</span>
                                <span class="awardsContent fontSize16 boxs">App Futura has verified and listed as a Certified Mobile App development agency serving global clients since 2014.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 awardsCardFive">
                        <div class="awardsCard  boxs">
                            <div class="awardsImage boxs">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo4.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs">Categorised under the Top Web Development agencies by Selected Firms</span>
                                <span class="awardsContent fontSize16 boxs">Selected Firms have featured us in the Top Web Development companies along with an exclusive CEO Interview of our company.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="awardsCard boxs">
                            <div class="awardsImage boxs">
                                <span class=""><img src="<?php echo url('public/front/img/images/recLogo5.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs">Categorised under the Top Web & Mobile App development agencies Globally</span>
                                <span class="awardsContent fontSize16 boxs">We have been listed under the global leads of Web & Mobile app development by Top Developers considering our delivery standards.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Awards and recognition section end -->
    
    <div class="weDeliverBox weDeliverBox2 weDeliverBox2New ourPartnersSection boxs pt-0 sectionPaddingBottom">
        <div class="partnersSectionTop boxs">
            <div class="partnersSectionTopChild boxs">
                <span class="partnerSecBg partnerSecBgDesktop boxs"><img src="<?php echo url('public/front/images/partners/partnersBannerDesktop.webp'); ?>" class="img-fluid" alt="Background" /></span>
                <span class="partnerSecBg partnerSecBgMobile boxs"><img src="<?php echo url('public/front/images/partners/partnersBannerMobile.webp'); ?>" class="img-fluid" alt="Background" /></span>
                <div class="partnersSectionTopContent boxs">
                    <div class="container">
                        <div class="partnersSectionTopHeading boxs">
                            <div class="partnersTopSection weDeliverTop boxs">
                                <div class="smallHeading">
                                    <p class="fontSize14">Clients</p>
                                </div>
                                <div class="sectionHeading mainSecHeading mainSecHeading3 boxs mb-0">
                                    <h2 class="blackFont fontSize52 pb-0"><strong>Innovating</strong> for Leading Brands</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="partnersSectionBottom boxs sectionPaddingTop"> 
            <div class="container">
                <div class="weDeliverInner boxs">
                    <div class="weDeliverContent boxs">
                        <div class="weDeliverTop boxs">
                            <!--<div class="smallHeading boxs">-->
                            <!--    <p class="fontSize14">SERVICES</p>-->
                            <!--</div>-->
                            <!--<div class="sectionHeading mainSecHeading mainSecHeading3 boxs">-->
                            <!--    <h2 class="blackFont fontSize48 pb-0"><strong>Innovating</strong> for <br>Leading Brands</h2>-->
                            <!--</div>-->
                            <div class="ourServicePartners boxs sectionPadding3">
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage1.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage7.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage5.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage4.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage3.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage11.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage6.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage2.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage8.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage9.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage10.webp'); ?>" class="img-fluid" alt="Partner"></span>
                                <span class="ourServicePartnersCard"><img src="<?php echo url('public/front/images/partners/partnerImage12.webp'); ?>" class="img-fluid" alt="Partner"></span>
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
                                            <h3 class="fontSize30 boxs">Internet of Things</h3>
                                            <p class="fontSize18 boxs">Unfold the incredible abilities of the internet-of-things to transfer data without human intervention. A well-architectured IoT ecosystem transforms the business.</p>
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
                                            <h3 class="fontSize30 boxs">Augmented Reality</h3>
                                            <p class="fontSize18 boxs">Mingle technology and real-world with supreme Augmented reality solutions to incerase the emotional interaction and appeal of your brand.</p>
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
                                            <h3 class="fontSize30 boxs">Data Intelligence</h3>
                                            <p class="fontSize18 boxs">Analyze your business roadmap and possible outcomes more sophisticatedly using the power of data.</p>
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
                                            <h3 class="fontSize30 boxs">Artificial Intelligence</h3>
                                            <p class="fontSize18 boxs">Delivering AI-driven solutions to ensure smart interaction with your consumers through digital assets like chatbots, voice interfaces etc.</p>
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
                                            <h3 class="fontSize30 boxs">Virtual Reality</h3>
                                            <p class="fontSize18 boxs">Create your own world of possibilities using our advanced VR solutions focusing on varying enterprise needs.</p>
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
                                            <h3 class="fontSize30 boxs">Interactive Tech</h3>
                                            <p class="fontSize18 boxs">Step into a future where touch and holograms redefine interaction. Engage in unforgettable experiences that inspire.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- We Deliver Section Start -->
    <div class="weDeliverBox weDeliverBox2 boxs d-none">
        <div class="container">
            <div class="weDeliverInner boxs">
                <div class="weDeliverContent boxs">
                    <div class="weDeliverTop boxs">
                        <div class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </div>
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="blackFont fontSize48 pb-0">The Stakeholders of <br>Futuristic Technology Solutions</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Your Ideas, Our Expertise = Maximum Customer Success</p>
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
                                        <h3 class="fontSize30 boxs">Internet of Things</h3>
                                        <p class="fontSize18 boxs">Unfold the incredible abilities of the internet-of-things to transfer data without human intervention. A well-architectured IoT ecosystem transforms the business.</p>
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
                                        <h3 class="fontSize30 boxs">Augmented Reality</h3>
                                        <p class="fontSize18 boxs">Mingle technology and real-world with supreme Augmented reality solutions to incerase the emotional interaction and appeal of your brand.</p>
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
                                        <h3 class="fontSize30 boxs">Data Intelligence</h3>
                                        <p class="fontSize18 boxs">Analyze your business roadmap and possible outcomes more sophisticatedly using the power of data.</p>
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
                                        <h3 class="fontSize30 boxs">Artificial Intelligence</h3>
                                        <p class="fontSize18 boxs">Delivering AI-driven solutions to ensure smart interaction with your consumers through digital assets like chatbots, voice interfaces etc.</p>
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
                                        <h3 class="fontSize30 boxs">Virtual Reality</h3>
                                        <p class="fontSize18 boxs">Create your own world of possibilities using our advanced VR solutions focusing on varying enterprise needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-sm-4">-->
                            <!--    <div class="deliverListBox boxs">-->
                            <!--        <div class="listCounts boxs">-->
                            <!--            <span class="listCounter"></span>-->
                            <!--            <span class="listCounter2"></span>-->
                            <!--        </div>-->
                            <!--        <div class="deliverListContent boxs">-->
                            <!--            <h3 class="fontSize30 boxs">Application Support And Maintenance</h3>-->
                            <!--            <p class="fontSize18 boxs">As a strong compact application improvement association in India, we offer 24×7 application help and upkeep organization even after the application is shipped off. </p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    
                    <div class="weDeliverListing listcounterSec boxs d-none">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="deliverListBox boxs">
                                    <div class="listCounts boxs">
                                        <span class="listCounter"></span>
                                        <span class="listCounter2"></span>
                                    </div>
                                    <div class="deliverListContent boxs">
                                        <h3 class="fontSize30 boxs">(UI/UX) Design Services</h3>
                                        <p class="fontSize18 boxs">User-focused, client driven experiences that to convey significant business results, as a principle UI and experience plan association we help brands with investigating all potential parts of the present, and
                                            tomorrow's, automated scene.</p>
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
                                        <h3 class="fontSize30 boxs">Designers And Experts</h3>
                                        <p class="fontSize18 boxs">Client-centered, client driven, making motorized strategies that convey critical business results, contentful fashioners assist brands with accomplishing more in the constantly changing advanced scene.</p>
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
                                        <h3 class="fontSize30 boxs">IOS App Development</h3>
                                        <p class="fontSize18 boxs">Building iOS applications requires significant data, capacity, and association with dealing with the complexities of the application plan and improvement process. Our painstakingly ready and capable iOS application
                                            originators have a rich association with making iOS applications.</p>
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
                                        <h3 class="fontSize30 boxs">Application Support And Maintenance</h3>
                                        <p class="fontSize18 boxs">As a strong compact application improvement association in India, we offer 24×7 application help and upkeep organization even after the application is shipped off. </p>
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
                                        <h3 class="fontSize30 boxs">Manual Testing</h3>
                                        <p class="fontSize18 boxs">Manual Software Testing Services engages the ID of flaws and distortions in programming applications with the use of human ascribes like reasonable reasoning, motivations, and derivations.</p>
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
                                        <h3 class="fontSize30 boxs">Prototyping Services</h3>
                                        <p class="fontSize18 boxs">We assist attempts with examining all likely components of the great level scene, helping with wire-outlining and astute prototyping, causing encounters that convey unquestionable business results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Deliver Section End -->
    
    <!--Case Studies New Design Start-->
    <div class="workRepositorySec workRepositorySecNew workRepositorySecNew2 boxs ">
        <div class="container">
            <div class="workRepoInner boxs">
                <div class="sectionHeading mainSecHeading mainSecHeading3 topSectionHead boxs">
                    <div class="secHeadingLeft boxs">
                        <span class="smallSubHeading fontSize18">We Help to Enhance your Business</span>
                        <h2 class="fontSize48 boxs">Repository of Our Work</h2>
                    </div>
                    <span class="secHeadingRight colorWhite"><a href="<?php echo route('front/portfolio'); ?>" class="btnStyle redBtn">View More Case Studies<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                </div>
            </div>
            <div class="testimonialsNewSection boxs">
                <div class="testimonialsSectionChild boxs">
                    <div class="testimonialsNewSliders boxs customSliderNew customSliderNew3">
                        
                        <div class="testimonialsNewSlide unCruiseTestimonial boxs">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize32">UnCruise</span>
                                <span class="testimonialCardDetail boxs fontSize18">Adventurer's Insight: Empowering Reviews of Journey Experiences</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/uncruise'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardUncruise.webp'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide metavalTestimonial boxs">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize32">Metaval</span>
                                <span class="testimonialCardDetail boxs fontSize18">Pioneer in manufacturing Values, Flow measurement & Level instruments</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/metaval'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardMetaval.webp'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide seriousDatingTestimonial boxs">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize32">Serious Dating</span>
                                <span class="testimonialCardDetail boxs fontSize18">Embark on a journey of love and dating through this innovative app</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/serious-dating'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardSeriousDating.webp'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide tawidTestimonial boxs">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize32">Tawid</span>
                                <span class="testimonialCardDetail boxs fontSize18">An app that let’s you hire a skilled lawyer to secure refunds for flight cancellations.</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/tawid'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardTawid.webp'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide probikeTestimonial boxs">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize32">Pro Bike</span>
                                <span class="testimonialCardDetail boxs fontSize18">A bike riding app that tracks speed and turns using sensors.</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/probike'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardProbike.webp'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide updTestimonial boxs">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize32">Ultimate Property</span>
                                <span class="testimonialCardDetail boxs fontSize18">The Ultimate Data and Searching Tool for Property Investors.</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/ultimate-property-dashboard'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardUpd.webp'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Case Studies New Design End-->

    <!-- Work Repository Section Start -->
    <div class="workRepositorySec workRepositorySecNew boxs d-none">
        <div class="container">
            <div class="workRepoInner boxs">
                <div class="sectionHeading mainSecHeading mainSecHeading3 topSectionHead boxs">
                    <div class="secHeadingLeft boxs">
                        <span class="smallSubHeading fontSize18">We Help to Enhance your Business</span>
                        <h2 class="fontSize48 boxs">Repository of Our Work</h2>
                    </div>
                </div>
            </div>
            <div class="projetsSliders projetsSlidersNew projetsSlidersWeb boxs">
                <div class="projetsSlidersBox boxs">
                    <div class="projetsSlidersNewSec"></div>
                    <div class="projectSlider customSlider customSliderNew boxs">

                        <div class="projectSlides customSlides boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="projectSlideContent boxs">
                                        <div class="mainSecHeading mainSecHeading3 boxs">
                                            <h2 class="fontSize36 boxs">Negotium</h2>
                                        </div>
                                        <div class="projectContentBox boxs">
                                            <div class="projectSubHeading boxs">
                                                <h3 class="fontSize18 regularFont boxs">Simplify gas, electricity and water bills with this amazing website that provides you with services. It is the fastest way to get your payments right and coordinated and furnish your funds.</h3>
                                            </div>
                                            <div class="serviceFor serviceFor2 serviceFor3 boxs">
                                                <div class="serviceForLists boxs">
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Industry</h4>
                                                        <p class="fontSize16 boxs">Simplifying Businesses Industry</p>
                                                    </div>
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Services</h4>
                                                        <p class="fontSize16 boxs">Conceptualization, Design, Development, and Deployment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="viewWebsiteBox viewWebsiteWebBtn boxs">
                                                <span><a href="<?php echo url('case-study-detail/negotium'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="projectSlideBanner boxs">
                                        <span><img src="<?php echo url('public/front/img/projectSlidesNegotium.webp'); ?>" class="img-fluid" alt="Project Image" loading="lazy" /></span>
                                    </div>
                                </div>
                            </div>
                            <div class="viewWebsiteBox viewWebsiteMobBtn boxs">
                                <span><a href="<?php echo url('case-study-detail/negotium'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>

                        <div class="projectSlides customSlides boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="projectSlideContent boxs">
                                        <div class="mainSecHeading mainSecHeading3 boxs">
                                            <h2 class="fontSize36 boxs">Teksmart</h2>
                                        </div>
                                        <div class="projectContentBox boxs">
                                            <div class="projectSubHeading boxs">
                                                <h3 class="fontSize18 regularFont boxs">Receive easy and fast deployment of cell phones and other elements , recycle your old technologies into more useful ones that are more useful in today’s life. Get onboard with this business to reprocess.</h3>
                                            </div>
                                            <div class="serviceFor serviceFor2 serviceFor3 boxs">
                                                <div class="serviceForLists boxs">
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Industry</h4>
                                                        <p class="fontSize16 boxs">Laptop And Mobile Recycling And Reusing</p>
                                                    </div>
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Services</h4>
                                                        <p class="fontSize16 boxs">Conceptualization, Design, Development, and Deployment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="viewWebsiteBox viewWebsiteWebBtn boxs">
                                                <span><a href="<?php echo url('case-study-detail/teksmart'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="projectSlideBanner boxs">
                                        <span><img src="<?php echo url('public/front/img/projectSlidesTeksmart.webp'); ?>" class="img-fluid" alt="Project Image" loading="lazy" /></span>
                                    </div>
                                </div>
                            </div>
                            <div class="viewWebsiteBox viewWebsiteMobBtn boxs">
                                <span><a href="<?php echo url('case-study-detail/teksmart'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>

                        <div class="projectSlides customSlides boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="projectSlideContent boxs">
                                        <div class="mainSecHeading mainSecHeading3 boxs">
                                            <h2 class="fontSize36 boxs">Ultimate Property Dashboard</h2>
                                        </div>
                                        <div class="projectContentBox boxs">
                                            <div class="projectSubHeading boxs">
                                                <h3 class="fontSize18 regularFont boxs">Enter into the world of properties and it's industry from immense activity and opportunity to one of knowledge and obviously recognizable open doors. The possibility empowers knowledge and drives choices and computerization of property exercises.</h3>
                                            </div>
                                            <div class="serviceFor serviceFor2 serviceFor3 boxs">
                                                <div class="serviceForLists boxs">
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Industry</h4>
                                                        <p class="fontSize16 boxs">Analyze Real Estate Property Data Industry</p>
                                                    </div>
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Services</h4>
                                                        <p class="fontSize16 boxs">Conceptualization, Design, Development, and Deployment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="viewWebsiteBox viewWebsiteWebBtn boxs">
                                                <span><a href="<?php echo url('case-study-detail/ultimate-property-dashboard'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="projectSlideBanner boxs">
                                        <span><img src="<?php echo url('public/front/img/projectSlidesUpdNew.webp'); ?>" class="img-fluid" alt="Project Image" loading="lazy" /></span>
                                    </div>
                                </div>
                            </div>
                            <div class="viewWebsiteBox viewWebsiteMobBtn boxs">
                                <span><a href="<?php echo url('case-study-detail/ultimate-property-dashboard'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <div class="projetsSliders projetsSlidersNew projetsSlidersApp boxs">
                <div class="projetsSlidersBox boxs">
                    <div class="projetsSlidersNewSec"></div>
                    <div class="projectSlider customSlider customSliderNew boxs">

                        <div class="projectSlides customSlides boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="projectSlideBanner boxs">
                                        <span><img src="<?php echo url('public/front/img/projectSlidesMopApp.webp'); ?>" class="img-fluid" alt="Project Image" /></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="projectSlideContent boxs">
                                        <div class="mainSecHeading mainSecHeading3 boxs">
                                            <h2 class="fontSize36 boxs">Mad Over Pets</h2>
                                        </div>
                                        <div class="projectContentBox boxs">
                                            <div class="projectSubHeading boxs">
                                                <h3 class="fontSize18 regularFont boxs">Get easy and quick services for your pet just by sitting at your home. Take care of the well being and the fun activities of your pet by a few clicks away and you can shop as well.</h3>
                                            </div>
                                            <div class="serviceFor serviceFor2 serviceFor3 boxs">
                                                <div class="serviceForLists boxs">
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Industry</h4>
                                                        <p class="fontSize16 boxs">Pet Industry</p>
                                                    </div>
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Services</h4>
                                                        <p class="fontSize16 boxs">Conceptualization, Design, Development, and Deployment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="viewWebsiteBox viewWebsiteWebBtn boxs">
                                                <span><a href="<?php echo url('case-study-detail/mad-over-pets'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewWebsiteBox viewWebsiteMobBtn boxs">
                                <span><a href="<?php echo url('case-study-detail/mad-over-pets'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>

                        <div class="projectSlides customSlides boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="projectSlideBanner boxs">
                                        <span><img src="<?php echo url('public/front/img/projectSlidesLoopApp.webp'); ?>" class="img-fluid" alt="Project Image" loading="lazy" /></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="projectSlideContent boxs">
                                        <div class="mainSecHeading mainSecHeading3 boxs">
                                            <h2 class="fontSize36 boxs">Loop</h2>
                                        </div>
                                        <div class="projectContentBox boxs">
                                            <div class="projectSubHeading boxs">
                                                <h3 class="fontSize18 regularFont boxs">Get your groove on by connecting with different creative creators from any part of the world. Brainstorm and create music together by sitting at home with the help of the LOOP music and collaborate globally.</h3>
                                            </div>
                                            <div class="serviceFor serviceFor2 serviceFor3 boxs">
                                                <div class="serviceForLists boxs">
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Industry</h4>
                                                        <p class="fontSize16 boxs">Social Media App</p>
                                                    </div>
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Services</h4>
                                                        <p class="fontSize16 boxs">Conceptualization, Design, Development, and Deployment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="viewWebsiteBox viewWebsiteWebBtn boxs">
                                                <span><a href="<?php echo url('case-study-detail/loop-music'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewWebsiteBox viewWebsiteMobBtn boxs">
                                <span><a href="<?php echo url('case-study-detail/loop-music'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>

                        <div class="projectSlides customSlides boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="projectSlideBanner boxs">
                                        <span><img src="<?php echo url('public/front/img/projectSlidesBikeApp.webp'); ?>" class="img-fluid" alt="Project Image" loading="lazy" /></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="projectSlideContent boxs">
                                        <div class="mainSecHeading mainSecHeading3 boxs">
                                            <h2 class="fontSize36 boxs">Probike</h2>
                                        </div>
                                        <div class="projectContentBox boxs">
                                            <div class="projectSubHeading boxs">
                                                <h3 class="fontSize18 regularFont boxs">Track your speed and turns with Probike. The easiest and fastest way to compute your motions and movements as well as the utilization of the sensors to detect your pace.</h3>
                                            </div>
                                            <div class="serviceFor serviceFor2 serviceFor3 boxs">
                                                <div class="serviceForLists boxs">
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Industry</h4>
                                                        <p class="fontSize16 boxs">Track Cycling Activities</p>
                                                    </div>
                                                    <div class="serviceForBox boxs">
                                                        <h4 class="fontSize18 boxs">Services</h4>
                                                        <p class="fontSize16 boxs">Conceptualization, Design, Development, and Deployment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="viewWebsiteBox viewWebsiteWebBtn boxs">
                                                <span><a href="<?php echo url('case-study-detail/probike'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewWebsiteBox viewWebsiteMobBtn boxs">
                                <span><a href="<?php echo url('case-study-detail/probike'); ?>" class="btnStyle smallBtn">View Case Study<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="viewAllCaseStudy boxs ">
                <span class="boxs text-center"><a href="<?php echo route('front/case_studies'); ?>" class="btnStyle">Explore More Case Studies<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
            </div>
        </div>
    </div>
    <!-- Work Repository Section End -->

    <!-- Our Projects Slider Section End -->

    <!-- Hire Dedicated Developers Start -->
    <div class="hireDedicatedDevsNew p80sec boxs d-none">
        <div class="container">
            <div class="hireDevsInner boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="hireDevsLeft boxs">
                            <div class="mainSecHeading boxs">
                                <span class="smallSubHeading fontSize24">Offshore Developers</span>
                                <h2 class="fontSize48 boxs">Hire Dedicated Developers On Contract</h2>
                            </div>
                            <div class="dedicatedDevsList boxs">
                                <ul class="customEditor  boxs">
                                    <li>Seasoned team with rich skill set and extensive experience</li>
                                    <li>Flexible hiring models- hourly, part-time and full-time</li>
                                    <li>Excellent track record with hundreds of happy clients</li>
                                    <li>Open communication and timely delivery of projects</li>
                                </ul>
                            </div>
                            <div class="boxs mt-3">
                                <span class="boxs"><a class="btnStyle redBtn" href="<?php echo route('front/contact'); ?>">Contact Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="hireDevsRight boxs">
                            <span class="boxs"><img src="<?php echo url('public/front/img/dedicatedDevs.png'); ?>" class="img-fluid" alt="Devs Image" loading="lazy"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hire Dedicated Developers End -->
    
    <!--Snippets Section Start-->
    <div class="snippetsSection sectionPadding boxs d-nones">
        <div class="container">
            <div class="snippetsSectionChild boxs">
                <div class="mainSecHeading topSectionHead boxs">
                    <div class="secHeadingLeft boxs">
                        <span class="smallSubHeading fontSize18">Our Innovations</span>
                        <h2 class="fontSize36 boxs">VR and AR redefine reality through seamless blending of virtual and physical environments.</h2>
                    </div>
                </div>
                <div class="snippetsBox boxs">
                    <div class="snippetListing boxs d-none">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy">
                                        <source src="<?php echo url('public/front/images/videos/Luminous-Gel-Pro.mp4'); ?>" />
                                    </video>
                                    <div id="skiVideoControls" class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                                <!--<iframe class="video-player" width="100%" height="100%" src="https://www.youtube.com/embed/wjPg5NoRlFU" title="Luminous Gel Pro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize30 boxs">Luminous Gel Pro</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18  boxs">AR stands for Augmented Reality, which is a technology that combines computer-generated elements with the real world. Virtual Reality (VR), on the other hand, is a technology that creates a completely immersive, computer-generated environment or simulation.</p>
                                <p class="fontSize18  boxs">Both AR and VR have various applications across multiple industries. AR is frequently used in areas such as gaming, education, healthcare, and retail, offering experiences that blend the digital and physical worlds. VR finds applications in gaming, entertainment, training simulations, architecture, and therapy, providing users with highly immersive and interactive experiences in entirely virtual environments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="snippetListing boxs pt-0">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs" >
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/Medslegal-poster.webp'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/Medslegal.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                    <!--<iframe class="video-player" width="100%" height="100%" src="https://www.youtube.com/embed/vt3gAWJZLE4" title="Medslegal" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize30 boxs">Medslegal</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18  boxs">"Medslegal" aims to explore the multifaceted legal complexities of the medical field. Through captivating storytelling and engaging visuals, the series delves into the intricate web of healthcare regulations and ethical dilemmas faced by healthcare professionals.</p>
                                <p class="fontSize18  boxs">By shining a spotlight on these vital aspects, Medslegal provides viewers with a deeper understanding  on crucial aspects of the medical industry, fostering awareness and promoting informed discussions about the legal and ethical challenges faced by healthcare professionals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/3D-Home-Interior-poster.webp'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/3D-Home-Interior.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                    <!--<iframe class="video-player" width="100%" height="100%" src="https://www.youtube.com/embed/vt3gAWJZLE4" title="Medslegal" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                                </div>
                                <!--<iframe class="video-player" width="100%" height="100%" src="https://www.youtube.com/embed/AV7L85CMnhU" title="Living Room Home Interior Configurator 3D - Designoweb" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize30 boxs">3D Living Room Home Interior Configuration</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18  boxs">A digital representation or visualization of a living room's interior design and layout using three-dimensional (3D) technology. It involves creating a virtual environment that mimics a real-life living room, allowing users to explore and interact with different furniture arrangements, decor styles, color schemes, and other design elements.</p>
                                <p class="fontSize18  boxs">Users can virtually experiment with different wall colors and furniture colours flooring options, and add various decorative items to create the desired look and feel of their living room.</p>
                            </div>
                        </div>
                    </div>
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/3D-Modeling-Table-poster.webp'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/3D-Modeling-Table.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                    <!--<iframe class="video-player" width="100%" height="100%" src="https://www.youtube.com/embed/vt3gAWJZLE4" title="Medslegal" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                                </div>
                                <!--<iframe class="video-player" width="100%" height="100%" src="https://www.youtube.com/embed/NP9EDUj_UAo" title="Modular Operating Table 3D Modeling" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize30 boxs">Modular Operating Table - 3D Modeling</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18  boxs">An advanced medical equipment system used in surgical settings. It combines the concept of a modular operating table with the application of 3D modeling technology. The integration of 3D modeling technology enhances the functionality and precision of the modular operating table.</p>
                                <p class="fontSize18  boxs">By utilizing 3D modeling software and imaging data, surgeons can visualize and plan surgical procedures in a virtual environment. This technology enables the creation of detailed 3D models of  facilitating preoperative planning, simulation, and precise positioning of the modular operating table components.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--Snippets Section End-->

    <!-- About us Slider Start -->
    <div class="aboutUsSec2 ourTestimonilsBox boxs ourTestimonilsBoxNew">
        <div class="container">
            <div class="aboutUsSecInner boxs">
                <div class="mainSecHeading topSectionHead boxs">
                    <div class="secHeadingLeft secHeadingLeftNew boxs">
                        <span class="smallSubHeading fontSize18">Client Testimonial</span>
                        <h2 class="fontSize36 boxs">Don’t take our word for it. Trust our customers.</h2>
                        <!--<span class="fontSize36 smallSubHeading regularFont">Our Purpose</span>-->
                        <!--<h2 class="fontSize36 boxs">Don’t take our word for it. Trust our customers</h2>-->
                    </div>
                    <span class="secHeadingRight d-none colorWhite"><a href="<?php echo route('front/testimonials'); ?>" class="btnStyle btnStyle3 smallBtn smallBtn2">Read Testimonials<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                    </span>
                    <span class="secHeadingRight colorWhite"><a href="<?php echo route('front/testimonials'); ?>" class="btnStyle btnStyle3 transparentBtnRed btnHover">Read Testimonials<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                </div>
                
                <!--Old Design-->
                <div class="quotesList boxs d-none">
                    <div class="row">
                        <?php if(!empty($testimonials_without_video)){ foreach($testimonials_without_video->skip(0)->take(2) as $value){ ?>
                            <div class="quoteCont quoteContInNew col-md-6">
                                <div class="quoteContIn testimonialBoxs testimonialBoxsNew boxs">
                                    <div class="testimonialSecTop boxs">
                                        <span class="testimonialByImage"><img src="<?php echo !empty($value->client_image) ? url('uploads/admin/testimonials/'.$value->client_image) : ''; ?>" class="img-fluid" alt="Testimonial By" loading="lazy" /></span>
                                        <span class="aboutQuoteText fontSize16 fadeBlackFont"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                    </div>
                                    <div class="testimonialSecRight boxs">
                                        <div class="testimonialSecBtm boxs">
                                            <div class="quoteAuthorCont boxs">
                                                <span class="quoteIconsBox"><img src="<?php echo url('public/front/img/quotesImgs.svg'); ?>" alt="Quote Icon" class="img-fluid" loading="lazy"></span>
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
                    </div>
                </div>
                
                <!--New Design Slider-->
                <div class="quotesList quotesListNew ">
                    <div class="newTestimonialBox">
                        <div class="newTestimonialsSlider customSliderNew customSliderNew2 boxs">
                            
                            <div class="newTestimonialSlide boxs">
                                <div class="newTestimonialSlideChild boxs">
                                    <div class="newtestimonialLeft">
                                        <img src="<?php echo url('public/front/images/testimonials/clientImageNew.png'); ?>" class="img-fluid" alt="Client Image" />
                                    </div>
                                    <div class="newTestimonialRight boxs">
                                        <div class="testimonialQuotes boxs">
                                            <img src="<?php echo url('public/front/images/testimonialQuote.webp'); ?>" alt="Quote"/>
                                        </div>
                                        <div class="newTestContent boxs">
                                            <h3 class="fontSize24 newTestimonialContent boxs">I came up with an idea and decided to discuss it with Designoweb, which turned out to be the best decision I would have made. Together, we came up with a website which will provide services from trusted veterinarians to grooming of your little babies and a lot more.</h3>
                                            <div class="boxs">
                                                <h3 class="fontSize24 newTestimonialName boldFont boxs">Vijay</h3>
                                                <h4 class="fontSize20 newTestimonialComp boxs">Mad Over Pets</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="newTestimonialSlide boxs">-->
                            <!--    <div class="newTestimonialSlideChild boxs">-->
                            <!--        <div class="newtestimonialLeft">-->
                            <!--            <img src="<?php // echo url('public/front/images/testimonials/clientImageNew2.png'); ?>" class="img-fluid" alt="Client Image" />-->
                            <!--        </div>-->
                            <!--        <div class="newTestimonialRight boxs">-->
                            <!--            <div class="testimonialQuotes boxs">-->
                            <!--                <img src="<?php // echo url('public/front/images/testimonialQoute.png'); ?>" alt="Quote"/>-->
                            <!--            </div>-->
                            <!--            <div class="newTestContent boxs">-->
                            <!--                <h3 class="fontSize24 newTestimonialContent boxs">My website is an online destination for beauty and wellness professionals and clients. People can connect with new and existing clients in order to expand their business. Designoweb worked like a charm and the services were impeccable. A+ for their work and efforts. Glad to work with them.</h3>-->
                            <!--                <div class="boxs">-->
                            <!--                    <h3 class="fontSize24 newTestimonialName boldFont boxs">Ramona</h3>-->
                            <!--                    <h4 class="fontSize20 newTestimonialComp boxs">Diabetes Craft</h4>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <!--<div class="newTestimonialSlide boxs">-->
                            <!--    <div class="newTestimonialSlideChild boxs">-->
                            <!--        <div class="newtestimonialLeft">-->
                            <!--            <img src="<?php // echo url('public/front/images/testimonials/clientImageNew.png'); ?>" class="img-fluid" alt="Client Image" />-->
                            <!--        </div>-->
                            <!--        <div class="newTestimonialRight boxs">-->
                            <!--            <div class="testimonialQuotes boxs">-->
                            <!--                <img src="<?php // echo url('public/front/images/testimonialQoute.png'); ?>" alt="Quote"/>-->
                            <!--            </div>-->
                            <!--            <div class="newTestContent boxs">-->
                            <!--                <h3 class="fontSize24 newTestimonialContent boxs">The team was very professional , responsible and friendly. I recommend this company to anyone who is seeking solutions regarding technological problems.</h3>-->
                            <!--                <h3 class="fontSize24 newTestimonialName boldFont boxs">Ramona</h3>-->
                            <!--                <h4 class="fontSize20 newTestimonialComp boxs">Tawid</h4>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us Slider End -->

    <!-- Our Projects Slider Section Start -->
    <div class="ourProjectSlider ourClientsSliderNew boxs d-none">
        <div class="container">
            <div class="ourProjectSliderBox boxs">
                <div class="mainSecHeading boxs">
                    <span class="smallSubHeading fontSize18">Our Clients</span>
                    <h2 class="fontSize36 boxs">We love to work for everyone from <span>Startups to Enterprises</span>. <br>Be a part of our prestigious client list by engaging with us on your next project.</h2>
                </div>
                <div class="ourProjectsSlider projectSlideBox boxs">
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidebuildapp.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidecareHub.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlideelizabed.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidelayerslogic.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidemop.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidesata.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlideultimate.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidesekai.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlideamaroom.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidefuela.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlideloop.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidenegotium.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidejav.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlideproski.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidediabetes.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlidesmartgate.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                    <span class="ourProjectsSlides boxs">
                        <img src="<?php echo url('public/front/images/productSlideapanews.webp'); ?>" class="img-fluid" alt="Project Logo" loading="lazy" />
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Projects Slider Section End -->
    
    <x-request_consultation></x-request_consultation>
    
    <div class="footerTop boxs d-none">
        <div class="container">
            <div class="footerBox boxs d-flex">
                <div class="footLeft boxs">
                    <span class="footLogo boxs"><a href="<?php echo route('front/index'); ?>"><img src="<?php echo url('public/front/img/foot-logo.svg'); ?>" class="img-fluid" alt="Logo" loading="lazy" /></a></span>
                </div>
                <div class="footRight boxs">
                    <div class="footSections boxs">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="footSecBox boxs">
                                    <div class="locatedOffices boxs">
                                        <div class="officeLocation boxs">
                                            <span class="countryFlag"><img src="<?php echo url('public/front/img/flag.png'); ?>" alt="Flag Icon" class="img-fluid" loading="lazy" /></span>
                                            <span class="countryName fontSize16">India Office</span>
                                        </div>
                                        <div class="officeAddress boxs">
                                            <p class="fontSize14 boxs">C-56/47, 5th Floor, Sec-62, <br>Noida, UP 201309</p>
                                            <p class="countryContact fontSize14 boxs">
                                                <a href="tel:0120-3113922">0120-3113922</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="footSecBox boxs">
                                    <div class="locatedOffices boxs">
                                        <div class="officeLocation boxs">
                                            <span class="countryFlag"><img src="<?php echo url('public/front/img/usaFlag.png'); ?>" alt="Flag Icon" class="img-fluid" loading="lazy" /></span>
                                            <span class="countryName fontSize16">USA Office</span>
                                        </div>
                                        <div class="officeAddress boxs">
                                            <p class="fontSize14 boxs">15 Goose Trail <br>Taylors SC 29687</p>
                                            <p class="countryContact fontSize14 boxs">
                                                <a href="tel:+1(323)744-6965">+1 (323) 744-6965</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 footercertificationBoxMain">
                                <div class="footercertificationBox boxs">
                                    <span><img src="<?php echo url('public/front/images/recLogo4.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy"></span>
                                    <span><img src="<?php echo url('public/front/images/recLogo2.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy"></span>
                                    <span><img src="<?php echo url('public/front/images/recLogo3.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>




    
@endsection