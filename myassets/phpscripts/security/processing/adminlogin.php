<?php
    include_once '../functions.php';

sec_session_start();

    $password = $_POST['encryptedpass'];
    $username = $_POST['username'];

    admin_login($username, $password);

    header('Location: ../../../../admin');
 ?>
