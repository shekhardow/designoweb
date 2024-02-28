var Event = function () {
    this.__construct = function () {
        this.loader();
        this.tooltip();
        this.commonForm();
        this.returnForm();
        this.submitForm();
        this.onCountryChange();
        this.onStateChange();
        this.onClick();
    };

    this.loader = function () {
        $(document).ready(function () {
            $(".loader-admin").fadeOut("slow");
        });
    };

    this.tooltip = function () {
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $(document).ready(function () {
                $("#datatable").DataTable({
                    responsive: true,
                    destroy: true,
                });
            });
            $('.summernote').summernote({
                tabsize: 2,
                height: 300
            });
            $('.dropify').dropify();
            // select 2  dropdown 
            $(document).ready(function () {
                var $disabledResults = $(".select2Custom");
                $disabledResults.select2();
                $('b[role="presentation"]').hide();
            });
            // select 2  dropdown End
        });
    };

    this.commonForm = function () {
        $(document).on("submit", "#common-form", function (evt) {
            evt.preventDefault();
            $(".loader").fadeIn("slow");
            var url = $(this).attr("action");
            var contact_us = $(this).data('contact');
            var postdata = $(this).serialize();
            $.post(url, postdata, function (out) {
                $(".loader").fadeOut("slow");
                $(".formGroupInner > .text-danger").remove();
                if (out.result === 0) {
                    if (contact_us === '') {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 800);
                    }
                    for (var i in out.errors) {
                        $("#" + i).parents(".formGroupInner").append('<span class="text-danger">' + out.errors[i] + "</span>");
                    }
                    $('#thankyouModal').modal('hide');
                }
                if (out.result === -1) {
                    
                    $('html, body').animate({
                        scrollTop: 0
                    },1000);
                    var message =
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    $(".error_msg")
                        .removeClass("alert-danger alert-success")
                        .addClass("alert alert-danger alert-dismissable")
                        .show();
                    $(".error_msg").html(message + out.msg);
                    $(".error_msg").fadeOut(5000);
                }
                if (out.result === -2) {
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-center", // change this to "toast-top-center"
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                          };
                          toastr.remove()
                          toastr.error(out.msg); 
                          return false;
                }
                if (out.result === -5) {
                    var message =
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    $(".error_msg_modal")
                        .removeClass("alert-danger alert-success")
                        .addClass("alert alert-danger alert-dismissable")
                        .show();
                    $(".error_msg_modal").html(message + out.msg);
                    $(".error_msg_modal").fadeOut(2000);
                    window.setTimeout(function () {
                        window.location.href = out.url;
                    }, 1000);
                }
                if (out.result === 1) {
                    var message =
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    $(".error_msg")
                        .removeClass("alert-danger alert-danger")
                        .addClass("alert alert-success alert-dismissable")
                        .show();
                    $(".error_msg").html(message + out.msg);
                    $(".error_msg").fadeOut(2000);
                    $('html, body').animate({
                        scrollTop: 0
                    }, 800);
                    if (out.url !== undefined) {
                        window.setTimeout(function () {
                            window.location.href = out.url;
                        }, 1000);
                    }
                }
                if (out.result === 4) {
                    window.location.href = out.url;
                }
                if (out.result === 6) {
                   $('#first_name').val('');
                   $('#last_name').val('');
                   $('#work_email').val('');
                   $('#contactNumber').val('');
                   $('#message').val('');
                    $('#thankyouModal').modal('show');
                }
                if (out.result === 5) {
                    var message =
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    $(".error_msg_modal")
                        .removeClass("alert-danger alert-danger")
                        .addClass("alert alert-success alert-dismissable")
                        .show();
                    $(".error_msg_modal").html(message + out.msg);
                    $(".error_msg_modal").fadeOut(2000);
                    if (out.url !== undefined) {
                        window.setTimeout(function () {
                            window.location.href = out.url;
                        }, 1000);
                    }
                }
            });
        });
    };
    
    this.returnForm = function(){
        $(document).on('click', '#return_form', function(evt){
            evt.preventDefault();
            var url = $(this).attr('href');
            var val = $('#return_value').val();
            var homeurl=$('#homeurl').val();
            if(val==''){
                window.location.href=homeurl;
                return;
            }
            $.post(url, {}, function(out){
                if(val === 'step1'){
                    $('#step1-wrapper').css('display', 'block');
                    $("#step1-wrapper").html(out.step1_wrapper);
                    $("#heading").html(out.heading);
                    $('.form_step').html('Step 1/2');
                     $('#return_value').val('')
                    $('#step2-wrapper').hide();
                    $('.addMoreTechInner').on('click', function(){
                        $(this).parents('.formBody').find('.otherSkillsBoxParent').css('display', 'block');
                    })
                    var ms1 = $('#otherSkills').magicSuggest({
                        defaultValues: [3,4,5]
                        // data: ['Java','Python','PHP','.Net','Ruby on Rails','Laravel','Magento','Shopify','Wordpress','Android','Flutter']
                    });
                }if(val === 'step2'){
                    $('#step2-wrapper').css('display', 'block');
                    $("#step2-wrapper").html(out.step1_wrapper);
                    console.log(out.heading);
                    $("#heading").html(out.heading);
                    $('#return_value').val('step1')
                    var step1url = $(".step1return").data('step1url');
                    $('#return_form').attr('href', step1url);
                    $('.form_step').html('Step 2/2');
                    $('#step3-wrapper').hide();
                    var ms1 = $('#otherSkills').magicSuggest({
                        // data: ['Java','Python','PHP','.Net','Ruby on Rails','Laravel','Magento','Shopify','Wordpress','Android','Flutter']
                    });
                }
            })
        })
    }

    this.submitForm = function () {
        $(document).on("submit", "#submit-form", function (evt) {
            evt.preventDefault();
            $(".loader").fadeIn("slow");
            $.ajax({
                url: $(this).attr("action"),
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (out) {
                    $(".loader").fadeOut("slow");
                    $(".formGroupInner, .form-group > .text-danger").remove();
                    if (out.result === 0) {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 800);
                        for (var i in out.errors) {
                            $("#" + i).parents(".formGroupInner, .form-group").append('<span class="text-danger">' + out.errors[i] + "</span>");
                            $("#" + i).focus();
                        }
                    }
                    if (out.result === -1) {
                         toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-center", // change this to "toast-top-center"
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                          };
                        toastr.remove();
                        toastr.error(out.msg);
                        return false;
                    }
                    if (out.result == -5) {
                        $(".employeeCount").parents(".formGroupInner, .form-group").append('<span class="text-danger boxs">' + out.msg + "<span>");
                    }
                    if (out.result == -6) {
                        $(".fundedState").parents(".formGroupInner, .form-group").append('<span class="text-danger boxs">' + out.msg + "<span>");
                    }
                    if (out.result === 1) {
                        var wrapper_url = out.url;
                        $('.hideskillstext').hide();
                       
                        $('#step1-wrapper').hide();
                        $('#step2-wrapper').show();
                        //$('.form_step').html('Step 2/3');
                        var step1url = $(".step1return").data('step1url');
                        $('#return_form').attr('href', step1url);
                        $('#return_value').val('step1');
                        $('#heading').html(out.heading);
                        $.post(wrapper_url, {}, function(res){
                            $('#heading').html(res.heading);
                            $('#step2-wrapper').html(res.step2_wrapper);
                            $(".plusExperience").on("click", function () {
                                var $elm = $(this).parents(".valuebox").find(".qty");
                                $elm.val(Number($elm.val()) + 1);
                            });
                        
                            $(".minusExperience").on("click", function () {
                                var $elm = $(this).parents(".valuebox").find(".qty");
                                var amount = Number($elm.val());
                                if (amount > 1) {
                                    $elm.val(amount - 1);
                                }
                            });
                            $(".plusDevelopers").on("click", function () {
                                var $elm = $(this).parents(".valuebox").find(".qty");
                                $elm.val(Number($elm.val()) + 1);
                            });
                        
                            $(".minusDevelopers").on("click", function () {
                                var $elm = $(this).parents(".valuebox").find(".qty");
                                var amount = Number($elm.val());
                                if (amount > 1) {
                                    $elm.val(amount - 1);
                                }
                            });
                        })
                    }
                    if (out.result === 2) {
                      
                        var wrapper_url = out.url;
                        $('.hideskillstext').hide();
                        $('#step2-wrapper').hide();
                        $('#step3-wrapper').show();
                       // $('.form_step').html('Step 3/3');
                        var step2url = $(".step2return").data('step2url');
                        $('#return_form').attr('href', step2url);
                        $('#return_value').val('step2')
                        $.post(wrapper_url, {}, function(resu){
                        
                            $('#step3-wrapper').html(resu.step3_wrapper);
                            // $("#contact_no").intlTelInput({
                            //     preferredCountries: ["in" ],
                            //     separateDialCode:false,
                            //     nationalMode: false,
                            //     utilsScript:"",
                            // });
                        })
                    }
                    if (out.result === 3) {
                        window.location.href = out.url;
                    }
                },
            });
        });
    };
     this.onCountryChange = function () {
        $(document).on('change', '#country_id', function (evt) {
            evt.preventDefault();
            $(".loader-admin").fadeIn("slow");
            var url = $(this).data('url');
            //var url = $(this).attr('data-url');
            var country = $(this).val();
            $.post(url,{country:country}, function (out) {
                $(".loader-admin").fadeOut("slow");
                if (out.result === 1) {
                    $('#state_id').html(out.html);
                }
            });
            
        });
    };

    this.onStateChange = function () {
        $(document).on('change', '#state_id', function (evt) {
            evt.preventDefault();
            $(".loader-admin").fadeIn("slow");
            var url = $(this).data('url');
            var state = $(this).val();
            $.post(url,{state:state}, function (out) {
                $(".loader-admin").fadeOut("slow");
                if (out.result === 1) {
                    $('#city_id').html(out.html);
                }
            });
            
        });
    };

    this.onClick = function () {
        $(document).on('click', '.hideButton', function (evt) {
            evt.preventDefault();
            var url = $(this).data('url');
            var value = $(this).data('value');
            $(this).parents('.selectButton').remove();
            $.post(url,{value:value}, function (out) {
                if (out.result === 1) {
                     toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center", // change this to "toast-top-center"
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      };
                    toastr.remove();
                    toastr.success('Other technology deleted successfully');
                    return false;
                }else{
                     toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center", // change this to "toast-top-center"
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      };
                    toastr.remove();
                    toastr.error('Deletion failed!');
                    return false;
                }
            }); 
        });
        // $(document).on('click', '#butsave', function (evt) {
        //     evt.preventDefault();
        //     var url = $(this).data('url');
        //     var displayedSkills = $('#displayedSkills').data('value');
        //     alert(url)
        //     $.post(url,{displayedSkills:displayedSkills}, function (out) {
        //         if (out.result === 1) {
        //             toastr.remove();
        //             toastr.success('Data saved successfully');
        //         }else{
        //             toastr.remove();
        //             toastr.error('Data not saved!');
        //         }
        //     }); 
        // });
    };

    this.__construct();
};
var obj = new Event();