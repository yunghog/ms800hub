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
	<body>
    <div class="content">
    <?php include 'header.php'; ?>
    <section  id="hero" class="full-page-section bg-image"  data-aos="fade">
      <div class="container hero-con">
        <div class="row" data-aos="fade-right">
          <div class="col-md-12">
            <h1 class="big-text">EVENTS</h1>
            <h4 class="tag">Clutch, Shift and Accelerate</h4>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="cardy cell-left">
              <h3 class="heading">Events</h3>
              <p>Activities of the CLUB MS8 Sagar includes car meets, road trips, hunt (hunting for the unique rides in the city). </p>
              <p>In the town of Sagar. All the events of the Club is carried out in presense of SAMNSADY. As the Club is
              at initial stage we have very few members. We are trying to reach more and more people through irl and
              social media. Till date we have not cunducted any meet. We hope our community will grow more! </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cardy-img cell-right">
              <img src="assets/img/sponser1.jpg" alt="" width="100%">
            </div>
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
