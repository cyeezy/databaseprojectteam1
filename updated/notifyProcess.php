<?php

require 'connectDB.php';

if(isset($_POST["customer-email-submit"])){
    $emailCustomer = $_POST["email1"];
}

$stmt1 = $conn->prepare("SELECT * FROM customer WHERE emailAddress = '$emailCustomer' limit 1");
$stmt1->execute();
$resultCustomer = $stmt1->get_result();
//$rowCustomer = $resultCustomer->fetch_assoc();
$stmt1->close();

if ($resultCustomer->num_rows == 0){
    $msg = "There is no customer in our system with this email address.";
}else{
    $rowCustomer = $resultCustomer->fetch_assoc();
    $msgReceive = "You are not receiving any packages.";

    if ($rowCustomer["receivingPackage"] == 1){
        $msgReceive = "You are receiving a package! The sender of your package should have contacted you with the tracking number so
            you can keep track of the package as it makes its way to you.";
    }

    $msgSend = "You are not sending any packages.";

    if ($rowCustomer["sendingPackage"] == 1){
        $senderID = $rowCustomer["customerID"];

        $stmt2 = $conn->prepare("SELECT * FROM package WHERE senderCustID = $senderID");
        $stmt2->execute();
        $resultPackage = $stmt2->get_result();
        //$rowPackage = $resultPackage->fetch_assoc();
        if ($resultPackage->num_rows > 0){
            $msgSend = "You are sending packages with the following tracking numbers: " . "<br>";

            while($row=$resultPackage->fetch_assoc()){
                $trackingNum = $row["trackingNumberPackage"];
                $msgSend = $msgSend . $trackingNum . "<br>";
            }
        }

        $stmt2->close();

    }

    $msg = $msgReceive . "<br>" . "<br>" . $msgSend . "<br>";
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
      Tracking History
    </h1>
    <div class ="display"> <!-- insert the php for echoeing to the page -->

    <?php

        echo $msg;

    ?>


    </div>
</div>

</body>