﻿<!DOCTYPE html> <!-- This is the employee page where they add tracking to database -->
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
        <form class="info" method="POST" action="employeeSignup_process.php">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First Name" required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last Name" required>

            <label for="email1">Email</label>
            <input type="text" id="email1" name="email1" placeholder="Email" required />

            <label for="phoneNum">Phone Number</label>
            <input type="text" id="phoneNum" name="phone" placeholder="xxx-xxx-xxxx" required />

            <label for="branchNumber">Closest Branch</label>
                <select id="branchNumber" name="branchNumber" required>
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

            <label for="password">Password</label>
            <input type="text" id="password" name="password" placeholder="Password" required>

            <label for="password-repeat">Repeat Password</label>
            <input type="text" id="password-repeat" name="repeat-password" placeholder="Repeat Password" required>

            <label for="position">Role</label>
            <select id="position" name="role" required>
                <option value="Role" disabled selected hidden>Select Position</option>
                <option value="Employee">Employee</option>
                <option value="Manager">Manager</option>

            </select>

            <button type="submit" name="employee-signup-submit">Submit</button>
        </form>
        </fieldset>
    </div>
</div>


</body>
</html>
