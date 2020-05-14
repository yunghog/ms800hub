<?php
include 'db_connect.php';
$name = $_POST['name'];
$username = $_POST['username'];
$phno = $_POST['phno'];
$model = $_POST['model'];
$password = $_POST['password'];
$role = 3;
$place = $_POST['place'];
$veh_id = $_POST['veh_id'];
$email = $_POST['email'];
$sql = "INSERT Into users (name, username, password, role, phno, place, veh_id, model, email)
        values('$name','$username','$password','$role','$phno','$place','$veh_id','$modelx','$mail')";
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
