<?php
 require_once 'config.php';
 require_once 'db_connection.php';

 session_start();

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
 $userinfo=[
  'email' => $google_account_info['email'],
  'full_name' => $google_account_info['givenName'],
  'picture' => $google_account_info['picture'],
  'token' => $google_account_info['id'],
 ];

// checking if user is already exists in database
$sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // user is exists
  $userinfo = mysqli_fetch_assoc($result);
  $token = $userinfo['token'];
} else {
  // user is not exists
   $sql = "INSERT INTO users (email, full_name, picture, token) VALUES ('{$userinfo['email']}','{$userinfo['full_name']}', '{$userinfo['picture']}','{$userinfo['token']}')";
   $result = mysqli_query($conn, $sql);
   if ($result) {
     $token = $userinfo['token'];
   } else {
     echo "User is not created";
     die();
   }
 }

 // save user data into session
 $_SESSION['user_token'] = $token;
} else {
 
 // checking if user is already exists in database
 $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
   // user is exists
   $userinfo = mysqli_fetch_assoc($result);
 }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="css/progressstyle.css" />
    <style>
    .my-progress-page .text-wrapper-4666 {
    position: absolute;
    width: 250px;
    top: 38px;
    left: 1207px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
}
.my-progress-page .text-wrapper-43{
    font-family:inter,sans-serif;
    position: absolute;
    width: 273px;
    top: 16px;
    left: 68px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 28px;
}
.my-progress-page .ellipse-2 {
    position: absolute;
    width: 71px;
    height: 69px;
    top: -375px;
    left: 130%;
    object-fit: cover;
}
  .my-progress-page .text-wrapper-4667 {
    position: absolute;
    width: 250px;
    top: 65px;
    left: 1207px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
}
        .my-progress-page .text-wrapper-2 {
    position: absolute;
    width: 436px;
    top: 9px;
    left: 338px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #000636;
    font-size: 31px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}
.my-progress-page .video-11 {
    position: absolute;
    width: 52px;
    height: 53px;
    top: 232px;
    left: 28px;
}
.my-progress-page .data-analysis-with {
    width: 436px;
    left: 340px;}
