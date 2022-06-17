<?php
session_start();
if(isset($_POST['email'],$_POST['psw'])) {
  $email = $_POST["email"];
  $password = $_POST["psw"];
}
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn  = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_POST['save'])){
  if($_SESSION['your_email']!=$email){
    echo "<script>
    alert('This email doesnt match the email you signed in with');
    document.location='index.php';
    </script>";
    exit();
  }
  else {
    $login = mysqli_query($conn,"  UPDATE  registration set password='$password' where email='$email'   ");
    echo "<script>
    alert('Your Password has scuccessfully changed');
    document.location='index.php';
    </script>";
  }
}elseif (isset($_POST['delete'])) {
  if($_SESSION['your_email']!=$email){
    echo "<script>
    alert('This email doesnt match the email you signed in with');
    document.location='index.php';
    </script>";
    exit();
  }
  else {
   $delete = mysqli_query($conn,"  DELETE from  registration where email='$email'   ");
    echo "<script>
    alert('Your account has scuccessfully deleted');
    document.location='index.php';
    </script>";
  }
}
 ?>
