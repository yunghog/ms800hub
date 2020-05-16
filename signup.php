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
            <div class="row" >
              <div class="col-md-12">
                <h1 class="big-text">Sign up</h1>
                <h2 class="tag">Join the community</h2>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-md-6">
                <img src="assets/img/ms8form.jpg" width="100%" alt="">
              </div>
              <div class="col-md-6">
                <div class="signup-form">
                  <form class="form-control2" action="assets/php/signup.php" method="post">
                    <div class="row">
                      <div class="col-12">
                        <h5 class="tag text-primary text-center">SIGN-UP</h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <input type="text" name="name" value="" placeholder="Name" required>
                      </div>
                      <div class="col-5">
                        <input type="text" name="username" value="" placeholder="Username" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-5">
                        <input type="text" name="veh_id" value="" placeholder="Plate No." required>
                      </div>
                      <div class="col-7">
                        <input type="text" name="model" value="" placeholder="Model" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-12">
                        <input type="text" name="email" value="" placeholder="Email" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-12">
                        <input type="text" name="phno" placeholder="Phone No." required>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-12">
                        <input type="text" name="place" value="" placeholder="Place" required>
                      </div>
                    </div><br>
                    <!-- <div class="row">
                      <div class="col-4">
                        <button id="send_otp" type="button" class="btn btn-primary" onclick="send_otp_()">send otp</button>
                      </div>
                      <div class="col-4">
                        <input type="text" name="user_otp" value="" placeholder="Enter OTP">
                      </div>
                    </div>
                    <br> -->
                    <div class="row">
                      <div class="col-6">
                        <input id="password" type="password" name="password" value="" required placeholder="New Password">
                      </div>
                      <div class="col-6">
                        <input id="password2" type="password" name="password_re" value="" required placeholder="Re-enter Password">
                        <i class="fa fa-eye password-btn" onclick="toggle_password()"></i>
                      </div>
                    </div>
                    <br><br>
                    <div class="row text-center">
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">sign up</button>
                        <a href="signin.php"><button type="button" class="btn btn-outline-primary">sign in</button></a>
                      </div>
                    </div>
                    <br><br><br><br><br>
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
      document.getElementById('signup').classList.add('active2');
      document.getElementById('foo').style.position="static";
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
        if (password2.type==='password') {
          password2.type='text';
        }
        else{
          password2.type='password';
        }
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
