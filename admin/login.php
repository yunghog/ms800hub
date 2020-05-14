<?php
include 'assets/php/db_connect.php';
session_start();
if(isset($_SESSION['role'])){
if($_SESSION['role']==1 || $_SESSION['role']==2)
{
  echo "<script>location.href='admin.php'</script>";
}
elseif($_SESSION['role']==3){
  echo "<script>location.href='user-profile.php'</script>";
}
}
else{
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Club MS8</title>
  </head>
	<body background="assets/img/bg.jpg">
    <header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#"><img class="logo" src="assets/img/logo.png" alt="">		</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.html">EVENTS</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="#">GALLERY</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="register.html">REGISTER</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="about">ABOUT</a>
      </li>
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ABOUT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#353a40;">
        <a class="nav-link" href="aboutus">ABOUT US</a>
        <a class="nav-link" href="about">TEAM</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" >Disabled</a>
      </li>
    </ul>

  </div> -->
</nav>
		</header>
<br><br><br><br><br>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <div class="login-card">
            <div class="row">
              <div class="col-12">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="login-box">

                <form class="login-form" action="assets/php/signin.php" method="post">
                  <h2 class="tag" style="text-align:center;font-size:28px;">LOGIN</h2><br>
                  <span class="form-label">Username</span><br>
                  <input type="text" name="uname" value="" placeholder="username"><br>
                  <span class="form-label">Password</span><br>
                  <input type="password" name="password" value="" placeholder="password"><br><br>
                  <button class="btn-site" style="width:50%;" type="submit" name="signin" value="SignIn">SIGN IN</button>
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
        </div>
      </div>
      <br><br>
    <div class="footer">
      <p>© 2020 Copyright: ms800hub.rf.gd | by Samartha</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php } ?>
