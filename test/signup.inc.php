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
         <li><a href="contact.php">FAQs</a></li>
         <li><a href="signup.inc.php">Register/Sign-In</a></li>
     </ul>
 </nav>
      </header>
<div class="signin">
  <div class="form">
        <form class="register" action="customerRegistration_process.php" method="POST">
            <fieldset>
            <legend>Registration</legend>
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" id="btn" value="Register"/>

            <p class="message">
                Already Registered? <a href="#">Login</a>
            </p>
          </fieldset>
        </form>

        <form class="login" action="customerLogin_process.php" method="POST">
            <fieldset>
              <legend>Login</legend>
            <input type="email" name ="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" id="button" value="Login"/>
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
