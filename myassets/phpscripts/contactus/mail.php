<?php

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email_from = $_POST["email"];
    $message = $_POST["message"];
    $email_to = "14bscsaabdul@seecs.edu.pk";


    //$path = $server_name.'.activation/activate.php?link='.$verificationlink.'&user='.$email;
    $bodyContent = '<h1 style="color:blue;">'.$message.'<BR/> Contact Number:'.$phone.'</h1>';


    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <'.$email_from.'>' . "\r\n";

    $subject = "Contact Us - Message";

    if(@mail($email_to,$subject,$bodyContent,$headers)){
      $flag = true;
    }
    else{
      $flag = false;
    }

    if($flag){
      echo "y";
    }
    else{
      echo "n";
    }
?>
