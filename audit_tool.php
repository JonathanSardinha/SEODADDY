<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <title>Robot.txt Generator</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"><meta content="Webflow" name="generator">
    <link href="css/audit.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
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

      <div id="menu-btn" class="fas fa-bars"></div>
    </header> 
    <div class="header-section">
    <div class="container w-container">

    <h1 style="font-size:30px; color: #e8786e; ">Robot.txt generator</h1>
        <form method="get" action="audit_tool.php">
          <input class="form-control" type="text" name="domain" /><br>
          <div class="btn-submit">
          <input class="btn" type="submit" name="submit" value="submit" />
          <div>
        </form>

<?php
    include 'audit_class.php';
    if (isset($_GET['domain'])) {
        $audit = new audit($_GET['domain']);
        $audit->printAll();
    }
?>
</div>
</div>
</div>
</div>
<div class="box-container-main">
  <div class="xd_top_box mt-3">
      <h2 style="font-size: 3rem; font-weight: 600;color: #e8786e;"> About Robots.txt Generator</h2>
	  <h2 style="font-size: 2rem; font-weight: 600; color: #e8786e;">Use google robots TXT generator by SEODADDY</h2>
      <article style="font-size: 16px; text-align: justify;">
	  Robots.txt is a file that contains steps to navigate your site. Also known as robotic suppression protocol. Websites use these standards to tell bots which parts of the website are being indexed. You can also define areas that you don't want this tracker to process. This area has duplicate content or is under construction. Bots like malware detectors and email services don't meet these criteria and are looking for depreciation. You may have started your survey on a website in a region where you don't want to be indexed. The txt file contains a "user agent" that allows you to write various criteria such as "permission", "deny" and "scan timeout". Manual entry can be time consuming and you can insert multiple PO lines into the file. You need to enter a rejection to delete the page. The connected robot cannot be accessed. The same goes for the highlight function. If you think this is all you need for your robots.txt file, it's not easy. Incorrect rules can remove the page from the battle list. Therefore, it is better to allocate it to professionals. The Robots.txt generator manages the files.
      </article>
      <br>
      <h2 style="font-size: 2rem; font-weight: 600; color: #e8786e;">
      What is robot TXT?
      </h2>
      <article style="font-size: 16px; text-align:justify "> 
	  The first search engine crawler file is the crawler text file. If you can't find it, the crawler may not be able to index all pages on your website. This little file can be edited later by adding a new page with some instructions. Make sure your landing page does not have a default page. Google uses the crawl budget. This budget varies by rail. Crawler limits represent the amount of time a crawler spends on your website. However, if website crawling affects the user experience, it will slow down your website. Whenever Google sends a spider, it crawls some pages on the website to list the latest posts. To overcome this limitation, your site needs a sitemap and a robots.txt file. These cookies speed up the browsing process by providing links to sensitive websites. Every bot's website has a searchable list, so your WordPress site also needs the best bot files. You don't actually need to index a lot of pages. You can also use this tool to create WP Robot TXT files. The crawler indexes your site even if you don't have a .txt file to parse. If you're blogging and your website doesn't have a lot of pages, don't create it.
      </article><br>

      <h2 style="font-size: 2rem; font-weight: 600; color: #e8786e;">Purpose of robots.txt file</h2>
	  <article style="font-size: 16px; text-align: justify;">
      If you are creating the file manually, you need to follow the steps to use the file. You can make changes to a file by learning how it works. This policy is used to prevent hosts from being overwhelmed by reptiles. Excessive demand can overload the server and degrade the user experience. Different search engine robots have different crawl bar controls. Bing, Google and Yandex have different policies. For Yandex, this is the waiting time between consecutive visits. In Bing, it's like a bot that only accesses the web once, but in Google you can use the search console to manage your bot's access. These instructions are used to index the following URLs: You can add as many URLs as you like. This list can be long, especially for commercial websites. If you're using a bot, your pages will only contain pages you don't want to index. The main purpose of denying bot files is to prevent bots from accessing links, directories, etc. For other bots that don't run by default and need to check for malware
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


    </body>
</html>