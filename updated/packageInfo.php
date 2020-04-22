<!DOCTYPE html> <!-- This is the employee page where they add tracking to database -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/about.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Package Information</title>
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
            <form class="info" action="package_process.php" method="post">
                <fieldset>
                    <legend>Package From</legend>


                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="First Name" required>

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Last Name" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>

                    <label for="addressline">Address Line</label>
                    <input type="text" id="mAddress" name="addressline" placeholder="Mailing Address" required>

                    <label for="addressline2">Address Line 2</label>
                    <input type="text" id="apartNumber" name="addressline2" placeholder="Apartment # (Optional)">

                    <label for="city1">City</label>
                    <input type="text" id="city1" name="city1" placeholder="City" required>

                    <label for="state1">State</label>
                    <select id="state1" name="state1" required>
                        <option value="" disabled selected hidden>Select a State</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Texas">Texas</option>
                    </select>
                    <label for="zip1">Zipcode</label>
                    <input type="text" id="zip1" name="zipcode1" placeholder="Zipcode" required>

                    <label for="branch">Closest Branch</label>
                        <select id="branch" name="branch" required>
                        <option value="" disabled selected hidden>Branch Location</option>
                        <option value="1">1 (Little Rock, Arkansas)</option>
                        <option value="2">2 (Conway, Arkansas)</option>
                        <option value="3">3 (Baton Rouge, Louisiana)</option>
                        <option value="4">4 (Lafayette, Lousiana)</option>
                        <option value="5">5 (Roswell, New Mexico)</option>
                        <option value="6">6 (Ruidoso, New Mexico)</option>
                        <option value="7">7 (Moore, Oklahoma)</option>
                        <option value="8">8 (Norman, Oklahoma)</option>
                        <option value="9">9 (Houston, Texas)</option>
                        <option value="10">10 (San Antonio, Texas)</option>
                    </select>
                    <label for="track">Tracking Number</label>
                    <input type="text" id="track" name="trackingNumber" placeholder="Tracking Number" required>

                    <label for="fragility">Fragility</label>
                    <select id="fragility" name="fragility" required>
                        <option value="" disabled selected hidden>Fragile or Not</option>
                        <option value="0"> Not Fragile</option>
                        <option value="1">Fragile</option>
                    </select>

                    <label for="container">Container Type</label>
                    <select id="container" name="containerType" required>
                        <option value="" disabled selected hidden>Type of Container</option>
                        <option value="0">Envelope</option>
                        <option value="1">Box</option>
                        <option value="2">Free/No Container</option>
                    </select>

                    <label for="signature">Signature Required?</label>
                    <select id="signature" name="signature" required>
                        <option value="" disabled selected hidden>Yes/No</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>

                    <label for="weight">Package Weight</label>
                    <input type="text" id="weight" name="weight" placeholder="Weight (in pounds)" required>

                    <label for="Current Date: "> Current Date: </label>
                    <input type="date" name="currentdate">

                    <label for="ETA"> Estimated Date of Arrival: </label>
                    <input type="date" name="eta">

                </fieldset>


                <fieldset>
                    <legend>Package To</legend>
                    <label for="fname2">First Name</label>
                    <input type="text" id="fname2" name="firstname2" placeholder="First Name" required>

                    <label for="lname2">Last Name</label>
                    <input type="text" id="lname2" name="lastname2" placeholder="Last Name" required>

                    <label for="addressline-2">Address Line 1</label>
                    <input type="text" id="addressline-2" name="addressline-2" placeholder="Mailing Address" required>

                    <label for="addressline2-2">Address Line 2</label>
                    <input type="text" id="apartNumber2" name="addressline2-2" placeholder="Apartment # (Optional)">

                    <label for="city2">City</label>
                    <input type="text" id="city2" name="city2" placeholder="City" required>

                    <label for="state2">State</label>
                    <select id="state2" name="state2" required>
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
                    <label for="zip2">Zipcode</label>
                    <input type="text" id="zip2" name="zipcode2" placeholder="Zipcode" required>


                </fieldset>
                <section>
                <button type="submit" name="package-submit">Submit</button>
                </section>
            </form>
        </div>
 </body>
</html>
