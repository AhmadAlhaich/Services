<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])  && isset($_POST['password2']) && isset($_POST['recovery_password'])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $password2=$_POST["password2"];
  $recoverypassword=$_POST["recovery_password"];
}
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn  = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(strcmp($password,$password2)!==0){
  echo "<script>
 alert('It does not match the password you entered!');
 document.location='sign_up_page.php';
 </script>";
exit();
}
//if the email that  was already found
$record = mysqli_query($conn,"SELECT email FROM registration");
if($record->num_rows > 0){
while ($row = mysqli_fetch_array($record)) {
  if(strcmp($row[0],$email)==0){
    echo "<script>
alert('The email you entered already exist please enter another email');
document.location='sign_up_page.php';
</script>";
exit();
  }
}
}
//email validation
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   echo "<script>
alert('This is an invalid format of an email!');
document.location='sign_up_page.php';
</script>";
  exit();
}
if(!empty($username) || !empty($password) ){
    if(mysqli_connect_error()){
      die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect_error());
      exit();
    }else {
      mysqli_query($conn,"INSERT INTO registration (username, password, email,recoverypassword) VALUES ('$username','$password','$email','$recoverypassword')");
      echo "<script>
   alert('You have scuccessfully signed up.');
   document.location='sign_up_page.php';
   </script>";
  $conn->close();
  }
  }
    //convert to string strval();
?>
