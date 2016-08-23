<?php
    $flag = false;

    $email = $_POST["email"];
    $password = $_POST["password"];

    $verificationlink = randomString();

    $server_name = $_SERVER['SERVER_NAME'];

    $status = "N";

    include("../dbconnect.php");

    $stmt = $conn->prepare("INSERT INTO Users (username, password, link, activated) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $password, $verificationlink, $status);

    if($stmt->execute()){
        $flag = true;
    }
    else{
        $flag = false;
    }

    $conn->close();

    if(!($flag)){
        die("n");
    }

$path = $server_name.'.activation/activate.php?link='.$verificationlink.'&user='.$email;
    $bodyContent = '<h1 style="color:blue;">To verify your email click on the link below to continue</h1>';
    $bodyContent .= "<p><a href='$path'>
                                VERIFY!
                            </a></p>";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <test@nimun.com.pk>' . "\r\n";

    $subject = "NIMUN Registration-Email Verification";
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
