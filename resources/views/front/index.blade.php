@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->

    <div class="homeBanner homeBannerNew homeBannerNew2 boxs">
        <div class="newBannerChild boxs">
            <div class="container">
                <div class="homeBannerBOx boxs">
                    <div class="homeBannerLeft homeBannerLeft2 boxs">
                        <span class="fontSize18 topSubHeading topSubHeading2 boxs">#designoweb</span>
                        <div class="bannerHeading boxs">
                            <h1 class="fontSize45 boxs">Inspiring Innovation <span class="highlightHeading"><span class="highlightHeading2">through Seamless </span> </span>IT Solutions</h1>
                        </div>
                        <h2 class="bannerSubHeading bannerSubHeadingNew fontSize18 boxs">A Full Stack Development Team delivering innovative Solutions for Mobile, Web & Wearables using technologies like AR, VR, Metaverse, Blockchain, IOT and Generative AI.</h2>
                        <span class="homeBannerLink boxs">
                            <a class="btnStyle smallBtn smallBtn3 btnStyle3 redBtn" href="<?php echo route('front/contact'); ?>">Let’s Build Your Idea <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="videoOverlay boxs" id="contentSection">
            <video id="dowVideo" playsinline autoplay loop muted poster="<?php echo url('public/front/images/home-vid-thumbnail.webp'); ?>">
                <source src="<?php echo url('public/front/images/dowVideo2.mp4'); ?>">
            </video>
        </div>
        
    </div>
    <!-- Services Banner End -->
    
    
    <!--Services Slider-->
    <div class="servicessliderBox p80sec boxs pb-0 d-none">
        <div class="servicesSlider boxs">
            <span class="servicesSliderItem">3D Product design</span>
            <span class="servicesSliderItem">AR VR Apps</span>
            <span class="servicesSliderItem">Web Design</span>
            <span class="servicesSliderItem">Mobile app designs</span>
            <span class="servicesSliderItem">Brand Design</span>
            <span class="servicesSliderItem">Virtual Space Creation</span>
            <span class="servicesSliderItem">MVP Development</span>
        </div>
    </div>
    
    
    <!--New About Us Section-->
    <div class="aboutUsSectionNew  p80sec boxs negativeMargin ">
        <div class="container">
            <div class="aboutUsSectionBox boxs">
                <div class="aboutUsNewChildSection boxs">
                    <div class="aboutUsNewLeftSection boxs">
                        <div class="mainSecHeading boxs">
                            <span class="smallSubHeading fontSize18 colorRed">About</span> 
                            <h2 class="fontSize38 boxs">Designoweb</h2>
                        </div>
                        
                        <div class="oneTeamSectionNewSectionChild oneTeamSectionNewSectionChild2 boxs sectionPadding2 oneTeamSectionNewSectionChildWeb">
                            <div class="oneTeamBox boxs">
                                <div class="statsSectionNew boxs">
                                    <div class="statsSecNewTop statsSecNewTopSection boxs">
                                        <div class="statsCountNew boxs">
                                            <h3 class="fontSize45  boxs"><span class="counter">150</span>+</h3>
                                            <p class="fontSize28  boxs lightColor">Developers</p>
                                        </div>
                                        <div class="statsCountNew boxs">
                                            <h3 class="fontSize45  boxs"><span class="counter">250</span>+</h3>
                                            <p class="fontSize28  ize18 boxs lightColor">Projects Delivered</p>
                                        </div>
                                        <div class="statsCountNew boxs">
                                            <h3 class="fontSize45  boxs"><span class="counter">120</span>+</h3>
                                            <p class="fontSize28  boxs lightColor">Global Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="aboutUsNewRightSection oneTeamSection boxs oneTeamSectionNew statsSectionNew oneTeamSectionNewSection boxs">
                        <div class="teamSectionContentChild boxs">
                            <div class="statsSecNewBtm statsSecNewBtmNewSection boxs">
                                <h3 class="fontSize38 boxs dowFontBold">We're architects of the digital future, crafting websites and apps that transcend screens and enter the realm of experience. </h3>
                                <p class="fontSize18 boxs dowFontRegular lightColor mb-0">Our team of handpicked innovators in website, app and design aren't just masters of their craft, they're relentless pioneers, pushing the boundaries of what's possible. We delve deep into your business, understanding your challenges and dreams.</p>
                            </div>
                            
                            <div class="oneTeamSectionNewSectionChild oneTeamSectionNewSectionChild2 boxs sectionPadding2 oneTeamSectionNewSectionChildMob">
                                <div class="oneTeamBox boxs">
                                    <div class="statsSectionNew boxs">
                                        <div class="statsSecNewTop statsSecNewTopSection boxs">
                                            <div class="statsCountNew boxs">
                                                <h3 class="fontSize45  boxs"><span class="counter">150</span>+</h3>
                                                <p class="fontSize28  boxs lightColor">Developers</p>
                                            </div>
                                            <div class="statsCountNew boxs">
                                                <h3 class="fontSize45  boxs"><span class="counter">250</span>+</h3>
                                                <p class="fontSize28  ize18 boxs lightColor">Projects Delivered</p>
                                            </div>
                                            <div class="statsCountNew boxs">
                                                <h3 class="fontSize45  boxs"><span class="counter">120</span>+</h3>
                                                <p class="fontSize28  boxs lightColor">Global Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="ourTeamsGallery boxs">
                            <span class="galleryImageLeft boxs">
                                <img src="https://lh3.googleusercontent.com/d/18Zxj1OH52IKD6Qe08_qAGVOl5ntbQ_U_?authuser=0" alt="Team Image" class="img-fluid w-100">
                            </span>
                            <span class="galleryImageRight boxs">
                                <span class="">
                                    <img src="https://lh3.googleusercontent.com/d/1Ojqk3Q0e1Qq_gloOP5-nV1UDarv3uGvp?authuser=0" alt="Team Image" class="img-fluid w-100">
                                </span>
                                <span class="">
                                    <img src="https://lh3.googleusercontent.com/d/1lDlanZ_OWMDGfLgLGxMQwm9v-Wh5ToDK?authuser=0" alt="Team Image" class="img-fluid w-100">
                                </span>
                            </span>
                        </div>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- One Team Innovation Section Start -->
    <div class="oneTeamSection boxs oneTeamSectionNew statsSectionNew oneTeamSectionNewSection negativeMargin d-none">
        <div class="teamSectionContent boxs sectionPadding pb-0">
            <div class="container">
                <div class="teamSectionContentChild boxs">
                    <div class="statsSecNewBtm statsSecNewBtmNewSection boxs">
                        <h3 class="fontSize38 boxs dowFontBold">About Designoweb</h3>
                        <p class="fontSize18 boxs dowFontRegular lightColor"><strong>Designoweb Technologies</strong> was founded in 2016 with a vision and dream to become one of the Top Rated companies that helps in the upliftment of business through innovative technology solutions. We value people and invest most of our time consulting business owners about what resolution technology can bring to their businesses. We provide services for the world’s leading brands including startups and enterprise-scale businesses. Our aim is to deliver innovative mobile and web solutions that transform businesses for the better. What makes us stand out in the market is the hunger to innovate and experiment. We have hand-picked a team of experts that are ready to challenge themselves to build something that drives value.</p>
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
                                    <h3 class="fontSize38 boxs"><span class="counter">150</span>+</h3>
                                    <p class="fontSize18 boxs lightColor">Developers</p>
                                </div>
                                <div class="statsCountNew boxs">
                                    <h3 class="fontSize38 boxs"><span class="counter">250</span>+</h3>
                                    <p class="fontSize18 boxs lightColor">Projects Delivered</p>
                                </div>
                                <div class="statsCountNew boxs">
                                    <h3 class="fontSize38 boxs"><span class="counter">120</span>+</h3>
                                    <p class="fontSize18 boxs lightColor">Global Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--<div class="joinTeamSec joinTeamSec2 boxs">-->
        <!--    <div class="joinOurTeamBanner boxs mt-0">-->
        <!--        <span><img src="<?php // echo url('public/front/images/teamImage2-old.webp'); ?>" class="img-fluid" alt="Team Image" loading="lazy"></span>-->
        <!--        <span><img src="<?php // echo url('public/front/images/web-team-image.png'); ?>" class="img-fluid w-100" alt="Team Image" loading="lazy"></span>-->
        <!--    </div>-->
        <!--</div>-->
        
    </div>
    

    <!-- Our Solutions Section Start -->
    <div class="ourSolutions boxs">
        <div class="container">
            <div class="ourSolutionInner boxs">
                <div class="mainSecHeading boxs">
                     <span class="smallSubHeading fontSize18">Our Services</span> 
                    <h2 class="fontSize38 boxs">Reshaping Dynamics of Modern-Age Businesses With Our Solutions</h2>
                </div>
                <div class="ourSolutionsTypes ourSolutionsTypesNew boxs">
                    <div class="ourSoluitonsTop ourSoluitonsTopNew flexBox boxs">

                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="growthHacking boxs d-flex ourServiceSolutions">
                                    <div class="growthHackImg grwothHackInners boxs">
                                        
                                        <video playsinline="" style="height: 100%; width: 100%; object-fit: cover;" autoplay="" loop="" muted="" poster="<?php echo url('public/front/images/metaverseBanner.png'); ?>">
                            				<source src="https://designoweb.com/public/front/images/videos/pexelVideo.mp4" />
                                        </video>
                                        
                                    </div>
                                    <div class="growthHackingInner grwothHackInner metaverseInfoRight boxs">
                                        <div class="grwothInnerBox boxs">
                                            <h4 class="fontSize28 boxs"><span>Metaverse & Digital Twinning</span></h4>
                                            <p class="fontSize18 boxs lightColor">Designoweb, provides metaverse services including VR/AR/MR solutions, immersive gaming experiences, virtual learning environments, interactive retail platforms, and real estate visualization tools.</p>
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
                                <div class="ourAppSolutions boxs ourServiceSolutions">
                                    <div class="ourSolutionBox ourSolutionBox2 appDevelopment boxs">
                                        <div class="solutionBoxBanner boxs" >
                                            <a href="<?php echo route('front/services_mobile_app_development'); ?>" class="boxs">
                                                <h4 class="fontSize28 boxs"><span>Mobile Solutions</span></h4>
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
                                <div class="ourWebSolutions boxs ourServiceSolutions">
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
                                <div class="ourSolutionBox webDesign boxs ourServiceSolutions">
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
                                <div class="ourSolutionBox qualifyAssurance boxs ourServiceSolutions">
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
                                <div class="ourSolutionBox startupBooster boxs ourServiceSolutions">
                                    <div class="solutionBoxBanner solutionBoxStartup boxs">
                                        <div class="solutionBoxBannerNew boxs">
                                            <h4 class="fontSize28 boxs">Startup Booster</h4>
                                            <p class="fontSize18 boxs lightColor">Accelerate its turn of events and furnish them with the most reasonable apparatuses.</p>
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

    
    <!--Snippets Section Start-->
    <div class="snippetsSection sectionPadding boxs">
        <div class="container">
            <div class="snippetsSectionChild boxs">
                <div class="mainSecHeading topSectionHead boxs">
                    <div class="secHeadingLeft boxs">
                        <span class="smallSubHeading fontSize18">Our Innovations</span>
                        <h2 class="fontSize38 boxs">VR and AR redefine reality through seamless blending of virtual and physical environments.</h2>
                    </div>
                </div>
                <div class="snippetsBox homeSnippetsBox homeSnippetsBoxGrid  boxs d-none">
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs metaverseSnippetsVideo ">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/Metaverse-Grocery-Store.png'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/Metaverse-Grocery-Store.mp4'); ?>" />
                                    </video>
                                    <div id="skiVideoControls" class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        <a class="videoZoomOption"><i class="fas fa-expand"></i></a>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Metaverse Grocery Store</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18  boxs d-none">A Metaverse Grocery Store is a concept that envisions a virtual representation of a grocery store within the metaverse. In this virtual store, users can immerse themselves in a simulated environment where they can interact with virtual shelves, explore various products, and make purchases using virtual currency or real-world transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs" >
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/eye-anatomy-poster.webp'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/eye-anatomy.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Eye Anatomy</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18 boxs d-none">In Virtual Reality (VR), eye anatomy can be explored through immersive 3D simulations. Users can navigate a virtual representation of the eye, gaining insight into its intricate structures and functions. VR allows a hands-on experience, enabling users to dissect and interact with different ocular components, such as the cornea, lens, and retina, to understand their roles in vision.</p>
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
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Metaverse Interior Configuration</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18  boxs d-none">A digital representation or visualization of a living room's interior design and layout using three-dimensional (3D) technology. It involves creating a virtual environment that mimics a real-life living room, allowing users to explore and interact with different furniture arrangements, decor styles, color schemes, and other design elements.</p>
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
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Modular Operating Table - 3D Modeling</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18  boxs d-none">An advanced medical equipment system used in surgical settings. It combines the concept of a modular operating table with the application of 3D modeling technology. The integration of 3D modeling technology enhances the functionality and precision of the modular operating table.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/kitchen-poster.png'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/EGL-Moduler-Kitchen.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">EGL Modular Kitchen</span>
                            <div class="snippetsText boxs">
                                <p class="fontSize18 boxs d-none"></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/Luminous-Gel-Pro.png'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/Luminous-Gel-Pro.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Luminous Gel Pro</span>
                        </div>
                    </div>
                    
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/watch-poster.png'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/Wrist-Watch-Configurator-Application.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Wrist Watch Configurator Application</span>
                        </div>
                    </div>
                    
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/submarine-poster.png'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/Submarine.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Submarine</span>
                        </div>
                    </div>
                    
                    <div class="snippetListing boxs">
                        <div class="snippetsVideo boxs">
                            <span class="snippetsVideoChild boxs">
                                <div class="skiVideoCont">
                                    <video playsinline class="skiVideo" style="width: 100%" loading="lazy" poster="<?php echo url('public/front/images/videos/furniture-poster.png'); ?>">
                                        <source src="<?php echo url('public/front/images/videos/FurnitureAR.mp4'); ?>"/>
                                    </video>
                                    <div class="skiVideoControls muted">
                                        <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                        <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                    </div>
                                    <div class="vidoeProgressBar"></div>
                                </div>
                            </span>
                        </div>
                        <div class="snippetsContent boxs">
                            <span class="snippetsTextHeading fontSize20 boxs text-center">Furniture AR</span>
                        </div>
                    </div>
                    
                </div>
                
                
                <div class="snippetsBox homeSnippetsBox homeSnippetsBoxGrid  boxs ">
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/1XRpBR6BjPSg6gq5WT_4F4N9Pbj5leYsY?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Metaverse Grocery Store</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/Metaverse-Grocery-Store.webp'); ?>" video-url="<?php echo url('public/front/images/videos/Metaverse-Grocery-Store.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/1vRynNfg0dvOdl6TpjFOt_EZLrti45d0l?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Eye Anatomy</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/eye-anatomy-poster.webp'); ?>" video-url="<?php echo url('public/front/images/videos/eye-anatomy.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/1bwfawqwpP0sQ-S8lFuEaYuUBGw1r1yCX?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Metaverse Interior Configuration</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/3D-Home-Interior-poster.webp'); ?>" video-url="<?php echo url('public/front/images/videos/3D-Home-Interior.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/1wvslAs1a1XLiU0RTbZppxD_Q2Puwy1aB?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Modular Operating Table - 3D Modeling</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/3D-Modeling-Table-poster.webp'); ?>" video-url="<?php echo url('public/front/images/videos/3D-Modeling-Table.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/1miLq_6-L1o4LoglWh7XdMI5UZKCCXS9w?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">EGL Modular Kitchen</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/kitchen-poster.webp'); ?>" video-url="<?php echo url('public/front/images/videos/EGL-Moduler-Kitchen.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/1cZbEDRuz1M2LsQ4EDQoPaew6S42gTgbq?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Luminous Gel Pro</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/Luminous-Gel-Pro.webp'); ?>" video-url="<?php echo url('public/front/images/videos/Luminous-Gel-Pro.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/12IrWToIIAmBNs3kval8yTJ2mL_pwkmZP?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Wrist Watch Configurator Application</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/watch-poster.webp'); ?>" video-url="<?php echo url('public/front/images/videos/watch-poster.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/12NYr_E0PtpZ4hF0VNWxa3pnb6fpGNK4m?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Submarine</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/submarine-poster.webp'); ?>" video-url="<?php echo url('public/front/images/videos/Submarine.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="snippetListing snippetListingNew boxs">
                        <div class="innovationVideoContChild boxs">
                            <span class="innovationVideoChildImage boxs"><img src="https://lh3.googleusercontent.com/d/1Na8f2Ruhw4K7bxpaKkyVvioPei6T0OvX?authuser=0" class="img-fluid" /></span>
                            <div class="innovationVideoChildDetail boxs">
                                <span class="innovationSectionName boxs">Furniture AR</span>
                                <a class="onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/furniture-poster.webp'); ?>" video-url="<?php echo url('public/front/images/videos/FurnitureAR.mp4'); ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!--Snippets Section End-->
    
    
    <!--<Our Services Section Start-->
    <div class="ourProductsSectionNew boxs sectionPadding ourSolutionInner pt-0">
        <div class="container">
            <div class="mainSecHeading boxs">
                <span class="smallSubHeading fontSize18">Our Solutions</span>
                <h2 class="fontSize38 boxs">Our Products Deliver Innovative Solutions To Meet Our Client Needs</h2>
            </div>
            <div class="ourProductsChild boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="https://lh3.googleusercontent.com/d/1OD0HjBRKPHf74YChBwhglTnY81Ex0r8r?authuser=0" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize28 productHeadText boxs">DeliverX: On-Demand Delivery Solution</span>
                                    <span class="fontSize18 productDescriptionText boxs mb-0">Experience the future of efficient and reliable on-demand delivery with DeliverX. Our comprehensive solution empowers businesses to seamlessly manage deliveries, optimize routes, and provide exceptional customer experiences. </span>
                                </div>
                                <span class="ourProductRedirect boxs d-none"><a class="exploreMoreProductsLInk hoverBtn2" href="javascript:void(0)">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="https://lh3.googleusercontent.com/d/1UlRnc9j0yBezhrMMZuBgwI_VBxf3qSwR?authuser=0" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize28 productHeadText boxs">ChatX: On-In-App Full Stack Chat</span>
                                    <span class="fontSize18 productDescriptionText boxs mb-0">Elevate your app's user engagement with ChatX, the robust full stack chat SDK. Enable seamless in-app messaging, real-time communication, and personalized customer support. Compatible both for Android and iOS.</span>
                                </div>
                                <span class="ourProductRedirect boxs d-none"><a class="exploreMoreProductsLInk hoverBtn2" href="javascript:void(0)">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="https://lh3.googleusercontent.com/d/1P85gjwjPEFJiPfsBTiilo4pZuhd8vOKg?authuser=0" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize28 productHeadText boxs">Pronto AR: Augmented Reality Builder</span>
                                    <span class="fontSize18 productDescriptionText boxs mb-0">Unleash the power of augmented reality with Pronto AR, our cutting-edge AR builder. Transform products and experiences with immersive AR technology, creating captivating and interactive user engagements.</span>
                                </div>
                                <span class="ourProductRedirect boxs d-none"><a class="exploreMoreProductsLInk hoverBtn2" href="javascript:void(0)">Explore More <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-8">
                        <a class="ourProductsBox boxs" href="https://scalie.io" target="_blank">
                            <div class="ourProductsBoxImage ourProductsBoxImageScalie  boxs">
                                <img src="https://lh3.googleusercontent.com/d/1rytSgZoxTVT32BN4_m8jtwGoUJVqS9IS?authuser=0" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize28 productHeadText boxs">Build & Scale your Remote Engineering Team</span>
                                    <span class="fontSize18 productDescriptionText boxs mb-0">Scalia is an on demand tech talent providers with one of the largest pool of developers available across 50+ Tech Stacks. All our resources undergo an expert vetting process not just in Technology skills but also at business understanding and client communication. <br /> <br />Our expert team helps you source the best Pre Vetted Tech Resources on Contract without the hassle of hiring process. Scale Teams faster with Top Talents ready to join your Team immediately.</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="ourProductsBox boxs">
                            <div class="ourProductsBoxImage boxs">
                                <img src="https://lh3.googleusercontent.com/d/1yhjHXKdFiPvTkhJgWggQansip-JS4IO-?authuser=0" class="img-fluid" alt="Product Image">
                            </div>
                            <div class="ourProductContentBox boxs">
                                <div class= ourProductContentTop"boxs">
                                    <span class="fontSize28 productHeadText boxs">iCreate: Interactive Product Catalog</span>
                                    <span class="fontSize18 productDescriptionText boxs mb-0">Empower your customers to explore, and visualise products in an engaging way, driving conversion and delivering a navigation driven PDF Catalog experience. Revolutionise your product showcase with iCreate</span>
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
                                    <h4 class="mottoHeading fontSize38 boxs">Our Motto</h4>
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
                            <div class="awardsImage boxs text-center">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo1.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs text-center">Awarded as the most promising mobile apps company of the Year</span>
                                <span class="awardsContent fontSize16 boxs text-center">We have been recognised as a market leader globally, post a rigorous evaluation of factors presence & client experience.</span>
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
                            <div class="awardsImage boxs text-center">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo2.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs text-center">ISO 9001:2005 certified by the International Organisation for Standardisation</span>
                                <span class="awardsContent fontSize16 boxs text-center">We are ISO certified for high performance business excellence, significantly low costs and optimized business operations.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="awardsCard boxs">
                            <div class="awardsImage boxs text-center">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo3.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs text-center">Certified Mobile App Development Company</span>
                                <span class="awardsContent fontSize16 boxs text-center">App Futura has verified and listed as a Certified Mobile App development agency serving global clients since 2014.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 awardsCardFive">
                        <div class="awardsCard  boxs">
                            <div class="awardsImage boxs text-center">
                                <span class=""><img src="<?php echo url('public/front/images/recLogo4.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs text-center">Categorised under the Top Web Development agencies by Selected Firms</span>
                                <span class="awardsContent fontSize16 boxs text-center">Selected Firms have featured us in the Top Web Development companies along with an exclusive CEO Interview of our company.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="awardsCard boxs">
                            <div class="awardsImage boxs text-center">
                                <span class=""><img src="<?php echo url('public/front/img/images/recLogo5.webp'); ?>" class="img-fluid" alt="Award Icon" loading="lazy" /></span>
                            </div>
                            <div class="awardsInfo boxs">
                                <span class="awardsHeading fontSize20 boxs text-center">Categorised under the Top Web & Mobile App development agencies Globally</span>
                                <span class="awardsContent fontSize16 boxs text-center">We have been listed under the global leads of Web & Mobile app development by Top Developers considering our delivery standards.</span>
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
                                    <h2 class="blackFont fontSize52 pb-0"><strong>Innovating</strong> <span class="">for Leading Brands</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="partnersSectionBottom boxs sectionPaddingTop sectionPaddingTopNew pb-0"> 
            
            <div class="weDeliverInner boxs">
                <div class="weDeliverContent boxs">
                    <div class="weDeliverTop boxs">
                        <div class="brandsLogoSection boxs">
                            <div class="container">
                                <div class="brandsLogoSectionChild boxs">
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1_1eLgFk1Kj3iMnJ4sIucuZydyOu0hQq5=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1L1InDcQdbSth28HXKhm_Kr9K9hjC2Zkz=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1RuRCaAQMGjCUGNdiDGvusBqaV15cxKYU=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/129DwVWxF_WNrR3IgPV60nSMsRHuNgi68=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1Ued7C8sh-cPvsYyT-VB_LW_W_xQ02XaL=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1bzaZzyJkaxgNWQX2wmZVp8Ks4oOl9sOz=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/14lWBE8amyJoQ2C4uLLaIYQGB5j_Ac6au=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1EjCob0dB9Yaa0Y5AbdcJZJ-WLexxf6kM=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1ujz9UAMqAaY3ip_QFu_87C26jLVDC9uC=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1xWgoTn_1GfpV2Amcg0Ah7DtNLz_d_v08=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1zypQ81rntI0Os-KJfxlfbEPpipqFABzI=s220?authuser=0"></span>
                                    <span class="brandLogoItem"><img class="img-fluid" src="https://lh3.googleusercontent.com/d/1onrzCZFWI4oJil2vB_Zffg6m9ugaJiF2=s220?authuser=0"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="container">
                        
                        <div class="weDeliverListing listcounterSec boxs">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="deliverListBox boxs">
                                        <div class="listCounts boxs">
                                            <span class="listCounter"></span>
                                            <span class="listCounter2"></span>
                                        </div>
                                        <div class="deliverListContent boxs">
                                            <h3 class="fontSize28 boxs">Internet of Things</h3>
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
                                            <h3 class="fontSize28 boxs">Augmented Reality</h3>
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
                                            <h3 class="fontSize28 boxs">Data Intelligence</h3>
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
                                            <h3 class="fontSize28 boxs">Artificial Intelligence</h3>
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
                                            <h3 class="fontSize28 boxs">Virtual Reality</h3>
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
                                            <h3 class="fontSize28 boxs">Interactive Tech</h3>
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
                        <h2 class="fontSize38 boxs">Repository of Our Work</h2>
                    </div>
                    <span class="secHeadingRight colorWhite"><a href="<?php echo route('front/portfolio'); ?>" class="btnStyle redBtn">View More Case Studies<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                </div>
            </div>
            <div class="testimonialsNewSection boxs">
                <div class="testimonialsSectionChild boxs">
                    <div class="testimonialsNewSliders boxs customSliderNew customSliderNew3">
                        
                        <div class="testimonialsNewSlide unCruiseTestimonial boxs" style="background: #08B3A9">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">UnCruise</span>
                                <span class="testimonialCardDetail boxs fontSize18">Adventurer's Insight: Empowering Reviews of Journey Experiences</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/uncruise'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardUncruise.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide metavalTestimonial boxs" style="background: #0069AF">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Metaval</span>
                                <span class="testimonialCardDetail boxs fontSize18">Pioneer in manufacturing Values, Flow measurement & Level instruments</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/metaval'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardMetaval.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide seriousDatingTestimonial boxs" style="background: #EBADB7">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Hollywood Hair</span>
                                <span class="testimonialCardDetail boxs fontSize18">"Glamorous locks for a star-studded allure."</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" target="_blank" href="https://hollywoodhair.pl"><span class="viewStudyLinkText">View Website</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardHollywoodhair.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide tawidTestimonial boxs" style="background: #3F48CC">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Pro Bike</span>
                                <span class="testimonialCardDetail boxs fontSize18">A bike riding app that tracks speed and turns using sensors.</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/probike'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardProbike.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide probikeTestimonial boxs" style="background: #3787E3">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">UPD</span>
                                <span class="testimonialCardDetail boxs fontSize18">The Ultimate Data and Searching Tool for Property Investors</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/ultimate-property-dashboard'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardUpd.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide updTestimonial boxs" style="background: #F99926">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Loop</span>
                                <span class="testimonialCardDetail boxs fontSize18">A platform that connects independent creatives to other globally</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/loop-music'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardLoop.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        
                        <div class="testimonialsNewSlide updTestimonial boxs" style="background: #C91C1C">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Road Trip Tribes</span>
                                <span class="testimonialCardDetail boxs fontSize18">Embark on worry-free journeys with our stress- free ride app</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" target="_blank" href="https://app.roadtriptribes.com"><span class="viewStudyLinkText">View Website</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardGpx.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide updTestimonial boxs" style="background: #628359">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Mental Healthy</span>
                                <span class="testimonialCardDetail boxs fontSize18">Your Mental Health, Your way- mental health self - care solutions</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" target="_blank" href="https://mentalhealthy.ai"><span class="viewStudyLinkText">View Website</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardMentalHealthy.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide updTestimonial boxs" style="background: #015696">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Servicos Travel</span>
                                <span class="testimonialCardDetail boxs fontSize18">Discover numerous cabs effortlessly in less time</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" target="_blank" href="https://apps.apple.com/in/app/transporte-coyoacan/id6451487037"><span class="viewStudyLinkText">View Application</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardServicos.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide updTestimonial boxs" style="background: #8653AF">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Packaged</span>
                                <span class="testimonialCardDetail boxs fontSize18">Products that are masterfully designed to engage consumer</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" target="_blank" href="https://www.packaged.com/"><span class="viewStudyLinkText">View Website</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardPackaged.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide updTestimonial boxs" style="background: #8BCFED">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">Amarooms</span>
                                <span class="testimonialCardDetail boxs fontSize18">Explore the rental options for rooms and discover your ideal living space</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" href="<?php echo url('case-study-detail/amarooms'); ?>"><span class="viewStudyLinkText">View Case Study</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardAmarooms.png'); ?>" alt="Testimonial Image" class="img-fluid" />
                            </span>
                        </div>
                        <div class="testimonialsNewSlide updTestimonial boxs" style="background: #74D5CC">
                            <div class="boxs">
                                <span class="testiminoalCardHeading boxs fontSize28">NRG Surveys</span>
                                <span class="testimonialCardDetail boxs fontSize18">Align your perspective effortlessly with Alignment Viewer</span>
                                <span class="testimonialRedirect boxs"><a class="hoverBtn2" target="_blank" href="https://apps.apple.com/in/app/alignment-viewer/id1334623383"><span class="viewStudyLinkText">View Application</span> <span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                            </div>
                            <span class="testimonialCardImage boxs">
                                <img src="<?php echo url('public/front/images/case-study/cardNrg.png'); ?>" alt="Testimonial Image" class="img-fluid" />
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
                        <h2 class="fontSize38 boxs">Repository of Our Work</h2>
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
                                <h2 class="fontSize38 boxs">Hire Dedicated Developers On Contract</h2>
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
    
    
    
    <!--3D Modals Start-->
    <div class="threeddModalsSection boxs sectionPadding pb-0 d-none">
        <div class="container">
            <div class="threeddModalsChild boxs">
                <div class="mainSecHeading boxs">
                    <span class="smallSubHeading fontSize18">3D modeling</span>
                    <h2 class="fontSize38 boxs">3D modeling for product demonstration</h2>
                </div>
                <div class="threedModalsInner boxs">
                    <div class="threedModalsChildList boxs">
                        <div class="threedModalWrapper boxs">
                             
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
                            <!--<div class="threedModalWrapperSec boxs">-->
                            <!--    <div class="sketchfab-embed-wrapper threedModalWrapperChild"> -->
                            <!--        <iframe height="100%" width="100%"  title="Bioreactor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/420b69867c3b45f4ac4ee6d57d34615e/embed"></iframe> -->
                            <!--    </div>-->
                            <!--</div>-->
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
    
    
    
    <!--Clients Sections Start-->
    <div class="clientsSection boxs p80sec pb-0">
        <div class="container">
            <div class="clientsSectionBox boxs">
                <div class="mainSecHeading topSectionHead boxs">
                    <div class="secHeadingLeft secHeadingLeftNew boxs">
                        <span class="smallSubHeading fontSize18">Meet Our Clients</span>
                        <h2 class="fontSize38 boxs">
                            <span class="gradientText">"They Dared To Dream, We Dared To Build."</span>
                            <br />
                            Meet the faces behind the names: Get closer to the businesses we empower and the stories we share.
                        </h2>
                    </div>
                </div>
                <div class="clientsSectionChild boxs">
                    <div class="clientsVisitBox boxs">
                        <div class="clientVisitList boxs">
                             <div class="clientVisitDetails">
                                <div class="clientBrandDetail boxs">
                                    <span class="clientBrandName boxs fontSize24 boldFontFace">Klaudia Duszyńska</span>
                                    <p class="visitedClientName fontSize14 boxs">CEO, Hollywood Hair</p>
                                    <p class="visitedClientInfo fontSize16 boxs">Hollywood Hair is a company that leads with specialised expertise in the hair industry.</p>
                                </div>
                                <span class="viewClientVideo boxs">
                                    <a class="btnStyle smallBtn newBtnStyle onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/poster-hollywoodhair.webp'); ?>" video-url="<?php echo url('public/front/images/videos/video-hollywoodhair.mp4'); ?>"><i class="fas fa-play"></i> Watch</a>
                                </span>
                             </div>
                             <div class="clientVisitImage">
                                 <img src="<?php echo url('public/front/images/clientVisit.webp'); ?>" class="img-fluid" alt="Client Image">
                             </div>
                        </div>
                        <div class="clientVisitList boxs">
                             <div class="clientVisitDetails">
                                <div class="clientBrandDetail boxs">
                                    <span class="clientBrandName boxs fontSize24 boldFontFace">Johann van Biljon</span>
                                    <p class="visitedClientName fontSize14 boxs">CEO, Road Trip Tribes</p>
                                    <p class="visitedClientInfo fontSize16 boxs">Road Trip Tribe is all about  icreating memorable trips with optimised routes.</p>
                                </div>
                                <span class="viewClientVideo boxs">
                                    <a class="btnStyle smallBtn newBtnStyle onClientVideoPopup" poster-url="<?php echo url('public/front/images/videos/poster-gpx.webp'); ?>" video-url="<?php echo url('public/front/images/videos/video-gpx.mp4'); ?>"><i class="fas fa-play"></i> Watch</a>
                                </span>
                            </div>
                            <div class="clientVisitImage">
                                <img src="<?php echo url('public/front/images/clientVisit2.webp'); ?>" class="img-fluid" alt="Client Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Clients Sections End-->
    
    

    <!-- About us Slider Start -->
    <div class="aboutUsSec2 ourTestimonilsBox boxs ourTestimonilsBoxNew d-none">
        <div class="container">
            <div class="aboutUsSecInner boxs">
                <div class="mainSecHeading topSectionHead boxs">
                    <div class="secHeadingLeft secHeadingLeftNew boxs">
                        <span class="smallSubHeading fontSize18">Client Testimonial</span>
                        <h2 class="fontSize38 boxs">Don’t take our word for it. Trust our customers.</h2>
                    </div>
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
                                    <div class="newtestimonialLeft newtestimonialLeftUpdate">
                                        <img src="<?php echo url('public/front/images/testimonialQuoteNew.png'); ?>" class="img-fluid" alt="Client Image" />
                                    </div>
                                    <div class="newTestimonialRight boxs">
                                        <div class="testimonialQuotes boxs">
                                            <img src="<?php echo url('public/front/images/testimonialQuote.webp'); ?>" alt="Quote"/>
                                        </div>
                                        <div class="newTestContent boxs">
                                            <h3 class="fontSize18 newTestimonialContent boxs">We hired this company for a complex Transfer project in which we had to have 2 different interconnected APPs and 2 Administration panels connected or API and so far they are complying with what was agreed and living up to our expectations.</h3>
                                            <div class="testimonialByImgMobileSec boxs">
                                                <span class="testimonialByImgMobile"><img src="<?php echo url('public/front/images/testimonialQuoteNew.png'); ?>" class="img-fuid" alt="Image"></span>
                                                <div class="">
                                                    <h3 class="fontSize18 newTestimonialName boxs">Frank Briceño</h3>
                                                    <h4 class="fontSize16 newTestimonialComp boxs">Servicios Coyocan</h4>
                                                </div
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
    </div>
    </div>
    <!-- About us Slider End -->
    
    
    <!-- About us Slider Start -->
    <div class="aboutUsSec2 ourTestimonilsBox boxs ourTestimonilsBoxNew">
        <div class="container">
            <div class="aboutUsSecInner boxs">
                <div class="mainSecHeading topSectionHead boxs mainSecHeadingNewGrid">
                    <div class="secHeadingLeft secHeadingLeftNew boxs">
                        <span class="smallSubHeading fontSize18">Client Testimonial</span>
                        <h2 class="fontSize38 boxs">
                            <span class="gradientText">“Don’t take our word for it. Trust our customers.”</span>
                            <br />
                            Unveiling the Transformative Experiences of Our Valued Customers."
                        </h2>
                    </div>
                </div>
                
                
                <div class="newTestimonialSection boxs">
                    <div class="newTestimonialSlider boxs">
                        <div class="newTestimonailSlide boxs">
                            <div class="newTestimonailSlideChild boxs">
                                <span class="testimonialSlideContent boxs fontSize18">"Designoweb did a fantastic job developing our application. After discussing details and preferences, they delivered the app on time."</span>
                                <div class="testimonialSlideFrom boxs">
                                    <span class="testimonialSlideImage">
                                        <img src="<?php echo url('public/front/images/testimonials/testimonialBuildApp.png'); ?>" class="img-fluid" alt="Image" />
                                    </span>
                                    <span class="testimonialSlideInfo boxs">
                                        <p class="testimonialByName boxs fontSize18">Byron Fergusson</p>
                                        <p class="testimonialByDesig boxs fontSize18">CEO at BuildApp</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="newTestimonailSlide boxs">
                            <div class="newTestimonailSlideChild boxs">
                                <span class="testimonialSlideContent boxs fontSize18">"Locating a responsive and minimalistic website is challenging, but Designoweb effortlessly delivered, working seamlessly and providing impeccable services."</span>
                                <div class="testimonialSlideFrom boxs">
                                    <span class="testimonialSlideImage">
                                        <img src="<?php echo url('public/front/images/testimonials/testimonialBeautisian.png'); ?>" class="img-fluid" alt="Image" />
                                    </span>
                                    <span class="testimonialSlideInfo boxs">
                                        <p class="testimonialByName boxs fontSize18">Nazmul H Azad</p>
                                        <p class="testimonialByDesig boxs fontSize18">CEO at Beautishian</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="newTestimonailSlide boxs">
                            <div class="newTestimonailSlideChild boxs">
                                <span class="testimonialSlideContent boxs fontSize18">“What I like about Designoweb is that how fast and  innovative their ideas are. They've magically brought my ideas to life through a stunning website and app."</span>
                                <div class="testimonialSlideFrom boxs">
                                    <span class="testimonialSlideImage">
                                        <img src="<?php echo url('public/front/images/testimonials/testimonialFuela.png'); ?>" class="img-fluid" alt="Image" />
                                    </span>
                                    <span class="testimonialSlideInfo boxs">
                                        <p class="testimonialByName boxs fontSize18">Mandisi Khumalo</p>
                                        <p class="testimonialByDesig boxs fontSize18">CEO at Fuela</p>
                                    </span>
                                </div>
                            </div>
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
    
    <!--New Blogs Section Start-->
    <div class="newBlogsSection boxs p80sec pt-0 d-nones">
        <div class="container">
            <div class="newBlogsChild boxs">
                <div class="blogsSectionLeft boxs">
                    <div class="mainSecHeading topSectionHead boxs">
                        <div class="secHeadingLeft secHeadingLeftNew boxs">
                            <span class="smallSubHeading fontSize18">Our Latest Articles</span>
                            <h2 class="fontSize38 boxs">Dive into the World of Technology with our Blogs</h2>
                            <p class="smallSubHeadingText fontSize18 boxs">Dive deep into the ever-evolving world of technology through our insightful blogs. Explore trends, innovations, and expert perspectives in every click.</p>
                        </div>
                    </div>
                    <div class="newBlogsList boxs">
                        <div class="newBlogsListChild boxs">
                            <?php if (!empty($highlighted_blogs)) {
                                foreach ($highlighted_blogs as $blog) { ?>
                                    <!--<div class="newBlogsListItem boxs">-->
                                    <!--    <div class="newBLogCardImage boxs">-->
                                    <!--        <img src="https://lh3.googleusercontent.com/d/1PYyif6Cdr5m7G9wH-VoVL8zMQfrp0WCt=s220?authuser=0" alt="image" class="img-fluid w-100">-->
                                    <!--    </div>-->
                                    <!--    <div class="newBlogCardContent boxs">-->
                                    <!--        <div class="newBlogCardDetail boxs">-->
                                    <!--            <span class="newBlogDate boxs fontSize18"><?php echo !empty($blog->added_date) ? date('d F Y', strtotime($blog->added_date)) : null; ?></span>-->
                                    <!--            <h3 class="newBlogTitle fontSize20 boxs"><?php echo !empty($blog->blog_title) ? $blog->blog_title : null; ?></h3>-->
                                    <!--        </div>-->
                                    <!--        <div class="customRedirection boxs">-->
                                    <!--            <a href="" class="customRedirectLink fontSize18">-->
                                    <!--                <span class="linkTextContent">Read More</span>-->
                                    <!--                <span class="arrowIcn">-->
                                    <!--                    <svg width="13" height="13" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                                    <!--                        <path d="M1.70573 14.7399L0 13.0211L10.3646 2.63053H2.40885L2.43489 0.260742H14.4531V12.305H12.0703L12.0833 4.34929L1.70573 14.7399Z" fill="#EF402F"/>-->
                                    <!--                    </svg>-->
                                    <!--                </span>-->
                                    <!--            </a>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                <?php }
                            } ?>
                            <div class="newBlogsListItem boxs">
                                <div class="newBLogCardImage boxs">
                                    <img src="https://lh3.googleusercontent.com/d/1PYyif6Cdr5m7G9wH-VoVL8zMQfrp0WCt=s220?authuser=0" alt="image" class="img-fluid w-100">
                                </div>
                                <div class="newBlogCardContent boxs">
                                    <div class="newBlogCardDetail boxs">
                                        <span class="newBlogDate boxs fontSize18">24 January 2024</span>
                                        <h3 class="newBlogTitle fontSize20 boxs">Code, Conquer, Celebrate: Designoweb’s 2023 Wrapped Up</h3>
                                    </div>
                                    <div class="customRedirection boxs">
                                        <a href="https://designoweb.com/blog-detail/code-conquer-celebrate-designoweb-s-2023-wrapped-up" class="customRedirectLink fontSize18">
                                            <span class="linkTextContent">Read More</span>
                                            <span class="arrowIcn">
                                                <svg width="13" height="13" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.70573 14.7399L0 13.0211L10.3646 2.63053H2.40885L2.43489 0.260742H14.4531V12.305H12.0703L12.0833 4.34929L1.70573 14.7399Z" fill="#EF402F"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="newBlogsListItem boxs">
                                <div class="newBLogCardImage boxs">
                                    <img src="https://lh3.googleusercontent.com/d/1tq0EDHrW7HViof8m4v9lDrJajRnxtvPq?authuser=0" alt="image" class="img-fluid w-100">
                                </div>
                                <div class="newBlogCardContent boxs">
                                    <div class="newBlogCardDetail boxs">
                                        <span class="newBlogDate boxs fontSize18">10 January 2024</span>
                                        <h3 class="newBlogTitle fontSize20 boxs">GITEX Global 2023: Where Tech Meets Tomorrow</h3>
                                    </div>
                                    <div class="customRedirection boxs">
                                        <a href="https://designoweb.com/blog-detail/gitex-global-2023-where-tech-meets-tomorrow" class="customRedirectLink fontSize18">
                                            <span class="linkTextContent">Read More</span>
                                            <span class="arrowIcn">
                                                <svg width="13" height="13" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.70573 14.7399L0 13.0211L10.3646 2.63053H2.40885L2.43489 0.260742H14.4531V12.305H12.0703L12.0833 4.34929L1.70573 14.7399Z" fill="#EF402F"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="moreBlogsBox boxs">
                             <a href="<?php echo url('/blogs') ?>" class="btnStyle smallBtn newBtnStyle newTransparentBtn">More Articles</a>
                        </div>
                    </div>
                </div>
                <div class="blogsSectionRight boxs">
                    <span class="customBlogSectionImage boxs" style="background-image: url('https://lh3.googleusercontent.com/d/1TuHWV6_2IbRZClwDw5KRiGZYhyMu-ITo?authuser=0'); background-repeat: no-repeat"></span>
                    <div class="customBlogDetails newBlogCardContent boxs">
                        <div class="newBlogCardDetail boxs">
                            <span class="newBlogDate boxs fontSize18 colorWhite">15 December 2023</span>
                            <h3 class="newBlogTitle fontSize20 boxs colorWhite">A Collaborative Journey Across Europe</h3>
                        </div>
                        <div class="customRedirection boxs">
                            <a href="https://designoweb.com/blog-detail/a-collaborative-journey-across-europe" class="customRedirectLink customRedirectLinkWhite fontSize18">
                                <span class="linkTextContent">Read More</span>
                                <span class="arrowIcn">
                                    <svg width="13" height="13" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.70573 14.7399L0 13.0211L10.3646 2.63053H2.40885L2.43489 0.260742H14.4531V12.305H12.0703L12.0833 4.34929L1.70573 14.7399Z" fill="#FFFFFF"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--New Blogs Section End-->
    
    <!-- Query Section Start -->
    <div class="querySection bgGrey5 boxs">
        <x-query_section></x-query_section>
    </div>
    <!-- Query Section End -->
    
    
    <div class="newQueryForm querySection querySectionNew boxs d-none">
        <div class="container">
            <div class="queryBoxs boxs">
                <div class="queryInnerBox flexBox boxs">
                    <div class="queryLeft">
                        <div class="boxs">
                            <div class="mainSecHeading boxs">
                                <span class="smallSubHeading fontSize18">We Help to Enhance your Business</span>
                                <h2 class="fontSize38 boxs">Request Free Consultation</h2>
                                
                            </div>
                            <div class="queryInfoBox boxs">
                                <div class="queryLists queryListsNew boxs mt-0">
                                    <ul>
                                        <li class="fontSize18 boxs">On-call assistance in all time zones</li>
                                        <li class="fontSize18 boxs">Projects counseling by specialists</li>
                                        <li class="fontSize18 boxs">Detail project assessment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="queryInfoBanner boxs">
                            <img src="https://lh3.googleusercontent.com/d/1cOlBUThE5E5ijKOrv-nwdgU5imkGMNow?authuser=0" class="img-fluid" alt="Query Banner" loading="lazy"/>
                        </div>
                    </div>
                    <div class="queryRight boxs">
                        <div class="queryformHeading boxs">
                            <span class="fontSize38 boxs text-center">Have a Query?</span>
                        </div>
                        <div class="queryForm boxs">
                            <form class="formDesign formDesign2 boxs formDesignUpdated" id="submit-form" action="<?php // echo route('front/send_consultation_mail'); ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="formFullSection">
                                    <div class="form-group boxs formHalfSection">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" id="userName" name="userName" placeholder="" />
                                    </div>
                                    <div class="form-group boxs formHalfSection">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="" />
                                    </div>
                                </div>
                                
                                <div class="form-group boxs">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="" />
                                </div>
                                
                                <div class="form-group boxs">
                                    <label>Phone Number</label>
                                    <input type="number" class="form-control" id="userPhone" name="userPhone" placeholder="" />
                                </div>
                                <div class="form-group boxs">
                                    <label>Requirements</label>
                                    <textarea rows="4" class="form-control" id="userRequirement" name="userRequirement" placeholder=""></textarea>
                                </div>
                                <div class="form-group form-group2 boxs">
                                    <div class="g-recaptcha" id="g-recaptcha" name="g-recaptcha" data-sitekey="6LcWPtghAAAAAMeNPgulr6ZifhyOr--_XIl9SB-R"></div>
                                </div>
                                <div class="formBtn boxs mt-0">
                                    <button type="submit" class="btnStyle smallBtn smallBtn3 btnStyle3 blueBtnNew">Submit<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></button>
                                </div>
                                
                                <!--<div class="form-group boxs">-->
                                <!--    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" />-->
                                <!--</div>-->
                                <!--<div class="form-group boxs">-->
                                <!--    <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" />-->
                                <!--</div>-->
                                
                                <!--<div class="form-group boxs">-->
                                <!--    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />-->
                                <!--</div>-->
                                <!--<div class="form-group boxs">-->
                                <!--    <textarea rows="4" class="form-control" id="requirements" name="requirements" placeholder="Requirements"></textarea>-->
                                <!--</div>-->
                                <!--<div class="form-group form-group2 boxs">-->
                                <!--    <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LcWPtghAAAAAMeNPgulr6ZifhyOr--_XIl9SB-R"></div>-->
                                <!--    <div id="g-recaptcha" class="g-recaptcha"></div>-->
                                <!--</div>-->
                                <!--<div class="formBtn boxs">-->
                                <!--    <button type="submit" class="btnStyle">Submit<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></button>-->
                                <!--</div>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>

    
@endsection