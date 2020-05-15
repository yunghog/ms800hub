<?php
include 'assets/php/db_connect.php';
session_start();

if($_SESSION['role']==1 || $_SESSION['role']==2){
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
    <!-- data tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Club MS8</title>
  </head>
	<body background="assets/img/bg.jpg">
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
            <br>
            [<?php echo $username; ?>]
            <br>
            <button class='btn-site logout_button' onclick='logout()'>Logout</button>
          </div>
        </div>
        </div>
      </div>
		</header>
<br>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2 class="tag">Create-Blog</h2>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-12">
          <div class="blog-form-con">
            <form class="reg-form" enctype="multipart/form-data" action="assets/php/post-blog.php" method="post">
              <span class="form-label">Title</span><br>
              <input type="text" name="title" value="" placeholder="blog title"><br>
              <span class="form-label">Paragraph</span><br>
              <textarea name="para" placeholder="blog body"></textarea><br>
              <span class="form-label">Image</span><br>
              <input class="btn-site" type="file" name="bimg" value=""><br><br>
              <button type="submit" style="width:90px;" class="btn-site" name="insert">POST</button>
            </form>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-12">
          <h2 class="tag">Posts</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="newTable">
              <table id="myTable" class="table table-striped table-bordered table-dark" >
                <thead>
                  <tr>
                    <th class="table_fonts">Id</th>
                    <th class="table_fonts">Title</th>
                    <th class="table_fonts">Date</th>
                    <th class="table_fonts">Author</th>
                      <th class="table_fonts">Image Dir</th>
                    <th class="table_fonts">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=1;
                  $query = "SELECT a.*,b.name FROM blog a,users b where a.active=1 and b.id=a.user_id";
                  $exe = mysqli_query($conn,$query);
                  while($row = mysqli_fetch_array($exe))
                  {
                    ?>
                    <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td><?php echo $row['title']; ?></td>
                      <td><?php echo $row['tdate']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['image']; ?></td>
                      <td>
                        <form class="" method="post" action="assets/php/delete-post.php">
                        <input type="hidden" name="post_id" value="<?php echo $row['id']; ?>">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                      </form>
                      </td>
                    </tr>
                      <?php
                    }
                    ?>
                  </tbody>

              </table>
            </div>
        </div>
        <div class="col-2"></div>
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

    $(document).ready(function(){
      $('#myTable').dataTable( {responsive: true} );
    });
  </script>
<?php
}
else{
  echo "<script>window.location.href='login.php';</script>
  ";
}
?>
</html>
