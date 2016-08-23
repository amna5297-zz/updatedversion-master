<?php
    include_once("../myassets/phpscripts/security/functions.php");
    include_once("../myassets/phpscripts/dbconnect.php");

    sec_session_start();

    if(!(login_check())){
        header('Location: ../login?error=1');
    }

    if($_SESSION['role'] != "user"){
      header('Location: ../login?error=2');
    }

    $delegateStatus = 0;
    $username = $_SESSION['username'];


    if ($stmt = $conn->prepare("SELECT status
        FROM DelegateStatus
       WHERE username = ?
        LIMIT 1")){
          $stmt->bind_param('s', $username);  // Bind "$email" to parameter.
          $stmt->execute();    // Execute the prepared query.
          $stmt->store_result();

          // get variables from result.
          $stmt->bind_result($delegateStatus);
          $stmt->fetch();

          if($stmt->num_rows == 0){
            $delegateStatus = 0;
          }
        }

$firstname="";
$lastname="";
$email="";
$phone="";
$gender="";
$cnic="";
$institue="";
$registrationtype ="";
$address="";
$city="";
$countryorigin="";
$numdelegates="";
$delegateexp="";
$committee="";
$committeereason="";

  if($delegateStatus == 1){

      if($stmt = $conn->prepare("SELECT firstname, lastname, email, phone, gender, cnic, institute, registrationtype, address, city, countryorigin, numdelegates, delegateexp
      FROM HeadDelegates
      WHERE username=?")){

        $stmt->bind_param('s', $username);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();

        // get variables from result.
        $stmt->bind_result($firstname, $lastname, $email, $phone, $gender, $cnic, $institue, $registrationtype, $address, $city, $countryorigin, $numdelegates, $delegateexp);
$stmt->fetch();

      }
  }

    $conn->close();

 ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>NIMUN'17 Registration</title>
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

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/invoice-2.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body>

        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">

            <div class="padding">
                <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title"> NIMUN | Registration </h3>
                <!-- END PAGE TITLE-->
            </div>


            <div class="portlet-body">
                <div class="mt-element-step">
                    <div class="row step-default">
                        <div id="step1" class="col-xs-4 bg-grey mt-step-col active">

                        </div>
                        <div id="step2" class="col-xs-4 bg-grey mt-step-col <?php if($delegateStatus == 1){echo "active";} ?>">

                        </div>
                        <div id="step3" class="col-xs-4 bg-grey mt-step-col ">

                        </div>
                    </div>
                </div>

<?php if($delegateStatus == 0): ?>
  <div id="phaseone">
    <div class="col-md-12">
      <div class="alert alert-danger errors hide-on-load" id="phaseoneformerror">
        <strong>Error!</strong> There are some errors in the form. You need to fix them before you press Continue.
      </div>
    </div>


      <form action="handler" id="delegatereg-one" style="margin-top:20px;">
          <div class="row">
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>First Name</label>
                  </div>
                  <div class="col-md-9">
                      <input type="text" name="firstname" placeholder="First Name" class="form-control" />
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>Last Name</label>
                  </div>
                  <div class="col-md-9">
                      <input type="text" name="lastname" placeholder="Last Name" class="form-control" />
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>Email</label>
                  </div>
                  <div class="col-md-9">
                      <input type="text" name="email" placeholder="Email" value="<?php echo $_SESSION['username']; ?>" readonly class="form-control" />
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
                      <label>Gender</label>
                  </div>
                  <div class="col-md-9">
                      <input type="radio" name="gender" value="M"/>&nbsp;Male&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="gender" value="F"/>&nbsp;Female
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
                      <label>Registration Type</label>
                  </div>
                  <div class="col-md-9">
                      <input type="radio" name="regtype" value="0"/>&nbsp;Official&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="regtype" value="1"/>&nbsp;Private
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
                      <label>City</label>
                  </div>
                  <div class="col-md-9">
                      <input class="form-control" name="city" />
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>Country Of Origin</label>
                  </div>
                  <div class="col-md-9">
                      <input class="form-control" name="country"/>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label># of delegates</label>
                  </div>
                  <div class="col-md-9">
                      <select class="form-control" name="numdelegates">
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>MUN Experience</label>
                  </div>
                  <div class="col-md-9">
                      <textarea class="form-control halfcolumnfix" rows="3" name="delegateexperience"></textarea>
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
<?php endif; ?>


                <div id="phasetwo" <?php if($delegateStatus!=1){echo('class="hide-on-load"');} ?>>
                    <form action="handler" id="delegatereg-two" style="margin-top:20px;">
                      <div class="col-md-12">
                        <div class="delegatecontainer headdelegate">
                            <h3>Delegate One</h3>
                            <hr />

                            <div class="col-xs-6 col-xs-offset-3">
                              <div id="myDropzone" action="../myassets/phpscripts/delegates/imagehandler.php?delegate=1" method="POST" class="dropzone dropzone-file-area dz-clickable" style="width: 100%; margin-top: 20px; margin-bottom:20px;">
                                                              <h3 class="sbold">Drop files here or click to upload</h3>
                                                              <p>
                                                                Upload the delegates picture.
                                                              </p>
                                                          <div class="dz-default dz-message"><span></span></div></div>


                            </div>
                            <div class="clearfix"></div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>First Name:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" <?php echo "value="."'".$firstname."'"; ?> name="firstname" placeholder="First Name" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>Last Name:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" <?php echo "value="."'".$lastname."'"; ?> name="lastname" placeholder="Last Name" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>Email:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="email" readonly value=<?php echo $_SESSION['username']; ?> placeholder="Email" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>Phone #:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" <?php echo "value="."'".$phone."'"; ?> name="phone" placeholder="Phone" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>Gender:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="radio" <?php if($gender =='M'){echo "checked";} ?> name="gender" value="M"/>&nbsp;Male&nbsp;&nbsp;&nbsp;
                                        <input type="radio" <?php if($gender =='F'){echo "checked";} ?>  class="genderradio" name="gender" value="F"/>&nbsp;Female
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>CNIC/B-FORM/Passport#:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" <?php echo "value="."'".$cnic."'"; ?> name="cnic" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row hide-on-load">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>Institute:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" <?php echo "value="."'".$institue."'"; ?> name="institute" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>Registration Type:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="radio" <?php if($registrationtype == 0){echo "checked";} ?> name="regtype" value="0"/>&nbsp;Official&nbsp;&nbsp;&nbsp;
                                        <input type="radio" <?php if($registrationtype == 1){echo "checked";} ?> name="regtype" value="1"/>&nbsp;Private
                                    </div>
                                </div>
                            </div>

                            <div class="row" class="hide-on-load">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>Address:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input <?php echo "value="."'".$address."'"; ?> class="form-control" name="address" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>City:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input <?php echo "value="."'".$city."'"; ?> class="form-control" name="city" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <input <?php echo "value="."'".$countryorigin."'"; ?> type="hidden" class="form-control" name="country"/>
                                <div class="col-md-6">
                                  <div class="col-md-3">
                                      <label>Accommodation:</label>
                                  </div>
                                  <div class="col-md-9">
                                    <input type="radio" name="accommodation" value="y"/>&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="accommodation" checked value="n"/>&nbsp;No
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="col-md-3">
                                      <label>Committee</label>
                                  </div>
                                  <div class="col-md-9">
                                      <input type="radio" <?php if($committee == 0){echo "checked";} ?> name="committee" value="0"/>&nbsp;UNSC&nbsp;&nbsp;&nbsp;
                                      <input type="radio" <?php if($committee == 1){echo "checked";} ?> name="committee" value="1"/>&nbsp;PCC&nbsp;&nbsp;&nbsp;
                                      <input type="radio" <?php if($committee == 2){echo "checked";} ?> name="committee" value="2"/>&nbsp;Project Based Committee
                                  </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <label>MUN Experience:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="6" name="delegateexperience"><?php echo $delegateexp; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="col-md-3">
                                      <label>Reason for picking the specified committee</label>
                                  </div>
                                  <div class="col-md-9">
                                      <textarea class="form-control" name="committeereason" rows="5"><?php echo $committeereason ?></textarea>
                                  </div>
                                  <div class="clearfix">

                                  </div>

                                </div>

                            </div>


                            <div class="clearfix"></div>


                        </div>

                        <?php
                          if($delegateStatus ==1){


                            $delegateFormPartOne = '<div class="delegatecontainer delegate';
                            $delegateFormPartTwo = '"><h3>Delegate ';
                            $delegateFormPartThree = '</h3><hr /><div class="col-xs-6 col-xs-offset-3"><div id="dropzone';
                            $delegateFormPartFour = '" action="../myassets/phpscripts/delegates/imagehandler.php?delegate=';
                            $delegateFormPartFive = '" method="POST" class="dropzone dropzone-file-area dz-clickable" style="width: 100%; margin-top: 20px; margin-bottom:20px;"> <h3 class="sbold">Drop files here or click to upload</h3> <p> Upload the delegates picture. </p> <div class="dz-default dz-message"><span></span></div></div> </div> <div class="clearfix"></div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>First Name:</label> </div> <div class="col-md-9"> <input type="text" name="firstname" placeholder="First Name" class="form-control" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Last Name:</label> </div> <div class="col-md-9"> <input type="text" name="lastname" placeholder="Last Name" class="form-control" /> </div> </div> </div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>Email:</label> </div> <div class="col-md-9"> <input type="text" name="email" placeholder="Email" class="form-control" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Phone #:</label> </div> <div class="col-md-9"> <input type="text" name="phone" placeholder="Phone" class="form-control" /> </div> </div> </div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>Gender:</label> </div> <div class="col-md-9"> <input type="radio" name="gender" value="M"/>&nbsp;Male&nbsp;&nbsp;&nbsp; <input type="radio" class="genderradio" name="gender" value="F"/>&nbsp;Female </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>CNIC/B-FORM/Passport#:</label> </div> <div class="col-md-9"> <input type="text" name="cnic" class="form-control" /> </div> </div> </div> <div class="row hide-on-load"> <div class="col-md-6"> <div class="col-md-3"> <label>Institute:</label> </div> <div class="col-md-9"> <input type="text" name="institute" class="form-control" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Registration Type:</label> </div> <div class="col-md-9"> <input type="radio" name="regtype" value="0"/>&nbsp;Official&nbsp;&nbsp;&nbsp; <input type="radio" name="regtype" value="1"/>&nbsp;Private </div> </div> </div> <div class="row" class="hide-on-load"> <div class="col-md-6"> <div class="col-md-3"> <label>Address:</label> </div> <div class="col-md-9"> <input class="form-control" name="address" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>City:</label> </div> <div class="col-md-9"><input class="form-control" name="city" /> </div> </div> </div> <div class="row"> <input type="hidden" class="form-control" name="country"/> <div class="col-md-6"> <div class="col-md-3"> <label>Accommodation:</label> </div> <div class="col-md-9"> <input type="radio" name="accommodation" value="y"/>&nbsp;Yes&nbsp;&nbsp;&nbsp; <input type="radio" name="accommodation" checked value="n"/>&nbsp;No </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Committee</label> </div> <div class="col-md-9"> <input type="radio" name="committee" value="0"/>&nbsp;UNSC&nbsp;&nbsp;&nbsp; <input type="radio" name="committee" value="1"/>&nbsp;PCC&nbsp;&nbsp;&nbsp; <input type="radio" name="committee" value="2"/>&nbsp;Project Based Committee </div> </div> </div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>MUN Experience:</label> </div> <div class="col-md-9"> <textarea class="form-control" rows="6" name="delegateexperience"></textarea> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Reason for picking the specified committee</label> </div> <div class="col-md-9"> <textarea class="form-control" name="committeereason" rows="5"></textarea> </div> <div class="clearfix"> </div> </div> </div> <div class="clearfix"></div> </div>';


                            for($i=0; $i < ((int)$numdelegates - 1); $i++){
                                $finalString = '';

                                $finalString .= $delegateFormPartOne . numberInWords($i+2);
                                $finalString .= $delegateFormPartTwo . numberInWords($i+2);
                                $finalString .= $delegateFormPartThree . numberInWords($i+2);
                                $finalString .= $delegateFormPartFour . ($i+2);
                                $finalString .= $delegateFormPartFive;

                                echo $finalString;
                            }
                          }

                          function numberInWords($number){
                              $numberArray = ['Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve'];

                              return $numberArray[$number];
                          }

                         ?>
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
                      <div class="clearfix"></div>
                    </form>
                </div>

                <div id="phasethree" class="hide-on-load">

                    <div class="invoice-content-2 bordered">
           <div class="row invoice-head">
               <div class="col-md-7 col-xs-6">
                   <div class="invoice-logo">
                       <img src="../nimun.png" style="width:80%;" class="img-responsive" alt="" />
                       <div class="clearfix"></div>
                       <h1 style="margin-top:5px;" class="uppercase">Invoice</h1>
                   </div>
               </div>
               <div class="col-md-5 col-xs-6">
                   <div class="company-address">
                       <span class="bold uppercase">NIMUN</span>
                       <br/> NUST H-12
                       <br/> Islamabad, Pakistan
                       <br/>
                       000 000 000
                       <br/>
                       emailaddress@nimun.com.pk
                       <br/>
                       www.nimun.com.pk </div>
               </div>
           </div>

           <div class="row invoice-body">
               <div class="col-xs-12 table-responsive">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="invoice-title uppercase">Description</th>
                               <th class="invoice-title uppercase text-center">Quantity</th>
                               <th class="invoice-title uppercase text-center">Rate</th>
                               <th class="invoice-title uppercase text-center">Total</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                   <h3>Flat Fee</h3>
                                   <p> This part would contain description of the flat fee... </p>
                               </td>
                               <td class="text-center sbold">1</td>
                               <td class="text-center sbold">Rs. 500</td>
                               <td class="text-center sbold">Rs. 500</td>
                           </tr>
                           <tr>
                               <td>
                                   <h3>Individual Delegate Fee</h3>
                                   <p> This part would contain the individual delegate fee description... </p>
                               </td>
                               <td class="text-center sbold">6</td>
                               <td class="text-center sbold">Rs. 700</td>
                               <td class="text-center sbold">Rs. 4200</td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div>
           <div class="row invoice-subtotal">

               <div class="col-xs-6">
                   <h2 class="invoice-title uppercase">Total</h2>
                   <p class="invoice-desc grand-total">Rs. 4900</p>
               </div>
           </div>

           <div class="row">
               <div class="col-xs-12">
                   <a class="btn btn-lg green-haze hidden-print uppercase print-btn" onclick="javascript:window.print();">Print</a>
               </div>
           </div>
       </div>

                </div>
            </div>


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
        <script src="../myassets/js/delegateregistration/forms.js" type="text/javascript"></script>
    </body>

    <script>

    </script>
</html>
