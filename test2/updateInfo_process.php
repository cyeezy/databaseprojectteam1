<?php
  $trackingNum = $_POST["trackingNumber"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zipcode = $_POST["zipcode"];
  $status = $_POST["status"];

    if (!preg_match("/^[a-zA-Z ]*$/",$city)) { //checks if firstname is valid and only letters
      $city = "";
    }



    if(!is_numeric($zipcode)) //checks if zipcode is only numbers(int)
    {
      $zipcode = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>

<body>
  <?php
    if($trackingNum != "" and $city != "" and $state != "" and $zipcode != "" and $status != "")
    {
      echo($trackingNum);
      echo "<br>";
      echo($city);
      echo "<br>";
      echo($state);
      echo"<br>";
      echo($zipcode);
      echo "<br>";
      echo($status);
      echo"<br>";
    }
   ?>
  <input type="button" value="Proceed" class="homebutton" id="btnHome"
onClick="document.location.href='employeeChoice.html'">
</body>
</html>
