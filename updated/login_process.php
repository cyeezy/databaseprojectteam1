<?php

if(isset($_POST['login-submit'])){

    require 'connectDB.php';

    $mailuid = $_POST['loginemail'];
    $password = $_POST['loginpassword'];
    $role = $_POST['role'];

    if (empty($mailuid) || empty($password)){
        header("Location: signup.php?error=emptyfields");
        exit();
    }
    else{
        
        if ($role == 'Customer'){
            $sql = "SELECT * FROM customer WHERE emailAddress='$mailuid' AND Cpassword='$password';";
        }else{
            $sql = "SELECT * FROM employee WHERE employeeEmail='$mailuid' AND Epassword='$password';";
        }
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: signup.php?error=sqlerroremail");
            exit();
        }
        else{

            //mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            //header("Location: signup.php?error=test".$stmt);
            //exit();
            if ($row = mysqli_fetch_assoc($result)) {
                //if ($role == 'Customer'){
                //    $pwdCheck = password_verify($password, $row['Cpassword']);
                //}else{
                //    $pwdCheck = password_verify($password, $row['Epassword']);
                //}
                //if ($pwdCheck == false){
                //    header("Location: signup.php?error=wrongpwd");
                //    exit();
                //}
                //else if ($pwdCheck == true){
                //  session_start();
                //  $_SESSION['userId'] = $row['idUsers'];
                //  $_SESSION['userUid'] = $row['uidUsers'];

                if ($role == 'Employee'){
                    header("Location: employeeChoice.html"); //Change to employee page
                }else if ($role == 'Customer'){
                    header("Location: customerSignedIn.html");
                }else{
                    header("Location: managerSignedIn.html");
                }
                exit();
                //}
                //else{
                //    header("Location: signup.php?error=wrongpwd");
                //    exit();
                //}
            }
            else{
                header("Location: signup.php?error=nouser");
                exit();
            }

        }
    }
}
else{
    header("Location: signup.php");
    exit();
}