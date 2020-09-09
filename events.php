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
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
          <div class="col-md-7">
            <div class="cardy cell-left"  data-aos="fade-right">
              <h3 class="heading">Events</h3>
              <p>Activities of the CLUB MS8 Sagar includes car meets, road trips, hunt (hunting for the unique rides in the city). </p>
              <p>As the Club is at initial stage we have very few members. We are trying to reach more and more people through irl and
              social media. Till date we have not cunducted any big crew meetups. We hope our community will grow more! </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="cardy-img cell-right"  data-aos="fade-right">
              <img src="assets/img/sponser1.jpg" alt="" width="100%">
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <section>
      <div class="container">
        <div class="row"  data-aos="fade-up">
          <div class="col-md-12">
            <h2 class="heading">Events by CLUB MS8 Kerala</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="dark-card"  data-aos="fade-right">
              <div class="dark-card-img">
                <iframe width="100%"  src="https://www.youtube.com/embed/CrmutHczGSU" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="dark-card-body">
                <div class="row">
                  <div class="col-9">
                    <p class="heading">Celebration</p>
                  </div>
                  <div class="col-2">
                    <a href="https://www.youtube.com/watch?v=pDT6yYm4-OI&t=2s"  target="_blank"><button class="btn btn-primary">More</button></a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p>Club MS8 50k insta Family celebration</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="dark-card"  data-aos="fade-right">
              <div class="dark-card-img">
                <iframe width="100%"  src="https://www.youtube.com/embed/pDT6yYm4-OI" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="dark-card-body">
                <div class="row">
                  <div class="col-9">
                    <p class="heading">Thrisur meet 2019</p>
                  </div>
                  <div class="col-2">
                    <a href="https://www.youtube.com/watch?v=pDT6yYm4-OI&amp;t=2s"  target="_blank"><button class="btn btn-primary">More</button></a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p>MS8 Brotherhoood KL08 Thrisur,Kerala</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'footer.php'; ?>
  <script type="text/javascript">
    document.getElementById('events').classList.add('active2');
    document.getElementById('foo').style.position="static";
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
