<?php
include('db_connect.php');
$username=$_GET['un'];
$os=$_GET['os'];
$role=1;
$query="INSERT INTO user(`username`, `os`, `role`) VALUES ('$username','$os',1)";
echo $query;
if($exec=mysqli_query($conn,$query)){
  $data = "Status:Registration Successfully";
}
else {
  $data="Status:Failed registration";
}
header('Content-type: application/json');
echo json_encode( $data );
?>
