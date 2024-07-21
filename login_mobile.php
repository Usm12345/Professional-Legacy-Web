<?php
// Allow requests from any origin
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get data from POST request
    $fullName = $_POST["fullname"];
    $password = $_POST["password"];

    $errors = array();

    if (empty($fullName) OR empty($password)) {
        array_push($errors, "Full name and password are required");
    }

    // Database configuration
    require_once "db_connection.php";

    // If no errors, verify user credentials
    if (empty($errors)) {
        // Query database to check if user exists
        $sql = "SELECT * FROM users WHERE full_name = ?";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $fullName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                // Verify password
                if (password_verify($password, $row['password'])) {
                    // Password is correct, login successful
                    // Fetch permissions
                    $permissions = array(
                        "is_permitted" => $row['is_permitted'],
                        "is_permitted2" => $row['is_permitted2'],
                        "is_permitted3" => $row['is_permitted3'],
                        "is_permitted4" => $row['is_permitted4'],
                        "is_permitted5" => $row['is_permitted5'],
                        "is_permitted6" => $row['is_permitted6'],
                        "is_permitted7" => $row['is_permitted7'],
                        "is_permitted8" => $row['is_permitted8'],
                    );
                    // Prepare response
                    $response = array(
                        "status" => "success",
                        "message" => "Login successful",
                        "permissions" => $permissions
                    );
                    echo json_encode($response);
                    exit();
                } else {
                    // Password is incorrect
                    echo json_encode(array("status" => "error", "message" => "Incorrect password"));
                    exit();
                }
            } else {
                // User not found
                echo json_encode(array("status" => "error", "message" => "User not found"));
                exit();
            }
        } else {
            // SQL query preparation failed
            echo json_encode(array("status" => "error", "message" => "Database error"));
            exit();
        }
    } else {
        // Errors in form submission
        echo json_encode(array("status" => "error", "message" => $errors));
        exit();
    }
} else {
    // Form not submitted
    echo json_encode(array("status" => "error", "message" => "Form not submitted"));
    exit();
}
?>
