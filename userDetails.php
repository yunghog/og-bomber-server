 <?php
include('db_connect.php');
$username=$_GET['un'];
$query="SELECT a.id,a.username,b.role,b.quota from user a,role b where a.username='$username' and a.active=1 and a.role=b.id";
$exec=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($exec)){
  $username=$row["username"];
  $role=$row["role"];
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
  echo json_encode($u);
?>
                                                                                                                                                                                                                                                                                                                        
