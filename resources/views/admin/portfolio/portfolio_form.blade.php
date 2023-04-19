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
                                        <?php if(empty($portfolio_detail)){ echo 'Add'; }else{ echo 'Edit'; } ?> Project
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <form method="post" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="submit-form" action="<?php if(!empty($portfolio_detail->portfolio_id)){ echo url('admin/do_update_project/'.encryptionID($portfolio_detail->portfolio_id)); }else{ echo url('admin/do_add_project'); } ?>">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name" value="<?php echo !empty($portfolio_detail->project_name) ? $portfolio_detail->project_name : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Project Description</label>
                                        <textarea rows="3" class="form-control" id="project_description" name="project_description" value=""><?php echo !empty($portfolio_detail->description) ? $portfolio_detail->description : NULL ?></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Project Type</label>
                                        <select class="form-select form-control" id="project_type" name="project_type">
                                            <option selected disabled>Select Project Type</option>
                                            <option value="Website" <?php if(!empty($portfolio_detail)){ if($portfolio_detail->project_type == 'Website'){ echo 'selected'; } } ?>>Website</option>
                                            <option value="Application" <?php if(!empty($portfolio_detail)){ if($portfolio_detail->project_type == 'Application'){ echo 'selected'; } } ?>>Application</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Project Link</label>
                                        <input type="text" class="form-control" id="project_link" name="project_link" value="<?php echo !empty($portfolio_detail->project_link) ? $portfolio_detail->project_link : NULL ?>">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Project Image</label>
                                        <input type="file" name="project_image" id="project_image" class="form-control" value="" data-image="project_image" accept="image/*">
                                        <?php if(!empty($portfolio_detail->image_url)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/portfolio/'.$portfolio_detail->image_url); ?>" alt="Project Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="<?php echo url('admin/portfolio'); ?>" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-primary"> <?php if(empty($portfolio_detail)){ echo 'Save'; }else{ echo 'Update'; } ?></button>
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