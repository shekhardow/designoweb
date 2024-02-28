<div class="container">
    <div class="queryBoxs boxs">
        <div class="mainSecHeading boxs">
            <span class="smallSubHeading fontSize18">We Help to Enhance your Business</span>
            <h2 class="fontSize38 boxs">Request Free Consultation</h2>
        </div>
        <div class="queryInnerBox flexBox boxs">
            <div class="queryLeft">
                <div class="queryInfoBox boxs">
                    <span class="querySubHeading fontSize24 boxs">Your business thought is significant. We are here to give you the right business ability.</span>
                    <div class="queryLists queryListsNew boxs">
                        <ul>
                            <li class="fontSize18 boxs">On-call assistance in all time zones</li>
                            <li class="fontSize18 boxs">Projects counseling by specialists</li>
                            <li class="fontSize18 boxs">Detail project assessment</li>
                        </ul>
                    </div>
                </div>
                <div class="queryInfoBanner boxs">
                    <img src="<?php echo url('public/front/img/images/ofcGroup.webp'); ?>" class="img-fluid" alt="Query Banner" loading="lazy"/>
                </div>
            </div>
            <div class="queryRight boxs">
                <div class="queryformHeading boxs">
                    <span class="fontSize38 boxs">Have a Query?</span>
                </div>
                <div class="queryForm boxs">
                    <form class="formDesign boxs" id="submit-form" action="<?php echo route('front/send_consultation_mail'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group boxs">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" />
                        </div>
                        <div class="form-group boxs">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" />
                        </div>
                        
                        <div class="form-group boxs">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                        </div>
                        <div class="form-group boxs">
                            <textarea rows="4" class="form-control" id="requirements" name="requirements" placeholder="Requirements"></textarea>
                        </div>
                        <div class="form-group form-group2 boxs">
                            <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LcWPtghAAAAAMeNPgulr6ZifhyOr--_XIl9SB-R"></div>
                            <!--<div id="g-recaptcha" class="g-recaptcha"></div>-->
                        </div>
                        <div class="formBtn boxs">
                            <button type="submit" class="btnStyle">Submit<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container d-none">
    <div class="queryBoxs queryBoxsNew boxs">
        
        <div class="queryInnerBox queryInnerBoxNew boxs">
            <div class="mainSecHeading boxs">
                <h2 class="fontSize48 boxs text-center colorWhite">Request Free Consultation</h2>
            </div>
            <div class="queryRight queryRightNew boxs">
                <div class="queryForm boxs">
                    <form class="formDesign formDesignQuery boxs" id="submit-form" action="<?php echo route('front/send_consultation_mail'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group boxs">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group boxs">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group boxs">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group boxs">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group boxs">
                                    <textarea rows="4" class="form-control" id="requirements" name="requirements" placeholder="Requirements"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group2 boxs">
                                    <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LcWPtghAAAAAMeNPgulr6ZifhyOr--_XIl9SB-R"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="formBtn boxs d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btnStyle">Submit<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></button>
                                </div>                                
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>