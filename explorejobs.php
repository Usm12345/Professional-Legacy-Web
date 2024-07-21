<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    
   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="css/explorejobsglobals.css" />
    <link rel="stylesheet" href="css/explorejobsstyle.css" />
 <style>
     .explore-jobs {
    background-color: transparent;
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
}
.explore-jobs .div {
    background-color: transparent;
    width: 1200px;
    height: 773px;
    position: relative;
    top: 46px;
}
.explore-jobs .text-wrapper {
    position: absolute;
    width: 534px;
    top: 43px;
    left: 333px;
    font-family: inter, sans-serif;
    font-weight: 700;
}

.explore-jobs .component-17 {
    position: absolute;
    width: 1200px;
    height: 56px;
    top: -49px;
    left: 0;
    background-color: transparent;
}

.explore-jobs .text-wrapper-13 {
    position: absolute;
    width: 96px;
    top: 18px;
    left: 1095px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #010333;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
    white-space: nowrap;
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

.explore-jobs .text-wrapper-12 {
    position: absolute;
    width: 96px;
    top: 17px;
    left: 955px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #010333;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
    white-space: nowrap;
}
.explore-jobs .image{
     position: absolute;
    width: 732px;
    height: 600px;
    top: 168px;
    left: -60px;
}
.explore-jobs .image2{
 position: absolute;
    width: 732px;
    height: 600px;
    top: 156px;
    left: 600px;
}
.explore-jobs .image3{
    position: absolute;
    width: 71px;
    height: 69px;
    top: 402px;
    left: 1290px;
}
   @media only screen and (max-width: 768px) {
       .explore-jobs .component-17 .image-8 {
    position: absolute;
    width: 26px;
    height: 28px;
    top: 6px;
    left: 6px;
    object-fit: cover;
}
.explore-jobs .component-17 {
    position: absolute;
    width: auto;
}
.explore-jobs .component-17 .text-wrapper-logo {
    position: absolute;
    width: 137px;
    top: 14px;
    left: 36px;
    font-family: inter, sans-serif;
    font-weight: 700;
    color: #010333;
    font-size: 13px;
}
.login-box .login-rectangle {
    position: relative;
    width: 55px;
    height: 19px;
    top: 15px;
    left: 252px;
}
.explore-jobs .text-wrapper-12 {
    position: absolute;
    width: 96px;
    top: 18px;
    left: 260px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #010333;
    font-size: 11px;
}
.register-box .register-rectangle {
    position: relative;
    width: 55px;
    height: 19px;
    top: -4px;
    left: 324px;
}
.explore-jobs .text-wrapper-13 {
    position: absolute;
    width: 96px;
    top: 18px;
    left: 329px;
    font-family: "League Spartan-Bold", Helvetica;
    font-weight: 700;
    color: #010333;
    font-size: 11px;
}
.explore-jobs .text-wrapper {
    position: absolute;
    width: 534px;
    top: 21px;
    left: -65px;
    font-family: inter, sans-serif;
    font-weight: 700;
    font-size: 24px;
}
.explore-jobs .image{
    position: absolute;
    width: 390px;
    height: 311px;
    top: 91px;
    left: 2px;
}
.explore-jobs .image2{

     position: absolute;
    width: 390px;
    height: 311px;
    top: 491px;
    left: 2px;
}
.explore-jobs .image3{
position: absolute;
    width: 71px;
    height: 69px;
    top: 839px;
    left: 156px;
   }
 </style>
  </head>
  <body style="

    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    zoom: 100%;
">
  
    <div class="explore-jobs">
     
      <div class="div">
       <?php
       require_once 'config.php';
       session_start();
      if (isset($_SESSION['user_token'])) {
              echo" <div class='component-17'>
              <img class='image-8' src='img/image-31333-1.png'>
           
    
                <div class='text-wrapper-register'><a href='logout.php'>LOG OUT</a></div>  
          <div class='text-wrapper-logo' style='color: #000000;'><a href='redirected.php' style='color:black;'>Professional's Legacy</a></div>

            </div>";
              
              }
            elseif (isset($_SESSION['user'])){

              
       echo" <div class='component-17'>
              <img class='image-8' src='img/image-31333-1.png'>
           
    
                <div class='text-wrapper-register'><a href='logout.php'>LOG OUT</a></div>  
          <div class='text-wrapper-logo' style='color: #000000;'><a href='welcome.php' style='color:black;'>Professional's Legacy</a></div>

            </div>";
              }  
            else{
           echo" <div class='component-17'>
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
          <div class='text-wrapper-logo'><a href='index.php' style='color:black;'>Professional's Legacy</a></div>
        </div>";
            }              
            ?>
           
        <div class="text-wrapper">Explore Jobs / Inductions</div>
       
        <img class="image" src="img/Screenshot (830).png">
<img class="image2" src="img/Screenshot (829).png" >
   <img class="image3" src="img/image-removebg-preview (21).png" >
  </body>
</html>
