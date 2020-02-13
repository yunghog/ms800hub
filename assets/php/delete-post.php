<?php
include 'db_connect.php';
$id=$_POST['post_id'];
$query = "UPDATE blog set active=0 where id=$id";
$exec = mysqli_query($conn,$query);
//echo "id = $id";
 ?>
 <script type="text/javascript">
   alert("Post deleted");
   window.location.href = '../../create-blog.php';
</script>
