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

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($fullName) OR empty($password)) {
        array_push($errors, "Full name and password are required");
    }
   
    // Database configuration
    require_once "db_connection.php";

    // If no errors, insert user into database
    if (empty($errors)) {
        // Insert user into database
        $sql = "INSERT INTO users (full_name, password) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $fullName, $passwordHash);
            mysqli_stmt_execute($stmt);

            // Fetch the inserted user to get permissions
            $last_id = mysqli_insert_id($conn);
            $sql = "SELECT is_permitted, is_permitted2, is_permitted3, is_permitted4, is_permitted5, is_permitted6, is_permitted7, is_permitted8 FROM users WHERE id = ?";
            if ($stmt = mysqli_stmt_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "i", $last_id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
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

                    // Return success response with permissions
                    echo json_encode(array(
                        "status" => "success",
                        "message" => "You are registered successfully",
                        "permissions" => $permissions
                    ));
                    exit();
                }
            } else {
                echo json_encode(array("status" => "error", "message" => "Something went wrong while fetching permissions"));
                exit();
            }
        } else {
            echo json_encode(array("status" => "error", "message" => "Something went wrong"));
            exit();
        }
    } else {
        echo json_encode(array("status" => "error", "message" => $errors));
        exit();
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Form not submitted"));
    exit();
}
?>
