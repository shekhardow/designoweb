@extends('admin/layout')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        <?php if(empty($testimonial_detail)){ echo 'Add'; }else{ echo 'Edit'; } ?> Testimonial
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <form method="post" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="submit-form" action="<?php if(!empty($testimonial_detail->testimonial_id)){ echo url('admin/do_update_testimonial/'.encryptionID($testimonial_detail->testimonial_id)); }else{ echo url('admin/do_add_testimonial'); } ?>">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-6">
                                        <label>Client Name</label>
                                        <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo !empty($testimonial_detail->client_name) ? $testimonial_detail->client_name : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name" value="<?php echo !empty($testimonial_detail->project_name) ? $testimonial_detail->project_name : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Client Quote</label>
                                        <textarea rows="5" class="form-control" id="client_quote" name="client_quote" value=""><?php echo !empty($testimonial_detail->client_quote) ? $testimonial_detail->client_quote : NULL ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Client Image</label>
                                        <input type="file" name="client_image" id="client_image" class="form-control" value="" data-image="client_image" accept="image/*">
                                        <?php if(!empty($testimonial_detail->client_image)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 100px; height:100px;" src="<?php echo asset('uploads/admin/testimonials/'.$testimonial_detail->client_image); ?>" alt="Client Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Video</label>
                                        <input type="text" class="form-control" id="video_link" name="video_link" value="<?php echo !empty($testimonial_detail->video_link) ? $testimonial_detail->video_link : NULL ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="<?php echo url('admin/testimonials'); ?>" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-primary"> <?php if(empty($testimonial_detail)){ echo 'Save'; }else{ echo 'Update'; } ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection