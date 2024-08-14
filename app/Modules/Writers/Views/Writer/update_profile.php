<?= $this->extend('layouts/writer/default') ?>

<?= $this->section('content') ?>
<?php
$countries = array(
  "AF" => "Afghanistan",
  "AX" => "Åland Islands",
  "AL" => "Albania",
  "DZ" => "Algeria",
  "AS" => "American Samoa",
  "AD" => "Andorra",
  "AO" => "Angola",
  "AI" => "Anguilla",
  "AQ" => "Antarctica",
  "AG" => "Antigua and Barbuda",
  "AR" => "Argentina",
  "AM" => "Armenia",
  "AW" => "Aruba",
  "AU" => "Australia",
  "AT" => "Austria",
  "AZ" => "Azerbaijan",
  "BS" => "Bahamas",
  "BH" => "Bahrain",
  "BD" => "Bangladesh",
  "BB" => "Barbados",
  "BY" => "Belarus",
  "BE" => "Belgium",
  "BZ" => "Belize",
  "BJ" => "Benin",
  "BM" => "Bermuda",
  "BT" => "Bhutan",
  "BO" => "Bolivia (Plurinational State of)",
  "BQ" => "Bonaire, Sint Eustatius and Saba",
  "BA" => "Bosnia and Herzegovina",
  "BW" => "Botswana",
  "BV" => "Bouvet Island",
  "BR" => "Brazil",
  "IO" => "British Indian Ocean Territory",
  "BN" => "Brunei Darussalam",
  "BG" => "Bulgaria",
  "BF" => "Burkina Faso",
  "BI" => "Burundi",
  "CV" => "Cabo Verde",
  "KH" => "Cambodia",
  "CM" => "Cameroon",
  "CA" => "Canada",
  "KY" => "Cayman Islands",
  "CF" => "Central African Republic",
  "TD" => "Chad",
  "CL" => "Chile",
  "CN" => "China",
  "CX" => "Christmas Island",
  "CC" => "Cocos (Keeling) Islands",
  "CO" => "Colombia",
  "KM" => "Comoros",
  "CG" => "Congo",
  "CD" => "Congo (Democratic Republic of the)",
  "CK" => "Cook Islands",
  "CR" => "Costa Rica",
  "CI" => "Côte d'Ivoire",
  "HR" => "Croatia",
  "CU" => "Cuba",
  "CW" => "Curaçao",
  "CY" => "Cyprus",
  "CZ" => "Czech Republic",
  "DK" => "Denmark",
  "DJ" => "Djibouti",
  "DM" => "Dominica",
  "DO" => "Dominican Republic",
  "EC" => "Ecuador",
  "EG" => "Egypt",
  "SV" => "El Salvador",
  "GQ" => "Equatorial Guinea",
  "ER" => "Eritrea",
  "EE" => "Estonia",
  "ET" => "Ethiopia",
  "FK" => "Falkland Islands (Malvinas)",
  "FO" => "Faroe Islands",
  "FJ" => "Fiji",
  "FI" => "Finland",
  "FR" => "France",
  "GF" => "French Guiana",
  "PF" => "French Polynesia",
  "TF" => "French Southern Territories",
  "GA" => "Gabon",
  "GM" => "Gambia",
  "GE" => "Georgia",
  "DE" => "Germany",
  "GH" => "Ghana",
  "GI" => "Gibraltar",
  "GR" => "Greece",
  "GL" => "Greenland",
  "GD" => "Grenada",
  "GP" => "Guadeloupe",
  "GU" => "Guam",
  "GT" => "Guatemala",
  "GG" => "Guernsey",
  "GN" => "Guinea",
  "GW" => "Guinea-Bissau",
  "GY" => "Guyana",
  "HT" => "Haiti",
  "HM" => "Heard Island and McDonald Islands",
  "VA" => "Holy See",
  "HN" => "Honduras",
  "HK" => "Hong Kong",
  "HU" => "Hungary",
  "IS" => "Iceland",
  "IN" => "India",
  "ID" => "Indonesia",
  "IR" => "Iran (Islamic Republic of)",
  "IQ" => "Iraq",
  "IE" => "Ireland",
  "IM" => "Isle of Man",
  "IL" => "Israel",
  "IT" => "Italy",
  "JM" => "Jamaica",
  "JP" => "Japan",
  "JE" => "Jersey",
  "JO" => "Jordan",
  "KZ" => "Kazakhstan",
  "KE" => "Kenya",
  "KI" => "Kiribati",
  "KP" => "Korea (Democratic People's Republic of)",
  "KR" => "Korea (Republic of)",
  "KW" => "Kuwait",
  "KG" => "Kyrgyzstan",
  "LA" => "Lao People's Democratic Republic",
  "LV" => "Latvia",
  "LB" => "Lebanon",
  "LS" => "Lesotho",
  "LR" => "Liberia",
  "LY" => "Libya",
  "LI" => "Liechtenstein",
  "LT" => "Lithuania",
  "LU" => "Luxembourg",
  "MO" => "Macao",
  "MK" => "Macedonia (the former Yugoslav Republic of)",
  "MG" => "Madagascar",
  "MW" => "Malawi",
  "MY" => "Malaysia",
  "MV" => "Maldives",
  "ML" => "Mali",
  "MT" => "Malta",
  "MH" => "Marshall Islands",
  "MQ" => "Martinique",
  "MR" => "Mauritania",
  "MU" => "Mauritius",
  "YT" => "Mayotte",
  "MX" => "Mexico",
  "FM" => "Micronesia (Federated States of)",
  "MD" => "Moldova (Republic of)",
  "MC" => "Monaco",
  "MN" => "Mongolia",
  "ME" => "Montenegro",
  "MS" => "Montserrat",
  "MA" => "Morocco",
  "MZ" => "Mozambique",
  "MM" => "Myanmar",
  "NA" => "Namibia",
  "NR" => "Nauru",
  "NP" => "Nepal",
  "NL" => "Netherlands",
  "NC" => "New Caledonia",
  "NZ" => "New Zealand",
  "NI" => "Nicaragua",
  "NE" => "Niger",
  "NG" => "Nigeria",
  "NU" => "Niue",
  "NF" => "Norfolk Island",
  "MP" => "Northern Mariana Islands",
  "NO" => "Norway",
  "OM" => "Oman",
  "PK" => "Pakistan",
  "PW" => "Palau",
  "PS" => "Palestine, State of",
  "PA" => "Panama",
  "PG" => "Papua New Guinea",
  "PY" => "Paraguay",
  "PE" => "Peru",
  "PH" => "Philippines",
  "PN" => "Pitcairn",
  "PL" => "Poland",
  "PT" => "Portugal",
  "PR" => "Puerto Rico",
  "QA" => "Qatar",
  "RE" => "Réunion",
  "RO" => "Romania",
  "RU" => "Russian Federation",
  "RW" => "Rwanda",
  "BL" => "Saint Barthélemy",
  "SH" => "Saint Helena, Ascension and Tristan da Cunha",
  "KN" => "Saint Kitts and Nevis",
  "LC" => "Saint Lucia",
  "MF" => "Saint Martin (French part)",
  "PM" => "Saint Pierre and Miquelon",
  "VC" => "Saint Vincent and the Grenadines",
  "WS" => "Samoa",
  "SM" => "San Marino",
  "ST" => "Sao Tome and Principe",
  "SA" => "Saudi Arabia",
  "SN" => "Senegal",
  "RS" => "Serbia",
  "SC" => "Seychelles",
  "SL" => "Sierra Leone",
  "SG" => "Singapore",
  "SX" => "Sint Maarten (Dutch part)",
  "SK" => "Slovakia",
  "SI" => "Slovenia",
  "SB" => "Solomon Islands",
  "SO" => "Somalia",
  "ZA" => "South Africa",
  "GS" => "South Georgia and the South Sandwich Islands",
  "SS" => "South Sudan",
  "ES" => "Spain",
  "LK" => "Sri Lanka",
  "SD" => "Sudan",
  "SR" => "Suriname",
  "SJ" => "Svalbard and Jan Mayen",
  "SZ" => "Swaziland",
  "SE" => "Sweden",
  "CH" => "Switzerland",
  "SY" => "Syrian Arab Republic",
  "TW" => "Taiwan",
  "TJ" => "Tajikistan",
  "TZ" => "Tanzania, United Republic of",
  "TH" => "Thailand",
  "TL" => "Timor-Leste",
  "TG" => "Togo",
  "TK" => "Tokelau",
  "TO" => "Tonga",
  "TT" => "Trinidad and Tobago",
  "TN" => "Tunisia",
  "TR" => "Turkey",
  "TM" => "Turkmenistan",
  "TC" => "Turks and Caicos Islands",
  "TV" => "Tuvalu",
  "UG" => "Uganda",
  "UA" => "Ukraine",
  "AE" => "United Arab Emirates",
  "GB" => "United Kingdom of Great Britain and Northern Ireland",
  "US" => "United States of America",
  "UM" => "United States Minor Outlying Islands",
  "UY" => "Uruguay",
  "UZ" => "Uzbekistan",
  "VU" => "Vanuatu",
  "VE" => "Venezuela (Bolivarian Republic of)",
  "VN" => "Viet Nam",
  "VG" => "Virgin Islands (British)",
  "VI" => "Virgin Islands (U.S.)",
  "WF" => "Wallis and Futuna",
  "EH" => "Western Sahara",
  "YE" => "Yemen",
  "ZM" => "Zambia",
  "ZW" => "Zimbabwe"
);
?>



