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
		<h2><span>Gift Sets</span></h2>
		
<center>		
<table width="900" height="1421" border="0">
  
  <tr>
    <th width="400" height="459">
     <a href="mixmatch.php">
	 <img src="gift/mixandmatch.jpg" width="350" height="350" alt="mixandmatch" /><br>
    <font color="black">Mix and Match Soap Set<br></a>
    RM 69.90  
   
</form>
</center>
    </th>
	
    <th width="458" scope="col">
	<a href="entire.php">	
	<img src="gift/entire.jpg" width="350" height="350" alt="Entire Organic Soap Set" /><br>
    <font color="black">Entire Organic Soap Set</a><br>
    RM 69.90
  
  
	
</form>
</center>
    </th>
	
  </tr>
  
  <tr>
    <td height="356" align="center">
   <a href="aromatherapy.php"> 
   <img src="gift/aromatherapy.jpg" width="350" height="350" alt="Aromatherapy Soap Set" /><br>
   <b><font color="black">Aromatherapy Soap Set</a><br>
    RM 59.90
   

	
</form>
</center>
    
    <td align="center">
	<a href="liplove.php">
	<img src="gift/liplove.jpg" width="350" height="350" alt="Lip Love Organic Set" /><br>
    <b><font color="black">Lip Love + Organic Soap Gift Pack</a><br>
    RM 69.90
    
     
	
	
</form>
</center>
	</td>
  </tr>
  
  <tr>
    <td height="434" align="center">
	<a href="organic.php">
	<img src="gift/organic.jpg" width="350" height="350" alt="Organic Body Soap Set" /><br>
    <b><font color="black">Organic Body Soap Set</a><br>
    RM 59.90
    
    
	
	
</form>
</center></td>
    <td align="center">
	<a href="complextion.php">
	<img src="gift/complextion.jpg" width="350" height="350" alt="Complextion Soap Set" /><br>
    <b><font color="black">Organic Complextion Soap Set</a><br>
    RM 59.90
    
    
	
	
</form>
</center></td>
  </tr>
  
   <tr>
    <td height="434" align="center">
	<a href="sampler.php">
	<img src="gift/sampler1.jpg" width="350" height="350" alt="Organic Body Soap Sampler" /><br>
    <b><font color="black">Organic Body Soap Sampler</a><br>
    RM 49.90
    
    
	
</form>
</center></td>
	
    <td align="center">
	<a href="sd.php">
	<img src="gift/sd1.jpg" width="350" height="350" alt="Sweet Dreams" /><br>
    <b><font color="black">Sweet Dreams Nighttime Kit</a><br>
    RM 49.90
    
     
	
</form>
</center></td>
  </tr>
</b>  
</table>
</div>
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
			
				<a href="order.php">Order Tracking</a><br><br>
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
	</center>
</body>
</php>
