<?php
include ("myConn.php");
SESSION_START();
?>
<html>
<head>
	<title>Dry Type</title>
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
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	
	<div id="contents"> <!-- start of contents --> 
		<h2><span>Dry Type</span></h2>
		
<center>			
<table width="900" height="1421" border="0">
  
  <tr>
    <th width="400" height="459" align="center">
     <a href="rosewood.php">
     <img src="categories/organichandmadesoapRosewood_large.jpg" width="350" height="350" alt="Rosewood Soap" />
     </a><br>
    <font color="black">Rosewood Soap<br>
    RM 22.50
     
	
</form>
</center>
    </th>
    
    <th align="center">
	<a href="ballavender.php">
	<img src="categories/LavenderLemongrassSoap_large.jpg" width="350" height="350" alt="Lavender LemonGrass Soap" /></a><br>
    <b><font color="black">Lavender LemonGrass Soap<br>
    RM 22.50

</form>
</th>
</center>
</tr>
  
<tr>

<td width="458" scope="col" align="center">
	<a href="baloatmeal.php">
    <img src="categories/OrganicOatmealCalendulaSoap_large.jpg" width="350" height="350" alt="Oatmeal Celendula Soap" />
    </a>
    <br>
    <font color="black">Oatmeal Celendula Soap<br>
    RM 22.00

</form>
</center>
</td>

    <td height="434" align="center">
	<a href="balsea.php">
	<img src="categories/OrganicSeaBuckthornSoap_large.jpg" width="350" height="350" alt="Sea Buckthorn Satsuma Soap" /></a><br>
    <b><font color="black">Sea Buckthorn Satsuma Soap<br>
    RM 22.00
</form>
</center>
</td>
   
</tr>
<tr>

 <td height="356" align="center">
   <a href="balneemtea.php"> 
   <img src="categories/OrganicNeemTeaTree_large.jpg" width="350" height="350" alt="Neem Tea Tree Soap" />
   </a>
   <br>
   <b><font color="black">Neem Tea Tree Soap<br>
    RM 21.00
</form>
</center>
</td>

<td align="center">
	<a href="balorange.php">
	<img src="categories/OrangePatchouliWalnutOrganicSoap_large.jpg" width="350" height="350" alt="Orange Patchouli Walnut Soap" /></a><br>
    <b><font color="black">Orange Patchouli Walnut Soap<br>
    RM 22.50
</form>

</center>
	</td>
</tr>
<tr>
<td width="400" height="459" align="center">
     <a href="balpepper.php">
     <img src="categories/PeppermintPineOrganicSoap_large.jpg" width="350" height="350" alt="Peppermint Basil" />
     </a><br>
    <font color="black">Peppermint Basil<br>
    RM 22.50
     
	
</form>
</center>
    </td>

 <td align="center">
	<a href="balanise.php">
	<img src="categories/OrganicAniseBambooCharcoalSoap_large.jpg" width="350" height="350" alt="Anise Bamboo Charcoal Soap" /></a><br>
    <b><font color="black">Anise Bamboo Charcoal Soap<br>
    RM 21.50

</form>
</center>
</td>
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
