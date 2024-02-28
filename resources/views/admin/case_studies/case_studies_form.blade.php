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
                                        <?php if(empty($case_study_detail)){ echo 'Add'; }else{ echo 'Edit'; } ?> Case Study <?php echo !empty($case_study_detail->project_name) ? $case_study_detail->project_name : NULL ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <form method="post" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="submit-form" action="<?php if(!empty($case_study_detail->case_study_id)){ echo url('admin/do_update_case_studies/'.encryptionID($case_study_detail->case_study_id)); }else{ echo url('admin/do_add_case_studies'); } ?>">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-6">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name" value="<?php echo !empty($case_study_detail->project_name) ? $case_study_detail->project_name : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Tagline</label>
                                        <input type="text" class="form-control" id="tagline" name="tagline" value="<?php echo !empty($case_study_detail->tagline) ? $case_study_detail->tagline : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Project Type</label>
                                        <select class="form-select form-control" id="project_type" name="project_type">
                                            <option selected disabled>Select Project Type</option>
                                            <option value="Website" <?php if(!empty($case_study_detail)){ if($case_study_detail->project_type == 'Website'){ echo 'selected'; } } ?>>Website</option>
                                            <option value="Application" <?php if(!empty($case_study_detail)){ if($case_study_detail->project_type == 'Application'){ echo 'selected'; } } ?>>Application</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Project Link</label>
                                        <input type="text" class="form-control" id="project_link" name="project_link" value="<?php echo !empty($case_study_detail->project_link) ? $case_study_detail->project_link : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Description</label>
                                        <textarea rows="3" class="form-control" id="description" name="description" value=""><?php echo !empty($case_study_detail->description) ? $case_study_detail->description : NULL ?></textarea>
                                        {{-- <input type="text" class="form-control" id="description" name="description" value="<?php //echo !empty($case_study_detail->description) ? $case_study_detail->description : NULL ?>"> --}}
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-6">
                                        <label>Industry</label>
                                        <input type="text" class="form-control" id="industry" name="industry" value="<?php echo !empty($case_study_detail->industry) ? $case_study_detail->industry : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Required Services</label>
                                        <input type="text" class="form-control" id="services" name="services" value="<?php echo !empty($case_study_detail->required_services) ? $case_study_detail->required_services : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Business Type</label>
                                        <input type="text" class="form-control" id="business_type" name="business_type" value="<?php echo !empty($case_study_detail->business_type) ? $case_study_detail->business_type : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Build Your Idea</label>
                                        <input type="text" class="form-control" id="build_your_idea" name="build_your_idea" value="<?php echo !empty($case_study_detail->build_your_idea) ? $case_study_detail->build_your_idea : NULL ?>">
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-6">
                                        <label>Client Requirement</label>
                                        <textarea rows="5" class="form-control" id="client_requirement" name="client_requirement" value=""><?php echo !empty($case_study_detail->client_requirement) ? $case_study_detail->client_requirement : NULL ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Given Services</label>
                                        <textarea rows="3" class="form-control tinymice" id="given_services" name="given_services" value=""><?php echo !empty($case_study_detail->given_services) ? $case_study_detail->given_services : NULL ?></textarea>
                                    </div>
                                </div>
                                <div class="m-form__group projectChallengesGroup">
                                    <?php if((empty($case_challenges))){ ?>
                                        <div class="row project_challenge">
                                            <div class="form-group col-lg-5">
                                                <label>Project Challenge</label>
                                                <textarea rows="3" class="form-control" id="challenge[]" name="challenge[]" value=""></textarea>
                                                {{-- <input type="text" class="form-control" id="challenge" name="challenge" value="<?php //echo !empty($case_study_detail->challenge) ? $case_study_detail->challenge : NULL ?>"> --}}
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>solution</label>
                                                <textarea rows="3" class="form-control" id="solutions[]" name="solutions[]" value=""></textarea>
                                                {{-- <input type="text" class="form-control" id="solutions" name="solutions" value="<?php //echo !empty($case_study_detail->solutions) ? $case_study_detail->solutions : NULL ?>"> --}}
                                            </div>
                                            <div class="form-group col-lg-1">
                                                <span class="commonBtnsBox">
                                                    <a class="addMoreProjectChallenges commonBtn" href="javascript:void(0)">+</a>
                                                    <a class="removeProjectChallenge commonBtn" href="javascript:void(0)">-</a>
                                                </span>
                                            </div>
                                        </div>
                                    <?php }else{ foreach($case_challenges as $key => $value){ ?>
                                        <div class="row project_challenge">
                                            <div class="form-group col-lg-5">
                                                <label>Project Challenge</label>
                                                <textarea rows="3" class="form-control" id="challenge[]" name="challenge[]" value=""><?php echo !empty($value->challenge) ? $value->challenge : NULL ?></textarea>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>solution</label>
                                                <textarea rows="3" class="form-control" id="solutions[]" name="solutions[]" value=""><?php echo !empty($value->solutions) ? $value->solutions : NULL ?></textarea>
                                            </div>
                                            <div class="form-group col-lg-1">
                                                <span class="commonBtnsBox">
                                                    <a class="addMoreProjectChallenges commonBtn" href="javascript:void(0)">+</a>
                                                    <a class="removeProjectChallenge commonBtn" href="javascript:void(0)">-</a>
                                                </span>
                                            </div>
                                        </div>
                                    <?php } } ?> 
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-6">
                                        <label>Design Layout</label>
                                        <textarea rows="3" class="form-control" id="design_layout" name="design_layout" value=""><?php echo !empty($case_study_detail->design_layout) ? $case_study_detail->design_layout : NULL ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Palette</label>
                                        <textarea rows="3" class="form-control" id="palette" name="palette" value=""><?php echo !empty($case_study_detail->palette) ? $case_study_detail->palette : NULL ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>About Project</label>
                                        <textarea rows="3" class="form-control" id="about_project" name="about_project" value=""><?php echo !empty($case_study_detail->about_project) ? $case_study_detail->about_project : NULL ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Technology Used</label>
                                        <textarea rows="3" class="form-control" id="technology_used" name="technology_used" value=""><?php echo !empty($case_study_detail->technology_used) ? $case_study_detail->technology_used : NULL ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Client Quote</label>
                                        <textarea rows="3" class="form-control" id="client_quote" name="client_quote" value=""><?php echo !empty($case_study_detail->client_quote) ? $case_study_detail->client_quote : NULL ?></textarea>
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-6">
                                        <label>Client Name</label>
                                        <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo !empty($case_study_detail->client_name) ? $case_study_detail->client_name : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Client Image</label>
                                        <input type="file" name="client_image" id="client_image" class="form-control" value="" data-image="client_image" accept="image/*">
                                        <?php if(!empty($case_study_detail->client_image)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/case_studies/'.$case_study_detail->client_image); ?>" alt="Client Image">
                                            </div>
                                        <?php }else{ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo url('public/front/img/client-default-image.webp'); ?>" alt="Client Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Case Banner</label>
                                        <input type="file" name="case_banner" id="case_banner" class="form-control" value="" data-image="case_banner_image" accept="image/*">
                                        <?php if(!empty($case_study_detail->case_banner)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/case_studies/'.$case_study_detail->case_banner); ?>" alt="Case Banner Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Case Front Image</label>
                                        <input type="file" name="case_front_image" id="case_front_image" class="form-control" value="" data-image="case_front_image" accept="image/*">
                                        <?php if(!empty($case_study_detail->case_front_image)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/case_studies/'.$case_study_detail->case_front_image); ?>" alt="Case Front Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Client Wanted Banner</label>
                                        <input type="file" name="client_wanted_banner" id="client_wanted_banner" class="form-control" value="" data-image="client_wanted_banner" accept="image/*">
                                        <?php if(!empty($case_study_detail->client_wanted_banner)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/case_studies/'.$case_study_detail->client_wanted_banner); ?>" alt="Client Wanted Banner Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Case Detail Screen Banner</label>
                                        <input type="file" name="case_detail_screen_banner" id="case_detail_screen_banner" class="form-control" value="" data-image="case_detail_screen_banner" accept="image/*">
                                        <?php if(!empty($case_study_detail->case_detail_screen_banner)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/case_studies/'.$case_study_detail->case_detail_screen_banner); ?>" alt="Case Detail Screen Banner Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Case Detail Card Image</label>
                                        <input type="file" name="case_detail_card_image" id="case_detail_card_image" class="form-control" value="" data-image="case_detail_card_image" accept="image/*">
                                        <?php if(!empty($case_study_detail->case_detail_card_image)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/case_studies/'.$case_study_detail->case_detail_card_image); ?>" alt="Case Detail Card Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="<?php echo url('admin/case_studies'); ?>" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-primary"> <?php if(empty($case_study_detail)){ echo 'Save'; }else{ echo 'Update'; } ?></button>
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