<!-- Newsletter Form -->

<article class="grey">
	<form action="index.php" method="post" class="newsletter_form">
		<h1><img src="images/header_icon_newsletter.jpg" alt="Sign up for our newsletter">SIGN UP FOR OUR NEWSLETTER</h1>
		<input name="email" placeholder="user@domain.com" type="text" />
		<p>
        	<em>Select the newsletters you'd like to receive</em><br />
			<input name="destinations_checkbox" id="destinations_checkbox" type="checkbox" checked="checked" />
			<label for="destinations_checkbox"><strong> Destinations &amp; Getaways</strong></label>
			<br />
			<input name="travel_tips_checkbox" id="travel_tips_checkbox" type="checkbox" checked="checked" />
			<label for="travel_tips_checkbox"><strong> Weekly Travel Tips</strong></label>
		</p>
		<input name="newsletter_submit" type="submit" value="SIGN UP" />
	</form>
	<div class="newsletter_footer">
		<ul>
			<li><a href="#"><small>Privacy Policy</small></a></li>
			<li><a href="#"><small>Terms of Use</small></a>
		</ul>
	</div>
</article>
