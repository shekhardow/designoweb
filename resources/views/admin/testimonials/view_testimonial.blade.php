@extends('admin/layout')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Testimonial Details
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Client Name :</label>
                        <label><?php echo !empty($testimonial_detail->client_name) ? $testimonial_detail->client_name : ""; ?></label>
                    </div>
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Project Name :</label>
                        <label><?php echo !empty($testimonial_detail->project_name) ? $testimonial_detail->project_name : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Client Quote :</label>
                        <label><?php echo !empty($testimonial_detail->client_quote) ? $testimonial_detail->client_quote : ""; ?></label>
                    </div>
                    <?php if (!empty($testimonial_detail->client_image)) { ?>
                        <div class="col-lg-12 validate">
                            <label class="bold-label">Client Image :</label>
                            <label><img style="width: 100px; height: 100px;" src="<?php echo url('uploads/admin/testimonials/' . $testimonial_detail->client_image); ?>"></label>
                        </div>
                    <?php } ?>
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Video Link :</label>
                        <label><?php echo !empty($testimonial_detail->video_link) ? $testimonial_detail->video_link : ""; ?></label>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection