<?php
include('db_connect.php');
$username=$_GET['un'];
$os=$_GET['os'];
$role=1;
$query="INSERT INTO user(`username`, `os`, `role`) VALUES ('$username','$os',1)";
if($exec=mysqli_query($conn,$query)){
  echo "success";
}
else {
  echo "failed";
}
?>
