<?php
include '../assets/php/db_connect.php';
session_start();
if (isset($_SESSION['user_id'])){
  if ($_SESSION['role']==3) {
    echo "<script> window.location = '../community';</script>";
  }
  if ($_SESSION['role']==1 || $_SESSION['role']==2 ){
    $user_id=$_SESSION['user_id'];
    $user_query="SELECT * from users where id='$user_id' and active=1";
    $user_exec=mysqli_query($conn,$user_query);
    while($user_rows=mysqli_fetch_array($user_exec)){
  $name=$user_rows['name'];
  $username=$user_rows['username'];
}
// echo $user_query;
    ?>
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Club MS8</title>
        <link rel="icon" href="../assets/img/favicon.png" sizes="16x16">
        <meta name="author" content="Samartha">
        <meta name="description" content="ClubMS8 is a group of auto-mototive enthusiast in the town of sagar. To be specific, we are the group of proud MS800 owners.">
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
      </head>
    	<body class="bg-image">
        <?php include 'header.php'; ?>
        <br>
        <div class="content" id="fade">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="big-text">Admin Panel</h1>
                <h3 class="tag">Welcome Admin : <?php echo $username; ?></h3>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <a href="gallery.php">
                  <div class="panel-card">
                    <h3>Gallery</h3>
                  </div>
                </a>
              </div>
              <div class="col-md-3" id="fade">
                <a href="blog.php">
                  <div class="panel-card">
                    <h3>Blog</h3>
                  </div>
                </a>
              </div>
              <?php
                if($_SESSION['role']==1){
                  ?>
                  <div class="col-md-3" >
                    <a href="user_control.php">
                      <div class="panel-card">
                        <h3>User Control</h3>
                        <p>No. of users : </p>
                      </div>
                    </a>
                  </div>
                  <?php
                }
               ?>
            </div>
          </div>
        </div>
        <?php include 'footer.php'; ?>
        <script type="text/javascript">
          document.getElementById('index').classList.add('active2');
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
    </html>
    <?php
  }
}
else {
  // echo $_SESSION['user_id'];
  // echo $_SESSION['role'];
  echo "<script>alert('Please Login');
   window.location = '../signin.php';</script>";
}
?>
