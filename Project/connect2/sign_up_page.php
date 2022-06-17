<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp form</title>
    <link  rel="stylesheet" type="text/css" href="design.css">
    <style media="screen">
      h1{
        color: white;
        text-align: left;
        font-size: 40px;
      }
    </style>
  </head>
  <body>
    <script type="text/javascript">
    function sub(){
    var fr=document.getElementById("f");
   fr.submit(); // Submit the form
      return false;
    }
    </script>
<div class="login_box">
    <h1>Sign up</h1>
<form id="f" action="signup.php" method="post" >
<p>Enter you user name  </p>
<input type="text" placeholder="enter your username" id="username" name="username" required>
<p>Enter your Password</p>
<input type="password" placeholder="Enter password" id="password" name="password" required>
<p>Confirm Password</p>
<input type="password" placeholder="Enter password" id="password" name="password2" required>
<p>Enter Your Email</p>
<input type="text" placeholder="user@example.com"id="email"name="email" required>
<p>Enter Your recovery Password </p>
<input type="password" placeholder="Enter recovery password"id="recoverypassword"name="recovery_password">
<and stuff>
<br>
<div class="">

<label><input type="checkbox" /> Agree terms of User</label>
</div>
<br>
<input type="submit" name="submit" value="Sign Up" id="signup" onclick="sub();return false;" >
<a href="signin.php">Sign in?</a>
</form>
</div>
  </body>
</html>
