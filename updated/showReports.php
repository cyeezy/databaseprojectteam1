<?php

require 'connectDB.php';

if (isset($_POST['show-reports'])) {

    $branch = $_POST['branchName'];
    $startDate = $_POST['datefrom'];
    $endDate = $_POST['dateto'];

}

    $numberDays = (strtotime($endDate) - strtotime($startDate))/60/60/24;

    $stmt = $conn->prepare("SELECT * FROM package WHERE branchIDPackage = $branch AND latestArrival BETWEEN '$startDate' AND '$endDate'");
    $stmt->execute();
    $resultPackage = $stmt->get_result();
    $stmt->close();

    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM package WHERE branchIDPackage = $branch AND latestArrival BETWEEN '$startDate' AND '$endDate'");
    $stmt->execute();
    $result = $stmt->get_result();
    $packageCountBranchRange = $result->fetch_assoc();
    $stmt->close();

    $stmt = $conn->prepare("SELECT AVG(Pweight) AS average FROM package WHERE branchIDPackage = $branch AND latestArrival BETWEEN '$startDate' AND '$endDate'");
    $stmt->execute();      //Get weight attribute name changed
    $result = $stmt->get_result();
    $packageAverageWeightBranchRange = $result->fetch_assoc();
    $stmt->close();

    $stmt = $conn->prepare("SELECT * FROM employee where Ebranch = $branch");
    $stmt->execute();
    $resultEmployee = $stmt->get_result();
    $stmt->close();

    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM employee where Ebranch = $branch");
    $stmt->execute();
    $result = $stmt->get_result();
    $employeeCountBranch = $result->fetch_assoc();
    $stmt->close();

    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM employee");
    $stmt->execute();
    $result = $stmt->get_result();
    $employeeCountTotal = $result->fetch_assoc();
    $stmt->close();

    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM branch");
    $stmt->execute();
    $result = $stmt->get_result();
    $branchCountTotal = $result->fetch_assoc();
    $stmt->close();

    $avgPackagePerDay = $packageCountBranchRange["total"] / $numberDays;

?>


<!DOCTYPE HTML>

<html lang="en">
<head>

<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Track Package</title>
</head>

<body>
  <header>
 <nav class="fixed-nav-bar">
     <label class="logo">UH Post Office</label>
     <ul>
         <li><a href="index.html">Home</a></li>
         <li><a href="index.html">Logout</a></li>
     </ul>
 </nav>
      </header>
<body>

  <div class="row no-gutters">

          <div class="col no-gutters">

                <div class="leftside">
                    <h1>
                      Reports: Packages
                    </h1>

                    <?php

                     if ($resultPackage->num_rows > 0){

                        echo "Total number of packages at this branch during this time: " . $packageCountBranchRange['total'] . "<br>";
                        echo "Average weight of the packages that fit the given: " . $packageAverageWeightBranchRange['average'] . " pounds" . "<br>";
                        echo "Average packages per day in this time period: " .$avgPackagePerDay . "<br>";
                        
                        while($row = $resultPackage->fetch_assoc()){
                            echo "id: " . $row["packageID"]. " - Tracking Number: " . $row["trackingNumberPackage"]. "<br>";
                        }
                    }else{
                        echo "0 results.";
                    }

                    ?>

                </div>
          </div>

          <div class="col no-gutters">

                <div class="rightside">
                  <h1>
                    Reports: Employees
                  </h1>

                  <?php

                     if ($resultEmployee->num_rows > 0){
                    
                        echo "Total number of employees at this branch: " . $employeeCountBranch['total'] . "<br>";

                        while($row = $resultEmployee->fetch_assoc()){
                            echo "id: " . $row["employeeID"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
                        }
                    }else{
                        echo "0 results.";
                    }

                  ?>

                </div>
          </div>
  </div>
</body>