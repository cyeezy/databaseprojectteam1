<?php

if (isset($_POST['package-submit'])) {

    require 'connectDB.php';

    $senderFirstName = $_POST["firstname"];
    $senderLastName = $_POST["lastname"];
    $senderAddrLine1 = $_POST["addressline"];
    $senderAddrLine2 = $_POST["addressline2"];
    $senderCity = $_POST["city1"];
    $senderState = $_POST["state1"];
    $senderZipcode = $_POST["zipcode1"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phoneNum"];
    $password = $_POST["password"];
    $branch = $_POST["branch"];

    $receiverFirstName = $_POST["firstname2"];
    $receiverLastName = $_POST["lastname2"];
    $receiverAddrLine1 = $_POST["addressline-2"];
    $receiverAddrLine2 = $_POST["addressline2-2"];
    $receiverCity = $_POST["city2"];
    $receiverState = $_POST["state2"];
    $receiverZipcode = $_POST["zipcode2"];

    $fragility = $_POST["fragility"];
    $containerType = $_POST["containerType"];
    $signatureRequired = $_POST["signature"];
    $weight = $_POST["weight"];
    $currentDate = $_POST["currentdate"];
    $status = 1;
    $ETA = $_POST["eta"];

    $stmt1 = $conn->prepare("SELECT * FROM customer WHERE firstName = '$senderFirstName' AND lastName = '$senderLastName'");
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    if ($result1->num_rows > 0){
        $row = $result1->fetch_assoc();
        $senderID = $row["customerID"];
        $senderAddrID = $row["addressID"];
        $stmt1->close();
    }else{
        $stmt1->close();
        $stmt3 = $conn->prepare("SELECT customerID FROM customer ORDER BY customerID DESC limit 1");
        $stmt3->execute();
        $result3 = $stmt3->get_result();
        $row3 = $result3->fetch_assoc();

        $senderID = $row3["customerID"] + 1;
        $stmt3->close();

        $stmt4 = $conn->prepare("SELECT addressID FROM addressTable ORDER BY addressID DESC limit 1");
        $stmt4->execute();
        $result4 = $stmt4->get_result();
        $row4 = $result4->fetch_assoc();
        $senderAddrID = $row4["addressID"]+1;
        $stmt4->close();

        $sqlAddr = "INSERT INTO addressTable (addressID, addressLine1, addressLine2, City, StateProvince, Zipcode)
            VALUES ($senderAddrID, '$senderAddrLine1', '$senderAddrLine2', '$senderCity', '$senderState', '$senderZipcode')";

        $stmtAddr = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmtAddr, $sqlAddr)){
            header("Location: packageInfo.php?error=sqlerroraddress1");
            exit();
        }
        else{
            mysqli_stmt_execute($stmtAddr);
        }
        mysqli_stmt_close($stmtAddr);

        $receivingPackage = 0;
        $sendingPackage = 0;

        $sqlCustom = "INSERT INTO customer (customerID, firstName, lastName, emailAddress, customerPhone, 
            receivingPackage, sendingPackage, addressID, Cpassword) VALUES ($senderID, '$senderFirstName', 
            '$senderLastName', '$email', '$phoneNum', $receivingPackage, $sendingPackage, $senderAddrID, '$password')";
        
        $stmtCustom = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmtCustom, $sqlCustom)){
            header("Location: packageInfo.php?error=sqlerrorsender");
            exit();
        }
        else{
            mysqli_stmt_execute($stmtCustom);
        }
        mysqli_stmt_close($stmtCustom);
    }

    /*$stmt2 = $conn->prepare("SELECT * FROM addressTable WHERE addressLine1 = '$senderAddrLine1'");
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    if (!$result2->num_rows > 0) {
        $stmt2->close();

        $stmt4 = $conn->prepare("SELECT addressID FROM addressTable ORDER BY addressID DESC limit 1");
        $stmt4->execute();
        $result4 = $stmt4->get_result();
        $row4 = $result4->fetch_assoc();
        $senderAddrID = $row4["addressID"]+1;
        $stmt4->close();

        $sqlAddr = "INSERT INTO addressTable (addressID, addressLine1, addressLine2, City, StateProvince, Zipcode)
            VALUES ($senderAddrID, '$senderAddrLine1', '$senderAddrLine2', '$senderCity', '$senderState', '$senderZipcode')";

        $stmtAddr = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmtAddr, $sqlAddr)){
            header("Location: packageInfo.php?error=sqlerroraddress1");
            exit();
        }
        else{
            mysqli_stmt_execute($stmtAddr);
        }
        mysqli_stmt_close($stmtAddr);
    }else{
        $senderAddrID = $row2["addressID"];
        $stmt2->close();
    }*/

    $stmt5 = $conn->prepare("SELECT * FROM addressTable WHERE addressLine1 = '$receiverAddrLine1'");
    $stmt5->execute();
    $result5 = $stmt5->get_result();
    $row5 = $result5->fetch_assoc();

    if (!$result2->num_rows > 0) {
        $stmt5->close();

        $stmt6 = $conn->prepare("SELECT addressID FROM addressTable ORDER BY addressID DESC limit 1");
        $stmt6->execute();
        $result6 = $stmt6->get_result();
        $row6 = $result6->fetch_assoc();
        $receiverAddrID = $row6["addressID"]+1;
        $stmt6->close();

        $sqlAddr2 = "INSERT INTO addressTable (addressID, addressLine1, addressLine2, City, StateProvince, Zipcode) VALUES
            ($receiverAddrID, '$receiverAddrLine1', '$receiverAddrLine2', '$receiverCity', '$receiverState', '$receiverZipcode')";

        $stmtAddr2 = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmtAddr2, $sqlAddr2)){
            header("Location: packageInfo.php?error=sqlerroraddress2");
            exit();
        }
        else{
            mysqli_stmt_execute($stmtAddr2);
        }
        mysqli_stmt_close($stmtAddr2);
    }else{
        $receiverAddrID = $row5["addressID"];
        $stmt5->close();
    }

    $stmt = $conn->prepare("SELECT trackingNumber FROM trackinghistory ORDER BY trackingNumber DESC limit 1");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $trackingNum = $row["trackingNumber"]+1;
    $stmt->close();

    $sql = "INSERT INTO trackinghistory (trackingNumber, statusOfPackage, ETA, currentLocation) VALUES ($trackingNum,
      $status, '$ETA', '$senderCity')";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: packageInfo.php?error=sqlerrortrackinghistory");
        exit();
    }
    else{
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);

    $packageID = 0;

    $stmt3 = $conn->prepare("SELECT packageID FROM package ORDER BY packageID DESC limit 1");
    $stmt3->execute();
    $result3 = $stmt3->get_result();
    $row3 = $result3->fetch_assoc();
    $packageID = $row3["packageID"] + 1;
    $stmt3->close();

    $sql = "INSERT INTO package (packageID, senderAddID, receiverAddID, fragility, containerType,
      signatureRequired, Pweight, departureDate, latestArrival, trackingNumberPackage, branchIDPackage, senderCustID) 
      VALUES ($packageID, $senderAddrID, $receiverAddrID, $fragility, $containerType, $signatureRequired, $weight,
      '$currentDate', '$currentDate', $trackingNum, $branch, $senderID)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: packageInfo.php?error=sqlerrorpackage");
        exit();
    }
    else{
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);

    $stmt = $conn->prepare("SELECT timestampID FROM timestampTable ORDER BY timestampID DESC limit 1");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $timestampID = $row["timestampID"]+1;
    $stmt->close();

    $sql = "INSERT INTO timestampTable (timestampID, trackingNumberTimestamp, timestampAddID, timestampDate) VALUES ($timestampID, $trackingNum, $senderAddrID, '$currentDate')";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: packageInfo.php?error=sqlerrortimestamp");
        exit();
    }
    else{
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: packageInfo.php?entry=success");
    exit();

}
else {
    header("Location: packageInfo.php?entry=fail");
    exit();
}

?>
