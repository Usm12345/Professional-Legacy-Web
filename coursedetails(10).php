<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/coursedetails(1)globals.css" />
    <link rel="stylesheet" href="css/coursedetails(1)style.css" />
  </head>
  <body>
    <div class="FMVA-TC">
      <div class="div" style="height: 3000px;">
      <img class='image-8' src='img/image-31333-1.png' />
 
      <?php
             require_once 'config.php';
             if (isset($_SESSION["user"]) && isset($_SESSION["user_token"])) {
               header("Location: welcome.php");
               exit();
             }
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
              if (isset($_SESSION['user_token'])) {
                header("Location: welcome.php");
                die();
              }
              // checking if user is already exists in database
              $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                // user is exists
                $userinfo = mysqli_fetch_assoc($result);
              }
             }
             
             
             session_start();
 
             // Check if the user is logged in
             if (isset($_SESSION['user'])) {
               echo "
               
                   <div class='text-wrapper-13' style='left: 1010px ; top:34px'><a href='logout.php'>LOG OUT</a></div>
          
              ";
           } 
           // Check if the user is logged in with 'user_token'
           elseif (isset($_SESSION['user_token'])) {
               echo "
                   <div class='text-wrapper-13' style='left: 1010px; top: 34px;'><a href='logout.php'>LOG OUT</a></div>
               
               ";
           } 
           // If neither 'user' nor 'user_token' is set, show the login and register links
           else {
               echo '
               <div class="overlap">
                   <div class="text-wrapper" ><a href="login.php">LOG IN</a></div>
                   <img class="line" src="img/line-1.svg"  />
               </div>
               <div class="text-wrapper-2" ><a href="register.php">SIGN UP</a></div>
               
            
               ';
           }
             
                
             ?>
      
          
        <div class="text-wrapper-3">PROFESSIONAL’S LEGACY</div>
        <div class="overlap-group">
          <div class="overlap-group-2">
            <div class="rectangle"></div>
            <p class="financial-modeling" style="    width: 599px;">BIG DATA WITH POWER BI</p>
            <div class="text-wrapper-4" style="top:160px">ABOUT THE COURSE:</div>
            <p class="p" style="top:200px;">
            Course Outline focused exclusively on Power BI for finance, accounting,
            taxation, and auditing graduates, excluding financial statement
            terminology:


            </p>
            <div class="rectangle-2">
                <li>Coming soon</li>
                <video style="width: 367px;" controls controlsList="nodownload" style="border-radius: 38px; margin: 0; padding: 0;">
              <source src= " " type="video/mp4" >
              Your browser does not support the video tag.
            </video>
            </div>
            <div class="text-wrapper-5">This Course Includes:</div>
            <div class="text-wrapper-6">15 hours on-demand video</div>
            <div class="text-wrapper-7">15 lectures</div>
            <div class="text-wrapper-8">1 Year access time</div>
            <div class="text-wrapper-9">Certificate of completion</div>
            <div class="text-wrapper-10">24/7 WhatsApp Support</div>
            <img class="laptop" src="img/laptop.png" />
            <img class="screenshot" src="img/screenshot-649-1.png" />
            <img class="movie-projector" src="img/movie-projector.png" />
            <img class="trophy" src="img/trophy.png" />
            <img class="whats-app" src="img/whatsapp.png" />
          </div>
          <div class="text-wrapper-11">WHAT YOU’LL LEARN:</div>
          <p class="text-wrapper-12">Module 1:Introduction to Power BI</p>
        </div>
    <p class="understanding-the">
    
    • Overview of Power BI and its significance in financial analysis</br>
    • Installing and configuring Power BI Desktop</br>
    • Navigating the Power BI interface</br>
    • Data import and transformation using Power Query</br>
       
    </p>
        <p class="text-wrapper-13">Module 2:  Data Modeling and Relationships</p>
        <p class="understanding">
        • Importing data from diverse sources<br>
     • Establishing data relationships</br>
     • Constructing a star schema for financial data</br>
     • Data modeling best practices</br>
     
     
      

        </p>
        <p class="text-wrapper-14">Module 3: -  Data Visualization Fundamentals</p>
        <p class="understanding-the-2">
        •  Principles of effective data visualization</br>
        •  Creating fundamental charts (e.g., bar, line, pie) for financial data</br>
        •  Tailoring visuals for financial reporting</br>
        •  Leveraging color and formatting effectively</br>

        
      
        </p>
        <div class="text-wrapper-15">Module 4: -   Advanced Data Transformations</div>
        <p class="understanding-the-3">
        • Proficient data transformations with Power Query</br>
        •  Combining and merging queries</br>
        •  Crafting custom functions</br>
        •  Utilizing date and time functions proficiently</br>

        </p>
        <div class="text-wrapper-15"  style="top: 1279px;">Module 5: DAX (Data Analysis Expressions) Fundamentals</div>
        <p class="understanding-the-3"  style="top: 1321px;">
        • Introduction to DAX<br>
        • Distinction between calculated columns and measures<br>
        • Fundamental DAX functions for financial analysis<br>
        • Aggregation and filtration of data using DAX<br>


        </p>
        <div class="text-wrapper-15" style="top: 1454px;">Module 6: Advanced DAX and Time Intelligence</div>
        <p class="understanding-the-3" style="top: 1496px;">
        • Advanced DAX functions (e.g., SUMX, AVERAGEX)<br>
        • Time intelligence functions for financial reporting<br>
        • Crafting financial KPIs and ratios<br>
        • Optimization techniques for DAX<br>

        </p>
        <div class="text-wrapper-15" style="top: 1629px;">Module 7: Power BI Data Visualization Techniques</div>
        <p class="understanding-the-3" style="top: 1671px;">
        • Advanced visualizations (e.g., waterfall charts, gauges)<br>
        • Drill-through and drill-down capabilities<br>
        • Enhancing interactivity and employing slicers in financial dashboards<br>
        • Publishing and sharing reports via Power BI Service<br>


        </p>
        <div class="text-wrapper-15" style="top: 1804px;">Module 8: Power BI and Financial Planning</div>
        <p class="understanding-the-3" style="top: 1846px;">
        • Budgeting and forecasting using Power BI<br>
        • Scenario analysis with What-If parameters<br>
        • Integration of Power BI with Excel for financial planning<br>
        • Constructing dynamic financial model<br>

        </p>
        <div class="overlap-2" style="top: 2134px;">
          <div class="overlap-3">
            <div class="rectangle-3"></div>
            <div class="text-wrapper-16">TRAINING CONTENT</div>
            <div class="text-wrapper-17">DURATION</div>
          </div>
          <div class="text-wrapper-18">Lecture 1: __________________________</div>
          <div class="text-wrapper-19">36 mins</div>
          <div class="text-wrapper-20">36 mins</div>
          <div class="text-wrapper-21">36 mins</div>
          <div class="text-wrapper-22">36 mins</div>
          <div class="text-wrapper-23">36 mins</div>
          <div class="text-wrapper-24">36 mins</div>
          <div class="text-wrapper-25">36 mins</div>
          <div class="text-wrapper-26">36 mins</div>
          <div class="text-wrapper-27">Lecture 2: __________________________</div>
          <div class="text-wrapper-28">Lecture 3: __________________________</div>
          <div class="text-wrapper-29">Lecture 4: __________________________</div>
          <div class="text-wrapper-30">Lecture 5: __________________________</div>
          <div class="text-wrapper-31">Lecture 6: __________________________</div>
          <div class="text-wrapper-32">Lecture 7: __________________________</div>
          <div class="text-wrapper-33">Lecture 8: __________________________</div>
          <img class="Lock"  src="img\Lock.png" />
          <img class="Lock-2"  src="img\Lock.png" />
          <img class="Lock-3"  src="img\Lock.png" />
          <img class="Lock-4"  src="img\Lock.png" />
          <img class="Lock-5"  src="img\Lock.png" />
          <img class="Lock-6"  src="img\Lock.png" />
          <img class="Lock-7"  src="img\Lock.png" />
          <img class="Lock-8"  src="img\Lock.png" />
        </div>
        <?php

// Check if the user is not logged in and has the !user_token set
if (!isset($_SESSION["user"]) && !isset($_SESSION["!user_token"])) {
    // Redirect to the login page
    echo' <div class="text-wrapper-34" style="top: 2756px;">Registration Form</div>
    <a href="login.php" target="_blank" class="component" style="top: 2869px;">
<button>
    <p class="text-wrapper-35">Click here to Register Now</p>
</button>
</a>
  </div>';
    exit();
}
?>
        <div class="text-wrapper-34" style="top: 2756px;">Registration Form</div>
        <a href="https://forms.gle/nPJZhusXUUaETrj87" target="_blank" class="component" style="top: 2869px;">
    <button>
        <p class="text-wrapper-35">Click here to Register Now</p>
    </button>
</a>
      </div>
    </div>
  </body>
</html>
