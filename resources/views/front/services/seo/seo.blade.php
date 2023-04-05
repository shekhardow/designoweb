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
                                <h1 class="fontSize52">Search Engine Optimization</h1>
                            </div>
                            <div class="serviceFor serviceFor4 boxs">
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">On-Page Optimization</h2>
                                        <p class="fontSize16 boxs">Website's content, meta tags, and other elements are optimized to improve its relevance for the target keywords.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Off-Page Optimization</h2>
                                        <p class="fontSize16 boxs">Strategies to increase your website's authority and credibility on search engines.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Technical Optimization</h2>
                                        <p class="fontSize16 boxs">We improve the technical aspects of a website in order to increase the ranking of its pages in search engines.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h2 class="serviceForBoxChild fontSize18 boxs">Keyword Research</h2>
                                        <p class="fontSize16 boxs">Our team conducts in-depth research to identify the most relevant and high-traffic keywords for your business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight boxs">
                            <div class="serviceBannerContent boxs">
                                <div class="serviceMainContent boxs">
                                    <h2 class="servBannerHeading fontSize32 boxs">Join us in improving your search engine visibility</h2>
                                    <p class="servBannerContent fontSize18 boxs">We are here to help your business achieve greater visibility online and attract more qualified leads to your website. Our team of experienced SEO specialists understands the intricacies of search engine algorithms and can implement proven strategies to improve your website's ranking and drive more organic traffic.</p>
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
                        <div class="smallHeading boxs">
                            <p class="fontSize14">SERVICES</p>
                        </div>
                        <div class="sectionHeading mainSecHeading mainSecHeading3 boxs">
                            <h2 class="blackFont fontSize48 pb-0">Offering a versatile set of SEO services</h2>
                        </div>
                        <div class="subHeading boxs">
                            <p class="regularFont fontSize18">We provide a seamless experience to our valued customers</p>
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
                                        <h3 class="fontSize30 boxs">Customized Solutions</h3>
                                        <p class="fontSize18 boxs">We understand that every business is unique, and we tailor our SEO solutions to meet the specific needs and goals of our clients. We take the time to understand our clients' businesses and develop customized strategies to help them achieve their online goals.</p>
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
                                        <h3 class="fontSize30 boxs">Link Building</h3>
                                        <p class="fontSize18 boxs">Here, we build one-way hyperlinks (also known as “backlinks”) to a website with the goal of improving search engine visibility.Normal third party referencing procedures incorporate substance advertising, building helpful apparatuses, email outreach, broken external link establishment and advertising.</p>
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
                                        <h3 class="fontSize30 boxs">Ecommerce SEO Services</h3>
                                        <p class="fontSize18 boxs">E- Commerce seo solutions are provided to optimize the visibility of our websites and web pages through search engines. A well-ranked page will receive more traffic, so you want your page to rank as high as possible.</p>
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
                                        <h3 class="fontSize30 boxs">Local SEO</h3>
                                        <p class="fontSize18 boxs">If you have a physical business location or serve a specific geographic area, we can help you optimize your website for local search results. This includes optimizing your Google My Business profile, creating local citations, and ensuring consistency of your business information across different directories.</p>
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
                                        <h3 class="fontSize30 boxs">Reporting and Analytics</h3>
                                        <p class="fontSize18 boxs">We provide regular reports and analytics to track the performance of your website and the effectiveness of our SEO strategies. This helps us identify areas for improvement and make data-driven decisions to further optimize your website for search engines.</p>
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
                                        <h3 class="fontSize30 boxs">SEO Audit</h3>
                                        <p class="fontSize18 boxs">We analyze how well your web presence relates to best practices by creating an implementation plan that will have measurable results. The purpose of the audit is to identify as many foundational issues affecting organic search performance as possible.</p>
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
                        <!--<span class="benefitsLeftImg"><img src="<?php // echo url('public/front/img/benefitsLeftimg.png'); ?>" class="img-fluid" alt="Benefits Banner"></span>-->
                        
                        <span class="benefitsLeftImg"><img src="<?php echo url('public/front/img/seo-points.webp'); ?>" class="img-fluid" alt="Benefits Banner"></span>
                        
                        <!-- <span class="benefitTag"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/benefitsTag.png" class="img-fluid" alt="" /></span>
                        <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/benefitsSection.png" class="img-fluid" alt="Image" /></span>
                        <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/benefitsSection2.png" class="img-fluid" alt="Image" /></span> -->
                    </div>
                    <!--<div class="benefitsRight boxs">-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Effective Layout</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">We create a layout that is sleek yet aesthetically appealing. Your customer will be able to easily contact you with facile call-to-action buttons.</p>-->
                    <!--    </div>-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Personalization</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">We will create a website that speaks your language with alluring web design.We aim to provide optimal user experience, along with adequate information.</p>-->
                    <!--    </div>-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Effective Call-to-Action</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">Your customer will be able to easily contact you with facile call-to-action buttons.</p>-->
                    <!--    </div>-->
                    <!--    <div class="benefitsLists boxs">-->
                    <!--        <span class="benefitsListHeading fontSize24 boxs">Easy Access To Information</span>-->
                    <!--        <p class="benefitsListContent fontSize18 boxs">We aim to provide optimal user experience, along with adequate information.We create a layout that is sleek yet aesthetically appealing.Your customer will be</p>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="benefitsRight boxs">
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Brings Organic Search Traffic to your Website.</span>
                            <!--<p class="benefitsListContent fontSize18 boxs">Quality VR/AR content carries your item show to another level. We help you in flaunting your items or administrations just to make a substantially more intuitive shopping experience.</p>-->
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Generates Leads Cost-Effectively.</span>
                            <!--<p class="benefitsListContent fontSize18 boxs">Designoweb team offers a great chance to enter the high level computerized market and convey administrations that fulfill their clients.</p>-->
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Increases Brand Awareness.</span>
                            <!--<p class="benefitsListContent fontSize18 boxs">It is our moral duty to make our clients happy and satisfied with their desired results. Choosing us will provide you an experience that is comforting and impressive.</p>-->
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Gets You Ahead of the Competition.</span>
                            <!--<p class="benefitsListContent fontSize18 boxs">We will provide AR/VR Reality that will assist you with going out further with inventive missions that will situate you distinctively in a packed market.</p>-->
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Optimizes Your Website for Mobile Users.</span>
                            <!--<p class="benefitsListContent fontSize18 boxs">We will provide AR/VR Reality that will assist you with going out further with inventive missions that will situate you distinctively in a packed market.</p>-->
                        </div>
                        <div class="benefitsLists benefitsListsNew boxs">
                            <span class="mileStoneIcon"><img src="<?php echo url('public/front/img/milestones.svg'); ?>" class="img-fluid" alt="milestone" /></span>
                            <span class="benefitsListHeading fontSize22 boxs regularFont">Builds Trust.</span>
                            <!--<p class="benefitsListContent fontSize18 boxs">We will provide AR/VR Reality that will assist you with going out further with inventive missions that will situate you distinctively in a packed market.</p>-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->

    <!-- Successfull Client Products Start -->
    <div class="clientProducts clientProductsNewsec boxs">
        <div class="container">
            <div class="clientProductsList boxs">
                <div class="mainSecHeading boxs">
                    <h2 class="fontSize48 boxs">Testimonials to Our Successful <br>SEO Services</h2>
                </div>
                <div class="productsListsBox boxs d-none">
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
                
                <div class="seoTestimonialsBox boxs">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="seoTestimonialCard boxs">
                                <div class="seoTestimonialCardBanner boxs">
                                    <img src="<?php echo url('/public/front/img/seoCard1.webp') ?>" loading="lazy" class="img-fluid" alt="Card Banner" />
                                </div>
                                <div class="seoTestimonialDetails boxs">
                                    <div class="seoWebsite boxs">
                                        <h3 class="fontSize22 boxs">Mia Belle Girls</h3>
                                    </div>
                                    <div class="seoTestimonialDetail boxs">
                                        <ul>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Search Engine : </span>
                                                <span class="seoDescription fontSize14">Google US.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Goal : </span>
                                                <span class="seoDescription fontSize14">Increase the ranking of the given keywords.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Time Frame : </span>
                                                <span class="seoDescription fontSize14">09 to 13 months.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">What WAs achieved? : </span>
                                                <span class="seoDescription fontSize14">Most of the keywords were ranked in top 10.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Website grader : </span>
                                                <span class="seoDescription fontSize14">86/100</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="seoTestimonialCard boxs">
                                <div class="seoTestimonialCardBanner boxs">
                                    <img src="<?php echo url('/public/front/img/seoCard2.webp') ?>" loading="lazy" class="img-fluid" alt="Card Banner" />
                                </div>
                                <div class="seoTestimonialDetails boxs">
                                    <div class="seoWebsite boxs"><h3 class="fontSize22 boxs">Vapour Depot</h3></div>
                                    <div class="seoTestimonialDetail boxs">
                                        <ul>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Search Engine : </span>
                                                <span class="seoDescription fontSize14">Google UK.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Goal : </span>
                                                <span class="seoDescription fontSize14">Increase the ranking of the given keywords.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Time Frame : </span>
                                                <span class="seoDescription fontSize14">06 to 08 months.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">What WAs achieved? : </span>
                                                <span class="seoDescription fontSize14">Most of the keywords were ranked in top 10.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Website grader : </span>
                                                <span class="seoDescription fontSize14">94/100</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="seoTestimonialCard boxs">
                                <div class="seoTestimonialCardBanner boxs">
                                    <img src="<?php echo url('/public/front/img/seoCard3.webp') ?>" loading="lazy" class="img-fluid" alt="Card Banner" />
                                </div>
                                <div class="seoTestimonialDetails boxs">
                                    <div class="seoWebsite boxs"><h3 class="fontSize22 boxs">Logoup</h3></div>
                                    <div class="seoTestimonialDetail boxs">
                                        <ul>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Search Engine : </span>
                                                <span class="seoDescription fontSize14">Google US.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Goal : </span>
                                                <span class="seoDescription fontSize14">Increase the ranking of the given keywords.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Time Frame : </span>
                                                <span class="seoDescription fontSize14">06 to 09 months.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">What WAs achieved? : </span>
                                                <span class="seoDescription fontSize14">Most of the keywords were ranked in top 10.</span>
                                            </li>
                                            <li class="seoTestimonialList boxs">
                                                <span class="seoHeading fontSize16">Website grader : </span>
                                                <span class="seoDescription fontSize14">82/100</span>
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
    <!-- Successfull Client Products End -->

    <!-- About us Slider Start -->
    <!-- <div class="aboutUsSection boxs">
        <div class="container">
            <div class="aboutUsSlidebox boxs">
                <div class="mainSecHeading mainSecHeading2 boxs">
                    <span class="smallSubHeading fontSize18">We Help to Enhance your Business</span>
                    <h2 class="fontSize48 boxs">What People Say About Us</h2>
                </div>
                <div class="aboutSliderBox boxs">
                    <div class="slidesCounter" style="display: block">
                        <span class="slideCount"><span class="active">01</span> / <span class="totalSlides"></span></span>
                    </div>
                    <div class="aboutSlider customSlider boxs">
                        <div class="aboutSlides customSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">I built my website using Joomla. It was around 10 months that I spent on this website. The time I started facing problem, I thought to hire an expert. I must say that you guys worked wonders. You hard work and dedication made me work with you for more three projects. Your expertise, hard work and custom-script are worth-appreciating.</span>
                                    <span class="quoteBy fontSize20 boxs">Bree Argetsinger</span>
                                    <span class="quoteCountry fontSize18 boxs">United States</span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="aboutSlides customSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">I built my website using Joomla. It was around 10 months that I spent on this website. The time I started facing problem, I thought to hire an expert. I must say that you guys worked wonders. You hard work and dedication made me work with you for more three projects. Your expertise, hard work and custom-script are worth-appreciating.</span>
                                    <span class="quoteBy fontSize20 boxs">Bree Argetsinger 2</span>
                                    <span class="quoteCountry fontSize18 boxs">United States 2</span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                        <div class="aboutSlides customSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">I built my website using Joomla. It was around 10 months that I spent on this website. The time I started facing problem, I thought to hire an expert. I must say that you guys worked wonders. You hard work and dedication made me work with you for more three projects. Your expertise, hard work and custom-script are worth-appreciating.</span>
                                    <span class="quoteBy fontSize20 boxs">Bree Argetsinger 3</span>
                                    <span class="quoteCountry fontSize18 boxs">United States 3</span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About us Slider End -->

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
                <h2 class="fontSize48 boxs pb-0">Why To Choose Us As Your SEO Provider</h2>
            </div>
                        <div class="subHeading boxs">
                <p class="regularFont fontSize18">Choosing the right SEO service provider can make a huge difference in the success of your online business. At our company, we offer a comprehensive range of SEO services that are designed to help our clients achieve their online goals.</p>
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
                                        <h3 class="fontSize30 boxs">Expertise</h3>
                                        <p class="fontSize18 boxs"> Our team of SEO specialists has years of experience in the field and understands the latest SEO trends and best practices. We keep ourselves updated with the latest algorithms and strategies to ensure that our clients receive the most effective and up-to-date SEO services.</p>
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
                                        <h3 class="fontSize30 boxs">Results-Driven Approach</h3>
                                        <p class="fontSize18 boxs">We are committed to delivering tangible results for our clients. We use data-driven strategies and techniques to improve our clients' website ranking, traffic, and engagement. Our approach focuses on delivering results that matter to our clients' businesses.
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
                                        <h3 class="fontSize30 boxs">Transparency</h3>
                                        <p class="fontSize18 boxs">We believe in transparency and honesty in our work. We provide regular reports and updates on the progress of our SEO strategies, including the metrics that matter to our clients' businesses. We ensure that our clients have full visibility into our work and the results that we deliver.</p>
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
                                        <h3 class="fontSize30 boxs">Customer Support</h3>
                                        <p class="fontSize18 boxs">We understand that our clients may have questions or concerns about our services, and we are committed to providing excellent customer support. Our team is always available to answer questions, provide updates, and address any concerns that our clients may have.</p>
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
                                        <h3 class="fontSize30 boxs">We Study Your Niche</h3>
                                        <p class="fontSize18 boxs">In order to create the perfect niche SEO campaign for your industry, we study your niche, familiarize ourselves with the terminology, the style, and the content that industry leaders create.</p>
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
                                        <h3 class="fontSize30 boxs">Heavy Lifting</h3>
                                        <p class="fontSize18 boxs">Hiring a reputable SEO company allows you to keep up with your own business. Letting them take care of your SEO campaign will free you up to keep tending to business as usual at your company.
                                        </p>
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
                                        <h3 class="fontSize22 boxs">- Consultation</h3>
                                        <p class="fontSize16 boxs">We get your technicals right through a thorough discussion process where we try to gather the minutest details.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Keyword Research</h3>
                                        <p class="fontSize16 boxs">In-depth research to identify the most relevant and high-traffic keywords for your business.</p>
                                    </div>
                                </div>
                                <div class="serviceForLists boxs">
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Execution</h3>
                                        <p class="fontSize16 boxs">Sequential steps of seo optimization namely on page, off page and local optimizations.</p>
                                    </div>
                                    <div class="serviceForBox boxs">
                                        <h3 class="fontSize22 boxs">- Prolonged Sustainability</h3>
                                        <p class="fontSize16 boxs">We are a team of experts who are dedicated to delivering ever lasting results and providing excellent customer service. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="appProcessBanner boxs">
                            <!--<img src="<?php // echo url('public/front/img/app-process.png'); ?>" class="img-fluid" alt="Banner Image" />-->
                            <img src="<?php echo url('public/front/img/seo-process.webp'); ?>" class="img-fluid" alt="Process banner" />
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
                    <?php if (!empty($blogs)) {
                        foreach ($blogs as $value) { ?>
                            <div class="col-sm-4">
                                <div class="blogListBox blogListBoxNew boxs">
                                    <div class="blogContentTop boxs">
                                        <div class="blogImage boxs">
                                            <span class="boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>"><img src="<?php echo !empty($value->image_url) ? url('uploads/admin/blogs/' . $value->image_url) : ''; ?>" class="img-fluid" alt="Blog Image" /></a></span>
                                        </div>
                                        <div class="blogDetails boxs">
                                            <span class="fontSize12 blogTiming boxs"><?php echo !empty($value->created_at) ? date('M d, Y', strtotime($value->created_at)) : ''; ?></span>
                                            <div class="bloginfo boxs">
                                                <h3 class="blogHeading fontSize22 boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>"><?php echo !empty($value->blog_title) ? $value->blog_title : ''; ?></a></h3>
                                                <p class="blogDescription fontSize16 boxs"><?php echo !empty($value->blog_description) ? substr(strip_tags($value->blog_description), 0, 235) . '...' : ''; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blogContentBtm boxs">
                                        <!-- <span class="blogCategory fontSize14 boxs">#DESIGN</span> -->
                                        <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>">READ MORE</a></span>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
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