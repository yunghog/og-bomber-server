<?php
session_start();
if(isset($_SESSION['user_id'])){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@keaton_bot | Admin</title>
    <meta name="author" content="Samartha">
    <meta name="description" content="spam message service byb Samartha">
    <link rel="icon" href="../images/favicon.png" sizes="16x16">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <br>
    <br>
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
      document.getElementById('index').classList.add('active2');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}
else{
  echo "<script>alert('Please Login');
    window.location='login.php';</script>";
}
 ?>
