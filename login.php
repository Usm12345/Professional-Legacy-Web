<?php
session_start();
if (isset($_SESSION["user"]) && isset($_SESSION["user_token"])){
   header("Location: welcome.php");
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
<html>
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginglobals.css" />
    <link rel="stylesheet" href="css/loginstyle.css" />
        <link rel="icon" type="image/png" href="img/favicon.png">
           
          
  </head>
  <style>
 @media only screen and (max-width: 768px) {
    .login .overlap-wrapper {
    /* background-color: #1f2554; */
    width: 100%;
    height: 50%;
}
.body {
            /* Apply zoom for mobile screens */
            transform: scale(0.8);
            overflow-x: hidden;
            height:0%;
}
.login .div {
    position: absolute;
    width: 592px;
    height: 682px;
    top: 0;
    left: 396px;
    background-color: transparent;
}
    .login .text-wrapper-10 {
        position: absolute;
        width: 332px;
        top: 120px;
        left: 49px;
        font-family: "League Spartan", Helvetica;
        font-weight: 700;
        color: transparent;
        font-size: 42px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .login .img {
        position: static;
        width: 483px;
        height: 389px;
        top: 204px;
        left: 459px;
        object-fit: cover;
    }


      .login .overlap-wrapper {
    background-color: #1f2554;
    width: 1187px;
    height: 0;
    position: relative;
}

      .login .overlap {
           width: 0%;
    height: auto;
    top: 2px;
    left: 15px;
}
      
      .login .text-wrapper-2 {
    position: absolute;
    width: 150px;
    top: 97px;
    left: 35px;
    font-family: "League Spartan", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 38px;
    letter-spacing: 0;
    line-height: normal;
}

     .login .rectangle {
    position: absolute;
    width: 366px;
     }
      .login .div {
        width: 100%;
      }

      .login .img {
        width: 100%;
        height: auto;
      }

      /* Adjust other styles as needed */
    .login .text-wrapper-4 {
    position: absolute;
    width: 204px;
    top: 44px;
    left: 190px;
    color:transparent;
        
    }
}
</style>
    
  <body style="background-color:#1f2554">
    <div class="login">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="rectangle"></div>
          <div class="div"></div>
          <img class="image" src=  "img/image-31333-1.png"  />
          <a href="index.php"><div class="text-wrapper">PROFESSIONAL’S LEGACY</div></a>
          <div class="text-wrapper-2">Log in.</div>
          
          <p class="p">Log in with the credentials that you entered during registration</p>
          <p class="text-wrapper-4">Nice to see you again !!!</p>
          <div class="text-wrapper-5" style ="position: absolute; width: 292px;top: 611px;left: 59px;font-family: 'Work Sans', Helvetica;font-weight: 400;color: #918c8c;font-size: 17px;letter-spacing: 0;line-height: normal;">Don't have an Account??  <a href="register.php" >SIGN UP</a></div>
          <div class="text-wrapper-6">OR</div>
          <?php
        if (isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
          header("Location: welcome.php");
          exit();
      }  
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "db_connection.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user && password_verify($password, $user["password"])) {
              $_SESSION["user"] = $user; // Store the user's details in the session
              header("Location: welcome.php");
              exit();
          } else {
              echo "<div class='alert alert-danger'>Invalid email or password</div>";
          }
        }

        ?>
        <form action="login.php" method="post">
            
          <div class="text-wrapper-3">Enter your Email Address</div>
          <div class="rectangle-2">
            <input type="email" placeholder="   Enter Email:" name="email" style="position: absolute;width: 302px;height: 32px;top: 0px;left: 0px;background-color: #d9d9d9;border-radius: 83px;border-color: transparent;">
          </div>
          <div class="text-wrapper-7">Enter your Password</div>
          <div class="rectangle-3">
            <input  type="password" placeholder="Enter Password:" name="password" class="form-control" style="position: absolute;width: 302px;height: 32px;top: 0px;left: 3px;background-color: #d9d9d9;border-radius: 28px;border: none;padding: 8px;">
          </div>
          <button class="component" type="submit" value="Login" name="login" style="top: 436px;">
            <div class="overlap-group">
              <div class="text-wrapper-8">Log in</div>
            </div>
          </button>
        </form>
          <div class="overlap-group-wrapper" >
            <div class="overlap-2" style="top:-19px;">
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

    echo" <button class='rectangle-4'>
                <a href='".$client->createAuthUrl()."'>
                    <img class='google' src= 'img/google.png'  />
                    <div class='text-wrapper-9'>Continue with Google</div>
                </a>

           </button>";
}
?>

            </div>
          </div>
          <div class="text-wrapper-10">Welcome Back</div>
          <img class="img" src=  "img/loginfinal.png"  />
        </div>
      </div>
    </div>
  </body>
</html>

   
</body>
</html>