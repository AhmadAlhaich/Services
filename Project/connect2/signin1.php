<?php
  session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn  = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_POST['email'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
$login = mysqli_query($conn,"SELECT * FROM registration where  email='".$email."' and password='".$password."' limit 1 ");
//$result= mysqli_query($login);
if($login->num_rows==1){
  $url = 'index.php';
  header("Location:$url");
  $_SESSION['login_session']="1";
  $_SESSION['your_email']=$email;
  exit();
}
else{
  echo "<script>
alert('The email or password you entered does not exist please enter a valid password!!');
document.location='signin.php';
</script>";
  exit();
}
}
 ?>
