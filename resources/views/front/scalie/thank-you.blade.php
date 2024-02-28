@extends('front/layout')
@section('content')

@push('scalie_css')
<link href="<?php echo url('public/front/css/scalie/style.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
<link href="<?php echo url('public/front/css/scalie/media.css'); ?>" rel="stylesheet" rel="stylesheet"></link>
@endpush

<div class="mainBody sectionTop scaliePage boxs blueBg blueBgNew">
    <div class="thankyouPage thankyouPage2 pt-5 pb-5 boxs">
        <div class="container">
            <div class="thankyouInner thankyouInnerNew boxs">
                <div class="pageHeadings boxs text-center">
                    <h1 class="formSubHeadSec2 fontSize32 boxs colorWhite boldFont">Thank you for sharing your Requirements</h1>
                    <span class="formHeadContentSec fontSize18 boxs">We will reach out to you shortly. Please schedule a call with us if you would want to speak with us right away.</span>
                </div>
                <div class="calendlyBox">
                    <div class="calendlySection boxs">
                         <div class="calendly-inline-widget" data-url="https://calendly.com/garima-36/30min" style="min-width:320px;max-height:820px;min-height: 820px;"></div> 
                         <!--<div class="calendly-inline-widget" data-url="https://calendly.com/bhuvan-designoweb/15min" style="min-width:320px;max-height:820px;min-height: 820px;"></div> -->
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
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