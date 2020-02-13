<?php
include 'db_connect.php';
session_start();
$target_dir = "../img/gal/";
$target_file = $target_dir . basename($_FILES["gimg"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {?>
      <script type="text/javascript">
        alert("Sorry, only JPG, JPEG and PNG  files are allowed");
        window.location.href='../../create-gallery.php';
      </script>
<?php
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>
            alert('Sorry, file already exists');
            window.location.href='../../create-gallery.php';
            </script>";
}
else{
move_uploaded_file($_FILES["gimg"]["tmp_name"], $target_file);
$orginal_target_dir="assets/img/gal/";
$orginal_target_file= $orginal_target_dir . basename($_FILES["gimg"]["name"]);
$caption=$_POST['cap'];
$user_id=$_SESSION['user_id'];
$d='y,m,d';
$date=date($d);
echo mysqli_error($conn);
$query="INSERT into gallery(caption,user_id,image,tdate) values('$caption','$user_id','$orginal_target_file','$date')";
$exec=mysqli_query($conn,$query);
}
?>
<script type="text/javascript">
  alert('Image Posted');
  window.location.href='../../create-gallery.php';
</script>