.my-progress-page .video-22 {
    position: absolute;
    width: 52px;
    height: 53px;
    top: 313px;
    left: 33px;
}
    </style>
  </head>
  <body>
    <div class="my-progress-page">
      <div class="div">
        <div class="overlap">
            <div class="box"><img class="line" style ="position:absolute ; width:1px; height:202px;top:0;left:0;object-fit:cover;"src="img/line-7.svg" /></div>
          <div class="text-wrapper">Purchased Courses</div>
          <div class="rectangle"></div>
        </div>
        <?php
        session_start();
    require_once "db_connection.php";

    if(isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
        $user_id = $user["id"];

        $sql = "SELECT * FROM users WHERE id = $user_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            
  if ($row["is_permitted"] == 1) {
       echo' <a href="coursedetails(2)_unlocked.php"> 
       <div class="overlap-group">
          <div class="component">
            <div class="overlap-group-2">
              <div class="overlap-2">
                <div class="overlap-2">
                  <img class="img" src="img/rectangle-28-5.png" />
                  <div class="text-wrapper-2">Data Analysis with Excel</div>
                </div>
                <div class="overlap-3">
                  <div class="rectangle-2"></div>
                  <div class="text-wrapper-3">Accounting</div>
                </div>
              </div>
              <div class="text-wrapper-4">Details</div>
              <div class="text-wrapper-5">Duration</div>
              <div class="text-wrapper-6">Status</div>
              <div class="text-wrapper-7">Lecture 1</div>
              <div class="text-wrapper-8">30 mins</div>
              <div class="text-wrapper-9">Completed</div>
              <div class="text-wrapper-10">Not Started</div>
              <div class="text-wrapper-11">30 mins</div>
              <div class="text-wrapper-12">Lecture 2</div>
              <img class="unlock" src="img/Unlock.png" />
            <img class="video-11" src="img/Video (1).png" />
            </div>
          </div>
          <img class="video-22" src="img/Video (1).png" />
          <img class="line" src="img/line-11.svg" />
          <img class="line-2" src="img/line-12.svg" />
          <img class="screenshot" src="img/Screenshot (839) 1.png" />
        </div>
        </a>';
      
  }
    if ($row["is_permitted3"] == 1) {
        echo'<a href="coursedetails(12)_unlocked.php">
        <div class="overlap-4">
          <div class="overlap-wrapper">
            <div class="overlap-5">
              <div class="overlap-group-wrapper">
                <div class="overlap-group-3">
                  <div class="overlap-6">
                    <div class="rectangle-3"></div>
                    <div class="text-wrapper-13">Accounting</div>
                  </div>
                  <div class="data-analysis-with">Preparation of Financial Statements</div>
                  <div class="text-wrapper-14">Details</div>
                  <div class="text-wrapper-15">Duration</div>
                  <div class="text-wrapper-16">Status</div>
                  <div class="text-wrapper-17">Lecture 1</div>
                  <div class="text-wrapper-18">30 mins</div>
                  <div class="text-wrapper-19">Completed</div>
                  <div class="text-wrapper-20">Not Started</div>
                  <div class="text-wrapper-21">30 mins</div>
                  <div class="text-wrapper-22">Lecture 2</div>
                  <img class="unlock" src="img/Unlock.png" />
                </div>
              </div>
              <img class="rectangle-4" src="img/rectangle-28-3.png" />
              <img class="video" src="img/Video (1).png" />
            </div>
          </div>
          <img class="video-2" src="img/Video (1).png" />
          <img class="line-3" src="img/line-13.svg" />
          <img class="line-4" src="img/line-14.svg" />
        </div>
        </a>';}
         if ($row["is_permitted2"] == 1) {
             
        echo' <a href="coursedetails(1)_unlocked.php">
        <div class="overlap-7">
          <img class="video-3" src="img/Video (1)png" />
          <div class="div-wrapper">
            <div class="overlap-8">
              <div class="component-2">
                <div class="overlap-group-4">
                  <div class="overlap-9">
                    <div class="overlap-9">
                      <img class="rectangle-5" src="img/rectangle-28-3.png" />
                      <div class="data-analysis-with-2">FMVA ( Financial Modeling)</div>
                    </div>
                    <div class="overlap-10">
                      <div class="rectangle-6"></div>
                      <div class="text-wrapper-23">Accounting</div>
                    </div>
                  </div>
                  <div class="text-wrapper-24">Details</div>
                  <div class="text-wrapper-25">Duration</div>
                  <div class="text-wrapper-26">Status</div>
                  <div class="text-wrapper-27">Lecture 1</div>
                  <div class="text-wrapper-28">30 mins</div>
                  <div class="text-wrapper-29">Completed</div>
                  <div class="text-wrapper-30">Not Started</div>
                  <div class="text-wrapper-31">30 mins</div>
                  <div class="text-wrapper-32">Lecture 2</div>
                  <img class="unlock" src="img/Unlock.png" />
                </div>
              </div>
              <img class="rectangle-7" src="img/rectangle-28-2.png" />
              <img class="video-4" src="img/Video (1).png" />
            </div>
          </div>
          <img class="video-5" src="img/Video (1).png" />
          <img class="line-5" src="img/line-15.svg" />
          <img class="line-6" src="img/line-16.svg" />
        </div>
        </a>
           '; }
           if ($row["is_permitted4"] == 1) {
               echo' <a href="coursedetails(13)_unlocked.php">
        <div class="overlap-11">
          <div class="div-wrapper">
            <div class="overlap-12">
              <div class="component-3">
                <div class="overlap-group-5">
                  <div class="overlap-13">
                    <div class="overlap-13">
                      <img class="rectangle-8" src="img/rectangle-28.png" />
                      <div class="data-analysis-with-3">Audit (Financial Statements)</div>
                    </div>
                    <div class="overlap-14">
                      <div class="rectangle-9"></div>
                      <div class="text-wrapper-23">Accounting</div>
                    </div>
                  </div>
                  <div class="text-wrapper-33">Details</div>
                  <div class="text-wrapper-34">Duration</div>
                  <div class="text-wrapper-35">Status</div>
                  <div class="text-wrapper-36">Lecture 1</div>
                  <div class="text-wrapper-37">30 mins</div>
                  <div class="text-wrapper-38">Completed</div>
                  <div class="text-wrapper-39">Not Started</div>
                  <div class="text-wrapper-40">30 mins</div>
                  <div class="text-wrapper-41">Lecture 2</div>
                  <img class="unlock" src="img/Unlock.png" />
                </div>
              </div>
              <img class="rectangle-10" src="img/rectangle-28-4.png" />
              <img class="video-6" src="img/Video (1).png" />
              <img class="line-7" src="img/image.svg" />
              <img class="line-8" src="img/line-17.svg" />
            </div>
          </div>
          <img class="video-7" src="img/Video (1).png" />
        </div>
        </a>
        ';}
            }
}
}

        
 elseif(isset($_SESSION["user_token"])){
      if ($userinfo["is_permitted"] == 1) {
       echo' <a href="coursedetails(2)_unlocked.php"> 
       <div class="overlap-group">
          <div class="component">
            <div class="overlap-group-2">
              <div class="overlap-2">
                <div class="overlap-2">
                  <img class="img" src="img/rectangle-28-5.png" />
                  <div class="text-wrapper-2">Data Analysis with Excel</div>
                </div>
                <div class="overlap-3">
                  <div class="rectangle-2"></div>
                  <div class="text-wrapper-3">Accounting</div>
                </div>
              </div>
              <div class="text-wrapper-4">Details</div>
              <div class="text-wrapper-5">Duration</div>
              <div class="text-wrapper-6">Status</div>
              <div class="text-wrapper-7">Lecture 1</div>
              <div class="text-wrapper-8">30 mins</div>
              <div class="text-wrapper-9">Completed</div>
              <div class="text-wrapper-10">Not Started</div>
              <div class="text-wrapper-11">30 mins</div>
              <div class="text-wrapper-12">Lecture 2</div>
              <img class="unlock" src="img/Unlock.png" />
            <img class="video-11" src="img/Video (1).png" />
            </div>
          </div>
          <img class="video-22" src="img/Video (1).png" />
          <img class="line" src="img/line-11.svg" />
          <img class="line-2" src="img/line-12.svg" />
          <img class="screenshot" src="img/Screenshot (839) 1.png" />
        </div>
        </a>';
      
  }
    if ($userinfo["is_permitted3"] == 1) {
        echo'<a href="coursedetails(12)_unlocked.php">
        <div class="overlap-4">
          <div class="overlap-wrapper">
            <div class="overlap-5">
              <div class="overlap-group-wrapper">
                <div class="overlap-group-3">
                  <div class="overlap-6">
                    <div class="rectangle-3"></div>
                    <div class="text-wrapper-13">Accounting</div>
                  </div>
                  <div class="data-analysis-with">Preparation of Financial Statements</div>
                  <div class="text-wrapper-14">Details</div>
                  <div class="text-wrapper-15">Duration</div>
                  <div class="text-wrapper-16">Status</div>
                  <div class="text-wrapper-17">Lecture 1</div>
                  <div class="text-wrapper-18">30 mins</div>
                  <div class="text-wrapper-19">Completed</div>
                  <div class="text-wrapper-20">Not Started</div>
                  <div class="text-wrapper-21">30 mins</div>
                  <div class="text-wrapper-22">Lecture 2</div>
                  <img class="unlock" src="img/Unlock.png" />
                </div>
              </div>
              <img class="rectangle-4" src="img/rectangle-28-3.png" />
              <img class="video" src="img/Video (1).png" />
            </div>
          </div>
          <img class="video-2" src="img/Video (1).png" />
          <img class="line-3" src="img/line-13.svg" />
          <img class="line-4" src="img/line-14.svg" />
        </div>
        </a>';}
         if ($userinfo["is_permitted2"] == 1) {
             
        echo' <a href="coursedetails(1)_unlocked.php">
        <div class="overlap-7">
          <img class="video-3" src="img/Video (1)png" />
          <div class="div-wrapper">
            <div class="overlap-8">
              <div class="component-2">
                <div class="overlap-group-4">
                  <div class="overlap-9">
                    <div class="overlap-9">
                      <img class="rectangle-5" src="img/rectangle-28-3.png" />
                      <div class="data-analysis-with-2">FMVA ( Financial Modeling)</div>
                    </div>
                    <div class="overlap-10">
                      <div class="rectangle-6"></div>
                      <div class="text-wrapper-23">Accounting</div>
                    </div>
                  </div>
                  <div class="text-wrapper-24">Details</div>
                  <div class="text-wrapper-25">Duration</div>
                  <div class="text-wrapper-26">Status</div>
                  <div class="text-wrapper-27">Lecture 1</div>
                  <div class="text-wrapper-28">30 mins</div>
                  <div class="text-wrapper-29">Completed</div>
                  <div class="text-wrapper-30">Not Started</div>
                  <div class="text-wrapper-31">30 mins</div>
                  <div class="text-wrapper-32">Lecture 2</div>
                  <img class="unlock" src="img/Unlock.png" />
                </div>
              </div>
              <img class="rectangle-7" src="img/rectangle-28-2.png" />
              <img class="video-4" src="img/Video (1).png" />
            </div>
          </div>
          <img class="video-5" src="img/Video (1).png" />
          <img class="line-5" src="img/line-15.svg" />
          <img class="line-6" src="img/line-16.svg" />
        </div>
        </a>
           '; }
           if ($userinfo["is_permitted4"] == 1) {
               echo' <a href="coursedetails(13)_unlocked.php">
        <div class="overlap-11">
          <div class="div-wrapper">
            <div class="overlap-12">
              <div class="component-3">
                <div class="overlap-group-5">
                  <div class="overlap-13">
                    <div class="overlap-13">
                      <img class="rectangle-8" src="img/rectangle-28.png" />
                      <div class="data-analysis-with-3">Audit (Financial Statements)</div>
                    </div>
                    <div class="overlap-14">
                      <div class="rectangle-9"></div>
                      <div class="text-wrapper-23">Accounting</div>
                    </div>
                  </div>
                  <div class="text-wrapper-33">Details</div>
                  <div class="text-wrapper-34">Duration</div>
                  <div class="text-wrapper-35">Status</div>
                  <div class="text-wrapper-36">Lecture 1</div>
                  <div class="text-wrapper-37">30 mins</div>
                  <div class="text-wrapper-38">Completed</div>
                  <div class="text-wrapper-39">Not Started</div>
                  <div class="text-wrapper-40">30 mins</div>
                  <div class="text-wrapper-41">Lecture 2</div>
                  <img class="unlock" src="img/Unlock.png" />
                </div>
              </div>
              <img class="rectangle-10" src="img/rectangle-28-4.png" />
              <img class="video-6" src="img/Video (1).png" />
              <img class="line-7" src="img/image.svg" />
              <img class="line-8" src="img/line-17.svg" />
            </div>
          </div>
          <img class="video-7" src="img/Video (1).png" />
        </div>
        </a>
        ';}
 }
      else{
          echo'';
      }  ?>
        <div class="overlap-15">
          <img class="image" src="img/image-31333-1.png" />
          <div class="text-wrapper-42">My Account Progress</div>
          <div class="rectangle-11"></div>
          <a href="redirected.php">
          <div class="text-wrapper-43">Professional's Legacy</div>
          </a>
          <div class="text-wrapper-44">45%</div>
        </div>
        <div class="overlap-16">
          <div class="text-wrapper-45">Your Learning Path</div>
          <div class="text-wrapper-4666">My Profile</div>
         <a href="logout.php">
          <div class="text-wrapper-4667">Log Out</div>
          </a>
          <div class="text-wrapper-46">Daily Updates</div>
          <p class="p">
            Maximize your learning journey and strengthen your skills. You can always recreate the path or build your
            own according to your preferences.
          </p>
          <p class="text-wrapper-47">The daily Lecture updates will show your learning through-out the courses</p>
          <img class="line-9" src="img/line-7.svg" />
        </div>
        <div class="component-4">
          <div class="overlap-group-6">
            <div class="component-5">
              <div class="overlap-group-6">
                <?php
// Assuming the database connection is established and $_SESSION variables are set properly

if (isset($_SESSION["user_token"])) {
   
    // Display welcome message and profile picture for users logged in with a token
    echo "<div class='text-wrapper-48'>" . (isset($userinfo['full_name']) ? htmlspecialchars($userinfo['full_name']) : 'Guest') . "</div>";

    // Check if profile picture is available and display it
    if (isset($userinfo['picture'])) {
        echo "<img class='ellipse-2' src='" . htmlspecialchars($userinfo['picture']) . "' alt='Profile Picture'>";
    }
} elseif (isset($_SESSION["user"])) {
    // Display welcome message for users logged in regularly
    $user = $_SESSION["user"];
    $user_id = $user["id"];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user details from the database
        $row = $result->fetch_assoc();

        // Display user's full name and profile picture
        echo "<div class='text-wrapper-48'>" . (isset($row['full_name']) ? htmlspecialchars($row['full_name']) : 'Guest') . "</div>";

        // Check if profile picture is available and display it
        if (isset($row['picture'])) {
            echo "<img class='ellipse-2' src='" . htmlspecialchars($row['picture']) . "' alt='Profile Picture'>";
        }
    } else {
        echo "<div class='text-wrapper-48'>User not found</div>";
    }
} else {
    // If neither session is set, display a default message
    echo "<div class='text-wrapper-48'>Welcome, Guest</div>";
}

$conn->close();
?>

                <div class="text-wrapper-49">Account Level : Beginner</div>
 

                <img class="ellipse" src="img/Ellipse 2.png" />
                
              </div>
            </div>
            <img class="pen-squared" src="img/Pen Squared.png" />
          </div>
        </div>
        <div class="ellipse-2"></div>
        <div class="ellipse-3"></div>
        <div class="ellipse-4"></div>
        <div class="ellipse-5"></div>
        <img class="line-10" src="img/line-8.svg" />
        <img class="line-11" src="img/line-9.svg" />
        <img class="line-12" src="img/line-10.svg" />
      </div>
    </div>
  </body>
</html>
