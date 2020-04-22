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
                    <legend>Update Information</legend>

                    <label for="track">Tracking Number</label>
                    <input type="text" id="track" name="trackingNumber" placeholder ="Tracking Number" required>

                    <label for="branch">Branch</label>
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

                    <label for="Date of Arrival: "> Date of Arrival: </label>
                    <input type="date" name="arrivaldate">


                </fieldset>

                <section>
                    <button type="submit" name="update-submit">Submit</button>
                    <input type="reset" value="Clear" />
                </section>
            </form>
        </div>
 </body>
</html>
