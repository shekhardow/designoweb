@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">
    <!-- Services Banner Start -->
    <div class="mainBanner contactBanner boxs">
        <div class="container">
            <div class="mainBannerBox boxs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mainBannerLeft mainBannerLeft2 boxs">
                            <span class="fontSize20 topSubHeading boxs">#CONTACT US</span>
                            <div class="bannerHeading bannerHeading2 boxs">
                                <h1 class="fontSize52">Let Us Transform Your Business Ideas Into Reality</h1>
                            </div>
                            <!-- <p class="bannerSubHeading bannerSubHeading2 fontSize20 boxs">Having a scalable and high-functioning mobile app will not only expand your</p> -->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mainBannerRight contactBannerRight boxs">
                            <img src="<?php echo url('public/front/images/contact-banner2.webp'); ?>" class="img-fluid" alt="Banner Image" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Banner End -->

    <!-- Contact Form Start -->
    <div class="contactFormSec boxs">
        <div class="contactformBg boxs">
            <span class="contactForm"></span>
        </div>
        <div class="container">
            <div class="contactFormInner queryInnerBox boxs">
                <div class="queryInfoBox queryInfoContacts contactFormsSec boxs">
                    <span class="querySubHeading querySubHeading2 fontSize26 boxs">Your business idea is valuable. We are here to provide you with the right business expertise.</span>
                    <div class="queryLists boxs">
                        <ul>
                            <li class="fontSize18 boxs">On-call assistance in all timezones</li>
                            <li class="fontSize18 boxs">Projects consulting by experts</li>
                            <li class="fontSize18 boxs">Detail project estimation</li>
                        </ul>
                    </div>
                </div>
                <div class="contactMainForm contactFormsSec boxs">
                    <div class="formMainHeading boxs">
                        <h2 class="fontSize38 blackFont">Fill this form to get a <span class="highlightFont">FREE</span> consultation:</h2>
                    </div>
                    <div class="formDesign formDesignNew boxs">
                    
                        <form id="common-form" action="<?php echo route('front/send_contact_mail'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group boxs">
                                        <!--<label>Name</label>-->
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"  />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group boxs">
                                        <!--<label>Phone</label>-->
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"  />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group boxs">
                                        <!--<label>Email Id</label>-->
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Id"  />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group boxs">
                                        <!--<label>Budget</label>-->
                                        <select class="form-control" name="budget" id="budget">
                                            <option class="" selected disabled>Select Budget</option>
                                            <option>$5k - $10k</option>
                                            <option>$10k - $15k</option>
                                            <option>$15k - $20k</option>
                                            <option>> $20k</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group boxs">
                                        <!--<label>Comments</label>-->
                                        <textarea rows="4" placeholder="Requirements" name="comments" id="comments" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group boxs">
                                        <div class="g-recaptcha" data-sitekey="6LcWPtghAAAAAMeNPgulr6ZifhyOr--_XIl9SB-R"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="formBtn formBtn2 btnSpace boxs">
                                <button type="submit" class="btnStyle">Submit<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </form>
                    </div> 
                    <!-- <div class="formDesign boxs">
                        <iframe frameborder="0" style="height:600px;width:100%;border:none;" src='https://forms.zohopublic.in/designowebtechnologies/form/ContactForm/formperma/BMxAiNV2kNAvDgPm27OfFsUzrSidtPv0p5z_tcFHqOM'></iframe>
						<?php //echo do_shortcode("[wpforms id='34']"); ?>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Awards and recognition section start -->
    <x-award_section></x-award_section>
    <!-- Awards and recognition section end -->
</div>
@endsection