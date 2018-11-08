<?php
include ("myConn.php");
SESSION_START();

if (isset($_POST["btnSubmit"]))
{
	if(isset($_SESSION['email'])):
	{
			$email=$_SESSION['email'];
			$type=$_POST["credit"];
			$cnumber=$_POST["num"];
			$cmonth=$_POST["month"];
			$cyear=$_POST["year"];	
	
	$queryAdd = "INSERT INTO `card` (email,type,cnum,cmonth,cyear) VALUES ('$email','$type','$cnumber','$cmonth','$cyear')";
	mysql_query($queryAdd);	
	
	
?>

		<script language="JavaScript">
		alert("Thank you!");
		location.href='homepage.php';
	</script>
<?php
	}
	?>
		<script language='JavaScript'>
		alert('Sorry!');
		location.href='paymentform.php';
	</script>
<?php
	endif;
}
?>
	
<html>
<head>
	<title>Payment</title>
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
			<li class="current"><a href="catagories.php"><span>Categories</span></a></li>
			<li class="main"><a href="giftset.php"><span>Gift Set</span></a></li>
			
			<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$count= "SELECT * FROM shoppingcart WHERE email='$email'";
			$res = mysql_query($count);
			$c=mysql_num_rows($res);
		?>
		
			<li><a href="cart.php"><span>Shopping Cart (<?php echo $c ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> 
		
		<!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents -->
		<div id="payment">


	<h3 style = "color:hotpink;"> Payment Method</h3>
		<center>
		<table border=5 width=500 height=350 background="log3.jpg" cellpadding="10">

		<form name="payment" method="post" action="paymentform.php">
			<tr>
				<td colspan="2">
					<center><img src="images/logo.gif"><br><br>
					<br>
					<font face="Century Gothic" size="5" color="black">
					<input type="radio" name="credit" value="visa" checked> Visa
					<input type="radio" name="credit" value="mastercard"> MasterCard
					<br>
				</td>
			</tr>
			<tr>
				<td>
				<font face="Century Gothic" size="4" color="black">
					Card Number:
				</td>
				<td>
					<input type="text" name="num" maxlength="16" size="24"></font>
				</td>
			</tr>
			<tr>
				<td><font face="Century Gothic" size="4" color="black">
					Expiration Date
				</td>
				<td>
				<font face="Century Gothic" size="4" color="black">
				Month(i.e 08)<br>
					<input type="text" name="month" maxlength="2" size="2"><br>
				Year (i.e 21)<br>
					<input type="text" name="year" maxlength="2" size="2">
				</td>
			</tr>
			<tr>
			<td colspan="2" align="center">
			<input type="submit" name="btnSubmit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="confirm.php"><input type="button" name="btncancel" value="Cancel"></a>
		<br><br>
		</td>
	</tr>
</table> 


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
</form>
</body>
</html>