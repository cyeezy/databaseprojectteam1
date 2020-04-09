<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>

<body>
  <h1>Email: <?php echo $email ?></h1>
  <h1>Password: <?php echo $password ?></h1>
  <input type="button" value="Home" class="homebutton" id="btnHome"
onClick="document.location.href='index.php'"">
</html>
