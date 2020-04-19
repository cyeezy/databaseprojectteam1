<?php

if (isset($_POST['signup-submit'])) {

    require 'connectDB.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-repeat'];

    $addressline = $_POST['addressline1'];
    $addressline2 = $_POST['addressline2'];
    $City = $_POST['city'];
    $State = $_POST['state'];
    $Zipcode = $_POST['zip'];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNum) || empty($password) || empty($passwordRepeat)){
        header("Location: signup.php?error=emptyfield&name=".$firstName.$lastName."&mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?error=invalidmail&name=".$firstName.$lastName);
        exit();
    }
    else if ($password !== $passwordRepeat) {
        header("Location: signup.php?error=passwordcheck&name=".$firstName.$lastName."&mail=".$email);
        exit();
    }
    else {
        $sql = "SELECT emailAddress FROM customer WHERE emailAddress='$email'";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) { //This is the error
            header("Location: signup.php?error=sqlerroremail");
            exit();
        }
        else{
            //mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: signup.php?error=emailused&mail=".$email);
                exit();
            }
            else{
                $stmt2 = $conn->prepare("SELECT * FROM addressTable WHERE addressLine1 = '$addressline'");
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $row2 = $result2->fetch_assoc();

                if (!$result2->num_rows > 0) {
                    $stmt2->close();

                    $stmt4 = $conn->prepare("SELECT addressID FROM addressTable ORDER BY 
                        addressID DESC limit 1");
                    $stmt4->execute();
                    $result4 = $stmt4->get_result();
                    $row4 = $result4->fetch_assoc();
                    $addrID = $row4["addressID"]+1;
                    $stmt4->close();
                    
                    $sqlAddr = "INSERT INTO addressTable (addressID, addressLine1, addressLine2, 
                        City, StateProvince, Zipcode) VALUES ($addrID, '$addressline', '$addressline2', 
                        '$City', '$State', '$Zipcode')";
                
                    $stmtAddr = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmtAddr, $sqlAddr)){
                        header("Location: signup.php?error=sqlerroraddress");
                        exit();
                    }
                    else{
                        mysqli_stmt_execute($stmtAddr);
                    }
                    mysqli_stmt_close($stmtAddr);
                }else{
                    $addrID = $row2["addressID"];
                    $stmt2->close();

                }

                $customID = 0;

                $stmt3 = $conn->prepare("SELECT customerID FROM customer ORDER BY customerID DESC limit 1");
                $stmt3->execute();
                $result3 = $stmt3->get_result();
                $row3 = $result3->fetch_assoc();
                //$customID = 0;
                $customID = $row3["customerID"] + 1;
                $stmt3->close();

                $receivingPackage = 0;
                $sendingPackage = 0;

                $sql = "INSERT INTO customer (customerID, firstName, lastName, emailAddress, customerPhone, receivingPackage, sendingPackage, addressID, Cpassword) VALUES ($customID, '$firstName', '$lastName', '$email', '$phoneNum', $receivingPackage, $sendingPackage, $addrID, '$password')";
                 //Epassword and Ebranch for Employee
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: signup.php?error=sqlerrorcustomer");
                    exit();
                }
                else{
                    //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    //mysqli_stmt_bind_param($stmt, "issssiiis", $customID, $firstName, $lastName, $email, $phoneNum, $receivingPackage, $sendingPackage, $addrID, $hashedPwd);
                    mysqli_stmt_execute($stmt);

                    header("Location: signup.php?signup=success");
                    exit();
                }

            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else {
    header("Location: signup.php?signup=fail");
    exit();
}

?>