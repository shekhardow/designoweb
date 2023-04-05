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
                            Testimonials
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="<?php echo url('admin/add_testimonial'); ?>" class="btn btn-accent m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Add New Testimonial</span>
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
                            <th>Client Name</th>
                            <th>Client Quote</th>
                            <th>Project Name</th>
                            <th>Client Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($testimonials as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo !empty($value->client_name) ? ucwords($value->client_name) : ""; ?></td>
                                <td><?php echo !empty($value->client_quote) ? $value->client_quote : ""; ?></td>
                                <td><?php echo !empty($value->project_name) ? $value->project_name : ""; ?></td>
                                <?php if(!empty($value->client_image)){ ?>
                                    <td><img style="width: 100px; height: 100px;" src="<?php echo url('uploads/admin/testimonials/'.$value->client_image); ?>"></td>
                                <?php }else{ ?>
                                    <td>No Image</td>
                                <?php }; ?>
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
                                    <a href="<?php echo url('admin/change_status/' . $value->testimonial_id . '/' . $change_to . '/testimonials/testimonial_id/status'); ?>" title="Change Status" msg-type="<?php echo $change_to; ?>" class="m-badge status btn  <?php echo $class; ?> m-badge--wide"><?php echo $status ?></a>
                                </td>
                                <td>
                                    <a href="<?php echo url('admin/update_testimonial/' . encryptionID($value->testimonial_id)); ?>" class="m-badge btn m-badge--info m-badge--wide" title="Edit Testimonial"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo url('admin/change_status/' . $value->testimonial_id . '/Deleted/testimonials/testimonial_id/status'); ?>" class="m-badge btn m-badge--danger m-badge--wide status" title="Delete Testimonial"><i class="fa fa-trash"></i> Delete</a>
                                    <a href="<?php echo url('admin/view_testimonial',['case_study_id' =>encryptionID($value->testimonial_id)]); ?>" title="View Testimonial" class="m-badge btn m-badge--info m-badge--wide"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
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