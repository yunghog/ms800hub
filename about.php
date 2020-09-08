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
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  </head>
	<body>
    <?php include 'header.php'; ?>
  <div class="content">
    <section  id="hero" class="full-page-section bg-image"  data-aos="fade">
      <div class="container hero-con">
        <div class="row" data-aos="fade-right">
          <div class="col-md-12">
            <h1 class="big-text">About</h1>
            <h4 class="tag">The MS800 Hub</h4>
          </div>
        </div>
        <a href="#page-content" id="swipe_down">
          <div class="arrow">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
          </div>
        </a>
      </div>
    </section>
    <section id="page-content"  data-aos="fade">
      <div class="container">
        <br><br>
        <div class="row">
          <div class="col-md-4" >
            <div class="cardy"  data-aos="fade-right">
              <h3 class="heading">ABOUT US</h3>
              <img src="assets/img/ms8i1.png" alt="" width="100%">
            </div>
          </div>
          <div class="col-md-8">
          <div class="cell cardy"  data-aos="fade-left">
            <p>
              MS800 Hub is a group of auto-mototive enthusiast in the town of sagar.
              To be specific, we are the group of proud MS800 owners. MS800 is a legendary car manufactured and sold in India.
              2.6M units have been sold across India during the time period of 20 years since 1984.
              It has been the family car of middle class indians as well as rich.
              As Maruti Suzuki India.ltd has stopped the production of this species, it is on the edge of extinction.
              So as a tribute, to set a trend and to carry on our passion for this Legendary hatch we have come up with the
              <b>MS800 Hub</b>
            </p>
          </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <section  data-aos="fade">
      <div class="container-fluid bg-image">
        <br>
        <div class="row justify-content-center">
          <div class="col-md-8"  data-aos="fade-up">
            <h3 class="heading"> " We have an emotional connection with the vehicle, but at some point of time, you have to take hard decisions, "</h3>
        </div>
      </div>
        <div class="row justify-content-center" >
          <div class="col-md-8 text-right"  data-aos="fade-up">
            <h5> - C.V Raman</h5>
            <p class="text-right">Executive director of engineering <br> Maruti Suzuki</p>
          </div>
        </div>
        <br>
      </div>
    </section>
    <br>
    <section  data-aos="fade">
      <div class="container">
        <div class="row" >
          <div class="col-md-8">
            <div class="cardy"  data-aos="fade-right">
              <h2 class="heading">Mission</h2>
              <p>
                We are 20yo car enthusiast. We're interested in cars since
                childhood. There are many automobile clubs like JAWA Motorcycle
                club, RX club, JEEP club... So being a car enthusiast we wanted
                to start something like this but how? Maruti 800 is a very
                familiar car to every indian and we had 2 of 'em in our garage. As it is on the edge of extiction, we started this club to create a trend
                in the community and preserve the legend for future generation
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cardy cell inverse"  data-aos="fade-right">
              <h2 class="heading">Get Updates.</h2>
              <h2 class="heading">Follow Us</h2>
              <ul class="social-list">
                <li><a href="https://www.instagram.com/clubms8/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://youtube.com/channel/UC5f8s1EALJIYR1ag_GZtEKQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li><a href="mailto:Clubms8sagar@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
      document.getElementById('about').classList.add('active2');
      document.getElementById('about_us').classList.add('active2');
    </script>
    <script>
      AOS.init({
          once: true,
          duration: 1000,
      });
    </script>
  <script>
    $(document).ready(function(){
      $("#swipe_down").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        }
      });
    });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
