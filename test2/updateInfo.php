<!DOCTYPE html> <!-- This is the employee page where they add tracking to database -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/updateInfo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Package</title>
</head>

<body>
    <header>
        <nav class="fixed-nav-bar">
            <div class="row-fluid">
                <label class="logo">UH Post Office</label>
                <ul>
                    <!-- going to need abs reference below-->
                    <li><a href="employeeChoice.html">Add/Update</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

        <div class="package">
            <form class="info" action="updateInfo_process.php" method="post" >
                <fieldset>
                    <legend>Update Information</legend

                    <label for="track">Tracking Number</label>
                    <input type="text" id="track" name="trackingNumber" placeholder ="Tracking Numer" required>

                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="City" required>

                    <label for="state">State</label>
                    <select id="state" name="state" required>
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


                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="" disabled selected hidden>Choose a status</option>
                        <option value="Shipping">Shipping</option>
                        <option value="Out For Delivery">Out For Delivery</option>
                        <option value="Delivered">Delivered</option>

                    </select>


                </fieldset>

                <section>
                    <input type="submit" value="Submit" />
                    <input type="reset" value="Clear" />
                </section>
            </form>
        </div>
 </body>
</html>
