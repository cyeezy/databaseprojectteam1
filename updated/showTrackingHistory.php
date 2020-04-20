<?php

require 'connectDB.php';

if(isset($_POST["display-history"])){
    $trackingNum = $_POST["tracking"];
}

$stmt = $conn->prepare("SELECT * FROM timestampTable WHERE trackingNumberTimestamp = $trackingNum");
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

$stmt = $conn->prepare("SELECT * FROM trackinghistory WHERE trackingNumber = $trackingNum");
$stmt->execute();
$resultHistory = $stmt->get_result();
$rowHistory = $resultHistory->fetch_assoc();
$stmt->close();

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

    if ($result->num_rows > 0){   
        if ($rowHistory = 0){
            echo "Status: Shipped" . "<br>";
        }else if ($rowHistory = 2){
            echo "Status: Delivered" . "<br>";
        }else{
            echo "Status: In transit" . "<br>";
        }

        while($row = $result->fetch_assoc()){
            $addrID = $row["timestampAddID"];
            $stmt = $conn->prepare("SELECT * FROM addressTable WHERE addressID = $addrID");
            $stmt->execute();
            $resultAddress = $stmt->get_result();
            $addressRow = $resultAddress->fetch_assoc();
            $stmt->close();

            echo "Date: " . $row["timestampDate"]. " - Location: " . $addressRow["addressLine1"]. ", " .$addressRow["City"]. ", " . $addressRow["StateProvince"] . ", United States, " . $addressRow["Zipcode"] . "<br>";
        }
    }else{
        echo "0 results.";
    }

    ?>


    </div>
</div>

</body>
