<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<php>
<head>
	<title>Frequently Asked Questions</title>
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
					$name = "SELECT cust_fname FROM customer WHERE cust_email='$email'";
					$custname= mysql_query($name);
					while ($row=mysql_fetch_array($custname)) {
				?>
					<a href="homepage.php">Welcome, <?php echo $row[0]; }?></a>
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

			<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$count= "SELECT * FROM `shoppingcart` WHERE email='$email'";
			$res = mysql_query($count);
			$c=mysql_num_rows($res);
		?>
		<a href="homepage.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="about.php"><span>About Us</span></a></li>
			<li class="current"><a href="catagories.php"><span>Categories</span></a></li>
			<li class="main"><a href="giftset.php"><span>Gift Set</span></a></li>
			
			<li><a href="cart.php"><span>Shopping Cart (<?php echo $c ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2 class="aboutus"><span>Frequently Asked Questions</span></h2>
		<div id="aboutus">
	
			<h3 style = "color:hotpink;">How do I contact customer service?</h3>
			
			<p><font size="4">
				At Soaperlicious Soap, we are committed to providing the best possible organic skin care products and the best possible service to our customers. If you ever have any questions please feel free to get in touch with us using the contact form in our contact us section.

				You may also contact us at:
				Soaperlicious Soap
				Email: soaperlicious@gmail.com
				Main: 03 222-9393 </font>

			<h3 style = "color:hotpink;">What are your hours of operation?</h3>
			<p><font size="4">
				MONDAY — FRIDAY, 9 AM — 5 PM </font>

			<h3 style = "color:hotpink;">When will my order post?</h3>
			<p><font size="4">
				REGULAR SHIPPING TIMES: All orders will be shipped within 3-4 days of your order being approved. Orders are processed and posted on business days only (Monday to Friday, excluding major holidays). 
				Orders placed on Saturday and Sunday will be processed within 3-4 days of the next business day.</font>


			<h3 style = "color:hotpink;">What are your shipping rates?</h3>
			<p><font size="4">	
				
				West Malaysia:<br>
				Small package (3kg and under) = RM10.00 
				Medium/large package (3kg-10kg) = RM15.00 </font>
				
			<h3 style = "color:hotpink;">What payments do you accept?</h3>
			<p><font size="4">	
			We accept Visa, MasterCard, Online Banking, Cash on Delivery (SHAH ALAM ONLY)</font>

			<h3 style = "color:hotpink;">How is my privacy protected?</h3>
			<p><font size="4">
			We never share your personal information with anyone. Sensitive information entered online is encrypted & transmitted using state of the art SSL (Secure Socket Layers) technology.</font>

			<h3 style = "color:hotpink;">Do you offer wholesale?</h3>
			<p><font size="4">
			Sorry, we don't offer wholesale for the time being</font>

			<h3 style = "color:hotpink;">How are your soaps made?</h3>
			<p><font size="4">
			With love and soul of course! Our body soaps are handcrafted from scratch in small batches using the cold process method. We start with certified organic food grade oils and add pure essential oils, fresh herbs and rich, moisturizing oils and butters. 
			The process takes several weeks to make your soap into the best natural soap available.</font>

			<h3 style = "color:hotpink;">How long do your soaps stay fresh?</h3>
			<p><font size="4">
			Our soaps will keep for 1 to 2 years, but are best used within 6 months to retain the strength of the natural essential oils.</font>

			<h3 style = "color:hotpink;">Are your organic face and body soaps safe for babies and people with sensitive skin?</h3>
			<p><font size="4">
			All of our organic face and body soaps contain high amounts beneficial oils and are free of any sulfates and synthetic which are found in most commercial skin care products. 
			We suggest you check out our soaps based on your skin type to find a soap that works best with your sensitive skin. 
			Our most popular face and body soap for our customers with sensitive skin and babies is the ~Soothe~ Oatmeal Calendula bar.</font>

			<h3 style = "color:hotpink;">Are your soaps biodegradable?</h3>
			<p><font size="4">
			Yes, they are completely biodegradable as only earth friendly organic natural ingredients are used.</font>

			<h3 style = "color:hotpink;">Are your organic face and body soaps Vegan?</h3>
			<p><font size="4">
			Yes, all of our organic skin care products are vegan and cruelty free.</font>

			<h3 style = "color:hotpink;">Why does your soap make my skin feel softer than commercial soap?</h3>
			<p><font size="4">
			The naturally occurring glycerin content of handcrafted cold process soap is retained in the bar, providing moisture for your skin. 
			Most mass-produced face and body soaps have the glycerin removed as it is a valuable by-product that is then sold for use in other cosmetics. 
			With our organic skin care line you will receive all the moisturizing benefits that glycerin has to offer.</font>

			<h3 style = "color:hotpink;">How do I make my soap last longer?</h3>
			<p><font size="4">
			Avoid letting water from showerheads stream onto the soap. Keep dry after use by setting on its edge or in an elevated soap dish where it can drain. 
			If you wish to store your soap before you use it, store in a dark, dry place like a linen closet or drawer.</font>

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