<?php
include ("myConn.php");
SESSION_START();
?>
<html>
<head>
	<title>Shopping Cart</title>
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
		
		<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$count= "SELECT * FROM shoppingcart WHERE email='$email'";
			$res = mysql_query($count);
			$c=mysql_num_rows($res);
		?>
		<a href="homepage.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="about.php"><span>About Us</span></a></li>
			<li><a href="catagories.php"><span>Categories</span></a></li>
			<li class="main"><a href="giftset.php"><span>Gift Set</span></a></li>	
			<li class="current"><a href="cart.php"><span>Shopping Cart (<?php echo $c; ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->

<?php
$email=isset($_SESSION['email']);
if(isset($_POST["btnUpdate"]))
{
	$id=$_POST["txtid"];
	$qty=$_POST["txtqty"];
	
	$price="SELECT sc_price FROM shoppingcart WHERE sc_id='$id'";
	$resultprice= mysql_query($price, $con);
	$rp=mysql_fetch_array($resultprice);
	$rp1 = $rp['sc_price'];
	
	$newTotal=$qty*$rp1;
	$queryUpdate = "UPDATE shoppingcart SET sc_qty='$qty', sc_total='$newTotal' WHERE sc_id ='$id'";
	$retval = mysql_query($queryUpdate,$con);
		if(! $retval )
			{
				die('Could not update data: ' . mysql_error());
			}
	echo "<script language='JavaScript'>
		alert('Shopping cart has been updated.')
	</script>";
	echo "<script language=JavaScript>  location.href='cart.php' </script>";
}

if(isset($_POST["btnRemove"]))
{
	$id=$_POST["txtid"];
	
	$queryRemove = "DELETE FROM shoppingcart WHERE sc_id='$id'";
	$retval1 = mysql_query($queryRemove,$con);
		if(! $retval1 )
			{
				die('Could not remove: ' . mysql_error());
			}
	echo "<script language='JavaScript'>
		alert('Soap has been removed from your shopping cart.')
	</script>";
	echo "<script language=JavaScript>  location.href='cart.php' </script>";
}

 ?>
<html>
<?php if(isset($_SESSION['email'])): 
		{ ?>
<h2 align ="center"><font face='Century Gothic' color="white">Shopping Cart</font></h2>
<table border=1 align="center" cellpadding=5>
<tr><th><font face='Century Gothic' size='4'>Product ID</th>
<th><font face='Century Gothic' size='4'>Product Image</th>
<th><font face='Century Gothic' size='4'>Product Name</th>
<th><font face='Century Gothic' size=4 color=>Quantity</th>
<th><font face='Century Gothic' size=4>Price (RM)</th><th><font face='Century Gothic' size=4>Total Price (RM)</th>
<th><font face='Century Gothic' size=4>Update / Remove</th></tr>

<?php
		
			$email=$_SESSION['email'];
			$query = "SELECT * FROM `shoppingcart` WHERE email='$email' ORDER BY sc_id ASC";
			$result = mysql_query($query);
			$totAll = 0;
			while($row=mysql_fetch_array($result)){
			?>
<form name="frmUpdate" method="post" action="cart.php">
<tr><td><font face='Century Gothic' size='4'><center><?php echo $row[0];?><input type="hidden" name="txtid" size=15 value="<?php echo $row[0];?>">
	<td><center><img src="<?php echo $row[6];?>" height="100" width="100"></td>
	<td><font face='Century Gothic' size='4'><center><?php echo $row[1]; ?></td>
	<td><font face='Century Gothic' size='4'><center><input type=text align="center" name="txtqty" size=5 value="<?php echo $row[3];?>"></td>
	<td><font face='Century Gothic' size='4'><center><?php echo $row[2]; ?></td>
	<td><font face='Century Gothic' size='4'><center><?php echo $row[4]; ?></td>
	<td><center><input type="submit" value="UPDATE" name="btnUpdate"><br><br><input type="submit" value="REMOVE" name="btnRemove"></td>
</tr>
</form>
	<?php 
	$totAll = $totAll + $row[4];
			} ?>	
	<tr><th colspan=5 align="right"><font face='Century Gothic' size='4'>TOTAL (RM) : </th>
		<th><font face='Century Gothic' size='4'><?php echo $totAll; ?></th><br>
		<td><br><center><a href="homepage.php"><img src="images/continue.png" height="40" width=140></a><br>
					<a href="details.php"><img src="images/checkout.png" height="60" width="160"></a>
		</td></tr>
		<?php }
		else: 
				echo "<script language='JavaScript'>
		alert('Shopping Cart is empty. Please sign in to continue shopping!')
	</script>";
	echo "<script language=JavaScript>  location.href='signin.php' </script>";
		endif; ?>
	</table>
</body>
</html>
		