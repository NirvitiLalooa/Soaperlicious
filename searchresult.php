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
		
		
		<a href="homepage.php" id="logo"></a>
		<ul id="navigation">
			<li><a href="about.php"><span>About Us</span></a></li>
			<li class="main"><a href="catagories.php"><span>Categories</span></a></li>
			<li class="current"><a href="giftset.php"><span>Gift Set</span></a></li>	
			
			<?php if(isset($_SESSION['email'])): 
			$email=$_SESSION['email'];
			$count= "SELECT * FROM shoppingcart WHERE email='$email'";
			$res = mysql_query($count);
			$c=mysql_num_rows($res);
		?>
		<li><a href="cart.php"><span>Shopping Cart (<?php echo $c; ?> Items)</span></a></li>
			<?php else: ?>
			<li><a href="cart.php"><span>Shopping Cart</span></a></li>
			<?php endif; ?>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		
		<h2 class="main-course"><span>Search Result</span></h2>
		

<table border=1 align="center">
<tr><td><font face='Century Gothic' size='4' color="black">ID</td>
	<td><font face='Century Gothic' size='4' color="black">Image</td>
	<td><font face='Century Gothic' size='4' color="black">Product Name</td>
	<td><font face='Century Gothic' size='4' color="black">Price (RM)</td>
	<?php 

	if(isset($_POST["btnsearch"]))
	{
		$search = $_POST["txtsearch"];
		
		$querySearch = "SELECT * FROM `product` WHERE pro_name LIKE '%$search%'";
		$res=mysql_query($querySearch);
	
		while($row=mysql_fetch_array($res)){
?>
<tr><td><font face='Century Gothic' size='4' color="black"><center><?php echo $row[0];?></td>
	<td><center><img src="<?php echo $row[2];?>" height="100" width="100"></td>
	
	
<?php
		if ($row[0]=="NTT") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="balneemtea.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="LL") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="ballavender.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="ABC") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="balanise.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="SBS") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="balsea.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="LPS") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="balpoppy.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="PB") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="balpepper.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="OC") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="baloat.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="OPW") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="balorange.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="RW") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="rosewood.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS01") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="mixmatch.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS02") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="entire.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS03") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="aromatherapy.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS04") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="liplove.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS05") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="organic.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS06") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="complextion.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS07") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="sampler.php"><?php echo $row[1]; } ?></a></td>
<?php 	if ($row[0]=="GS08") { ?>
		<td><font face='Century Gothic' size='4' color="black"><center><a href="sd.php"><?php echo $row[1]; } ?></a></td>

	<td><font face='Century Gothic' size='4' color="black"><center><?php echo $row[3]; ?></td>

</tr> 	
</form>	
<?php } ?>																																
</body>
</html>
	<?php  }  ?>