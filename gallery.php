<?php
include 'assets/php/db_connect.php';

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

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item ">
        <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.html">EVENTS</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="#">GALLERY</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="blog.php">BLOG</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="register.html">REGISTER</a>
      </li>
			<!-- <li class="nav-item">
        <a class="nav-link" href="about">ABOUT</a>
      </li> -->
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ABOUT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#353a40;">
        <a class="nav-link" href="aboutus.html">ABOUT US</a>
        <a class="nav-link" href="team.html">TEAM</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <!-- <li class="nav-item dropdown">
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
      </li> -->
    </ul>

  </div>
</nav>
		</header>
<br>
  <div class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <h1 class="big-text">GALLERY</h1>
        <br>
        <h2 class="tag">Little showcase of our culture</h2>
      </div>
      </div>
      <br>
      <!-- <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <div class="blog-card">
          <div class="blog-image">
            <img src="assets/img/blogimg/1.jpg" alt="">
          </div>
          <div class="blog-content">
            <h2>TITLE</h2>
            <p>Hello sir, first of all thank you for this script.
               I loved all your videos. Great videos i ever saw, clean explanation of the code..
                Looking for some some stuffs like this.. My question here is, once i upload images using above scripts,
                 only the half portion of the images are displayed, Why so?? Thank you</p>
          <a href="#"><h4>Author</h4></a>
            <p>12-01-20</p>
          </div>
        </div>
        </div>
        <div class="col-sm-2"></div>
      </div> -->
        <!-- <?php
        $query="SELECT a.*,b.name from blog a,admin b where a.active=1 and a.user_id=b.id";
        $exec=mysqli_query($conn,$query);
        while($result=mysqli_fetch_array($exec)){
          $title=$result['title'];
          $para=$result['para'];
          $user=$result['name'];
          $img=$result['image'];
          $date=$result['tdate'];
          ?>
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <div class="blog-card">
              <div class="blog-image">
                <img src="<?php echo $img; ?>" alt="Club MS8 Sagar">
              </div>
              <div class="blog-content">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $para; ?></p>
              <a href="#"><h4><?php echo $user; ?></h4></a>
                <p><?php echo $date; ?></p>
              </div>
            </div>
            </div>
            <div class="col-sm-2"></div>
          </div>
          <br>
      <?php  }
        ?> -->


      </div>
    </div>
      <br><br>
      <footer>
    <div class="footer">
      <p>© 2020 Copyright: ms800hub.rf.gd | by <a href="https://www.instagram.com/samartha__">Samartha</p></a>
    </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
