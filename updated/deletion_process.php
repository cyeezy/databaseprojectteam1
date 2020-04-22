<?php

require 'connectDB.php';

if (isset($_POST["customer-delete"])){
    $email = $_POST["email1"];

    $stmt2 = $conn->prepare("SELECT * FROM customer WHERE emailAddress = '$email'");
    $stmt2->execute();
    $resultCustomer = $stmt2->get_result();

    if ($resultCustomer->num_rows > 0) {
        $stmt3 = $conn->prepare("DELETE FROM customer WHERE emailAddress = '$email'");
        $stmt3->execute();
        $stmt3->close();
    }

    $stmt2->close();

}

if (isset($_POST["employee-delete"])){
    $email = $_POST["email2"];

    $stmt2 = $conn->prepare("SELECT * FROM employee WHERE employeeEmail = '$email'");
    $stmt2->execute();
    $resultEmployee = $stmt2->get_result();

    if ($resultEmployee->num_rows > 0) {
        $stmt3 = $conn->prepare("DELETE FROM employee WHERE employeeEmail = '$email'");
        $stmt3->execute();
        $stmt3->close();
    }

    $stmt2->close();

}

if (isset($_POST["package-delete"])){
    $trackingNum = $_POST["track"];

    $stmt2 = $conn->prepare("SELECT * FROM package WHERE trackingNumberPackage = $trackingNum");
    $stmt2->execute();
    $resultPackage = $stmt2->get_result();

    if ($resultPackage->num_rows > 0) {
        $stmt3 = $conn->prepare("DELETE FROM timestampTable WHERE trackingNumberTimestamp = $trackingNum");
        $stmt3->execute();
        $stmt3->close();

        $stmt4 = $conn->prepare("DELETE FROM package WHERE trackingNumberPackage = $trackingNum");
        $stmt4->execute();
        $stmt4->close();

        $stmt5 = $conn->prepare("DELETE FROM trackinghistory WHERE trackingNumber = $trackingNum");
        $stmt5->execute();
        $stmt5->close();
    }

    $stmt2->close();

}


?>

<!DOCTYPE>

<html lang="en">
<head>

<link rel="stylesheet" href="css/updateInfoNew.css">
<title>Track Package</title>
</head>

<body>
  <header>
 <nav class="fixed-nav-bar">
     <label class="logo">UH Post Office</label>
     <ul>
         <li><a href="customerSignedIn.html">Home</a></li>
         <li><a href="customerChooseAction.html">Account</a></li>
         <li><a href="index.html">Logout</a></li>
     </ul>
 </nav>
      </header>
<body>
<div class="trackHis">
    <h1>
      Entries Deleted
    </h1>
    <div class ="display"> <!-- insert the php for echoeing to the page -->

    <?php


if (isset($_POST["customer-delete"])){
    if ($resultCustomer->num_rows > 0){
        while ($row = $resultCustomer->fetch_assoc()){
            echo "Customer deleted: Customer ID = " . $row["customerID"] . ", Name = " . $row["firstName"] . " " . $row["lastName"] . "<br>";
        }
    }
}

if (isset($_POST["employee-delete"])){
    if ($resultEmployee->num_rows > 0){
        while ($row = $resultEmployee->fetch_assoc()){
            echo "Employee deleted: Employee ID = " . $row["employeeID"] . ", Name = " . $row["firstName"] . " " . $row["lastName"] . "<br>";
        }
    }
}

if (isset($_POST["package-delete"])){
    if ($resultPackage->num_rows > 0){
        while ($row = $resultPackage->fetch_assoc()){
            echo "Package deleted: Package ID = " . $row["packageID"] . ", Tracking Number = " . $row["trackingNumberPackage"] . ", Last Branch = Branch " . $row["branchIDPackage"] . "<br>";
        }
    }
}



    ?>


    </div>
</div>

</body>