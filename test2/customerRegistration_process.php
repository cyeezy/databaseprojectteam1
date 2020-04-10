<?php
  $name = $_POST["name"];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $value = "";

  if (!preg_match("/^[a-zA-Z ]*$/",$name)) { //checks if name is valid and only letters
      $name = "";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //checks if email is valid input
       $email = "";
     }

    if($name == "" || $email == "" || $password == "") //since password can almosts be anything the constantly
                                                      //the only condition im taking into consideration is if they input nothing
    {
      $value = "Entries will not be added to database"; //if at least one value is "", entries will not be stored in database
    }
    else {
      $value = "Entries will be added to the database"; //if every condition is met and all three values are accepted, entries will be added to database
        //$value will be printed on line 34
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>

<body>
  <h1>Determine: <?php echo $value ?></h1>
  <?php
    if($name != "" and $email != "" and $password != "") //if all inputs have accepted values, print on screen the set of inputs
    {
      echo("Name: ");
      echo($name);
      echo "<br>";
      echo("Email: ");
      echo($email);
      echo "<br>";
      echo("Password: ");
      echo($password);
      echo "<br>";
    }
  ?>
  <input type="button" value="Home" class="homebutton" id="btnHome"
onClick="document.location.href='index.html'"">
</html>
