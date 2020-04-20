<!DOCTYPE>

<html lang="en">
<head>

<link rel="stylesheet" href="css/form.css">
<title>Registration</title>
</head>

<body>
  <header>
 <nav class="fixed-nav-bar">
     <label class="logo">UH Post Office</label>
     <ul>
         <li><a href="index.html">Home</a></li>
         <li><a href="contact.html">FAQs</a></li>
         <li><a href="signup.php">Register/Sign-In</a></li>
     </ul>
 </nav>
      </header>
<div class="signin">
  <div class="form">
        <form class="register" action="signup_process.php" method="POST">
            <fieldset>
            <legend>Registration</legend>

            <?php
            if (isset($_GET['error'])){
              if($_GET['error'] == "emptyfields"){
                echo '<p class="signuperror">Please fill in all of the required fields.</p>';
              }
              else if ($_GET["error"] == "invalidmail") {
                echo '<p class="signuperror">Invalid e-mail.</p>';
              }
              else if ($_GET["error"] == "passwordCheck") {
                echo '<p class="signuperror">Your passwords do not match.</p>';
              }
              else if ($_GET["error"] == "emailused") {
                echo '<p class="signuperror">An account already exists with that email address.</p>';
              }
            }
            //else if ($_GET["signup"] == "success"){
            //  echo '<p class="signupsuccess">Signup successfull!</p>';
            // }
            // <input type="submit" id="signup-submit" value="Register"/>
            ?>

            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="phoneNum" placeholder="xxx-xxx-xxxx" REQUIRED>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password-repeat" placeholder="Repeat Password">

            <input type="text" name="addressline1" placeholder="Address Line 1">
            <input type="text" name="addressline2" placeholder="Address Line 2">
            <input type="text" name="city" placeholder="City">
            <input type="text" name="state" placeholder="State/Province">
            <input type="text" name="zip" placeholder="Zipcode">
            <button type="submit" name="signup-submit">Register</button>


            <p class="message">
                Already Registered? <a href="#">Login</a>
            </p>
          </fieldset>

        </form>



        <form class="login" action="login_process.php" method="POST">
            <fieldset>
              <legend>Login</legend>
            <input type="text" name ="loginemail" placeholder="Email" required/>
            <input type="password" name="loginpassword" placeholder="Password" required/>
            <select id="role" name="role" required>
                        <option value="" disabled selected hidden>Choose Role</option>
                        <option value="Customer">Customer</option>
                        <option value="Employee">Employee</option>
                        <option value="Manager">Manager</option>
            <input type="text" id="button" value=""/>
            <button type="submit" name="login-submit">Login</button>
            <p class="message">Not Registered? <a href="#">Register</a></p>
          </fieldset>
        </form>
    </div>
</div>

<body>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>

<script>
    $('.message a').click(function () {
        $('form').animate({ height: "toggle", opacity: "toggle" }, "slow")
    });
</script>

</html>
