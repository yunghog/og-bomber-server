<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
          <button class="btn btn-menu" type="button" name="side-menu" onclick="openNav()">
         <i class="fa fa-bars"></i></button>
         <div id="mySidenav" class="sidenav text-left">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           <a href="index.php" id="index">Home</a>
           <!-- <a><div class="dropdown">
                <a  id="faculty" href="#">Faculty     <i class="fa fa-chevron-down"></i></a>
                <div class="dropdown-content2">
                  <a id="teaching_faculty"  href="#">Teaching Faculty</a>
                  <a id="guest_faculty" href="#">Guest Faculty</a>
                </div>
              </div>
          </a> -->
        </div>
      </div>
      <div class="col-md-8 text-center">
        <img src="../images/logo.png" alt="" height="50px">
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
</header>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
