 <?php
include('db_connect.php');
$user_id=$_GET['id'];
$today=date('Y-m-d');
$query="SELECT sum(sms) FROM `bombs` WHERE user_id='$user_id' and date='$today' ";
$exec=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($exec)){
  $daily_quota=$row["sum(sms)"];
}
?>
<div class="result">
  <?php echo $daily_quota; ?>
</div>
<?php
?>
                                                                                                                                                                                                                                                                                                                        
