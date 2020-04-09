<html lang=en>
<head>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Register/Log-In</title>
</head>
    <header>
        <nav class="fixed-nav-bar">
            <label class="logo">UH Post Office</label>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">Track Package </a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="contact.php">FAQs</a></li>
            </ul>
        </nav>
    </header>
    <br />

    <div class="signin">
        <div class="form">
            <form class="register" action="/action_page.php">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="mail" placeholder="Email" required>
                <input type="password" name="pass" placeholder="Password" required>
                <input type="submit" id="btn" value="submit" onclick="location.href = 'index.php';" />

                <p class="message">
                    Already Registered? <a href="#">Login</a>
                </p>
            </form>

            <form class="login">
                <input type="text" placeholder="Email" required/>
                <input type="password" placeholder="Password" required>
                <input type="button" id="button" value="Login" onclick="location.href = 'index.php';" />
                <p class="message">Not Registered? <a href="#">Register</a></p>
            </form>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>

    <script>
        $('.message a').click(function () {
            $('form').animate({ height: "toggle", opacity: "toggle" }, "slow")
        });
    </script>

</body>
</html>
