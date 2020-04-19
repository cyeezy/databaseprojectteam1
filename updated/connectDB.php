<?php

//$servername = "us-cdbr-iron-east-01.cleardb.net";
//$dBUsername = "b378350c554eb4";
//$dBPassword = "9f137451";
//$dBName = "heroku_277f5aee5998edf";

$servername = "sp6xl8zoyvbumaa2.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername = "us9rcqvdt1k6137y";
$dBPassword = "jt7zldotnufi1g10";
$dBName = "o3qjg9uzlxrt0uob";

//$servername = "localhost";
//$sBUsername = "root";
//$dBPassword = "";
//$dBName = "testing";

$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}