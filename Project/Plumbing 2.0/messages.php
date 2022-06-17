<?php
if(isset($_POST['message'])){
  $message=$_POST['message'];
}
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn  = new mysqli($host,$dbusername,$dbpassword,$dbname);
  mysqli_query($conn,"INSERT INTO complaintmessages (Messages) VALUES ('$message')");
  echo "<script>
alert('Your form was submitted we will reply to you in the next 24 hours');
document.location='plumbing2.html';
</script>";
 ?>
