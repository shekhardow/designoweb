@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <input type="hidden" class="sectionsScrollId" />
    <!-- Services Banner Start -->
    <div class="serviceBanner mainBanner mainBannerBoxs boxs">
        <div class="container">
            <div class="mainBannerBox serviceBannerBox boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="serviceBannerLeft mainBannerLeft boxs">
                            <div class="bannerHeading boxs">
                                <h1 class="fontSize52">IT Staffing</h1>
                            </div>
                            <p class="bannerSubHeading bannerSubHeading2 bannerSubHeading3 fontSize28 boxs">Unlock Your Business Potential with Our IT Staffing Solutions</p>
                            <p class="bannerSmallContent fontSize18 boxs">Welcome to our IT Staffing Services section, where we specialize in connecting businesses with the best IT talent in the industry. At Designoweb, we understand that your success hinges on having a highly skilled and dedicated IT team. That's why we offer comprehensive staffing solutions tailored to your unique requirements. </p>
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
                            <h2 class="blackFont fontSize48 pb-0">Technical Developers Available With Us</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">Skilled technical developers ready to turn your ideas into reality with expertise in diverse programming languages and frameworks.</p>
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
                                        <h3 class="fontSize30 boxs">Mobile App Developers</h3>
                                        <p class="fontSize18 boxs">Mobile app developers: Ignite Your App's Potential with Designoweb's Mobile App Developers - Harness their expertise and creativity to craft captivating mobile experiences that engage users and drive business growth.</p>
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
                                        <h3 class="fontSize30 boxs">Frontend Developers</h3>
                                        <p class="fontSize18 boxs">Empower Your Digital Presence with Designoweb's Frontend Developers - Let their mastery of design and interactivity bring your website to life, captivating users and leaving a lasting impression.</p>
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
                                        <h3 class="fontSize30 boxs">Backend Developers</h3>
                                        <p class="fontSize18 boxs">Unleash the Power of Seamless Functionality with Designoweb's Backend Developers - Trust in their expertise to build a robust and scalable backend infrastructure that powers your applications and drives seamless user experiences.</p>
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
                                        <h3 class="fontSize30 boxs">Full Stack Developers</h3>
                                        <p class="fontSize18 boxs">Unleash Innovation with Designoweb's Full Stack Developers - Harness their versatile skill set to create end-to-end solutions that combine stunning front-end designs with powerful back-end functionality.</p>
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
                                        <h3 class="fontSize30 boxs">Javascript Developers</h3>
                                        <p class="fontSize18 boxs">Ignite Your Web Applications with Designoweb's Javascript Developers - Tap into their expertise in JavaScript to create dynamic, interactive, and responsive websites that captivate users and elevate your online presence.</p>
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
                                        <h3 class="fontSize30 boxs">Automation Engineers</h3>
                                        <p class="fontSize18 boxs">Accelerate Your Processes with Designoweb's Automation Engineers - Harness their expertise in automating workflows and optimizing efficiency to unlock your business's full potential.</p>
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
                                        <h3 class="fontSize30 boxs">Software Architects</h3>
                                        <p class="fontSize18 boxs">Architect Your Software for Success with Designoweb's Software Architects - Leverage their strategic vision and technical prowess to design scalable and robust software solutions that drive your business forward.</p>
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
                                        <h3 class="fontSize30 boxs">AI Developers</h3>
                                        <p class="fontSize18 boxs">Unleash the Power of AI with Designoweb's AI Developers - Tap into their expertise in artificial intelligence to create intelligent systems that automate tasks, uncover insights, and revolutionize your business.</p>
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
                                        <h3 class="fontSize30 boxs">Machine Learning Engineers</h3>
                                        <p class="fontSize18 boxs">Empower Your Business with Designoweb's Machine Learning Engineers - Harness their expertise in machine learning algorithms to develop intelligent systems that analyze data, make predictions, and drive actionable insights.</p>
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
                                        <h3 class="fontSize30 boxs">Blockchain Developers</h3>
                                        <p class="fontSize18 boxs">Unlock the Future of Trust and Security with Designoweb's Blockchain Engineers - Leverage their expertise to build decentralized, transparent, and tamper-proof solutions that revolutionize industries and redefine trust in the digital age.</p>
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
                                        <h3 class="fontSize30 boxs">DevOps Engineers</h3>
                                        <p class="fontSize18 boxs">Accelerate Your Development and Operations with Designoweb's DevOps Engineers - Harness their expertise to streamline processes, automate workflows, and achieve faster, more reliable software delivery, enabling your business to thrive in the digital era.</p>
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
                                        <h3 class="fontSize30 boxs">Data Engineers</h3>
                                        <p class="fontSize18 boxs">Unlock the Power of Data with Designoweb's Data Engineers - Leverage their expertise in data management, processing, and analytics to drive insights and make data-driven decisions that propel your business forward.</p>
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
                                        <h3 class="fontSize30 boxs">Data Scientists</h3>
                                        <p class="fontSize18 boxs">Unleash the Potential of Data with Designoweb's Data Scientists - Tap into their expertise in statistical analysis, machine learning, and predictive modeling to uncover valuable insights and drive innovation in your business.</p>
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
                                        <h3 class="fontSize30 boxs">Tableau Developers</h3>
                                        <p class="fontSize18 boxs">Visualize Your Data Like Never Before with Designoweb's Tableau Developers - Leverage their expertise to create interactive and visually stunning dashboards that bring your data to life, enabling you to make informed decisions with confidence.</p>
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
                                        <h3 class="fontSize30 boxs">BI Developers</h3>
                                        <p class="fontSize18 boxs">Empower Your Business Intelligence with Designoweb's BI Developers - Tap into their expertise in data analysis and visualization to unlock actionable insights and gain a competitive edge in today's data-driven world.</p>
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
    <div class="technologiesMenusItems technologiesMenusItemsNew boxs">
        <div class="container">
            <div class="techMenuSectionsChild boxs">
                <div class="menuTechListBox boxs" id="offshoreDevelopmentSec">
                    <h2 class="fontSize30 boxs boldFont">Offshore Development</h2>
                    <p class="fontSize18 boxs">Leverage our offshore development expertise to access a global talent pool and reduce costs. Benefit from our streamlined communication channels and agile development methodologies. Get access to a dedicated team of skilled professionals who work seamlessly to deliver exceptional results.</p>
                    <div class="keySkillsListsBox boxs">
                        <ul class="skillListTagList">
                            <li class="skillListItem fontSize16"><span class="skillListName">Technical Proficiency</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Remote Collaboration</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Time Zone Flexibility</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Adaptability and Learning Agility</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Language and Communication Skills</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Quality Assurance and Testing</span></li>
                        </ul>
                    </div>
                </div>
                <div class="menuTechListBox boxs" id="nearshoreDevelopmentSec">
                    <h2 class="fontSize30 boxs boldFont">Nearshore Development</h2>
                    <p class="fontSize18 boxs">Opt for nearshore development to bridge the geographical gap and collaborate with talent in neighboring countries. Enjoy advantages like overlapping time zones, cultural affinity, and cost-effective solutions. Experience efficient project management and quick turnaround times with our nearshore development services.</p>
                    <div class="keySkillsListsBox boxs">
                        <ul class="skillListTagList">
                            <li class="skillListItem fontSize16"><span class="skillListName">Proximity and Time Zone Compatibility</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Language and Cultural Alignment</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Technical Expertise</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Agile Methodologies</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Collaboration and Communication</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Business Domain Knowledge</span></li>
                        </ul>
                    </div>
                </div>
                <div class="menuTechListBox boxs" id="contractualStaffingSec">
                    <h2 class="fontSize30 boxs boldFont">Contractual Staffing</h2>
                    <p class="fontSize18 boxs">Fulfill your short-term staffing requirements with our contractual staffing solutions. Gain access to a pool of highly skilled professionals for specific project needs. Scale your team effortlessly and optimize costs by engaging our experienced contractual staff.</p>
                    <div class="keySkillsListsBox boxs">
                        <ul class="skillListTagList">
                            <li class="skillListItem fontSize16"><span class="skillListName">Skill Assessment and Talent Acquisition</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Recruitment and Onboarding</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Flexibility and Resource Management</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Contract Management and Compliance</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Communication and Relationship Building</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Performance Evaluation and Retention</span></li>
                        </ul>
                    </div>
                </div>
                <div class="menuTechListBox boxs" id="permanentStaffingSec">
                    <h2 class="fontSize30 boxs boldFont">Permanent Staffing</h2>
                    <p class="fontSize18 boxs">Find the right talent to join your team on a permanent basis through our extensive network and recruitment expertise. Tap into our database of qualified candidates to match your specific skill and cultural requirements. Ensure long-term success by hiring top-notch professionals who align with your company's vision and values.</p>
                    <div class="keySkillsListsBox boxs">
                        <ul class="skillListTagList">
                            <li class="skillListItem fontSize16"><span class="skillListName">Talent Acquisition and Sourcing</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Screening and Selection</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Interviewing and Evaluation</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Negotiation and Offer Management</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Relationship Building</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Market Knowledge and Industry Insights</span></li>
                        </ul>
                    </div>
                </div>
                <div class="menuTechListBox boxs" id="rpoStaffingSec">
                    <h2 class="fontSize30 boxs boldFont">Recruitment Process Outsourcing</h2>
                    <p class="fontSize18 boxs">Outsource your recruitment process to our experts and save time and resources. Rely on our industry knowledge and proven methodologies to attract and screen the best talent. Streamline your hiring process and enhance the quality of candidates with our recruitment process outsourcing services.</p>
                    <div class="keySkillsListsBox boxs">
                        <ul class="skillListTagList">
                            <li class="skillListItem fontSize16"><span class="skillListName">Talent Acquisition Strategy</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Candidate Sourcing and Screening</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Employer Branding</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Recruitment Technology and Tools</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Stakeholder Management</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Metrics and Reporting</span></li>
                        </ul>
                    </div>
                </div>
                <div class="menuTechListBox boxs" id="leadershipHiringSec">
                    <h2 class="fontSize30 boxs boldFont">Leadership Hiring</h2>
                    <p class="fontSize18 boxs">Trust our specialized leadership hiring services to find executives who will drive your organization's success. Leverage our extensive network and rigorous assessment methods to identify high-caliber leaders. Ensure a seamless transition and continuity in leadership by partnering with Designoweb for your executive-level hiring needs.</p>
                    <div class="keySkillsListsBox boxs">
                        <ul class="skillListTagList">
                            <li class="skillListItem fontSize16"><span class="skillListName">Executive Search Expertise</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Relationship Building</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Industry Knowledge</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Assessment and Evaluation</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Confidentiality and Discretion</span></li>
                            <li class="skillListItem fontSize16"><span class="skillListName">Negotiation and Influence</span></li>
                        </ul>
                    </div>
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