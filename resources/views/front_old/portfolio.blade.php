@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="serviceBanner mainBanner boxs">
        <div class="container">
            <div class="portfolioBannerBox serviceBannerBox boxs mb-0">
                <div class="row">
                    <div class="col col-12 col-lg-6">
                        <div class="mainBannerLeft serviceBannerLeft boxs">
                            <span class="textRed fontSize20 semiboldFont boxs topSubHeading boxs">#PORTFOLIO</span>
                            <span class="bannerHeading boxs">
                                <h1 class="fontSize52 blackFont">We invest heavily in our work.</h1>
                            </span>
                            <p class="bannerSubHeading bannerSubHeading2 fontSize22 boxs">We believe that the undertakings we convey settle mind boggling, high volume issues. Some of these activities stick out and in that capacity, we need to recount to you their story. Have a look.</p>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="serviceBannerRight boxs">
                            <div class="boxs">
                                <img src="<?php echo url('public/front/img/career-banner.png'); ?>" alt="career banner" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Banner End -->

    <!-- Portfolio Section Start -->
    <div class="portfolioSec boxs">
        <div class="container">
            <div class="portfolioSecNew boxs">
                <?php if(!empty($portfolio)){ foreach($portfolio as $value){ ?>
                    <div class="portfolioRow">
                        <div class="row g-5">
                            <div class="col col-12 col-md-6">
                                <div class="portfolioCol portfolioTxtCol">
                                    <!-- <p class="textRed fontSize18 semiboldFont">' . $portfolioList['portfolio_country'] . '</p> -->
                                    <h2 class="fontSize40 blackFont"><?php echo !empty($value->project_name) ? $value->project_name : ''; ?></h2>
                                    <p class="fontSize20 subContentFont"><?php echo !empty($value->description) ? $value->description : ''; ?></p>
                                    <?php if($value->project_type == 'Website'){ ?>
                                        <a class="btnStyle btnStyle2 btnBlue" target="_blank"  href="<?php echo !empty($value->project_link) ? $value->project_link : ''; ?>"> VIEW WEBSITE<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                    <?php }else{ ?>
                                        <a class="btnStyle btnStyle2 btnBlue" target="_blank"  href="<?php echo !empty($value->project_link) ? $value->project_link : ''; ?>"> VIEW APP<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="portfolioCol portfolioImgCol">
                                    <img src="<?php echo !empty($value->image_url) ? url('uploads/admin/portfolio/' . $value->image_url) : ''; ?>" class="img-fluid" alt="portfolio" />
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->

    <!-- Company Blogs Section Start -->
    <div class="companyBlogs boxs">
        <div class="container">
            <div class="mainSecHeading boxs">
                <h2 class="fontSize48 boxs">More Blogs</h2>
            </div>
            <div class="blogsSection boxs">
                <div class="row">
                    <?php if(!empty($blogs)){ foreach($blogs as $value){ ?>
                        <div class="col-sm-4">
                            <div class="blogListBox blogListBoxNew boxs">
                                <div class="blogContentTop boxs">
                                    <div class="blogImage boxs">
                                        <span class="boxs"><a class="boxs" href="<?php echo url('blog_details/'.encryptionID($value->blog_id)); ?>"><img src="<?php echo !empty($value->image_url) ? url('uploads/admin/blogs/'.$value->image_url) : ''; ?>" class="img-fluid" alt="Blog Image" /></a></span>
                                    </div>
                                    <div class="blogDetails boxs">
                                        <span class="fontSize12 blogTiming boxs"><?php echo !empty($value->created_at) ? date('M d, Y',strtotime($value->created_at)) : ''; ?></span>
                                        <div class="bloginfo boxs">
                                            <h4 class="blogHeading fontSize22 boxs"><a class="boxs" href="<?php echo url('blog_details/'.encryptionID($value->blog_id)); ?>"><?php echo !empty($value->blog_title) ? $value->blog_title : ''; ?></a></h4>
                                            <p class="blogDescription fontSize16 boxs"><?php echo !empty($value->blog_description) ? substr(strip_tags($value->blog_description),0,235).'...' : ''; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blogContentBtm boxs">
                                    <!-- <span class="blogCategory fontSize14 boxs">#DESIGN</span> -->
                                    <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="<?php echo url('blog_details/'.encryptionID($value->blog_id)); ?>">READ MORE</a></span>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Company Blogs Section End -->

</div>
@endsection