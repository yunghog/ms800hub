<?php
session_start();
if(isset($_SESSION['user_id'])){
  if($_SESSION['role']==1){
    echo "<script> window.location = 'admin/';</script>";
  }
  if($_SESSION['role']==2){
    echo "<script> window.location = 'admin/';</script>";

  }
  if($_SESSION['role']==3){
    echo "<script> window.location = 'community/';</script>";

  }
}
?>
<script type="text/javascript">
  window.locaton.href=''
</script>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Club MS8</title>
    <link rel="icon" href="assets/img/favicon.png" sizes="16x16">
    <meta name="author" content="Samartha">
    <meta name="description" content="ClubMS8 is a group of auto-mototive enthusiast in the town of sagar. To be specific, we are the group of proud MS800 owners.">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
	<body background="assets/img/bg.jpg">
    <?php include 'header.php'; ?>
<br>
  <div class="content">
        <section class="full-section"  id="fade">
          <div class="container">
            <div class="row no-gutters ">
              <div class="col-md-4"></div>
              <div class="col-md-4 bg-black">
                <img src="assets/img/ms8i1.png" alt="" width="100%">
              </div>
            </div>
            <div class="row no-gutters text-center">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="signup-form">
                  <form class="form-control2" action="assets/php/signin.php" method="post">
                    <div class="row">
                      <div class="col-12">
                        <h5 class="tag text-primary text-center">SIGN-IN</h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2 text-right">
                        <i class="fa fa-user"></i>
                      </div>
                      <div class="col-8">
                        <input type="text" name="username" value="" required placeholder="Username">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-2 text-right">
                        <i class="fa fa-lock "></i>
                      </div>
                      <div class="col-8">
                        <input id="password" type="password" name="password" value="" required placeholder="Password">
                        <i class="fa fa-eye password-btn" onclick="toggle_password()"></i>
                      </div>
                    </div>
                    <br>
                    <div class="row" >
                      <div class="col-12 text-center">
                        <button type="submit" name="signin" class="btn btn-primary"> Sign in</button>
                      </div>
                    </div>
                    <br>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
      </div>
      <br>
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
      document.getElementById('signin').classList.add('active2');
    </script>
    <script type="text/javascript">
      function toggle_password() {
        var password=document.getElementById("password");
        if (password.type==='password') {
          password.type='text';
        }
        else{
          password.type='password';
        }
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>