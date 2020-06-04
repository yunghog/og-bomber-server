<?php
session_start();
include '../php/db_connect.php';
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
    <section class="full-section fade-up-anim">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="big-text">Admin Panel</h1>
            <h3 class="cap">Samartha</h3>
          </div>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <a href="#users-data" onclick="show_table('users-table')">
              <div class="btn-panel">
                <h3 class="cap"><i class="fa fa-user"></i> Users</h3>
                <?php
                $userc_query="SELECT count(*) from user where active=1";
                $execc=mysqli_query($conn,$userc_query);
                $rowc=mysqli_fetch_array($execc);
                // echo $rowc['count(*)'];
                 ?>
                 <p>Active Users : <?php echo $rowc['count(*)']; ?></p>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#bomb-data" onclick="show_table('bomb-table')">
              <div class="btn-panel">
                <h3 class="cap"><i class="fa fa-bomb"></i> bomb</h3>
                <?php
                $bombc_query="SELECT count(*) from bombs";
                $execbc=mysqli_query($conn,$userc_query);
                $rowbc=mysqli_fetch_array($execc);
                // echo $rowbc['count(*)'];
                 ?>
                 <p>Bombs : <?php echo $rowbc['count(*)']; ?></p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="big-text">data</h1>
              </div>
            </div>
            <div class="row" id="users-data">
              <div class="col-xs-10">
                <span class="cap">users</span>
              </div>
              <div class="col-xs-2 text-center">
                <button id="111" class="btn btn-transparent" onclick="show_table('users-table')"><i class="fa fa-chevron-down"></i></button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-con" id="users-table">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Sl.No</th>
                        <th>Name</th>
                        <th>Membership</th>
                        <th>OS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query="SELECT a.*,b.* from user a, role b where a.role=b.id and active=1";
                      // echo $query;
                      $exec=mysqli_query($conn,$query);
                      while($row=mysqli_fetch_array($exec)){
                        $i=1;
                        ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row['username']; ?></td>
                          <td><?php echo $row['rolename']; ?></td>
                          <td><?php echo $row['os']; ?></td>
                        </tr>
                        <?php
                      }
                       ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr class="tb">
            <div class="row" id="bomb-data">
              <div class="col-xs-10">
                <span class="cap">Bombs</span>
              </div>
              <div class="col-xs-2 text-center">
                <button id="111" class="btn btn-transparent" onclick="show_table('bomb-table')"><i class="fa fa-chevron-down"></i></button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-con" id="bomb-table">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Sl.No</th>
                        <th>Sender</th>
                        <th>Victim</th>
                        <th>Load</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query2="SELECT a.*,b.* from user a, bombs b where a.id=b.user_id";
                      // echo $query2;
                      $exec2=mysqli_query($conn,$query2);
                      while($row2=mysqli_fetch_array($exec2)){
                        $i=1;
                        ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row2['username']; ?></td>
                          <td><?php echo $row2['phno']; ?></td>
                          <td><?php echo $row2['sms']; ?></td>
                          <td><?php echo $row2['date']; ?></td>
                        </tr>
                        <?php
                      }
                       ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr class="tb">
          </div>
        </div>
      </div>
    </section>
    <br><br><br><br><br>
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
      document.getElementById('index').classList.add('active2');
    </script>
    <script type="text/javascript">
      function show_table(con) {
        var con=document.getElementById(con);
      if (con.style.height=="150px") {
        con.style.height="0px";
        con.style.overflowY="hidden";
        // event.srcElement.innerHTML="<i class=\"fa fa-chevron-down\"></i>";
      }
      else{
        con.style.height="150px";
        con.style.overflowY="scroll";
        // event.srcElement.innerHTML="<i class=\"fa fa-chevron-up\"></i>";
      }
      }
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
