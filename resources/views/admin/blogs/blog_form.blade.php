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
                                        <?php if(empty($blog_detail)){ echo 'Add'; }else{ echo 'Edit'; } ?> Blog
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <form method="post" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="submit-form" action="<?php if(!empty($blog_detail->blog_id)){ echo url('admin/do_update_blog/'.encryptionID($blog_detail->blog_id)); }else{ echo url('admin/do_add_blog'); } ?>">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Blog Name</label>
                                        <input type="text" class="form-control" id="blog_name" name="blog_name" value="<?php echo !empty($blog_detail->blog_title) ? $blog_detail->blog_title : NULL?>">
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Blog Description</label>
                                        <textarea rows="3" class="form-control tinymice" id="blog_description" name="blog_description" value=""><?php echo !empty($blog_detail->blog_description) ? $blog_detail->blog_description : NULL?></textarea>
                                    </div>
                                </div>
                                <div class="m-form__group row">
                                    <div class="form-group col-lg-12">
                                        <label>Blog Image</label>
                                        <input type="file" name="blog_image" id="blog_image" class="form-control" value="" data-image="blog_image" accept="image/*">
                                        <?php if(!empty($blog_detail->image_url)){ ?>
                                            <div class="form-group col-lg-12 mt-2">
                                                <img style="width: 180px; height:100px;" src="<?php echo asset('uploads/admin/blogs/'.$blog_detail->image_url); ?>" alt="Blog Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="<?php echo url('admin/blogs'); ?>" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-primary"> <?php if(empty($blog_detail)){ echo 'Save'; }else{ echo 'Update'; } ?></button>
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