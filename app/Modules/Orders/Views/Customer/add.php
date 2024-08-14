<?= $this->extend('layouts/customer/default') ?>


<?= $this->section('content') ?>

<?php
$noncategorizedtypes = [];

foreach ($assignmenttypes as $category => $types) {
    foreach ($types as $tkey => $type) {
        $noncategorizedtypes[$tkey] = $type;
    }
}

echo "<pre>";
print_r($domains);
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
                <?php
                // $attributes = array('class' => 'validate1','novalidate' => true);
                $attributes = array('novalidate' => true);
                echo form_open_multipart(current_url(), $attributes)
                ?>
                <!-- Tabs Start -->
                <div class="card card-tabs-pills mb-3">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-lg-2" id="tabsnav">
                                <ul class="nav flex-column nav-pills">
                                    <li class="nav-item">
                                        <!-- <a href="#tab4" data-toggle="tab" id="detailslink" class="nav-link active">Assigment Details</a> -->
                                        <a href="#" id="detailslink" class="nav-link active">Assignment Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- <a href="#tab6" data-toggle="tab" id="instructionslink" class="nav-link">Instructions</a> -->
                                        <a href="#" id="instructionslink" class="nav-link">Instructions</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10 col-lg-10">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab4">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <input type="hidden" name="price" id="pricefield" class="form-control">
                                                <div class="form-group">
                                                    <label class="col-form-label">Assignment Type</label>
                                                    <?php
                                                    echo form_dropdown('assignmenttype', ['' => 'Select Assignment Type'] + $assignmenttypes, '', 'class="form-control select2" id="assignmenttype" required')
                                                    ?>
                                                    <div class="invalid-feedback">You must Select the Assignment type</div>
                                                </div>
                                                <div class="d-none" id="pagesdiv">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Pages (<b><span id="wordcount">275</span></b> Words)</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text bg-carolina text-white decrement clickable">-</span>
                                                                    </div>
                                                                    <input type="text" class="form-control text-center" id="pagecount" value="1">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text bg-carolina text-white increment clickable">+</span>
                                                                    </div>
                                                                    <div class="invalid-feedback">You must specify the number of pages</div>
                                                                </div>
                                                            </div>
                                                            <!-- <input type="number" name="pages" id="pages" class="form-control input-spinner"> -->
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Spacing</label>
                                                                <?php
                                                                $spacing = array(
                                                                    1 => 'Double',
                                                                    2 => 'Single'
                                                                );
                                                                echo form_dropdown('spacing', $spacing, '', 'class="form-control select2" id="spacing"')
                                                                ?>
                                                                <div class="invalid-feedback">You must Specify spacing</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Number of Sources</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text bg-carolina text-white decrement2 clickable">-</span>
                                                                    </div>
                                                                    <input type="text" class="form-control text-center" id="citationcount" value="1">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text bg-carolina text-white increment2 clickable">+</span>
                                                                    </div>
                                                                </div>
                                                                <div class="invalid-feedback">You must Specify number of sources</div>
                                                            </div>
                                                            <!-- <input type="number" name="pages" id="pages" class="form-control input-spinner"> -->
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Citation Style</label>
                                                                <?php
                                                                echo form_dropdown('citation', ['' => 'Select Citation Style'] + $citationstyles, '', 'class="form-control select2" id="citation"')
                                                                ?>
                                                                <div class="invalid-feedback">You must Specify Citation Style</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Assignment Topic</label>
                                                    <?php
                                                    echo form_input('topic', '', 'class="form-control" id="topic" required')
                                                    ?>
                                                    <div class="invalid-feedback">Assignment Topic is required</div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Assignment Domain</label>
                                                    <?php
                                                    echo form_dropdown('domain', ['' => 'Select Assignment Domain'] + $domains, '', 'class="form-control select2" id="domain"')
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Language</label>
                                                    <?php
                                                    $languages = array(
                                                        1 => 'English (US)',
                                                        2 => 'English (UK)',
                                                        3 => 'Spanish (ES)',
                                                        4 => 'French (FR)',
                                                        5 => 'Chinese (CH)'
                                                    );

                                                    echo form_dropdown('language', ['' => 'Select Language'] + $languages, '', 'class="form-control select2" id="language" required')
                                                    ?>
                                                    <div class="invalid-feedback">Specify the Language you would want your assignment delivered in.</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Date</label>
                                                            <div class="input-group date">
                                                                <input type="text" name="deadlinedate" id="deadlinedate" class="form-control" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="ti-calendar"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="invalid-feedback">Specify the Assigment Deadline Date</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Time</label>
                                                            <div class="input-group">
                                                                <input type="text" name="deadlinetime" id="deadlinetime" class="form-control timepicker" required>
                                                                <div class="input-group-append timepicker-btn">
                                                                    <span class="input-group-text">
                                                                        <i class="ti-time"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="invalid-feedback">Specify the assignment deadline time</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group float-right">
                                            <a href="#" class="btn btn-success" id="toinstructions">Next Step</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab6">
                                        <div class="form-group">
                                            <label for="">Instructions</label>
                                            <textarea name="instructions" id="editor-1">

                                            </textarea>
                                            <div id="instructionsvalidatext" class="d-none text-danger">You must include your assignment instructions</div>
                                            <div class=""><b>Do not share any of your personal details (Phone,Email,Name, etc.)</b></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Attach Files (if any)</label>
                                            <input type="file" class="my-pond" name="files[]" />
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="#" class="btn btn-success float-left" id="backtoinstructions">Back</a>
                                            <a href="#" class="btn btn-success float-right" id="tonextstep">Next Step</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab7">
                                        <h5 class="text-center">Confirm Order Details</h5>
                                        <hr>
                                        <div class="card">
                                            <div class="card-header">

                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <h5>Assignment Type : <b class="assigntypeval"></b></h5>
                                                        <h5>Topic : <b class="topicval"></b></h5>
                                                        <h5>Domain : <b class="domainval"></b></h5>
                                                        <h5>Pages : <b class="pagesval"></b></h5>
                                                        <h5>Spacing : <b class="spacingval"></b></h5>
                                                        <h5>Sources : <b class="sourcesval"> </b></h5>
                                                        <h5>Citation Style : <b class="citationval"></b></h5>
                                                        <h5>Language : <b class="languageval"></b></h5>
                                                        <h5>Deadline : <b class="deadline"></b></h5>
                                                        <h5>Files Attached : <b class="filescount"></b></h5>
                                                        <h5>Estimated Cost : <b class="costval"></b></h5>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="instructionsval">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <a href="#" class="btn btn-success float-left" id="backtotab6">Back</a>
                                            <button type="submit" class="btn btn-success float-right">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h6 id="priceheading" class="d-none">Estimated Minimum Price : <b>$<span id="pricetxt"></span></b></h6>
                        <small id="pricedes" class="d-none"><sup>(The price is subject to change based on waht you agree with the writer)</sup></small>
                    </div>
                </div>
                <!-- Tabs End -->
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var instructions = "";

        var perpages = <?php echo json_encode($perpageassignments) ?>;
        var assignmentcharges = <?php echo json_encode($assignmentcharges) ?>;
        var assignmenttypes = <?php echo json_encode($noncategorizedtypes) ?>;
        var domains = <?php echo json_encode($domains) ?>;
        var languages = <?php echo json_encode($languages) ?>;
        var citationstyles = <?php echo json_encode($citationstyles) ?>;
        // console.log(assignmenttypes);

        // console.log(assignmentcharges);
        // console.log(Object.values(assignmentcharges));
        const arr = [];
        for (const key in assignmentcharges) {
            if (Object.prototype.hasOwnProperty.call(assignmentcharges, key)) {
                arr[key] = assignmentcharges[key];
            }
        }
        // console.log(arr);

        //Convert assignmenttypes object into an array 
        const typesarr = [];
        for (const key in assignmenttypes) {
            if (Object.prototype.hasOwnProperty.call(assignmenttypes, key)) {
                typesarr[key] = assignmenttypes[key];
            }
        }

        //Convert Domains object into an array 
        const domainsarr = [];
        for (const key in domains) {
            if (Object.prototype.hasOwnProperty.call(domains, key)) {
                domainsarr[key] = domains[key];
            }
        }

        //Convert Langauges object into an array 
        const languagesarr = [];
        for (const key in languages) {
            if (Object.prototype.hasOwnProperty.call(languages, key)) {
                languagesarr[key] = languages[key];
            }
        }

        //Convert citationstyles object into an array 
        const citationsarr = [];
        for (const key in citationstyles) {
            if (Object.prototype.hasOwnProperty.call(citationstyles, key)) {
                citationsarr[key] = citationstyles[key];
            }
        }

        $("#assignmenttype").change(function() {
            var asgselect = $(this).val();
            // console.log(asgselect);
            // console.log(arr[asgselect]);

            if (asgselect === "") {
                $("#priceheading").addClass('d-none');
                $("#pricetxt").text('');
                $("#pricedes").addClass('d-none');
            } else {
                if (perpages.indexOf(Number(asgselect)) !== -1) {
                    $("#pagesdiv").removeClass('d-none');
                    $("#priceheading").removeClass('d-none');
                    $("#pricetxt").text(arr[asgselect]);
                    $("#pricefield").val(arr[asgselect]);
                    $("#pricedes").removeClass('d-none');

                    //Make page related mandatory
                    $("#pagecount").prop('required', true);
                    $("#spacing").prop('required', true);
                    $("#citationcount").prop('required', true);
                    $("#citation").prop('required', true);
                } else {
                    $("#pagesdiv").addClass('d-none');
                    $("#priceheading").removeClass('d-none');
                    $("#pricetxt").text(arr[asgselect]);
                    $("#pricefield").val(arr[asgselect]);
                    $("#pricedes").removeClass('d-none');

                    //Make page related non-mandatory
                    $("#pagecount").prop('required', false);
                    $("#spacing").prop('required', false);
                    $("#citationcount").prop('required', false);
                    $("#citation").prop('required', false);
                }
            }
        });

        //Add Increment and Decrement functionality
        $('.decrement').click(function() {
            var input = $(this).closest('.input-group').find('input');
            var value = parseInt(input.val(), 10);
            if (!isNaN(value) && value > 1) { // Check if value is greater than 1
                input.val(value - 1);

                var spacing = $("#spacing").val();

                //Calculate page pricing
                var asg = $("#assignmenttype").val();
                var cost = arr[asg];

                if (parseInt(spacing) == 1) {
                    $("#wordcount").text((value - 1) * 275);
                    $("#pricetxt").text((value - 1) * cost);
                    $("#pricefield").val((value - 1) * cost);
                } else {
                    $("#wordcount").text((value - 1) * 550);
                    $("#pricetxt").text(((value - 1) * 2) * cost);
                    $("#pricefield").val(((value - 1) * 2) * cost);
                }
            }
        });

        $('.increment').click(function() {
            var input = $(this).closest('.input-group').find('input');
            var value = parseInt(input.val(), 10);
            if (!isNaN(value)) {
                input.val(value + 1);

                var spacing = $("#spacing").val();

                //Calculate page pricing
                var asg = $("#assignmenttype").val();
                var cost = arr[asg];

                if (parseInt(spacing) == 1) {
                    $("#wordcount").text((value + 1) * 275);
                    $("#pricetxt").text((value + 1) * cost);
                    $("#pricefield").val((value + 1) * cost);
                } else {
                    $("#wordcount").text((value + 1) * 550);
                    $("#pricetxt").text(((value + 1) * 2) * cost);
                    $("#pricefield").val(((value + 1) * 2) * cost);
                }
            }
        });

        $('.decrement2').click(function() {
            var input = $(this).closest('.input-group').find('input');
            var value = parseInt(input.val(), 10);
            if (!isNaN(value) && value > 1) { // Check if value is greater than 1
                input.val(value - 1);
            }
        });

        $('.increment2').click(function() {
            var input = $(this).closest('.input-group').find('input');
            var value = parseInt(input.val(), 10);
            if (!isNaN(value)) {
                input.val(value + 1);
            }
        });

        //Calculate No of Words by pages
        $("#pagecount").keyup(function() {
            var val = $(this).val();
            var spacing = $("#spacing").val();

            if (parseInt(spacing) == 1) {
                $("#wordcount").text(val * 275);
            } else {
                $("#wordcount").text(val * 550);
            }
        });

        //Calculate number of words by spacing
        $("#spacing").change(function() {
            var val = $(this).val();
            var pagecount = $("#pagecount").val();

            var asg = $("#assignmenttype").val();
            var cost = arr[asg];

            if (parseInt(val) == 1) {
                $("#wordcount").text(pagecount * 275);
                $("#pricetxt").text(pagecount * cost);
                $("#pricefield").val(pagecount * cost);

            } else {
                $("#wordcount").text(pagecount * 550);
                $("#pricetxt").text((pagecount * 2) * cost);
                $("#pricefield").val((pagecount * 2) * cost);
            }
        });

        $("#toinstructions").click(function(e) {
            e.preventDefault();

            var detvalcheck = validateDetails('tab4');

            if (parseInt(detvalcheck) > 0) {
                $("#tab4").addClass('was-validated');
                $("#detailslink").addClass('btn-danger');
                $("#tabsnav").removeClass('d-none');
            } else {
                $("#detailslink").removeClass('active');
                $("#detailslink").removeClass('btn-danger');
                $("#instructionslink").addClass('active');
                $("#tab4").removeClass('show active');
                $("#tab7").removeClass('show active');
                $("#tab6").addClass('show active');
                $("#tabsnav").removeClass('d-none');
            }
        });

        $("#backtoinstructions").click(function(e) {
            e.preventDefault();

            $("#instructionslink").removeClass('active');
            $("#detailslink").addClass('active');
            $("#tab6").removeClass('show active');
            $("#tab7").removeClass('show active');
            $("#tab4").addClass('show active');
            $("#tabsnav").removeClass('d-none');
        });

        //
        $("#tonextstep").click(function(e) {
            e.preventDefault();

            var instructionsval = $(".ck-editor__editable").html();

            if (instructionsval === '<p><br data-cke-filler="true"></p>') {
                // $("#tab6").addClass('was-validated');
                $("#instructionsvalidatext").removeClass('d-none');
                $("#instructionslink").addClass('btn-danger');
            } else {
                instructions = instructionsval;

                //Show Values
                $(".instructionsval").html(instructions);
                $(".assigntypeval").text(typesarr[$("#assignmenttype").val()]);
                $(".topicval").text($("#topic").val());
                $(".costval").text($("#pricefield").val());
                $(".domainval").text(domainsarr[$("#domain").val()]);
                $(".languageval").text(languagesarr[$("#language").val()]);
                var assignval = typesarr[$("#assignmenttype").val()];

                console.log($("#assignmenttype").val());

                $(".citationval").text(assignval == 1 || assignval == 2 ? citationsarr[$("#citation").val()] : 'N/A');
                var deadline = $("#deadlinedate").val()+' '+$("#deadlinetime").val();

                const specifiedTime = new Date(deadline);
                const currentTime = new Date();
                // Calculate the difference in milliseconds
                const timeDifferenceMs = specifiedTime - currentTime;

                const seconds = Math.floor((timeDifferenceMs / 1000) % 60);
                const minutes = Math.floor((timeDifferenceMs / (1000 * 60)) % 60);
                const hours = Math.floor((timeDifferenceMs / (1000 * 60 * 60)) % 24);
                const days = Math.floor(timeDifferenceMs / (1000 * 60 * 60 * 24));

                const duetime = `Due in: ${days} days, ${hours} hours, ${minutes} minutes, and ${seconds} seconds`;

                $(".deadline").text(deadline+' ('+duetime+')');
                //Count Files
                // var fileInput = $('.filepond--browser');
                // var filesCount = fileInput.files.length;
                // console.log(filesCount);
                // var fileCount = fileInput.files.length;
                // $(".filescount").text(filesCount);

                $("#instructionsvalidatext").addClass('d-none');
                $("#detailslink").removeClass('active');
                $("#instructionslink").removeClass('btn-danger');
                $("#instructionslink").removeClass('active');
                $("#tabsnav").addClass('d-none');
                $("#tab4").removeClass('show active');
                $("#tab6").removeClass('show active');
                $("#tab7").addClass('show active');

            }
        });

        //Back from Confirmation to Instruction
        $("#backtotab6").click(function(e) {
            $("#detailslink").removeClass('active');
            $("#detailslink").removeClass('btn-danger');
            $("#tab4").removeClass('show active');
            $("#tab7").removeClass('show active');
            $("#tab6").addClass('show active');
            $("#tabsnav").removeClass('d-none');
            $("#instructionslink").addClass('active');
        });

        //Play with tabs
        $("#detailslink").click(function(e) {
            e.preventDefault();
            $(this).addClass('active');
            $(this).removeClass('btn-danger');
            $("#instructionslink").removeClass('active');
            $("#tab6").removeClass('show active');
            $("#tab7").removeClass('show active');
            $("#tab4").addClass('show active');
            $("#tabsnav").removeClass('d-none');
        })

        $("#instructionslink").click(function(e) {
            e.preventDefault();
            var detvalcheck = validateDetails('tab4');

            if (parseInt(detvalcheck) > 0) {
                $("#tab4").addClass('was-validated');
                $("#detailslink").addClass('btn-danger');
                $("#tabsnav").removeClass('d-none');
            } else {
                $("#detailslink").removeClass('active');
                $("#detailslink").removeClass('btn-danger');
                $(this).addClass('active');
                $("#tab4").removeClass('show active');
                $("#tab7").removeClass('show active');
                $("#tab6").addClass('show active');
                $("#tabsnav").removeClass('d-none');
            }
        })
    });

    function validateDetails(tab) {
        var isValid = true;

        // Check each required field within #tab4
        var k = 0;
        // $('#tab4 .form-control[required]').each(function() {
        $(`#${tab} .form-control[required]`).each(function() {
            if ($(this).val() === '') {
                isValid = false;
                k++;
            }
        });

        return k;
    }
</script>
<script>
    $(document).ready(function() {
        $('.filepond--browser').on('change', function() {
            var fileCount = this.files.length;
            $('#file-count').text('Number of files: ' + fileCount);
        });
    });
</script>
<style>
    .clickable {
        cursor: pointer;
    }

    .clickable:hover {
        opacity: 0.8;
        /* Adjust the opacity on hover to indicate interactivity */
    }

    /* Style to make the spans appear like buttons */
    .input-group-text.clickable {
        border-radius: 0.25rem;
        /* Add border-radius to make it look like a button */
        padding: 0.375rem 0.75rem;
        /* Add padding to increase clickable area */
    }
</style>
<?= $this->endSection() ?>