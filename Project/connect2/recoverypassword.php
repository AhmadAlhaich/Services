<?php
if(isset($_POST['email']) && isset($_POST['psw']) ) {
  $email = $_POST["email"];
  $recovery_password = $_POST["psw"];
}
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn  = new mysqli($host,$dbusername,$dbpassword,$dbname);

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
$new_password = randomPassword();
/*
$to      = $email;
$subject = 'Your New Password';
$message = 'Your new Passowrd is'.$new_password;
$headers = 'From: mohammad.itani1999@hotmail.com' . "\r\n" .
    'Reply-To: mohammad.itani1999@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  ini_set('sendmail_from', 'mohammad.itani1999@hotmail.com');
  ini_set("25","mail.example.com");
  ini_set("smtp_port","25");
mail($to, $subject, $message, $headers);
*/
$recovery_password1 = mysqli_query($conn,"SELECT * FROM registration where email = '$email' and recoverypassword = '$recovery_password' limit 1");
if(mysqli_num_rows($recovery_password1) == 1){
echo '<script type="text/javascript">  alert("'.$new_password." "."is your new password".'"); </script>';
echo "<script>
document.location='signin.php';
</script>";
    $update_password = mysqli_query($conn,"  UPDATE  registration set password = '$new_password' where email='$email'   ");
    exit();
}else{
  echo "<script>
  alert('The recovery password does not match yours please try again!!');
  document.location='signin.php';
  </script>";
  exit();
}
 ?>
