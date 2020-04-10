<!DOCTYPE html> <!-- This is the employee page where they add tracking to database -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/about.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career Registration</title>
</head>

<body>
    <header>
        <nav class="fixed-nav-bar">
            <label class="logo">UH Post Office</label>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">FAQs</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">

    <div class="package">
        <fieldset>
        <legend>Career Registration</legend>
        <form class="info" method="POST" action="employeeRegistration_process.php">

            <label for="email1">Email</label>
            <input type="email" id="email1" name="email1" placeholder="Email" required />

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First Name" required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last Name" required>

            <label for="mAddress">Mailing Address</label>
            <input type="text" id="mAddress" name="mailingAddress" placeholder="Mailing Address" required>

            <label for="apartNumber">Apartment #</label>
            <input type="text" id="apartNumber" name="apartmentNumber" placeholder="Apartment # (Optional)">

            <label for="city">City</label>
            <input type="text" id="city" name="city1" placeholder="City" required>

            <label for="country">State</label>
            <select id="country" name="state" required>
                <option value="" disabled selected hidden>Select a State</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Floria">Floria</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
            </select>
            <label for="zip">Zipcode</label>
            <input type="text" id="zip" name="zipcode" placeholder="Zipcode" required>

            <label for="position">Position</label>
            <select id="position" name="position" required>
                <option value="Role" disabled selected hidden>Select Position</option>
                <option value="Front Desk">Front Desk</option>
                <option value="Route Driver">Route Driver</option>
                <option value="Back End">Back End</option>

            </select>

            <section>
                <input type="submit" value="Submit" />
                <input type="reset" value="Clear" />
            </section>
        </form>
        </fieldset>
    </div>
</div>


</body>
</html>
