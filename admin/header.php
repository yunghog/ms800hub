<header>
  <div class="menu-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2 text-center">
          <i class="fa fa-bars"></i>
        </div>
        <div class="col-8 text-center">
          <img src="../assets/img/logo.png" height="45px" alt="">
        </div>
        <div class="col-2 text-center">
          <div class="user-details">
            <i class="fa fa-user"></i>
            <div class="user-popup">
              <p class="para-more">
                <?php echo $name; ?><br>
                <?php echo $username; ?>
                <form class="" action="../assets/php/signout.php" method="post">
                  <button type="submit" name="signout" class="btn btn-primary">Logout</button>
                </form>
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-1">

        </div> -->
      </div>
    </div>
  </div>
</header>
