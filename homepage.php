<?php
include ("myConn.php");
SESSION_START();
?>
<html>
<head>
	<title>SOAPERLICIOUS SOAP</title>
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
		<a href="homepage.php" class="tagline"></a> 
	</div> <!-- end of header -->
	
	<div id="body"> <!-- start of content --> 
		<ul id="featured"> <!-- start of featured -->
			<li class="main">
				<a href="about.php"></a> 
			</li>
			<li class="drinks">
				<a href="catagories.php"></a> 
			</li>
			<li class="signout">
				<a href="processLogOut.php"></a> 
			</li>
			<li class="desserts">
				<a href="giftset.php"></a> 
			</li>
		</ul> <!-- end of featured -->
	</div> <!-- end of content -->
	<br><br><br><br><br><br>
	<div id="footer"> <!-- start of footer -->
		<ul class="advertise">
			<li class="event">
				
			
				<a href="faq.php">FAQ</a><br><br>
				<a href="privacy.php">Privacy Policy</a><br><br>
				<a href="terms.php">Terms & Condition</a><br><br>
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
				<a href="http://facebook.com/soaperlicious" target="_blank" class="fb" title="Facebook"></a> 
				<a href="http://twitter.com/soaperlicious" target="_blank" class="twitr" title="Twitter"></a>
			</li>
		</ul>
		
	</div> <!-- end of footer -->
</body>
</php>