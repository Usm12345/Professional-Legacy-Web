<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" href="img/favicon.png">
    <style>
html, body {
        margin: 0;
        height: 100%;
        margin-right: 0px; /* Adjust this value as needed */
        zoom: .9; /* Reset zoom */
    }

    @media screen and (max-width: 700px) { /* Adjust max-width as needed */
        html, body {
              margin-right: 0px;
    zoom: .9; /* Set initial zoom for smaller screens */
        }
    }
        .main-page {
          
    margin: 0 auto;
    padding: 0 15px; /* Add padding for better readability on smaller screens */
    position: absolute;
    left: 0;
    
        }
        .main-page .text-wrapper-chatwithus{
             position: fixed;
    width: 218px;
    top: 94%;
    left: 88%;
    font-family: inter , sans-serif;
    font-weight: 700;
    color: black;
    font-size: 12px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
        }
        .container {
   width: 1270px;
    overflow-x: hidden;
    white-space: nowrap;
    margin: 20px 0;
    margin-top: 0;
    position: absolute;
    top: 1342px;
    left: 7%;
  }
  .square {
   width: 200px;
    height: 455px;
    background-color: #1f2554;
    display: inline-block;
    margin-right: 10px;
    margin-top: -25px;
    color:white;
    
  }
  .login-box{
      width:102px;
      height:31px;
  }
  
