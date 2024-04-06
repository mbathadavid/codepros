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

  <!-- BOF Breadcrumb -->
  <div class="row">
    <div class="col">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="ti-home"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active">Form Control</li>
      </ol>
    </div>
  </div>
  <!-- EOF Breadcrumb -->

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
              <span class="d-none d-sm-inline">My Profile</span>
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

        <form role="form" id="wizardForm" class="validate1" novalidate>
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
                        <input type="text" class="form-control" placeholder="First Name" required>
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
                        <input type="text" class="form-control" placeholder="Last Name" required>
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
                        <input type="text" class="form-control" placeholder="Username" required>
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
                        <input type="number" class="form-control" placeholder="Mobile Number" required>
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
                        <input type="file" class="form-control" placeholder="Choose File" required>
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
                        <select class="form-control">
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
                        <textarea class="form-control" placeholder="Write a short about here..." required></textarea>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required</div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Areas of Specialization</label>
                      <div class="col">
                        <div class="form-checkbox">
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Programming
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Web Development
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Networking
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Machine Learning/AI
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Date science
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Data Analysis
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            UI/UX
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Database
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Linux Administration
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Clould Computing
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Cyber Security
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Computer Graphics
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Game Design
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Mobile Development
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Programming Languages</label>
                      <div class="col">
                        <div class="form-checkbox">
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            JavaScript
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Python
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Java
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            C++
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            C#
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Ruby
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Swift
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            TypeScript
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            PHP
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Go
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Kotlin
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Rust
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Web Development Frameworks</label>
                      <div class="col">
                        <div class="form-checkbox">
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            React.js
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Angular
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Vue.js
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Django
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Ruby on Rails
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Laravel
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Flask
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Express.js
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Spring Boot
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox4">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            ASP.NET Core
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox5">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Ember.js
                          </label>
                          <label class="mr-3">
                            <input type="checkbox" name="checkbox6">
                            <span class="checkmark"><i class="fa fa-check"></i></span>
                            Meteor.js
                          </label>
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
                    <input type="text" class="form-control" placeholder="Paste your Portifolio link here..." required>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter Portifolio Link.</div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group col offset-md-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Linked <i class="ti-linkedin me-1"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Paste your Linkedin link here..." required>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter Linkedin Link.</div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group col offset-md-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Github <i class="ti-github me-1"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Paste your Github link here..." required>
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
                  <p class="card-text">The following requirement will be required in order to proceed working with codepros job site.</p>
                  <ul>
                    <li>Online Availability.</li>
                    <li>Avoid Plagirism</li>
                    <li>100% Human Code</li>
                    <li>Coding Experience</li>
                    <li>IT/Computer scienc Academic Degree</li>
                  </ul>

                  <div class="form-group row">
                    <div class="col offset-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" required>
                        <label class="form-check-label">
                          Agree to Terms & Conditions
                        </label>
                        <div class="invalid-feedback">Must agree to terms & conditions</div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- Other fields for step 4-->
              </div>
            </div>
          </div>
          <div class="card-footer text-right">
            <button type="button" class="btn btn-flat btn-secondary float-left" id="prevBtn">Previous</button>
            <button type="submit" class="btn btn-flat btn-secondary" id="nextBtn">Next</button>
          </div>
        </form>
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

  });

</script>



<?= $this->endSection() ?>