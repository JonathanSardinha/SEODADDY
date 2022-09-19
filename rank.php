<?php
function alexaRank($url) {
 $alexaData = simplexml_load_file("http://data.alexa.com/data?cli=10&url=".$url);
 $alexa['globalRank'] =  isset($alexaData->SD->POPULARITY) ? $alexaData->SD->POPULARITY->attributes()->TEXT : 0 ;
 $alexa['CountryRank'] =  isset($alexaData->SD->COUNTRY) ? $alexaData->SD->COUNTRY->attributes() : 0 ;
 return json_decode(json_encode($alexa), TRUE);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alexa Rank checker tool in php</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="css/rank.css" rel="stylesheet" type="text/css">
  <!-- font awesome cdn link  -->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
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
      </nav>

    </header>

      <!-- Nav end -->

<div class="main-container container">
<h1  style="font-size:30px; color: #e8786e;">Alexa Rank checker tool </h1>
<form method="get" action="">
<div>
   <p  style="font-size:20px; color: #e8786e;">Enter your domain name.</p>
   <p><input name="siteinfo" class="siteinfo" placeholder="E.g. google.com" required="required"/></p>
   <p><input type="submit" class="alexa-btn btn" value="Get Alexa Rank" id="qr-gn"></p>
</div>
</form>
<br/>
<?php
if(isset($_REQUEST['siteinfo'])) {
 	$url = $_REQUEST['siteinfo'];
    $alexa = alexaRank($url);
    $globalRank = isset($alexa['globalRank'][0]) ? $alexa['globalRank'][0] : 'N/A';
    $countryRank = isset($alexa['CountryRank']['@attributes']['RANK']) ? $alexa['CountryRank']['@attributes']['RANK'] : 'N/A';
    echo "<h1>".$url." global alexa rank is <b style='color:#e8786e; font-weight:700;'>".$globalRank."</b> And Country (".$alexa['CountryRank']['@attributes']['NAME'].") rank is <b style='color:#e8786e; font-weight:700;'>".$countryRank."</b></h3>";
 }
 ?>
<div>
</div>
</div>
<div class="box-container-main">
  <div class="xd_top_box mt-3">
      <h2 style="font-size: 3rem; font-weight: 600;color: #e8786e;">
      About Alexa Rank Checker
      </h2>
      <h2 style="font-size: 2rem; font-weight: 600;color: #e8786e;">
      Alexa rank checker by SEODADDY

      </h2>
      <article style="font-size: 16px; text-align: justify;">
      Alexa Analytics is a free online device that permits clients to see the current status of a site in the Alexa positioning rundown. This instrument has a profound comprehension of within and outside of web investigation and has been created by proficient web engineers. Would you be able to believe that you can get precise and straightforward outcomes from the Alexa web motor utilizing an internet browser instrument? Alexa traffic rank  can show the accompanying information in a SEO instruments check. Worldwide positioning is the positioning of a site examined against different sites all throughout the planet. Breaking point: The quantity of various clients visiting the site (Alexa score relies upon the quantity of resulting clients on the Alexa dashboard). Country: The country with the most elevated number. Change the area of your interior site: How to lessen or improve the area of your site.       
    </article>
      <br>
      <h2 style="font-size: 2rem; font-weight: 600; color: #e8786e;">
      What is alexa rank? 
      </h2>
      <article style="font-size: 16px; text-align:justify "> 
      On the off chance that you need to know how mainstream your site is, this is quite possibly the most widely recognized approaches to check Alexa rankings. Alexa is a web examination organization from Amazon.com that gives web traffic information and other showcasing measurements dependent on data gathered from the web through an assortment of internet browser augmentations and toolbars. Alexa runs numerous administrations and fills in as the reason for Wayback Machines, yet has been engaged with a few significant undertakings before, for example, offering types of assistance and data sets for mainstream apparatuses. Do you have Alexa classes? 
      </article><br>
      <h2 style="font-size: 2rem; font-weight: 600; color: #e8786e;">
      Why checking alexa rank? 
      </h2>

      <article style="font-size: 16px; text-align: justify;">
      As Alexa said, you can "test the viability of one site against another on the web in the course of recent months." Check your Alexa rankings with our free web examination apparatus. Here are four significant activities with your Alexa Rank examination information: Analyze yourself. In the event that you are a blogger or site proprietor, know where Alexa is on your site. This page is on the Internet. You can utilize this information to find the most essential ways to expand your site traffic free  and increment the quantity of contenders. Indeed, you can check Alexa's traffic rank regularly to perceive how your site is being created and if it's anything but notable. Obviously, you can fix it when it turns out to be less famous. Serious Analysis: Alexa goes about as a cutthroat insight apparatus. Basically, you can utilize this information to perform contender investigation to decide whether your client's site is appealing. You can contrast your site with significant contenders and perceive how it functions as far as fame on the Internet. Our cool device, Alexa Checker, is ideal for this and permits you to check Alexa site data from numerous locales simultaneously. Showcasing Analytics: Alexa positioning shows sponsors how well known your site is ... furthermore, you know whether you need to promote on your site and the amount it costs. Alexa site positioning is really one of the components that decides the attractiveness of an offered site to promoters. Expert: Alexa Ranking positions sites by nation, country and classification. Country and industry rankings distinguish individuals from a particular country or industry dependent on the most visited sites in that country or industry. You can likewise check the positioning of sites that rival your site.
      </article>
    </div>
  </div>
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
        <a href="audit_tool.php"> <i class="fas fa-check"></i>Who is checker</a>
        <a href="domainage.html"> <i class="fas fa-check"></i>Domain age checker</a>
      </div>
      <div class="box ">       
        <br><br><br><br>
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
</body>
</html>