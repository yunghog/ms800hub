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
        <!-- DataTable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>
        <!-- lightbox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />
      </head>
    	<body class="bg-image">
        <?php include 'header.php'; ?>
        <br>
        <div class="content" id="fade">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h1 class="big-text">Gallery Panel</h1>
                <h3 class="tag">Welcome Admin : <?php echo $username; ?></h3>
              </div>
              <div class="col-md-2">
                <!-- <a href="#post_form" class="btn btn-primary">Upload</a> -->
                <button type="button" data-toggle="modal" class="btn btn-primary" data-target="#exampleModal" name="button">fafa</button>
              </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
              <?php
              if($_SESSION['role']==2){
                $gal_query2="SELECT a.*, b.username from gallery a, users b where b.id='$user_id' and a.author_id='$user_id' and a.active=1";
              }
              if($_SESSION['role']==1){
                $gal_query2="SELECT a.*, b.username from gallery a, users b where a.active=1 and a.author_id=b.id order by a.author_id";
              }
              $gal_exec2=mysqli_query($conn,$gal_query2);
              while($gal_rows2=mysqli_fetch_array($gal_exec2)){
                ?>
                <div class="col-md-3">
                  <div class="thumbnail gallery-img-con">
                    <a href="../assets/img/gallery/<?php echo $gal_rows2["image"]; ?>" data-toggle="lightbox" data-gallery="example-gallery">
                      <img src="../assets/img/gallery/<?php echo $gal_rows2["image"]; ?>" class="img-fluid">
                      <div class="thumbnail-overlay">
                        <p class="para-more"><?php echo $gal_rows2['caption']; ?></p>
                      </div>
                    </a>
                  </div>
                </div>
                <?php
              }
               ?>
            </div>
          </div>
          <br>
          <div class="container" id="post_form">
            <div class="row">
              <div class="col-md-12">
                <h3 class="tag">Post a Gallery Image</h3>
              </div>
            </div>
              <br>
              <div class="row" >
                <div class="col-md-12">
                  <form class="form-control2" action="../assets/php/gallery_post.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-12">
                        <input type="file" name="image" value="" placeholder="Select Image">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-12">
                        <textarea name="caption" rows="3"  placeholder="Caption!!!"></textarea>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-9">
                        <input type="text" name="tag" value="" placeholder="tag">
                      </div>
                      <div class="col-3 text-center">
                        <button type="submit" name="post_gallery" class="btn btn-primary">Post</button>
                      </div>
                    </div>
                    <br>
                  </form>
                </div>
              </div>
          </div>
        </div>
        <br>
          <div class="container">
            <div class="row">
              <div class="col-md-12 table-column text-primary">
                <table class="table table-dark " id="gallery-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Caption</th>
                      <th>Author</th>
                      <th>Date</th>
                      <th>Tag</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if($_SESSION['role']==2){
                      $gal_query="SELECT a.*, b.username from gallery a, users b where b.id='$user_id' and a.author_id='$user_id' and a.active=1";
                    }
                    if($_SESSION['role']==1){
                      $gal_query="SELECT a.*, b.username from gallery a, users b where a.active=1 and a.author_id=b.id order by a.author_id";
                    }
                    $i=1;
                    $gal_exec=mysqli_query($conn,$gal_query);
                    // echo $gal_query;
                    while($gal_rows=mysqli_fetch_array($gal_exec)){
                      ?>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $gal_rows['image']; ?></td>
                        <td><?php echo $gal_rows['caption']; ?></td>
                        <td><?php echo $gal_rows['username']; ?></td>
                        <td><?php echo $gal_rows['date']; ?></td>
                        <td><?php echo $gal_rows['tag']; ?></td>
                        <td>
                        <form class="" action="../assets/php/gallery_delete.php" method="post">
                          <input type="hidden" name="gallery_id" value="<?php echo $gal_rows['id']; ?>">
                          <button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                        </form>
                        </td>
                      </tr>
                      <?php
                      $i++;
                    }
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <br><br>
        <!-- Modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row" >
                  <div class="col-md-12">
                    <form class="form-control2" action="../assets/php/gallery_post.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-12">
                          <input type="file" name="image" value="" placeholder="Select Image">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-12">
                          <textarea name="caption" rows="3"  placeholder="Caption!!!"></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-9">
                          <input type="text" name="tag" value="" placeholder="tag">
                        </div>
                        <div class="col-3 text-center">
                          <button type="submit" name="post_gallery" class="btn btn-primary">Post</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <?php include 'footer.php'; ?>
        <script type="text/javascript">
          document.getElementById('index').classList.add('active2');
          // document.getElementById('foo').style.position="static";
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
    $('table').DataTable( {
        "responsive":   true,
    } );
} );
        </script>
        <script type="text/javascript">
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
              event.preventDefault();
              $(this).ekkoLightbox();
          });
        </script>
        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
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
