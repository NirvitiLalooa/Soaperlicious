<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<php>
<head>
	<title>Skin Care Guide</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css">	
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css">		
	<![endif]-->
</head>
<body>
	<div id="header"> <!-- start of header -->
		
		<ul id="infos">
			<li class="home"> 
			<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$name="SELECT cust_fname FROM customer WHERE cust_email='$email'";
			$sql=mysqli_query($con,$name);
			$display = mysqli_fetch_assoc($sql);
			$name = $display['cust_fname'];
			?>
				<a href="homepage.php">Welcome, <?php echo $name;?></a>
			<?php else: ?>
				<a href="index.php">HOME</a>
			<?php endif; ?>
			</li>
			<li class="phone">
				<a href="contact.php">03 222 9393</a> 
			</li>
			<li class="address">
				<a href="contact.php">SHAH ALAM</a> 
			</li>
		</ul>

		<a href="homepage.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="about.php"><span>About Us</span></a></li>
			<li class="main"><a href="catagories.php"><span>Categories</span></a></li>
			<li><a href="giftset.php"><span>Gift Set</span></a></li>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2 class="aboutus"><span>Skin Care Guide</span></h2>
		<div id="aboutus">
		
			<p><font size="4">
				“Wow! Check you out! Your skin is impressive - perfect and balanced in every way. Now let us help you keep it that way!” <br><br> SMALL PORES/ LITTLE-TO-NO BREAKOUTS/ RADIANT GLOW</font>
			</p>
			
			<h3 style = "color:hotpink;">Balanced Skin Type</h3>
			<p><font size="4">
			“Wow! Check you out! Your skin is impressive - perfect and balanced in every way. Now let us help you keep it that way!” <br><br> SMALL PORES/ LITTLE-TO-NO BREAKOUTS/ RADIANT GLOW</font>
			</p>
			<h3 style = "color:hotpink;">Skin Characteristics:</h3>
			<p><font size="4">
				<ul>
				<li>Clear</li>
				<li>Fine-textured</li>
				<li>Supple and smooth surface which is neither greasy nor dry</li>
				<li>Glows from the inside out, which stems from good blood circulation and excellent health</li>
				<li>Occasional pimples, but acne is not a problem for people with balanced skin</li></font>		
			</ul>
			</p>
			
			<h3 style = "color:hotpink;">Suggestions:</h3>
			<p><font size="4">
				<ul>
				<li>To keep that healthy glow wear a long brim hat in the sun and use natural sun protection.</li>
				<li>Nourish your body with healthy foods and ample water</li>
				<li>Pamper your skin with our Balanced Collection</li>
				</ul></p>
			
			<h3 style = "color:hotpink;">Dry Skin Type</h3>
			<p><font size="4">
				“Like the Sahara desert your skin is parched and rosy red! Let us moisturize your skin and stop that drought.” <br><br> RED/ FLAKY/ SENSITIVE/ ITCHY
			</p>
			
			<h3 style = "color:hotpink;">Skin Characteristics:<h3>
			<p><font size="4">
			<ul>
			<li>Tightness</li>
			<li>Dry patches with flaking</li>
			<li>Persistent itching</li>
			<li>More prevalent in mature skin</li>
			<li>Common to individuals with a history of eczema, atopic dermatitis, allergies, asthma, or a compromised immune system</li>
			</ul></p>
			
			<h3 style = "color:hotpink;">Suggestions:</h3>
			<p><font size="4">
				<ul>
				<li>Exfoliate on a weekly basis.</li>
				<li>Consume extra Omega-3s! New studies show Omega-3 fish oil pills may soothe super dry skin.</li>
				<li>Pamper your dry skin with our Moisturize Collection.</li>
				</ul></p>
				
			<h3 style = "color:hotpink;">Mature Skin Type</h3>
			<p><font size="4">
				“Aging gracefully is not a sin. Each line tells a story and should be worn with pride and confidence. Let us help you nurture your glow so you can share your story with the world!”<br><br>FINE LINES/ DRY/ THIN
</p>
			
			<h3 style = "color:hotpink;">Skin Characteristics:<h3>
			<p><font size="4">
			<ul>
			<li>Skin appears thinner, less taut, and has a translucent quality to it in places</li>
			<li>Skin might appear rough and dull</li>
			<li>Deeper expression lines present, especially around the eyes</li>
			</ul></p>
			
			<h3 style = "color:hotpink;">Suggestions:</h3>
			<p><font size="4">
				<ul>
				<li>Increase your intake of antioxidants, which dramatically soften the visible signs of aging while protecting skin from future stress.</li>
				<li>Be mindful of the sun. </li>
				<li>Exposure to free radicals and the sun's ultraviolet light can cause further damage to collagen and elastin.</li>
				<li>Pamper your mature skin with our Age-Defying Collection.</li>
				</ul></p>
				
				<h3 style = "color:hotpink;">Combination Skin Type</h3>
			<p><font size="4">
				“It’s a rat race out there and your skin is caught in a maze of confusion. It changes its course from one day to the next! Let us help you put it on the right path so you can get on with life!”
				</p>
			
			<h3 style = "color:hotpink;">Skin Characteristics:<h3>
			<p><font size="4">
			<ul>
			<li>Forehead, chin, and nose (the T-zone area) are oily but the cheeks and skin around the eyes can range from normal to dry</li>
			<li>Skin pores are medium in size</li>
			<li>Overall the skin appears normal and healthy (exclusive of those small areas that are too oily or dry)</li>
			</ul></p>
			
			<h3 style = "color:hotpink;">Suggestions:</h3>
			<p><font size="4">
				<ul>
				<li>Good news! Oily skin is slow to develop discolorations, fine lines, and wrinkles as the skin ages provided you nourish it properly</li>
				<li>Pamper your combination skin with our Balanced Collection.</li>
				</ul></p>
		</div>	
	</div> <!-- end of contents -->

	<div id="footer"> <!-- start of footer -->
		<ul class="advertise">
			<li class="event">
				
			
				<a href="faq.php">FAQ</a><br><br>
				<a href="privacy.php">Privacy Policy</a><br><br>
				<a href="terms.php">Terms of Use</a><br><br>
				<a href="contact.php">Contact Us</a><br><br>
				<a href="feedback.php">Feedback</a>
				
			</li>
			<li class="event">
			
				<a href="http://poslaju.com.my/track-trace/">Order Tracking</a><br><br>
				<a href="return.php">Return Policy</a><br><br>
				<a href="store.php">Store Location</a><br><br>
				<a href="skin.php">Skin Care Guide</a><br><br>
				<a href="how.php">How To Use</a>
				
				
			</li>
			
			<li class="connect">
				<h2>Let's Keep in Touch</h2>
				<a href="http://facebook.com/freewebsitetemplates" target="_blank" class="fb" title="Facebook"></a> 
				<a href="http://twitter.com/fwtemplates" target="_blank" class="twitr" title="Twitter"></a>
			</li>
		</ul>
		
	</div> <!-- end of footer -->
</body>
</php>