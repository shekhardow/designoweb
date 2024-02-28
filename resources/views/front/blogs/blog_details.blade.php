@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Press Release Banner Start -->
    <div class="mainBanner blogDetailBanner boxs">
        
        <div class="container">
            <div class="mainBannerBox boxs">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="mainBannerLeft mainBannerLeft2 boxs">
                            <span class="fontSize18 topSubHeading boxs">#BLOG DETAIL</span>
                            <div class="bannerHeading boxs">
                                <h1 class="fontSize38"><?php echo !empty($blog_detail->blog_title) ? $blog_detail->blog_title : ''; ?></h1>
                            </div>
                            <div class="quoteAuthorCont2 quoteAuthorCont3 boxs">
                                <div class="quoteAuthorCont ">
                                    <div class="quoteAuthorImg">
                                        <img src="<?php echo !empty($blog_detail->image_url) ? url('uploads/admin/blogs/'.$blog_detail->image_url) : ''; ?>" class="img-fluid" alt="Quote Author">
                                    </div>
                                    <div class="quoteAuthorInfo quoteAuthorInfo2">
                                        <!-- <p class="quoteAuthorName fontSize20 boxs">Bhavik Agarwal</p>
                                        <p class="quoteAuthorCountry readTime fontSize16 boxs">7 mins Read</p> -->
                                        <p class="quoteAuthorCountry readTime fontSize16 boxs"><?php echo !empty($blog_detail->added_date) ? date('M d, Y',strtotime($blog_detail->added_date)) : ''; ?></p>
                                    </div>
                                </div>
                                <!-- <span class="pressDate fontSize20 leftMargin">December 20th, 2021</span> -->
                            </div>
                            <!-- <div class="socialLists socialLists2 boxs">
                                <span><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></span>
                                <span><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></span>
                                <span><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></span>
                            </div> -->
                            <!-- <span class="readMoreBox boxs"><a class="btnStyle text-uppercase">Read More</a></span> -->
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="blogDetailsBanner">
                            <span class="boxs"><img src="<?php echo !empty($blog_detail->image_url) ? url('uploads/admin/blogs/'.$blog_detail->image_url) : ''; ?>" class="img-fluid" alt="Banner Image"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Release Banner End -->

    <div class="pressContentDetail blogContentDetail boxs">
        <div class="container">
            <div class="pressContentSec blogContentSec customEditor boxs">
                <div class="boxs customEditor"><?php echo !empty($blog_detail->blog_description) ? $blog_detail->blog_description : ''; ?></div>
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
                                        <span class="boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>"><img src="<?php echo !empty($value->image_url) ? url('uploads/admin/blogs/'.$value->image_url) : ''; ?>" class="img-fluid" alt="Blog Image" /></a></span>
                                    </div>
                                    <div class="blogDetails boxs">
                                        <span class="fontSize12 blogTiming boxs"><?php echo !empty($value->added_date) ? date('M d, Y',strtotime($value->added_date)) : ''; ?></span>
                                        <div class="bloginfo boxs">
                                            <h3 class="blogHeading fontSize22 boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>"><?php echo !empty($value->blog_title) ? $value->blog_title : ''; ?></a></h3>
                                            <p class="blogDescription fontSize16 boxs"><?php echo !empty($value->blog_description) ? substr(strip_tags($value->blog_description),0,235).'...' : ''; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blogContentBtm boxs">
                                    <!-- <span class="blogCategory fontSize14 boxs">#DESIGN</span> -->
                                    <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="<?php echo route('front/blog_details',['slug' => $value->slug]); ?>">READ MORE</a></span>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Company Blogs Section End -->

    <!-- Faq Section Start -->
    <!-- <div class="faqSection boxs">
        <div class="container">
            <div class="faqBox boxs">
                <div class="mainSecHeading boxs">
                    <span class="smallSubHeading fontSize18">WE HELP YOU OUT</span>
                    <h2 class="fontSize48 boxs">Frequently Asked <br>Question</h2>
                </div>
                <div class="faqDetail boxs">
                    <div class="faqLists boxs">
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
                                </span>
                                <span class="faqAnswer faqSecList fontSize20 boxs"><span>The cost of crafting a website depends on multiple variables and elements. We built a website in accordance with the requirements of clients and the duration you will be working with us.</span></span>
                            </div>
                        </div>
                        <div class="faqList boxs">
                            <div class="faqListInner boxs">
                                <span class="faqQuestion faqSecList fontSize22 boxs">
                                    <a class="faqQuestLink" href="javascript:void(0)">
                                        <span class="faqQuest">Will there be any additional cost that I’d have to bear after the work is complete?</span>
                                        <span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>
                                    </a>
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

    <!-- Awards and recognition section start -->
    <x-award_section></x-award_section>
    <!-- Awards and recognition section end -->

</div>
@endsection