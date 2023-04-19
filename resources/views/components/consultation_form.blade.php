<div class="boxs">
    <p class="offshoreFormHead">Take the first step towards productive project discussion</p>
    <div class="offshoreForm formDesign formDesign2 boxs">
        <h2 class="fontSize30">Request a Free Consultation</h2>
        <div class="formInnerSec boxs">
            <?php //echo do_shortcode('[contact-form-7 id="454" title="Free Consultation"]'); ?>
            <form id="submit-form" action="<?php echo route('front/send_consultation_mail'); ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col col-12 col-md-6">
                        <div class="form-group boxs">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" />
                        </div>
                    </div>
                    <div class="col col-12 col-md-6">
                        <div class="form-group boxs">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" />
                        </div>
                    </div>
                    <div class="col col-12 col-md-12">
                        <div class="form-group boxs">
                            <input type="email" name="email" id="email"  class="form-control" placeholder="Email Id" />
                        </div>
                    </div>
                    <div class="col col-12 col-md-12">
                        <div class="form-group boxs">
                            <textarea name="requirements" id="requirements" class="form-control" placeholder="Requirements" rows="4"></textarea>
                        </div>
                    </div>
                     <div class="form-group form-group2 boxs">
                        <div class="g-recaptcha" data-sitekey="6LcWPtghAAAAAMeNPgulr6ZifhyOr--_XIl9SB-R"></div>
                    </div>
                    <!-- Add the honeypot field -->
                    <input type="text" name="website" style="display: none;">
                    <div class="col col-12 col-md-12">
                        <div class="formBtn boxs">
                            <button type="submit" class="btnStyle btnStyle2 btnBlue">Submit<span class="arrowIcn"><i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>