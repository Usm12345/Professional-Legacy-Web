<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
}
require_once 'vendor/autoload.php';
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href= "css/registerglobals.css" />
    <link rel="stylesheet" href= "css/registerstyle.css" />
        <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<style>
 @media only screen and (max-width: 768px) {
     .register .div {
    position: absolute;
    width: 85px;
    top: 115px;
    left: -167px;
    font-family: "League Spartan", Helvetica;
    font-weight: 700;
    color: transparent;
    font-size: 42px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}
.register .image {
    position: absolute;
    width: 0px;
    height: 0px;
    /* top: 200px; */
    left: -459px;
    object-fit: cover;
}
.register .text-wrapper {
    position: absolute;
    width: 204px;
    top: 39px;
    left: -188px;
    font-family: "Work Sans", Helvetica;
    font-weight: 400;
    color: transparent;
    font-size: 17px;
    letter-spacing: 0;
    line-height: normal;
}
.register .overlap-group {
    position: absolute;
    width: 427px;
    height: 682px;
    top: 1px;
    left: -2px;
    background-color: transparent;
}
.register .overlap {
    position: relative;
    width: 388px;
    height: 683px;
 top: 13px;
    left: 0px;
    background-color: #ffffff;
}
.body {
            /* Apply zoom for mobile screens */
            transform: scale(0.8);
            overflow-x: hidden;
}
}
</style>
<body style="background-color: #1f2554;">
<div class="register">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="overlap-group">
            <p class="text-wrapper">Nice to Meet you !!!</p>
            <p class="div">Become a Part of Us</p>
            <img class="image" src= "img/register.png"  />
          </div>
          <img class="img" src= "img/image-31333-1.png" />
          <a href="index.php"><div class="text-wrapper-2">PROFESSIONAL’S LEGACY</div></a>
          <div class="text-wrapper-3">Register</div>
          <div class="overlap-2">
        <div class="text-wrapper-4">Enter your Full Name</div>
      </div>
      <div class="overlap-3">
        <div class="text-wrapper-4">Enter your Email</div>
      </div>
      <div class="overlap-4">
        <div class="text-wrapper-4">Enter your Password</div>
      </div>
      <div class="overlap-555" style="position: absolute;
  width: 302px;
  height: 60px;
  top: 401px;
  left: 40px;">
        <div class="text-wrapper-4">Confirm Password</div>
      </div>
      <p class="p">Register your account and become a part of our Team</p>
    <div class="text-wrapper-5" style="top:527px">OR</div>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
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
                header("Location: login.php");
                exit();
            }else{
                die("Something went wrong");
            }
           }

        }
        ?>
       
        <form action="register.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control-2" name="fullname" placeholder="Full Name:" style="position: absolute;
  width: 302px;
  height: 32px;
  top: 222px;
  left: 26px;
  background-color: #d9d9d9;
  border-radius: 28px;
  border: none;
  padding: 8px;">
            </div>
            <div class="form-group">
                <input type="email" class="form-control-1" name="email" placeholder=" Email:" style="position: absolute;
  width: 302px;
  height: 32px;
  top: 296px;
  left: 26px;
  background-color: #d9d9d9;
  border-radius: 28px;
  border: none;
  padding: 8px;">
            </div>
            <div class="form-group">
                <input type="password" class="form-control-3" name="password" placeholder="Password:" style="position: absolute;
  width: 302px;
  height: 32px;
  top: 365px;
  left: 26px;
  background-color: #d9d9d9;
  border-radius: 28px;
  border: none;
  padding: 8px;">
            </div>
            <div class="form-group">
                <input type="password" class="form-control-4" name="repeat_password" placeholder="Repeat Password:" style="position: absolute;
  width: 302px;
  height: 32px;
  top: 424px;
  left: 26px;
  background-color: #d9d9d9;
  border-radius: 28px;
  border: none;
  padding: 8px;" >
            </div>
            <div class="form-btn" style="top: 25px ;width: 275px;top: 468px;left: 50px;font-size: 30px;text-align: center;white-space: nowrap;position: absolute;font-family: League Spartan, Helvetica;font-weight: 700;letter-spacing: 0;line-height: normal;background-color: #001c4a;border-color: #01010100;">
                
            <input type="submit" class="btn btn-primary" value="Register" placeholder="Register" name="submit" style=" background-color: #001c4a;width: 263px;border-color: transparent;">
            </div>
        </form>
        <div>
      </div>
    </div>
    
              
                <?php
                // authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;

  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo " <div class='overlap-group-wrapper'>
            <div class='overlap-5'>
              <button class='rectangle-2'> 
               <a href='".$client->createAuthUrl()."'>
                       <img class='google' src=  'img/google.png' />  
                  <div class='text-wrapper-7' >
                    Continue with Google
                 </div>
                </a>
              </button>
            </div>
         </div>";
}
                ?>
                
            
            
          <img class="line" src=  "img/line-5.svg" style="top: 516px;" />
          <div class="text-wrapper-8" style=" position: absolute; width: 292px;top: 623px;left: 72px;; font-family:Work Sans, Helvetica;font-weight: 400;color: #918c8c;font-size: 17px;letter-spacing: 0;line-height: normal;">Already have an Account??  <a href="login.php">Login</a></div>
        </div>
      </div>
    </div>
</body>
</html>