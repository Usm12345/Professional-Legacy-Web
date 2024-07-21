<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/trainingcourseglobals.css" />
    <link rel="stylesheet" href="css/trainingcoursestyle.css" />
  

  </head>
  <style>
 .others{ position: absolute;
    width: 445px;
    top: 1245px;
    left: 370px;
    font-family: "League Spartan", Helvetica;
    font-weight: 500;
    color: #000636;
    font-size: 38px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}
.training-course .div {
    background-color: #ffffff;
    width: 1200px;
    height: 1704px;
    position: relative;
}
.training-course .text-wrapper-14 {
    position: absolute;
    width: 337px;
    top: 13px;
    left: 56px;
    font-family: inter, sans-serif;
}
.training-course .text-wrapper-12 {
    position: absolute;
    width: 96px;
    top: 18px;
    left: 956px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #010333;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
    white-space: nowrap;
}
.training-course .text-wrapper {
    position: absolute;
    width: 445px;
    top: 67px;
    left: 355px;
    font-family: inter, sans-serif;
    
}
.training-course .text-wrapper-2 {
    position: absolute;
    width: 276px;
    top: 182px;
    left: 23px;
    font-family: inter, sans-serif;
    font-weight: 700;
}
.training-course .data-analysis-with {
    position: absolute;
    width: 276px;
    top: 182px;
    left: 23px;
    font-family: inter, sans-serif;
    font-size:24px;
    
}
.training-course .text-i {
    position: relative;
    align-self: stretch;
    font-family: inter, sans-serif;
    font-weight: 700;
}
.training-course .span {
    font-family: inter, sans-serif;
    font-weight: 700;
    color: #000636;
    font-size: 22px;
    letter-spacing: 0;
}
.training-course .component-6 {
    top: 893px;
    left: 55px;
}

