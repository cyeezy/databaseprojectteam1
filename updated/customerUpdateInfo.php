<!DOCTYPE html> <!-- This is the employee page where they add tracking to database -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/about.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Customer Information</title>
</head>
<body>
    <header>
        <nav class="fixed-nav-bar">
            <div class="row-fluid">
                <label class="logo">UH Post Office</label>
                <ul>
                    <li><a href="employeeChoice.html">Home</a></li>
                    <li><a href="chooseCustomerAction.html">Account</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
        <div class="package">
            <form class="info" action="package_process.php" method="post">
                <fieldset>
                    <legend>User Information</legend>

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="First Name">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Last Name">

                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="password" placeholder="Password">

                    <label for="mAddress">Mailing Address</label>
                    <input type="text" id="mAddress" name="mailingAddress" placeholder="Mailing Address">

                    <label for="apartNumber">Apartment #</label>
                    <input type="text" id="apartNumber" name="apartmentNumber" placeholder="Apartment # (Optional)">

                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="City">

                    <label for="state">State</label>
                    <select id="state" name="state">
                        <option value="" disabled selected hidden>Select a State</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Texas">Texas</option>
                    </select>
                    <label for="zip">Zipcode</label>
                    <input type="text" id="zip" name="zipcode1" placeholder="Zipcode">
                </fieldset>
                <section>
                    <input type="submit" value="Update" />
                    <input type="reset" value="Clear" />
                </section>
            </form>
        </div>
 </body>
</html>
