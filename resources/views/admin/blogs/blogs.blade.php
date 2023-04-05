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
                            Blogs
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="<?php echo url('admin/add_blog'); ?>" class="btn btn-accent m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Add New Blog</span>
                                </span>
                            </a>
                        </li>
                        <li class="m-portlet__nav-item"></li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($blogs as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo !empty($value->blog_title) ? ucwords($value->blog_title) : ""; ?></td>
                                <td><a href="<?php echo asset('uploads/admin/blogs/'.$value->image_url); ?>" download>
                                        <img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/blogs/'.$value->image_url); ?>">
                                    </a>
                                </td>
                                <td><?php echo !empty($value->blog_description) ? substr($value->blog_description,0,270).'...' : ""; ?></td>
                                <?php
                                if ($value->status == 'Active') {
                                    $class = "m-badge--info";
                                    $status = "Active";
                                    $change_to = "Inactive";
                                } else {
                                    $class = "m-badge--danger";
                                    $status = "Inactive";
                                    $change_to = "Active";
                                } ?>
                                <td>
                                    <a href="<?php echo url('admin/change_status/' . $value->blog_id . '/' . $change_to . '/blogs/blog_id/status'); ?>" title="Change Status" msg-type="<?php echo $change_to; ?>" class="m-badge status btn  <?php echo $class; ?> m-badge--wide"><?php echo $status ?></a>
                                </td>
                                <?php
                                if (@$value->is_block === 'Blocked') {
                                    $class = "m-badge--danger";
                                    $status1 = "Blocked";
                                    $change_to1 = "Unblock";
                                } else {
                                    $class = "m-badge--success";
                                    $status1 = "Unblock";
                                    $change_to1 = "Blocked";
                                } ?>
                                <td>
                                    <a href="<?php echo url('admin/update_blog/' . encryptionID($value->blog_id)); ?>" class="m-badge btn m-badge--info m-badge--wide" title="Edit Blog"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo url('admin/change_status/' . $value->blog_id . '/Deleted/blogs/blog_id/status'); ?>" class="m-badge btn m-badge--danger m-badge--wide status" title="Delete Blog"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection