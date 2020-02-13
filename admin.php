<?php
include 'assets/php/db_connect.php';
session_start();

if($_SESSION['role']==1 || $_SESSION['role']==2)
{
  $id=$_SESSION['user_id'];
  $query="SELECT * from  users where id=$id";
  $exec=mysqli_query($conn,$query);
  while($result=mysqli_fetch_array($exec)){
    $username=$result['username'];
    $name=$result['name'];
  }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Club MS8</title>
  </head>
	<body background="assets/img/bg.jpg">
    <?php
    $query_b = "SELECT * from  blog where active=1";
    $exec_b = mysqli_query($conn,$query_b);
    $rows_b = mysqli_num_rows($exec_b);
    $query_g = "SELECT * from  gallery where active=1";
    $exec_g = mysqli_query($conn,$query_g);
    $rows_g = mysqli_num_rows($exec_g);
     ?>
    <header class="container-fluid header-admin">
			<div class="row">
        <div class="col-3">
          <i class="fa fa-arrow-left" onclick="go_back()" title="Back" style="color: #00e4ff;font-size: 30px;cursor: pointer;"></i>
        </div>
        <div class="col-6">
          <img class="logo" src="assets/img/logo.png" alt="">
        </div>
        <div class="col-3">
        <div class='user_icon'><a><i class='fa fa-user '></i></a>
          <div class='user_info' id='user_info'>
            <?php echo $name; ?>

            [<?php echo $username; ?>]
            <br>
            <button class='btn-site logout_button' style="width:90px;"onclick='logout()'>Logout</button>
          </div>
        </div>
        </div>
      </div>
		</header>
<br><br>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <a href="create-blog.php"><div class="card " style="border:3px solid #00e4ff; background-color:black;border-radius:20px;" >
            <div class="card-body" style="">
              <h5 class="card-title para">BLOGS</h5><i class="fa fa-blog"></i>
              <p class="card-text"><span class="para">Blogs count : <?php echo $rows_b; ?></span></p>
            </div>
          </div></a>
      </div>
      <div class="col-sm-4">
        <a href="create-gallery.php"><div class="card " style="border:3px solid #00e4ff; background-color:black;border-radius:20px;" >
          <div class="card-body" style="">
            <h5 class="card-title para">GALLERY</h5><i class="fa fa-blog"></i>
            <p class="card-text"><span class="para">Gallery images count : <?php echo $rows_g; ?></span></p>
          </div>
        </div></a>
    </div>
    <div class="col-sm-4">

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
  <script type="text/javascript">
    function logout() {
      window.location.href = 'assets/php/logout.php';
    }
    function go_back() {
        window.location.href = 'admin.php';
    }


  </script>
<?php
}
else{
  echo "<script>window.location.href='login.php';</script>
  ";
}
?>
</html>
