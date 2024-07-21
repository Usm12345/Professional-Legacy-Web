<?php
session_start();

// Check if the admin is already logged in
if (isset($_SESSION['admin_id'])) {
    // Redirect to admin dashboard if already logged in
    header("Location: admin_manage_permissions.php");
    exit();
}

// Set admin credentials (replace with your actual credentials)
$admin_username = 'admin';
$admin_password = 'adminpass';

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Validate credentials
    if ($input_username === $admin_username && $input_password === $admin_password) {
        // Set admin session
        $_SESSION['admin_id'] = 1;  // Use a unique identifier for the admin
        header("Location: admin_manage_permissions.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

    <form method="post">
        <h2>Admin Login</h2>

        <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

</body>
</html>
