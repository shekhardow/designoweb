<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo @$title; ?></title>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://designoweb.com/">
    <meta property="og:title" content="App Development Company in India & USA | Designoweb Technologies">
    <meta property="og:description" content="Designoweb Technologies is a leading mobile app development company with a global presence in India & USA. We specialize in delivering digital solutions to startups & enterprises worldwide.">
    <meta property="og:image" content="https://designoweb.com/public/front/images/ogImage.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>-->
    <link defer rel="stylesheet" href="<?php echo url('public/front/css/scalie/bootstrap.min.css'); ?>"/>
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link href="<?php echo url('public/front/css/slick.css'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/slick-theme.css?v:1.1'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/intlTelInput.min.css?v:1.1'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/scalie/magicsuggest.css')?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/scalie/style.css?v=110.1'); ?>" rel="stylesheet" />
    <link href="<?php echo url('public/front/css/scalie/media.css?v=110.1'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
</head>
<body>

<div class="mainBody sectionTop sectionTop2 boxs bodySection scaliePage scaliePageNew">
    <div class="ourTestimonialsSec boxs">
        <div class="stepsContainerPage boxs">
            <div class="newFormHeaderSec boxs">
                <div class="container container2">
                    <div class="newFormHeader boxs">
                        <span class="formHeaderLogo">
                            <a class="navbar-brand" href="<?php echo url('') ?>" style="display: inline-block" ><img src="<?php echo url('public/front/images/scalie/logo-web.svg') ?>" class="img-fluid" alt="Company Logo" /></a>
                        </span>
                        <span class="formHEaderHelp"><a class="" href="<?php echo url('contact') ?>">Need Help?</a></span>
                    </div>
                </div>
            </div>
            <div class="formSections signupSteps signupStepsNew stepsContainer boxs">
                <div class="stepsContainerChild boxs">
                    <div class="container container2">
                        
                        <div class="formInnerBox boxs">
                            <div class="bodyFormBox boxs">
                                <div class="formHeading boxs">
                                    
                                    <span class="formHeadingSec fontSize20 boxs"><span class="">
                                        <a href="javascript:history.back()"><img src="<?php echo url('public/front/images/scalie/backArrow.png') ?>" class="img-fluid" alt="Icon"></a></span><p class="form_step">Step 1/2</p></span>                                  
                                </div>
                                <div class="formBody boxs" id="step1-wrapper">
                                    <div class="pageHeadings boxs">
                                        <span class="formSubHeadSec fontSize20 boxs">Find developers to hire</span>
                                        <span class="formHeadContentSec fontSize18 boxs">Select the desired technologies </span>
                                    </div>
                                    <form class="boxs skillsListsSection" id="common-form" method="post" action="<?php echo route('Front/doStep/1') ?>">
                                        <div class="error_msg"></div>
                                        <div class="multipleOption boxs">
                                            <div class="skillsListsChild boxs">
                                                <?php if(($technology->isNotEmpty())){ $i=0;foreach ($technology as $value) { ?>
                                                    <div class="skillsListsItems boxs">
                                                        <div class="selectOption boxs">
                                                            <input type="checkbox" id="selectOption_<?php echo $i; ?>" name="selectOption[]"  value="<?php echo !empty($value->tech_id)?$value->tech_id:0; ?>"
                                                            <?php if(!empty($first_step)){
                                                                if(in_array($value->tech_id,$first_step)){
                                                                    echo "checked";
                                                                }
                                                            } ?> >
                                                            <label for="selectOption_<?php echo $i; ?>">
                                                                <span class="optionImage boxs">
                                                                    <?php if(!empty($value->image_url)){ ?>
                                                                        <img src="<?php echo url('public/front/images/scalie/').'/'.$value->image_url; ?>" class="img-fluid" alt="Icon">
                                                                    <?php  }else{?>
                                                                        <img src="<?php echo url('public/front/images/scalie/techAndroid.png') ?>" class="img-fluid" alt="Icon">
                                                                    <?php }?>
                                                                </span>
                                                                <span class="optionName boxs"><?php echo !empty($value->name)?$value->name:""; ?></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php $i++;}} ?>
                                                <div class="skillsListsItems boxs">
                                                    <div class="selectOption addMoreTech boxs">
                                                        <a href="javascript:void(0)" class="addMoreTechInner boxs">
                                                            <span><img src="<?php echo url('public/front/images/scalie/moreTechs.png') ?>" class="img-fluid" alt="Icon"></span>
                                                            <span class="optionName">Others</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="otherSkillsBoxParent boxs">
                                            <div class="otherSkillsBox formSecDesign boxs">
                                                <input type="text" class="form-control" id="otherSkills" name="otherSkills" value="" placeholder="Enter other skills" style="width:100%;">
                                            </div>
                                        </div>
    
                                        <!-- custom code start -->
        
                                        <!-- <div class="tagContainer boxs">
                                            <div class="buttonBox boxs">
                                                <div class="selectButton"><span class="selectVelue fontSize15">javacsript</span><span class="hideButton"><i class="fas fa-times"></i></span></div>
                                                <div class="selectButton"><span class="selectVelue fontSize15">gitHub</span><span class="hideButton"><i class="fas fa-times"></i></span></div>
                                                <div class="selectButton"><span class="selectVelue fontSize15">Bootstrap</span><span class="hideButton"><i class="fas fa-times"></i></span></div>
                                                <div class="selectButton"><span class="selectVelue fontSize15">php</span><span class="hideButton"><i class="fas fa-times"></i></span></div>
                                                <div class="selectButton"><span class="selectVelue fontSize15">value</span><span class="hideButton"><i class="fas fa-times"></i></span></div>
                                            </div>
                                        </div> -->
    
                                        <!-- custom code end -->
    
                                        <div class="workEmailBox boxs">
                                            <div class="form-group boxs">
                                                <label>Your work email</label>
                                                <input type="email" class="form-control" id="workEmail" name="workEmail" placeholder="name@company.com" />
                                            </div>
                                        </div>
                                        <div class="formFooter boxs">
                                            <button class="btnStyle" type="submit">Continue</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="formBody boxs" id="step2-wrapper">
                                
                                    
                                </div>
                                <div class="formBody partnerDetailsStep boxs" id="step3-wrapper">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Testimonials Start  -->

        <div class="ourTestimonialsBox text-center boxs">
            <div class="ourTestimonialsBoxChild customScroll customScroll2 boxs">
                <h3 class="testimonialSecHeading boxs fontSize28 mediumFont colorWhite">Build Amazing Teams, On Demand</h3>
                <span class="testimonialSecContent boxs fontSize18 lightFont colorWhite">Quickly Build & Scale the teams you need, exactly when you need them.</span>
                <div class="clientsTestimonialsBox boxs">
                    <span class="clientsTestsHeading boxs fontSize16 lightFont colorWhite">Our Client Testimonials</span>
                    <div class="testimonialSlider boxs">
                        <div class="testimonialSlide boxs">
                            <div class="testimonialImage boxs">
                                <span class="testimonialImageChild"><img src="<?php echo url('public/front/images/scalie/slideImage1.jpg'); ?>" class="img-fluid" alt="Testimonial Image"></span>
                            </div>
                            <span class="testimonialBy boxs fontSize14 lightFont colorWhite">Habeeb Kamaal</span>
                            <span class="testimonialCompany boxs fontSize14 lightFont colorWhite">Sata</span>
                            <!--<p class="testimonialText boxs fontSize14 lightFont colorWhite">"Designoweb provided me with the best services out there. I wanted to make pets comfortable just like their own home."</p>-->
                            <p class="testimonialText boxs fontSize14 lightFont colorWhite">"Since we ourselves are a software company, our expectations were high. By giving Designoweb a set of requirements, they produced impressive result."</p>
                        </div>
                        <div class="testimonialSlide boxs">
                            <div class="testimonialImage boxs">
                                <span class="testimonialImageChild"><img src="<?php echo url('public/front/images/scalie/slideImage2.jpg'); ?>" class="img-fluid" alt="Testimonial Image"></span>
                            </div>
                            <span class="testimonialBy boxs fontSize14 lightFont colorWhite">Mandisi Khumalo</span>
                            <span class="testimonialCompany boxs fontSize14 lightFont colorWhite">Fuela</span>
                            <p class="testimonialText boxs fontSize14 lightFont colorWhite">"We have been continually working with technology experts at Designoweb. I appreciate them for letting us use their qualified resources."</p>
                        </div>
                        <div class="testimonialSlide boxs">
                            <div class="testimonialImage boxs">
                                <span class="testimonialImageChild"><img src="<?php echo url('public/front/images/scalie/slideImage3.jpg'); ?>" class="img-fluid" alt="Testimonial Image"></span>
                            </div>
                            <span class="testimonialBy boxs fontSize14 lightFont colorWhite">Sonny Arco</span>
                            <span class="testimonialCompany boxs fontSize14 lightFont colorWhite">Dwear</span>
                            <p class="testimonialText boxs fontSize14 lightFont colorWhite">"It's amazing that Designoweb team was able to meet our requirement for stack's strict candidate quickly. We are delighted by their results."</p>
                        </div>
                    </div>                                    
                </div>
                <span class="clientsHeading boxs fontSize16 lightFont colorWhite">Loved by world's leading companies</span>
                <div class="clientsLists boxs">
                    <div class="clientListBox boxs">
                        <span class="clientIcon boxs"><img src="<?php echo url('public/front/images/scalie/slideDiabetes.png'); ?>" class="img-fluid" alt="Client Logo"/></span>
                        <span class="clientCompany boxs fontSize10 lightFont colorWhite">Diabetes Craft</span>
                    </div>
                    <div class="clientListBox boxs">
                        <span class="clientIcon boxs"><img src="<?php echo url('public/front/images/scalie/slideSmart.png'); ?>" class="img-fluid" alt="Client Logo"/></span>
                        <span class="clientCompany boxs fontSize10 lightFont colorWhite">Smart Gate</span>
                    </div>
                    <div class="clientListBox boxs">
                        <span class="clientIcon boxs"><img src="<?php echo url('public/front/images/scalie/slideMop.png'); ?>" class="img-fluid" alt="Client Logo"/></span>
                        <span class="clientCompany boxs fontSize10 lightFont colorWhite">Mad Over Pets</span>
                    </div>
                    <div class="clientListBox boxs">
                        <span class="clientIcon boxs"><img src="<?php echo url('public/front/images/scalie/slideSata.png'); ?>" class="img-fluid" alt="Client Logo"/></span>
                        <span class="clientCompany boxs fontSize10 lightFont colorWhite">Sata</span>
                    </div>
                    <div class="clientListBox boxs">
                        <span class="clientIcon boxs"><img src="<?php echo url('public/front/images/scalie/slideFuela.png'); ?>" class="img-fluid" alt="Client Logo"/></span>
                        <span class="clientCompany boxs fontSize10 lightFont colorWhite">Fuela</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Testimonials ENd -->
        
    </div>
</div>

<script src="<?php echo url('public/front/js/jquery.min.js'); ?>"></script>
<!--<script src="<?php // echo url('public/front/js/bootstrap.bundle.min.js'); ?>"></script>-->
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo url('public/front/js/slick.js?v:1.1'); ?>"></script>
<script src="<?php echo url('public/front/js/intlTelInput.min.js'); ?>"></script>
<script src="<?php echo url('public/front/js/jquery.formatter.min.js'); ?>"></script>
<script src="<?php echo url('public/front/js/countryscript.js'); ?>"></script>
<script src="<?php echo url('public/front/js/scalie/magicsuggest.js') ?>"></script>
<script src="<?php echo url('public/front/js/scalie/custom.js?v:1.1'); ?>"></script>
<script async defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="<?php echo url('public/front/js/event.js?v:1.2'); ?>"></script>
<script>
    $(function() {
        var ms1 = $('#otherSkills').magicSuggest({
            // data: ['Java','Python','PHP','.Net','Ruby on Rails','Laravel','Magento','Shopify','Wordpress','Android','Flutter']
        });
    });
</script>


</body>
</html>






