<?php
$firstname = $_POST["firstname"]; //will probanly need to type-cast
$email = $_POST["email1"];
$lastname = $_POST["lastname"];
$mailingAddress = $_POST["mailingAddress"];
$apartmentNumber = $_POST["apartmentNumber"];
$city1 = $_POST["city1"];
$state1 = $_POST["state"];
$zipcode = $_POST["zipcode"];
$position = $_POST["position"];
$value = "";

if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) { //checks if firstname is valid and only letters
    $firstname = "";
  }

  if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
  {                                             //checks if last-name is valid and only letters
      $lastname = "";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //checks if email is valid input
     $email = "";
   }

   if (!preg_match("/^[a-zA-Z ]*$/",$city1)) { //checks if firstname is valid and only letters
       $city1 = "";
     }

  if(!is_numeric($zipcode)) //checks if zipcode is only numbers(int)
  {
       $zipcode = "";
  }

  if($firstname == "" || $lastname == "" || $mailingAddress == "" || $city1 == "" || $state1 == ""
  || $zipcode == "" || $position == "" || $email == "") //this can be deleted but for verification
  {
    $value = "Value entries will not be added to database";
  }
  else {
    $value = "Value entries will be added to database";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>

<body>
  <?php
  if($firstname != "" and $lastname != "" and $mailingAddress != "" and $city1 != "" and $state1 != ""
  and $zipcode != "" and $position != "") //prints values of all values if they are all accepted inputs
  {
    echo("First name: ");
    echo($firstname);
    echo "<br>";

    echo("Last Name: ");
    echo($lastname);
    echo "<br>";

    echo("Email: ");
    echo($email);
    echo "<br>";

    echo("First name: ");
    echo($firstname);
    echo "<br>";

    echo("Mailing Address: ");
    echo($mailingAddress);
    echo "<br>";

    echo("City: ");
    echo($city1);
    echo "<br>";

    echo("State: ");
    echo($state1);
    echo "<br>";

    echo("Zipcode: ");
    echo($zipcode);
    echo "<br>";

    echo("Position: ");
    echo($position);
    echo "<br>";
  }
  ?>
  <h1>Email: <?php echo $value ?></h1>
</body>
</html>
