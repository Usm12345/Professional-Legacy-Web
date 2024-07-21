<?php

require_once 'vendor/autoload.php';
require_once 'db_connection.php';

// init configuration
$clientID = '812885855279-apmgddbnh7jvlkqoatqqvpllmpjjab48.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://professionallegacy.org/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
//connect to database
$hostName = "localhost";
$dbUser = "u556725888_users";
$dbPassword = "Leo$123456";
$dbName = "u556725888_users";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// You can remove the PDO connection if not needed
 try {
     $pdo = new PDO("mysql:host=$hostName;dbname=$dbName", $dbUser, $dbPassword);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
     die("Error: " . $e->getMessage());
 }
?>