.login-box .login-rectangle {
    position: relative;
    width: 102px;
    height: 31px;
    top: 19px;
    left: 70px;
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
    top: -12px;
    left: 205px;
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
  
  
  .main-page .component {
  position: absolute;
  width: 217px;
  height: 186px;
  top: 813px;
  left: 22px;
  background-color: #000636;
  border-radius: 32px;
  transition: background-color 0.3s, transform 0.3s, width 0.3s, height 0.3s; /* Add smooth transitions for color, movement, width, and height */
}

.main-page .component:hover {
  transform: translateY(-5px) scale(1.05); /* Move the element up by 5 pixels and increase its size by 5% when hovered */
  background-color: #6fb3d2; /* Change the background color to light blue when hovered */
}

.main-page .overlap-group-wrapper {
  position: absolute;
  width: 217px;
  height: 186px;
  top: 813px;
  left: 489px;
  background-color: #000636;
  border-radius: 32px;
  transition: background-color 0.3s, transform 0.3s, width 0.3s, height 0.3s; /* Add smooth transitions for color, movement, width, and height */
}

.main-page .overlap-group-wrapper:hover {
  transform: translateY(-5px) scale(1.05); /* Move the element up by 5 pixels and increase its size by 5% when hovered */
  background-color: #6fb3d2; /* Change the background color to light blue when hovered */
}

.main-page .div-wrapper {
  position: absolute;
  width: 217px;
  height: 186px;
  top: 813px;
  left: 722px;
  background-color: #000636;
  border-radius: 32px;
  transition: background-color 0.3s, transform 0.3s, width 0.3s, height 0.3s; /* Add smooth transitions for color, movement, width, and height */
}

.main-page .div-wrapper:hover {
  transform: translateY(-5px) scale(1.05); /* Move the element up by 5 pixels and increase its size by 5% when hovered */
  background-color: #6fb3d2; /* Change the background color to light blue when hovered */
}

.main-page .component-2 {
  position: absolute;
  width: 217px;
  height: 186px;
  top: 813px;
  left: 955px;
  background-color: #000636;
  border-radius: 32px;
  transition: background-color 0.3s, transform 0.3s, width 0.3s, height 0.3s; /* Add smooth transitions for color, movement, width, and height */
}

.main-page .component-2:hover {
  transform: translateY(-5px) scale(1.05); /* Move the element up by 5 pixels and increase its size by 5% when hovered */
  background-color: #6fb3d2; /* Change the background color to light blue when hovered */
}

.main-page .component-3 {
  position: absolute;
  width: 217px;
  height: 186px;
  top: 1035px;
  left: 127px;
   background-color: #000636;
  border-radius: 32px;
  transition: background-color 0.3s, transform 0.3s, width 0.3s, height 0.3s; /* Add smooth transitions for color, movement, width, and height */
}

.main-page .component-3:hover {
  transform: translateY(-5px) scale(1.05); /* Move the element up by 5 pixels and increase its size by 5% when hovered */
  background-color: #6fb3d2; /* Change the background color to light blue when hovered */
}
.imageaboutus .aboutus {
    position: relative;
    width: 128%;
    height: 566px;
    top: 16px;
    left: -14%;
    object-fit: cover;
}
.imageaboutus {
    width: 100%;
    position: absolute;
    top: 74px;
}

.main-page .rectangle-2 {
  position: absolute;
  width: 217px;
  height: 186px;
  top: 0;
  left: 0;
  background-color: #000636;
  border-radius: 32px;
  transition: background-color 0.3s, transform 0.3s, width 0.3s, height 0.3s; /* Add smooth transitions for color, movement, width, and height */
}

.main-page .rectangle-2:hover {
  transform: translateY(-5px) scale(1.05); /* Move the element up by 5 pixels and increase its size by 5% when hovered */
  background-color: #6fb3d2; /* Change the background color to light blue when hovered */
}



  .button {
    cursor: pointer;
    padding: 10px;
    background-color: #1f2554;
    color: white;
    border: none;
    outline: none;
    margin: 0 5px;
    position:absolute;
    top:1504px;
    left:88%;
    height:100px;
    width:100px;
    border-radius:32px;
    font-size:56px;
    
  }
  .main-page .rectangle-5 {
    top:1193px;
}
.button1 {
    cursor: pointer;
    padding: 10px;
    background-color: #1f2554;
    color: white;
    border: none;
    outline: none;
    margin: 0 5px;
    position:absolute;
    top:1790px;
    left:500px;
  }
  .text-wrapper-testis{
      position: relative;
    top: -12px;
    left: 42px;
    font-size: 15px;
    font-family: inter,sans-serif;
    font-weight: 560;
  }
 
        .main-page .rectangle-3{
               width: 290px;
    height: 346px;
        }
        .main-page .rectangle-4{
    width: 189px;
    height: 190px;
        }
        .main-page .flexcontainer-2 {
            left: 204px;
        }
        .main-page .text-wrapper-14 {
        
            font-size:12px;
            
        }
        .tesi_button{
            background: none;border: none;padding: 0;margin: 0;cursor: pointer;position: absolute;
            width:50px;
            height:50px;
            top: 1523px;left: 1425px;
        }
        .main-page .THE-EXCEL-PRACTICE {
    position: absolute;
    width: 277px;
    top: 218px;
    left: 14px;
    font-family: inter,sans-serif;
    font-weight: 400;
    color: #000000;
    font-size: 12px;
    letter-spacing: 0;
    line-height: normal;
}
        .img {
            max-width: 100%;
            height: auto;
        }   
    .main-page .image {
  position: absolute;
  width: 67px;
  height: 58px;
  top: 18px;
  left: 2px;
  object-fit: cover;
}
.main-page .img-2{
    left: 186px;
    position: relative;
    width: 23px;
    height: 25px;
    top: 310px;
}
         .main-page .overlap-wrapper123 {
  position: absolute;
  width: 217px;
  height: 186px;
  top: 813px;
   left: 30%;
  background-color: #000636;
  border-radius: 32px;
  transition: background-color 0.3s, transform 0.3s, width 0.3s, height 0.3s; /* Add smooth transitions for color, movement, width, and height */
}
.imagetestibutton{
 width:50px;
 height:50px;
}
.main-page .overlap-wrapper123:hover {
  transform: translateY(-5px) scale(1.05); /* Move the element up by 5 pixels and increase its size by 5% when hovered */
  background-color: #6fb3d2; /* Change the background color to light blue when hovered */
}
.main-page .text-wrapper{
    position: relative; width: 96px;    top: -8px;
    left: 87px;font-family: inter,sans-serif;font-weight: 700;color: #010333;font-size: 20px;letter-spacing: 0;line-height: normal;white-space: nowrap;
  }      
  .main-page .text-wrapper-2{
    position: relative ;width: 96px;    top: -38px;
    left: 217px;font-family: inter,sans-serif;font-weight: 700;color: #010333;font-size: 20px;letter-spacing: 0;line-height: normal;white-space: nowrap;
  }
  .main-page .overlap{
    position: relative;
  width: 96px;
  height: 39px;
  top: 9px;
  left:70%;
  }
  .main-page .line{
    top:12px; left: 175px;
  }
  .main-page .rectangle-6 {
    position: absolute;
    width: 401px;
    height: 44px;
    top: 799px;
    left: 40px;
    background-color: transparent;
}
  .main-page .div {
    width:102%;
        height: 3800px;
}
.main-page .rectangle {
     height: 152px;
    left: 22px;
    top:-61px;
    
}
.main-page .business {
    font-family:inter,sans-serif;
}
.main-page .training-courses{
    font-family:inter,sans-serif;
    font-size:22px;
}
.main-page .online-classes{
    font-family:inter,sans-serif;
    font-size:22px;
}
.main-page .text-wrapper-7{
    font-family:inter,sans-serif;
      top: -8px; font-size:22px;
}
.main-page .text-wrapper-8{
    font-family:inter,sans-serif;
}
.main-page .text-wrapper-9{
    font-family:inter,sans-serif;
}
.main-page .text-wrapper-11{
    font-family:inter,sans-serif;
}
.main-page .text{
    font-family:inter,sans-serif;
}
.main-page .text-wrapper-6{
    font-family:inter,sans-serif;
    font-weight:600;
}
.main-page .text-wrapper-18{
    font-family:inter,sans-serif;
    font-weight:600;
    top:1246px;
}
form{
        position: absolute;
    top: 566px;
}
.main-page .text-wrapper-testis{
    font-family:inter,sans-serif;
}


  /* YouTube Icon */
    .youtube-icon {
        position: absolute;
        top:1867px;
        width: 30px;
        height: 30px;
        left: 121px;
        border-radius:7px;
    }

    /* Instagram Icon */
    .insta-icon {
        position: absolute;
        top: 1867px;
        width: 30px;
        height: 30px;
        left: 177px;
    }

    /* Facebook Icon */
    .fb-icon {
        position: absolute;
        top: 1857px;
        width: 50px;
        height: 50px;
        left: 224px;
    }

    /* LinkedIn Icon */
    .linkedin-icon {
        position: absolute;
        top: 1867px;
        width: 30px;
        height: 30px;
        left: 287px;
        border-radius:6px;
    }

    /* WhatsApp Icon */
     .whatsapp-icon {
        position: fixed;
        top: 86%;
        width: 93px;
        height: 63px;
        left: 92%;
        border-radius:7px;
    }
.youtube-icon,
.insta-icon,
.fb-icon,
.linkedin-icon,
.whatsapp-icon {
    transition: transform 0.3s ease-in-out;
}

.youtube-icon:hover,
.insta-icon:hover,
.fb-icon:hover,
.linkedin-icon:hover,
.whatsapp-icon:hover {
    transform: scale(1.5); /* Increase size by 10% */
}    
.main-page .text-wrapper-5 {
    left:37%;
    font-family:inter,sans-serif;
}
.main-page .component {

    left:5%;
}
.main-page .overlap-2 {
   top: 15%;
    left: 9%;
}
.main-page .overlap-group-wrapper {
    left:55%;
}
.main-page .div-wrapper {

    left:62%;
}
.form-input {
            height: 44px;
            width: 402px;
            background-color: #1f2554;
            color: white;
            margin-bottom: 10px; /* Add some margin between inputs */
            
    font-family:inter,sans-serif;

        }

        .form-textarea {
            height: 253px;
            width: 402px;
            background-color: #1f2554;
            color: white;
            margin-bottom: 10px; /* Add some margin between inputs */
            font-family:inter,sans-serif;
        }

        .form-submit {
            height: 44px;
            width: 100px;
            background-color: #1f2554;
            color: white;
            border: none; /* Remove border for button */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        .form-submit:hover {
            background-color: #35438e; /* Change background color on hover */
        }
.main-page .component-2 {
    left:82%;
}
.main-page .component-3 {
    left:10%;
}
.main-page .component-4 {
    left:30%;
}
.main-page .component-5{
    left:79%;
    top:815px;
    
}

.main-page .text-wrapper-10{
    position: absolute;
    width: 218px;
    top: 10px;
    left: 2px;
    font-family: inter,sans-serif;
    font-weight: 700;
    color: #ffffff;
    font-size: 22px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}
.main-page .text-wrapper-121{
    position: relative;
    align-self: stretch;
    font-family: inter,sans-serif;
    font-weight: 400;
    color: #ffffff;
    font-size: 18px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
      top: 23px;
    left: 47px;
}
.main-page .flexcontainer-4 {
    width: 1092px;
    height: 263px;
    top: -41px;
    left: 15%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
    position: relative;
}
.main-page .text-wrapper-122{
    position: relative;
    align-self: stretch;
    font-family: inter,sans-serif;
    font-weight: 400;
    color: #ffffff;
    font-size: 18px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
      top: 43px;
    left: 47px;
}
.main-page .screenshot-8{
      position: absolute;
    width: 136px;
    height: 123px;
    top: 55px;
    left: 41px;
    object-fit: cover;
}
.main-page .component-6shop{
        position: absolute;
    width: 223px;
    height: 186px;
    top: 1035px;
    left: 55%;
}
.main-page .text-wrapper-6{
     top: 1273px;
    left: 38%;
}
.main-page .component-9{
    left:51%;
}
.main-page .component-911{
   position: absolute;
    width: 356px;
    height: 371px;
    top: 1402px;
    left:76%;
}
.main-page .component-8 {
    left:27%;
}
.main-page .text-wrapper-24 {
    left:83%;
}
.main-page .image-2 {
    position: absolute;
    width: 537px;
    height: 400px;
    top: 1381px;
    left: 7%;
    object-fit: cover;
}
.box{
    width:100%;
    height:600px;
}
.box .aboutusbackground{
    position:relative;
    width:100%;
    height:1208px;
    top:0;
    left:0;
    background:#DEDEDE;
}
.imageaboutusleft{
    width:237px;
    height:418px;
}
.imageaboutusleft .imgleft {
   position: absolute;
    width: 202px;
    height: 418px;
    top: 79px;
    left: 640px;
}
.main-page .text-3 {
    font-family: inter, sans-serif;
    font-weight: 400;
    color: #000000;
    font-size: 16px;
    position: relative;
    align-self: stretch;
    letter-spacing: 0;
    line-height: normal;
    text-align: center;
}
.imageaboutus .imgmiddle{
        position: absolute;
    width: 202px;
    height: 433px;
    top: 30px;
    left: 826px;
}
.imageaboutusright{
    width:202px;
    height:433px;
    
}
.imageaboutusright .imgright {
   position: absolute;
    width: 178px;
    height: 418px;
    top: 59px;
    left: 1009px;
}
.component-aboutus{
    position:relative;
    left:10%;
    top:-580px;
    
}

.contactus-component {
    position: absolute;
    left: 62%;
    top: 0%;
}
.main-page .unlock-your{
    position:absolute;
    width:614px;
    top:34px;
    left:23px;
    font-family: Inter ,sans-serif;
    font-weight:700;
    font-size:40px;
    
}
.main-page .text-wrapper-15 {
    font-family: Inter, sans-serif;
    left: 620px;
}
.main-page .text-wrapper-17 {
    font-family: Inter, sans-serif;
    font-weight: 500;
        font-size: 26px;
}
    .main-page .text-wrapper-16 {
    font-family: Inter, sans-serif;
    font-weight: 600;
    font-size:46px;
    top: 39px;
    position: relative;
    left: 124px;
    }
.main-page .p{
    font-size:19px;
    width:500px;
}
.main-page .stars112 {
    position: absolute;
    top: 85px;
    left: -39px;
}
.main-page .stars111 {
    position: absolute;
    top: 85px;
    left: 170px;
}
.main-page .stars {
    position: absolute;
    top: 85px;
    left: 163px;
}
.main-page .flexcontainer-3 {
    width: 669px;
    height: 156px;
    top: 422px;
    left: 22%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 5px;
    position: relative;
    text-align: center;
}
.main-page .text-wrapper-3{
    top:29px;
    font-family:inter,sans-serif;
}
.main-page .screenshot-5 {
    position: absolute;
    width: 155px;
    height: 121px;
    top: 46px;
    left: 15px;
    object-fit: cover;
}
video {
    width: 200px;
    height: 401px;
    border-radius: 0;
    margin: 0;
    padding: 0;
    top: -20px;
    position: relative;
}
.main-page .rectangle-10 {
    top:3752px;
}
@media only screen and (min-width: 340px) and (max-width: 768px) {
  .main-page .text-wrapper,
  .main-page .line,
  .main-page .text-wrapper-2,
  .main-page .text-centre,
  .main-page .text-wrapper-3,
  .main-page .unlock-your,
  .main-page .p,
  .main-page .overlap-2 {
    font-size: 14px;
  }
  
  .main-page .text-wrapper,
  .main-page .text-wrapper-2,
  .main-page .text-centre,
  .main-page .text-wrapper-3,
  .main-page .unlock-your,
  .main-page .p {
    width: auto; /* Allow text to wrap */
    left: 10px; /* Adjust left position */
  }
.main-page .img-2 {
   left: 104px;
    position: relative;
    width: 16px;
    height: 24px;
    top: 198px;
}
.main-page .img {
    position: absolute;
    width: 951px;
    height: 1px;
    top: 57px;
    left: 0px;
    object-fit: cover;
}

  .main-page .text-wrapper {
    top: 10px; /* Adjust top position */
  }
.main-page .overlap-6 {
    position: relative;
    width: 99px;
    height: 82px;
    top: 17px;
    left: 9px;
}
.main-page .text-3 {
    font-family: inter, sans-serif;
  
    text-align: center;
}
.main-page .text-wrapper-122{
    position: relative;
    align-self: stretch;
    font-family: inter, sans-serif;
    font-weight: 400;
    color: #ffffff;
    font-size: 9px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
    top: 25px;
    left: 29px;
}

.main-page .stars112 {
    position: absolute;
    top: 36px;
    left: 7px;
}
.main-page .stars111 {
    position: absolute;
    top: 36px;
    left: 216px;
}
.main-page .overlap-5 {
    position: relative;
    width: 100px;
    height: 100px;
    top: 19px;
    left: 9px;
}
  .main-page .text-wrapper-3,
  .main-page .unlock-your {
    font-size: 14px; /* Adjust font size */
  }
  .tesi_button{
              position: absolute;
    top: 1023px;
    left: 389px;
    
        }
   .imagetestibutton {
    width: 34px;
    height: 34px;
        top: 24px;
    position: absolute;
    left: 53px;
}

  .main-page .p {
    width: 90%; /* Adjust width */
    left: 5%; /* Adjust left position */
    top: 150px; /* Adjust top position */
  }

  .main-page .overlap-2 {
    width: 90%; /* Adjust width */
    top: 13%; /* Adjust top position */
    left: 5%; /* Adjust left position */
  }
  .main-page .image {
  position: absolute;
  width: 30px;
  height: 27px;
  top: 22px;
  left: 8px;
  object-fit: cover;
}
.main-page .text-wrapper-3{
    left:38px;
    top:29px;
}
.main-page .text-wrapper-2{
    width: auto;
    left: 37px;
    font-size: 12px;
    top: -31px;
}
.main-page .text-wrapper {
        width: auto;
    left: -37px;
    font-size: 12px;
    top: 0px;
  }
  .main-page .login-box .login-rectangle{
      position: relative;
    width: 56px;
    height: 21px;
    top: 18px;
    left: -45px;
  }
  .main-page .register-box .register-rectangle{
        width: 56px;
    height: 21px;
    top: -13px;
    left: 34px;
  }
  .container{
            width: 403px;
    height: 332px;
     top: 40%;
    left: 8%;
      
  }
  .main-page .stars{
      
  }
  video{
        width: 186px;
    height: 195px;
    border-radius: 0;
    margin: 0;
    padding: 0;
    top: 13px;
    position: relative;
    left: 0px
      
  }
  .square{
         width: 188px;
    height: 291px;
  }
  .form-input {
    height: 25px;
    width: 180px;
    
    color: white;
    margin-bottom: 10px;
    position:relative;
    top:-380px;
    left:-29px;
}
.form-submit {
    height: 44px;
    width: 100px;
    background-color: #1f2554;
    color: white;
    border: none;
    cursor: pointer;
        top: -378px;
    position: relative;
    
}
.form-input::placeholder {
            font-size: 9px; /* Adjust the font size for smaller screens */
        }
.form-textarea {
    height: 70px;
    width: 180px;
    position:relative;
    top:-380px;
    left:-29px;
}
.form-textarea::placeholder {
            font-size: 9px; /* Adjust the font size for smaller screens */
        }
/* YouTube Icon */
    .youtube-icon {
        position: absolute;
        top: 987px;
        width: 30px;
        height: 30px;
        left: 62px;
    }

    /* Instagram Icon */
    .insta-icon {
        position: absolute;
        top: 987px;
        width: 30px;
        height: 30px;
        left: 104px;
    }

    /* Facebook Icon */
    .fb-icon {
        position: absolute;
    top: 978px;
    width: 50px;
    height: 50px;
    left: 136px;
    }

    /* LinkedIn Icon */
    .linkedin-icon {
        position: absolute;
        top: 987px;
        width: 30px;
        height: 30px;
        left: 188px;
    }

    /* WhatsApp Icon */
    .whatsapp-icon {
        position: fixed;
        top: 87%;
           width: 56px;
        height: 38px;
        left: 86%;
    }
  .main-page .rectangle-10 {
    position: absolute;
    width: 1211px;
    height: 49px;
    top: 2279px;
    left: -14px;
    background-color: #1f2554;
}
  .main-page .overlap {
    width: auto;
    left: 73%;
}
   .main-page .div {
    background-color: #ffffff;
    overflow: hidden;
    width: 1200px;
       height: 2300px;
    position: relative;
    left:-4px;
}
form {
    position: absolute;
    top: 368px;
    left: -21px;
}
  .main-page .line {
    left: 14px; /* Adjust left position */
    width:2px;
    top:8px;
    height:40px;
  }
  .main-page .image-2 {
         width: 198px;
    height: 150px;
    top: 58%;
    left: 7%;
      
  }
 
  .main-page .element111{
     width: 200px;
    left: -11px;
    position: absolute;
  }
  .main-page .unlock-your {
    top:20px;
}
.main-page .p {

    top:75px;
    font-size:8px;
    width:  150px;
    left:10px;
    
}
.main-page .rectangle {
    
    width:370px;
       top: -45px;
    left: 37px;
    height:108px;
}
.main-page .div {
    width:110%;
}
.main-page .screenshot {
    position: absolute;
    width: 350px;
    height: 29px;
        left:0px;
}
.main-page .screenshot-3 {
    position: absolute;
    width: 50px;
    height: 52px;
    top: 26px;
    left: 0px 
}

.main-page .text-wrapper-4 {
    position: absolute;
    width: 291px;
    top: 27px;
    left: 41px;
    font-size:10px;
}

.main-page .text-wrapper-9 {
    font-size:12px;
    left:-54px;
}
.main-page .text-wrapper-5 {
    position: relative;
    width: auto;
    top: 82px;
    left: 33%;
    font-size: 22px;
}
.main-page .text-wrapper-6 {
    left: 34%;
    position: absolute;
    width: auto;
    top: 867px;
    font-size: 24px;
}
.imageaboutus .aboutus {
    width: 120%;
    height: 215px;
    top: -65px;
    left: -50px;
    object-fit: cover;
}
.box .aboutusbackground {
    position: relative;
    width: 107%;
    height: 705px;
    top: -39px;
    left: -29px;
}
.main-page .text-wrapper-15 {
    position: absolute;
    width: 334px;
    top: -34px;
    left: 34%;
    font-family: inter, sans-serif;
    font-weight: 700;
    color: #1f2554;
    font-size: 24px;
    letter-spacing: 0;
    line-height: normal;
}
.main-page .text-wrapper-18 {
   position: absolute;
    width: 334px;
    top: 704px;
    left: 5%;
    font-family: inter,sans-serif;
    font-weight: 700;
    color: #1f2554;
    font-size: 24px;
    letter-spacing: 0;
    line-height: normal;
}
.main-page .text-wrapper-19 {
    position: absolute;
    width: 312px;
    top: 390px;
    left: 5%;
    font-family: inter,sans-serif;
    font-weight: 400;
    color: #000000;
    font-size: 13px;
    letter-spacing: 0;
    line-height: normal;
}
.main-page .component {
  position: relative;
    width: 100px;
    height: 102px;
    top: 287px;
    left: 7%;
}
.main-page .categories{
    position: relative;
    top: -162px;
    height: 10px;
    
}
.main-page .span {
    font-weight: 700;
    font-size: 16px;
    top: -7px;
    position: relative;
}
.main-page .span-wrapper {
    font-family: inter,sans-serif;
    font-weight: 700;
    color: #000000;
    font-size: 9px;
    position: relative;
    align-self: stretch;
    letter-spacing: 0;
    line-height: normal;
}
.main-page .overlap-7 {
    position: relative;
    width: 100px;
    height: 100px;
    top: 15px;
    left: 29px;
}
.main-page .text-wrapper-17 {
    font-family: inter,sans-serif;
    font-weight: 400;
    color: #000000;
       font-size: 11px;
    letter-spacing: 0;
}
.main-page .text-wrapper-16 {
font-family: inter, sans-serif;
    font-weight: 700;
    /* color: transparent; */
    font-size: 27px;
    letter-spacing: 0px;
    top: -394px;
    position: relative;
    left: 71px;
    line-height: 0px;
}
.main-page .rectangle-5 {
        top: 643px;
}
.main-page .flexcontainer-3 {
    width: 603px;
    height: 184px;
    top: 310px;
    left: -101px;
    line-height: 0;
    text-align: center;
}
.main-page .flexcontainer-3 > * {
    margin-bottom: -12px; /* Adjust margin as needed */
}
.main-page .element {
    height: 304px;
} 
.main-page .element-2 {
    top:300px;
    height:420px;
} 
.main-page .flexcontainer-4 {
    width: 315px;
    top: 237px;
    left: 106px;
    line-height: 0px;
    position: absolute;
}
.main-page .business {
    position: absolute;
    width: auto;
    top: -2px;
        left: 0px;
    font-size:12px;
}
.main-page .training-courses {
    font-size:13px;
    left:-57px;
}
.main-page .screenshot-2 {
    position: absolute;
    width: 50px;
    height: 52px;
    top: 26px;
    left: 3px 
}
.main-page .overlap-group-2 {
    position: relative;
    width: 100px;
    height: 100px;
    left:25px;
}
.main-page .overlap-wrapper123 {
    position: relative;
    width: 100px;
    height: 100px;
    top: 185px;
    left:38%;
}
.main-page .overlap-3 {
    position: relative;
    width: 100px;
    height: 100px;
    top: 16px;
    left: 30px;
}
.main-page .overlap-4 {
    position: relative;
    width: 100px;
    height: 100px;
    top: 16px;
    left: 20px;
}
.main-page .overlap-group-wrapper {
     position: relative;
    width: 100px;
    height: 100px;
    top: 85px;
    left: 68%
}

.main-page .div-wrapper {
    position: relative;
    width: 100px;
    height: 100px;
        top: 125px;
    left: 68%;
}

.main-page .component-2 {
       position: relative;
    width: 100px;
    height: 100px;
      top: 24px;
    left:38%;
}
.main-page .component-3 {
       position: relative;
    width: 100px;
    height: 100px;
   top: -77px;
        left: 8%;
}
.main-page .component-4 {
     position: relative;
    width: 100px;
    height: 100px;
    top: -86px;
    left:0%;
}
.main-page .component-5 {
     position: relative;
    width: 100px;
    height: 100px;
    top: -186px;
    left: 30%;
}
.main-page .component-6shop{
      position: relative;
    width: 100px;
    height: 100px;
    top: -286px;
    left: 60%;
}


.main-page .text-wrapper-7 {
  
    font-size: 10px;
    left: -58px;
    top: -5px;
}
.main-page .text {
    font-size:12px;
    left:-59px;
}
.main-page .text-wrapper-12 {
        font-size: 10px;
    left: 0px;
    position: relative;
    top: -11px
}

.main-page .text-wrapper-11 {
     font-size: 13px;
    left: -53px;
    top: 12px
}
.text-wrapper-testis{
      position: relative;
    top: 21px;
        left: 33px;
    font-size: 15px;
    font-family: inter,sans-serif;
    font-weight: 560;
}
.main-page .text-wrapper-chatwithus {
    position: fixed;
    width: 218px;
    top: 94%;
    left: 67%;
    font-family: inter, sans-serif;
    font-weight: 700;
    color: black;
    font-size: 8px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
}
.main-page .text-wrapper-8 {
      font-size:12px;
    left:-59px;
}
.main-page .online-classes {
    font-size:12px;
    left:-54px;
}
.main-page .screenshot-4 {
    position: absolute;
    width: 50px;
    height: 52px;
    top: 26px;
    left: 3px 
}
.main-page .screenshot-5 {
      position: absolute;
    width: 50px;
    height: 52px;
    top: 26px;
    left: 18px 
}
.main-page .screenshot-6 {
      position: absolute;
    width: 50px;
    height: 52px;
    top: 26px;
    left: 18px 
}
.main-page .screenshot-7 {
      position: absolute;
    width: 50px;
    height: 52px;
    top: 26px;
    left: 0px; 
}
.main-page .screenshot-8{
      position: absolute;
    width: 50px;
    height: 52px;
    top: 39px;
    left: 27px; 
}
.main-page .screenshot-9{
      position: absolute;
    width: 50px;
    height: 52px;
    top: 39px;
    left: 27px; 
}
.main-page .screenshot-10{
      position: absolute;
    width: 50px;
    height: 52px;
    top: 39px;
    left: 27px; 
}
.main-page .rectangle-2 {
     position: relative;
    width: 108px;
    height: 100px;
            top: 229px;
    left:37%;
}
.main-page .text-wrapper-10 {
    position: absolute;
    width: 20px;
    top: 3px;
    left: 23px;
    font-size:11px;
}
.main-page .text-wrapper-121{
    position: absolute;
    width: auto;
  
    font-size:10px;
        top: 11px;
    left: 12px;
}
.main-page .component-7 {
    top:920px;
    left:2px;
}
.main-page .component-8 {
    top:920px;
   left: 49%;
}
.main-page .rectangle-3 {
width: 172px;
    height: 223px;
}
.main-page .component-9 {
    left:400%;
}
.main-page .rectangle-4 {
    width: 126px;
    height: 127px;
}

.main-page .component-911{
   position: absolute;
    width: 356px;
    height: 371px;
    top: 1402px;
    left:226%;
}        
.main-page .text-wrapper-24 {
    position: absolute;
    width: 154px;
    top: 1192px;
    left: 57%;
    font-family: inter,sans-serif;
    font-weight: 400;
    color: #000636;
    font-size: 17px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
    white-space: nowrap;
}
.main-page .overlap-10 {
    position: absolute;
    width: 1201px;
    height: 1365px;
    top: 1245px;
    left: 0;
}
.main-page .flexcontainer-2 {
      left: 128px;
}
.main-page .text-wrapper-14 {
    font-size: 6px;
}
.main-page .THE-EXCEL-PRACTICE {
    position: absolute;
    width: 143px;
    top: 135px;
    left: 14px;
    font-family: inter,sans-serif;
    font-weight: 400;
    color: #000000;
    font-size: 7px;
    letter-spacing: 0;
    line-height: normal;
}
.main-page .star {
    left: 50px;
    position: absolute;
    width: 15px;
    height: 15px;
    top: 202px;
}
.main-page .star-2 {
     left: 63px;
    position: absolute;
    width: 15px;
    height: 23px;
    top: 198px;
}
.main-page .star-3 {
        left: 77px;
    position: absolute;
    width: 15px;
    height: 24px;
    top: 198px;
}
.main-page .star-4 {
           left: 90px;
    position: absolute;
    width: 15px;
    height: 24px;
    top: 198px;
}

.main-page .star-5 {
    left: 105px;
    position: absolute;
    width: 16px;
    height: 25px;
    top: 198px;
}
}

</style>
</head>
  
  <body >
   
    <div class="main-page" style="width:100% ;  left:-14px;">
      <div class="div" >
      <img class="image" src='img/image-31333-1.png'   />
     
        <?php
    
   require_once 'header.php';
     require_once 'config.php';
      session_start();
      ?>
       
        <div class="text-wrapper-3" >Professional's Legacy</div>
       <div class="image123" style="
    top: 43px;
    position: relative;">
            <img class="element111" src="img/1-1.png" style="width: 100%;
    left:-11px;
    position: relative;">
            <p class="unlock-your">Unlock Your Potential: <br>Skills for Jobs &amp; Financial<br>Triumph.</p>
            <p class="p">
              Welcome to the go-to hub for business students! Unlock success in CA, ACCA, CMA, Business Studies and more
              with our top notch trainings.
            </p>
          </div>
          <div class="overlap-2" style="">
            <div class="rectangle" >
            <p class="text-wrapper-4">TRUSTED BY COMPANIES AND EMPLOYEES</p>
            <img class="img" src="img/line-2.svg"   />
            <img class="screenshot" src="img/screenshot-609-1.png" />
          </div>
        </div>
        <div class="text-wrapper-chatwithus">Chat with Us</div>
        <p class="text-wrapper-5" >Top Categories </p>
        <div class="text-wrapper-6" >Testimonials:</div>
        <div class="categories">
      <div class="component" >
        <a href="Businessservices.php">
          <div class="overlap-group-2">
            <img class="screenshot-2" src="img/businessqual.png"  />
            <div class="business">Business<br />Services</div>
          </div>
        </a>
      </div>
        <div class="overlap-wrapper123" ><a href="trainingcourse.php">
          <div class="overlap-3">
            <div class="training-courses">Training<br />(Courses)</div>
            <img class="screenshot-3" src="img/trainingcourse.png"  />
          </div>
        </a>
        </div>
      <div class="overlap-group-wrapper">
        <a href="OnlineClass.php">
          <div class="overlap-4">
            <div class="online-classes">Online Classes<br />(Qualifications)</div>
            <img class="screenshot-4" src= "img/onlinecourses.png"  />
          </div>
        </a>
      </div>
       
    
        
        <div class="component-4"  >
          <div class="overlap-8">
           <div class="rectangle-2">
              <span class="text-wrapper-122" >(Coming Soon)</span>
            <div class="text-wrapper-10" >Career Counselling</div>
            <img class="screenshot-8" src= "img/careercounsellingpic.png" >
           </div>
          </div>
        </div>
        <div class="component-5"  >
         <div class="overlap-8">
            <div class="rectangle-2">
            <a href="WorkwithUS.php">
             <div class="text-wrapper-11">Work with Us</div>
             <img class="screenshot-9" src= "img/workwithusimg.png"  />
            </a>
            </div>
          </div>
        </div>
        <div class="component-6shop" >
          <div class="overlap-8">
          <div class="rectangle-2">
            <div class="flexcontainer">
              <p class="text">
                <span class="span">Shop<br /></span>
              </p>
              <p class="text"><span class="text-wrapper-12">(Coming Soon)</span></p>
            </div>
            <img class="screenshot-10" src= "img/shoppic.png"  />
           </div>
          </div> 
        </div>
      </div>
        
       <div class="container" id="container">
  <div class="square">
      <video controls="">
             <source src= "videos/V4.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Mr. Abdullah Zafar</div>
                <div class="stars112" >
                <img class="star" src="img/star-5-2.svg">
            <img class="img-2" src= "img/star-5-2.svg"  />
            <img class="star-2" src= "img/star-5-2.svg"  />
            <img class="star-3" src= "img/star-5-2.svg"  />
            <img class="star-4" src= "img/star-5-2.svg"  />
            </div>
           
  </div>
  <div class="square">
      <video controls="">
              <source src="videos/Video-C.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>  <div class="text-wrapper-testis" style="left:65px;">Ms. Laiba</div>
                <div class="stars111">
                <img class="star" src="img/star-5-2.svg">
            <img class="img-2" src= "img/star-5-2.svg"  />
            <img class="star-2" src= "img/star-5-2.svg"  />
            <img class="star-3" src= "img/star-5-2.svg"  />
            <img class="star-4" src= "img/star-5-2.svg"  />
            </div>
            </div>
  <div class="square"><video controls="">
             <source src= "videos/Video-D.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis" style="left:64px;">Mr. Wahib</div>
              <div class="stars" style="left:378px">
                <img class="star" src="img/star-5-2.svg">
            <img class="img-2" src= "img/star-5-2.svg"  />
            <img class="star-2" src= "img/star-5-2.svg"  />
            <img class="star-3" src= "img/star-5-2.svg"  />
            <img class="star-4" src= "img/star-5-2.svg"  />
            </div>
            
              </div>
  <div class="square"><video controls="">
             <source src= "videos/Video-E.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Mr. Khizar Khan</div>
                <div class="stars" style="left:592px">
                <img class="star" src="img/star-5-2.svg">
            <img class="img-2" src= "img/star-5-2.svg"  />
            <img class="star-2" src= "img/star-5-2.svg"  />
            <img class="star-3" src= "img/star-5-2.svg"  />
            <img class="star-4" src= "img/star-5-2.svg"  />
            </div>
              </div>
  <div class="square">
      <video controls="">
             <source src= "videos/Video-F.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis" style="left:66px;">Mr. Aliyan</div>
               <div class="stars" style="left:806px">
                <img class="star" src="img/star-5-2.svg">
            <img class="img-2" src= "img/star-5-2.svg"  />
            <img class="star-2" src= "img/star-5-2.svg"  />
            <img class="star-3" src= "img/star-5-2.svg"  />
            <img class="star-4" src= "img/star-5-2.svg"  />
            </div>
            </div>
  <div class="square">
      <video controls="">
             <source src= "videos/WhatsApp Video 2024-04-15 at 5.21.44 PM.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Mr. Hassan Tallat</div>
              <div class="stars" style="left:1020px">
                <img class="star" src="img/star-5-2.svg">
            <img class="img-2" src= "img/star-5-2.svg"  />
            <img class="star-2" src= "img/star-5-2.svg"  />
            <img class="star-3" src= "img/star-5-2.svg"  />
            <img class="star-4" src= "img/star-5-2.svg"  />
            </div>
  </div>
  <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/V2.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
             
            
            <div class="text-wrapper-testis">Student</div>
            
  </div>
  <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/V3.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Sufyan Naveed</div>
            
  </div>
  <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/V2.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Saib Rehman</div>
            
  </div>
  <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/V3final.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Faisal Mahmood</div>
            
  </div>
   <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/V5.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Aqib Jawaid</div>
    </div>
     
     <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0001.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Aashir</div>
    </div>
     <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0004.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">M.Aqib</div>
    </div>
     <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0006.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">M.Saeed</div>
    </div>
    
     <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0008.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Akrash Ali</div>
    </div>
    
    
      <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0012.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">M. Rafay Ali</div>
    </div>
      <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0013.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">M.Ahmad</div>
    </div>
      <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0015.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Ayaan</div>
    </div>
      <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0021.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">M. Mithhal Lashari </div>
    </div>
    
      <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0022.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Abdul Majeed </div>
    </div>
    
      <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0023.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">M.Ali </div>
    </div>
    
      <div class="square">
      <video width="200px" height="401px" controls="" style="border-radius: 0;margin: 0;padding: 0;top: -20px;position: relative;">
             <source src= "videos/VID-20240326-WA0024.mp4"  type="video/mp4">
              Your browser does not support the video tag.</video>
              <div class="text-wrapper-testis">Taimoor Atari </div>
    </div>
    
    
    
    
    
    
</div>
<a href="reviewstesti.html">
          <button  class="tesi_button">
   <img src="img/Circled Right.png" alt="Circled Right" class="imagetestibutton" >
</button>
</a>

        <div class="overlap-10" style="width:100%">
          <div class="box"><div class="aboutusbackground"></div>
         <div class="imageaboutus"><img class="aboutus" src="img/Web Developer Course YouTube Thumbnail.png" /></div>
          </div>
          
          <div class="text-wrapper-15">About Us</div>
          <div class="flexcontainer-3">
            <p class="text-2">
              <span class="text-wrapper-16">Join us in crafting a legacy of<br /></span>
            </p>
            <p class="text-2"><span class="text-wrapper-16">achievement together.</span></p>
          </div>
          <div class="flexcontainer-4" >
            <p class="text-3">
              <span class="text-wrapper-17"
                >Welcome to Professionals Legacy, where we&#39;ve been steering professionals toward success since 2019.
                Specialising in business consultancy and top-notch trainings, we guide students pursuing qualifications
                like CA, CMA, ACCA, CFA, and more. <br
              /></span>
            </p>
            <p class="text-3">
              <span class="text-wrapper-17"><br /></span>
            </p>
            <p class="text-3">
              <span class="text-wrapper-17"
                >Our crew of seasoned professionals is here to make sure you&#39;re not just learning the ropes but
                mastering the game. Beyond the textbooks, we offer practical insights to prep you for the real-world
                challenges ahead.<br
              /></span>
            </p>
            <p class="text-3">
              <span class="text-wrapper-17"><br /></span>
            </p>
            <p class="text-3">
              <span class="text-wrapper-17"
                >At Professionals Legacy, our mission is simple: to be your unwavering support on the road to
                success.</span
              >
            </p>
          </div>
          
          <div class="rectangle-5" style="width:100%;"></div>
          <img class="image-2" src= "img/contact-us.png" >
          <div class="text-wrapper-18">Contact Us</div>
    <div class="contactus-component">
          
          <div class="rectangle-6">
 <form action="process_form.php" method="post">
    <input type="text" name="full_name" placeholder="  Enter your full name" class="form-input">
    <br>
    <input type="text" name="email" placeholder="  Enter your email address" class="form-input">
    <br>
    <input type="text" name="whatsapp_number" placeholder="  Enter your WhatsApp number" class="form-input">
    <br>
    <textarea name="message" placeholder=" Enter your Message" class="form-textarea"></textarea>
    <br>
    <input type="submit" value="Submit" class="form-submit">
</form>
</div>
</div>      
<a href="https://youtube.com/@professionallegacy?si=P0h-kuQc3ylIWgnD" target="_blank">
    <img src="img/youtubeiconfinal.png" alt="" class="youtube-icon">
</a>

<a href="https://instagram.com/professionalslegacy?igshid=NzZlODBkYWE4Ng==" target="_blank">
    <img src="img/insta-icon.png" alt="" class="insta-icon">
</a>

<a href="https://www.facebook.com/ProfessionalLegacy2?mibextid=ZbWKwL" target="_blank">
    <img src="img/facebookiconfinal.webp" alt="" class="fb-icon">
</a>

<a href="https://www.linkedin.com/company/professionallegacy/" target="_blank">
    <img src="img/linkediniconfinal.png" alt="" class="linkedin-icon">
</a>

<a href="https://wa.me/923000855025" target="_blank">
    <img src="img/whatsapp-icon.png" alt="" class="whatsapp-icon">

</a>
    </div>
        <div class="rectangle-10" style="width:104% ; " ></div>
        
   
    </div>
    </div>
    <script>
 const container = document.getElementById('container');

  function scrollLeft() {
    container.scrollBy({
      top: 0,
      left: -150, // Adjust this value according to your needs
      behavior: 'smooth'
    });
  }

  function scrollRight() {
    container.scrollBy({
      top: 0,
      left: 20, // Adjust this value according to your needs
      behavior: 'smooth'
    });
    loopSquares(); // Call loopSquares() when scrolling right
  }

  function loopSquares() {
    const firstSquare = container.querySelector('.square');
    container.appendChild(firstSquare.cloneNode(true));
    container.removeChild(firstSquare);
  }


  
  
</script>
  </body>
  
</html>
