<?php
    include("../dbconnect.php");
    include_once("../security/functions.php");

    sec_session_start();

    $flag = "y";

$teamid = $_POST["teamid"];
    $username = $_SESSION['username'];
    $firstname = explode(',', $_POST["firstname"]);
    $lastname = explode(',', $_POST["lastname"]);
    $email = explode(',', $_POST["email"]);
    $phone = explode(',', $_POST["phone"]);
    $gender = explode(',', $_POST["gender"]);
    $cnic = explode(',', $_POST["cnic"]);
    $address = explode(',', $_POST["address"]);
    $city = explode(',', $_POST["city"]);
    $accommodation = explode(',', $_POST["accommodation"]);
    $committee = explode(',', $_POST["committee"]);
    $delegateexp = explode(',', $_POST["mun"]);
    $reason = explode(',', $_POST["reason"]);
    $mun = explode(',', $_POST["mun"]);


    if($stmt = $conn->prepare("UPDATE HeadDelegates
      SET firstname=?, lastname=?, phone=?, gender=?, cnic=?, address=?, city=?,
      Accomodation=?, committee=?, delegateexp=?, committeereason=?
      where username=?")){

          $stmt->bind_param('ssssssssssss', $firstname[0], $lastname[0], $phone[0], $gender[0], $cnic[0], $address[0],
        $city[0], $accommodation[0], $committee[0], $delegateexp[0], $reason[0], $username);  // Bind "$email" to parameter.

          if(!$stmt->execute()){
              $flag ="n";
          }    // Execute the prepared query.
          else{


            for($i= 1; $i < count($city)-1; $i++){

                if($stmt = $conn->prepare("INSERT INTO TeamInfo (TeamId, FirstName, LastName, Email, Phone, Gender, CNIC, Address, City, Accommodation, Committee, MUN, Reason)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")){
          $g = "m";

                    $stmt->bind_param('issssssssssss', $teamid, $firstname[$i], $lastname[$i], $email[$i], $phone[$i], $g, $cnic[$i], $address[$i], $city[$i], $g, $g, $mun[$i], $reason[$i]);

                    if(!$stmt->execute()){
                        $flag="n";
                    }
                }
            }
          }


      }

      if($flag != "n"){
          if($stmt = $conn->prepare("UPDATE DelegateStatus SET status = 2
          WHERE id =?")){
              $stmt->bind_param("i", $teamid);

              if(!$stmt->execute()){
                  $flag= "n";
              }
          }
      }



    $conn->close();
    echo $flag;
 ?>
