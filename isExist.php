 <?php
include('db_connect.php');
$username=$_GET['un'];
$query="SELECT count(*) from user where username='$username' and active=1";
$exec=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($exec)){
  $count=$row["count(*)"];
}
if($count>0){
?>
  <div id="result">
    true
  </div>
<?php
}
else{
  ?>
  <div id="result">
    false
  </div>
  <?php
}

?>
                                                                                                                                                                                                                                                                                                                        
