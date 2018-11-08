
<html>
<head>
	<title>ABOUT US</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div id="header"> <!-- start of header -->
		

		<ul id="infos">
			<li class="home"> 
			<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$name="SELECT cust_fname FROM customer WHERE cust_email='$email'";
			$sql=mysql_query($name);
			$display = mysql_fetch_assoc($sql);
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
		<h2 class="aboutus"><span>About Us</span></h2>
		<div id="aboutus">
		
		
			
			
		
			
			
			<h3 style = "color:hotpink;"> Handmade Soap</h3>
			
			<p><font size="4">
				Soaperlicious Soap are among the most gentle and luxurious soaps available. 
				Our soaps are made with simple wholesome ingredients, carefully blended together to create a mild and creamy soap. 
				The fragrances, textures and colours will delight your senses while gently cleaning your skin.</font>

					

			</p>
			
			<h3 style = "color:hotpink;"> Our Philosopy</h3>
			<p><font size="4">
				Our products are free from parabens, SLS's, petrochemical, synthetic colours and fragrances which is why we know they'll be kind. 
				None of us products are tested on animals, and we promise that they never will. 
				We thread as lightly as we can. We use approved card in our packaging, and print it with environmentally friendly. 
				We believe in being honest and kind - by nature. </font>
			</p>
			<h3 style = "color:hotpink;"> Our Way </h3>
			<p><font size="4">
				Our Way is the natural, skin kind and earth kind way. 
				We use 100% natural botanical ingredients sourced. We also use a high percentage of botanical and herbal extracts in each product.
				Our ingredients like lavendar, lemongrass, roses and mint have been use for hundrends of years because of their restorative and energising qualities. And they smell greats.
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