<?php
$firstname = $_POST["firstname"]; //package "from" set of datas
$email = $_POST["email1"];
$lastname = $_POST["lastname"];
$mailingAddress = $_POST["mailingAddress"];
$apartmentNumber = $_POST["apartmentNumber"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode1"];
$trackingNum = $_POST["trackingNumber"];

$firstname2 = $_POST["firstname2"]; //package "to" set of data
$lastname2 = $_POST["lastname2"];
$mailingAddress2 = $_POST["mailingAddress2"];
$apartmentNumber2 = $_POST["apartmentNumber2"];
$city2 = $_POST["city2"];
$state2 = $_POST["state2"];
$zipcode2 = $_POST["zipcode2"];





if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) { //checks if firstname is valid and only letters
    $firstname = "";
  }

  if (!preg_match("/^[a-zA-Z ]*$/",$firstname2)) { //checks if firstname is valid and only letters
      $firstname2 = "";
    }

  if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
  {                                             //checks if last-name is valid and only letters
      $lastname = "";
  }

  if (!preg_match("/^[a-zA-Z ]*$/",$lastname2))
  {                                             //checks if last-name is valid and only letters
      $lastname2 = "";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //checks if email is valid input
     $email = "";
   }

   if (!preg_match("/^[a-zA-Z ]*$/",$city)) { //checks if firstname is valid and only letters
       $city = "";
     }

     if (!preg_match("/^[a-zA-Z ]*$/",$city2)) { //checks if firstname is valid and only letters
         $city2 = "";
       }

  if(!is_numeric($zipcode)) //checks if zipcode is only numbers(int)
  {
       $zipcode = "";
  }

  if(!is_numeric($zipcode2)) //checks if zipcode is only numbers(int)
  {
       $zipcode = "";
  }

  if($firstname == "" || $lastname == "" || $mailingAddress == "" || $city == "" || $state == ""
  || $zipcode == "" || $email == ""  || $firstname2 == "" || $lastname2 == "" || $mailingAddress2 == "" || $city2 == "" || $state2 == ""
  || $zipcode2 == "") //this can be deleted but for verification
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
  if($firstname != "" and $lastname != "" and $mailingAddress != "" and $city != "" and $state != ""
  and $zipcode != "" and $email != "" and $firstname2 != "" and $lastname2 != "" and $mailingAddress2 != "" and $city2 != "" and $state2 != ""
  and $zipcode2 != "" and $trackingNum != "") //prints values of all values if they are all accepted inputs
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

    echo("Mailing Address: ");
    echo($mailingAddress);
    echo "<br>";

    echo("City: ");
    echo($city);
    echo "<br>";

    echo("State: ");
    echo($state);
    echo "<br>";

    echo("Zipcode: ");
    echo($zipcode);
    echo "<br>";

    echo("Tracking Number: ");
    echo($trackingNum);
    echo "<br>";

    echo "<br>";
    echo "<br>";

    echo("First name: ");
    echo($firstname2);
    echo "<br>";

    echo("Last Name: ");
    echo($lastname2);
    echo "<br>";


    echo("Mailing Address: ");
    echo($mailingAddress2);
    echo "<br>";

    echo("City: ");
    echo($city2);
    echo "<br>";

    echo("State: ");
    echo($state2);
    echo "<br>";

    echo("Zipcode: ");
    echo($zipcode2);
    echo "<br>";

    echo("values will be inserted into database");
  }
  ?>
  <h1><?php echo($value)?></h1>
</body>
</html>
