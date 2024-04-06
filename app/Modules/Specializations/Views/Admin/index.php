<?= $this->extend('layouts/admin/default') ?>


<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-4 col-lg-4 col-xl-4">
        <!-- Group Register Form Start -->
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Register a Specialization Area
                </div>
            </div>
            <div class="card-body">
                <?php echo form_open(current_url()) ?>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Specialization Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <!-- Group Register Form End -->
    <div class="col-md-8 col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Areas of Specialization</h3>
            </div>
            <div class="card-body">
                <?php
                if (count($specializations) > 0) {
                ?>
                    <div class="table-responsive">
                        <table id="responsive-datatable" class="table border text-nowrap text-md-nowrap table-hover mb-0 responsive-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($specializations as $key => $specialization) {
                                    $s = (object) $specialization;
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $s->name; ?></td>
                                        <td><?php echo $s->description; ?></td>
                                        <td> <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#edit-modal-<?php echo $s->id ?>"><i class="mdi mdi-pencil"></i></button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <h6 class="text-center">No Subjects Recorded yet</h6>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modals -->
<?php
foreach ($specializations as $key => $specialization) {
    $s = (object) $specialization;
?>
    <div id="edit-modal-<?php echo $s->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Edit</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php echo form_open('admin/specializations/edit') ?>
                    <input type="number" name="id" class="form-control" value="<?php echo $s->id ?>" hidden>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Specialization Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $s->name ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"><?php echo $s->description ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo form_close() ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- Edit Modals -->

<?= $this->endSection() ?>