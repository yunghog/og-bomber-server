<?php
session_start();
$code='12345';
if(isset($_POST['submit'])){
  $password=$_POST['password'];
  if($password==$code){
    $_SESSION['user_id']=1;
    echo "<script>alert('Login Succcess');
      window.location='../admin/';</script>";
  }
  else {
    echo "<script>alert('Invalid Passcode');
      window.location='../admin/login.php';</script>";
  }
}
else {
  echo "<script>alert('Please Login');
    window.location='../admin/login.php';</script>";
}

 ?>
