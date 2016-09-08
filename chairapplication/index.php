<!DOCTYPE html>

<html lang="en">
  <head>
        <meta charset="utf-8" />
        <title>NIMUN'17 Chair Application</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />

        <link href="../assets/global/plugins/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

        <link href="../myassets/css/display.css" rel="stylesheet" type="text/css" />
        <link href="../myassets/css/forms.css" rel="stylesheet" type="text/css" />

        <link href="../myassets/css/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="../myassets/css/basics.css"rel="stylesheet" type="text/css"/>

        <!-- AJAX -->
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/invoice-2.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

    </head>
    <!-- END HEAD -->

    <body>

      <script>
        $(document).ready(function(){
            $("#country").change(function(){
                $(this).find("option:selected").each(function(){
                    if($(this).attr("value")!="PK" && $(this).attr("value")!="null"){
                        $(".nonpakistani").show();
                    }
                    else if($(this).attr("value")=="null" || $(this).attr("value")=="PK"){
                        $(".nonpakistani").hide();
                    }
                });
            }).change();
        });
        </script>

      <!-- BEGIN CONTENT BODY -->
      <div class="page-content">
        <div class="padding">
          <!-- BEGIN PAGE TITLE-->
          <h3 class="page-title"> NIMUN | Chair Applications </h3>
          <!-- END PAGE TITLE-->
        </div>

        <div class="portlet-body">
          <div class="mt-element-step">
            <div class="row step-default">
              <div id="step1" class="col-xs-4 bg-grey mt-step-col active"></div>
              <div id="step2" class="col-xs-4 bg-grey mt-step-col"></div>
              <div id="step3" class="col-xs-4 bg-grey mt-step-col "></div>
            </div>
          </div>

          <!-- PHASE ONE -->

          <div class="" id="phaseone">
            <div class="col-md-12">
              <div class="alert alert-danger errors hide-on-load" id="phaseoneformerror">
                <strong>Error!</strong> There are some errors in the form. You need to fix them before you press Continue.
              </div>
            </div>

            <div class="delegatecontainer headdelegate">
              <h3 style="padding:20px;">Personal Information</h3><hr>
              <div class="clearfix"></div><div class="clearfix"></div>
            </div>

            <form action="handler" id="directorate-one" style="margin-top:20px;">
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Full Name</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="fullname" placeholder="Full Name" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>MUN Association</label>
                  </div>
                  <div class="col-md-9">
                    <input class="form-control" name="munassociation"/>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Gender</label>
                  </div>
                  <div class="col-md-9">
                    <input type="radio" name="gender" value="M"/>&nbsp;Male&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="F"/>&nbsp;Female
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Email</label>
                  </div>
                  <div class="col-md-9">
                    <input type="email" name="email" placeholder="Email" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Date of Birth</label>
                  </div>
                  <div class="col-md-9">
                    <input type="date" name="dob" placeholder="Date of Birth" class="form-control" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Phone #</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="phone" placeholder="Phone" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Nationality</label>
                  </div>
                  <div class="col-md-9">
                    <input class="form-control" name="nationality"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>CNIC/B-FORM/Passport#</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="cnic" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Institute</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="institute" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Skype ID</label>
                  </div>
                  <div class="col-md-9">
                    <input class="form-control" name="skypeid"/>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Program &amp Year of Study</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="program" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Accommodation</label>
                  </div>
                  <div class="col-md-9">
                    <input type="radio" name="accommodation" value="true"/>&nbsp;Yes&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="accommodation" value="false"/>&nbsp;No
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Address</label>
                  </div>
                  <div class="col-md-9">
                    <input class="form-control" name="address" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Visa Requirement</label>
                  </div>
                  <div class="col-md-9">
                    <input type="radio" name="visarequirement" value="true"/>&nbsp;Yes&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="visarequirement" value="false"/>&nbsp;No
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>City</label>
                  </div>
                  <div class="col-md-9">
                    <input class="form-control" name="city" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Country</label>
                  </div>
                  <div class="col-md-9">
                    <!-- <input class="form-control" name="country"/> -->
                    <!-- DROP DOWN COUNTRY -->
                    <select id="country" name="country" class="form-control">
                      <option value="null" selected>(please select a country)</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BA">Bosnia and Herzegowina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="BN">Brunei Darussalam</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CD">Congo, the Democratic Republic of the</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Cote d'Ivoire</option>
                      <option value="HR">Croatia (Hrvatska)</option>
                      <option value="CU">Cuba</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="TP">East Timor</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands (Malvinas)</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="FX">France, Metropolitan</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard and Mc Donald Islands</option>
                      <option value="VA">Holy See (Vatican City State)</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran (Islamic Republic of)</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KP">Korea, Democratic People's Republic of</option>
                      <option value="KR">Korea, Republic of</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Lao People's Democratic Republic</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libyan Arab Jamahiriya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macau</option>
                      <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia, Federated States of</option>
                      <option value="MD">Moldova, Republic of</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RE">Reunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russian Federation</option>
                      <option value="RW">Rwanda</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint LUCIA</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia (Slovak Republic)</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SH">St. Helena</option>
                      <option value="PM">St. Pierre and Miquelon</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syrian Arab Republic</option>
                      <option value="TW">Taiwan, Province of China</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania, United Republic of</option>
                      <option value="TH">Thailand</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Viet Nam</option>
                      <option value="VG">Virgin Islands (British)</option>
                      <option value="VI">Virgin Islands (U.S.)</option>
                      <option value="WF">Wallis and Futuna Islands</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="YU">Yugoslavia</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                    <!-- END OF DROP DOWN COUNTRY -->




                  </div>
                </div>
              </div>

              <div class="row nonpakistani" style="display: none;">
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Dietary Requirements</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="diet" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-3">
                    <label>Allergies</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="allergies" placeholder="(if any)" class="form-control" />
                  </div>
                </div>
              </div>


              <div class="clearfix"></div>
              <button type="button" id="continuestepone" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-right">
                <span class="ladda-label">Continue</span>
                <span class="ladda-spinner"></span>
                <div class="ladda-progress" style="width: 0px;"></div>
              </button>

              <div class="clearfix"></div>
            </form>
          </div>



          <!--  PHASE TWO  -->


          <div class="hide-on-load" id="phasetwo">
            <form action="handler" id="directorate-two" style="margin-top:20px;">
              <div class="col-md-12">
                <div class="delegatecontainer headdelegate">
                  <h3>Experience</h3><hr>
                  <div class="clearfix"></div>
                </div>

                <br><br>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-8">
                      <label> Enlist your past MUN experience including positions held and achievements (if any).</label>
                      <br>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="5" name="pastexperience" /> </textarea>
                    </div>

                  </div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-8">
                      <label> Why are you interested in Chairing at NUST International Model United Nations 2017?</label>
                      <br>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="5" name="interest" /></textarea>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>


                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-8">
                      <label> If you have held any leadership position in the past, tell us about the role you played,the way you managed your team and the approach you adapted to resolve conflicts.</label>
                      <br>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="5" name="pastleadership" /></textarea>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <p>
                  <b>Note: </b>Once you click continue, you will not be able to edit your details. Recheck all the details that you have entered before pressing continue.
                </p>
                <button type="button" id="continuesteptwo" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-right">
                  <span class="ladda-label">Continue</span>
                  <span class="ladda-spinner"></span>
                  <div class="ladda-progress" style="width: 0px;"></div>
                </button>

                <div class="clearfix"></div>
              </div>

              <div class="clearfix"><br><br><br></div>
            </form>
          </div>


          <!--  PHASE THREE  -->

          <div class="hide-on-load" id="phasethree">
            <form action="handler" id="directorate-three" style="margin-top:20px;">
              <div class="col-md-12">
                <div class="delegatecontainer headdelegate">
                  <h3>Position and Committee Preferences</h3><hr>
                  <p></p>
                  <div class="clearfix"></div>
                  <div class="clearfix"></div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <label> Position applied for:</label>
                    </div>
                    <div class="col-md-9">
                      <input type="radio" name="position" value="committee Director"/>&nbsp;Committee Director&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="position" value="Assistant Committee Director"/>&nbsp;Assistant Committee Director&nbsp;
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <label> Committee(First preference):</label>
                    </div>
                    <div class="col-md-4">
                      <!-- <input class="form-control" name="committeefirstpreference"/> -->
                      <select class="form-control" name="committeefirstpreference">
                        <option value="IAEA" selected="selected">IAEA</option>
                        <option value="UNIDO">UNIDO</option>
                        <option value="WHO">WHO</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <label> Suggest two topics for your first committee of preference.</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea rows="5" class="form-control" name="topicsfirstpreference"/></textarea>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <label> Committee(Second preference):</label>
                    </div>
                    <div class="col-md-4">
                      <!-- <input class="form-control" name="committeesecondpreference"/> -->
                      <select class="form-control" name="committeesecondpreference" >
                        <option selected="selected" value="IAEA">IAEA</option>
                        <option value="UNIDO">UNIDO</option>
                        <option value="WHO">WHO</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <label> Suggest two topics for your second committee of preference.</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea rows="5" class="form-control" name="topicssecondpreference" /></textarea>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <label>Briefly explain your reason(s) behind Chairing the selected committees.</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea rows="5" class="form-control" name="motivation" /></textarea>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <label>How do you think the suggested topics align with the theme of the conference?</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea rows="5" class="form-control" name="reasonfortopics" /></textarea>
                    </div>
                  </div>
                </div>

                <div class="clearfix"><br></div>

                <p>
                  <b>Note: </b>Once you click continue, you will not be able to edit your details. Recheck all the details that you have entered before pressing continue.
                </p>

                <button type="button" id="continuestepthree" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-right">
                  <span class="ladda-label">Continue</span>
                  <span class="ladda-spinner"></span>
                  <div class="ladda-progress" style="width: 0px;"></div>
                </button>

                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>

              <div class="clearfix"><br><br></div>

            </form>


</div>

<div class="hide-on-load" id="registrationcomplete" style="min-height:1000px;">
    <h3 class="increasedlineheight">You have successfully registered as a committee chair. A confirmation email has been sent to the email address that you mentioned. We will be contacting you via the email address and the phone number that you entered in the form.</h3>
    <h4><a href="../">Click here </a>to head back to our home page.</h4>
</div>





        <!-- END CONTENT BODY -->


        <!--[if lt IE 9]>
        <script src="../../../assets/global/plugins/respond.min.js"></script>
        <script src="../../assets/global/plugins/excanvas.min.js"></script>
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        <script src="../myassets/js/delegateregistration/dropzone.js" type="text/javascript"></script>
        <script src="../myassets/js/delegateregistration/dropzoneoptions.js" type="text/javascript"></script>

        <script src="../assets/global/plugins/ladda/spin.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/ladda/ladda.min.js" type="text/javascript"></script>
        <script src="../myassets/js/committeedirectorate/form.js" type="text/javascript"></script>
    </body>


</html>
