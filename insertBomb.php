<?php
include('db_connect.php');
$id=$_GET['id'];
$ph=$_GET['pn'];
$n=$_GET['n'];
$today=date('Y-m-d');
$query="INSERT INTO bombs(`user_id`, `phno`, `sms`,`date`) VALUES ('$id','$ph','$n','$today')";
if($exec=mysqli_query($conn,$query)){
  echo "success";
}
else {
  echo "failed";
}
?>
