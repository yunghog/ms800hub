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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
	<body background="assets/img/bg.jpg">
    <?php include 'header.php'; ?>
<br>
<section class="full-section"  id="fade">
  <div class="container" id="blog_thumb_cont">
    <div class="row">
      <div class="col-md-12">
        <h1 class="big-text">EVENTS</h1>
        <h2 class="tag">Upcoming events</h2>
      </div>
    </div>
    <div class="row">
      <?php
      $gal_query="SELECT a.*, b.name, b.username from blog a, users b where a.active=1 and a.author_id=b.id order by a.date";
      // echo $gal_query;
      $gal_exec=mysqli_query($conn,$gal_query);
      while($gal_rows=mysqli_fetch_array($gal_exec)){
        //$args=$gal_rows['image'].'%'.$gal_rows['username'].'%'.$gal_rows['caption'].'%'.$gal_rows['date'].'%'.$gal_rows['tag'];
        // echo $args;
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

<br>
  <div class="content">
        <section class="full-section"  id="fade">
          <div class="container">
            <div class="row" >
              <div class="col-md-12">
                <!-- <h1 class="big-text">Events</h1> -->
                <h2 class="tag">Clutch, Shift and Accelerate</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p class="para-more">
                  Activities of the CLUB MS8 Sagar includes car meets,
                  road trips, hunt (hunting for the unique rides in the
                  city).
                </p>
                <p class="para-more">
                  In the town of Sagar. All the events of the Club is
                  carried out in presense of SAMNSADY. As the Club is
                  at initial stage we have very few members. We are
                  trying to reach more and more people through irl and
                  social media. Till date we have not cunducted any meet.
                   We hope our community will grow more!
                </p>
              </div>
              <div class="col-md-4 no-margin" >
                <img src="assets/img/sponser1.jpg" alt="" width="100%">
              </div>
            </div>
          </div>
        </section>

        <br>
        <section class="full-section"  id="fade">
          <div class="container">
            <div class="row" >
              <div class="col-md-12">
                <h2 class="tag">Events by CLUB MS8 Kerala</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="card bg-black">
                <iframe height="300px" src="https://www.youtube.com/embed/CrmutHczGSU" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <h5 class="card-title para">Celebration</h5>
                      <p class="card-text"><span class="para">Club MS8 50k insta Family celebration
                      </span></p>
                    </div>
                    <div class="col-2">
                      <a href="https://www.youtube.com/watch?v=pDT6yYm4-OI&t=2s"  target="_blank"><button class="btn btn-primary">More</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card bg-black">
              <iframe height="300px;" src="https://www.youtube.com/embed/pDT6yYm4-OI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-9">
                    <h5 class="card-title para">Thrisur meet 2019</h5>
                    <p class="card-text"><span class="para">MS8 Brotherhoood KL08 Thrisur,Kerala
                    </span></p>
                  </div>
                  <div class="col-2">
                    <a href="https://www.youtube.com/watch?v=pDT6yYm4-OI&amp;t=2s" target="_blank" ><button class="btn btn-primary">More</button></a>
                  </div>
                </div>
              </div>
            </div>

            </div>
            </div>
          </div>
        </section>
      </div>
      <br>
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
        document.getElementById('events').classList.add('active2');
      document.getElementById('foo').style.position="static";
    </script>
    <script type="text/javascript">
    function openBlog(id) {
    document.getElementById('blog_thumb_cont').style.display="none";
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
