<?php
include('db_connect.php');
$username=$_GET['un'];
$query="SELECT a.id,a.username,b.rolename,b.quota from user a,role b where a.username='$username' and a.active=1 and a.role=b.id";
$exec=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($exec)){
  $username=$row["username"];
  $role=$row["rolename"];
  $quota=$row["quota"];
  $id=$row["id"];
}
  class user {
    public $uid="";
    public $uname ="";
    public $urole ="";
    public $uquota ="";
  }
  $u=new user();
  $u->uid=$id;
  $u->uname=$username;
  $u->urole=$role;
  $u->uquota=$quota;
  ?>
  <div id="result">
    <?php echo json_encode($u); ?>
  </div>
  <?php
?>

