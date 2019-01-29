<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Crispen &amp; Mulberry, World Travelers</title>

<!-- Linked Layout Stylesheets -->
<link href="css/layout_style.css" rel="stylesheet" type="text/css">
<link href="css/theme.css" rel="stylesheet" type="text/css">

<!-- Links for jQuery Carousel -->
<link href="css/carousel_style.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/carousel.js"></script>

<style type="text/css">
* { //border: 1px solid red;
}
</style>
</head>
<body>
<div id="wrap" class="wrapper">
  <div id="header" class="row">
   <h1 id="logo">Crispen &amp; Mulberry, World Travelers</h1>
      <h2 id="site_description"></h2>
    
      <h1 class="accessible">TOP LINKS</h1>
    <ul class="top_links">
      <li>My Account
      <li>My Subscriptions
      <li>My Articles
    </ul>
  </div>
  <div id="nav" class="row">
  
      <h1 class="accessible">MAIN MENU</h1>
      <div class="skip_button"><a href="#content" title="Skip to Content">Skip to Content</a></div>
    <ul>
      <li>DESTINATIONS</li>
      <li>GETAWAYS</li>
      <li>TRAVEL TIPS</li>
      <li class="current">NEWS &amp; FEATURES</li>
      <li>CONTESTS</li>
      <li>CONTACT US</li>
    </ul>
  </div>
  <div id="content" class="row expand">
  	<?php include('layout_inc/carousel.inc.php');
	?>
    <!--<div id="car_wrap" class="article bumper">
      <h1 class="accessible">CAROUSEL</h1>
      <h2>DOWNTOWN BALTIMORE</h2>
      <p>Check out the USS Torsk at Baltimore's historic Maritime Museum.</p>
      <h2>EXPLORING THE VENETIAN</h2>
      <p>Enjoy the best gondola ride on this side of the Atlantic Ocean.</p>
      <h2>LONDON AFTER DARK</h2>
      <p>Enjoy the pubs along the river Thames &amp; get spectacular view from the London Eye.</p>
      <h2>MOUNT RUSHMORE</h2>
      <p>Marvel at the majestic beauty of the Black Hills and come face to face with American history.</p>
    </div>-->
    <div class="article bumper">
      <h1>BROWSE CATEGORIES</h1>
      <ul>
        <li>
          <h2>Popular Destinations</h2>
        
        <ul>
          <li>United States</li>
          <li>Europe</li>
          <li>Latin America</li>
          <li>South Pacific</li>
          <li>Caribbean</li>
          <li>Australia</li>
          <li>All Destinations</li>
        </ul></li>
        <li>
          <h2>Getaways</h2>
        
        <ul>
          <li>Adventure Vacations</li>
          <li>Beach Vacations</li>
          <li>Cruise Vacations</li>
          <li>Culinary Vacations</li>
          <li>Family Vacations</li>
          <li>Luxury Vacations</li>
          <li>Romantic Vacations</li>
          <li>Ski Vacations</li>
          <li>All Vacations</li>
        </ul></li>
      </ul>
    </div>
    <div class="article bumper">
      <h1>RECENT ARTICLES</h1>
      <h2>Don't Miss the Parades at DisneyWorld</h2>
      <p>The parades at Disney World are a one of a kind celebration full of all your favorite Disney characters and music. The entertainment never stops as parades are scheduled throughout the entire day.</p>
      <h2>Get You Kicks in Downtown Las Vegas</h2>
      <p>Get off the strip and check out what Old Vegas has to offer. From shark infested water slides to the nightly Fremont Street Experience it's sure to please adventurers of all ages.</p>
      <h2>Don't Miss Deep Dish in Chicago</h2>
      <p>Deep dish pizza is as synonymous with Chicago as Thin Crust is to New York. Any way you slice it, any trip to the windy city is incomplete without an italian flavor explosion in your mouth.</p>
    </div>
    <div class="article bumper">
      <h1>SIGN UP FOR OUR NEWSLETTER</h1>
      user@domain.com
      Select the newsletters you'd like to receive 
      Destinations &amp; Getaways
      Weekly Travel Tips
      SIGN UP <small>Privacy Policy</small><small>Terms of Use</small> </div>
    <div class="article bumper">
      <h1>CURRENT CONTESTS</h1>
      <p>Win an all inclusive trip to visit the famous Yeti Shrine deep in the heart of Asia</p>
      <p>Win a mystical trip to Bath that includes a guided tour of Stonehenge</p>
      <h1>POPULAR VIDEOS</h1>
      <p>Team Mongoose</p>
      <p>St Paul's Cathedral</p>
      <p>Hollywood and Highland</p>
      <p>Lake Wissota</p>
      <p>The Bellagio Fountains</p>
      <p>The Atlantic Coast</p>
    </div>
  </div>
  <div id="footer" class="row"> <small>Privacy Policy       Terms of Use       Site Map       Contact Us</small><small>© 2013 Crispin &amp; Mulberry       1640 Riverside Drive, Hill Valley, California, 95420</small> </div>
</div>
</body>
</html>