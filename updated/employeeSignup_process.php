<?php

if (isset($_POST['employee-signup-submit'])) {

    require 'connectDB.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email1'];
    $phoneNum = $_POST['phone'];
    $branch = $_POST['branchNumber'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat-password'];
    $role = $_POST['role'];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNum) || empty($role) || empty($branch) || empty($password) || empty($passwordRepeat)){
        header("Location: employeeRegistration.php?error=emptyfield&name=".$firstName.$lastName."&mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: employeeRegistration.php?error=invalidmail&name=".$firstName.$lastName);
        exit();
    }
    else if ($password !== $passwordRepeat) {
        header("Location: employeeRegistration.php?error=passwordcheck&name=".$firstName.$lastName."&mail=".$email);
        exit();
    }
    else {
        $sql = "SELECT employeeEmail FROM employee WHERE employeeEmail='$email'";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: employeeRegistration.php?error=sqlerroremail");
            exit();
        }
        else{
            //mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: employeeRegistration.php?error=emailused&mail=".$email);
                exit();
            }
            else{

                $stmt1 = $conn->prepare("SELECT employeeID FROM employee ORDER BY employeeID DESC limit 1");
                $stmt1->execute();
                $result1 = $stmt1->get_result();
                $row1 = $result1->fetch_assoc();
                $employID = $row1["employeeID"] + 1;
                $stmt1->close();

                //Do stuff to get correct role for manager variable
                if ($role == "Manager"){
                    $manager = 0; //Manager
                }else{
                    $manager = 1; //Employee
                }

                $drugTest = 1; //default is true, may be removed

                $sql = "INSERT INTO employee (employeeID, manager, firstName, lastName, employeePhone, 
                    Epassword, Ebranch, employeeEmail) VALUES ($employID, $manager, '$firstName', 
                    '$lastName', '$phoneNum', '$password', $branch, '$email')";


                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: employeeRegistration.php?error=sqlerroremployee");
                    exit();
                }
                else{
                   // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    //mysqli_stmt_bind_param($stmt, "iiisssssi", $employID, $dept, $manager, $firstName, $lastName,
                        //$phoneNum, $hashedPwd, $branch);
                    mysqli_stmt_execute($stmt);
                    header("Location: employeeRegistration.php?signup=success");
                    exit();
                }

            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else {
    header("Location: employeeRegistration.php?signup=fail");
    exit();
}

?>