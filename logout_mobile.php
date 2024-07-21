<?php
// Allow requests from any origin
header("Access-Control-Allow-Origin: *");

// Allow the following methods from any origin
header("Access-Control-Allow-Methods: POST");

// Allow the following headers from any origin
header("Access-Control-Allow-Headers: Content-Type");

// Allow credentials (cookies, authorization headers, etc.) to be included in the request
header("Access-Control-Allow-Credentials: true");

// Set the content type of the response
header("Content-Type: application/json");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Clear session data
    session_start();
    session_unset();
    session_destroy();

    // Send JSON response
    echo json_encode(array("status" => "success", "message" => "Logout successful"));
    exit();
} else {
    // Send JSON response if request method is not POST
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
    exit();
}
?>
