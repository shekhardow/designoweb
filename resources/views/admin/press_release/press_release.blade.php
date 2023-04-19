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
                            Press Release
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="<?php echo url('admin/add_press_release'); ?>" class="btn btn-accent m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Add New Press Release</span>
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
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Banner Poster</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($press_release as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo !empty($value->press_release_title) ? ucwords($value->press_release_title) : ""; ?></td>
                                <td><a href="<?php echo asset('uploads/admin/press_release/'.$value->image_url); ?>" download>
                                        <img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/press_release/'.$value->image_url); ?>">
                                    </a>
                                </td>
                                <td><?php echo !empty($value->press_release_description) ? substr($value->press_release_description,0,270).'...' : ""; ?></td>
                                <td><?php echo !empty($value->author) ? ucwords($value->author) : ""; ?></td>
                                <?php
                                if ($value->banner_poster == 'Yes') {
                                    $class = "m-badge--info";
                                    $banner_poster = "Yes";
                                    $change_to = "No";
                                } else {
                                    $class = "m-badge--danger";
                                    $banner_poster = "No";
                                    $change_to = "Yes";
                                } ?>
                                <td>
                                    <a href="<?php echo url('admin/change_status/' . $value->press_release_id . '/' . $change_to . '/press_release/press_release_id/banner_poster'); ?>" title="Make Banner" msg-type="<?php echo $change_to; ?>" class="m-badge status btn  <?php echo $class; ?> m-badge--wide"><?php echo $banner_poster ?></a>
                                </td>
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
                                    <a href="<?php echo url('admin/change_status/' . $value->press_release_id . '/' . $change_to . '/press_release/press_release_id/status'); ?>" title="Change Status" msg-type="<?php echo $change_to; ?>" class="m-badge status btn  <?php echo $class; ?> m-badge--wide"><?php echo $status ?></a>
                                </td>
                                <td>
                                    <a href="<?php echo url('admin/update_press_release/' . encryptionID($value->press_release_id)); ?>" class="m-badge btn m-badge--info m-badge--wide" title="Edit Press Release"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo url('admin/change_status/' . $value->press_release_id . '/Deleted/press_release/press_release_id/status'); ?>" class="m-badge btn m-badge--danger m-badge--wide status" title="Delete Press Release"><i class="fa fa-trash"></i> Delete</a>
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