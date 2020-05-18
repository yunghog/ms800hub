<?php
include 'db_connect.php';
$id=$_POST['gallery_id'];
$query = "UPDATE blog set active=0 where id='$id'";
$exec = mysqli_query($conn,$query);
//echo "id = $id";
 ?>
 <script type="text/javascript">
   alert("Post deleted");
   window.location.href = '../../signin.php';
</script>
