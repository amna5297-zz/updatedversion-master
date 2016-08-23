<?php
    include("../dbconnect.php");

    $index = (int)$_GET["index"] - 1;
    $index = $index * 10;

    $sql = "SELECT username, status, cdate, ctime
      FROM DelegateStatus
      LIMIT 10 OFFSET $index";
    $result = $conn->query($sql);
$rows = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }


}
$data = array('Registrations' => $rows);
print json_encode($data);
    $conn->close();
 ?>
