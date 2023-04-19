@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Press Release Banner Start -->
    <div class="mainBanner pressBanner pressBannerMain boxs">
        <div class="container">
            <div class="mainBannerBox mainBannerBox2 boxs">
                <div class="row">
                    <?php if (!empty($banner_press_release)) { foreach ($banner_press_release as $value) { ?>
                        <div class="col-sm-6">
                            <div class="mainBannerLeft mainBannerLeft2 boxs">
                                <span class="fontSize20 topSubHeading boxs">#PRESS RELEASE </span>
                                <div class="bannerHeading boxs">
                                    <h1 class="fontSize52"><?php echo !empty($value->press_release_title) ? $value->press_release_title : ''; ?></h1>
                                </div>
                                <!-- <p class="bannerSubHeading bannerSubHeading2 fontSize24 boxs boldFont">Having a scalable and high-functioning mobile app will not only expand your</p> -->
                                <h2 class="fontSize18 pressBoxSubheading boxs fadeBlackFont"><?php echo !empty($value->press_release_description) ? substr(strip_tags($value->press_release_description), 0, 235) . '...' : ''; ?></h2>
                                <!-- <p class="bannerSmallContent fontSize18 boxs fadeBlackFont">Having a scalable and high-functioning mobile app will not only expand your business but will also increase the level of customer experience. At Designowebtiv, we understand the</p> -->
                                <span class="readMoreBox boxs"><a href="<?php echo route('front/press_release_details',['slug' => $value->slug]); ?>" class="btnStyle text-uppercase">Read More<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a>
                                </span>
                            </div>
                        </div>
                    <?php }} ?>
                    <div class="col-sm-6">
                        <div class="mainBannerRight pressBannerRight boxs">
                            <img src="<?php echo url('public/front/images/press-release-banner.webp'); ?>" class="img-fluid" alt="Banner Image" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Release Banner End -->

    <!-- Press Release Boxs Section Start -->
    <div class="pressReleaseBoxs bgGrey5 boxs">
        <div class="container">
            <div class="pressReleaseInner boxs">
                <div class="row">
                    <?php if (!empty($press_release)) { foreach ($press_release as $value) { ?>
                        <div class="col-sm-6">
                            <div class="pressReleaseBox boxs">
                                <div class="pressReleaseImage boxs">
                                    <span class="pressReleaseBanner boxs"><a href="<?php echo route('front/press_release_details',['slug' => $value->slug]); ?>" class="boxs">
                                        <img src="<?php echo !empty($value->image_url) ? url('uploads/admin/press_release/' . $value->image_url) : ''; ?>" class="img-fluid" alt="Press Release Banner"></a>
                                    </span>
                                    <span class="pressDateTime">
                                        <span class="pressReleaseDate"><?php echo !empty($value->added_date) ? date('M d, Y', strtotime($value->added_date)) : ''; ?></span>
                                    </span>
                                </div>
                                <div class="pressContentBox boxs">
                                    <h3 class="fontSize28 pressBoxHeading boxs"><a href="<?php echo route('front/press_release_details',['slug' => $value->slug]); ?>" class="boxs"><?php echo !empty($value->press_release_title) ? $value->press_release_title : ''; ?></a></h3>
                                    <p class="fontSize18 pressBoxSubheading boxs"><?php echo !empty($value->press_release_description) ? substr(strip_tags($value->press_release_description), 0, 215) . '...' : ''; ?></p>
                                    <span class="readMore"><a class="fontSize18 readMoreLink" href="<?php echo route('front/press_release_details', ['slug' => $value->slug]); ?>">READ MORE</a></span>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Release Boxs Section End -->

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

    <!-- Query Section Start -->
    <div class="querySection bgGrey5 boxs">
        <x-query_section></x-query_section>
    </div>
    <!-- Query Section End -->

</div>
@endsection