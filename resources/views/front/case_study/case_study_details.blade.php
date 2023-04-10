@extends('front/layout')
@section('content')
<div class="mainBody boxs">
    <!-- Services Banner Start -->
    <div class="caseStudyBanner caseStudyBanner2 mainBanner boxs">
        <span class="studyBannerImage boxs">
            <span style="background: url('<?php echo !empty($case_study_detail->case_banner) ? url('uploads/admin/case_studies/' . $case_study_detail->case_banner) : ''; ?>') no-repeat top right; background-size: cover;"></span>
        </span>
        <div class="container">
            <div class="ourProcBannerBox ourProcBannerBox2 boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mainBannerLeft ourProcBannerLeft boxs">
                            <div class="caseStudyBannetTop boxs">
                                <span class="textRed2 fontSize20 semiboldFont topSubHeading boxs">#CASE STUDY DETAIL</span>
                                <div class="bannerHeading boxs">
                                    <h1 class="ourProcBannerTitle fontSize52 blackFont"><?php echo !empty($case_study_detail->project_name) ? $case_study_detail->project_name : ''; ?></h1>
                                </div>
                                <p class="casestudySubHead fontSize18 fadeBlackFont  boldFont boxs"><?php echo !empty($case_study_detail->tagline) ? $case_study_detail->tagline : ''; ?></p>
                            </div>
                            <div class="ourProcBannerInfoCont boxs">
                                <div class="ourProcBannerInfo">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="studyBannerList boxs">
                                                <p class="fontSize22 semiboldFont boxs">- Industry</p>
                                                <p class="fontSize16 regularfont boxs"><?php echo !empty($case_study_detail->industry) ? $case_study_detail->industry : ''; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="studyBannerList boxs">
                                                <p class="fontSize22 semiboldFont">- Services</p>
                                                <p class="fontSize16 regularfont boxs"><?php echo !empty($case_study_detail->required_services) ? $case_study_detail->required_services : ''; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ourProcBannerInfo">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="studyBannerList boxs">
                                                <p class="fontSize22 semiboldFont">- Business type</p>
                                                <p class="fontSize16 regularfont boxs"><?php echo !empty($case_study_detail->business_type) ? $case_study_detail->business_type : ''; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="studyBannerList boxs">
                                                <p class="fontSize22 semiboldFont">- Build Your Idea</p>
                                                <p class="fontSize16 regularfont boxs"><?php echo !empty($case_study_detail->build_your_idea) ? $case_study_detail->build_your_idea : ''; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="caseMobBanner boxs">
                            <img src="<?php echo !empty($case_study_detail->case_banner) ? url('uploads/admin/case_studies/' . $case_study_detail->case_banner) : ''; ?>" alt="Banner Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Banner End -->

    <!-- Industry Section Start -->
    <div class="indusSecCont boxs">
        <div class="container">
            <div class="indusSec">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="indusInfoCont boxs">
                            <div class="mainSecHeading mainSecHeading3 boxs">
                                <!-- <p class="textRed fontSize18 semiboldFont smallSubHeading">#DESIGNOWEB TECHNOLOGIES</p> -->
                                <h2 class="fontSize48 blackFont">What The Client Wanted</h2>
                            </div>
                            <div class="indusInfoContent boxs">
                                <p class="fontSize24 boxs"><?php echo !empty($case_study_detail->client_requirement) ? $case_study_detail->client_requirement : ''; ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="indusServCont">
                            <div class="indusImg">
                                <img src="<?php echo !empty($case_study_detail->client_wanted_banner) ? url('uploads/admin/case_studies/' . $case_study_detail->client_wanted_banner) : ''; ?>" alt="industry" class="img-fluid" />
                            </div>
                            <h3 class="fontSize30 blackFont">Services</h3>
                            <div class="indusServListsCont">
                                <?php echo $case_study_detail->given_services; ?>
                                <!-- <ul class="indusServList indusServList2">
                                    <li class="fontSize18 boxs">Logo Designing</li>
                                    <li class="fontSize18 boxs">UI/UX Design</li>
                                    <li class="fontSize18 boxs">Android Application</li>
                                    <li class="fontSize18 boxs">Backend Development</li>
                                    <li class="fontSize18 boxs">Quality Analyst</li>
                                    <li class="fontSize18 boxs">Wireframes</li>
                                    <li class="fontSize18 boxs">Web Application</li>
                                    <li class="fontSize18 boxs">iOS Application</li>
                                    <li class="fontSize18 boxs">MVP Development</li>
                                    <li class="fontSize18 boxs">Final Build</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Industry Section End -->

    <!-- Big Image Section Start -->
    <div class="mopStudyBigImgSec boxs">
        <img src="<?php echo !empty($case_study_detail->case_detail_screen_banner) ? url('uploads/admin/case_studies/' . $case_study_detail->case_detail_screen_banner) : ''; ?>" alt="Product Banner" />
    </div>
    <!-- Big Image Section End -->

    <!-- Project Challenges Start -->
    <div class="projChalSec weDeliverBox weDeliverBox2 boxs">
        <div class="container">
            <div class="weDeliverInner boxs">
                <div class="weDeliverContent boxs">
                    <div class="weDeliverTop boxs">
                        <div class="sectionHeading mainSecHeading mainSecHeading3 mainSecHeading6 boxs">
                            <h2 class="fontSize48 boxs pb-0">Project Challenges And Their Quick Fix</h2>
                        </div>
                    </div>
                    <div class="weDeliverListing listcounterSec boxs">
                        <div class="row">
                            <?php if(!empty($case_challenges_detail)){ foreach($case_challenges_detail as $value){ ?>
                                <div class="col-sm-4">
                                    <div class="deliverListBox boxs">
                                        <div class="listCounts boxs">
                                            <span class="listCounter"></span>
                                            <span class="listCounter2"></span>
                                        </div>
                                        <div class="deliverListContent boxs">
                                            <h3 class="fontSize30 boxs"><?php echo !empty($value->challenge) ? $value->challenge : ''; ?></h3>
                                            <p class="fontSize18 boxs"><?php echo !empty($value->solutions) ? $value->solutions : ''; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Challenges End -->

    <!-- Case Study Process Start -->
    <div class="caseProcSecCont boxs">
        <div class="container">
            <div class="caseProcSec">
                <div class="caseProcTitleCont caseProcTitleCont2 boxs">
                    <h2 class="fontSize48 blackFont">Design Layout</h2>
                </div>
                <div class="caseProcDescCont caseProcDescCont2 boxs">
                    <p class="fontSize18 boxs"><?php echo !empty($case_study_detail->design_layout) ? $case_study_detail->design_layout : ''; ?></p>
                </div>
            </div>

            <!-- Agile Process Start -->
            <div class="agileStepsSection p80sec pb-0 boxs">
                <p class="mb-2 textRed fontSize18 semiboldFont">Designoweb Technologies</p>
                <h2 class="agileProcTitle fontSize48 blackFont">Our Process</h2>
                <div class="agileProcStepsCont agileProcStepsCont2">
                    <div class="agileProcStep agileStepOne">
                        <span class="agileStepCircle"><img src="<?php echo url('public/front/img/agile-proc-1.png'); ?>" alt="agile process step 1" class="img-fluid" /></span>
                        <div class="processStepsInner boxs">
                            <span class="innerImg boxs"><img src="<?php echo url('public/front/img/agile-step-img.png'); ?>" class="img-fluid" alt="Image"></span>
                            <span class="innerContent boxs">Concept</span>
                        </div>
                    </div>
                    <div class="agileProcStep agileStepOne">
                        <span class="agileStepCircle"><img src="<?php echo url('public/front/img/agile-proc-2.png'); ?>" alt="agile process step 2" class="img-fluid" /></span>
                        <div class="processStepsInner boxs">
                            <span class="innerImg boxs"><img src="<?php echo url('public/front/img/agile-step-img2.png'); ?>" class="img-fluid" alt="Image"></span>
                            <span class="innerContent boxs">Design</span>
                        </div>
                    </div>
                    <div class="agileProcStep agileStepOne">
                        <span class="agileStepCircle"><img src="<?php echo url('public/front/img/agile-proc-3.png'); ?>" alt="agile process step 3" class="img-fluid" /></span>
                        <div class="processStepsInner boxs">
                            <span class="innerImg boxs"><img src="<?php echo url('public/front/img/agile-step-img3.png'); ?>" class="img-fluid" alt="Image"></span>
                            <span class="innerContent boxs">Development</span>
                        </div>
                    </div>
                    <div class="agileProcStep agileStepOne">
                        <span class="agileStepCircle"><img src="<?php echo url('public/front/img/agile-proc-4.png'); ?>" alt="agile process step 4" class="img-fluid" /></span>
                        <div class="processStepsInner boxs">
                            <span class="innerImg boxs"><img src="<?php echo url('public/front/img/agile-step-img4.png'); ?>" class="img-fluid" alt="Image"></span>
                            <span class="innerContent boxs">DEPLOYMENT</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Agile Process End -->
        </div>
    </div>
    <!-- Case Study Process End -->

    <!-- Case Study Description Start -->
    <div class="caseDescSecCont boxs">
        <div class="container">
            <div class="caseDescContent boxs">
                <h2 class="fontSize38 blackFont">Palette</h2>
                <p class="fontSize20"><?php echo !empty($case_study_detail->palette) ? $case_study_detail->palette : ''; ?></p>
                <h2 class="fontSize38 blackFont">About The Project</h2>
                <p class="fontSize20"><?php echo !empty($case_study_detail->about_project) ? $case_study_detail->about_project : ''; ?></p>
            </div>
        </div>
    </div>
    <!-- Case Study Description End -->

    <!-- Tech Stack Start -->
    <div class="p80sec techStackBox techStackBox2 boxs">
        <div class="container">
            <div class="mainSecHeading mainSecHeading3 boxs">
                <p class="fontSize18 smallSubHeading boxs">TECHNOLOGY STACK</p>
                <h2 class="agileProcTitle mainSubHeading fontSize48 boxs">Technology We Used</h2>
                <p class="fontSize20 boxs"><?php echo !empty($case_study_detail->technology_used) ? $case_study_detail->technology_used : ''; ?></p>
            </div>
            <!-- <div class="techStkCont boxs">
                    <div class="techStkRow">
                        <div class="techStkTitleWrp">
                            <h3>ANDROID</h3>
                        </div>
                        <div class="techStkList caseStudyTechStkList">
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">IDE</p>
                                <p class="fontSize24">Android</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Preferred Language</p>
                                <p class="fontSize24">JAVA</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Architecture</p>
                                <p class="fontSize24">MVP/MVVM Design patterns</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Networking</p>
                                <p class="fontSize24">Retrofit with Rx</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Database if required</p>
                                <p class="fontSize24">FCM</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Push notification</p>
                                <p class="fontSize24">4.4 onwards up to latest android version (Pie)</p>
                            </div>
                        </div>
                    </div>

                    <div class="techStkRow">
                        <div class="techStkTitleWrp">
                            <h3>BACKEND & ADMIN</h3>
                        </div>
                        <div class="techStkList caseStudyTechStkList">
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Hosting</p>
                                <p class="fontSize24">AWS</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Cloud Service</p>
                                <p class="fontSize24">API gateway, IAM, S3</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Programming Language</p>
                                <p class="fontSize24">Node.js</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Framework</p>
                                <p class="fontSize24">Express</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Database</p>
                                <p class="fontSize24">MySQL, ELB/Algolia/Any, Caching</p>
                            </div>
                        </div>
                    </div>

                    <div class="techStkRow">
                        <div class="techStkTitleWrp">
                            <h3>Blockchain Development</h3>
                        </div>
                        <div class="techStkList caseStudyTechStkList">
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Blockchain</p>
                                <p class="fontSize24">Ethereum</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Programming Language</p>
                                <p class="fontSize24">Solidity</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Middleware</p>
                                <p class="fontSize24">Node.js</p>
                            </div>
                            <div class="techStkItem">
                                <p class="fontSize20 semiboldFont">Additional Libraries</p>
                                <p class="fontSize24">web3j, web3.js</p>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
    <!-- Tech Stack End -->

    <!-- About us Slider Start -->
    <div class="aboutUsSection boxs">
        <div class="container">
            <div class="aboutUsSlidebox boxs">
                <div class="aboutSliderBox boxs">
                    <div class="aboutSlider customSlider boxs">
                        <div class="aboutSlides customSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php echo url('public/front/img/sliderQuote.png'); ?>" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs"><?php echo !empty($case_study_detail->client_quote) ? $case_study_detail->client_quote : ''; ?></span>
                                    <span class="quoteBy fontSize20 boxs"><?php echo !empty($case_study_detail->client_name) ? $case_study_detail->client_name : ''; ?></span>
                                    <!-- <span class="quoteCountry fontSize18 boxs"><?php //echo the_field('client_country'); ?></span> -->
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="<?php echo !empty($case_study_detail->client_image) ? url('uploads/admin/case_studies/' . $case_study_detail->client_image) : ''; ?>" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us Slider End -->

    <!-- More Case Studies Section Start -->
    <div class="moreCasesSec productsListsBox boxs">
        <div class="container">
            <h2 class="fontSize48 blackFont">More Case Studies</h2>
            <div class="moreCasesCont">
                <div class="row">
                    <?php if(!empty($case_studies)){ foreach($case_studies as $value){ if($case_study_detail->case_study_id != $value->case_study_id){ ?>
                        <div class="col col-12 col-sm-12 col-md-6">
                            <div class="productsBox boxs">
                                <div class="clientProductImage boxs">
                                    <span class="boxs"><a class="boxs" href="<?php echo route('front/case_study_details',['slug' => $value->slug]); ?>"><img src="<?php echo !empty($value->case_detail_card_image) ? url('uploads/admin/case_studies/' . $value->case_detail_card_image) : ''; ?>" class="img-fluid" alt="Case Image" /></a></span>
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
                    <?php }}} ?>
                    <!-- <div class="col col-12 col-md-6">
                        <div class="anotherCaseCont">
                            <div class="anotherCaseImg">
                                <img src="<?php //echo the_field('more_case_study_banner'); ?>" />
                            </div>
                            <div class="anotherCaseTxt">
                                <h3 class="fontSize30 blackFont"><?php //echo the_title(); ?></h3>
                                <p class="fontSize18 semiboldFont caseStudyDescrip"><?php //echo get_field('about_project_content'); ?></p>
                                <p class="fontSize20"></p>
                                <div class="mt-4">
                                    <a href="<?php //the_permalink(); ?>" class="textRed fontSize18 semiboldFont">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- More Case Studies Section End -->

    <!-- Request a Team Section Start -->
    <div class="reqTeamSec boxs">
        <div class="container">
            <div class="reqTeamCont">
                <div class="row">
                    <div class="col col-12 col-md-7">
                        <div class="reqTeamTxtCont p80sec">
                            <h2 class="fontSize48 blackFont">Request a team presentation</h2>
                            <p class="fontSize24">Designoweb Technologies provides a dedicated team to brands worldwide to create products that your customers will love.</p>
                            <div class="reqTeamBtnCont">
                                <a href="<?php echo route('front/contact'); ?>" class="btnStyle btnStyle2 btnBlue">Book A Session<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-5">
                        <div class="reqTeamImgCont">
                            <img src="<?php echo url('public/front/img/case-study.svg'); ?>" class="img-fluid" alt="Team Presentation" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request a Team Section End -->
</div>
@endsection