<?php
session_start();
include 'db_connect.php';
   if(isset($_FILES['image'])){
     $user_id=$_SESSION['user_id'];
     $title=$_POST['title'];
     $body=$_POST['body'];
     $tag=$_POST['tag'];
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $today=date('d-m-y');
      $time=time();
      $file_name=$time.'.'.$file_ext;
      $extensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../img/blog/"."blog_image_".$user_id.$file_name);
         $target="blog_image_".$user_id.$file_name;
         //$query="INSERT INTO `gallery` (`image`) VALUES ('$target')";
         $query="INSERT INTO `blog`(`image`, `author_id`, `title`, `body`, `date`, `tag`) VALUES ('$target','$user_id','$title','$body','$today','$tag')";
         $exec=mysqli_query($conn,$query);
         ?>
         <script type="text/javascript">
           alert('Uploaded successfully');
         </script>
         <?php
      }else{
         ?>
          <script type="text/javascript">
            alert('<?php $error; ?>');
          </script>
         <?php
      }
   }
?>
<script type="text/javascript">
  window.location.href='../../admin/blog.php';
</script>