.login-box .login-rectangle {
    position: relative;
    width: 102px;
    height: 31px;
        top: 12px;
    left: 78%;
    background: linear-gradient(to right, lightblue 50%,  #d9d9d9 50%);
    background-size: 200% 100%;
    background-position: right;
    border-radius: 31px;
    border: 1px solid #000000;
    transition: background-position 0.3s ease-in-out;
}

.login-box .login-rectangle:hover {
    background-position: left;
}
.register-box{
      width:102px;
      height:31px;
  }

.training-course .text-wrapper-13 {
    position: absolute;
    width: 96px;
    top: 19px;
    left: 1093px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #010333;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
    white-space: nowrap;
}
.register-box .register-rectangle {
    position: relative;
    width: 102px;
    height: 31px;
    top: -18px;
    left: 1080px;
    background: linear-gradient(to right,lightblue 50%,  #d9d9d9 50%);
    background-size: 200% 100%;
    background-position: right;
    border-radius: 31px;
    border: 1px solid #000000;
    transition: background-position 0.3s ease-in-out;
}

.register-box .register-rectangle:hover {
    background-position: left;
}  



.training-course .component-9 {
    top: 1294px;
    left: 823px;
    position: absolute;
    width: 322px;
    height: 338px;
    background-color: #f5f5f5;
}
.training-course .component-8 {
    top: 1689px;
    left: 52px;
    position: absolute;
    width: 322px;
    height: 338px;
    background-color: #f5f5f5;
}
.training-course .component-3 {
    top: 893px;
    left: 439px;
    position: absolute;
    width: 322px;
    height: 338px;
    background-color: #f5f5f5;
}

  </style>
  <body>
    <div class="training-course">
    <div class="div">

    
    <div class="text-wrapper">Trainings (Courses)</div>
          <?php
            require_once 'config.php';
            session_start();
            
            // Check if the user is already authenticated
            if (isset($_SESSION["user"]) && isset($_SESSION["user_token"])) {
                header("Location: welcome.php");
                exit();
            }
            
            // Authenticate code from Google OAuth Flow
            if (isset($_GET['code'])) {
                $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                $client->setAccessToken($token['access_token']);
            
                // Get profile info
                $google_oauth = new Google_Service_Oauth2($client);
                $google_account_info = $google_oauth->userinfo->get();
                $userinfo = [
                    'email' => $google_account_info['email'],
                    'full_name' => $google_account_info['givenName'],
                    'picture' => $google_account_info['picture'],
                    'token' => $google_account_info['id'],
                ];
            
                // Check if the user already exists in the database
                $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
                $result = mysqli_query($conn, $sql);
            
                if (mysqli_num_rows($result) > 0) {
                    // User exists
                    $userinfo = mysqli_fetch_assoc($result);
                    $token = $userinfo['token'];
            
                } else {
                    // User does not exist, create a new user
                    $sql = "INSERT INTO users (email, full_name, picture, token, is_permitted) VALUES ('{$userinfo['email']}','{$userinfo['full_name']}', '{$userinfo['picture']}','{$userinfo['token']}', 0)";
                    $result = mysqli_query($conn, $sql);
            
                    if ($result) {
                        $token = $userinfo['token'];
            
                     } else {
                        echo "User is not created";
                        die();
                    }
                }
                
                // Save user data into session
                $_SESSION['user_token'] = $token;
            } else {
              $sql = "SELECT is_permitted FROM users WHERE token ='{$_SESSION['user_token']}'";
              $result = mysqli_query($conn, $sql);
          
             
              // Check if 'user_token' is set in the session

// If 'user_token' is not set or user is not permitted, handle the case
// Continue with the rest of your code...

              // checking if user is already exists in database
              $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                // user is exists
                $userinfo = mysqli_fetch_assoc($result);
              }
             }
             
            
 
             // Check if the user is logged in
             if (isset($_SESSION['user'])) {
               echo "
               <div class='component-17'>
               <img class='image-8' src='img/image-31333-1.png'>
                   <div class='text-wrapper-13' style='left: 1010px;'><a href='logout.php'>LOG OUT</a></div>
          
               <div class='text-wrapper-14'><a href='welcome.php' style='color:black;'>Professional's Legacy</a></div>
                <a href='progress_page.php'>
       <div class='course-box' style='position: absolute;width: 114px;height: 30px;background-color: #00f6ff;top: 15px;left: 72%;border-radius: 31px;'><div class='text-wrapper-progress' style='
    position: absolute;
    top: 7px;
    left: 7px;
'>  My Dashboard</div></div></a>
              ";
           } 
           // Check if the user is logged in with 'user_token'
           elseif (isset($_SESSION['user_token'])) {
               echo "
               <div class='component-17'>
               <img class='image-8' src='img/image-31333-1.png'>
                   <div class='text-wrapper-13' style='left: 1010px;'><a href='logout.php'>LOG OUT</a></div>
          
              <div class='text-wrapper-14'><a href='redirected.php' style='color:black;'>Professional's Legacy</a></div>
              <a href='progress_page.php'>
       <div class='course-box' style='position: absolute;width: 114px;height: 30px;background-color: #00f6ff;top: 15px;left: 72%;border-radius: 31px;'><div class='text-wrapper-progress' style='
    position: absolute;
    top: 7px;
    left: 7px;
'>  My Dashboard</div></div></a>
               ";
           } 
           // If neither 'user' nor 'user_token' is set, show the login and register links
           else {
               echo "
               <div class='component-17'>
          <img class='image-8' src='img/image-31333-1.png'>
           <a href='login.php'>
      <div class='login-box'>
      <div class='login-rectangle'>
      </div>
      
      <div class='text-wrapper-12' >LOG IN</div>
      </div>
      </a>
      
      
        
      
       <a href='register.php'> 
   <div class='register-box'>
      <div class='register-rectangle'>
    </div>  
    <div class='text-wrapper-13' >SIGN UP</div>
    </div>
    </a>
          <div class='text-wrapper-14'><a href='index.php' style='color:black;'>Professional's Legacy</a></div>
        </div>";
           }
            
           require_once 'User_authenticate.php';
                
             ?>
   
<!-- HTML code for your course buttons -->

  </body>
</html>
