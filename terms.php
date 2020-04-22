<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<php>
<head>
	<title>Terms of Use</title>
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
		<h2 class="aboutus"><span>Terms of Use</span></h2>
		<div id="aboutus">
		
			<p><font size="4">
				Welcome to our online store Soaperlicious Soap! Soaperlicious Soap and its associates provide their service and products to you subject to the following conditions. 
				If you visit or shop within this website, you accept these conditions. Please read them carefully.</font>
			</p>
			
			<h3 style = "color:hotpink;">PRIVACY</h3>
			<p><font size="4">
				Please review our Privacy Notice, which also governs your visit to our website, to understand our practices.</font>
			</p>
			<h3 style = "color:hotpink;">COPYRIGHT</h3>
			<p><font size="4">
				All content included on this site, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, and software, is the property of soaperlicioussoap.com or its content suppliers and protected by international copyright laws. 
				The compilation of all content on this site is the exclusive property of soaperlicioussoap.com with copyright authorship for this collection by soaperlicioussoap.com, and protected by international copyright laws.
				</font>		
			</p>
			<h3 style = "color:hotpink;">TRADE MARKS</h3>
			<p><font size="4">
				Soaperlicious Soap's trademarks and trade dress may not be used in connection with any product or service that is not soaperlicioussoap.com, in any manner that is likely to cause confusion among customers, or in any manner that disparages or discredits soaperlicioussoap.com. 
				All other trademarks not owned by soaperlicioussoap.com or its subsidiaries that appear on this site are the property of their respective owners, who may or may not be affiliated with, connected to, or sponsored by Soaperlicious Soap or its subsidiaries.</font>
			</p>
			<h3 style = "color:hotpink;">YOUR MEMBERSHIP ACCOUNT</h3>
			<p><font size="4">
				If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. 
				If you are under 18, you may use our website only with involvement of a parent or guardian. Soaperlicious Soap and its associates reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in their sole discretion.</font>
			</p>
			<h3 style = "color:hotpink;">QUESTIONS:</h3>
			<p><font size="4">
				Questions regarding our Conditions of Usage, 
				Privacy Policy, or other policy related material can be directed to our support staff by clicking on the "Contact Us" link in the side menu. Or you can email us at: soaperlicious@gmail.com</font>
			</p>
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