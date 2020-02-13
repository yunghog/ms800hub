<?php
include 'db_connect.php';
session_start();
$target_dir = "../img/blogimg/";
$target_file = $target_dir . basename($_FILES["bimg"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {?>
      <script type="text/javascript">
        alert("Sorry, only JPG, JPEG and PNG  files are allowed");
        window.location.href='../../create-blog.php';
      </script>
<?php
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>
            alert('Sorry, file already exists');
            window.location.href='../../create-blog.php';
            </script>";
}
else{
move_uploaded_file($_FILES["bimg"]["tmp_name"], $target_file);
$orginal_target_dir="assets/img/blogimg/";
$orginal_target_file= $orginal_target_dir . basename($_FILES["bimg"]["name"]);
$title=$_POST['title'];
$para=$_POST['para'];
$user_id=$_SESSION['user_id'];
$d='y,m,d';
$date=date($d);
echo mysqli_error($conn);
$query="INSERT into blog(title,para,user_id,image,tdate) values('$title','$para','$user_id','$orginal_target_file','$date')";
$exec=mysqli_query($conn,$query);
}
?>
<script type="text/javascript">
  alert('Blog Posted');
  window.location.href='../../create-blog.php';
</script>
