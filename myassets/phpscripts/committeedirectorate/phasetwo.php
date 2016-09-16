<?php

    include("../dbconnect.php");
    include_once("../security/functions.php");

    sec_session_start();

    $pastexperience = $_POST["pastexperience"];
    $interest= $_POST["interest"];
    $pastleadership= $_POST["pastleadership"];

    $email = $_SESSION["email"];

    // prepare and bind
    $stmt = "UPDATE CommitteeDirectorate set pastexperience = '$pastexperience' , interest = '$interest' , pastleadership = '$pastleadership'  where email = '$email'";
    //  $stmt->execute();

    //$conn->query($stmt);


    $conn->close();

?>
