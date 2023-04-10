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
                                        <?php if(empty($press_release_detail)){ echo 'Add'; }else{ echo 'Edit'; } ?> Press Release
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <form method="post" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="submit-form" action="<?php if(!empty($press_release_detail->press_release_id)){ echo url('admin/do_update_press_release/'.encryptionID($press_release_detail->press_release_id)); }else{ echo url('admin/do_add_press_release'); } ?>">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Press Release Name</label>
                                        <input type="text" class="form-control" id="press_release_title" name="press_release_title" value="<?php echo !empty($press_release_detail->press_release_title) ? $press_release_detail->press_release_title : NULL?>">
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Author</label>
                                        <input type="text" class="form-control" id="press_release_author" name="press_release_author" value="<?php echo !empty($press_release_detail->author) ? $press_release_detail->author : NULL?>">
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Press Release Description</label>
                                        <textarea rows="3" class="form-control tinymice" id="press_release_description" name="press_release_description" value=""><?php echo !empty($press_release_detail->press_release_description) ? $press_release_detail->press_release_description : NULL?></textarea>
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Press Release Image</label>
                                        <input type="file" name="press_release_image" id="press_release_image" class="form-control" value="" data-image="press_release_image" accept="image/*">
                                        <?php if(!empty($press_release_detail->image_url)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/press_release/'.$press_release_detail->image_url); ?>" alt="Press Release Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Added date</label>
                                        <input type="date" class="form-control" id="added_date" name="added_date" value="<?php echo !empty($blog_detail->added_date) ? date('Y-m-d',strtotime($blog_detail->added_date)) : NULL ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="<?php echo url('admin/press_release'); ?>" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-primary"> <?php if(empty($press_release_detail)){ echo 'Save'; }else{ echo 'Update'; } ?></button>
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