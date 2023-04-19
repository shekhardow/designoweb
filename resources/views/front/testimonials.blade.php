@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="serviceBanner mainBanner testimonialsBanner boxs">
        <div class="container">
            <div class="testimonialsBannerBox boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mainBannerLeft serviceBannerLeft boxs">
                            <span class="boxs textRed2 fontSize20 topSubHeading boxs">#TESTIMONIAL</span>
                            <div class="bannerHeading boxs">
                                <h1 class="fontSize52 blackFont">Over 2,00,000 Professionals Trust us Worldwide</h1>
                            </div>
                            <p class="bannerSubHeading bannerSubHeading2 fontSize22 boxs">To demonstrate the worth of what we bring to the table, why not let our blissful clients communicate everything?</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="serviceBannerRight boxs">
                            <img src="<?php echo url('public/front/images/testimonials-banner.webp'); ?>" alt="Testimonials" class="img-fluid techBannerImg" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Banner End -->

    <!-- Client Says Start -->
    <div class="p80sec boxs bgGrey6">
        <div class="container">
            <h2 class="fontSize48 blackFont">What Client Say About Us</h2>
            <div class="clientQuotesList testimonialsListsBox">
                <div class="row g-0 gx-md-4">
                    <?php if(!empty($testimonials_without_video_and_images)){ foreach($testimonials_without_video_and_images->skip(0)->take(3) as $value){ ?>
                        <div class="quoteCont quoteContInNew col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="quoteContIn testimonialBoxs testimonialBoxsNew boxs">
                                <div class="testimonialSecTop boxs">
                                    <!-- <span class="testimonialByImage"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span> -->
                                    <span class="aboutQuoteText fontSize16 fadeBlackFont"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                </div>
                                <div class="testimonialSecRight boxs">
                                    <div class="testimonialSecBtm boxs">
                                        <div class="quoteAuthorCont boxs">
                                            <span class="quoteIconsBox"><img src="<?php echo url('public/front/img/quotesImgs.svg'); ?>" alt="Quote Icon" class="img-fluid"  loading="lazy"></span>
                                            <div class="quoteAuthorBtm boxs">
                                                <span class="quoteAuthorCountry fontSize18"><?php echo !empty($value->client_name) ? $value->client_name : ''; ?></span>
                                                <span class="quoteAuthorName fontSize16 boldFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>

                    {{-- <div class="quoteCont quoteContInNew col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs testimonialBoxsNew boxs">
                            <div class="testimonialSecTop boxs">
                                <!-- <span class="testimonialByImage"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span> -->
                                <span class="aboutQuoteText fontSize16 fadeBlackFont">LGBTQ stands for Lesbian, Gay, Bisexuali and Transgender. It's a community made for the people who are under the previous categories. I wanted to raise donations for such people as they deserve the same amount of consideration in society. Designoweb made it possible. It helped me in making such a great website to raise funds and donations across India for healthcare , education, sports and other causes. You can create campaigns and help those people. I personally felt grateful for this service and I'm pretty sure that the team will fly high. Loved it!</span>
                            </div>
                            <div class="testimonialSecRight boxs">
                                <div class="testimonialSecBtm boxs">
                                    <div class="quoteAuthorCont boxs">
                                        <span class="quoteIconsBox"><img src="<?php //echo url('public/front/img/quotesImgs.svg'); ?>" alt="Quote Icon" class="img-fluid"  loading="lazy"></span>
                                        <div class="quoteAuthorBtm boxs">
                                            <span class="quoteAuthorCountry fontSize18 ">Unnikrishnan Karatt</span>
                                            <span class="quoteAuthorName fontSize16 boldFont">Donate24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quoteCont quoteContInNew col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs testimonialBoxsNew boxs">
                            <div class="testimonialSecTop boxs">
                                <!-- <span class="testimonialByImage"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span> -->
                                <span class="aboutQuoteText fontSize16 fadeBlackFont">In today's world , kids are into electronics more rather than going outside to play. Not only parents but this issue made me worried as well. Their brains are like sponges and taking the problem in consideration, Designoweb helped me in creating a website which offers curated limited no. of hours of content so that the kids can watch only relevant entertainment. The team helped me in implementing a website that was easy to use and is accessible easily. Services are good and the team was easy to work with.</span>
                            </div>
                            <div class="testimonialSecRight boxs">
                                <div class="testimonialSecBtm boxs">
                                    <div class="quoteAuthorCont boxs">
                                        <span class="quoteIconsBox"><img src="<?php //echo url('public/front/img/quotesImgs.svg'); ?>" alt="Quote Icon" class="img-fluid"  loading="lazy"></span>
                                        <div class="quoteAuthorBtm boxs">
                                            <span class="quoteAuthorCountry fontSize18 ">Mahesh Danannavar</span>
                                            <span class="quoteAuthorName fontSize16 boldFont">Oye Kids</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">I was very concerned about problems regarding my business. Money was one of the major issues that I personally felt. But, Designoweb solved my issue. It helped me in making a website called Negotium. It helps finances to advance the business. It simplifies things such as funds and POS systems. Not just pos systems it also helped with basic utilities of life like gas, electricity and water bills. Everything was done professionally and with ease. It's amazing and made my work so simple. I'm looking forward to working with them more</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial-negotium.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Harry Sohota</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Negotium</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Needed to make a website for something personal and memorable for the people. I wanted to add a touch of care and love. Designoweb helped me in making my desired website. I gave them my choices on how I want my website to be and it was delivered just the way. Earlframes is an affordable and convenient site where you can get a variety of things like wooden frames with personalized pictures and printable t-shirts with a personalized text for your loved ones. Professionalism was high and my appreciation to the team. Great services and highly recommended for all.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial2.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Earl Watson</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Earlframes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">LGBTQ stands for Lesbian, Gay, Bisexuali and Transgender. It's a community made for the people who are under the previous categories. I wanted to raise donations for such people as they deserve the same amount of consideration in society. Designoweb made it possible. It helped me in making such a great website to raise funds and donations across India for healthcare , education, sports and other causes. You can create campaigns and help those people. I personally felt grateful for this service and I'm pretty sure that the team will fly high. Loved it!</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial2.png" class="img-fluid" alt="Icon" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Unnikrishnan Karatt</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Donate 24</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    <!-- Client Says End -->

    <!-- About us Slider Start -->
    <div class="aboutUsSection boxs singleTestimonial">
        <div class="container">
            <div class="aboutUsSlidebox boxs">
                <div class="aboutSliderBox boxs">
                    <div class="aboutSlider boxs">
                        <?php if(!empty($testimonials)){ foreach($testimonials->skip(0)->take(1) as $value){ ?>
                            <div class="aboutSlides boxs">
                                <div class="aboutSlidesInner flexBox boxs">
                                    <div class="aboutSlideContent boxs">
                                        <span class="aboutQuoteIcon boxs">
                                            <img src="<?php echo url('public/front/img/sliderQuote.png'); ?>" class="img-fluid" alt="Quote Icon"  loading="lazy" />
                                        </span>
                                        <span class="aboutQuote fontSize18 boxs"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                        <span class="quoteBy fontSize20 boxs"><?php echo !empty($value->client_name) ? $value->client_name : ''; ?></span>
                                        <span class="quoteCountry fontSize18 boxs"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></span>
                                        <span class="testimonialVideoBox boxs">
                                            <a class="watchYTVidBtn testimonialVideoLink" data-src="<?php echo !empty($value->video_link) ? $value->video_link : ''; ?>" href="javascript:void(0)" data-bs-target="#testimonialModal" data-bs-toggle="modal"><img src="<?php echo url('public/front/img/youtube.png'); ?>" alt="youtube"  loading="lazy"/>WATCH VIDEO</a>
                                        </span>
                                    </div>
                                    <div class="aboutSlideImage boxs">
                                        <span><img src="<?php echo !empty($value->client_image) ? url('uploads/admin/testimonials/'.$value->client_image) : ''; ?>" class="img-fluid" alt="Slide Image"  loading="lazy" /></span>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="aboutUsSection aboutUsSection2 aboutUsSection3 bgGrey6 boxs">
        <div class="container">
            <div class="aboutUsSlidebox boxs singleTestimonial">
                <div class="aboutSliderBox boxs">
                    <div class="aboutSlider boxs">
                        <?php if(!empty($testimonials)){ foreach($testimonials->skip(1)->take(1) as $value){ ?>
                            <div class="aboutSlides boxs">
                                <div class="aboutSlidesInner flexBox flexBoxReverse boxs">
                                    <div class="aboutSlideContent boxs">
                                        <span class="aboutQuoteIcon boxs">
                                            <img src="<?php echo url('public/front/img/sliderQuote.png'); ?>" class="img-fluid" alt="Quote Icon" loading="lazy" />
                                        </span>
                                        <span class="aboutQuote fontSize18 boxs"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                        <span class="quoteBy fontSize20 boxs"><?php echo !empty($value->client_name) ? $value->client_name : ''; ?></span>
                                        <span class="quoteCountry fontSize18 boxs"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></span>
                                        <span class="testimonialVideoBox boxs">
                                            <a class="watchYTVidBtn testimonialVideoLink" data-src="<?php echo !empty($value->video_link) ? $value->video_link : ''; ?>" href="javascript:void(0)" data-bs-target="#testimonialModal" data-bs-toggle="modal"><img src="<?php echo url('public/front/img/youtube.png'); ?>" alt="youtube" loading="lazy" />WATCH VIDEO</a>
                                        </span>
                                    </div>
                                    <div class="aboutSlideImage boxs">
                                        <span><img src="<?php echo !empty($value->client_image) ? url('uploads/admin/testimonials/'.$value->client_image) : ''; ?>" class="img-fluid" alt="Slide Image" loading="lazy" /></span>
                                    </div>

                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            <div class="quotesList boxs">
                <div class="row">
                    <?php if(!empty($testimonials_without_video)){ foreach($testimonials_without_video->skip(0)->take(2) as $value){ ?>
                        <div class="quoteCont quoteContInNew col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
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
                    <!-- <div class="quoteCont quoteContInNew col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="quoteContIn testimonialBoxs testimonialBoxsNew boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="testimonialByImage"><img src="<?php //echo url('public/front/img/testimonial-sata.jpg'); ?>" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 fadeBlackFont">I didn't even know where to begin when I decided to open my own business. But Designoweb came to the rescue. They helped me throughout from making a website to making my own app. They did exactly how I asked them and gave their personal preferences too which helped me in boosting my app. My app helps in bookings , vouchers etc. for the partner hotels. You can book a hotel in just a few clicks by sitting at home or from anywhere. It couldn't have been possible without the Designoweb team. The services were great and I'm looking forward to working with them in future too.</span>
                            </div>
                            <div class="testimonialSecRight boxs">
                                <div class="testimonialSecBtm boxs">
                                    <div class="quoteAuthorCont boxs">
                                        <span class="quoteIconsBox"><img src="<?php //echo url('public/front/img/quotesImgs.svg'); ?>" alt="Quote Icon" class="img-fluid"></span>
                                        <div class="quoteAuthorBtm boxs">
                                            <span class="quoteAuthorCountry fontSize18 ">Habeeb Kamaal</span>
                                            <span class="quoteAuthorName fontSize16 boldFont">Sata</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-md-6">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Pets make a place feel home and to take care of them is a big task. I wanted my pet to be taken care of with trust and love. Designoweb provided me with the best services out there. I wanted to make a website which will provide services from trusted veterinarians to grooming of your little babies and much more awesome services. I wanted to make pets comfortable just like their own home. I made them understand my requirements and they met my expectations. There was a bit of a time crunch but they definitely understood my situation  and made me a wonderful site for the pets. I absolutely loved the services and I'm definitely going to come back here again.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial-mop.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Vijay</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Mad Over Pets</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-md-6">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">I didn't even know where to begin when I decided to open my own business. But Designoweb came to the rescue. They helped me throughout from making a website to making my own app. They did exactly how I asked them and gave their personal preferences too which helped me in boosting my app. My app helps in bookings , vouchers etc. for the partner hotels. You can book a hotel in just a few clicks by sitting at home or from anywhere. It couldn't have been possible without the Designoweb team. The services were great and I'm looking forward to working with them in future too.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial-sata.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Habeeb Kamaal</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Sata</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
            <div class="quotesList boxs testimonialsListsBox">
                <div class="row">
                    <?php if(!empty($testimonials_without_video_and_images)){ foreach($testimonials_without_video_and_images->skip(3)->take(9) as $value){ ?>
                        <div class="quoteCont quoteContInNew col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="quoteContIn testimonialBoxs testimonialBoxsNew boxs">
                                <div class="testimonialSecTop boxs">
                                    <!-- <span class="testimonialByImage"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span> -->
                                    <span class="aboutQuoteText fontSize16 fadeBlackFont"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                </div>
                                <div class="testimonialSecRight boxs">
                                    <div class="testimonialSecBtm boxs">
                                        <div class="quoteAuthorCont boxs">
                                            <span class="quoteIconsBox"><img src="<?php echo url('public/front/img/quotesImgs.svg'); ?>" alt="Quote Icon" class="img-fluid" loading="lazy"></span>
                                            <div class="quoteAuthorBtm boxs">
                                                <span class="quoteAuthorCountry fontSize18"><?php echo !empty($value->client_name) ? $value->client_name : ''; ?></span>
                                                <span class="quoteAuthorName fontSize16 boldFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>

                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">What I like about Designoweb that how fast , innovative and fresh their ideas are. The services are applaudable. I was helpless when it came to making a website but then their team had my back. My website is about providing fuel specific facility , offering a fixed payment and a revolving credit facility options. I love that they've made significant moves to make me a website and an app that works like a magic. Looking for a website design? Call Designoweb for their wonderful services.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial-fuela.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Mandisi Khumalo</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Fuela</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">In today's world , kids are into electronics more rather than going outside to play. Not only parents but this issue made me worried as well. Their brains are like sponges and taking the problem in consideration, Designoweb helped me in creating a website which offers curated limited no. of hours of content so that the kids can watch only relevant entertainment. The team helped me in implementing a website that was easy to use and is accessible easily. Services are good and the team was easy to work with.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial2.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Mahesh Danannavar</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Oye Kids</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">I just want to appreciate how wonderfully Designoweb managed to make a website of my desires. I gave them the instructions and they helped in making the website that I wanted. The website is about an online marketplace for designers worldwide. People can set up their online store and sell their unique items. All they need are professional photos of their products. Designoweb's team was really helpful and understanding. Cheers to the great work.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial-dwear.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Sonny Arcot</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Dwear</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>

    <div class="aboutUsSection boxs singleTestimonial">
        <div class="container">
            <div class="aboutUsSlidebox boxs">
                <div class="aboutSliderBox boxs">
                    <div class="aboutSlider boxs">
                        <?php if(!empty($testimonials)){ foreach($testimonials->skip(2)->take(1) as $value){ ?>
                            <div class="aboutSlides boxs">
                                <div class="aboutSlidesInner flexBox boxs">
                                    <div class="aboutSlideContent boxs">
                                        <span class="aboutQuoteIcon boxs">
                                            <img src="<?php echo url('public/front/img/sliderQuote.png'); ?>" class="img-fluid" alt="QuoteIcon" loading="lazy" />
                                        </span>
                                        <span class="aboutQuote fontSize18 boxs"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                        <span class="quoteBy fontSize20 boxs"><?php echo !empty($value->client_name) ? $value->client_name : ''; ?></span>
                                        <span class="quoteCountry fontSize18 boxs"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></span>
                                        <span class="testimonialVideoBox boxs">
                                            <a class="watchYTVidBtn testimonialVideoLink" data-src="<?php echo !empty($value->video_link) ? $value->video_link : ''; ?>" href="javascript:void(0)" data-bs-target="#testimonialModal" data-bs-toggle="modal"><img src="<?php echo url('public/front/img/youtube.png'); ?>" alt="youtube"  loading="lazy"/>WATCH VIDEO</a>
                                        </span>
                                    </div>
                                    <div class="aboutSlideImage boxs">
                                        <span><img src="<?php echo !empty($value->client_image) ? url('uploads/admin/testimonials/'.$value->client_image) : ''; ?>" class="img-fluid" alt="Slide Image" loading="lazy" /></span>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="aboutUsSection aboutUsSection2 aboutUsSection3 boxs">
        <div class="container">
            <div class="aboutUsSlidebox boxs singleTestimonial">
                <div class="aboutSliderBox boxs">
                    <div class="aboutSlider boxs">
                        <?php if(!empty($testimonials)){ foreach($testimonials->skip(3)->take(1) as $value){ ?>
                            <div class="aboutSlides boxs">
                                <div class="aboutSlidesInner flexBox flexBoxReverse boxs">
                                    <div class="aboutSlideContent boxs">
                                        <span class="aboutQuoteIcon boxs">
                                            <img src="<?php echo url('public/front/img/sliderQuote.png'); ?>" class="img-fluid" alt="Quote Icon" loading="lazy" />
                                        </span>
                                        <span class="aboutQuote fontSize18 boxs"><?php echo !empty($value->client_quote) ? $value->client_quote : ''; ?></span>
                                        <span class="quoteBy fontSize20 boxs"><?php echo !empty($value->client_name) ? $value->client_name : ''; ?></span>
                                        <span class="quoteCountry fontSize18 boxs"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></span>
                                        <span class="testimonialVideoBox boxs">
                                            <a class="watchYTVidBtn testimonialVideoLink" data-src="<?php echo !empty($value->video_link) ? $value->video_link : ''; ?>" href="javascript:void(0)" data-bs-target="#testimonialModal" data-bs-toggle="modal"><img src="<?php echo url('public/front/img/youtube.png'); ?>" alt="youtube" loading="lazy" />WATCH VIDEO</a>
                                        </span>
                                    </div>
                                    <div class="aboutSlideImage boxs">
                                        <span><img src="<?php echo !empty($value->client_image) ? url('uploads/admin/testimonials/'.$value->client_image) : ''; ?>" class="img-fluid" alt="Slide Image" loading="lazy" /></span>
                                    </div>

                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>

            <!-- Add New Testimonial here -->

            <div class="quotesList boxs">
                <div class="row">
                    <?php if(!empty($testimonials_without_video)){ foreach($testimonials_without_video->skip(2)->take(2) as $value){ ?>
                        <div class="quoteCont quoteContInNew col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
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

                    <!-- <div class="quoteCont col col-12 col-md-6">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Designoweb has been really helpful for me as they curated a website in such a short period of time. Time was an issue for me but these guys managed to work effortlessly and gave me an amazing website. It's an e-commerce platform providing a digital marketplace where pharmacists and practitioners can interact with healthcare companies and suppliers on a real time basis. Designoweb was wonderful in their services. I was a happy and satisfied client.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial2.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Sathia</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Healthcliqs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-md-6">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Making a website is a hard task. I was hopeless and then I came across this company, Designoweb is such a wonderful team. They came together to give me a very classy website. I provided them with my necessities on a website and they provided me with my desired site. My website is about the services we provide to make a  better house. Services like painting, renovation, pest control, sanitization, etc. but the team worked like magic. Highly recommend them and they are hardworking employees.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial2.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Maher Mehta</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Hammer And Spanner</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="quotesList boxs testimonialsListsBox">
                <div class="row"> -->
                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">I wanted to have an incredible website to attract people. But, obviously making a website was a tough job for me and I was clueless. Then, I came across this company called Designoweb which made my job so easy. They were understandable and a group of innovative minds. I wanted a website which has the ability to meet the special requirements of the real estate market and clients stems from the strong foundation of Professionalism. I liked the working culture. Really appreciable work.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="img/testimonial2.png" class="img-fluid" />
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial-benchmark.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Mahmoud Amin</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">The Benchmark</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Making a smooth working app with friendly and successful features is not easy. Bugs and discomfort come along. We were confused about how to solve this problem of mine. Designoweb made it so simple. They made an app which was modern, user-friendly, and fully searchable. Our  app is about how to find used parts for every make and model, and buy them online instantly without waiting on the phone. We have been very happy with the results seen so far.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial-autobestparts.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Sermaxhaj Premtim</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Autobestparts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="quoteCont col col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Designoweb was a team that understood the assignment. Making a website that was so easy to use with all the available features is a bit tedious. But this team worked in unison and gave me a website which was indeed good. My site is a multilingual e-commerce platform for professional journalists to sell their ready-to-use products, services and creativity to news media outlets. They were all very professionals and worked coordinately. I liked the efforts personally.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/testimonial2.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Lalit Jha</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">5wh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- </div>
            </div> -->
        </div>
    </div>

    <!-- <div class="aboutUsSection boxs singleTestimonial">
        <div class="container">
            <div class="aboutUsSlidebox boxs">
                <div class="aboutSliderBox boxs">
                    <div class="aboutSlider boxs">
                        <div class="aboutSlides boxs">
                            <div class="aboutSlidesInner flexBox boxs">
                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">
                                        Test content
                                    </span>
                                    <span class="quoteBy fontSize20 boxs">Douglas Negrisolli</span>
                                    <span class="quoteCountry fontSize18 boxs">Artyou Global</span>
                                    <span class="testimonialVideoBox boxs">
                                        <a class="watchYTVidBtn testimonialVideoLink" data-src="https://www.youtube.com/embed/gpHKNJSeATE" href="javascript:void(0)" data-bs-target="#testimonialModal" data-bs-toggle="modal"><img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/youtube.png" alt="youtube" />WATCH VIDEO</a>
                                    </span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="aboutUsSection aboutUsSection2 aboutUsSection3 boxs">
        <div class="container">
            <div class="aboutUsSlidebox boxs singleTestimonial">
                <div class="aboutSliderBox boxs">
                    <div class="aboutSlider boxs">
                        <div class="aboutSlides boxs">
                            <div class="aboutSlidesInner flexBox flexBoxReverse boxs">

                                <div class="aboutSlideContent boxs">
                                    <span class="aboutQuoteIcon boxs"><img src="img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                    <span class="aboutQuote fontSize18 boxs">
                                        Test content
                                    </span>
                                    <span class="quoteBy fontSize20 boxs">Brandon Reed</span>
                                    <span class="quoteCountry fontSize18 boxs">Twerk Cycle</span>
                                    <span class="testimonialVideoBox boxs">
                                        <a class="watchYTVidBtn testimonialVideoLink" data-src="https://www.youtube.com/embed/vV3b8VrYn6A" href="javascript:void(0)" data-bs-target="#testimonialModal" data-bs-toggle="modal"><img src="img/youtube.png" alt="youtube" />WATCH VIDEO</a>
                                    </span>
                                </div>
                                <div class="aboutSlideImage boxs">
                                    <span><img src="img/aboutSlide.png" class="img-fluid" alt="Slide Image" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quotesList boxs">
                <div class="row">
                    <div class="quoteCont col col-12 col-md-6">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Designoweb has been really helpful for me as they curated a website in such a short period of time. Time was an issue for me but these guys managed to work effortlessly and gave me an amazing website. It's an e-commerce platform providing a digital marketplace where pharmacists and practitioners can interact with healthcare companies and suppliers on a real time basis. Designoweb was wonderful in their services. I was a happy and satisfied client.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="img/testimonial2.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Sathia</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Healthcliqs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quoteCont col col-12 col-md-6">
                        <div class="quoteContIn testimonialBoxs boxs">
                            <div class="testimonialSecTop boxs">
                                <span class="aboutQuoteIcon boxs"><img src="img/sliderQuote.png" class="img-fluid" alt="Icon" /></span>
                                <span class="aboutQuoteText fontSize16 boxs">Making a website is a hard task. I was hopeless and then I came across this company, Designoweb is such a wonderful team. They came together to give me a very classy website. I provided them with my necessities on a website and they provided me with my desired site. My website is about the services we provide to make a  better house. Services like painting, renovation, pest control, sanitization, etc. but the team worked like magic. Highly recommend them and they are hardworking employees.</span>
                            </div>
                            <div class="testimonialSecBtm boxs">
                                <div class="quoteAuthorCont">
                                    <div class="quoteAuthorImg">
                                        <img src="img/testimonial2.png" class="img-fluid" />
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs">Maher Mehta</p>
                                        <p class="quoteAuthorCountry fontSize18 boxs">Hammer And Spanner</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About us Slider End -->

    <!-- Project Assign Start -->
    <div class="p60sec boxs">
        <div class="container">
            <h2 class="fontSize48 blackFont">Do You Have a Project To Assign? <br />Let’s Talk.</h2>
            <a href="<?php echo route('front/contact'); ?>" class="mt-5 btnStyle btnBlue">Let’s Discuss Your Idea<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
        </div>
    </div>
    <!-- Project Assign End -->

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
</div>

<!-- Testimonials Video Modal Start -->
<div id="testimonialModal" class="modal fade testimonialModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="closeModal"><button class="modalclose" type="button" data-bs-dismiss="modal" aria-label="close">x</button></span>
            <div class="modalBody boxs">
                <div class="testimonialVideo boxs">
                    <iframe src="https://www.youtube.com/embed/nuHUA8ySIRU?autoplay=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Video Modal End -->
@endsection