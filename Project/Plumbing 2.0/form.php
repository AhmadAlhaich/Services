<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn  = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_POST['city']) && isset($_POST['streetname']) && isset($_POST['buildingname'])  && isset($_POST['floornumber']) && isset($_POST['roomnumber'])&&isset($_POST['contactnumber'])&&isset($_POST['description'])){
  $city = $_POST["city"];
  $street_name = $_POST["streetname"];
  $building_name = $_POST["buildingname"];
  $floor_number=$_POST["floornumber"];
  $room_number=$_POST["roomnumber"];
  $contact_number=$_POST["contactnumber"];
  $description=$_POST["description"];
}
if(isset($_POST['drainaid'])){
  mysqli_query($conn,"INSERT INTO plumbing_form (city, streetname, buildingname,floornumber,roomnumber,contactnumber,description) VALUES ('$city','$street_name','$building_name','$floor_number','$room_number','$contact_number','$description')");
  echo "<script>
alert('Your form was submitted we will reply to you in the next 24 hours');
document.location='drain-aid.html';
</script>";
exit();
}

if(isset($_POST['wrench'])){
  mysqli_query($conn,"INSERT INTO wrench_form (city, streetname, buildingname,floornumber,roomnumber,contactnumber,description) VALUES ('$city','$street_name','$building_name','$floor_number','$room_number','$contact_number','$description')");
  echo "<script>
  alert('Your form was submitted we will reply to you in the next 24 hours');
  document.location='wrench-inst.html';
  </script>";
  exit();
}






 ?>
