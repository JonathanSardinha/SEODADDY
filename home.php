<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seo daddy</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="shortcut icon" <img href="images/icon.png">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <style>
      * {
    scrollbar-width: auto;
    scrollbar-color: #e37575 #ffffff;
    }

    /* Chrome, Edge, and Safari */
    *::-webkit-scrollbar {
    width: 16px;
    }

    *::-webkit-scrollbar-track {
     background: #ffffff;
    }

    *::-webkit-scrollbar-thumb {
    background-color: #e37575;
    border-radius: 10px;
    border: 3px solid #ffffff;
    }
    </style>
    
  </head>
  <body>
    <header class="header">
      <a href="home.php" class=""><img src="images/logo.png" width="200px" height="70px"></a>
      <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="home.php#services">Services</a>
        <a href="about.html">About</a>
        <a href="review.html">Review</a>
        <a href="contact.html">Contact</a>
        <a class="username"><strong><?php echo $username;?></strong> </a>
      </nav>
      <span class="logout btn"><a href="logout.php" style="color:white">Logout</a></span>
      <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!--home section start-->

    <section class="home" id="home">
      <div class="content">
        <h3>grow your business with us</h3>
        <p>
          Own a website <strong>?</strong> Finding Difficulty in ranking your website <strong>?</strong><br>  Google adsense not approved <strong>?</strong>  
          <br>
          Don't Worry we got your back!
        </p>
        <a href="#services" class="btn">try for free</a>
      </div>

      <div class="image">
        <img src="images/rocket.svg" alt="" />
      </div>
      <div class="cloud cloud-1"></div>
      <div class="cloud cloud-2"></div>
    </section>

    <!--home section end-->

    <!--services section start-->
    <section class="services" id="services">
      <h1 class="heading">our <span>services </span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/alexa.png" alt="" />
          <h3>Alexa Rank checker</h3>
          <p>
          It is a free online tool that allows users to check the current position of a  website.
          </p>
          <a href="rank.php" class="btn">learn more</a>
        </div>
        <div class="box">
          <img src="images/s-2.png" alt="" />
          <h3>Word Counter</h3>
          <p>
            Word counter tool counts total number of characters, words and sentences.
          </p>
          <a href="wordcounter.html" class="btn">learn more</a>
        </div>
        <div class="box">
          <img src="images/whoischecker.jpg" alt="" />
          <h3>Robots.txt Generator</h3>
          <p>
          A robots.txt file tells search engine crawlers which URLs the crawler can access on your site. 
          </p>
          <a href="audit_tool.php" class="btn">learn more</a>
        </div>
        <div class="box">
          <img src="images/domain.png" alt="" />
          <h3>Domain Age Checker</h3>
          <p>
          Domain Age Checker is a tool for checking the age of any domain name on the Internet.
          </p>
          <a href="Domainage.html" class="btn">learn more</a>
        </div>
        <div class="box">
          <img src="images/meta.png" alt="" />
          <h3>Amazon Affiliate link</h3>
          <p>
           This is a free online tool to create amazon affiliate link from an existing amazon link. 
          </p>
          <a href="amazon.html" class="btn">learn more</a>
        </div>
        <div class="box">
          <img src="images/password.jpg" alt="" />
          <h3>Password Checker</h3>
          <p>
          Check your password’s strength easily using this Password Strength Checker 
          </p>
          <a href="password.html" class="btn">learn more</a>
          </div>

          <div class="box">
            <img src="images/s-6.png" alt="" />
            <h3>Article Rewriter</h3>
            <p>
            Article rewriter is a piece of automated software technology used for rewriting text 
            </p>
            <a href="article.php" class="btn">learn more</a>
          </div>

          <div class="box">
            <img src="images/qrcode.png" alt="" />
            <h3>QR code Generator</h3>
            <p>
            This tool has been especially implemented to make it easy for users to generate QR codes.
            </p>
            <a href="qrcode.html" class="btn">learn more</a>
          </div>
      </div>
    </section>

    <!--service section end-->
  
    <!--footer section start here-->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Our Investment Partners </h3>
          <a href="https://fearlessjournalism.com/"> <i class="fas fa-arrow-left"></i>Fearless Jouranlism </a>
          <a href="https://Karoblogging.in"> <i class="fas fa-arrow-left"></i>Karo Blogging</a>
          <a href="https://sportsinspect.live"> <i class="fas fa-arrow-left"></i>Sports Inspect</a>         
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="home.php"> <i class="fas fa-arrow-right"></i>home</a>
          <a href="home.php#services"> <i class="fas fa-arrow-right"></i>services</a>
          <a href="about.html"> <i class="fas fa-arrow-right"></i>about</a>
          <a href="review.html"> <i class="fas fa-arrow-right"></i>review</a>
          <a href="contact.html"> <i class="fas fa-arrow-right"></i>contact</a>
        </div>

        <div class="box">
          <h3 style="text-align: center; margin-left: 85px;">our services</h3>
          <a href="amazon.html"> <i class="fas fa-check"></i>Alexa Rank checker</a>
          <a href="wordcounter.html"> <i class="fas fa-check"></i>Word Counter</a>
          <a href="audit_tool.php"> <i class="fas fa-check"></i>Robot.txt Generator</a>
          <a href="domainage.html"> <i class="fas fa-check"></i>Domain age checker</a>
        </div>
        <div class="box ">       
          <br>
          <br><br><br>   
          <a href="amazon.html"> <i class="fas fa-check"></i>Amazon Affiliate Link</a>
          <a href="password.html"> <i class="fas fa-check"></i>Password Checker</a>
          <a href="article.php"> <i class="fas fa-check"></i>Article Rewriter</a>
          <a href="qrcode.html"> <i class="fas fa-check"></i>QR code generator</a>

        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#">
            <i class="fab fa-facebook-f"></i>facebook</a
          >
          <a href="#">
            <i class="fab fa-twitter"></i>Twitter</a
          >
          <a href="#/">
            <i class="fab fa-instagram"></i>instagram</a
          >
          <a href="#">
            <i class="fab fa-github"></i>github</a
          >
        </div>
      </div>

      <div class="credit">
        created by <span>Seodaddy Team</span> | © all rights reserved
      </div>
    </section>

    <script src="js/script.js"></script>
  </body>
</html>

