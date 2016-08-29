<?php

include_once("../security/functions.php");

sec_session_start();
$url =$_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
$team = $query['teamid'];
$delegate = $query['delegate'];


$ds = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'uploads';   //2
echo $storeFolder;
if (!empty($_FILES)) {

  if ( !file_exists($storeFolder) ) {
     $oldmask = umask(0);  // helpful when used in linux server
     mkdir ($storeFolder, 0744);
 }

 $storeFolder = $storeFolder."/".$team;

 if ( !file_exists($storeFolder) ) {
    $oldmask = umask(0);  // helpful when used in linux server
    mkdir ($storeFolder, 0744);
}

    $tempFile = $_FILES['file']['tmp_name'];          //3
$ext = pathinfo($tempFile, PATHINFO_EXTENSION);
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    $targetFile =  $storeFolder."/".$delegate;  //5

    move_uploaded_file($tempFile,$targetFile); //6

}
?>
