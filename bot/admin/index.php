<?php
if(isset($_SESSION['user'])){
  if ($_SESSION['user']=="12345") {
    ?>
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@keaton_bot</title>
        <meta name="author" content="Samartha">
        <meta name="description" content="spam message service byb Samartha">
        <link rel="icon" href="../images/favicon.png" sizes="16x16">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
      </head>
      <body>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>
    </html>
    <?php
  }
  echo "<script>alert('Invalid Passcode');
    window.location='login.php';</script>";
}
else{
  echo "<script>alert('Please Login');
    window.location='login.php';</script>";
}
 ?>
