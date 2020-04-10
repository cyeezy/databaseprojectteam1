<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST["role"]; //will not be used for database will be used for redirecting to specific page i believe i can try 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>

<body>
  <h1>Email: <?php echo $email ?></h1>
  <h1>Password: <?php echo $password ?></h1>
  <input type="button" value="Employee" class="homebutton" id="btnHome"
onClick="document.location.href='employeeChoice.html'">

<input type="button" value="Customer" class="homebutton" id="btnHome"
onClick="document.location.href='packageInfo.php'">

</body>
</html>
