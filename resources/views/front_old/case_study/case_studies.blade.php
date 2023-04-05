@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="serviceBanner mainBanner caseStudyBnr boxs">
        <div class="container">
            <div class="serviceBannerBox boxs">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="mainBannerLeft serviceBannerLeft boxs">
                            <span class="textRed fontSize20 semiboldFont boxs topSubHeading topSubHeading3 boxs">#CASE STUDY</span>
                            <span class="bannerHeading boxs">
                                <h1 class="fontSize52 blackFont">The Team Of Designoweb Put Their Heart And Soul Into Making Our Client’s Project.</h1>
                            </span>
                            <p class="bannerSubHeading bannerSubHeading2 fontSize20 boxs fadeBlackFont boldFont">
                                Have a look at our creation to understand the innovation, hard work and enthusiasm of our employees that they put into making these projects.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="serviceBannerRight ps-0 boxs">
                            <div class="boxs">
                                <img src="<?php echo url('public/front/img/case-study.svg'); ?>" alt="career banner" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Banner End -->

    <div class="caseSecs boxs">
        <?php if(!empty($case_studies)){ foreach($case_studies as $value){ ?>
            <div class="caseSec boxs" style="background-image: url('<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>')">
                <div class="container">
                    <div class="caseCont">
                        <div class="caseImgCont">
                            <img src="<?php echo !empty($value->case_banner) ? url('uploads/admin/case_studies/' . $value->case_banner) : ''; ?>" alt="Project Case Study" class="img-fluid caseImgBg" />
                            <img src="<?php echo !empty($value->case_front_image) ? url('uploads/admin/case_studies/' . $value->case_front_image) : ''; ?>" alt="case study" class="img-fluid frontImage" />
                        </div>
                        <div class="caseTxtCont">
                            <!-- <p class="textRed fontSize18 semiboldFont"><?php //echo get_field('case_study_country'); ?></p> -->
                            <h2 class="mt-3 fontSize40 blackFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></h2>
                            <p class="fontSize20 subContentFont"><?php echo !empty($value->description) ? $value->description : ''; ?></p>
                            <p><a href="<?php echo route('front/case_study_details', ['slug' => $value->slug]); ?>" class="textRed fontSize18 boldFont">VIEW CASE STUDY</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }} ?>
    </div>

</div>
@endsection