<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Crispen &amp; Mulberry, World Travelers</title>
<meta name="description" content="Destinations, Getaways, Travel Tips and News from Crispen & Mulberry, World Travelers">
<meta name="keywords" content="travel, travel news, travel tips, travel articles, international travel, domestic travel, getaways, destinations">
<meta name="author" content="Crispen & Mulberry">

<!-- Linked Layout Stylesheets -->
<link href="css/layout_style.css" rel="stylesheet" type="text/css">
<link href="css/theme.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link href="css/ie_fix.css" rel="stylesheet" type="text/css">
<![endif]-->

<!-- Links for jQuery Carousel -->
<link href="css/carousel_style.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/carousel.js"></script>


</head>

<body>
<div id="wrap">
	<?php 
	include('layout_inc/layout_header.inc.php');
	include('layout_inc/layout_nav.inc.php');
	?>
	<main class="row expand" role="main">
		<div id="content">
			<section>
				<?php 
				include('layout_inc/carousel.inc.php');
				include('layout_inc/ads.inc.php');
				?>
			</section>
			<section class="border_top">
				<div class="sub_section float_left column_666_wide">
					<?php
					include('layout_inc/browse_categories.inc.php');
					include('layout_inc/recent_articles.inc.php');
					include('layout_inc/videos.inc.php');
					?>
				</div>
				<div class="sub_section float_right column_274_wide">
					<?php
					include('layout_inc/newsletter_form.inc.php');
					include('layout_inc/contests.inc.php');
					include('layout_inc/twitter_feed.inc.php');
					?>
				</div>
			</section>
		</div>
	</main>
	<?php 
	include('layout_inc/layout_footer.inc.php');
	?>
</div>
</body>
</html>