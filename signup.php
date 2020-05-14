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

    <!-- form css -->

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
      <li class="nav-item">
        <a class="nav-link" href="blog.php">BLOG</a>
      </li>
			<li class="nav-item active">
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

      <h1 class="big-text">REGISTER</h1>
      <br><br>
      <h2 class="tag">SIGNUP AND JOIN THE COMMUNITY</h2>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4">
        <div class="reg-box" style="position:absolute;background-color:rgb(0,0,0,.8);padding:20px;background-image:url(https://i.pinimg.com/originals/51/eb/ee/51ebee38582620782fc423e9f13c289d.jpg);background-size:contain;">
          <span class="tag" style="color:#00e4ff">TERMS AND CONDITIONS</span>
          <ul class="list">
            <li>Should own a MS 800</li>
            <li>Member should belong to sagar or any other near village</li>
            <li>All kinds of build are appreciated</li>
            <li>Members should follow traffic rules at anycost</li>
            <li>Always follow the leader</li>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          </ul>
        </div>
        <div class="reg-box">
          <br><br><br><br><br><br><br><br><br><br><br>

          <!-- <img width="100%" src="https://i.pinimg.com/originals/51/eb/ee/51ebee38582620782fc423e9f13c289d.jpg" alt=""> -->
        </div>
    </div>
    <div class="col-sm-4">
      <div class="reg-box">
      <form class="reg-form" action="assets/php/signup.php" method="post">
        <span class="form-label">Owner Name :</span><br>
        <input type="text" name="name" value="" placeholder="name" required>
        <span class="form-label">Username :</span><br>
        <input type="text" name="uname" value="" placeholder="username" required>
        <br><span class="form-label">Create Password :</span><br>
        <input type="password" name="pwd" value="" placeholder="password" required>
        <br><span class="form-label">Phone :</span><br>
        <input type="text" name="ph" value="" placeholder="ph.no" required>
        <br><span class="form-label">Place :</span><br>
        <input type="text" name="place" value="" placeholder="place" required>
        <br><span class="form-label">Model :</span><br>
        <input type="text" name="model" value="" placeholder="ac/dx" required>
        <br><span class="form-label">Plate Num :</span><br>
        <input type="text" name="id" value="" placeholder="plate.no" required>
        <br><span class="form-label">E-mail :</span><br>
        <input type="text" name="mail" value="" placeholder="email id" required>
        <br><span class="form-label">Description :</span><br>
        <textarea type="text" name="desc1" value="" placeholder="Description" required></textarea>
        <br>
        <button class="btn-site" style="width:90%;" type="submit" name="Submit" value="SignUp">SIGNUP</button>
      </form>
    </div>
  </div>
    </div>
  </div>
</div>
<br><br>
    <div class="footer">
      <p>© 2020 Copyright: ms800hub.rf.gd | by <a href="https://www.instagram.com/samartha__">Samartha</p></a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>