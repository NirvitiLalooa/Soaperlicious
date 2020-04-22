<?php
include ("myConn.php");
SESSION_START();
?>
<html>
<head>
	<title>CATAGORIES</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div id="header"> <!-- start of header -->
		

		<ul id="infos">
			<li class="home"> 
			<?php if(isset($_SESSION['email'])): 
					$email=$_SESSION['email'];
					$name = "SELECT cust_fname FROM customer WHERE cust_email='$email'";
					$custname= mysqli_query($con,$name);
					while ($row=mysqli_fetch_array($custname)) {
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

			
		<a href="homepage.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="about.php"><span>About Us</span></a></li>
			<li class="current"><a href="catagories.php"><span>Categories</span></a></li>
			<li class="main"><a href="giftset.php"><span>Gift Set</span></a></li>
			<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$count= "SELECT * FROM `shoppingcart` WHERE email='$email'";
			$res = mysqli_query($con,$count);
			$c=mysqli_num_rows($res);
		?>
			<li><a href="cart.php"><span>Shopping Cart (<?php echo $c ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	
	<div id="contents"> <!-- start of contents --> 
		
		<h2 class="main-course"><span>Catagories (based on skin type)</span></h2>
		<form name="frmSearch" method="post" action="searchresult.php">
		<input type="text" name="txtsearch" size=20>&nbsp <input type=submit value="SEARCH" name="btnsearch">
		</form>
		<br><br>
		<div id="menus">
			<ul class="main">
				<li>
					<h3>BALANCED</h3>
					<ul>
						<li>
							<a href="balancedtype.php">
							<IMG SRC="images/neen tea tree.jpg" height="200" width="200">
							</a>
							<br><br>
						</li>
					</UL>
				</LI>
				<li>
					<h3>DRY</h3>
					<ul>
						<li>
							<a href="dry.php">
							<IMG SRC="images/lemon poppy seed.jpg" height="200" width="200">
							</a>
							<br><br>
						</li>
					</UL>
				</LI>
				<li>
					<h3>OILY</h3>
					<ul>
						<li>
							<a href="oily.php">
							<IMG SRC="images/lavender lemon grass.jpg" height="200" width="200">
							</a>
							<br><br>
						</li>
					</ul>
				</li>
				<li>
					<h3>MATURE</h3>
					<ul>
						<li>
							<a href="mature.php">
							<IMG SRC="images/oatmeal calendula.jpg" height="200" width="200">
							</a>
							<br><br>
						</li>
					</UL>
				</LI>
				
				<li>
					<h3>SENSITIVE</h3>
					<ul>
						<li>
							<a href="sensitive.php">
							<IMG SRC="images/orange patchouli.jpg" height="200" width="200">
							</a>
						</li>
					</UL>
				</LI>
				
				<li>
					<h3>ACNE</h3>
					<ul>
						<li>
							<a href="acne.php">
							<IMG SRC="images/PeppermintBasil.jpg" height="200" width="200">
							</a>
						</li>
					</UL>
				</LI>
				<li>
					<h3>COMBINATION</h3>
					<ul>
						<li>
							<a href="combination.php">
							<IMG SRC="images/rosewood.jpg" height="200" width="200">
							</a>
						</li>
					</ul>
				</li>
				<li>
					<h3>ECZEMA</h3>
					<ul>
						<li>
							<a href="eczema.php">
							<IMG SRC="images/anise bamboo charcool.jpg" height="200" width="200">
							</a>
						</li>
					</UL>
				</LI>
				
			</ul>
			<p>
				
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