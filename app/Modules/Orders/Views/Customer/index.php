<?= $this->extend('layouts/customer/default') ?>


<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <!-- <i class="ti-briefcase"></i> Dynamic Add Rows -->
                </div>
                <div class="tools">
                    <a href="<?php echo base_url('customer/orders/new') ?>" class="btn btn-sm btn-primary" id=""><i class="ti-plus"></i>Create New Order</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Tabs Start -->
                <div class="card card-tabs-pills mb-3">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                <ul class="nav flex-column nav-pills">
                                    <li class="nav-item">
                                        <a href="#tab4" data-toggle="tab" class="nav-link active">Unassigned</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab5" data-toggle="tab" class="nav-link">Drafts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab6" data-toggle="tab" class="nav-link">Closed</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10 col-lg-10">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab4">
                                        <h4 class="card-title">Active</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover dt-datatable" id="">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Details</th>
                                                        <th>Domain</th>
                                                        <th>Estimate Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // echo "<pre>";
                                                    // print_r($unassigned);
                                                    // echo "</pre>";
                                                    $i = 0;
                                                    foreach ($unassigned as $a) {
                                                        $p = (object) $a;
                                                        $i++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td>
                                                                <h4><b><?php echo $p->topic ?></b></h4>
                                                                <small><?php echo $p->id < 10000 ? 10000 + $p->id : $p->id ?></small>
                                                            </td>
                                                            <td><?php echo $domains[$p->domain] ?></td>
                                                            <td>
                                                                <?php echo "$ " . $p->estimateprice ?><br>
                                                                <?php if ($p->status == 4) {?>
                                                                    <span class="badge bg-warning text-white">Bidding not Open</span>
                                                                <?php } elseif ($p->status == 3) {?>
                                                                    ~<span class="badge bg-success text-white">Open for bids</span>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <div class="btn-group dropup mb-2">
                                                                    <button type="button" class="btn btn-carolina dropdown-toggle"
                                                                        data-toggle="dropdown">Action</button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Details</a>
                                                                        <a onclick="invite(<?php echo $p->id ?>)" class="dropdown-item" href="#">Invite Bids</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab5">
                                        <h4 class="card-title">About</h4>
                                        <p class="card-text">Below the music groans the speaking ancestor. The spigot kidnaps the
                                            utility postage on top of a south. A trilogy coasts across a floppy connector. The piano
                                            sacks the stable socket inside the handler. The spike multiplies beside the crazy scroll.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab6">
                                        <h4 class="card-title">Contact</h4>
                                        <p class="card-text">Below the music groans the speaking ancestor. The spigot kidnaps the
                                            utility postage on top of a south. A trilogy coasts across a floppy connector. The piano
                                            sacks the stable socket inside the handler. The spike multiplies beside the crazy scroll.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs End -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".dt-datatable").DataTable();
    });
</script>
<script>
    $(document).ready(function(){

    });

    function invite(id) {
        var confirm = window.confirm('Are you sure you want to invite bids for this order?');

        if (confirm) {
            window.location = `<?php echo base_url('customer/orders/invitebids/') ?>/${id}`;
        }
    }
</script>
<?= $this->endSection() ?>