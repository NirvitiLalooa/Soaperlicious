<?php
include ("myConn.php");
SESSION_START();

if (isset($_POST["btnSubmit"]))
{
	if(isset($_SESSION['email'])):
	{
			$name=$_POST["txtname"];
			$email=$_SESSION['email'];
			$phone=$_POST["txtphone"];
			$msg=$_POST["txtmsg"];	
	
	$queryAdd = "INSERT INTO `feedback` (feedname,email,feedphone,feedmessage) VALUES ('$name','$email','$phone','$msg')";
	mysql_query($queryAdd);	
	
?>

		<script language="JavaScript">
		alert("Thank you! Your feedback has been submitted.");
		location.href='homepage.php';
	</script>
<?php
	}
	endif;
}
?>
	
	
	<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<php>
<head>
	<title>Feedback</title>
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
		</ul>  <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2 class="aboutus"><span>Feedback</span></h2>
		<div id="aboutus">
		
			<p><font size="4">
				We’d love to hear from you! If you have any questions or concerns, please contact us by filling out the form below. <br>
				We'll do our best to respond to your request within 24 hours.</font>
			</p>
			
			<font size="4">
				<form name=frmContact method="post" action="feedback.php">
				Full Name : <br><br>
				<input type="text" size="60" name=txtname> <br><br>
				Email : <br><br>
				<input type="text" size="40" name=txtemail value="<?php echo $email; ?>"><br><br>
				Phone No. : <br><br>
				<input type="text" size="30" name=txtphone><br><br>
				Message : <br><br>
				<textarea cols="70" rows="10" name=txtmsg></textarea><br><br>
				</font>
				<input type="Submit" name=btnSubmit value="SUBMIT">
				</form>
			
			
		</div>	
	</div> <!-- end of contents -->

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
				<a href="http://facebook.com/freewebsitetemplates" target="_blank" class="fb" title="Facebook"></a> 
				<a href="http://twitter.com/fwtemplates" target="_blank" class="twitr" title="Twitter"></a>
			</li>
		</ul>
		
	</div> <!-- end of footer -->
</body>
</php>