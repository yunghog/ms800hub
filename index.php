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
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body background="assets/img/bg.jpg">
  <?php include 'header.php'; ?>
  <br>
  <div class="content">
    <section class="full-page-section">
      <div class="container">
        <div class="row" >
          <div class="col-md-12">
            <h1 class="big-text">MS800 Hub</h1>
            <h2 class="tag">GLORY FOR THE CLASSIC</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p class="para-more" id="readmore">MS800 Hub is a group of auto-mototive enthusiast in the town of sagar.
              To be specific, we are the group of proud MS800 owners.
            <b>Club MS8 Sagar</b></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="about.php"><button class="btn btn-primary">read more</button></a>
            <a href="signup.php"> <button class="btn btn-outline-primary">signup</button></a>
          </div>
          <div class="col-md-2"></div>
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
    <section class="full-page-section" id="feed_section">
      <br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="big-text">FEED</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <?php
            include 'assets/php/db_connect.php';
            $feed_query="SELECT a.*, b.name, b.username from blog a, users b where a.active=1 and a.author_id=b.id order by a.date desc limit 3";
            $feed_exec=mysqli_query($conn,$feed_query);
            $i=1;
            while($feed_row=mysqli_fetch_array($feed_exec))
            {
              if($i==1){
                  ?>
                  <div class="row">
                    <div class="col-md-12">
                      <a href="blog.php?bid=<?php echo $feed_row["id"] ?>">
                        <div class="blog-thumb">
                          <div class="row no-gutters">
                            <div class="col-12">
                              <div class="blog-image">
                                <img src="assets/img/blog/<?php echo $feed_row['image']; ?>" alt="" height="100%">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <div class="blog-desc">
                                <h5><?php echo $feed_row['title']; ?></h5>
                                <p>by <?php echo $feed_row['name']; ?> <br> pc : <?php echo $feed_row['tag']; ?><br> <?php echo $feed_row['date']; ?> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                  <?php
                  $i++;
              }
              if($i>1){
                ?>
                <div class="col-md-6">
                  <a href="blog.php?bid=<?php echo $feed_row["id"] ?>">
                    <div class="blog-thumb">
                      <div class="row no-gutters">
                        <div class="col-5">
                          <div class="blog-image">
                            <img src="assets/img/blog/<?php echo $feed_row['image']; ?>" alt="" height="100%">
                          </div>
                        </div>
                        <div class="col-7">
                          <div class="blog-desc">
                            <h5><?php echo $feed_row['title']; ?></h5>
                            <p>by <?php echo $feed_row['name']; ?> <br> pc : <?php echo $feed_row['tag']; ?><br> <?php echo $feed_row['date']; ?> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <?php
              }
            }
            ?>
            </div>
          </div>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
