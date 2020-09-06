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
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
              $gal_query="SELECT a.*, b.username from gallery a, users b where a.active=1 and a.author_id=b.id order by a.date";
              // echo $gal_query;
              $gal_exec=mysqli_query($conn,$gal_query);
              while($gal_rows=mysqli_fetch_array($gal_exec)){
                $args=$gal_rows['image'].'%'.$gal_rows['username'].'%'.$gal_rows['caption'].'%'.$gal_rows['date'].'%'.$gal_rows['tag'].'%'.$gal_rows['id'];
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
                    <div class="like-panel">
                        <!-- <i class="fa fa-heart" id=like onclick="like_gal()"></i> -->
                        <!-- <a href="" id="dlLink" download><i class="fa fa-download"></i> </a> -->
                        <div class="share-panel share-panel-2" id="share-panel">
                          <input type="hidden" id='gid' value="">
                          <i class="fa fa-facebook" onclick="share('facebook')"></i>
                          <i class="fa fa-whatsapp" onclick="share('whatsapp')"></i>
                          <i class="fa fa-link" onclick="share('link')"></i>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-10">
                        <h5 class="card-title" id="caption"></h5>
                      </div>
                      <div class="col-2 text-right">
                        <i class="fa fa-share" onclick="openShare()"></i>
                      </div>
                    </div>
                    <p class="card-text"><small class="text-muted" id="author"></small> | <small class="text-muted text-primary" id="tag"></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
      </div>
      <?php
      if (isset($_GET['gid'])) {
        $gid=$_GET['gid'];
        echo $gid;
        $gal_query2="SELECT a.*, b.username from gallery a, users b where a.active=1 and a.author_id=b.id and a.id='$gid' order by a.date desc";
        // echo $gal_query;
        $gal_exec2=mysqli_query($conn,$gal_query2);
        while($gal_rows2=mysqli_fetch_array($gal_exec2)){
          $args2=$gal_rows2['image'].'%'.$gal_rows2['username'].'%'.$gal_rows2['caption'].'%'.$gal_rows2['date'].'%'.$gal_rows2['tag'].'%'.$gal_rows2['id'];
          echo $args2;
          ?>
          <script type="text/javascript">
          $( document ).ready(function() {
              openGalleryModel( "<?php echo $args2; ?>" );
          });          </script>
          <?php
        }
      } ?>
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
        document.getElementById('gid').setAttribute("value",args[5]);
        document.getElementById('dlLink').setAttribute("href",image_src);
          // document.getElementById('caption').innerHTML=args[0];
          // document.body.scrollTop = 0;
        // document.documentElement.scrollTop = 0;
      }
      function closeGalleryModel() {
        document.getElementById('overlay-model').style.display='none';
        var sharepanel=document.getElementById('share-panel');
        sharepanel.style.height="0px";
        sharepanel.style.opacity="0";
        sharepanel.style.visibility="hidden";
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
        // link=window.location;
        gid=document.getElementById('gid').value;
        link="http://ms800hub.rf.gd/gallery.php?gid="+gid;
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
      function like_gal(){
        // console.log(window.this);
        document.getElementById('like').style.color="#00e4ff";
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
