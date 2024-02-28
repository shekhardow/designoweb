@extends('front/layout')
@section('content')

@push('scalie_css')
<link href="<?php echo url('public/front/css/scalie/style.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
<link href="<?php echo url('public/front/css/scalie/media.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
@endpush


<div class="mainBody sectionTop scaliePage boxs">
    <!-- Main Banner Start -->
    <div class="mainBanner boxs">
        <div class="container">
            <div class="bannerSection boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="bannerLeft boxs">
                            <span class="bannerTopSubhead boxs"><span class="fontSize22">Hire India’s Top 1% Talent</span></span>
                            <h1 class="headingFont boxs">Build & Scale your <br><span class="primaryColor">Remote Engineering Team</span> with Designoweb Technologies</h1>
                            <h4 class="subHeadingFont boxs">Our expert team helps you source the best Pre Vetted Tech Resources on Contract without the hassle of hiring process. Scale Teams faster with Top Talents ready to join your Team immediately.</h4>
                            <span class="hireDeveloperBtn boxs"><a href="<?php echo url('step1') ?>" class="btnStyle">Hire Developers</a></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="bannerRight boxs">
                            <span class="boxs"><img src="<?php echo url('public/front/images/scalie/mainBanner.png') ?>" class="img-fluid" alt="Banner Image"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Banner End -->

    <!-- Technology Stack Start -->
    <div class="tecnologyStack padding75 boxs">
        <div class="container">
            <div class="technologiesBox boxs sectionHeading sectionHeading2">
                <h2 class="fontSize36 boxs colorWhite colorBlack mb-0">We have got you covered. Designoweb’s Talent Cloud has Resources available across all leading Tech Stacks</h2>
                <!-- <p class="fontSize22 boxs">Hire programmers who are skilled with all the latest mobile technologies and platforms.</p> -->
            </div>
            <div class="technologiesInner boxs">
                <div class="technologiesSection boxs">
                    <div class="techSections boxs">
                        <h3 class="fontSize22 boxs">Mobile App Developers</h3>
                        <h5 class="fontSize16 boxs">Hire programmers who are skilled with all the latest mobile technologies and platforms. When you hire a coder for mobile app projects, quality and competency is 100% assured. All programmers will be experienced in building great products.</h5>
                        <div class="techListsItems boxs">
                            <div class="techLists boxs">
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techAndroid.png') ?>" alt="Icon" class="img-fluid"></span>Android</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techiOS.png') ?>" alt="Icon" class="img-fluid"></span>iOS</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techReact.png') ?>" alt="Icon" class="img-fluid"></span>React Native</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techFlutter.png') ?>" alt="Icon" class="img-fluid"></span>Flutter</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techIionic.png') ?>" alt="Icon" class="img-fluid"></span>Ionic</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techXamarin.png') ?>" alt="Icon" class="img-fluid"></span>Xamarin</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techKotlin.png') ?>" alt="Icon" class="img-fluid"></span>Kotlin</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techAR.png') ?>" alt="Icon" class="img-fluid"></span>AR/VR</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="techSections boxs">
                        <h3 class="fontSize22 boxs">JavaScript & Frontend Developers</h3>
                        <h5 class="fontSize16 boxs">Hire developers for building web & mobile applications with JavaScript technologies. We ensure all our developers are updated and upskills with the latest versions coming up for all the technologies.</h5>
                        <div class="techListsItems boxs">
                            <div class="techLists boxs">
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techAngular.png') ?>" alt="Icon" class="img-fluid"></span>Angular</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techVue.png') ?>" alt="Icon" class="img-fluid"></span>Vue</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techReact.png') ?>" alt="Icon" class="img-fluid"></span>React</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMEAN.png') ?>" alt="Icon" class="img-fluid"></span>MEAN</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMERN.png') ?>" alt="Icon" class="img-fluid"></span>MERN</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techNuxt.png') ?>" alt="Icon" class="img-fluid"></span>Nuxt</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techElectron.png') ?>" alt="Icon" class="img-fluid"></span>Electron</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techNext.png') ?>" alt="Icon" class="img-fluid"></span>Next</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techReNative.png') ?>" alt="Icon" class="img-fluid"></span>ReNative</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techWebDesigners.png') ?>" alt="Icon" class="img-fluid"></span>Web Designers</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techHTML.png') ?>" alt="Icon" class="img-fluid"></span>HTML</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techTypeScript.png') ?>" alt="Icon" class="img-fluid"></span>TypeScript</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="techSections boxs">
                        <h3 class="fontSize22 boxs">Backend</h3>
                        <h5 class="fontSize16 boxs">Hire software programmers and build scalable, secure and interactive web applications. Designoweb’s Talent Cloud has a lot of experienced Backend Resources that can help you build a robust software base.</h5>
                        <div class="techListsItems boxs">
                            <div class="techLists boxs">
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techPHP.png') ?>" alt="Icon" class="img-fluid"></span>PHP</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techPython.png') ?>" alt="Icon" class="img-fluid"></span>Python</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techLaravel.png') ?>" alt="Icon" class="img-fluid"></span>Laravel</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMEAN.png') ?>" alt="Icon" class="img-fluid"></span>MEAN Stack</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techCodeigniter.png') ?>" alt="Icon" class="img-fluid"></span>Codeigniter</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techDevOps.png') ?>" alt="Icon" class="img-fluid"></span>DevOps</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMERN.png') ?>" alt="Icon" class="img-fluid"></span>MERN Stack</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techSymfony.png') ?>" alt="Icon" class="img-fluid"></span>Symfony</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techCakePHP.png') ?>" alt="Icon" class="img-fluid"></span>Cake PHP</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techCplus.png') ?>" alt="Icon" class="img-fluid"></span>C/C++</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techHadoop.png') ?>" alt="Icon" class="img-fluid"></span>Hadoop</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techGolang.png') ?>" alt="Icon" class="img-fluid"></span>Golang</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techFlask.png') ?>" alt="Icon" class="img-fluid"></span>Flask</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techWPF.png') ?>" alt="Icon" class="img-fluid"></span>WPF</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techGraphQL.png') ?>" alt="Icon" class="img-fluid"></span>GraphQL</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techYii.png') ?>" alt="Icon" class="img-fluid"></span>Yii</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techRoR.png') ?>" alt="Icon" class="img-fluid"></span>RoR</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techJava.png') ?>" alt="Icon" class="img-fluid"></span>Java</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techAppDevelopers.png') ?>" alt="Icon" class="img-fluid"></span>App Developers</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techQATesters.png') ?>" alt="Icon" class="img-fluid"></span>QA Testers</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techSelenium.png') ?>" alt="Icon" class="img-fluid"></span>Selenium</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techAppium.png') ?>" alt="Icon" class="img-fluid"></span>Appium</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techFirebase.png') ?>" alt="Icon" class="img-fluid"></span>Firebase</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techJenkins.png') ?>" alt="Icon" class="img-fluid"></span>Jenkins</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMySQL.png') ?>" alt="Icon" class="img-fluid"></span>MySQL</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMoodle.png') ?>" alt="Icon" class="img-fluid"></span>Moodle</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="techSections boxs">
                        <h3 class="fontSize22 boxs">E-Commerce & CMS</h3>
                        <h5 class="fontSize16 boxs">Hire developers and build software applications with the trending eCommerce technologies.</h5>
                        <div class="techListsItems boxs">
                            <div class="techLists boxs">
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMagento.png') ?>" alt="Icon" class="img-fluid"></span>Magento</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techWordPress.png') ?>" alt="Icon" class="img-fluid"></span>WordPress</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techDrupal.png') ?>" alt="Icon" class="img-fluid"></span>Drupal</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techSitecore.png') ?>" alt="Icon" class="img-fluid"></span>Sitecore</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techSitefinity.png') ?>" alt="Icon" class="img-fluid"></span>Sitefinity</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techUmbraco.png') ?>" alt="Icon" class="img-fluid"></span>Umbraco</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techSharePoint.png') ?>" alt="Icon" class="img-fluid"></span>SharePoint</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techKentico.png') ?>" alt="Icon" class="img-fluid"></span>Kentico</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techWoocommerce.png') ?>" alt="Icon" class="img-fluid"></span>Woocommerce</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techOpencart.png') ?>" alt="Icon" class="img-fluid"></span>Opencart</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techShopify.png') ?>" alt="Icon" class="img-fluid"></span>Shopify</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="techSections boxs">
                        <h3 class="fontSize22 boxs">Blockchain, ML, AI & Data Analytics</h3>
                        <h5 class="fontSize16 boxs">Hire programmers who have excellent development skills in AI, ML & Blockchain.</h5>
                        <div class="techListsItems boxs">
                            <div class="techLists boxs">
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techBlockchain.png') ?>" alt="Icon" class="img-fluid"></span>Blockchain</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techEthereum.png') ?>" alt="Icon" class="img-fluid"></span>Ethereum</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techHyperledger.png') ?>" alt="Icon" class="img-fluid"></span>Hyperledger</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techSmartContract.png') ?>" alt="Icon" class="img-fluid"></span>Smart Contract</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techChatBot.png') ?>" alt="Icon" class="img-fluid"></span>ChatBot</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techTensorflow.png') ?>" alt="Icon" class="img-fluid"></span>Tensorflow</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMachineLearning.png') ?>" alt="Icon" class="img-fluid"></span>Machine Learn...</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techDialogflow.png') ?>" alt="Icon" class="img-fluid"></span>Dialogflow</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techRPA.png') ?>" alt="Icon" class="img-fluid"></span>RPA</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techICO.png') ?>" alt="Icon" class="img-fluid"></span>ICO</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techSolidity.png') ?>" alt="Icon" class="img-fluid"></span>Solidity</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techCryptocurrency.png') ?>" alt="Icon" class="img-fluid"></span>Cryptocurrency</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techMultichain.png') ?>" alt="Icon" class="img-fluid"></span>Multichain</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techStellar.png') ?>" alt="Icon" class="img-fluid"></span>Stellar</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techPowerBl.png') ?>" alt="Icon" class="img-fluid"></span>PowerBl</span></span>
                                <span class="techListBox"><span class="techListItem fontSize16"><span><img src="<?php echo url('public/front/images/scalie/techErc.png') ?>" alt="Icon" class="img-fluid"></span>ERC 720/721</span></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Technology Stack End -->
    
    <!-- Connect With Us Section Start -->
        <div class="connectWithus boxs">
            <div class="container">
                <div class="connectUsInner boxs">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="connectUsLeft boxs">
                                <span class="boxs"><img src="<?php echo url('public/front/images/scalie/connectImg.png') ?>" alt="Image" class="img-fluid" /></span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="connectUsRight boxs">
                                <span class="connectHeading boxs"><h2 class="fontSize36 boxs">Still not sure what's the best technology to build your product?</h2></span>
                                <span class="connectSubHeading boxs"><h5 class="fontSize20 boxs">Book a Free consultation with our Technology Analyst and we will provide the best solution for your product</h5></span>
                                <span class="connectLink boxs"><a class="btnStyle" onclick="Calendly.initPopupWidget({url:'https://calendly.com/garima-36/30min'}); return false;" style="cursor: pointer">Book a Consultation</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Connect With Us Section End -->

    <!-- Company Stats Start -->
    <div class="companyStats boxs">
        <div class="container">
            <div class="statsInner boxs sectionHeading text-center">
                <h2 class="fontSize36 boxs colorWhite">Statistics can't measure the Satisfaction of Designoweb’s Clients</h2>
                <p class="fontSize20 boxs lightFont colorWhite">Our processes are simple and transparent bringing in high demands for our <br>resources and increasing the list of repeat customers.</p>
            </div>
            <div class="statsSection boxs">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="statsBox boxs">
                            <h4 class="fontSize48 boxs primaryColor">1500+</h4>
                            <h6 class="fontSize18 boxs">Available Resources</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="statsBox boxs">
                            <h4 class="fontSize48 boxs primaryColor">25+</h4>
                            <h6 class="fontSize18 boxs">Skills available</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="statsBox boxs">
                            <h4 class="fontSize48 boxs primaryColor">85%</h4>
                            <h6 class="fontSize18 boxs">Repeat Customers</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="statsBox boxs">
                            <h4 class="fontSize48 boxs primaryColor">200+</h4>
                            <h6 class="fontSize18 boxs">Clients Served</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Company Stats End -->

    <!-- Why Choose Us Start -->
    <div class="forClientsBox padding75 boxs">
        <div class="container">
            <div class="boxs sectionHeading sectionHeading3">
                <span class="fontSize18 boxs mediumFont primaryColor mb-2">For Clients</span>
                <h2 class="fontSize36 boxs colorWhite colorBlack">Why choose Us?</h2>
            </div>
            <div class="forClientsTable boxs">
                <table class="table table-responsive ">
                    <thead>
                        <tr>
                            <th>Factors</th>
                            <th>Our Company</th>
                            <th>In - House</th>
                            <th>Freelance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Time to get right developers</td>
                            <td>48 hours</td>
                            <td>4 - 12 weeks</td>
                            <td>1 - 4 weeks</td>
                        </tr>
                        <tr>
                            <td>Time to start a project</td>
                            <td>Within 24 hours</td>
                            <td>1 - 2 weeks</td>
                            <td>1 - 2 weeks</td>
                        </tr>
                        <tr>
                            <td>Recurring cost of training & benefits</td>
                            <td>No Additional Cost</td>
                            <td>$10k - $30k USD</td>
                            <td>No Additional Cost</td>
                        </tr>
                        <tr>
                            <td>Time to Scale size of the team</td>
                            <td>48 hours</td>
                            <td>4 - 12 weeks</td>
                            <td>1 - 4 weeks</td>
                        </tr>
                        <tr>
                            <td>Pricing (Hourly average)</td>
                            <td>1.5x</td>
                            <td>2x</td>
                            <td>1x</td>
                        </tr>
                        <tr>
                            <td>Project failure risk</td>
                            <td>Extremely low</td>
                            <td>Low</td>
                            <td>Very High</td>
                        </tr>
                        <tr>
                            <td>Developers backed by a delivery team</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Dedicated resources</td>
                            <td>Yes</td>
                            <td>-</td>
                            <td>Some</td>
                        </tr>
                        <tr>
                            <td>Quality guarantee</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Tools and professional environment</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Uncertain</td>
                        </tr>
                        <tr>
                            <td>Agile Development Methodology</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Impact Due To Turnover</td>
                            <td>None</td>
                            <td>High</td>
                            <td>High</td>
                        </tr>
                        <tr>
                            <td>Structured Training Programs</td>
                            <td>Yes</td>
                            <td>Some</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Communications</td>
                            <td>Seamless</td>
                            <td>Seamless</td>
                            <td>Uncertain</td>
                        </tr>
                        <tr>
                            <td>Termination Costs</td>
                            <td>None</td>
                            <td>High</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>Assured Work Rigor</td>
                            <td>40 hrs/week</td>
                            <td>Subjective</td>
                            <td>No Assurance</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Start -->

    <!-- Build Team Start -->
    <div class="buildTeamBox buildTeamBox padding110 boxs">
        <div class="container">
            <div class="buildTeamInner boxs">
                <!-- <div class="row"> -->
                    <!-- <div class="col-lg-6 col-xl-7"> -->
                        <div class="buildTeamLeft boxs">
                            <div class="boxs sectionHeading sectionHeading2">
                                <h2 class="fontSize36 boxs colorWhite colorBlack">Build Amazing Teams, On Demand</h2>
                                <span class="fontSize18 boxs regularFont">Quickly assemble the teams you need, exactly when you need them.</span>
                            </div>
                            <div class="sectionPoints boxs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="sectionPointbox boxs">
                                            <h5 class="fontSize18 boxs">Hire Super Fast</h5>
                                            <p class="fontSize16 boxs regularFont">Hire in under 48 hours gauranteed. Scale up anytime. No need to wait for Months. We offer flexible engagements from hourly to full-time contracts.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sectionPointbox boxs">
                                            <h5 class="fontSize18 boxs">Screened & Qualified 1%</h5>
                                            <p class="fontSize16 boxs regularFont">Every Resource at Designoweb has to clear the skill test based on their seniority and experience level. Our internal selection process filters the Top 1% Talent.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sectionPointbox boxs">
                                            <h5 class="fontSize18 boxs">Cultural Fit for Organization</h5>
                                            <p class="fontSize16 boxs regularFont">Our talents pass the cultural fit checks understanding the process to work professionally and provide a much better working experience.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sectionPointbox boxs">
                                            <h5 class="fontSize18 boxs">A+ Communication</h5>
                                            <p class="fontSize16 boxs regularFont">All Resources are screened for both spoken & written English. We ensure that communication will never be a barrier at work anymore.</p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="col-lg-6 col-xl-5"> -->
                        <div class="buildTeamRight boxs">
                            <div class="teamCardBox boxs">
                                <div class="row">
                                    <div class="col-md-8 col-lg-6">
                                        <div class="teamCards boxs">
                                            <span class="teamImage boxs"><img src="<?php echo url('public/front/images/scalie/teamMember.png') ?>" alt="img-fluid" alt="Team Member Image"></span>
                                            <div class="memberDetail boxs">
                                                <span class="memberName boxs fontSize16 primaryColor">Ankita Chauhan</span>
                                                <span class="memberDesignation boxs fontSize12">HR Manager</span>
                                                <span class="memberExp boxs">
                                                    <span class="experienceHeading fontSize14">Experience : </span>
                                                    <span class="totalExperience fontSize14">5 years +</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="teamCards boxs">
                                            <span class="teamImage boxs"><img src="<?php echo url('public/front/images/scalie/teamMember3.png') ?>" alt="img-fluid" alt="Team Member Image"></span>
                                            <div class="memberDetail boxs">
                                                <span class="memberName boxs fontSize16 primaryColor">Kanishk Raj</span>
                                                <span class="memberDesignation boxs fontSize12">Business Analyst</span>
                                                <span class="memberExp boxs">
                                                    <span class="experienceHeading fontSize14">Experience : </span>
                                                    <span class="totalExperience fontSize14">5 years +</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-6">
                                        <div class="teamCards boxs">
                                            <span class="teamImage boxs"><img src="<?php echo url('public/front/images/scalie/teamMember2.png') ?>" alt="img-fluid" alt="Team Member Image"></span>
                                            <div class="memberDetail boxs">
                                                <span class="memberName boxs fontSize16 primaryColor">Anshul Katiyar</span>
                                                <span class="memberDesignation boxs fontSize12">Business Analyst</span>
                                                <span class="memberExp boxs">
                                                    <span class="experienceHeading fontSize14">Experience : </span>
                                                    <span class="totalExperience fontSize14">5 years +</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- Build Team End -->

    <!-- Easy Hiring Start -->
    <div class="easyHiring boxs blackBg padding75">
        <div class="container">
            <div class="sectionHeading sectionHeading2">
                <h2 class="fontSize36 boxs colorWhite colorWhite">Hiring Made Easy</h2>
                <span class="fontSize18 colorWhite boxs">Four easy steps to hire a developer!</span>
                <span class="hiringArror"><img src="<?php echo url('public/front/images/scalie/arrowImage.png') ?>" class="img-fluid" alt="Arrow Image"></span>
            </div>
            <div class="easyHiringBox boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">1</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize18 boxs">Select the Tech Stack & Skills</h5>
                                <p class="fontSize16 boxs">We’ll schedule a call and list your requirements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">2</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize18 boxs">Designoweb will match you with Pre-Screened Resources</h5>
                                <p class="fontSize16 boxs">Get a list of pre-vetted candidates within days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">3</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize18 boxs">Shortlist and Schedule interviews</h5>
                                <p class="fontSize16 boxs">Select the developers you like & interview them</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="hiringSteps boxs">
                            <span class="hiringCounter">4</span>
                            <div class="hiringStepDetail boxs">
                                <h5 class="fontSize18 boxs">Select the Resource & Start working</h5>
                                <p class="fontSize16 boxs">Start building your Product with a no-risk 2 weeks trial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Easy Hiring End -->

    <!-- Profile View Start -->
    <div class="profileViewBox profileViewBoxMain padding75 boxs">
        <div class="container">
            <div class="sectionHeading sectionHeading2 boxs pt-4">
                <h2 class="fontSize36 boxs">Detailed Skills, Experience & Project Analysis</h2>
                <span class="fontSize18 boxs">We dive deep into resource’s Skills, Technologies and past projects to give you a perfect <br>picture of their capabilities. Each resource is Pre-screened based on his Tech Stack.</span>
            </div>
            <div class="profileViewInner boxs">
                <div class="profileView boxs">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="profileViewTop boxs">
                                <div class="viewTopDeveloper boxs">
                                    <div class="developerImage">
                                        <span><img src="<?php echo url('public/front/images/scalie/techShekhar.png') ?>" class="img-fluid" alt="Developer Image"></span>
                                    </div>
                                    <div class="developerDetails boxs">
                                        <span class="developerName boxs fontSize16">Shekhar Pandey</span>
                                        <span class="developerDesignation boxs fontSize12">Java Developer</span>
                                    </div>
                                </div>
                                <span class="aboutDeveloper fontSize14 boxs">Shekhar is a Senior Software Engineer having 6+ years of experience. He is highly proficient in Java with frameworks like Hibernate, Springboot, and Stuts 2</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="profileViewMid boxs">
                                <span class="expertRating boxs">
                                    <span class="expertRatings fontSize14"><span class="ratingStar"><i class="fas fa-star"></i></span><span>Expert</span> in</span>
                                </span>
                                <div class="expertListing boxs">
                                    <span class="expertListBox">Java 8</span>
                                    <span class="expertListBox">Stuts 2</span>
                                    <span class="expertListBox">Spingboot</span>
                                    <span class="expertListBox">Hibernate</span>
                                    <span class="expertListBox">Oracle SOA Suite</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="profileViewBtm boxs">
                                <span class="workedHeading fontSize16 boxs">Also worked with</span>
                                <div class="expertListing boxs">
                                    <span class="expertListBox expertListBox2">JUnit</span>
                                    <span class="expertListBox expertListBox2">Mockito</span>
                                    <span class="expertListBox expertListBox2">Unit Testing</span>
                                    <span class="expertListBox expertListBox2">Maven</span>
                                </div>
                                <div class="viewBottomLists boxs">
                                    <div class="row">
                                         <div class="col-sm-6">
                                            <span class="viewBtmListsBox boxs">
                                                <span class="fontSize14 viewListHeading boxs">Experience</span>
                                                <span class="fontSize16 viewListContent boxs">6 years</span>
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
                <div class="profileView boxs">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="profileViewTop boxs">
                                <div class="viewTopDeveloper boxs">
                                    <div class="developerImage">
                                        <span><img src="<?php echo url('public/front/images/scalie/techBhuvan.png') ?>" class="img-fluid" alt="Developer Image"></span>
                                    </div>
                                    <div class="developerDetails boxs">
                                        <span class="developerName boxs fontSize16">Bhuvan Sharma</span>
                                        <span class="developerDesignation boxs fontSize12">React JS Developer</span>
                                    </div>
                                </div>
                                <span class="aboutDeveloper fontSize14 boxs">Bhuvan is an Associate React JS developer having 4.5 years of experience. He has great handson experience with Redux, Node + NPM, JSX and Git management.</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="profileViewMid boxs">
                                <span class="expertRating boxs">
                                    <span class="expertRatings fontSize14"><span class="ratingStar"><i class="fas fa-star"></i></span><span>Expert</span> in</span>
                                </span>
                                <div class="expertListing boxs">
                                    <span class="expertListBox">Redux</span>
                                    <span class="expertListBox">JSX</span>
                                    <span class="expertListBox">Node + NPM</span>
                                    <span class="expertListBox">ES6</span>
                                    <span class="expertListBox">Github</span>
                                    <span class="expertListBox">AWS Deployment</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="profileViewBtm boxs">
                                <span class="workedHeading fontSize16 boxs">Also worked with</span>
                                <div class="expertListing boxs">
                                    <span class="expertListBox expertListBox2">Bootstrap</span>
                                    <span class="expertListBox expertListBox2">SCSS</span>
                                    <span class="expertListBox expertListBox2">Webflow</span>
                                    <span class="expertListBox expertListBox2">Material UI</span>
                                </div>
                                <div class="viewBottomLists boxs">
                                    <div class="row">
                                         <div class="col-sm-6">
                                            <span class="viewBtmListsBox boxs">
                                                <span class="fontSize14 viewListHeading boxs">Experience</span>
                                                <span class="fontSize16 viewListContent boxs">4.5 years</span>
                                            </span>
                                         </div>
                                         <div class="col-sm-6">
                                            <span class="viewBtmListsBox boxs">
                                                <span class="fontSize14 viewListHeading boxs">Availability</span>
                                                <span class="fontSize16 viewListContent boxs">In 7 days</span>
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
    <!-- Profile View End -->

    <!-- Become Partner Start -->
    <div class="becomePartnerBox boxs">
        <div class="container">
            <div class="becomePartners boxs">
                <div class="row commonRow">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="becomePartnersLeft boxs">
                            <span class="becomePartnerLogo boxs">
                                <img src="<?php echo url('public/front/images/scalie/becomePartner.png') ?>" class="img-fluid" alt="Image">
                            </span>
                            <span class="becomePartnersHeading boxs"><h2 class="fontSize36 boxs">Become a Technical Partner</h2></span>
                            <span class="becomePartnersContent boxs"><h5 class="fontSize18 boxs regularFont">With Designoweb your never have to worry about your unutilized resources. Partner with us and never loose a penny on your bench resources. We will utilise them by bringing valueable contracts.</h5></span>
                            <span class="becomePartnerLinks boxs"><a class="btnStyle" href="<?php echo url('become-partner') ?>">Become a Partner</a></span>
                            <span class="becomePartnersBtm boxs"><img src="<?php echo url('public/front/images/scalie/arrowImage2.png') ?>" class="img-fluid" alt="Image"></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="becomePartnersRight boxs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile1.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">Align your <br>Organization Goals </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile2.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">Expand your Team <br>with Zero Liability</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile3.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">Deploy Resources <br>SuperFast</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="becomePartnersTile boxs">
                                        <span class="partnerTileImg"><img src="<?php echo url('public/front/images/scalie/partnerTile4.png') ?>" class="img-fluid" alt="Image"></span>
                                        <span class="partnerTileText fontSize18 boxs">You are Secure <br>No Talent Poaching</span>
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

    <!-- Startups Slider Start -->
    <div class="startupsSlider padding110 boxs">
        <div class="startUpSliderTop boxs">
            <div class="container">
                <div class="sectionHeading sectionHeading2 boxs">
                    <h2 class="fontSize36 boxs ">Designoweb has helped 100’s of Companies <br>Build & Scale their Engineering Teams</h2>
                    <span class="fontSize18 boxs regularFont">People ❤️  Designoweb. Read what our clients across the globe says about us</span>
                </div>
            </div>
        </div>
        <div class="startupSliderBox boxs">
            <div class="startupSlider boxs">
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">John, England</span>
                            <span class="clientsCompany boxs fontSize18">Property Dash</span>
                        </span>
                        <span class="clientsLogo"><img src="<?php echo url('public/front/images/scalie/clientLogos1.png') ?>" class="img-fluid" alt="Icon"></span>
                    </div>
                    <div class="slidesBtm boxs">
                        <p class="fontSize18 boxs">“Designoweb found me the best backend & AWS guys that I could every get to handle my product. The talents with them is awesome and the best part is the deployment time”</p>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Sermaxhaj, Switzerland</span>
                            <span class="clientsCompany boxs fontSize18">Autobestparts</span>
                        </span>
                        <span class="clientsLogo"><img src="<?php echo url('public/front/images/scalie/clientLogos2.png') ?>" class="img-fluid" alt="Icon"></span>
                    </div>
                    <div class="slidesBtm boxs">
                        <p class="fontSize18 boxs">“Needed an Agile Mobile Team who can adapt my changing ideas and keep building it with me. Designoweb was a great choice to find the perfect devs”</p>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Ramona, Germany</span>
                            <span class="clientsCompany boxs fontSize18">Diabetes Craft</span>
                        </span>
                        <span class="clientsLogo"><img src="<?php echo url('public/front/images/scalie/clientLogos3.png') ?>" class="img-fluid" alt="Icon"></span>
                    </div>
                    <div class="slidesBtm boxs">
                        <p class="fontSize18 boxs">“I was tired with failed outsources then I across Designoweb and got this idea of hiring remote teams with them. I got what I have been waiting for. My Dream Team”</p>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Sreenath, Bangalore</span>
                            <span class="clientsCompany boxs fontSize18">Six30 Labs</span>
                        </span>
                        <span class="clientsLogo"><img src="<?php echo url('public/front/images/scalie/clientLogos4.png') ?>" class="img-fluid" alt="Icon"></span>
                    </div>
                    <div class="slidesBtm boxs">
                        <p class="fontSize18 boxs">“I keep getting constant requirements of developers for my projects. Designoweb is always my go to team. Now I don’t have to struggle between multiple vendors.”</p>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Gaurav, India</span>
                            <span class="clientsCompany boxs fontSize18">Ception</span>
                        </span>
                        <span class="clientsLogo"><img src="<?php echo url('public/front/images/scalie/clientLogos5.png') ?>" class="img-fluid" alt="Icon"></span>
                    </div>
                    <div class="slidesBtm boxs">
                        <p class="fontSize18 boxs">“We are an IT company and not everytime we have all the skills available inhouse. So we use Designoweb to get great talent anytime round the year”</p>
                    </div>
                </div>
                <div class="startupSlides boxs">
                    <div class="slidesTop boxs">
                        <span class="clietnsInfo boxs">
                            <span class="clientName boxs fontSize16">Kinshuk, India</span>
                            <span class="clientsCompany boxs fontSize18">Myytake</span>
                        </span>
                        <span class="clientsLogo"><img src="<?php echo url('public/front/images/scalie/clientLogos6.png') ?>" class="img-fluid" alt="Icon"></span>
                    </div>
                    <div class="slidesBtm boxs">
                        <p class="fontSize18 boxs">“We used Designoweb’s Flutter Resources for an year and the experience has been phenominial. They have such high quality talent with great communication”</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Startups Slider End -->
    
    <!--Faqs Start-->
    <div class="faqSection boxs d-none">
        <div class="container">
            <div class="faqBox boxs">
                <div class="mainSecHeading boxs">
                    <h2 class="fontSize36 boxs">Frequently Asked Question</h2>
                </div>
                <div class="faqDetail boxs">
                    <div class="faqLists boxs">
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">What is IT Staff Augmentation?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>IT Staff Augmentation is a service that allows companies to hire temporary IT professionals to supplement their existing team. These professionals are recruited and managed by a third-party staffing agency, such as ours, and can work on-site or remotely depending on your needs.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">What are the benefits of IT Staff Augmentation?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>IT Staff Augmentation offers many benefits to companies, including the ability to quickly scale up or down their IT resources as needed, access to specialized skills and expertise, reduced recruitment costs and administrative burdens, and increased flexibility to adapt to changing business needs.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">How does the IT Staff Augmentation process work?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>The IT Staff Augmentation process typically involves several steps, including assessing your IT staffing needs, identifying the required skills and expertise, sourcing and recruiting suitable candidates, conducting interviews and assessments, onboarding and training, and ongoing management and support.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">What types of IT professionals can you provide through Staff Augmentation?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>We provide a wide range of IT professionals, including software developers, project managers, network engineers, system administrators, data analysts, cybersecurity experts, and more. We work closely with you to identify your specific needs and find the best candidates to fill those roles.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">How long does the IT Staff Augmentation process take?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>The length of the IT Staff Augmentation process depends on several factors, including the complexity of your staffing needs, the availability of suitable candidates, and the scope of the project. Generally, we aim to provide candidates within a few weeks of receiving a request.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">Can I hire IT staff on a permanent basis through Staff Augmentation?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>Yes, you can hire IT staff on a permanent basis through Staff Augmentation if you wish. We offer both temporary and permanent staffing solutions, depending on your needs.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">How do you ensure the quality of your IT professionals?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>We have a rigorous screening and recruitment process that involves thorough background checks, skills assessments, and technical interviews. We also provide ongoing training and support to ensure that our IT professionals stay up-to-date with the latest technologies and best practices.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">How do you handle confidentiality and security concerns?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>We take confidentiality and security very seriously and have strict policies and procedures in place to protect your data and intellectual property. We also require our IT professionals to sign confidentiality agreements and adhere to our security protocols.</span>
                                </span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">How much does IT Staff Augmentation cost?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize18 boxs">
                                    <span>The cost of IT Staff Augmentation depends on several factors, including the type and level of expertise required, the duration of the engagement, and whether the IT professional will work on-site or remotely. We offer competitive pricing and will work with you to find a solution that fits your budget.</span>
                                    <span>We hope these FAQs have been helpful in answering your questions about IT Staff Augmentation. If you have any further questions or would like to discuss your IT staffing needs, please don't hesitate to contact us.</span>
                                </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Faqs End-->

    <!-- Join Us Start -->
    <div class="joinUsSection padding75 orangeBg boxs">
        <div class="container">
            <div class="joinUsInner boxs text-center">
                <div class="sectionHeading2 boxs">
                    <h2 class="fontSize36 boxs colorWhite">Join hands with the Largest Talent Cloud of <br>Designoweb’s Top 1% Developers</h2>
                </div>
                <div class="joinUsBtm boxs">
                    <span class=""><a class="btnStyle blueBtn" href="<?php echo url('step1') ?>">Hire Developer</a></span>
                    <span class=""><p class="fontSize18 colorWhite">OR</p></span>
                    <span class=""><a class="btnStyle blueBtn" href="<?php echo url('become-partner') ?>">Become a Partner</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Join Us End -->

</div>

@push('scalie_js')
<script src="<?php echo url('public/front/js/scalie/custom.js?v:1.1'); ?>"></script>
@endpush

@endsection