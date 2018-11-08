<?php
include ("myConn.php");
SESSION_START();
?>
<html>
<head>
	<title>Payment Method</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script language="javaScript">
function fnCheck()
{
	
	var w,x,y,z,a,b,c;
	
	w= (document.forms["frmDetail"]["txtname"].value);
	x= (document.forms["frmDetail"]["txtaddress"].value);
	y= (document.forms["frmDetail"]["txtpostcode"].value);
	z= (document.forms["frmDetail"]["txtcity"].value);
	a= (document.forms["frmDetail"]["txtstate"].value);
	b= (document.forms["frmDetail"]["txtcountry"].value);
	

	
		if(w == '' ||w== null)
		{
			alert('Please enter your name');
			return false;
		
		}
		if(x=='' || x==null)
		{
			alert('Please enter your address');
			return false;
		
		}
		if(y=''|| isNaN(y))
		{
			alert('Please enter your postcode');
			return false;

		}
		
		if(z=null || z == '')
		{
			alert('Please re-enter your city');
			return false;

		}
		
		if(a=null || a == '')
		{
			alert('Please enter your state');
			return false;

		}
		
		if(b=='' || b==null)
		{
			alert('Please enter your country');
			return false;
		
		}
		
		
}
</script>

	
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
				<a href="cart.php">03 222 9393</a> 
			</li>
			<li class="address">
				<a href="cart.php">SHAH ALAM</a> 
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
		


<h2 align ="center"><font face='Century Gothic' color="white">Billing Address (Step 1)</font></h2>

<form name=frmDetail method="post" action="confirm.php" onSubmit="return fnCheck();">
<table border=1 align="center" cellpadding=5>
<tr><th><font face='Century Gothic' size='4'>Full Name<br><br>
<input type="text" name="txtname" size="50"></th></tr>
<tr><th><font face='Century Gothic' size='4'>Address<br><br>
<textarea name="txtaddress" cols="45" rows="3"></textarea></th></tr>
<tr><th><font face='Century Gothic' size='4'>Postcode<br><br>
<input type="text" name="txtpostcode" size="10"></th></tr>
<tr><th><font face='Century Gothic' size='4'>City<br><br>
<input type="text" name="txtcity" size="20"></th></tr>
<tr><th><font face='Century Gothic' size=4 color=>Region/State<br><br>
<input type="text" name="txtstate" size="25"></th></tr>
<tr><th><font face='Century Gothic' size=4>Country<br><br>
<input type="text" name="txtcountry" size="20"></th></tr>
<tr><th><font face='Century Gothic' size=4>Date of purchase: <?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d/m/y"); ?></th></tr>

</table>
<br><br><br>
<h2 align ="center"><font face='Century Gothic' color="white">Delivery method (Step 2)</font></h2>

<table border=1 align="center" cellpadding=5>
<tr><th><font face='Century Gothic' size='4'><input type="radio" name="delivery" value="Self Pick-up" checked>Self pick-up</th></tr><br><br><br>
<tr><th><font face='Century Gothic' size='4'><input type="radio" name="delivery" value="Cash on Delivery">Cash on Delivery (Shah Alam)</th></tr><br><br>
<tr><th><font face='Century Gothic' size='4'><input type="radio" name="delivery" value="Pos Laju">Pos Laju</th></tr><br><br><br>
</table>
<br><br>

<h2 align ="center"><font face='Century Gothic' color="white">Payment method (Step 3)</font></h2>
<table border=1 align="center" cellpadding=5>
<tr><th><font face='Century Gothic' size='4'><input type="radio" name="method" value="Cash" checked>Cash</font></th></tr>
<tr><th><font face='Century Gothic' size='4'><input type="radio" name="method" value="Credit Card / Master Card" checked>Credit Card / Master Card</font></th></tr>
<tr><th><font face='Century Gothic' size='4'><input type="radio" name="method" value="Debit Card">Debit Card</font></th></tr>	
<tr><th colspan="2"><font face='Century Gothic' size='4'><center>Online Banking<br><br>
	<input type="radio" name="method" value="Bank Islam" align=top><img src="images/bankislam.png" height="70" width="180">
	<input type="radio" name="method" value="Maybank2u">&nbsp <img src="images/maybank.jpg" height="55" width="180"><br><br>
	<input type="radio" name="method" value="Public Bank" align=top><img src="images/publicbank.png" height="50" width="180">
	<input type="radio" name="method" value="Bank Rakyat">&nbsp <img src="images/bankrakyat.jpg" height="50" width="180"><br><br>
	<input type="radio" name="method" value="Affin Bank" align=top><img src="images/affin.png" height="60" width="180">
	<input type="radio" name="method" value="RHB Bank">&nbsp <img src="images/rhb.png" height="40" width="180"><br><br>
</th></tr></center>	
</table>

<table border=0 align="center">
<tr><td align="left"><a href="cart.php"><input type=button name="btnback" value="<< Back">
<td align="right"><input type=submit name="btnProceed" value="Proceed >>" height=60 width=120 onSubmit="confirm.php"></a></td></tr>
</table>
</form>
</body>
</html>
<?php } endif; ?>