@extends('front/layout')
@section('content')

@push('scalie_css')
<link href="<?php echo url('public/front/css/scalie/style.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
<link href="<?php echo url('public/front/css/scalie/media.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
@endpush

<div class="mainBody sectionTop scaliePage boxs">
    <!-- Main Banner Start -->
    <div class="mainBanner partnerBanner boxs">
        <div class="container">
            <div class="bannerSection boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="bannerLeft boxs">
                            <h1 class="headingFont boxs">Stop worrying about <br>your Bench Resources. <br><span class="primaryColor">Partner with us 🤝</span></h1>
                            <h4 class="subHeadingFont fontSize18 boxs">With Designoweb Technologies your never have to worry about your unutilized resources. Partner with us and never loose a penny on your bench resources. We will utilise them by bringing valueable contracts.</h4>
                            <span class="hireDeveloperBtn hireDeveloperBtnNew boxs">
                                <a href="https://partner.scalie.io/auth/signup" class="btnStyle">Signup as a Partner</a>
                                <a href="<?php echo url('step1') ?>" class="btnStyle">Start Hiring</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="bannerRight boxs">
                            <span class="boxs"><img src="<?php echo url('public/front/images/scalie/partnerBanner.png') ?>" class="img-fluid" alt="Banner Image"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--Main Banner End -->
    
    <!--<div class="formSections signupSection signupSection2 signupSectionNew boxs blueBg d-none">-->
    <!--     <div class="container">-->
    <!--        <div class="formInnerBox boxs">-->
    <!--            <div class="row">-->
    <!--                <div class="col-sm-12 col-md-12 col-lg-6">-->
    <!--                    <div class="bodyLeftContent boxs">-->
    <!--                        <div class="sectionHeading sectionHeading2 boxs">-->
    <!--                            <h2 class="fontSize36 boxs colorWhite">Signup as a <span class="primaryColor">Designoweb Partner</span> and your Bench Resourses will never be liabilities again</h2>-->
    <!--                            <span class="fontSize20 boxs colorWhite lightFont">Your full-time resources will always be an asset for you as you can deploy your Bench Resources on contractual basis for remote talent requirements with Scalie</span>-->
    <!--                            <span class="formSecBanner boxs"><img src="<?php // echo url('public/front/images/scalie/signUpBanner.png') ?>" class="img-fluid" alt="Banner Image"></span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-sm-12 col-md-12 col-lg-6">-->
    <!--                    <div class="bodyFormBox boxs">-->
    <!--                        <div class="formBox boxs">-->
    <!--                            <div class="formTopBox boxs">-->
    <!--                                <div class="formMainHeading boxs">-->
    <!--                                    <h3 class="fontSize24 boxs"><span><img src="<?php // echo url('public/front/images/scalie/logIcons.png') ?>" class="img-fluid" alt="Icon"></span>Sign up as Partner</h3>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <form class="formDesign boxs" id="common-form" method="post" action="<?php // echo url('Front/doSignUp') ?>">-->
    <!--                                <div class="error_msg"></div>-->
    <!--                                <div class="form-group formGroupInner boxs">-->
    <!--                                    <label>Your Name*</label>-->
    <!--                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">-->
    <!--                                </div>-->
    <!--                                <div class="form-group formGroupInner boxs">-->
    <!--                                    <label>Company Name*</label>-->
    <!--                                    <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Company Name">-->
    <!--                                </div>-->
    <!--                                <div class="form-group formGroupInner boxs">-->
    <!--                                    <label>Company Email*</label>-->
    <!--                                    <input type="email" id="company_email" name="company_email" class="form-control" placeholder="example@gmail.com">-->
    <!--                                </div>-->
    <!--                                <div class="form-group formGroupInner boxs">-->
    <!--                                    <div class="row">-->
    <!--                                        <div class="col-sm-6 formGroupSec">-->
    <!--                                            <div class="boxs">-->
    <!--                                                <label>Company Size*</label>-->
    <!--                                                <select class="form-control sel-form form-select" id="company_size" name="company_size">-->
    <!--                                                    <option value="">Select Company Size</option>-->
    <!--                                                    <option value="0-20">0-20</option>-->
    <!--                                                    <option value="20-50">20-50</option>-->
    <!--                                                    <option value="50-10">50-100</option>-->
    <!--                                                    <option value="more_than_100">More than 100</option>-->
    <!--                                                </select>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-sm-6 formGroupSec">-->
    <!--                                            <div class="boxs">-->
    <!--                                                <label>Contact Number*</label>-->
    <!--                                                <input type="text" id="contactNumber" name="contactNumber" class="form-control" placeholder="Contact Number">-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="form-group companyAddress boxs">-->
    <!--                                    <label>Address*</label>-->
    <!--                                    <div class="row">-->
    <!--                                        <div class="col-sm-6 formGroupSec">-->
    <!--                                            <div class="formGroupInner boxs">-->
    <!--                                                <select class="form-control sel-form form-select" id="country_id" name="country_id" data-url="<?php //echo url('Front/GetStateByCountryId'); ?>">-->
    <!--                                                    <option value="">Select Country</option>-->
    <!--                                                   
    <!--                                                   // } ?>
    <!--                                                </select>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-sm-6 formGroupSec">-->
    <!--                                            <div class="formGroupInner boxs">-->
    <!--                                                <select class="form-control sel-form form-select" id="state_id" name="state_id" data-url="<?php echo url('Front/getCityByStateId'); ?>">-->
    <!--                                                    <option value="">Select State</option>-->
    <!--                                                   
    <!--                                                </select>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-sm-6 formGroupSec">-->
    <!--                                            <div class="formGroupInner boxs">-->
    <!--                                                <select class="form-control sel-form form-select" id="city_id" name="city_id">-->
    <!--                                                    <option value="">Select City</option>-->
    <!--                                                </select>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-sm-12 mb-0">-->
    <!--                                            <div class="formGroupInner boxs">-->
    <!--                                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="form-group formGroupInner boxs">-->
    <!--                                    <label>Password*</label>-->
    <!--                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">-->
    <!--                                    <span class="passwordConditions boxs fontSize12">At least 6 characters, 1 Number and 1 Special Character</span>-->
    <!--                                </div>-->
    <!--                                <div class="form-group formGroupInner boxs">-->
    <!--                                    <label>Confirm Password*</label>-->
    <!--                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password">-->
    <!--                                </div>-->
    <!--                                <div class="formButton boxs mb-4">-->
    <!--                                    <button class="boxs btnStyle" href="<?php // echo url() ?>">Sign Up</button>-->
    <!--                                </div>-->
    <!--                                <div class="form-group mb-0 boxs">-->
    <!--                                    <span class="fontSize14 acceptBox boxs text-center">Creating an account implies that you accept to our <span><a href="<?php echo url('terms') ?>" target="_blank">Terms of Service</a></span>, <span><a href="<?php echo url('privacy') ?>" target="_blank">Privacy Policy</a></span></span>-->
    <!--                                </div>-->
    <!--                            </form>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--     </div>-->
    <!--</div>-->
    
    

    <div class="shareServices padding75 boxs">
        <div class="container">
            <div class="shareServicesBox boxs">
                <div class="shareServiceLeft boxs">
                    <span class="leftHeading fotnSize18 boxs text-right">Add your Bench to our Remote Talent Cloud</span>
                    <div class="servicesLists boxs">
                        <ul>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techAngular.png') ?>" class="img-fluid" alt="Service Icon"></span>Frontend Engineers</li>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techBlockchain.png') ?>" class="img-fluid" alt="Service Icon"></span>Big Data and ML Engineers</li>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techDataAnalysts.png') ?>" class="img-fluid" alt="Service Icon"></span>Data Analysts</li>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techUXDesigners.png') ?>" class="img-fluid" alt="Service Icon"></span>UI/UX Designers</li>
                            <li><span class="fontSize18">
                                <img src="<?php echo url('public/front/images/scalie/techAndroid.png') ?>" class="img-fluid" alt="Service Icon">
                                <img src="<?php echo url('public/front/images/scalie/techiOS.png') ?>" class="img-fluid" alt="Service Icon">
                                <img src="<?php echo url('public/front/images/scalie/techFlutter.png') ?>" class="img-fluid" alt="Service Icon">
                                </span>Mobile Application Developers</li>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techReact.png') ?>" class="img-fluid" alt="Service Icon"></span>Full-stack developers</li>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techTestEngineers.png') ?>" class="img-fluid" alt="Service Icon"></span>Test Engineers</li>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techDevOps.png') ?>" class="img-fluid" alt="Service Icon"></span>Devops Engineer</li>
                            <li><span class="fontSize18"><img src="<?php echo url('public/front/images/scalie/techPython.png') ?>" class="img-fluid" alt="Service Icon"></span>Backend Developers</li>
                        </ul>
                    </div>
                </div>
                <div class="shareServiceRight sectionHeading sectionHeading2">
                    <h2 class="fontSize32 boxs colorBlack">Being operating an IT Company for a decade, we understand the difficulties to utilisize your Resources around the year</h2>
                    <span class="fontSize18 colorBlack boxs">Designoweb help you reach to 100% resource utilization by leasing out your Bench on contract to Top Global clients. We help you SAVE Lakhs every month and also bring in additional skills for your resources at no additional cost.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Become Partner Start -->
    <div class="becomePartnerBox becomePartnerBox2 padding110 boxs">
        <div class="container">
            <div class="becomePartners boxs">
                <div class="row commonRow">
                    <div class="col-sm-12 col-md-5">
                        <div class="becomePartnersLeft boxs">
                            <span class="becomePartnersHeading boxs">
                                <h2 class="fontSize36 boxs">Why become a Partner?</h2>
                            </span>
                            <span class="becomePartnersContent boxs">
                                <h5 class="fontSize18 lightFont boxs">Designoweb holds a client base of 500+ companies with more than 1500+ active requirements round the year.</h5>
                                <h5 class="fontSize18 lightFont boxs">So now you can expand your team without the stress of getting them 100% utilised round the year. Designoweb will make sure that your amazing talent is never being paid off from your pocket. We deploy these resources on short & long term contracts so you can focus on expansion with zero liabilities.</h5>
                            </span>
                            <span class="becomePartnerLinks boxs"><a class="btnStyle" href="https://partner.scalie.io/auth/signup">Signup as a Partner</a></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="becomePartnersRight boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile5.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">Global Client Base</span>
                                        <span class="partnerTileDetail fontSize16 boxs">We have clients from 18+ countries that need your talent in a complete Remote environment</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile6.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">Save & Earn Revenue</span>
                                        <span class="partnerTileDetail fontSize16 boxs">Save money on your Bench Resources and rather earn from them by marking up the salaries</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile7.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">Maximize Revenue</span>
                                        <span class="partnerTileDetail fontSize16 boxs">With Zero loss on Resource Utlization, you can maximise the revenue generated by your team</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile8.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">Get Paid the Right Price</span>
                                        <span class="partnerTileDetail fontSize16 boxs">Amazing talents should never be underpaid. Always receive the Best Quote for your Team</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Become Partner End -->

    <!-- Easy Hiring Start -->
    <div class="easyHiring easyHiring2 boxs padding75">
        <div class="container">
            <div class="sectionHeading sectionHeading2">
                
                <h2 class="fontSize36 boxs colorWhite colorWhite">Become a Designoweb Partner with 4 Easy Steps</h2>
                <span class="fontSize18 colorWhite boxs lightFont">Designoweb Partners Save upto 28% annual revenue by utilizing their Bench Resources</span>
            </div>
            <div class="easyHiringBox boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">1</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize20 boxs">Create Account</h5>
                                <p class="fontSize16 boxs">Signup with Designoweb and create your Partner account by providing necessary details</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">2</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize20 boxs">Add Bench Resources</h5>
                                <p class="fontSize16 boxs">Add your Team & Create detailed skill reports with our CV builder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">3</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize20 boxs">Get Shortlisted</h5>
                                <p class="fontSize16 boxs">As soon as your resources are shortlisted by clients, we will get the screening scheduled</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">3</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize20 boxs">Start the Contract</h5>
                                <p class="fontSize16 boxs">Clear the screening and you will be all set to start billing your Bench Resources </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Easy Hiring End -->

    <!-- Profile View Start -->
    <div class="profileViewBox profileViewBox2 padding75 boxs">
        <div class="container">
            <div class="sectionHeading sectionHeading2 boxs">
                <h2 class="fontSize36 boxs ">Showcase detailed Skill Set of your Developers</h2>
                <span class="fontSize18 boxs lightFont">Our advance Resource Profile Builder will ensure that your developers are presented with their <br>entire skill set, experience & projects. It increases the hireability by 40%</span>
            </div>
            <div class="profileViewInner boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="profileView boxs">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="profileViewTop boxs">
                                        <div class="viewTopDeveloper boxs">
                                            <div class="developerImage">
                                                <span><img src="<?php echo url('public/front/images/scalie/techAviral.png') ?>" class="img-fluid" alt="Developer Image"></span>
                                            </div>
                                            <div class="developerDetails boxs">
                                                <span class="developerName boxs fontSize16">Aviral Chauhan</span>
                                                <span class="developerDesignation boxs fontSize12">Salesforce Developer</span>
                                            </div>
                                        </div>
                                        <span class="aboutDeveloper fontSize14 boxs">Aviral is a senior software engineer having 4+ years of experience. He is highly proficient in Salesforce, CRM, SOQL, SFDC and JavaScript.</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="profileViewMid boxs">
                                        <span class="expertRating boxs">
                                            <span class="expertRatings fontSize14"><span class="ratingStar"><i class="fas fa-star"></i></span><span>Expert</span> in</span>
                                        </span>
                                        <div class="expertListing boxs">
                                            <span class="expertListBox">Salesforce</span>
                                            <span class="expertListBox">SOQL</span>
                                            <span class="expertListBox">SFDC</span>
                                            <span class="expertListBox">Java 8</span>
                                            <span class="expertListBox">JS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="profileViewBtm boxs">
                                        <span class="workedHeading fontSize14 boxs">Also worked with</span>
                                        <div class="expertListing boxs">
                                            <span class="expertListBox expertListBox2">Unit Testing</span>
                                            <span class="expertListBox expertListBox2">JUnit</span>
                                            <span class="expertListBox expertListBox2">Mockito</span>
                                            <span class="expertListBox expertListBox2">Maven</span>
                                        </div>
                                        <div class="viewBottomLists boxs">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <span class="viewBtmListsBox boxs">
                                                        <span class="fontSize14 viewListHeading boxs">Experience</span>
                                                        <span class="fontSize16 viewListContent boxs">4.2 years</span>
                                                    </span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span class="viewBtmListsBox boxs">
                                                        <span class="fontSize14 viewListHeading boxs">Availability</span>
                                                        <span class="fontSize16 viewListContent boxs">Immediate</span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="profileView boxs">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="profileViewTop boxs">
                                        <div class="viewTopDeveloper boxs">
                                            <div class="developerImage">
                                                <span><img src="<?php echo url('public/front/images/scalie/techRuchika.png') ?>" class="img-fluid" alt="Developer Image"></span>
                                            </div>
                                            <div class="developerDetails boxs">
                                                <span class="developerName boxs fontSize16">Ruchika Singh</span>
                                                <span class="developerDesignation boxs fontSize12">.NET Developer</span>
                                            </div>
                                        </div>
                                        <span class="aboutDeveloper fontSize14 boxs">Ruchika is a Associate . Net Developer having 3.5 years of experience. She is highly proficient in C#, MVC Framework, NoSQL & Oracle DB. </span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="profileViewMid boxs">
                                        <span class="expertRating boxs">
                                            <span class="expertRatings fontSize14"><span class="ratingStar"><i class="fas fa-star"></i></span><span>Expert</span> in</span>
                                        </span>
                                        <div class="expertListing boxs">
                                            <span class="expertListBox">MVC</span>
                                            <span class="expertListBox">Oracle</span>
                                            <span class="expertListBox">NoSQL</span>
                                            <span class="expertListBox">F#</span>
                                            <span class="expertListBox">Crystal Report</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="profileViewBtm boxs">
                                        <span class="workedHeading fontSize14 boxs">Also worked with</span>
                                        <div class="expertListing boxs">
                                            <span class="expertListBox expertListBox2">Javascript</span>
                                            <span class="expertListBox expertListBox2">Bootstrap</span>
                                            <span class="expertListBox expertListBox2">Github</span>
                                            <span class="expertListBox expertListBox2">AWS</span>
                                        </div>
                                        <div class="viewBottomLists boxs">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <span class="viewBtmListsBox boxs">
                                                        <span class="fontSize14 viewListHeading boxs">Experience</span>
                                                        <span class="fontSize16 viewListContent boxs">3.5 years</span>
                                                    </span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span class="viewBtmListsBox boxs">
                                                        <span class="fontSize14 viewListHeading boxs">Availability</span>
                                                        <span class="fontSize16 viewListContent boxs">Immediate</span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="profileView boxs">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="profileViewTop boxs">
                                        <div class="viewTopDeveloper boxs">
                                            <div class="developerImage">
                                                <span><img src="<?php echo url('public/front/images/scalie/techRachit.png') ?>" class="img-fluid" alt="Developer Image"></span>
                                            </div>
                                            <div class="developerDetails boxs">
                                                <span class="developerName boxs fontSize16">Rachit Srivastava</span>
                                                <span class="developerDesignation boxs fontSize12">Full Stack Developer</span>
                                            </div>
                                        </div>
                                        <span class="aboutDeveloper fontSize14 boxs">Rachit is a Sr. Full Stack Developer having 8+ years of experience. He is highly proficient in CI/CD Node JS, React.js, Express, MongoDB and AWS</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="profileViewMid boxs">
                                        <span class="expertRating boxs">
                                            <span class="expertRatings fontSize14"><span class="ratingStar"><i class="fas fa-star"></i></span><span>Expert</span> in</span>
                                        </span>
                                        <div class="expertListing boxs">
                                            <span class="expertListBox">AWS</span>
                                            <span class="expertListBox">Node</span>
                                            <span class="expertListBox">React</span>
                                            <span class="expertListBox">Express</span>
                                            <span class="expertListBox">Mongo</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="profileViewBtm boxs">
                                        <span class="workedHeading fontSize14 boxs">Also worked with</span>
                                        <div class="expertListing boxs">
                                            <span class="expertListBox expertListBox2">PHP Laravel</span>
                                            <span class="expertListBox expertListBox2">Socket.io</span>
                                            <span class="expertListBox expertListBox2">Github</span>
                                            <span class="expertListBox expertListBox2">HTML</span>
                                        </div>
                                        <div class="viewBottomLists boxs">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <span class="viewBtmListsBox boxs">
                                                        <span class="fontSize14 viewListHeading boxs">Experience</span>
                                                        <span class="fontSize16 viewListContent boxs">8 years</span>
                                                    </span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span class="viewBtmListsBox boxs">
                                                        <span class="fontSize14 viewListHeading boxs">Availability</span>
                                                        <span class="fontSize16 viewListContent boxs">In 15 Days</span>
                                                    </span>
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
    <!-- Profile View End -->

    <!-- Out Staff Section Start -->
    <div class="outStaffSection padding75 boxs">
        <div class="container">
            <div class="outStaffInner boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="outStaffBanner boxs">
                            <span class="boxs text-center"><img src="<?php echo url('public/front/images/scalie/outStaffBanner.png') ?>" class="img-fluid" alt="Banner Image"></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="outStaffDetails boxs">
                            <div class="sectionHeading sectionHeading2 boxs">
                                <h2 class="fontSize36 boxs colorWhite">Your Bench Talent = { Our Team }</h2>
                                <span class="fontSize18 boxs lightFont colorWhite">Join hands with Designoweb as Partners and never loose a single penny on your Bench Resources. <br>Start deploying your team on amazing projects and also bring added value & experience to your organization.</span>
                            </div>
                            <span class="letsStart boxs"><a href="https://partner.scalie.io/auth/signup" class="btnStyle">Get started</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Out Staff Section End -->

    <!-- Startups Slider Start -->
    <div class="startupsSlider padding75 boxs">
        <div class="startUpSliderTop boxs">
            <div class="container">
                <div class="sectionHeading sectionHeading2 boxs">
                    <h2 class="fontSize36 boxs ">Reviews from Our Designoweb Partners</h2>
                    <span class="fontSize18 lightFont boxs">Read how Designoweb transfomed the Businesses of its <br>Partners by ultilizing the complete bench talent</span>
                </div>
            </div>
        </div>
        <div class="startupSliderBox boxs">
            <div class="startupSlider startupSlider2 boxs">
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="quoteIcon boxs"><img src="<?php echo url('public/front/images/scalie/quoteIcon.png') ?>" class="img-fluid" alt="Icon"></span>
                        <p class="fontSize18 boxs">I don’t understand how they do it but got all the Bench deployed within a week from the day I started working Designoweb. Kudos </p>
                    </div>
                    <div class="slidesBtm boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Ruchika, Noida</span>
                            <span class="clientsCompany boxs fontSize18">Techcraft</span>
                        </span>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="quoteIcon boxs"><img src="<?php echo url('public/front/images/scalie/quoteIcon.png') ?>" class="img-fluid" alt="Icon"></span>
                        <p class="fontSize18 boxs">With Designoweb, I can Hire more resources without thinking if they can ever be a liability to me. They have always got us covered.</p>
                    </div>
                    <div class="slidesBtm boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Rachit, Bangalore</span>
                            <span class="clientsCompany boxs fontSize18">RCoders</span>
                        </span>
                    </div>
                </div>
                <!-- <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="quoteIcon boxs"><img src="<?php // echo url('public/front/images/scalie/quoteIcon.png') ?>" class="img-fluid" alt="Icon"></span>
                        <p class="fontSize18 boxs">Designoweb increased my revenue by 30% by preventing the losses of unutilised Bench Resources. Thanks Team Scalie</p>
                    </div>
                    <div class="slidesBtm boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Bhavik, Noida</span>
                            <span class="clientsCompany boxs fontSize18">Designoweb</span>
                        </span>
                    </div>
                </div> -->
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="quoteIcon boxs"><img src="<?php echo url('public/front/images/scalie/quoteIcon.png') ?>" class="img-fluid" alt="Icon"></span>
                        <p class="fontSize18 boxs">Been quite a while working with Designoweb. Their service is exceptional with good rates and on time payments.</p>
                    </div>
                    <div class="slidesBtm boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Kriti, Ahmedabad</span>
                            <span class="clientsCompany boxs fontSize18">Purple Market</span>
                        </span>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="quoteIcon boxs"><img src="<?php echo url('public/front/images/scalie/quoteIcon.png') ?>" class="img-fluid" alt="Icon"></span>
                        <p class="fontSize18 boxs">I must say Designoweb is on a mission. They are solving a practical problem of this industry and they are bang on track</p>
                    </div>
                    <div class="slidesBtm boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Unnikrishnan, Chennai</span>
                            <span class="clientsCompany boxs fontSize18">Bamboosoft</span>
                        </span>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="quoteIcon boxs"><img src="<?php echo url('public/front/images/scalie/quoteIcon.png') ?>" class="img-fluid" alt="Icon"></span>
                        <p class="fontSize18 boxs">Being a Startup, Bench resources are always a liability. Designoweb has helped us scale to a team of 100 with zero bench on us</p>
                    </div>
                    <div class="slidesBtm boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Ayushi, Jaipur</span>
                            <span class="clientsCompany boxs fontSize18">Trishya Infotech</span>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Startups Slider End -->
    
    <div class="scalieInfo scalieInfo2 boxs">
        <div class="container">
            <div class="scalieInfoInner boxs">
                <span class="fontSize16 mediumFont"><span class="boldFont">580</span> Active Requirements</span>
                <span class="fontSize16 mediumFont"><span class="boldFont">112</span> Customers</span>
                <span class="fontSize16 mediumFont"><span class="boldFont">1056</span> Designoweb Partners</span>
                <span class="fontSize16 mediumFont"><span class="boldFont">134</span> Active Contracts</span>
            </div>
        </div>
    </div>
</div>

@push('scalie_js')
<script src="<?php echo url('public/front/js/scalie/custom.js?v:1.1'); ?>"></script>
@endpush

@endsection