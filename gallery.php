<?php
include 'assets/php/db_connect.php';
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
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  </head>
	<body background="assets/img/bg.jpg">
    <?php include 'header.php'; ?>
<br>
  <div class="content">
        <section class="full-section"  id="fade">
          <div class="container">
            <div class="row" >
              <div class="col-md-12 text-center">
                <h1 class="big-text">Gallery</h1>
                <h2 class="tag">Showcase of our culture</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="full-section"  id="fade">
          <div class="container">
            <div class="row gallery no-gutters">
              <?php
              $gal_query="SELECT a.*, b.* from gallery a, users b where a.active=1 and a.author_id=b.id order by a.date";
              // echo $gal_query;
              $gal_exec=mysqli_query($conn,$gal_query);
              while($gal_rows=mysqli_fetch_array($gal_exec)){
                $args=$gal_rows['image'].'%'.$gal_rows['username'].'%'.$gal_rows['caption'].'%'.$gal_rows['date'].'%'.$gal_rows['tag'];
                // echo $args;
                ?>
              <div class="col-md-3 bg-black align-items-center">
                  <div class="thumbnail" onclick="openGalleryModel('<?php echo $args; ?>')">
                      <img src="assets/img/gallery/<?php echo $gal_rows['image'];?>" >
                      <div class="thumbnail-overlay">
                        <p class="para-more"><?php echo $gal_rows['caption']; ?></p>
                      </div>
                  </div>
              </div><?php } ?>
            </div>
          </div>
        </section>
        <section class="overlay-model full-section" id="overlay-model" >
          <div class="container-fluid">
            <i class="fa fa-close closebtn2" onclick="closeGalleryModel()"></i>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4 no-margin">
                <div class="card bg-black" id="<?php echo $gal_rows['image'] ?>">
                  <img id="image" src="" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" id="caption"></h5>
                    <!-- <p class="card-text">20yo developer and music producer based in Sagar. Passionate about cars. Highly influenced by Dad's car workshop 'Aditya Automobiles'.</p> -->
                    <p class="card-text"><small class="text-muted" id="author"></small> | <small class="text-muted text-primary" id="tag"></small></p>
                  </div>
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
      document.getElementById('gallery').classList.add('active2');
      // document.getElementById('foo').style.position="static";
    </script>
    <script type="text/javascript">
      function openGalleryModel(args) {
        document.getElementById('overlay-model').style.display='block';
        args=args.split('%');
        image_src="assets/img/gallery/"+args[0];
        document.getElementById('image').setAttribute("src",image_src);
        document.getElementById('caption').innerHTML=args[2];
        document.getElementById('author').innerHTML="by "+args[1]+"  "+args[3].split('-')[1]+'/'+args[3].split('-')[2];
        document.getElementById('tag').innerHTML="<a style='font-size:12px;' href='https://instagram.com/"+args[4]+"' target='_blank'>"+args[4]+"</a>";
          // document.getElementById('caption').innerHTML=args[0];
          document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      function closeGalleryModel() {
        document.getElementById('overlay-model').style.display='none';
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
