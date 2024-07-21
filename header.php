<div class="overlap" >
<?php   
        if (isset($_SESSION['user_token'])) {
      // User is logged in, display logout button
      if ($user) {
        if (password_verify($password, $user["password"])) {
      echo '<div class="text-wrapper" ><a href="logout.php">LOG OUT</a></div>';
        }
      }
    } else {
      // User is not logged in, display login and signup links
      echo ' 
      <a href="login.php">
      <div class="login-box">
      <div class="login-rectangle">
      </div>
      
      <div class="text-wrapper" >LOG IN</div>
      </div>
      </a>
      
     <a href="register.php"> 
   <div class="register-box">
      <div class="register-rectangle">
    </div>  
    <div class="text-wrapper-2" >SIGN UP</div>
    </div>
    </a>
    ';
      }
      ?>
  </div>