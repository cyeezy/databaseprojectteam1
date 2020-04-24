<?php

//UPDATING TRACKING HISTORY
if (isset($_POST['update-submit'])) {
  require 'connectDB.php';
    
    $trackingNum = $_POST["trackingNumber"];
    $branch = $_POST["branch"];
    $arrivalDate = $_POST["arrivaldate"];
    
    $stmt = $conn->prepare("SELECT timestampID FROM timestampTable ORDER BY timestampID DESC limit 1");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $timestampID = $row["timestampID"]+1;
    $stmt->close();

    if ($branch == 11){
      $stmt = $conn->prepare("SELECT receiverAddID FROM package WHERE trackingNumberPackage = $trackingNum");
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();
      $addrID = $row["receiverAddID"];
      $stmt->close();
    }else{
      $stmt = $conn->prepare("SELECT branchLocation FROM branch WHERE branchID = $branch");
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();
      $addrID = $row["branchLocation"];
      $stmt->close();
    }

    $sql = "INSERT INTO timestampTable (timestampID, trackingNumberTimestamp, timestampAddID, timestampDate) VALUES ($timestampID, $trackingNum, $addrID, '$arrivalDate')";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: updateInfo.php?error=timestampnotinserted");
      exit();
    }
    else{
      mysqli_stmt_execute($stmt);
    }

    //Update the package's branch and latest arrival
    $stmt = $conn->prepare("UPDATE package SET branchIDPackage = $branch, latestArrival = '$arrivalDate' WHERE trackingNumberPackage = $trackingNum");
    $stmt->execute();

    header('location: updateInfo.php?update=success');
    exit();
}
?>
