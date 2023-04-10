@extends('front/layout')
@section('content')
<div class="mainBody  boxs">
    <!-- Press Release Banner Start -->
    <div class="mainBanner pressBanner pressBanner2 boxs">
        <div class="container">
            <div class="mainBannerBox  boxs">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-7">
                        <div class="mainBannerLeft boxs">
                            <span class="fontSize20 topSubHeading boxs">#PRESS RELEASE DETAIL</span>
                            <div class="bannerHeading bannerHeading4 boxs">
                                <h1 class="fontSize52"><?php echo !empty($press_release_detail->press_release_title) ? $press_release_detail->press_release_title : ''; ?></h1>
                            </div>
                            <div class="quoteAuthorCont2 boxs">
                                <div class="quoteAuthorCont ">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php echo !empty($press_release_detail->image_url) ? url('uploads/admin/press_release/'.$press_release_detail->image_url) : ''; ?>" class="img-fluid" alt="Quote Author">
                                    </div>
                                    <div class="quoteAuthorInfo">
                                        <p class="quoteAuthorName fontSize20 boxs"><?php echo !empty($press_release_detail->author) ? $press_release_detail->author : ''; ?></p>
                                        <p class="quoteAuthorCountry readTime fontSize16 boxs"><?php echo !empty($press_release_detail->added_date) ? date('M d, Y',strtotime($press_release_detail->added_date)) : ''; ?></p>
                                    </div>
                                </div>
                                <!-- <span class="pressDate fontSize20 leftMargin">December 20th, 2021</span> -->
                            </div>
                            <div class="socialLists boxs">
                                <span><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></span>
                                <span><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></span>
                                <span><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></span>
                            </div>
                            <!-- <span class="readMoreBox boxs"><a class="btnStyle text-uppercase">Read More</a></span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Release Banner End -->

    <div class="pressContentDetail boxs">
        <div class="container">
            <div class="pressContentSec customEditor boxs">
                <?php echo !empty($press_release_detail->press_release_description) ? $press_release_detail->press_release_description : ''; ?>
            </div>
        </div>
    </div>

    <!-- how Dow Works Section Start -->
    <!-- <div class="howWorksBox boxs">
        <div class="container">
            <div class="howWorksInner boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="howWorksContent boxs">
                            <span class="fontSize18 boxs howWorksSmallHeading">#DESIGNOWEB TECHNOLOGIES</span>
                            <h3 class="fontSize48 boxs">A kaleidoscopic Glimpse of How Designoweb Technologies</h3>
                            <p class="fontSize20 boxs">At Designoweb Technologies, work and fun go hand in hand. Open communication and free culture defines us and the work we do day in, day out. Every person in out works to bring value to the table and deliver unparalleled results.At Designoweb Technologies, work and fun go hand in hand. Open communication and free culture defines us and the work we do day in, day out. Every person in out works to bring value to the table and deliver unparalleled results.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="howWorksImg boxs">
                            <img src="<?php //echo url('public/front/img/how-works.png'); ?>" class="img-fluid" alt="Section Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- how Dow Works Section End -->

    <!-- Press Release Boxs Section Start -->
    <div class="pressReleaseBoxs bgGrey2 boxs">
        <div class="container">
            <div class="pressReleaseInner boxs">
                <div class="row">
                    <?php if (!empty($press_release)) { foreach ($press_release as $value) { if($press_release_detail->press_release_id != $value->press_release_id){ ?>
                        <div class="col-sm-6">
                            <div class="pressReleaseBox boxs">
                                <div class="pressReleaseImage boxs">
                                    <span class="pressReleaseBanner boxs"><a href="<?php echo route('front/press_release_details',['slug' => $value->slug]); ?>" class="boxs">
                                        <img src="<?php echo !empty($value->image_url) ? url('uploads/admin/press_release/' . $value->image_url) : ''; ?>" class="img-fluid" alt="Press Release Banner"></a>
                                    </span>
                                    <span class="pressDateTime">
                                        <span class="pressReleaseDate"><?php echo !empty($press_release_detail->added_date) ? date('M d, Y',strtotime($press_release_detail->added_date)) : ''; ?></span>
                                        <!-- <span class="pressReleaseTime">20 mins ago</span> -->
                                    </span>
                                </div>
                                <div class="pressContentBox boxs">
                                    <h3 class="fontSize28 pressBoxHeading boxs"><a href="<?php echo route('front/press_release_details',['slug' => $value->slug]); ?>" class="boxs"><?php echo !empty($value->press_release_title) ? $value->press_release_title : ''; ?></a></h3>
                                    <p class="fontSize18 pressBoxSubheading boxs"><?php echo !empty($value->press_release_description) ? substr(strip_tags($value->press_release_description), 0, 215) . '...' : ''; ?></p>
                                    <span class="readMore"><a class="fontSize18 readMoreLink" href="<?php echo route('front/press_release_details',['slug' => $value->slug]); ?>">READ MORE</a></span>
                                </div>
                            </div>
                        </div>
                    <?php }}} ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Release Boxs Section End -->

    <!-- Awards and recognition section start -->
    <x-award_section></x-award_section>
    <!-- Awards and recognition section end -->

</div>
@endsection