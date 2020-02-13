<?php
session_start();

  // echo "<script> "

if(isset($_SESSION['user_id']))
{
  session_destroy();
  echo "<script>location.href='../../login.php'</script>";
}
else
{
  echo "<script>location.href='../../login.php'</script>";
}
?>
