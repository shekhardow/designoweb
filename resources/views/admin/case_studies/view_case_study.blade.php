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
                            Case Study Details
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Project Name :</label>
                        <label><?php echo !empty($case_study_detail->project_name) ? $case_study_detail->project_name : ""; ?></label>
                    </div>
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Tagline :</label>
                        <label><?php echo !empty($case_study_detail->tagline) ? $case_study_detail->tagline : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Description :</label>
                        <label><?php echo !empty($case_study_detail->description) ? $case_study_detail->description : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Industry :</label>
                        <label><?php echo !empty($case_study_detail->industry) ? $case_study_detail->industry : ""; ?></label>
                    </div>
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Business Type :</label>
                        <label><?php echo !empty($case_study_detail->business_type) ? $case_study_detail->business_type : ""; ?></label>
                    </div>
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Required Services :</label>
                        <label><?php echo !empty($case_study_detail->required_services) ? $case_study_detail->required_services : ""; ?></label>
                    </div>
                    <div class="col-lg-6 validate">
                        <label class="bold-label">Build Your Idea :</label>
                        <label><?php echo !empty($case_study_detail->build_your_idea) ? $case_study_detail->build_your_idea : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Given Services :</label>
                        <label><?php echo !empty($case_study_detail->given_services) ? $case_study_detail->given_services : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Client Requirement :</label>
                        <label><?php echo !empty($case_study_detail->client_requirement) ? $case_study_detail->client_requirement : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Design Layout :</label>
                        <label><?php echo !empty($case_study_detail->design_layout) ? $case_study_detail->design_layout : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Palette :</label>
                        <label><?php echo !empty($case_study_detail->palette) ? $case_study_detail->palette : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">About Project :</label>
                        <label><?php echo !empty($case_study_detail->about_project) ? $case_study_detail->about_project : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Technology Used :</label>
                        <label><?php echo !empty($case_study_detail->technology_used) ? $case_study_detail->technology_used : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Client Quote :</label>
                        <label><?php echo !empty($case_study_detail->client_quote) ? $case_study_detail->client_quote : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-lg-12 validate">
                        <label class="bold-label">Client Name :</label>
                        <label><?php echo !empty($case_study_detail->client_name) ? $case_study_detail->client_name : ""; ?></label>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <?php if (!empty($case_study_detail->client_image)) { ?>
                        <div class="col-lg-6 validate">
                            <label class="bold-label">Client Image :</label>
                            <label><img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/case_studies/' . $case_study_detail->client_image); ?>"></label>
                        </div>
                    <?php } ?>
                    <?php if (!empty($case_study_detail->case_banner)) { ?>
                        <div class="col-lg-6 validate">
                            <label class="bold-label">Case Banner :</label>
                            <label><img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/case_studies/' . $case_study_detail->case_banner); ?>"></label>
                        </div>
                    <?php } ?>
                    <?php if (!empty($case_study_detail->case_front_image)) { ?>
                        <div class="col-lg-6 validate">
                            <label class="bold-label">Case Front Image :</label>
                            <label><img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/case_studies/' . $case_study_detail->case_front_image); ?>"></label>
                        </div>
                    <?php } ?>
                    <?php if (!empty($case_study_detail->client_wanted_banner)) { ?>
                        <div class="col-lg-6 validate">
                            <label class="bold-label">Client Wanted Banner :</label>
                            <label><img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/case_studies/' . $case_study_detail->client_wanted_banner); ?>"></label>
                        </div>
                    <?php } ?>
                    <?php if (!empty($case_study_detail->case_detail_screen_banner)) { ?>
                        <div class="col-lg-6 validate">
                            <label class="bold-label">Case Detail Screen Banner :</label>
                            <label><img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/case_studies/' . $case_study_detail->case_detail_screen_banner); ?>"></label>
                        </div>
                    <?php } ?>
                    <?php if (!empty($case_study_detail->case_detail_card_image)) { ?>
                        <div class="col-lg-6 validate">
                            <label class="bold-label">Case Detail Card Image :</label>
                            <label><img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/case_studies/' . $case_study_detail->case_detail_card_image); ?>"></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection