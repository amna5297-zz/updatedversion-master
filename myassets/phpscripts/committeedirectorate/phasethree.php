
<?php

    include("../dbconnect.php");
    include_once("../security/functions.php");

    sec_session_start();

    $position = $_POST["position"];
    $committeefirstpreference= $_POST["committeefirstpreference"];
    $topicsfirstpreference= $_POST["topicsfirstpreference"];
    $committeesecondpreference= $_POST["committeesecondpreference"]; 
    $topicssecondpreference= $_POST["topicssecondpreference"];
    $motivation= $_POST["motivation"];
    $reasonfortopics= $_POST["reasonfortopics"];

    $email = $_SESSION["email"];

    // prepare and bind
    $stmt = "UPDATE CommitteeDirectorate set position = '$position' , committeefirstpreference = '$committeefirstpreference' , topicsfirstpreference = '$topicsfirstpreference', committeesecondpreference = '$committeesecondpreference',   topicssecondpreference =  ' $topicssecondpreference' ,motivation = '$motivation', reasonfortopics ='$reasonfortopics' where email = '$email'";
    //  $stmt->execute();

    $conn->query($stmt);
    $status = "y";


    $conn->close();

    echo $status;

?>