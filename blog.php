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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  </head>
	<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=877989645977649&autoLogAppEvents=1"></script>
    <div class="content">
      <?php include 'header.php'; ?>
      <section  id="hero" class="full-page-section bg-image"  data-aos="fade">
        <div class="container hero-con">
          <div class="row" data-aos="fade-right">
            <div class="col-md-12">
              <h1 class="big-text">BLOG</h1>
              <h4 class="tag">If speed costs, how fast you wanna go?</h4>
            </div>
          </div>
        </div>
      </section>
      <br>
      <section>
        <div class="container" id="main-blog-con">
          <div class="row">
            <?php
            $main_query="SELECT a.*, b.name, b.username from blog a, users b where a.active=1 and a.author_id=b.id order by a.date limit 1";
            $main_exec=mysqli_query($conn,$main_query);
            while($main_rows=mysqli_fetch_array($main_exec)){
              ?>
              <div class="col-md-9">
                <div class="dark-card" data-aos="fade-right" data-aos-delay="300">
                  <div class="dark-card-img">
                    <img src="assets/img/blog/<?php echo $main_rows['image']; ?>" alt="ms800hub" height="100%">
                  </div>
                  <div class="dark-card-body">
                  <div class="row">
                    <div class="col-8">
                      <h5><?php echo $main_rows['title'];$main_blog_id=$main_rows["id"] ?></h5>
                      <p class="text-muted text-primary"><?php echo $main_rows['name']; ?></p>
                      <p> <?php echo $main_rows['date']; ?></p>
                    </div>
                    <div class="col-4 text-right">
                      <a href="blog.php?bid=<?php echo $main_rows["id"] ?>" class="btn btn-primary">more</a>
                    </div>
                  </div>
                  </div>
                </div>
              </div><?php } ?>
              <div class="col-md-3">
                <div class="row">
                  <?php
                  $main_query2="SELECT a.*, b.name, b.username from blog a, users b where a.id != '$main_blog_id' and a.active=1 and a.author_id=b.id order by a.date limit 2";
                  $main_exec2=mysqli_query($conn,$main_query2);
                  while($main_rows2=mysqli_fetch_array($main_exec2)){
                    ?>
                  <div class="col-md-12">
                    <div class="dark-card" data-aos="fade-right" data-aos-delay="300">
                      <div class="dark-card-img lim-h-150">
                        <img src="assets/img/blog/<?php echo $main_rows2['image']; ?>" alt="ms800hub" height="100%">
                      </div>
                      <div class="dark-card-body">
                      <div class="row">
                        <div class="col-8">
                          <h5><?php echo $main_rows2['title'];?></h5>
                        </div>
                        <div class="col-4 text-right">
                          <a href="blog.php?bid=<?php echo $main_rows2["id"] ?>" class="btn btn-primary">more</a>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div><?php } ?>
                </div>
              </div>
              <br>

            </div>
          </div>
        </section>
      <section>
        <div class="container" id="blog_thumb_cont">
          <div class="row">
            <?php
            $gal_query="SELECT a.*, b.name, b.username from blog a, users b where a.active=1 and a.author_id=b.id order by a.date";
            $gal_exec=mysqli_query($conn,$gal_query);
            while($gal_rows=mysqli_fetch_array($gal_exec)){
              ?>
              <div class="col-md-4">
                <div class="blog-thumb" onclick="openBlog('<?php echo $gal_rows['id'];?>')">
                  <div class="row no-gutters">
                    <div class="col-5">
                      <div class="blog-image">
                        <img src="assets/img/blog/<?php echo $gal_rows['image']; ?>" alt="" height="100%">
                      </div>
                    </div>
                    <div class="col-7">
                      <div class="blog-desc">
                        <h5><?php echo $gal_rows['title']; ?></h5>
                        <p>by <?php echo $gal_rows['name']; ?> <br> pc : <?php echo $gal_rows['tag']; ?><br> <?php echo $gal_rows['date']; ?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div><br> <?php } ?>

            </div>
          </div>
        </section>
        <?php
        if(isset($_GET['bid'])){
          $id=$_GET['bid'];
          $blog_query="SELECT a.*, b.name, b.username, b.name from blog a, users b where a.active=1 and a.author_id=b.id and a.id='$id'";
          $blog_exec=mysqli_query($conn,$blog_query);
          while ($blog_rows=mysqli_fetch_array($blog_exec)) {
            ?>
            <script type="text/javascript">
              document.getElementById('blog_thumb_cont').style.display="hidden";
            </script>
            <div class="container">
              <div class="blog-full">
                <div class="row no-gutters">
                  <div class="col-md-6">
                    <div class="blog-image-full" >
                      <button class="btn btn-primary back-button" type="button" name="back-button" onclick="goBackBlog()"> <i class="fa fa-arrow-left"></i></button>
                      <button class="btn btn-primary share-button" type="button" name="share-button" onclick="openShare()"> <i class="fa fa-share"></i></button>
                      <div class="share-panel" id="share-panel">
                        <i class="fa fa-facebook" onclick="share('facebook')"></i>
                        <i class="fa fa-whatsapp" onclick="share('whatsapp')"></i>
                        <i class="fa fa-link" onclick="share('link')"></i>
                      </div>
                      <div class="like-button">
                        <div class="fb-like" data-href="http://www.ms800hub.rf.gd/blog.php?bid=<?php echo $id ; ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
                      </div>
                      <img id="blog-image-full" src="assets/img/blog/<?php echo $blog_rows['image']; ?>" alt="" width="100%">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="blog-desc-full" id="blog-desc-full">
                      <div class="row">
                        <div class="col-12 text-right">
                          <h3><?php echo $blog_rows['title'] ?></h3>
                          <small class="text-primary">by <?php echo $blog_rows['name']; ?> | pc : <a target="_blank" href="https://instagram.com/<?php echo $blog_rows['tag']; ?>"><?php echo $blog_rows['tag']; ?></a> | <?php for ($i=5; $i <=9 ; $i++) {
                            echo $blog_rows['date'][$i];
                          } ?></small>
                          <br>
                          <p class="text-justify"><?php echo $blog_rows['body']; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
          }
          ?>
          <script type="text/javascript">
          document.getElementById('blog_thumb_cont').style.display="none";
          </script>

          <script type="text/javascript">
          if(screen.width>760){
            var img_height=document.getElementById('blog-image-full').height;
            // alert(img_height);
            document.getElementById('blog-desc-full').style.height=img_height+"px";
          }
          </script>
          <script type="text/javascript">
          function openShare(){
            var sharepanel=document.getElementById('share-panel');
            if(sharepanel.style.visibility=="visible"){
              sharepanel.style.height="0px";
              sharepanel.style.opacity="0";
              sharepanel.style.visibility="hidden";
            }
            else{
              sharepanel.style.visibility="visible";
              sharepanel.style.height="35px";
              sharepanel.style.opacity="1";
            }
          }
          function share(arg){
            // alert(window.location);
            link=window.location;
            if(arg=='facebook'){
              window.open('https://www.facebook.com/sharer/sharer.php?u=' + link, 'facebook-popup', 'height=350,width=600');
            }
            if(arg=='whatsapp'){
              link='https://api.whatsapp.com/send?text=%20' + link;
              window.open(link);
            }
            if(arg=='link'){
              var x=document.createElement('input');
              x.value=link;
              x.style.position = 'absolute';
              x.style.left = '-9999px';
              document.body.appendChild(x);
              x.select();
              document.execCommand('copy');
              document.body.removeChild(x);
              window.alert('link copied : '+ link);
              // window.prompt("Copy to clipboard: Ctrl+C, Enter", link);
            }
            openShare();
          }
          </script>
          <?php
        }
        ?>
        <br>
      </div>

      <br>

    <?php include 'footer.php'; ?>
    <script type="text/javascript">
      document.getElementById('blog').classList.add('active2');
      // document.getElementById('foo').style.position="static";
    </script>
    <script type="text/javascript">
      function openBlog(id) {
        // document.getElementById('blog_thumb_cont').style.display="none";
        link= "blog.php?bid="+id;
        window.location.href=link;
      }
      function goBackBlog(){
        window.location.href="blog.php";
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
