<?php
  include_once '../functions.php';

  sec_session_start();

  if (isset($_POST['username'], $_POST['password'])) {
    $uname = $_POST['username'];
    $pwd = $_POST['password']; // The hashed password.

    if (login($uname, $pwd) == true) {
        // Login success
        echo "y";
    } else {
        // Login failed
        echo  "n";
    }
} else {
    // The correct POST variables were not sent to this page.
    echo 'Invalid Request';
}
?>
