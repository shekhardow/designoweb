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
                                <p class="bannerSubHeading bannerSubHeading2 fontSize18 boxs fadeBlackFont ">
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
                                    <video id="dowVideo" preload="" playsinline="" autoplay="" loop="" muted="" poster="<?php echo url('public/front/images/home-vid-thumbnail2.webp'); ?>">
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

    <div class="caseSecs boxs sectionPadding2">
        
        <div class="portfolioTabsSection boxs">
            <div class="container">
                <div class="portfolioTabsChild boxs">
                    <ul class="nav nav-pills customPills">
                        <li class="nav-item"><a class="nav-link clicktab showAllPortfolio active" data-type="showall">Show All</a></li>
                        <li class="nav-item"><a class="nav-link clicktab portfolioWebs" data-type="Websites">Web 2.0</a></li>
                        <li class="nav-item"><a class="nav-link clicktab portfolioMobileApps" data-type="Mobileapps">Mobile Apps</a></li>
                        <li class="nav-item"><a class="nav-link clicktab portfolioMetaverse" data-type="Metaverse">Metaverse</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="portfoliosSectionListBox boxs">
              
            <div class="portfolioTabSection boxs portfolios portfoliosMobileapps">
                <?php if(!empty($case_studies)){ foreach($case_studies as $value){ 
                if($value->project_type == 'Application'){?>
                    <div class="caseSec boxs" style="background-image: url('<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>')">
                        <div class="container">
                            <div class="caseCont">
                                <div class="caseImgCont">
                                    <img src="<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>" alt="Project Case Study" class="img-fluid caseImgBg" loading="lazy"/>
                                    <img src="<?php echo !empty($value->case_front_image) ? url('uploads/admin/case_studies/' . $value->case_front_image) : ''; ?>" alt="case study" class="img-fluid frontImage frontImagePortfolioSec" loading="lazy" />
                                </div>
                                <div class="caseTxtCont">
                                    <!-- <p class="textRed fontSize18 semiboldFont"><?php //echo get_field('case_study_country'); ?></p> -->
                                    <h2 class="mt-3 fontSize38 blackFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></h2>
                                    <p class="fontSize18 subContentFont"><?php echo !empty($value->description) ? $value->description : ''; ?></p>
                                    <div class="caseStudyMore boxs">
                                        <a href="<?php echo route('front/case_study_details', ['slug' => $value->slug]); ?>" class="textRed fontSize18">View case study</a>
                                        <?php if(!empty($value->project_link)){ ?>
                                            <a target="_blank" href="<?php echo !empty($value->project_link) ? $value->project_link : 'javascript:void(0)'; ?>" class="textRed fontSize18">
                                                explore <?php echo (!empty($value->project_type) && ($value->project_type == 'Website')) ? 'website' : 'app'; ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }} } ?>
                </div>
            <div class="portfolioTabSection boxs portfolios portfoliosWebsites">
                 <?php if(!empty($case_studies)){ foreach($case_studies as $value){
                 if($value->project_type == 'Website'){?>
                    <div class="caseSec boxs" style="background-image: url('<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>')">
                        <div class="container">
                            <div class="caseCont">
                                <div class="caseImgCont">
                                    <img src="<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>" alt="Project Case Study" class="img-fluid caseImgBg" loading="lazy"/>
                                    <img src="<?php echo !empty($value->case_front_image) ? url('uploads/admin/case_studies/' . $value->case_front_image) : ''; ?>" alt="case study" class="img-fluid frontImage" loading="lazy" />
                                </div>
                                <div class="caseTxtCont">
                                    <!-- <p class="textRed fontSize18 semiboldFont"><?php //echo get_field('case_study_country'); ?></p> -->
                                    <h2 class="mt-3 fontSize38 blackFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></h2>
                                    <p class="fontSize18 subContentFont"><?php echo !empty($value->description) ? $value->description : ''; ?></p>
                                    <div class="caseStudyMore boxs">
                                        <a href="<?php echo route('front/case_study_details', ['slug' => $value->slug]); ?>" class="textRed fontSize18">View case study</a>
                                        <?php if(!empty($value->project_link)){ ?>
                                            <a target="_blank" href="<?php echo !empty($value->project_link) ? $value->project_link : 'javascript:void(0)'; ?>" class="textRed fontSize18">
                                                explore <?php echo (!empty($value->project_type) && ($value->project_type == 'Website')) ? 'website' : 'app'; ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } }} ?>
            </div>
            <div class="portfolioTabSection boxs portfolios portfoliosMetaverse">
                <div class="container">
                    <div class="metaserveChildSection boxs snippetsBox ">
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="https://designoweb.com/public/front/images/videos/3D-Home-Interior.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Metaverse Interior Configuration</span>
                                <span class="metaverseSecDescription fontSize18 boxs">A digital representation or visualization of a living room's interior design and layout using three-dimensional (3D) technology.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="https://designoweb.com/public/front/images/videos/Metaverse-Grocery-Store.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Metaverse Grocery Store</span>
                                <span class="metaverseSecDescription fontSize18 boxs">A Metaverse Grocery Store is a concept that envisions a virtual representation of a grocery store within the metaverse.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/eye-anatomy.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Eye Anatomy</span>
                                <span class="metaverseSecDescription fontSize18 boxs">VR enables a captivating 3D exploration of the human eye's intricate anatomy, enhancing understanding and engagement with its structures and functions.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/Human-Body-VR.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Human Body VR</span>
                                <span class="metaverseSecDescription fontSize18 boxs">Human Body VR is a virtual reality experience where users can explore a detailed virtual model of the human body.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/EGL-Moduler-Kitchen.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">EGL Moduler Kitchen</span>
                                <span class="metaverseSecDescription fontSize18 boxs">Experience the future of interior design with our EGL Modular Kitchen AR app. Visualize and customize your dream kitchen in real-time using augmented reality. </span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/VR-Human.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">VR-Human</span>
                                <span class="metaverseSecDescription fontSize18 boxs">Dive into a mind-bending virtual reality experience with VR human, where the boundaries between the real and virtual worlds blur, leaving you questioning what is real and what is not.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/Ultrasound-Demo.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Ultrasound-Demo</span>
                                <span class="metaverseSecDescription fontSize18 boxs">Embark on a virtual reality journey through the fascinating world of Ultrasound Demo VR-2, where medical simulations and immersive visuals redefine the way we learn and practice.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/Submarine.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Submarine</span>
                                <span class="metaverseSecDescription fontSize18 boxs">Plunge into the depths of the ocean in an animated Submarine adventure, where mysterious creatures, underwater marvels, and thrilling discoveries await at every turn.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/Medicobazar.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Medicobazar</span>
                                <span class="metaverseSecDescription fontSize18 boxs">Explore the virtual aisles of medicobazar, a vibrant animated marketplace where medical professionals come together to exchange knowledge, equipment, and expertise.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/Fetal-Project.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Fetal Project</span>
                                <span class="metaverseSecDescription fontSize18 boxs">The Fetal Project is a comprehensive initiative focused on enhancing prenatal care and maternal health. It integrates advanced technologies and medical expertise to improve the understanding, monitoring, and support of fetal development.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/Heart-Education-VR.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Heart Education VR</span>
                                <span class="metaverseSecDescription fontSize18 boxs">Heart Education VR 10 is a groundbreaking virtual reality (VR) program that revolutionizes cardiovascular health education. Through its immersive and interactive platform, it enlightens users about heart health while creating a captivating learning environment.</span>
                            </div>
                        </div>
                        
                        <div class="metaserveChildBox snippetListing boxs">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/Modular-Operating-Table.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs">Modular Operating Table</span>
                                <span class="metaverseSecDescription fontSize18 boxs">A 3D model of a modular operating table designed for versatility and adaptability in surgical settings, allowing easy customization and reconfiguration to meet various procedural requirements.</span>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <div class="metaserveChildBox snippetListing boxs d-none">
                            <div class="metaverseVideoBox boxs snippetsVideo boxs metaverseSnippetsVideo">
                                <span class="snippetsVideoChild boxs">
                                    <div class="skiVideoCont">
                                        <video playsinline="" class="skiVideo" style="width: 100%" loading="lazy" loop="true">
                                            <source src="public/front/images/videos/.mp4">
                                        </video>
                                        <div id="skiVideoControls" class="skiVideoControls muted">
                                            <button type="button" class="playPauseBtn playBtn"><i class="fas fa-play"></i></button>
                                            <button type="button" class="playPauseBtn pauseBtn"><i class="fas fa-pause"></i></button>
                                        </div>
                                        <div class="vidoeProgressBar"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="metaverseVideoDetails">
                                <span class="metaverseSecHeading fontSize28 boxs"></span>
                                <span class="metaverseSecDescription fontSize18 boxs"></span>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
        
     
    </div>

</div>
@endsection