<div class="main">

  
  <!-- BOF MAIN-BODY -->
  <div class="row">
    <!-- BOF General Form -->
    <div class="col-lg-12">
      <div class="card mb-3">
        <!-- Navigation Bar -->
        <ul class="nav nav-pills bg-dark nav-justified form-wizard-header mb-4">
          <li class="nav-item">
            <a href="#step1" data-bs-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
              <i class="ti-briefcase me-1"></i>
              <span class="d-none d-sm-inline">Personal Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#step2" data-bs-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
              <i class="ti-user me-1"></i>
              <span class="d-none d-sm-inline">Work Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#step3" data-bs-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
              <i class="ti-pencil-alt me-1"></i>
              <span class="d-none d-sm-inline">Experience Links</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#step4" data-bs-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
              <i class="ti-check-box me-1"></i>
              <span class="d-none d-sm-inline">Finish</span>
            </a>
          </li>
        </ul>

        <?php echo form_open(base_url('techie/profile/submit'), array('role' => 'form', 'id' => 'wizardForm', 'class' => 'validate1', 'novalidate' => true)); ?>
        <div class="card-header uppercase pt-0">
          <div class="caption">
            <i class="ti-user"></i> Profile Update
          </div>
          <div class="tools">
            <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
            <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="step1">
              <!-- Step 1 content -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">First Name</label>
                    <div class="input-group col">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-carolina"><i class="ti-user text-light"></i></span>
                      </div>
                      <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                      <div class="input-group-append">
                        <span class="input-group-text bg-danger"><i class="fa fa-asterisk text-light"></i></span>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">First Name is required</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Last Name</label>
                    <div class="input-group col">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-carolina"><i class="ti-user text-light"></i></span>
                      </div>
                      <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                      <div class="input-group-append">
                        <span class="input-group-text bg-danger"><i class="fa fa-asterisk text-light"></i></span>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Last Name is required</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Username</label>
                    <div class="input-group col">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-carolina" id="basic-addon1">@</span>
                      </div>
                      <input type="text" class="form-control" name="username" placeholder="Username" required>
                      <div class="input-group-append">
                        <span class="input-group-text bg-danger"><i class="fa fa-asterisk text-light"></i></span>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Username is required</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Phone</label>
                    <div class="input-group col">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-carolina"><i class="ti-mobile"></i></span>
                      </div>
                      <input type="number" class="form-control" name="phone" placeholder="Mobile Number" required>
                      <div class="input-group-append">
                        <span class="input-group-text bg-danger"><i class="fa fa-asterisk text-light"></i></span>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Phone is required</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Profile Picture</label>
                    <div class="input-group col">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-carolina"><i class="ti-export"></i></span>
                      </div>
                      <input type="file" class="form-control" name="profile_pic" placeholder="Choose File">
                      <div class="input-group-append">
                        <span class="input-group-text bg-danger"><i class="fa fa-asterisk text-light"></i></span>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Profile is required</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Country </label>
                    <div class="input-group col">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-carolina"><i class="ti-world"></i></span>
                      </div>
                      <select class="form-control" name="country">
                        <option value="">Select Country</option>
                        <?php foreach ($countries as $code => $country) { ?>
                          <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                        <?php } ?>
                      </select>

                      <div class="input-group-append">
                        <span class="input-group-text bg-danger"><i class="fa fa-asterisk text-light"></i></span>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Country is required</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Native Languages</label>
                    <div class="input-group col">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-carolina"><i class="ti-microphone"></i></span>
                      </div>
                      <select name="language" id="language-select" class="form-control">
                        <option value="">Select Language</option>
                        <?php
                        // Array of common languages
                        $languages = array(
                          "English",
                          "Spanish",
                          "French",
                          "German",
                          "Chinese",
                          "Arabic",
                          "Russian",
                          "Portuguese",
                          "Japanese",
                          "Hindi"
                          // Add more languages as needed
                        );

                        // Output the array of languages as options in the select dropdown
                        foreach ($languages as $language) {
                          echo "<option value='$language'>$language</option>";
                        }
                        ?>
                      </select>

                      <div class="input-group-append">
                        <span class="input-group-text bg-danger"><i class="fa fa-asterisk text-light"></i></span>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Language is required</div>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- Other fields for step 1 -->
            </div>
            <div class="tab-pane" id="step2">
              <!-- Step 2 content -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Short About</label>
                    <div class="col">
                      <textarea class="form-control" name="about" placeholder="Write a short about here..." required></textarea>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">This field is required</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Areas of Specialization</label>
                    <div class="col">
                      <div class="form-checkbox">
                        <?php foreach ($spec as $item) : ?>
                          <label class="mr-3">
                            <input type="checkbox" name="spec[]" value="<?php echo $item->id; ?>">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            <?php echo $item->name; ?>
                          </label>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Programming Languages</label>
                    <div class="col">
                      <div class="form-checkbox">
                        <?php foreach ($lang as $item) : ?>
                          <label class="mr-3">
                            <input type="checkbox" name="lang[]" value="<?php echo $item->id; ?>">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            <?php echo $item->name; ?>
                          </label>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Frameworks</label>
                    <div class="col">
                      <div class="form-checkbox">
                        <?php foreach ($frm as $item) : ?>
                          <label class="mr-3">
                            <input type="checkbox" name="framework[]" value="<?php echo $item->id; ?>">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            <?php echo $item->name; ?>
                          </label>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>



                </li>
              </ul>
            </div>

            <div class="tab-pane" id="step3">
              <!-- Step 3 content -->

              <div class="form-group row">
                <label class="col-md-3 col-form-label">Experience Links</label>
                <div class="input-group col">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Portifolio <i class="ti-link me-1"></i></span>
                  </div>
                  <input type="text" class="form-control" name="portifolio" placeholder="Paste your Portifolio link here..." required>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please enter Portifolio Link.</div>
                </div>
              </div>
              <div class="form-group row">
                <div class="input-group col offset-md-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Linked <i class="ti-linkedin me-1"></i></span>
                  </div>
                  <input type="text" class="form-control" name="linkedin" placeholder="Paste your Linkedin link here..." required>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please enter Linkedin Link.</div>
                </div>
              </div>
              <div class="form-group row">
                <div class="input-group col offset-md-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Github <i class="ti-github me-1"></i></span>
                  </div>
                  <input type="text" class="form-control" name="github" placeholder="Paste your Github link here..." required>
                  <input type="hidden" name="user" value="<?php echo auth()->id() ?>">
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please enter Github Link.</div>
                </div>
              </div>
              <!-- Other fields for step 3 -->
            </div>
            <div class="tab-pane" id="step4">
              <!-- Step 4 content -->
              <div class="card-body">
                <h5 class="card-title centered">Thank You for Registering with Codepros</h5>
                <p class="card-text">The following requirements will be required in order to proceed working with codepros job site.</p>
                <ul>
                  <li>Online Availability.</li>
                  <li>Avoid Plagirism</li>
                  <li>100% Human Code</li>
                  <li>Coding Experience</li>
                  <li>IT/Computer scienc Academic Degree</li>
                </ul>

                <!-- Hidden fields to store modal input values -->
                <input type="hidden" name="t&c" id="modalField1" value="">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Terms & Condition</button>


              </div>
              <!-- Other fields for step 4-->
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <button type="button" class="btn btn-flat mb-1 btn-outline-primary float-left" id="prevBtn">Previous</button>
          <button type="button" class="btn btn-flat mb-1 btn-outline-primary" id="nextBtn">Next</button>
          <button type="submit" class="btn btn-flat mb-1 btn-outline-primary" id="submitBtn" style="display: none;" disabled>Submit</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
    <!-- EOF General Form -->
  </div>
  <!-- EOF MAIN-BODY -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    var currentTab = 0;
    showTab(currentTab);

    $("#nextBtn").click(function(e) {
      e.preventDefault(); // Prevent default form submission behavior
      if (!validateForm()) return false;
      currentTab++;
      showTab(currentTab);
    });

    $("#prevBtn").click(function() {
      currentTab--;
      showTab(currentTab);
    });

    // Button navigation
    $(".nav-link").click(function(e) {
      e.preventDefault(); // Prevent default anchor link behavior
      var targetTab = $(this).attr("href");
      showTab($(targetTab).index());
    });

    function showTab(n) {
      var tabs = $(".tab-pane");
      tabs.eq(n).addClass("active").siblings().removeClass("active");
      $(".nav-link").eq(n).addClass("active").parent().siblings().find(".nav-link").removeClass("active");
      $("#prevBtn").toggle(n > 0);
      $("#nextBtn").toggle(n < (tabs.length - 1));

      // Show submit button only on last tab and hide next button
      if (tabs.eq(n).attr('id') === 'step4') {
        $("#submitBtn").show();
        $("#nextBtn").hide();
      } else {
        $("#submitBtn").hide();
        $("#nextBtn").show();
      }

      updateProgressBar(n);
    }




    function validateForm() {
      var isValid = true;
      var currentTab = $(".tab-pane.active");
      currentTab.find('input[required]').each(function() {
        if (!$(this).val()) {
          isValid = false;
          $(this).addClass('is-invalid');
        } else {
          $(this).removeClass('is-invalid');
        }
      });
      if (!isValid) return false;

      // Custom validation logic here if needed

      return true;
    }

    function updateProgressBar(currentStep) {
      var totalSteps = $(".tab-pane").length;
      var percentComplete = (currentStep + 1) * 100 / totalSteps;
      $(".progress-bar").css("width", percentComplete + "%");
    }

    // Add input validation on keyup
    $('input[required]').keyup(function() {
      if ($(this).val()) {
        $(this).removeClass('is-invalid');
        $(this).siblings('.valid-feedback').show();
        $(this).siblings('.invalid-feedback').hide();
      } else {
        $(this).addClass('is-invalid');
        $(this).siblings('.valid-feedback').hide();
        $(this).siblings('.invalid-feedback').show();
      }
    });

    // submit modal field
    $('#submitModalBtn').click(function() {
      var modalField1Value = $('#inputModalField1').val();
      $('#modalField1').val(modalField1Value);
      $('#exampleModalLong').modal('hide');
    });

    //enable submit
    $('#inputModalField1').change(function() {
      if ($(this).is(':checked')) {
        $('#submitBtn').prop('disabled', false);
      } else {
        $('#submitBtn').prop('disabled', true);
      }
    });



  });
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Codepros Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>By registering on our platform, you agree to maintain online availability during the duration of any task you undertake. This entails being accessible through our messaging system and adhering to reasonable response times to client inquiries and updates. Failure to maintain online availability may result in penalties or suspension of your account. We encourage both clients and techies to prioritize clear communication to ensure timely and satisfactory completion of tasks.</p>
        <p> We strictly prohibit plagiarism in any form. Techies are expected to deliver original work that is not copied from any other source. Any instances of plagiarism will result in immediate termination of the task, forfeiture of payment, and potential suspension of your account. We employ advanced plagiarism detection tools to verify the authenticity of submitted work. By registering on our platform, you acknowledge and agree to adhere to this policy.</p>
        <p>Our platform emphasizes the importance of writing clean, efficient, and human-readable code. Techies are expected to demonstrate proficiency in coding practices and produce high-quality solutions that meet the specified requirements. Automated code generation tools or solutions that rely heavily on pre-existing templates are discouraged. Clients entrust us with their technical needs, and we prioritize delivering solutions that reflect the expertise and craftsmanship of human developers. By registering on our platform, you commit to upholding these standards and delivering code that is both functional and maintainable.</p>

      </div>
      <div class="form-group row">
        <div class="col offset-md-3">
          <div class="form-check">
            <input class="form-check-input" name="t&c" type="checkbox" id="inputModalField1" required>
            <label class="form-check-label">
              Agree to Terms & Conditions
            </label>
            <div class="invalid-feedback">Must agree to terms & conditions</div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-primary" id="submitModalBtn">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>