<?= $this->extend('layouts/customer/default') ?>


<?= $this->section('content') ?>

<?php 
// echo "<pre>";
// print_r($perpageassignments);
// echo "</pre>";
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
                                                <div class="row d-none" id="pagesdiv">
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="">Pages (<b><span id="wordcount">275</span></b> Words)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-carolina text-white decrement clickable">-</span>
                                                            </div>
                                                            <input type="text" class="form-control text-center" id="pagecount" value="1">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text bg-carolina text-white increment clickable">+</span>
                                                            </div>
                                                        </div>
                                                        <!-- <input type="number" name="pages" id="pages" class="form-control input-spinner"> -->
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="">Spacing</label>
                                                    <?php
                                                        $spacing = array(
                                                            1 => 'Double',
                                                            2 => 'Single'
                                                        );
                                                        echo form_dropdown('spacing', $spacing,'', 'class="form-control select2" id="spacing"')
                                                    ?>
                                                    </div>
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
        // console.log(Object.values(assignmentcharges));
        const arr = [];
        for (const key in assignmentcharges) {
            if (Object.prototype.hasOwnProperty.call(assignmentcharges, key)) {
                arr[key] = assignmentcharges[key];
            }
        }

        console.log(arr);
        
        $("#assignmenttype").change(function(){
            var asgselect = $(this).val();
            console.log(asgselect);
            console.log(arr[asgselect]);

            if (perpages.indexOf(Number(asgselect)) !== -1) {
                console.log('Per Page');
                $("#pagesdiv").removeClass('d-none');
            } else {
                console.log('Not per page');
                $("#pagesdiv").addClass('d-none');
                
            }
        });

        //Add Increment and Decrement functionality
        $('.decrement').click(function() {
            var input = $(this).closest('.input-group').find('input');
            var value = parseInt(input.val(), 10);
            if (!isNaN(value) && value > 1) { // Check if value is greater than 1
                input.val(value - 1);
            }
        });

        $('.increment').click(function() {
            var input = $(this).closest('.input-group').find('input');
            var value = parseInt(input.val(), 10);
            if (!isNaN(value)) {
                input.val(value + 1);
            }
        });

        //Calculate No of Words
        $("#pagecount").change(function(){
            var val = $(this).val();

            console.log(val);
        });
    });
</script>
<style>
    .clickable {
    cursor: pointer;
}

.clickable:hover {
    opacity: 0.8; /* Adjust the opacity on hover to indicate interactivity */
}

/* Style to make the spans appear like buttons */
.input-group-text.clickable {
    border-radius: 0.25rem; /* Add border-radius to make it look like a button */
    padding: 0.375rem 0.75rem; /* Add padding to increase clickable area */
}

</style>
<?= $this->endSection() ?>