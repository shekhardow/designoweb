@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="serviceBanner mainBanner caseStudyBnr portfolioBanner2 boxs">
        <div class="portfolioBannerNew boxs">
            <div class="container">
                <div class="serviceBannerBox boxs">
                    <!--<div class="row">-->
                        <!--<div class="col-sm-7">-->
                            <div class="mainBannerLeft serviceBannerLeft boxs">
                                <!--<span class="textRed fontSize20 semiboldFont boxs topSubHeading topSubHeading3 boxs">#CASE STUDY</span>-->
                                <div class="bannerHeading boxs">
                                    <!--<h1 class="fontSize38 blackFont">The Team Of Designoweb Put Their Heart And Soul Into Making Our Client’s Project. </h1>-->
                                    <h1 class="fontSize38 blackFont">We breathe life into your digital dreams through cutting-edge app development.</h1>
                                </div>
                                <p class="bannerSubHeading bannerSubHeading2 fontSize20 boxs fadeBlackFont ">
                                    <!--Have a look at our creation to understand the innovation, hard work and enthusiasm of our employees that they put into making these projects.-->
                                    As a leading force in the tech industry, we specialize in creating transformative experiences that redefine the way businesses engage with their customers.
                                </p>
                            </div>
                        <!--</div>-->
                        <!--<div class="col-sm-5">-->
                            <div class="serviceBannerRight ps-0 boxs">
                                <div class="boxs">
                                    <!--<img src="<?php // echo url('public/front/img/case-study.svg'); ?>" alt="career banner" class="img-fluid" loading="lazy" />-->
                                </div>
                                <div class="portfolioBannerVideo boxs">
                                    <video id="dowVideo" preload="" playsinline="" autoplay="" loop="" muted="">
                        				<source src="<?php echo url('public/front/images/portfolioVideo.mp4'); ?>">
                                    </video>
                                </div>
                            </div>
                        <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    <!--    <div class="portfolioBannerVideo boxs">-->
    <!--        <video id="dowVideo" preload="" playsinline="" autoplay="" loop="" muted="">-->
				<!--<source src="<?php // echo url('public/front/images/portfolioVideo.mp4'); ?>">-->
    <!--        </video>-->
    <!--    </div>-->
    </div>
    <!-- Services Banner End -->
    
    <!-- Our Projects Slider Section Start -->
    <div class="ourProjectSlider ourClientsSliderNew ourProjectSlider2 boxs d-none">
        <div class="container">
            <div class="ourProjectSliderBox boxs">
                <div class="mainSecHeading boxs d-none">
                    <span class="smallSubHeading fontSize18 mb-0 d-none">Our Clients</span>
                    <h2 class="fontSize36 boxs d-none">We love to work for everyone from <span>Startups to Enterprises</span>. <br>Be a part of our prestigious client list by engaging with us on your next project.</h2>
                </div>
                <div class="ourProjectsSlider projectSlideBox2 boxs">
                    <div class="row">
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlidebuildapp.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlidelayerslogic.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlideultimate.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlideamaroom.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlidefuela.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlideloop.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlidenegotium.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlideproski.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <span class="ourProjectsSlides boxs">
                                <img src="<?php echo url('public/front/images/productSlidediabetes.webp'); ?>" class="img-fluid" alt="Project Logo"/>
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Our Projects Slider Section End -->

    <div class="caseSecs boxs sectionPaddingTop">
        <?php if(!empty($case_studies)){ foreach($case_studies as $value){ ?>
            <div class="caseSec boxs" style="background-image: url('<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>')">
                <div class="container">
                    <div class="caseCont">
                        <div class="caseImgCont">
                            <img src="<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>" alt="Project Case Study" class="img-fluid caseImgBg" loading="lazy"/>
                            <img src="<?php echo !empty($value->case_front_image) ? url('uploads/admin/case_studies/' . $value->case_front_image) : ''; ?>" alt="case study" class="img-fluid frontImage" loading="lazy" />
                        </div>
                        <div class="caseTxtCont">
                            <!-- <p class="textRed fontSize18 semiboldFont"><?php //echo get_field('case_study_country'); ?></p> -->
                            <h2 class="mt-3 fontSize40 blackFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></h2>
                            <p class="fontSize20 subContentFont"><?php echo !empty($value->description) ? $value->description : ''; ?></p>
                            <div class="caseStudyMore boxs">
                                <a href="<?php echo route('front/case_study_details', ['slug' => $value->slug]); ?>" class="textRed fontSize18 boldFont">View case study</a>
                                <?php if(!empty($value->project_link)){ ?>
                                    <a target="_blank" href="<?php echo !empty($value->project_link) ? $value->project_link : 'javascript:void(0)'; ?>" class="textRed fontSize18 boldFont">
                                        explore <?php echo (!empty($value->project_type) && ($value->project_type == 'Website')) ? 'website' : 'app'; ?>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }} ?>
    </div>

</div>
@endsection