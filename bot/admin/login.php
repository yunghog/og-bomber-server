<?php
session_start();
if(isset($_SESSION['user_id'])){
  echo "<script>alert('Invalid Passcode');
    window.location='index.php';</script>";
}
else{
  ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@keaton_bot | login</title>
      <meta name="author" content="Samartha">
      <meta name="description" content="spam message service byb Samartha">
      <link rel="icon" href="../images/favicon.png" sizes="16x16">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <br><br><br><br><br>
      <section class="full-section fade-up-anim">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="form-con">
                <form class="login-form" action="../php/login.php" method="post">
                  <div class="row">
                  <div class="col-md-12 text-center">
                      <p class="color2"> Enter Passcode</p>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 text-right">
                      <i class="fa fa-lock"></i>
                    </div>
                  <div class="col-md-7 text-center">
                    <input type="password" name="password" value="" required>
                  </div>
                  <div class="col-md-2 text-left">
                    <button type="submit" class="btn btn-sec" name="submit">GET IN</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  <br>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="../js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
  </html>
  <?php
}
 ?>
