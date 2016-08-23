<?php $directoratestatus=0 ?>


<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>NIMUN'17 Chair Registration</title>
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
          <h3 class="page-title"> NIMUN | Committee Directorate Registration </h3>
          <!-- END PAGE TITLE-->
        </div>


            <div class="portlet-body">
                <div class="mt-element-step">
                    <div class="row step-default">
                        <div id="step1" class="col-xs-4 bg-grey mt-step-col active">

                        </div>
                        <div id="step2" class="col-xs-4 bg-grey mt-step-col">

                        </div>
                        <div id="step3" class="col-xs-4 bg-grey mt-step-col ">

                        </div>
                    </div>
                </div>

<?php if($directoratestatus == 0): ?>
  <div class="" id="phaseone">

    <div class="col-md-12">

      <div class="alert alert-danger errors hide-on-load" id="phaseoneformerror">
        <strong>Error!</strong> There are some errors in the form. You need to fix them before you press Continue.
      </div>

    </div>

      <h2> Personal Information </h2>
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
                      <label>Date of Birth</label>
                  </div>
                  <div class="col-md-9">
                      <input type="date" name="dob" placeholder="Date of Birth" class="form-control" />
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
                      <label>Email</label>
                  </div>
                  <div class="col-md-9">
                      <input type="email" name="email" placeholder="Email" class="form-control" />
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
                      <label>Institute</label>
                  </div>
                  <div class="col-md-9">
                      <input type="text" name="institute" class="form-control" />
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>Program</label>
                  </div>
                  <div class="col-md-9">
                      <input type="text" name="program" class="form-control" />
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>Year of Study</label>
                  </div>
                  <div class="col-md-9">
                      <input type="number" name="yearofstudy" class="form-control" />
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
                      <label>Country</label>
                  </div>
                  <div class="col-md-9">
                      <input class="form-control" name="country"/>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>Nationality</label>
                  </div>
                  <div class="col-md-9">
                      <input class="form-control" name="nationality"/>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="col-md-3">
                      <label>MUN Association</label>
                  </div>
                  <div class="col-md-9">
                      <input class="form-control" name="munassociation"/>
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
                      <label>Accommodation</label>
                  </div>
                  <div class="col-md-9">
                      <input type="radio" name="accommodation" value="true"/>&nbsp;Yes&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="accommodation" value="false"/>&nbsp;No
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

          <div class="clearfix"></div>

          <button type="button" id="continuestepone" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-right">
              <span class="ladda-label">Continue</span>
              <span class="ladda-spinner"></span>
              <div class="ladda-progress" style="width: 0px;"></div>
          </button>

          <div class="clearfix"></div>
        </form>
  </div>
<?php endif;
    $directoratestatus = 1;
?>


    <!--  PHASE TWO  -->


    <div class="hide-on-load" id="phasetwo" <?php if($directoratestatus!=1){echo('class="hide-on-load"');} ?>>
        <form action="handler" id="directorate-two" style="margin-top:20px;">
          <div class="col-md-12">
            <div class="delegatecontainer headdelegate">
                <h3>Experience</h3>
                <p></p>
                <div class="clearfix"></div>
                <div class="clearfix"></div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <label> Enlist your past MUN experience including positions held and achievements (if any).</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="pastexperience"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <label> Why are you interested in Chairing at NUST International Model United Nations 2017?</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="interest"/>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <label> If you have held any leadership position in the past, tell us about the role you played,the way you managed your team and the approach you adapted to resolve conflicts.</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="pastleadership"/>
                    </div>
                </div>
            </div>

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


<?php$directoratestatus=2 ?>

<!--  PHASE TWO  -->


<div class="hide-on-load" id="phasethree" <?php if($directoratestatus!=2){echo('class="hide-on-load"');} ?>>
    <form action="handler" id="directorate-three" style="margin-top:20px;">
      <div class="col-md-12">
        <div class="delegatecontainer headdelegate">
            <h3>Position and committee Preferences</h3>
            <p></p>
            <div class="clearfix"></div>
            <div class="clearfix"></div>


        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <label> Position applied for:</label>
                </div>
                <div class="col-md-9">
                    <input type="radio" name="position" value="committee Director"/>&nbsp;Committee Director&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="position" value="Assistant Committee Director"/>Assistant Committee Director&nbsp;
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <label> Committee(First preference):</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="committeefirstpreference"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <label> Suggest two topics for your first committee of preference.</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="topicsfirstpreference"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <label> Committee(Second preference):</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="committeesecondpreference"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <label> Suggest two topics for your second committee of preference.</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="topicssecondpreference"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <label>Briefly explain your reason(s) behind Chairing the selected committees.</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="motivation"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <label>How do you think the suggested topics align with the theme of the conference?</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="reasonfortopics"/>
                </div>
            </div>
        </div>

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
    </form>
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
