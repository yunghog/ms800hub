<header>
  <div class="menu-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2 text-center">
          <button class="btn" type="button" name="side-menu" onclick="openNav()">
         <i class="fa fa-bars"></i></button>
         <div id="mySidenav" class="sidenav text-left">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           <a href="index.php" id="index">Home</a>
           <a href="gallery.php" id="gallery">Gallery</a>
           <!-- <a><div class="dropdown">
                <a  id="faculty" href="#">Faculty     <i class="fa fa-chevron-down"></i></a>
                <div class="dropdown-content2">
                  <a id="teaching_faculty"  href="#">Teaching Faculty</a>
                  <a id="guest_faculty" href="#">Guest Faculty</a>
                </div>
              </div>
          </a> -->
           <a href="blog.php" id="blog">Blog</a>
           <a href="user_control.php" id="user_control">User-Control</a>
           <a href="../" id="site">Site</a>
           <a href="../community" id="Community">Community</a>
           <a><div class="dropdown">
                <a href="" id="profile">Profile  <i class="fa fa-chevron-down"></i></a>
                <div class="dropdown-content2">
                  <a><input class="form-control2-i" type="text" name="un" value="" id="un" width="180px" placeholder="Username">  </a>
                  <a><button type="button" name="search" onclick="openProfile()" class="btn btn-outline-primary no-margin"><i class="fa fa-search"></i> </button> </a>
                </div>
              </div>
          </a>
         </div>
        </div>
        <div class="col-8 text-center">
          <img src="../assets/img/logo.png" height="45px" alt="">
        </div>
        <div class="col-2 text-center">
          <div class="user-details">
            <i class="fa fa-user"></i>
            <div class="user-popup">
              <p class="para-more">
                <?php echo $name; ?><br>
                <?php echo $username; ?>
                <form class="" action="../assets/php/signout.php" method="post">
                  <button type="submit" name="signout" class="btn btn-primary">Logout</button>
                </form>
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-1">

        </div> -->
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
<script type="text/javascript">
  function openProfile() {
    var username = document.getElementById('un').value;
    var link="../community/profile.php?un="+username;
    window.location.href=link;
  }
</script>
