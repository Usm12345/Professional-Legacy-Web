<?php
$hostName = "localhost";
$dbUser = "u556725888_users";
$dbPassword = "Leo$123456";
$dbName = "u556725888_users";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>