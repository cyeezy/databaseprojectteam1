<link rel="stylesheet" href="css/form.css">
<div class="signin">
    <div class="form">
        <form class="register" action="/action_page.php">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="mail" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <input type="button" id="btn" value="submit" onclick="location.href = 'index.php';" />

            <p class="message">
                Already Registered? <a href="#">Login</a>
            </p>

        </form>

        <form class="login">
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
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
