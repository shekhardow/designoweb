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
                            Case Studies
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="<?php echo url('admin/add_case_studies'); ?>" class="btn btn-accent m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Add New Case Study</span>
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
                            <th>Tagline</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($case_studies as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo !empty($value->project_name) ? $value->project_name : ""; ?></td>
                                <td><?php echo !empty($value->tagline) ? $value->tagline : ""; ?></td>
                                <td><?php echo !empty($value->description) ? substr($value->description,0,270).'...' : ""; ?></td>
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
                                    <a href="<?php echo url('admin/change_status/' . $value->case_study_id . '/' . $change_to . '/case_studies/case_study_id/status'); ?>" title="Change Status" msg-type="<?php echo $change_to; ?>" class="m-badge status btn  <?php echo $class; ?> m-badge--wide"><?php echo $status ?></a>
                                </td>
                                <td>
                                    <a href="<?php echo url('admin/update_case_studies/' . encryptionID($value->case_study_id)); ?>" class="m-badge btn m-badge--info m-badge--wide" title="Edit Case Study"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo url('admin/change_status/' . $value->case_study_id . '/Deleted/case_studies/case_study_id/status'); ?>" class="m-badge btn m-badge--danger m-badge--wide status" title="Delete Case Study"><i class="fa fa-trash"></i> Delete</a>
                                    <a href="<?php echo url('admin/view_case_studies',['case_study_id' =>encryptionID($value->case_study_id)]); ?>" title="View Case Study" class="m-badge btn m-badge--info m-badge--wide"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
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