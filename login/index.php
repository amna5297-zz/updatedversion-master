<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>NIMUN '17</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <link href="../assets/global/plugins/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

        <link href="../myassets/css/display.css" rel="stylesheet" type="text/css"/>

        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">

        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" style="background-image:url(../assets/pages/img/login/bg1.jpg)">
                        <h2 style="color:white; float:left; margin-left:20px;"><b>NIMUN '17</b></h2> </div>
                </div>

                <div class="col-md-6 login-container bs-reset" id="mainlogin">
                    <div class="login-content">
                      <?php
                          if(isset($_GET["link"], $_GET["user"])){
                            $link = $_GET["link"];
                            $username = $_GET["user"];

                            include("../myassets/phpscripts/dbconnect.php");

                            if ($stmt = $conn->prepare("SELECT link
                                FROM Users
                               WHERE username = ?
                                LIMIT 1")) {
                                $stmt->bind_param('s', $username);  // Bind "$email" to parameter.
                                $stmt->execute();    // Execute the prepared query.
                                $stmt->store_result();

                                // get variables from result.
                                $stmt->bind_result($dblink);
                                $stmt->fetch();

                                if($dblink == $link){
                                    if($stmt = $conn->prepare("UPDATE Users
                                    SET activated = 'y'
                                    WHERE username = ? ")){
                                      $stmt->bind_param('s', $username);
                                      if ($stmt->execute()) {
                                        echo("<div class='alert alert-success'><strong>Success!</strong> Your account has been activated. Login using the credentials you signed up with and proceed with the registration process.</div>");
                                    } else {
                                        echo "Error updating record: " . $conn->error;
                                    }
                                    }
                                }

                            }
                          }

                      ?>
                        <h1>NIMUN '17 | Login</h1>

                        <p> You need to login to register to NIMUN '17. Don't have an account? <a id="createaccountbtn" href="javascript:;">Click here</a> to create one now! </p>

                        <form action="../myassets/phpscripts/security/processing/process_login.php" id="loginform" class="login-form" method="post">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Username/password cannot be empty. </span>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="username" required/> </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/> </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4 text-right">
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div>
                                    <button class="btn green mt-ladda-btn ladda-button" data-style="expand-right" id="signinbtn" type="button">
                                      <span class="ladda-label">Sign In</span>
                                      <span class="ladda-spinner"></span>
                                      <div class="ladda-progress" style="width: 0px;"></div>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="javascript:;" method="post">
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="email" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 login-container bs-reset hide-on-load" id="mainregister">
                    <div class="login-content">
                        <h1>NIMUN '17 | Create Account</h1>
                        <p> Already have an account? <a id="loginbtn" href="javascript:;">Click here</a> to login! </p>

                        <form action="javascript:;" class="login-form" id="registrationform" method="post">
                          <div class="alert alert-danger hide-on-load errors" id="emailerror">
                            <strong>Error!</strong> Invalid email address.
                          </div>
                          <div class="alert alert-danger hide-on-load errors" id="passworderror">
                            <strong>Error!</strong> Password too short.
                          </div>
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Email/password cannot be empty. </span>
                            </div>
                            <div class="row" style="margin-top:-20px;">
                                <div class="col-xs-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                        <label for="email"></label>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                  <div class="form-group form-md-line-input">
                                      <input type="password" class="form-control" name="password" id="form_control_1" placeholder="Password">
                                      <label for="form_control_1"></label>
                                  </div>


                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">

                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4 text-right">
                                    <button class="btn green mt-ladda-btn ladda-button" data-style="expand-right" id="registrationbutton" type="button">
                                        <span class="ladda-label">Register!</span>
                                        <span class="ladda-spinner"></span>
                                        <div class="ladda-progress" style="width: 0px;"></div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 login-container bs-reset hide-on-load" id="registersuccess">
                    <div class="login-content">
                        <h1>NIMUN '17 | Success</h1>
                        <p> You have successfully created your account. An email has been sent to the specified email address. Follow the link in your email to activate your account. Once you have activated your account, head back to the <a id="backtologin">Login</a> page, login and register for NIMUN '17 </p>
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->

        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->

        <script src="../assets/global/plugins/ladda/spin.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/ladda/ladda.min.js" type="text/javascript"></script>

        <script src="../myassets/js/sha512.js" type="text/javascript"></script>

        <script src="../myassets/js/login/buttons.js" type="text/javascript"></script>
        <script src="../myassets/js/login/switch.js" type="text/javascript"></script>
    </body>

</html>
