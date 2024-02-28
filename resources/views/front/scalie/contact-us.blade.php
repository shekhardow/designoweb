@extends('front/layout')
@section('content')

@push('scalie_css')
<link href="<?php echo url('public/front/css/scalie/style.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
<link href="<?php echo url('public/front/css/scalie/media.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
@endpush


<div class="mainBody sectionTop scaliePage boxs">
    <div class="contactUsBanner boxs">
        <div class="container">
            <div class="contactBannerContent boxs">
                <div class=" boxs">
                    <h2 class="fontSize48 boxs colorWhite">Need Help ? <br>Contact Us</h2>
                    <span class="fontSize18 boxs colorWhite">Trouble Signing up? Have some queries? Do you have a Business Opportunity? <br><span class="mediumFont">Contact us Today</span></span>
                </div>
                <span class="contactBannerIcon"><img src="<?php echo url('public/front/images/scalie/contactImo.png') ?>" class="img-fluid" aria-colcount="Image"></span>
            </div>
        </div>
    </div>

    <div class="contactUsForm boxs padding75">
        <div class="container">
            <div class="contactPageInner boxs">
                 <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="contactUsLeft boxs">
                            <div class="sectionHeading sectionHeading2 boxs">
                                <h2 class="fontSize36 boxs mb-0">Our Support</h2>
                            </div>
                            <div class="contactUsDetails boxs">
                                <div class="contactUsSection boxs">
                                    <span class="contactUsHeading boxs"><h4 class="fontSize22 boxs">Phone</h4></span>
                                    <div class="contactUsInfo contactNos boxs">
                                        <span class="fontSize18 contactInfo boxs"><a href="tel:+91(012)03113922">+91 (012) 03113922</a></span>
                                        <span class="fontSize18 contactInfo boxs"><a href="tel:+1(323)744-6965">+1 (323) 744-6965</a></span>
                                    </div>
                                </div>
                                <div class="contactUsSection boxs">
                                    <span class="contactUsHeading boxs"><h4 class="fontSize22 boxs">Email</h4></span>
                                    <div class="contactUsInfo contactMails boxs">
                                        <span class="fontSize18 contactInfo boxs"><a href="mailto:info@designoweb.com">info@designoweb.com</a></span>
                                        <!-- <span class="fontSize18 contactInfo boxs"><a href="mailto:partners@scalie.io">partners@scalie.io</a></span> -->
                                    </div>
                                </div>
                                <div class="contactUsSection boxs">
                                    <span class="contactUsHeading boxs"><h4 class="fontSize22 boxs">India Office</h4></span>
                                    <div class="contactUsInfo contactAddress boxs">
                                        <span class="fontSize18 contactInfo boxs">C-56/47, 5th Floor, Sec-62, Noida, UP 201309</span>
                                    </div>
                                </div>
                                <div class="contactUsSection boxs">
                                    <span class="contactUsHeading boxs"><h4 class="fontSize22 boxs">US Office</h4></span>
                                    <div class="contactUsInfo contactAddress boxs">
                                        <span class="fontSize18 contactInfo boxs">Designoweb Technologies, 15 Goose Trail Taylors SC 29687, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="contactUsRight boxs">
                            
                            <form class="formDesign formDesignNew boxs" id="common-form" method="post" action="<?php echo url('Front/doContactUs') ?>">
                                <div class="error_msg"></div>
                                <div class="form-group boxs">
                                    <div class=" boxs">
                                        <label>Your Name*</label>
                                        <div class="row">
                                            <div class="col-sm-6 formGroupSec">
                                                <div class="formGroupInner boxs">
                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 formGroupSec">
                                                <div class="formGroupInner boxs">
                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group boxs">
                                    <div class="formGroupInner boxs">
                                        <label>Your Work Email*</label>
                                        <input type="email" class="form-control" placeholder="Your Work Email" id="work_email" name="work_email">
                                    </div>
                                </div>
                                <div class="form-group boxs">
                                     <div class=" boxs">
                                        <div class=" boxs">
                                            <label>Contact Number*</label>
                                            <div class="row">
                                                <div class="col-sm-3 formGroupSec formGroupSecCode">
                                                    <div class="formGroupInner boxs">
                                                        <!--<input type="text" class="form-control" id="country" name="country" placeholder="Country">-->
                                                        <select class="countrycode js-example-basic-single form-control" name="country_code" id="country">
                                                              <option value="+91">+91</option>
                                                        <?php if(!empty($country_codes)){
                                                            foreach($country_codes as $pcode){
                                                                if(!empty($pcode['phonecode'])){?>
                                                                    <option value="+<?php echo $pcode['phonecode']; ?>">+<?php  echo $pcode['phonecode']; ?></option>
                                                         <?php } }} ?>
                                                         
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9 formGroupSec formGroupSecCode2">
                                                    <div class="formGroupInner boxs">
                                                        <input type="number" id="contactNumber" name="contactNumber" class="form-control" placeholder="Contact Number">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group boxs">
                                    <div class="formGroupInner boxs">
                                        <label>Message*</label>
                                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Write Your Message Here..."></textarea>
                                    </div>
                                </div>
                                <div class="formFooter boxs mt-2">
                                    <button class="btnStyle" type="submit">Send</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="scalieInfo scalieInfo2 boxs">
        <div class="container">
            <div class="scalieInfoInner boxs">
                <span class="fontSize16 mediumFont"><span class="boldFont">580</span> Active Requirements</span>
                <span class="fontSize16 mediumFont"><span class="boldFont">112</span> Customers</span>
                <span class="fontSize16 mediumFont"><span class="boldFont">1056</span> Designoweb Partners</span>
                <span class="fontSize16 mediumFont"><span class="boldFont">134</span> Active Contracts</span>
            </div>
        </div>
    </div>


</div>

@push('scalie_js')
<script src="<?php echo url('public/front/js/scalie/custom.js?v:1.1'); ?>"></script>
@endpush

@endsection