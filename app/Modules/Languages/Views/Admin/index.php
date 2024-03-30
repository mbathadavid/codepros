<?= $this->extend('layouts/admin/default') ?>


<?= $this->section('content') ?>


<div class="row">
    <div class="col-md-5 col-lg-5 col-xl-5">
        <!-- Group Register Form Start -->
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Register Programming Languages
                </div>
            </div>
            <div class="card-body">
                <?php echo form_open(current_url()) ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Language</th>
                        </tr>
                    </thead>
                    <tbody id="tablebody">
                        <tr id="trow">
                            <td>Enter Name</td>
                            <td><input type="text" name="name[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <div class="btn-group">
                        <button id="addnewline" type="button" class="btn btn-sm btn-success">New Line</button>
                        <button id="removeline" type="button" class="btn btn-sm btn-danger">Remove</button>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <!-- Group Register Form End -->
    <div class="col-md-7 col-lg-7 col-xl-7">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Programming Languages</h3>
            </div>
            <div class="card-body">
                <?php
                if (count($languages) > 0) {
                ?>
                    <div class="table-responsive">
                        <table id="responsive-datatable" class="table border text-nowrap text-md-nowrap table-hover mb-0 responsive-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($languages as $key => $language) {
                                    $s = (object) $language;
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $s->name; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#edit-modal-<?php echo $s->id ?>"><i class="mdi mdi-pencil"></i></button>
                                                <button type="button" id="frameworks-modal-<?php echo $s->id ?>" bid="<?php echo $s->id ?>" class="btn btn-danger waves-effect waves-light"><i class="fab fa-phoenix-framework"></i></button>
                                            </div>
                                        </td>
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
foreach ($languages as $key => $language) {
    $s = (object) $language;
?>
    <div id="edit-modal-<?php echo $s->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Edit</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('admin/languages/edit') ?>
                    <input type="number" name="id" class="form-control" value="<?php echo $s->id ?>" hidden>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Specialization Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $s->name ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
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

<!-- Frameworks Modal Start -->
<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xl-6">
                    <?php echo form_open('admin/languages/addframework') ?>
                    <input type="number" name="lid" id="lid" class="form-control" hidden>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Framework</th>
                                </tr>
                            </thead>
                            <tbody id="ftablebody">
                                <tr id="ftrow">
                                    <td>Name</td>
                                    <td><input type="text" name="name[]" class="form-control" aria-describedby="emailHelp"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <div class="btn-group">
                                <button id="faddnewline" type="button" class="btn btn-sm btn-success">New Line</button>
                                <button id="fremoveline" type="button" class="btn btn-sm btn-danger">Remove</button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    <?php echo form_close() ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6">
                        <h5 class="text-center">Added Frameworks</h5>
                        <div id="addedframeworks">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Frameworks Modal End -->

<script>
    $(document).ready(function() {

        //Handle Addition of New Line
        $("#addnewline").click(function(e) {
            e.preventDefault();
            var html = "";
            html += "<tr>";
            html += $("#trow").html();
            html += "</tr>";

            $("#tablebody").append(html);

        });

        //Handle Removal of Last Added Line
        $("#removeline").click(function(e) {
            e.preventDefault();
            // Ask for confirmation
            var confirmDelete = confirm("Are you sure you want to remove this line?");

            // If user confirms, remove the last child element of #allows
            if (confirmDelete) {
                $("#tablebody").children().last().remove();
            }
        });


        //Frameworks New Line Addition
        $("#faddnewline").click(function(e) {
            e.preventDefault();
            var html = "";
            html += "<tr>";
            html += $("#ftrow").html();
            html += "</tr>";

            $("#ftablebody").append(html);

        });

        //Frameworks New Line Removal
        $("#fremoveline").click(function(e) {
            e.preventDefault();
            // Ask for confirmation
            var confirmDelete = confirm("Are you sure you want to remove this line?");

            // If user confirms, remove the last child element of #allows
            if (confirmDelete) {
                $("#ftablebody").children().last().remove();
            }
        });

        //Handle Showing Frameworks Modal
        <?php
        foreach ($languages as $key => $language) {
            $s = (object) $language;
        ?>
            $("#frameworks-modal-<?php echo $s->id ?>").click(async function() {
                const val = $(this).attr('bid');
                var url = `<?php echo base_url('admin/languages/getFrameworks') ?>/${val}`;

                const response = await makeGetRequest(url);

                showFrameworksModal(response);
            });
        <?php } ?>
    });

    function showFrameworksModal(response) {
        var res = JSON.parse(response);

        // console.log(res);

        $("#addedframeworks").html('');

        if (res.frameworks.length == 0) {
            $("#addedframeworks").html('<h6 class="text-center">No Frameworks Recorded Yet</h6>');
        } else {
            const frameworks = res.frameworks;

            frameworks.forEach(framework => {
                // console.log(`Framework Name: ${framework.name}`);
                $("#addedframeworks").append(`<h6 class="text-center">${framework.name}</h6>`);
            });
        }

        $("#myLargeModalLabel").text(res.language.name+' Frameworks');
        $("#lid").val(res.language.id);

        $("#bs-example-modal-lg").modal('show');
    }
</script>
<?= $this->endSection() ?>