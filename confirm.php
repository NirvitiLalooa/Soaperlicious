<?php
include ("myConn.php");
SESSION_START();


if (isset($_POST["btnConfirm"]))
{
	
	if(isset($_SESSION['email'])):
	$email=$_SESSION['email'];
	$name=$_POST["txtName"];
	$address=$_POST["txtAddress"];
	$delivery=$_POST["txtDelivery"];
	$payment=$_POST['txtPayment'];	
	$total=$_POST["ttl"];
	$id=$_POST["id"];
	$qty=$_POST["qty"];
	
	$ntt = 0;
	$q1= "SELECT * FROM `shoppingcart` WHERE sc_id='NTT'";
	$qntt=mysql_query($q1);
	while ($row=mysql_fetch_array($qntt)) 
	$ntt=$row[3];
	
	$abc=0;
	$q2= "SELECT * FROM `shoppingcart` WHERE sc_id='ABC' AND email='$email'";
	$qabc=mysql_query($q2);
	while ($row=mysql_fetch_array($qabc))
	$abc=$row[3];	
	
	$sbs=0;
	$q3= "SELECT * FROM `shoppingcart` WHERE sc_id='SBS' AND email='$email'";
	$qsbs=mysql_query($q3);
	while ($row=mysql_fetch_array($qsbs))
	$sbs=$row[3];	
	
	$pb=0;
	$q4= "SELECT * FROM `shoppingcart` WHERE sc_id='PB' AND email='$email'";
	$qpb=mysql_query($q4);
	while ($row=mysql_fetch_array($qpb)) 
	$pb=$row[3];	
	
	$lps=0;
	$q5= "SELECT * FROM `shoppingcart` WHERE sc_id='LPS' AND email='$email'";
	$qlps=mysql_query($q5);
	while ($row=mysql_fetch_array($qlps)) 
	$lps=$row[3];

	$rw=0;
	$q6= "SELECT * FROM `shoppingcart` WHERE sc_id='RW' AND email='$email'";
	$qrw=mysql_query($q6);
	while ($row=mysql_fetch_array($qrw)) 
	$rw=$row[3];
	
	$oc=0;
	$q7= "SELECT * FROM `shoppingcart` WHERE sc_id='OC' AND email='$email'";
	$qoc=mysql_query($q7);
	while ($row=mysql_fetch_array($qoc)) 
	$oc=$row[3];	
	
	$ll=0;
	$q8= "SELECT * FROM `shoppingcart` WHERE sc_id='LL' AND email='$email'";
	$qll=mysql_query($q8);
	while ($row=mysql_fetch_array($qll))
	$ll=$row[3];	

	$opw=0;
	$q9= "SELECT * FROM `shoppingcart` WHERE sc_id='OPW' AND email='$email'";
	$qopw=mysql_query($q9);
	while ($row=mysql_fetch_array($qopw))
	$opw=$row[3];
	
	$gs01=0;
	$q10= "SELECT * FROM `shoppingcart` WHERE sc_id='GS01' AND email='$email'";
	$qgs01=mysql_query($q10);
   	while ($row=mysql_fetch_array($qgs01)) 
	$gs01=$row[3]; 
	
	$gs02=0;
	$q11= "SELECT * FROM `shoppingcart` WHERE sc_id='GS02' AND email='$email'";
	$qgs02=mysql_query($q11);
	while ($row=mysql_fetch_array($qgs02))
	$gs02=$row[3];	
	
	$gs03=0;
	$q12= "SELECT * FROM `shoppingcart` WHERE sc_id='GS03' AND email='$email'";
	$qgs03=mysql_query($q12);
	while ($row=mysql_fetch_array($qgs03)) 
	$gs03=$row[3];	
	
	$gs04=0;
	$q13= "SELECT * FROM `shoppingcart` WHERE sc_id='GS04' AND email='$email'";
	$qgs04=mysql_query($q13);
	while ($row=mysql_fetch_array($qgs04)) 
	$gs04=$row[3];	
	
	$gs05=0;
	$q14= "SELECT * FROM `shoppingcart` WHERE sc_id='GS05' AND email='$email'";
	$qgs05=mysql_query($q14);
	while ($row=mysql_fetch_array($qgs05))
	$gs05=$row[3];	

	$gs06=0;
	$q15= "SELECT * FROM `shoppingcart` WHERE sc_id='GS06' AND email='$email'";
	$qgs06=mysql_query($q15);
	while ($row=mysql_fetch_array($qgs06)) 
	$gs06=$row[3];	

	$gs07=0;
	$q16= "SELECT * FROM `shoppingcart` WHERE sc_id='GS07' AND email='$email'";
	$qgs07=mysql_query($q16);
	while ($row=mysql_fetch_array($qgs07)) 
	$gs07=$row[3];	

	$gs08=0;
	$q17= "SELECT * FROM `shoppingcart` WHERE sc_id='GS08' AND email='$email'";
	$qgs08=mysql_query($q17);
	while ($row=mysql_fetch_array($qgs08)) 
	$gs08=$row[3];

	$queryAdd = "INSERT INTO `order` (or_email,or_name,or_address,or_delivery,or_payment,
				  NTT,ABC,SBS,PB,LPS,RW,OC,LL,OPW,GS01,GS02,GS03,GS04,GS05,GS06,GS07,GS08,or_total)VALUES 
				('$email','$name','$address','$delivery','$payment','$ntt','$abc','$sbs','$pb','$lps','$rw',
				'$oc','$ll','$opw','$gs01','$gs02','$gs03','$gs04','$gs05','$gs06','$gs07','$gs08','$total')";
