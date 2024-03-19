<?= $this->extend('layouts/admin/default') ?>


<?= $this->section('content') ?>


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Registered Users
                </h4>
                <a href="<?php echo base_url('admin/users/add') ?>" class="btn btn-success text-white float-end">Add User</a>
            </div>
            <div class="card-body">
                <hr>
                <?php
                if (count($admins) > 0) {
                ?>
                    <div class="table-responsive">
                        <table class="table mb-0 table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Group</th>
                                    <th>Status</th>
                                    <!-- <th>Registered On</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($admins as $ad) {
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $ad->secret; ?></td>
                                        <td><?php echo $ad->username; ?></td>
                                        <td>
                                            <?php
                                            echo ucwords($ad->group);
                                            ?>
                                        </td>
                                        <!-- <td>$654,765</td> -->
                                        <td>
                                            <?php
                                            echo $ad->active == 1 ? '<span class="badge rounded-pill bg-success">Active</span>' : '<span class="badge rounded-pill bg-danger">Inactive</span>';
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php } else { ?>
                        <h6 class="text-center">No Users Registered at the moment</h6>
                    <?php } ?>
                    </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>