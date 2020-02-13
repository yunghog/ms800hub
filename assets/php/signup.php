<?php
include 'db_connect.php';
$name = $_POST['name'];
$phno = $_POST['ph'];
$modelx = $_POST['model'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$role = 3;
$place = $_POST['place'];
$desc1 = $_POST['desc1'];
$plate = $_POST['id'];
$mail = $_POST['mail'];
$sql = "INSERT Into users (name, username, password, role, phno, place, platenum, model, description,email)
        values('$name','$uname','$pwd','$role','$phno','$place','$plate','$modelx','$desc1','$mail')";
$exec = mysqli_query($conn,$sql);
if(mysqli_error($conn)){
  echo "<script>alert('Error in Signing up. Pleasetry again');</script>";
}
else{
    echo "<script>alert('Your form been submitted. We will call you soon !');</script>";
}
$conn->close();
?>
<script type="text/javascript">
window.location = "../../index.html";
</script>
