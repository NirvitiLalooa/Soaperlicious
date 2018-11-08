<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<php>
<head>
	<title>Book An Event - Restaurant Website Template</title>
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
		<span class="signboard"></span>
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
		<a href="index.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="entree.php"><span>Entree</span></a></li>
			<li class="main"><a href="menu.php"><span>Main Course</span></a></li>
			<li><a href="desserts.php"><span>Desserts</span></a></li>
			<li><a href="drinks.php"><span>Drinks</span></a></li>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2 class="booking"><span>Book an Event</span></h2>
		<div id="booking">
			<form action="" method="">
				<table>
					<tbody>
						<tr>
							<td colspan="2"><span>Your Name</span><input type="text" class="name"></td>
							<td><span>Your Email</span><input type="text"></td>
						</tr>
						<tr>
							<td><span>Date</span><input type="text"></td>
							<td><span>No. of people</span><input type="text"  class="number"></td>
							<td>
								<span>Room Preference</span>
								<label for="outdoor"><input type="radio" class="radio" id="outdoor" name="preference">Outdoor</label>
								<label for="indoor"><input type="radio" class="radio" id="indoor" name="preference">Indoor</label>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<span>Is this a special occasion? Please tell us here?</span>
								<textarea></textarea>
								<input type="submit" value="Submit" class="button">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
			<p>
				This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. 
				You can replace all this text with your own text.You can remove any link to our website from this website template, you're free to use this website template without linking back to us. 
				If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forum/">Forum</a>.
			</p>
		</div>
	</div> <!-- end of contents -->
	<div id="footer"> <!-- start of footer -->
		<ul class="advertise">
			<li class="delivery">
				<h2>Hungry? We Deliver</h2>
				<a href="menu.php">Download our Menu</a>
			</li>
			<li class="event">
				<h2>Party! Party!</h2>
				<p>Celebrate your</p>
				<p>Special Events with Us</p>
			</li>
			<li class="connect">
				<h2>Let's Keep in Touch</h2>
				<a href="http://facebook.com/freewebsitetemplates" target="_blank" class="fb" title="Facebook"></a> 
				<a href="http://twitter.com/fwtemplates" target="_blank" class="twitr" title="Twitter"></a>
			</li>
		</ul>
		<div>
			<ul class="navigation">
				<li><a href="index.php">Home</a></li>
				<li class="selected"><a href="booking.php">Book an event</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="about.php">About</a></li>
				<li class="last"><a href="contact.php">Contact</a></li>
			</ul>
			<span>&copy; Copyright 2012. All Rights Reserved.</span>
		</div>
	</div> <!-- end of footer -->
</body>
</php>