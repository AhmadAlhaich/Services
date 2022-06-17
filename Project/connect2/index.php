<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="navigation_bar.css">
<link rel="stylesheet" href="popup.css">
<style>

/* SIGN IN */
body {font-family: Arial, Helvetica, sans-serif;}

body, html {
  height: 100%;
  margin: 0;
  font-family: 'Roboto';
  color: #777;
  scroll-behavior: smooth;
}

.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
  position: relative;
  opacity: 0.87;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("plumb2.jpg");
  min-height: 760px;
   background-position: 80%;

}

.bgimg-2 {
  background-image: url("clean.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("plumb.jpg");
  min-height: 400px;
  background-position: 10%;
}

.bgimg-4 {
  background-image: url("tools.jpg");
  min-height: 400px;
  background-position: 1%;
}

.bgimg-5 {
  background-image: url("internet.jpeg");
  min-height: 400px;
  background-position: 90%;
}


.caption {
  position: absolute;
  left: 0;
  top: 40%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 20px;
  letter-spacing: 10px;
}

h1 {
  position: absolute;
  font-size: 60px;
  left: 0;
  top: 0%;
  width: 100%;
  text-align: center;
  color: white;
  font-weight: 400;
  letter-spacing: 10px;
}
.a {
  font-weight: 300;
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

}
</style>
<script type="text/javascript">
function openForm() {
document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</head>
<body>

<div class="bgimg-1" id="bgimg-1">
  <nav>
    <label class="logo">Residential Services System </label>
    <ul>
      <li><button type="button" name="button"  onclick="openForm()"> Privacy </button></li>
      |
      <li><a href="#" class="a">About</a></li>
      |
      <li><a href="logout.php" class="a">Sign Out</a></li>
      |
      <li>  <a href="mailto:mohammad.itani1999@hotmail.com" class="a">Contact us</a></li>
      |
      <li><a href="signin.php" class="a">Sign In?</a></li>
    </ul>
  </nav>
  <hr class="new4">
<a href="#bgimg-2" style="font-size:20px; color: #f7f7f7; position: absolute;
  left: 400px; top: 200px; text-decoration: none;">Cleaning</a>
<a href="#bgimg-3" style="font-size:20px; color: #f7f7f7; position: absolute;
  left: 600px; top: 200px; text-decoration: none;">Plumbing</a>

<a href="#bgimg-4" style="font-size:20px; color: #f7f7f7; position: absolute;
  left: 850px; top: 200px; text-decoration: none;">Repair</a>

<a href="#bgimg-5" style="font-size:20px; color: #f7f7f7; position: absolute;
  left: 1070px; top: 200px; text-decoration: none;">I.T.</a>
<?php
if (isset($_SESSION['login_session'])) {
  echo '
   <div class="form-popup" id="myForm">
      <form  class="form-container" id="my form" action="change_password.php" method="post">
        <label for="psw"><b>Enter Your email</b></label>
        </br>
        <input type="text" placeholder="Enter your email" name="email" required>
          </br>
        <label for="psw"><b>Change Your Password?</b></label>
        <input type="password" placeholder="Enter new Password" name="psw">

        <button type="submit" class="btn" name="save">Save Changes</button>

          <button type="submit" class="btn" name="delete">Delete Account</button>

        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
    </div>' ;
}
else {
  echo '
   <div class="form-popup" id="myForm">
      <form  class="form-container" id="my form">
        <label><b>You need to be signed in to access privacy!!</b></label>
        </br>
        </br>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
    </div>';
}
  ?>
</div>
<div class="bgimg-2" id="bgimg-2">
  <div class="caption">
    <a href="http://localhost/Cleaning/plumbing2.html">
  <span class="border"
  style="background-color:transparent;font-size:25px;color: #f7f7f7;">CLEANING</span>
</a>
  </div>
</div>


<div class="bgimg-3" id="bgimg-3">
  <div class="caption">
    <a href="http://localhost/Plumbing%202.0/plumbing2.html">
  <span class="border"
  style="background-color:transparent;font-size:25px;color: #f7f7f7;">PLUMBING</span>
</a>
  </div>
</div>

<div class="bgimg-4" id="bgimg-4">
  <div class="caption">
    <a href="http://localhost/repair/main.html">
  <span class="border"
  style="background-color:transparent;font-size:25px;color: #f7f7f7;">REPAIR</span>
</a>
  </div>
</div>

<div class="bgimg-5" id="bgimg-5">
  <div class="caption">
    <a href="http://localhost/Internet/internetservice.html">
  <span  class="border"
  style="background-color:transparent;font-size:25px;color: #f7f7f7;">I.T.</span>
  </a>
  </div>
</div>
</body>





















</html>
