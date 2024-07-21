<?php
require_once 'config.php';

// ... Your existing PHP code for user display and management ...

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['display_users'])) {
        $activeSection = 'display_users';
    } elseif (isset($_POST['traffic'])) {
        $activeSection = 'traffic';
    } 
} else {
    // Default to display_users section on page load
    $activeSection = 'display_users';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            zoom:80%;
        }
        

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        main {
            display: flex;
            flex: 1;
        }

        nav {
            width: 200px;
            background-color: #555;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        section {
            flex: 1;
            max-width: 2100px;
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        form {
            display: inline-block;
            margin-top: 5px;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
        }

        a:hover {
            color: #555;
        }
    </style>
</head>
<body>

<header style="position: relative; width:2400px;">
        <a href="admin_logout.php" style="position: absolute; top: 10px; left: 1430px; color: white; text-decoration: none; font-weight: bold;">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        
        <h2 style="text-align: center;">Admin Dashboard</h2>
    </header>

    <main>
    <nav>
            <form action="" method="post">
                <button type="submit" name="display_users">Display Users / Permissions</button>
                <button type="submit" name="traffic">Traffic</button>
            </form>
        </nav>

       
     <section id="display_users" <?php echo ($activeSection === 'display_users' ) ? 'style="display: block;"' : 'style="display: none;"'; ?>>
        <?php
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
        
            // Perform database insertion to add a new user
            $query = "INSERT INTO users (full_name, email) VALUES (:full_name, :email)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        }
        
        // Handle form submission for removing a user
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_user'])) {
            $user_id = $_POST['user_id'];
        
            // Perform database deletion to remove the specified user
            $query = "DELETE FROM users WHERE id = :user_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
        }
        // Check if the user is an admin
        if (!isset($_SESSION['admin_id'])) {
            // Redirect to admin login page if not an admin
            header("Location: admin_login.php");
            exit();
        }
        require_once 'config.php';
        // Handle form submissions to permit or revoke user permission
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            $action = $_POST['action'];
        
            // Perform database update to change user permission status
            // Replace this with your actual database connection and update query
        $hostName = "localhost";
        $dbUser = "u556725888_users";
        $dbPassword = "Leo$123456";
        $dbName = "u556725888_users";
            try {
                $pdo = new PDO("mysql:host=$hostName;dbname=$dbName", $dbUser, $dbPassword);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        
            if ($action === 'permit') {
                $query = "UPDATE users SET is_permitted = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke') {
                $query = "UPDATE users SET is_permitted = 0 WHERE id = :user_id";
            }
            if ($action === 'permit2') {
                $query = "UPDATE users SET is_permitted2 = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke2') {
                $query = "UPDATE users SET is_permitted2 = 0 WHERE id = :user_id";
            }
            if ($action === 'permit3') {
                $query = "UPDATE users SET is_permitted3 = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke3') {
                $query = "UPDATE users SET is_permitted3 = 0 WHERE id = :user_id";
            }
            if ($action === 'permit4') {
                $query = "UPDATE users SET is_permitted4 = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke4') {
                $query = "UPDATE users SET is_permitted4 = 0 WHERE id = :user_id";
            }
            if ($action === 'permit5') {
                $query = "UPDATE users SET is_permitted5 = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke5') {
                $query = "UPDATE users SET is_permitted5 = 0 WHERE id = :user_id";
            }
            if ($action === 'permit6') {
                $query = "UPDATE users SET is_permitted6 = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke6') {
                $query = "UPDATE users SET is_permitted6 = 0 WHERE id = :user_id";
            }
            if ($action === 'permit7') {
                $query = "UPDATE users SET is_permitted7 = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke7') {
                $query = "UPDATE users SET is_permitted7 = 0 WHERE id = :user_id";
            }
            if ($action === 'permit8') {
                $query = "UPDATE users SET is_permitted8 = 1 WHERE id = :user_id";
            } elseif ($action === 'revoke8') {
                $query = "UPDATE users SET is_permitted8 = 0 WHERE id = :user_id";
            }
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            header("Location: admin_manage_permissions.php");
          
        }
        $query = "SELECT id, full_name, email, is_permitted ,is_permitted2 ,is_permitted3 ,is_permitted4 ,is_permitted5 ,is_permitted6 ,is_permitted7 ,is_permitted8  FROM users";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Data Analysis with Excel</th>
        <th>Financial Modeling (FMVA)</th>
        <th>Preparation of Financial Statements</th>
        <th>Audit of Financial Statements</th>
        <th>BIG DATA WITH POWER BI</th>
        <th>Freelancing (Fiverr + Upwork)</th>
        <th>Taxation (GULF)</th>
        <th>Taxation (Pakistan)</th>
        <th>Action</th>
        <th>Action2</th>
        <th>Action3</th>
        <th>Action4</th>
        <th>Action5</th>
        <th>Action6</th>
        <th>Action7</th>
        <th>Action8</th>
        </tr>";
    
        foreach ($users as $user) {
            echo "<tr>
            <td>{$user['id']}</td>
            <td>{$user['full_name']}</td>
            <td>{$user['email']}</td>
            <td>{$user['is_permitted']}</td>
            <td>{$user['is_permitted2']}</td>
            <td>{$user['is_permitted3']}</td>
            <td>{$user['is_permitted4']}</td>
            <td>{$user['is_permitted5']}</td>
            <td>{$user['is_permitted6']}</td>
            <td>{$user['is_permitted7']}</td>
            <td>{$user['is_permitted8']}</td>
            <td>";
            if ($user['is_permitted']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
                   
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
            echo"<td>";
            if ($user['is_permitted2']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke2'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit2'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
            echo"<td>";
            if ($user['is_permitted3']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke3'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit3'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
            echo"<td>";
            if ($user['is_permitted4']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke4'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit4'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
            echo"<td>";
            if ($user['is_permitted5']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke5'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit5'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
            echo"<td>";
            if ($user['is_permitted6']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke6'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit6'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
            echo"<td>";
            if ($user['is_permitted7']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke7'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit7'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
               echo"<td>";
            if ($user['is_permitted8']) {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='revoke8'>
                        <button type='submit'>Revoke Permission</button>
                      </form>";
            } else {
                echo "<form action='' method='post'>
                        <input type='hidden' name='user_id' value='{$user['id']}'>
                        <input type='hidden' name='action' value='permit8'>
                        <button type='submit'>Grant Permission</button>
                      </form>";
            }
            echo "</td>";
            
            

        }
        echo "</table>";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <section id="add_remove_users" >
    <h2>Add / Remove Users</h2>

    <!-- Form for Adding Users -->
    <form action="" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <!-- Add password confirmation field -->
        <label for="password_repeat">Confirm Password:</label>
        <input type="password" name="password_repeat" required>

        <button type="submit" name="add_user">Add User</button>
    </form>


        <form action="" method="post">
            <label for="id">User ID to Remove:</label>
            <input type="text" name="id" required>

            <button type="submit" name="remove_user">Remove User</button>
        </form>
        <?php
    require_once "db_connection.php";
    require_once 'vendor/autoload.php';

    if (isset($_POST["add_user"])) {
        $fullName = $_POST["full_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["password_repeat"]; // Add this line

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
     
                $errors = array();
                
                if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                 array_push($errors,"All fields are required");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 array_push($errors, "Email is not valid");
                }
                if (strlen($password)<8) {
                 array_push($errors,"Password must be at least 8 charactes long");
                }
                if ($password!==$passwordRepeat) {
                 array_push($errors,"Password does not match");
                }
                require_once "db_connection.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount>0) {
                 array_push($errors,"Email already exists!");
                }
                if (count($errors)>0) {
                 foreach ($errors as  $error) {
                     echo "<div class='alert alert-danger'>$error</div>";
                 }
                }else{
                 
                 $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
                 $stmt = mysqli_stmt_init($conn);
                 $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                 if ($prepareStmt) {
                     mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                     mysqli_stmt_execute($stmt);
                     echo "<div class='alert alert-success'>You are registered successfully.</div>";
                     header("Location: admin_manage_permissions.php");
                     exit();
                 }else{
                     die("Something went wrong");
                 }
                }
                
                header("Location: admin_manage_permissions.php");

     
             }
            if (isset($_POST["remove_user"])) {
    $userIdToRemove = $_POST["id"];

    // Debugging statements
    echo "SQL Query: DELETE FROM users WHERE id = $userIdToRemove<br>";
    echo "User ID to Remove: $userIdToRemove<br>";

    // Implement the logic to remove the user with the given user_id
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $userIdToRemove); // Assuming user_id is an integer
        mysqli_stmt_execute($stmt);
        // Check if any rows were affected
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Redirect to admin_manage_permissions.php before any output
            header("Location: admin_manage_permissions.php");
            exit(); // Ensure script execution stops after redirection
        } else {
            echo "<div class='alert alert-danger'>User not found or could not be removed.</div>";
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Something went wrong");
    }
}

            
        ?>    
    </section>
    </section>  
<!-- ... (Your existing HTML structure) -->
<section id="traffic" <?php echo ($activeSection === 'traffic') ? 'style="display: block;"' : 'style="display: none;"'; ?>>
    <h2>Traffic Section</h2>    
    <p>Graphs and boxes displaying website traffic will go here.</p>

    <canvas id="trafficChart" width="400" height="200"></canvas>

    <script>
        // Sample data for the chart (replace this with your actual data)
        var chartData = {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: "Monthly Visitors",
                backgroundColor: "rgba(75,192,192,0.2)",
                borderColor: "rgba(75,192,192,1)",
                borderWidth: 1,
                data: [65, 59, 80, 81, 56, 55]
            }]
        };

        // Get the chart canvas element
        var ctx = document.getElementById('trafficChart').getContext('2d');

        // Create a bar chart
        var trafficChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
        });
    </script>
</section>

    </main>

</body>
</html>
