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
                            About Us
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($users as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo !empty($value->name) ? ucwords($value->name) : ""; ?></td>
                                <td><?php echo !empty($value->email) ? $value->email : ""; ?></td>
                                <td><?php echo !empty($value->mobile) ? $value->mobile : ""; ?></td>
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
                                    <a href="<?php echo url('admin/change_status/' . $value->user_id . '/' . $change_to . '/users/user_id/status'); ?>" title="Change Status" msg-type="<?php echo $change_to; ?>" class="m-badge status btn  <?php echo $class; ?> m-badge--wide"><?php echo $status ?></a>
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
                                    <a href="<?php //echo route('admin/viewUsers',['user_id' =>encryptionID($value->user_id)]);?>" title="View Users" class="m-badge btn m-badge--info m-badge--wide"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
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