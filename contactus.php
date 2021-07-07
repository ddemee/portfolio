<?php

$email=$_POST['email'];
$name= $_POST['name'];
$mobile= $_POST['mobile'];
$message= $_POST['message'];



$to = "ddemetrashvili@ddcode.ge";
$body = "From :".$name."\r\n".
        "Mobile :".$mobile. "\r\n".
        "Message :".$message. "\r\n".;
$headers = "From: ".$email . "\r\n" .;

mail($to,$body,$headers);
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="description" content="fortinet Firewalls Internet  fortinet.ge ფორტინეტ.გე უსაფრთხო ქსელი ინტერნეტი აპარატურა  ფორტინეტი ქსელი usaftxo qseli interneti fortinet saqartvelo ფორტინეტ გეორგია ფაერვოლი სდ ვან ახალი თაობის ფაერვოილი  ">
        <meta name="keywords" content="დაცული ინტერნეტსივრცე შენს ბიზნესში ფორტინეტი fortinet.ge ფორტინეტ.გე უსაფრთხო ქსელი ინტერნეტი აპარატურა ">
        <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
        <meta name="author" content="dima demetrashvili">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="/bower_components/alk-life/css/alk-life.min.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link type="text/css" href="css/fonts.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/ss.sass">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <script src="https://kit.fontawesome.com/6de6aa5275.js" crossorigin="anonymous"></script> 
        <link rel="icon" href="img/Favicon.png">
        <title>ფორტინეტ საქართველო </title>
        <script src="jquery/jquery-3.5.1.js"></script>
        <script src="js/app.js"></script>
    </head>
<body>
<header id="header" class="header">
        <div class="container relative">
                <nav class="navigation">
                    <div class="logo-box">
                        <!-- white  logooo -->
                        <a  href="index.html"><img class="whitelogo" src="img/Fortinet-logo-white.png" alt="Fortinet-logo-white.png"></a>
                        <!-- --- Blackk logoo -->
                        <a  href="index.html"><img class="logo" src="img/Fortinet_logo.svg.png" alt="Fortinet-logo-white.png"></a>
                        <!-- white  logooo IT Tech -->
                        <a  href="https://ittech.ge/" target="_blank"><img class="ittechwhitelogo" src="img/Tetri_1.png" alt="Fortinet-logo-white.png"></a>
                        <!-- --- Blackk logoo IT Tech -->
                        <a  href="https://ittech.ge/" target="_blank"><img class="ittechlogo" src="img/Shavi_1.png" alt="Fortinet-logo-white.png"></a>
                    </div>
                    <button class="burgerbar" id="hamburger">
                        <i class="fas fa-bars"></i>
                    </button>
                        <ul class="nav-links" id="menu">
                            <a href="index.php"><li> მთავარი</li></a>
                            <a href="#product"><li></li>პროდუქცია</li></a>
                            <a href="#footer"><li></li>ჩვენს შესახებ</li></a>
                            <a href="#"><li></li>სიახლე</a>
                            <a href="contactus.html"><li></li>კონტაქტი</li></a>
                        </ul>
                        <div  class="btn-group">
                            <a class="language active" href="index.html">Geo</a>
                            <div class="divider"></div>
                            <a class="language" href="indexeng.html">Eng</a>
                        </div>
                </nav>
            </div>
</header>
        <section class="thankyou">
                

                <div class="jumbotron text-center">
                <div class="fa-4x">
                
                <i class="fas fa-check" style="color:#2ECC71"></i>

                </div>
                <h1 class="display-3">Thank you</h1>
                <p class="lead"><strong>Your request have been sent correctly.</p>
                <hr>
                </div>

        </section>
<footer class="site-footer" id="footer">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <img src="img/Logo_1.png" alt="">
                  <p class="text-justify"><i>IT Tech </i>საერთაშორისო კომპანია „აითი თექ“ მრავალი წლის განმავლობაში ფუნქციონირებს საქართველოს ბაზარზე. იგი ხელს უწყობს კომპანიათა ზრდას როგორც საქართველოს, ასევე მსოფლიო ბაზარზე.</p>
                </div>
      
                <div class="col-xs-6 col-md-3">
                  <h6>Contact Us</h6>
                  <ul class="footer-links">
                        <li><a href="https://www.google.ge/maps/place/%E1%83%A8%E1%83%9E%E1%83%A1+%E1%83%90%E1%83%98%E1%83%97%E1%83%98+%E1%83%97%E1%83%94%E1%83%A5+LTD+IT+TECH/@41.7195515,44.8002811,17z/data=!3m1!4b1!4m5!3m4!1s0x40440ce640cda849:0x831d2c554f67ac8f!8m2!3d41.7194475!4d44.802121"><i class="fas fa-map-marker-alt"></i>ცოტნე დადიანის ქ. 7, თბილისი 1010</a></li>
                        <li><a href="#"><i class="fas fa-phone-alt"></i>032 2 04 10 20</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>contactus@ittech.ge</a></li>
                  </ul>
                </div>
                <div class="col-xs-6 col-md-3">
                    <h6>Fortinet Official Web-Page</h6>
                    <ul class="footer-links">
                          <li><a href="https://www.fortinet.com/"><img src="img/Fortinet-logo-white.png" alt=""></a></li>
                    </ul>
                  </div>
              </div>
              <hr>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
               <a href="#">IT Tech</a>.| Made By Deme Development
                  </p>
                </div>
      
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
                  </ul>
                </div>
              </div>
            </div>
</footer>
</body>
</html>