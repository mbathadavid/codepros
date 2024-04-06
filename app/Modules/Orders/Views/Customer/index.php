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
                    <a href="<?php echo base_url('customer/orders/new') ?>" class="btn btn-sm btn-primary" id="btn-addrow"><i class="ti-plus"></i>Create New Order</a>
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
                                        <a href="#tab4" data-toggle="tab" class="nav-link active">Active</a>
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
                                        <p class="card-text">Below the music groans the speaking ancestor. The spigot kidnaps the
                                            utility postage on top of a south. A trilogy coasts across a floppy connector. The piano
                                            sacks the stable socket inside the handler. The spike multiplies beside the crazy scroll.
                                        </p>
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

<?= $this->endSection() ?>