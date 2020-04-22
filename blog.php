<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<php>
<head>
	<title>Blog - Restaurant Website Template</title>
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
		<a href="index.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="entree.php"><span>Entree</span></a></li>
			<li class="main"><a href="menu.php"><span>Main Course</span></a></li>
			<li><a href="desserts.php"><span>Desserts</span></a></li>
			<li><a href="drinks.php"><span>Drinks</span></a></li>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2><span>Blog</span></h2>
		<div id="blogs">
			<div class="sidebar">
				<div class="posts">
					<h3>Recent Posts</h3>
					<ul>
						<li><a href="blog.php">Aliquam varius pulvinar</a></li>
						<li><a href="blog.php">Fusce purus commodo</a></li>
						<li><a href="blog.php">Praesent molestie</a></li>
						<li><a href="blog.php">Vestibulum tempus erat</a></li>
						<li><a href="blog.php">Sed quis diam ac neque</a></li>
					</ul>
				</div>
				<div class="archives">
					<h3>Archives</h3>
					<ul>
						<li><a href="">December</a></li>
						<li><a href="">June</a></li>
						<li><a href="">November</a></li>
						<li><a href="">May</a></li>
						<li><a href="">October</a></li>
						<li><a href="">April</a></li>
						<li><a href="">September</a></li>
						<li><a href="">March</a></li>
						<li><a href="">August</a></li>
						<li><a href="">February</a></li>
						<li><a href="">July</a></li>
						<li><a href="">January</a></li>
					</ul>
				</div>
			</div>
			<div class="section">
				<p><b>This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.</b>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
					If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forum/">Forum</a>.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut turpis vitae purus cursus malesuada at sed lacus. Integer pretium luctus felis, a dictum dui malesuada in. Praesent nunc erat, mollis sed varius id, 
					blandit ut nisi. Aliquam in ipsum purus, in dignissim turpis. Nullam a adipiscing felis. Etiam a egestas dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc eu neque vel 
					velit fringilla placerat at eu nulla. Sed tempus metus a lectus tristique in malesuada dolor mollis. Praesent nisl leo, aliquet elementum ullamcorper ut, accumsan et justo. Curabitur porttitor, dolor dapibus sodales 
					tristique, nisi dui interdum lorem, et bibendum nisi massa ac magna. Donec vitae velit nec metus faucibus aliquam. Donec at ligula sem, sit amet euismod turpis. In ac augue sed orci ultrices mollis ut ut felis. Quisque 
					condimentum facilisis velit, vel sollicitudin ligula lobortis eget. Nulla ut metus nulla. Proin vulputate tristique feugiat. Nulla et dui est, a scelerisque turpis. Ut id augue velit. Morbi lobortis quam aliquam felis 
					commodo hendrerit. Nulla sit amet velit iaculis sem tempor mattis id nec augue. Curabitur eleifend tempus quam, condimentum mollis massa rhoncus sed. Curabitur vel lacus mauris. Phasellus id ligula a felis scelerisque 
					tempor. Mauris in odio ligula. Duis sit amet euismod neque. Aenean consectetur pulvinar enim nec lobortis. Donec eget enim purus. Curabitur ut erat turpis. Mauris sollicitudin porta elit, nec accumsan est vestibulum eget. 
					Nam quis rutrum orci. Integer sit amet imperdiet orci. Vestibulum pretium consectetur lectus, in porta eros mattis at. Pellentesque in tortor nec metus blandit pellentesque.</p>
				<p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What&acute;s more, they&acute;re
					absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with
					the <a href="http://www.freewebsitetemplates.com/about/termsofuse/">Terms of Use</a>. You can even remove all our links if you want to.</p>
			</div>
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
				<li><a href="booking.php">Book an event</a></li>
				<li class="selected"><a href="blog.php">Blog</a></li>
				<li><a href="about.php">About</a></li>
				<li class="last"><a href="contact.php">Contact</a></li>
			</ul>
			<span>&copy; Copyright 2012. All Rights Reserved.</span>
		</div>
	</div> <!-- end of footer -->
</body>
</php>