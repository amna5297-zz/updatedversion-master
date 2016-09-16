<?php
    $servername = "localhost";
    $dbusername = "root";
    $password_db = "";
    $dbname = "NIMUN";

    $conn = new mysqli($servername, $dbusername, $password_db, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }



?>
