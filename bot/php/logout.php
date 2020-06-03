<?php
session_start();
if(isset($_SESSION['user_id']))
{
  session_destroy();
  echo "<script>alert('Logged out! ');location.href='../admin/login.php'</script>";
}
else
{
  echo "<script>location.href='../admin/'</script>";
}
?>
