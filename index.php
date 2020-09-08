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
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- lightbox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body background="assets/img/bg.jpg">
  <?php include 'header.php'; ?>
  <br>
  <div class="content">
    <section class="full-page-section">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="0">
          <div class="col-md-12">
            <h1 class="big-text">MS800 Hub</h1>
            <h4 class="tag">GLORY FOR THE CLASSIC</h4>
          </div>
        </div>
        <div class="row"  data-aos="fade-up" data-aos-delay="400">
          <div class="col-md-6">
            <p class="">MS800 Hub is a group of auto-mototive enthusiast in the town of sagar.
              To be specific, we are the group of proud MS800 owners. <strong>MS800Hub</strong></p>
          </div>
        </div>
        <div class="row"  data-aos="fade-up" data-aos-delay="800">
          <div class="col-md-6">
            <a href="about.php" class="btn btn-primary">read more</a>
            <a href="signup.php" class="btn btn-outline-primary">signup</a>
          </div>
        </div>
          <a href="#feed_section" id="swipe_down">
            <div class="arrow">
              <div class="chevron"></div>
              <div class="chevron"></div>
              <div class="chevron"></div>
            </div>
          </a>
      </div>
    </section>
    <section id="feed_section">
      <br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="big-text">FEED</h2>
          </div>
        </div>
        <div class="row">
          <?php
          include 'assets/php/db_connect.php';
          $feed_query="SELECT a.*, b.name, b.username from blog a, users b where a.active=1 and a.author_id=b.id order by a.image desc limit 3";
          $feed_exec=mysqli_query($conn,$feed_query);
          $delay=0;
          while($feed_row=mysqli_fetch_array($feed_exec)){
            $delay+=300;
            $i=$feed_row["id"];
            ?>
            <div class="col-md-4" data-aos="fade-right" data-aos-delay="<?php echo $delay ?>">
              <div class="feed-card">
                <div class="feed-card-img">
                  <img src="assets/img/blog/<?php echo $feed_row["image"] ?>" alt="Card image cap">
                </div>
                <div class="feed-card-body">
                  <div class="row">
                    <div class="col-9">
                      <h5>Latest Post</h5>
                      <p><?php echo $feed_row["title"] ?></p>
                    </div>
                    <div class="col-3 text-center">
                      <a href="blog.php?bid=<?php echo $feed_row["id"] ?>" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div><?php } ?>
          </div>
        </div>
    </section>
    </div>
    <br>
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
    document.getElementById('index').classList.add('active2');
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
<script type="text/javascript">
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
  });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
      once: true,
      duration: 1000,
  });
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
