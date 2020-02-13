<?php
include 'db_connect.php';


  if(isset($_POST['signin']))
  {
    $username = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    // $password = sha1($password);

    $sql = "SELECT id,role FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    $user_id = mysqli_fetch_array($result);
    if($count == 1)
    {
      session_start();
      $_SESSION['role']=$user_id['role'];
      $_SESSION['user_id']=$user_id['id'];
      if($user_id['role']==1){
        echo "<script> window.open('../../admin.php','_self');</script>";
      }
      if($user_id['role']==2){
        echo "<script> window.open('../../admin.php','_self');</script>";

      }
      if($user_id['role']==3){
        echo "<script> window.open('../../blog.php','_self');</script>";

      }

    }
    else
    {
      echo "<script> alert('Your Login Name or Password is invalid');
      window.location.href='../../login.php';</script>";
    }
  }


 ?>
