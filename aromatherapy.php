<?php
include ("myConn.php");
SESSION_START();

if (isset($_POST["btnAdd"]))
{
	$email=$_SESSION['email'];
	$id=$_POST["pro_id"];
	$queryCheck="SELECT * FROM `shoppingcart` WHERE sc_id='$id' AND email='$email'";
	$resultCheck=mysqli_query($queryCheck);
	
		if(mysqli_num_rows($resultCheck)==0){
	
	$name=$_POST["pro_name"];
	$price=$_POST["pro_price"];
	$qty=$_POST["txtqty"];
	$total= $qty * $price;
	$email=$_POST["txtemail"];
	$img=$_POST["pro_img"];
	
	$queryAdd = " INSERT INTO `shoppingcart` (sc_id,sc_name,sc_price,sc_qty,sc_total,email,sc_img) VALUES ('$id','$name','$price','$qty','$total','$email','$img' )";
	mysqli_query($queryAdd);
?>
	<script language="JavaScript">
		alert("Soap has been added to your shopping cart!");
		location.href='aromatherapy.php';
	</script>
<?php
}
else		
	{
?>	
		<script language='JavaScript'>
		alert('Sorry, soap is already listed in your shopping cart. To update, please view your cart.');
		location.href='aromatherapy.php';
	</script>
<?php
	}
	
}

?>
<html>
<head>
	<title>AROMATHERAPY SOAP SET</title>
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
			
			<li><a href="cart.php"><span>Shopping Cart (<?php echo $c ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2><span>Gift Sets</span></h2>
		<div id="menus">
			
	<center><table width="650" height="479" border="1">
  <tr>
    <th width="291" rowspan="3" scope="col"><img src="gift/aromatherapy.jpg" width="350" height="350" alt="aromatherapy" />
	<br><br><font color="black" size="10"> RM 59.90 </font></th>
    <th height="155" colspan="3" scope="col"><font color="black"><h1>Aromatherapy Soap Set</h1>
      <p>Whether you’re ramping up for the day or winding down before bed, our Aromatherapy Organic Soap Set combines three of our favorite soaps guaranteed to put your mind, body and spirit in a state of relaxation.  What you will find are certified organic ingredients, beneficial therapeutic essential oils and healing botanical extracts coming together in handcrafted batches made with love. Go ahead…take a deep breath. We’ll take it from there.

Each Aromatherapy Organic Soap Set contains 1 bar (3.5 oz) Rosewood soap,1 bar (3.5 oz) Lavender Lemongrass soap, 1 bar (3.5 oz) Orange Pachouli Walnut soap.</font></p>
    </th>
  </tr>
  <tr>
    <td width="104" height="34" align="center"><a href="benAro.php" target="iframe_a">Benefit</a></td>
    <td width="126" align="center"><a href="ingAro.php" target="iframe_a">Ingredients</a></td>
    <td width="108" align="center"><a href="howMIX.php" target="iframe_a">How To Use</a></td>
  </tr>
  <tr>
    <td colspan="3"><p>&nbsp;
      <iframe width=350 height=200 src="" name="iframe_a"></iframe>
    </p><br><br>
	<center>
	<?php

if(isset($_SESSION['email'])): 

$email= $_SESSION['email'];
$query2 = "SELECT * FROM password WHERE email='$email'";
$result2 = mysqli_query($con,$query2);

		while ($col=mysqli_fetch_array($result2)){
			
 ?>

	<form name=frmAdd method="post" action="aromatherapy.php">
	
	<input type="hidden" name="txtemail" value="<?php echo $col[0];?>">
	<input type="hidden" value="GS03" name="pro_id">
	<input type="hidden" name="pro_img" value="gift/aromatherapy.jpg">
	<input type="hidden" value="Aromatherapy Soap Set" name="pro_name">
	<input type="hidden" value="59.90" name="pro_price">
    <font color="black">Quantity :</font>
	<input type="text" name="txtqty" id="txtqty" value="1" size="2" /><br><br>	
	<input type="image" value=submit name="btnAdd" src="images/addcart.png"  height="40" width="120" />	
		<?php } else: ?>
	 <a href="signin.php"><input type="image" name="btnAdd" src="images/addcart.png"  height="40" width="120" /></a><br>
	<?php endif; ?> 
</form>
</form>
</center></td>
  </tr>
</table><br><br>
<a href="giftset.php"><img src="images/back.jpg" height="100" width="150"></a>
</center>

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
	
</html>