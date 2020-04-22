<?php
include ("myConn.php");
SESSION_START();
?>
<html>
<head>
	<title>Payment Method</title>
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
				<a href="cart.php">03 222 9393</a> 
			</li>
			<li class="address">
				<a href="cart.php">SHAH ALAM</a> 
			</li>
		</ul>
		
		<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$count= "SELECT * FROM shoppingcart WHERE email='$email'";
			$res = mysqli_query($con,$count);
			$c=mysqli_num_rows($res);
		?>
		<a href="homepage.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="about.php"><span>About Us</span></a></li>
			<li class="main"><a href="catagories.php"><span>Categories</span></a></li>
			<li class="current"><a href="giftset.php"><span>Gift Set</span></a></li>	
			<li><a href="cart.php"><span>Shopping Cart (<?php echo $c; ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	

<?php if(isset($_SESSION['email'])): 
		{ ?>
<h2 align ="center"><font face='Century Gothic' color="white">Please select your payment method</font></h2>
<table border=1 align="center" cellpadding=5>
<tr><th><font face='Century Gothic' size='4'>Product ID</th>
<th><font face='Century Gothic' size='4'>Product Image</th>
<th><font face='Century Gothic' size='4'>Product Name</th>
<th><font face='Century Gothic' size=4 color=>Quantity</th>
<th><font face='Century Gothic' size=4>Price (RM)</th><th><font face='Century Gothic' size=4>Total Price (RM)</th>
<th><font face='Century Gothic' size=4>Update / Remove</th></tr>
</body>
</html>
		<?php } endif; ?>