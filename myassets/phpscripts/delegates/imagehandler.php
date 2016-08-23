<?php

include_once("../security/functions.php");

sec_session_start();

$uname= $_SESSION['username'];

$ds = DIRECTORY_SEPARATOR;  //1
echo $uname;
echo "<br />";
$storeFolder = 'uploads/'.$uname;   //2
echo $storeFolder;
if (!empty($_FILES)) {

  if ( !file_exists($storeFolder) ) {
     $oldmask = umask(0);  // helpful when used in linux server
     mkdir ($storeFolder, 0744);
 }

    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    move_uploaded_file($tempFile,$targetFile); //6

}
?>
