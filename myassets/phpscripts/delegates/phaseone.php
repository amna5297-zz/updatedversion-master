<?php

    include("../dbconnect.php");
    include_once("../security/functions.php");

    sec_session_start();

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO HeadDelegates (username, firstname, lastname, email, phone, gender, cnic, institute, registrationtype, address, city, countryorigin, numdelegates, delegateexp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssssss", $username, $firstname, $lastname, $email, $phone, $gender, $cnic, $institute, $regtype, $address, $city, $country, $numdelegates, $delegateexperience);

    $username = $_SESSION['username'];

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $cnic = $_POST["cnic"];
    $institute = $_POST["institute"];
    $regtype = $_POST["regtype"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $numdelegates = $_POST["numdelegates"];
    $delegateexperience = $_POST["delegateexperience"];

    $status = "y";


    if($stmt->execute()){
        $status = "y";

        $stage = "1";
        $date = date("Y-m-d");
        $time = date("H:i:s");

        $stmt = $conn->prepare("INSERT INTO DelegateStatus (username, status, cdate, ctime) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $stage, $date, $time);

        if(!($stmt->execute())){
          $status = "n";
        }
    }
    else{
        $status = "n";
    }

    $stmt->close();

    $conn->close();

    echo $status;

?>