mysql_query($queryAdd);

$queryemp= "DELETE FROM shoppingcart WHERE email='$email'";
	mysql_query($queryemp);	
?>
<?php
if($payment=="Cash")
{	
?>
	<script language="JavaScript">
			alert("Thank You. Your order has been submitted.");
			location.href='homepage.php'; 
	</script>
<?php } 

if($payment=="Master Card" || $payment=="Debit Card")
{	
?>
	<script language="JavaScript">
			alert("Please proceed to payment!");
			location.href='paymentform.php'; 
	</script>
<?php } 
 

if($payment=="Bank Islam") 
{
?>
	<script language="JavaScript">
			alert("Please proceed to payment!");
			location.href='https://www.bankislam.biz/'; 
			window.open("homepage.php");
			</script>

<?php }

if($payment=="Maybank2u") 
{
?>
	<script language="JavaScript">
			alert("Please proceed to payment!");
			location.href='http://www.maybank2u.com.my/'; 
	</script>
		
<?php } 
if($payment=="Affin Bank") 
{
?>
	<script language="JavaScript">
			alert("Please proceed to payment!");
			location.href='https://www.affinbank.com.my/'; 
	</script>	
<?php }
if($payment=="Bank Rakyat") 
{
?>
	<script language="JavaScript">
			alert("Please proceed to payment!");
			location.href='https://www.irakyat.com.my/'; 
	</script>	
<?php }
if($payment=="Public Bank") 
{
?>
	<script language="JavaScript">
			alert("Please proceed to payment!");
			location.href='https://www.pbebank.com/'; 
	</script>
<?php } 
if($payment=="RHB Bank") 
{
?>
	<script language="JavaScript">
			alert("Please proceed to payment!");
			location.href='https://logon.rhb.com.my/'; 
	</script>
<?php }
endif;
} ?>

<html>
<head>
	
