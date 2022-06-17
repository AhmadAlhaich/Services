<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="forgotpassword.css">
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="signin.css">
    <title></title>
    <style media="screen">
      .g-signin2{
        margin-bottom: 15px;
      }
      button{
        background-color:transparent;
        border:none;
         color:white;
           font-size: 17px; text-transform: uppercase;
            font-family: 'Roboto';
             border-radius: 3px;
             font-weight: 300px;
      }
      button:hover{
         background: #87CEFA;
          transition: .5s;
          cursor: pointer;
      }
    </style>
    <script type="text/javascript">
    function sub(){
    var fr=document.getElementById("f");
    fr.submit(); // Submit the form
      return false;
    }
    function openForm() {
    document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
  </head>
  <body>
    <div class="form-popup" id="myForm">
       <form  class="form-container" id="my form" action="recoverypassword.php" method="post">
         <label for="psw"><b>Enter Your email</b></label>
         </br>
         <input type="text" placeholder="Enter your email" name="email" required autocomplete="off">
           </br>
         <label for="psw"><b>Enter Your Recovery Password?</b></label>
         <input type="password" placeholder="Enter new Password" name="psw" required>

         <button type="submit" class="btn">Save Changes</button>
         <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
       </form>
     </div>

<div class="login_box">
  <form class="" action="signin1.php" method="post" id="f">
    <h1>Sign in</h1>
<p>Enter your email</p>
<input type="text" name="email" value="" placeholder="user@example.com" required>
<p>Enter Your Password</p>
<input type="password" name="password" value=""placeholder="Password" required>
<input type="submit" name="" value="Login">
<a name="button" onclick="openForm()">Forgot Your Password?</a>
<br>
<a href="sign_up_page.php">Dont't have an account?</a>
  </form>
</div>
  </body>
</html>
