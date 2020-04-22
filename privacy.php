<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<php>
<head>
	<title>Privacy Policy</title>
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
			
			<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$count= "SELECT * FROM shoppingcart WHERE email='$email'";
			$res = mysqli_query($con,$count);
			$c=mysqli_num_rows($res);
		?>
		
			<li><a href="cart.php"><span>Shopping Cart (<?php echo $c ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul>  <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2 class="aboutus"><span>Privacy Policy</span></h2>
		<div id="aboutus">

			
			<p><font size="4">
				At Soaperlicious Soap we are 100% committed to upholding your privacy.<br><br>

As a user of this website you can be confident that we will: <br><br>

-Only collect information required for fulfilling your order.<br><br>
-Never share personal information about you with any outside person or organization unless required to do so by law.<br><br>
-Give you access to your information and remove your information from our system on your request.<br><br>
-Use all the appropriate security technology to keep your information and our website safe. Sensitive information entered online is encrypted & transmitted using state of the art SSL (Secure Socket Layers) technology. <br><br>
Your credit card information is encrypted when it is transmitted to us and is stored in a secure environment which makes it virtually impossible for unauthorized parties to read any of the information you send us via the secure server. Your credit card information is never reused except to issue refunds. For your own safety, please do not ever use e-mail to send your credit card information to us or any third party.<br>
</font>
			</p>
			
			<h3 style = "color:hotpink;">PURCHASES</h3>
			<p><font size="4">
				In order to purchase a product from Soaperlicious Soap you will be required to provided us with your:
				Full name, Home Address, Email Address, Payment Information
				We only request this information as it necessary to complete a sales transaction. Please be advised that we take every reasonable precaution to keep your information safe and secure. </font>
			</p>
			<h3 style = "color:hotpink;">EMAIL NEWSLETTERS</h3>
			<p><font size="4">
				Soaperlicious Soap publishes an email newsletter in which we promote products and share skin care/organic lifestyle tips. 
				Subscribing to the newsletter is free and conducted on an opt-in basis. In the event you are receiving the newsletter and
				wish to cancel your subscription, simply click the unsubscribe link located in the footer of the email newsletter.</font>			
			</p>
			<h3 style = "color:hotpink;">HOW WE PROTECT YOU</h3>
			<p><font size="4">
				We ensure that:<br><br>

				- Our employees and associates are held accountable for any information they have access to. <br>
				- We limit the collection of information to that which is relevant to our cause and purpose.<br>
				- We will not disclose your information to a third party without your consent unless required to do so by law.<br>
				- All your personal information is kept at a secure location.<br>
				- We use all appropriate security software to ensure your information is kept out of harms way.<br>
				</font>			
			</p>
			<h3 style = "color:hotpink;">LINKS TO OTHER WEBSITES</h3>
			<p><font size="4">
				A link does not imply an endorsement of a website. 

				If you have any questions regarding this Privacy Policy, please email us at soaperlicious@gmail.com

				Thank you, and we hope you enjoy shopping at www.soaperlicoussoap.com.
				</font>			
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