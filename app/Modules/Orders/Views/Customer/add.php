<?= $this->extend('layouts/customer/default') ?>


<?= $this->section('content') ?>

<?php 
echo "<pre>";
print_r($perpageassignments);
echo "</pre>";
?>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <!-- <i class="ti-briefcase"></i> Dynamic Add Rows -->
                </div>
                <div class="tools">
                    <a href="<?php echo base_url('customer/orders') ?>" class="btn btn-sm btn-primary" id="btn-addrow"><i class="ti-list"></i> All Orders</a>
                </div>
            </div>
            <div class="card-body">
            <?php echo form_open(current_url()) ?>
                 <!-- Tabs Start -->
                 <div class="card card-tabs-pills mb-3">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                <ul class="nav flex-column nav-pills">
                                    <li class="nav-item">
                                        <a href="#tab4" data-toggle="tab" class="nav-link active">Assigment Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab6" data-toggle="tab" class="nav-link">Instructions</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10 col-lg-10">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab4">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Assignment Type</label>
                                                    <?php
                                                        echo form_dropdown('assignmenttype', ['' => 'Select Assignment Type'] + $assignmenttypes,'', 'class="form-control select2" id="assignmenttype" required')
                                                    ?>
                                                </div>    
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab6">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabs End -->
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var perpages = <?php echo json_encode($perpageassignments) ?>;
        var assignmentcharges = <?php echo json_encode($assignmentcharges) ?>;

        console.log(assignmentcharges);

        $("#assignmenttype").change(function(){
            var asgselect = $(this).val();

            console.log(asgselect);
        });
    });
</script>
<?= $this->endSection() ?>