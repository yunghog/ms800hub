<?php  ?>

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
  <!-- fonticons -->
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
    <section  id="hero" class="full-page-section bg-image"  data-aos="fade">
      <div class="container hero-con">
        <div class="row" data-aos="fade-right">
          <div class="col-md-12">
            <h1 class="big-text">Sign up</h1>
            <h4 class="tag">Join the community</h4>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="cardy bg-image cell-left" data-aos="zoom-out">
              <h3 class="heading">Join the MS800Hub Family</h1>
              <p>All kind of builds, any make and any models are appreciated in the community.
              Hatch, sedan, classic, sports, old & rusty, van, suv... we appreciate all builds</p>
              <hr>
              <h3 class="heading">No limit. No rules</h3>
            </div>
          </div>
          <div class="col-md-6">
            <form class="form-dark-con cardy cell-right login-form " action="assets/php/signup.php" method="post" data-aos="fade-up">
              <h3 class="heading text-center text-primary">Sign up</h1>
              <div class="form-row">
                <div class="form-group col-md-7">
                  <label>Name : </label>
                  <input class="form-dark" type="text" name="name" value="" required>
                </div>
                <div class="form-group col-md-5">
                  <label>Username : </label>
                  <input class="form-dark" type="text" name="username" value="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Plate No. : </label>
                  <input class="form-dark" type="text" name="veh_id" value="" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Model : </label>
                  <input class="form-dark" type="text" name="model" value="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Email : </label>
                  <input class="form-dark" type="text" name="email" value="" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Ph.No. : </label>
                  <input class="form-dark" type="text" name="phone" value="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Place : </label>
                  <input class="form-dark" type="text" name="place" value="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Create Password : </label>
                  <input id="password" class="form-dark" type="password" name="password" value="" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Re-enter Password : </label>
                  <input id="password2" class="form-dark" type="password" name="password_re" value="" required>
                  <i class="fa fa-eye password-btn" onclick="toggle_password()"></i>
                </div>
              </div>
              <div class="form-group">
                <div class="col-12 text-center">
                  <button type="submit" name="signup" class="btn btn-primary btn-block"> Sign Up</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'footer.php'; ?>
  <script type="text/javascript">
    document.getElementById('signup').classList.add('active2');
  </script>
  <script type="text/javascript">
  function toggle_password() {
    var password=document.getElementById("password");
    var password2=document.getElementById("password2");
    if (password.type==='password') {
      password.type='text';
    }
    else{
      password.type='password';
    }
    if(password2.type==='password') {
      password2.type='text';
    }
    else{
      password2.type='password';
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
  <script>
    AOS.init({
      once: true,
      duration: 1000,
  });
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