<title>Confirm Order</title>
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
			<li class="main"><a href="catagories.php"><span>Categories</span></a></li>
			<li class="current"><a href="giftset.php"><span>Gift Set</span></a></li>	
			<li><a href="cart.php"><span>Shopping Cart (<?php echo $c; ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	

	
	
<?php 
if (isset($_POST["btnProceed"]))
	if(isset($_SESSION['email'])): 
	$email=$_SESSION['email'];
	$name=$_POST["txtname"];
	$address=$_POST["txtaddress"];
	$postcode=$_POST["txtpostcode"];
	$city=$_POST["txtcity"];
	$state=$_POST["txtstate"];
	$country=$_POST["txtcountry"];
	
	$delivery=$_POST["delivery"];
	$payment=$_POST["method"];	
	
?>


<h2 align ="center"><font face='Century Gothic' color="white">CONFIRM ORDER</font></h2>

<form name=frmConfirm method="post" action="confirm.php">

<table border=1 align="center" cellpadding=5>
<tr>
	<th align="left"><font face='Century Gothic' size='4'>Name of recipient : <input readonly name="txtName" size=30 value="<?php echo $name; ?>" ></font> 
	<br><br>
	</th>
</tr>

<tr>
	<th align="left"><font face='Century Gothic' size='4'>Delivery address : <input readonly name="txtAddress" size=60 value="<?php echo $address; ?>,<?php echo $postcode; ?>,<?php echo $city; ?>,<?php echo $state; ?>,<?php echo $country; ?>">
	<br><br>
	</th>
</tr>

<tr>
	<th align="left"><font face='Century Gothic' size=4 color=>Delivery Method : <input readonly name="txtDelivery" size=30 value="<?php echo $delivery; ?>" >
	<br><br>
</tr>
<tr>
	<th align="left"><font face='Century Gothic' size=4 color=>Payment Method : <input readonly name="txtPayment" size=30 value="<?php echo $payment; ?>" >
	
	<br><br>
</tr>
<tr>
	<th align="left"><font face='Century Gothic' size=4>Date of purchase: <?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d/m/y"); ?>
	</th>
</tr>
</table>

<h2><font face='Century Gothic' size='5'><center>ITEM LIST</font></h2>
<table border=1 align=center cellpadding=7>
	<tr>
		<th>
			<font face='Century Gothic' size='4'>Product ID
		</th>
		<th>
			<font face='Century Gothic' size='4'>Product Image
		</th>
		<th>
			<font face='Century Gothic' size='4'>Product Name
		</th>
		<th>
			<font face='Century Gothic' size=4 color=>Quantity
		</th>
		<th>
			<font face='Century Gothic' size=4>Price (RM)
		</th>
		<th>
			<font face='Century Gothic' size=4>Total Price (RM)
		</th>
	</tr>
<?php
		
	$email=$_SESSION['email'];
	$query = "SELECT * FROM `shoppingcart` WHERE email='$email' ORDER BY sc_id ASC";
	$result = mysql_query($query);
	$totAll = 0;
	while($row=mysql_fetch_array($result))
	{
?>

<form name="frmUpdate" method="post" action="cart.php">
	<tr>
		<td><font face='Century Gothic' size='4'><center><input readonly name="id" size=4 value="<?php echo $row[0];?>"></td>
		<td><center><img src="<?php echo $row[6];?>" height="100" width="100"></td>
		<td><font face='Century Gothic' size='4'><center><?php echo $row[1]; ?></td>
		<td><font face='Century Gothic' size='4'><center><input readonly name="qty" size=3 value="<?php echo $row[3];?>"></td>
		<td><font face='Century Gothic' size='4'><center><?php echo $row[2]; ?></td>
		<td><font face='Century Gothic' size='4'><center><?php echo $row[4]; ?></td>
	</tr>
</form>

<?php 			
	$totAll = $totAll + $row[4]; 
	}	
	$delivery=$_POST["delivery"];
	
	if ($delivery == "Cash on Delivery"):
	{
		if ($totAll >= 200):
		{
		$newTotal=$totAll;
		$dc="Free of charge";
		}
		else:
		{
		$newTotal=$totAll +3;
		$dc="RM 3.00";
		}
		endif;	
	}
	
	elseif ($delivery == "Pos Laju"):
	{
		if ($totAll >= 200):
		{
		$newTotal=$totAll;
		$dc="Free of charge";
		}
		else:
		{
		$newTotal=$totAll + 15;
		$dc="RM 15.00";
		}
		endif;	
	}
	
	else:
	{
		$newTotal=$totAll;
		$dc="Free of charge";
	}
	
endif;?>
	
<tr><th colspan=6 align="right"><font face='Century Gothic' size='4'>Delivery charges (RM) : <?php echo $dc; ?></th></tr>
<tr><th colspan=6 align="right"><font face='Century Gothic' size='4'>TOTAL (RM) : <input readonly name=ttl size=5 value="<?php echo $newTotal; ?>"></th><br></tr>
</table>		
<br><br>
<table border=0 align="center">
<tr><td align="left"><a href="details.php"><input type=button name="btnback" value="<< Back"></a>
<td align="right">
<input type="submit" value="CONFIRM" name="btnConfirm" />


</td></tr>
</table>
</form>
</body>
</html>
<?php endif; ?>
