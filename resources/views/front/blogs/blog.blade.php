@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Press Release Banner Start -->
    <div class="mainBanner blogBanner boxs">
        <div class="container">
            <div class="mainBannerBox boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mainBannerLeft blogBannerLeft boxs">
                            <span class="fontSize20 topSubHeading boxs">#BLOG</span>
                            <div class="bannerHeading bannerHeading3 boxs">
                                <h1 class="fontSize52">Inspired by an extra opportunity to extend your insight?</h1>
                            </div>
                            <p class="bannerSubHeading bannerSubHeading2 fontSize28 boxs boldFont">Spend your time around the table and read some words and letters</p>
                            <p class="bannerSmallContent fontSize18 fadeBlackFont boxs ">AT Designoweb, read some blogs to lighten up your mood and extend the lane of knowledge.</p>
                            <!-- <span class="readMoreBox readMoreBox2 boxs"><a class="btnStyle text-uppercase">Read More<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a> -->
                            <span class="readMoreBox readMoreBox2 boxs"><a href="<?php echo route('front/contact'); ?>" class="btnStyle text-uppercase">Contact Us<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight serviceBannerRight blogBannerRight boxs">
                            <div class="boxs">
                                <p class="offshoreFormHead">Articles, tips and expert talks about mobile apps.</p>
                                <div class="offshoreForm blogForm boxs">
                                    <div class=" formDesign formDesign2 formDesign3 boxs">
                                        <h2 class="fontSize30">Get stories and thoughts in your inbox.</h2>
                                        <form id="submit-form2" action="<?php echo route('front/send_mail'); ?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group boxs">
                                                    <input type="email" name="email" class="form-control" placeholder="Email Id" required />
                                                </div>
                                                <div class="formBtn formBtn3 boxs">
                                                    <button type="submit" class="btnStyle btnStyle2 btnBlue">Submit<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php //echo do_shortcode('[mailpoet_form id="1"]'); ?>
                                    </div>
                                    <span class="blogFormImg boxs"><img src="<?php echo url('public/front/img/blog-form-image.png'); ?>" class="img-fluid" alt="Section Image"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Release Banner End -->

    <!-- Company Blogs Section Start -->
    <div class="companyBlogs companyBlogsNew boxs">
        <div class="container">
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
                                        <span class="fontSize12 blogTiming boxs"><?php echo !empty($value->created_at) ? date('M d, Y',strtotime($value->created_at)) : ''; ?></span>
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

    <!-- Latest News Section Start -->
    <!-- <div class="latestNews boxs">
        <div class="container">
            <div class="latestNewsInner boxs">
                <div class="mainSecHeading boxs">
                    <span class="smallSubHeading fontSize18">NEWS</span>
                    <h2 class="fontSize48 boxs">Latest News</h2>
                </div>
                <div class="latestNewsBox boxs">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="latestNewsLinks boxs" href="javascript:void(0)">
                                <div class="newsBoxs boxs">
                                    <span class="newsImage">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/latest-news-image.png" class="img-fluid" alt="News Image">
                                    </span>
                                    <span class="newsHeading fontSize22 boxs">Is Blockchain the Answer to Fighting Coronavirus Outbreak?</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="latestNewsLinks boxs" href="javascript:void(0)">
                                <div class="newsBoxs boxs">
                                    <span class="newsImage">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/latest-news-image2.png" class="img-fluid" alt="News Image">
                                    </span>
                                    <span class="newsHeading fontSize22 boxs">Modern Android App Architecture with Dropbox Store and JetPack</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="latestNewsLinks boxs" href="javascript:void(0)">
                                <div class="newsBoxs boxs">
                                    <span class="newsImage">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/latest-news-image3.png" class="img-fluid" alt="News Image">
                                    </span>
                                    <span class="newsHeading fontSize22 boxs">Google Acquires Appsheet, a No-code Mobile App Development Platform</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="latestNewsLinks boxs" href="javascript:void(0)">
                                <div class="newsBoxs boxs">
                                    <span class="newsImage">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/latest-news-image4.png" class="img-fluid" alt="News Image">
                                    </span>
                                    <span class="newsHeading fontSize22 boxs">Top Mental Health App Ideas for Startups</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="latestNewsLinks boxs" href="javascript:void(0)">
                                <div class="newsBoxs boxs">
                                    <span class="newsImage">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/latest-news-image5.png" class="img-fluid" alt="News Image">
                                    </span>
                                    <span class="newsHeading fontSize22 boxs">Search engine optimization is the process of improving the quality and quantity of website traffic</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="latestNewsLinks boxs" href="javascript:void(0)">
                                <div class="newsBoxs boxs">
                                    <span class="newsImage">
                                        <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/latest-news-image6.png" class="img-fluid" alt="News Image">
                                    </span>
                                    <span class="newsHeading fontSize22 boxs">Search engine optimization is the process of improving the quality and quantity of website traffic</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Latest News Section End -->

    <!-- how Dow Works Section Start -->
    <!-- <div class="howWorksBox howWorksBox2 boxs">
        <div class="container">
            <div class="howWorksInner boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="howWorksContent howWorksContent2 boxs">
                            <span class="fontSize18 boxs howWorksSmallHeading">#DESIGNOWEB TECHNOLOGIES</span>
                            <h3 class="fontSize48 boxs">A kaleidoscopic Glimpse of How Designoweb Technologies</h3>
                            <p class="fontSize20 fadeWhiteFont boxs">At Designoweb Technologies, work and fun go hand in hand. Open communication and free culture defines us and the work we do day in, day out. Every person in out works to bring value to the table and deliver unparalleled results.At Designoweb Technologies, work and fun go hand in hand. Open communication and free culture defines us and the work we do day in, day out. Every person in out works to bring value to the table and deliver unparalleled results.</p>
                            <span class="readMore boxs"><a class="btnStyle btnStyle3 transparentBtn text-uppercase" href="javascript:void(0)">Read More<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></a></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="howWorksRight boxs">
                            <div class="howWorksBlogs boxs">
                                <div class="blogImg">
                                    <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/how-works-blog.png" class="img-fluid" alt="Blog Image">
                                </div>
                                <div class="blogDetails blogInfo boxs">
                                    <span class="fontSize12 blogTiming boxs">Aug 18, 2021 | 20 mins ago</span>
                                    <div class="bloginfo boxs">
                                        <h4 class="blogHeading fontSize22 boxs">E-Learning App Design And How To Make It Better</h4>
                                        <p class="blogDescription fontSize16 fadeWhiteFont boxs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when </p>
                                        <span class="blogCategory fontSize14 boxs">#DESIGN</span>
                                        <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="javascript:void(0)">READ MORE</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="howWorksBlogs boxs">
                                <div class="blogImg">
                                    <img src="<?php //echo esc_url (get_stylesheet_directory_uri()); ?>/img/how-works-blog2.png" class="img-fluid" alt="Blog Image">
                                </div>
                                <div class="blogDetails blogInfo boxs">
                                    <span class="fontSize12 blogTiming boxs">Aug 18, 2021 | 20 mins ago</span>
                                    <div class="bloginfo boxs">
                                        <h4 class="blogHeading fontSize22 boxs">E-Learning App Design And How To Make It Better</h4>
                                        <p class="blogDescription fontSize16 boxs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when </p>
                                        <span class="blogCategory fontSize14 boxs">#DESIGN</span>
                                        <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="javascript:void(0)">READ MORE</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- how Dow Works Section End -->

    <!-- Query Section Start -->
    <div class="querySection bgGrey5 boxs">
        <x-query_section></x-query_section>
    </div>
    <!-- Query Section End -->

</div>
@endsection