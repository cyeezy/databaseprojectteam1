<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>

<body>
  <h1>Name: <?php echo $name ?></h1>
  <h1>Email: <?php echo $email ?></h1>
  <h1>Password: <?php echo $password ?></h1>
</body>
</html>
