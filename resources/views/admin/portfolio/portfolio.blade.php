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
                            Portfolio
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="<?php echo url('admin/add_project'); ?>" class="btn btn-accent m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Add New Project</span>
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
                            <th>Project</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Project Type</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($portfolio as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo !empty($value->project_name) ? ucwords($value->project_name) : ""; ?></td>
                                <td>
                                    <a href="<?php echo asset('uploads/admin/portfolio/'.$value->image_url); ?>" download>
                                        <img style="width: 180px; height: 100px;" src="<?php echo url('uploads/admin/portfolio/'.$value->image_url); ?>">
                                    </a>
                                </td>
                                <td><?php echo !empty($value->description) ? ucwords($value->description) : ""; ?></td>
                                <td><?php echo !empty($value->project_type) ? $value->project_type : ""; ?></td>
                                <td><?php echo !empty($value->project_link) ? $value->project_link : ""; ?></td>
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
                                    <a href="<?php echo url('admin/change_status/' . $value->portfolio_id . '/' . $change_to . '/portfolio/portfolio_id/status'); ?>" title="Change Status" msg-type="<?php echo $change_to; ?>" class="m-badge status btn  <?php echo $class; ?> m-badge--wide"><?php echo $status ?></a>
                                </td>
                                <td>
                                    <a href="<?php echo url('admin/update_project/' . encryptionID($value->portfolio_id)); ?>" class="m-badge btn m-badge--info m-badge--wide" title="Edit Project"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo url('admin/change_status/' . $value->portfolio_id . '/Deleted/portfolio/portfolio_id/status'); ?>" class="m-badge btn m-badge--danger m-badge--wide status" title="Delete Project"><i class="fa fa-trash"></i> Delete</a>
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