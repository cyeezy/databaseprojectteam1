<!DOCTYPE>

<html lang="en">
<head>

<link rel="stylesheet" href="css/form.css">
<title>Track Package</title>
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
<body>
<div class="track">
    <div class="form" method>
        <form class="search" action="showTrackingHistory.php" method="POST">
            <input type="text" name="tracking" placeholder="Tracking #">
            <button type="submit" name="display-history">Display</button>
        </form>
    </div>
</div>
</body>