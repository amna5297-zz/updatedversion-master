<?php

    sec_session_start();
    $_SESSION["email"]= $email;

    $email ="test@nimun.com.pk";
    $password = "password";

    $verificationlink = randomString();

    $server_name = $_SERVER['SERVER_NAME'];


    $path = $server_name.'.activation/activate.php?link='.$verificationlink.'&user='.$email;
    $bodyContent = '<h1 style="color:blue;">.'$email'.</h1>';



    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <test@nimun.com.pk>' . "\r\n";

    $subject = "NIMUN Chair Application";
    if(@mail($email,$subject,$bodyContent,$headers)){
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

    function randomString($length = 30) {
        $link = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $link .= $characters[$rand];
        }
        return $link;
    }
?>
