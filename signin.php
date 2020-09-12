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
    <!-- fonticon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
	<body>
  <?php include 'header.php'; ?>
  <div class="content">
    <section class="bg-image login-form-container" data-aos="fade">
      <div class="container">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-4">
            <div class=" cardy bg-image bg-image-blur"></div>
            <div class="cardy cardy-absolute" data-aos="zoom-out" data-aos-delay="600">
              <img src="assets/img/logo.png" alt="" width="100%"  data-aos="zoom-out" data-aos-delay="900">
              <h5 class="heading text-primary text-center"   data-aos="fade-up" data-aos-delay="1000" >SIGN IN</h5>
              <br>
                <form class="form-dark-con login-form" action="assets/php/signin.php" method="post"   data-aos="fade-up" data-aos-delay="1300">
                  <div class="form-row">
                    <div class="form-group col-1 text-left"><i class="fa fa-user"></i></div>
                    <div class="form-group col-11">
                      <label>Name : </label>
                      <input class="form-dark" type="text" name="username" value="" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-1 text-left">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="form-group col-11">
                      <label>Password : </label>
                      <input id="password" class="form-dark" type="password" name="password" value="" required>
                      <i class="fa fa-eye password-btn" onclick="toggle_password()"></i>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-12 text-center">
                      <button type="submit" name="signin" class="btn btn-primary btn-block"> Sign in</button>
                      <a class="btn btn-outline-primary btn-block" href="signup.php"> Sign Up</a>
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
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
    <script type="text/javascript">
     $('.form-dark').on('focusin', function() {
     $(this).parent().find('label').addClass('active-label');});
     $('.form-dark').on('focusout', function() {
      if (!this.value) {
      $(this).parent().find('label').removeClass('active-label');}});
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript">
     $('.form-dark').on('focusin', function() {
     $(this).parent().find('label').addClass('active-label');});
     $('.form-dark').on('focusout', function() {
      if (!this.value) {
      $(this).parent().find('label').removeClass('active-label');}});
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
          once: true,
          duration: 2000,
      });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
