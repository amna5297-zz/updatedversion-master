
<?php

    include("../dbconnect.php");
    include_once("../security/functions.php");

    sec_session_start();



    $fullname=$_POST["fullname"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $nationality=$_POST["nationality"];
    $institute=$_POST["institute"];
    $program=$_POST["program"];
    $yearofstudy=$_POST["yearofstudy"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $country=$_POST["country"];
    $munassociation=$_POST["munassociation"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $cnic=$_POST["cnic"];
    $skypeid=$_POST["skypeid"];
    $accommodation=$_POST["accommodation"];
    $visarequirement=$_POST["visarequirement"];

    $_SESSION["email"]= $email;

    $dobs="1992-01-02";

    // prepare and bind

    $stmt = $conn->prepare("INSERT INTO CommitteeDirectorate (fullname, dob, gender, nationality, institute, program, yearofstudy, address, city, country, munassociation, email, phone, cnic, skypeid, accommodation, visarequirement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");

    $stmt->bind_param("sssssssssssssssss",       $fullname, $dobs,  $gender, $nationality,  $institute, $program, $yearofstudy, $address, $city,
          $country, $munassociation, $email, $phone, $cnic, $skypeid, $accommodation, $visarequirement);

    /*

    $stmt =  "INSERT INTO CommitteeDirectorate (fullname, dob, gender, nationality, institute, program, yearofstudy, address, city, country, munassociation, email, phone, cnic, skypeid, accommodation, visarequirement) VALUES
                  ('$fullname', '1995-01-01',  '$gender', '$nationality',  '$institute', '$program', '$yearofstudy', '$address', '$city',
                        '$country', '$munassociation', '$email', '$phone', '$cnic', '$skypeid', '$accommodation', '$visarequirement');";


    if ($conn->query($stmt)){
         echo "<h2>ADDED!</h2>";
     }
    else{
        echo 'NOT added to db';
    }
*/

    $status = "y";
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo $status;

?>