<html>
<head>

	<title>Sign In or Register</title>
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
		</ul><br><br><br>
	
		<br>
 
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

   
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

       <center><table border=0 width=500 height=350 background="log3.jpg">

<form name="log in" method="post" action="processPWD.php">

	<tr>
		<td>
		<center><img src="images/logo.gif"><br><br>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Century Gothic" size="4">Email :&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
		<input type="text" name="txtemail" maxlength="50" size="24">&nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;:&nbsp;&nbsp;
		<input type="password" name="txtpwd" maxlength="18" size="24">&nbsp;&nbsp;&nbsp;&nbsp;</font>
		<br><br><br>
		<center><input type="submit" name="btnSubmit" value="LOG IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="register2.php"><input type="button" name="btnSign" value="SIGN UP"></a>
		<br><br></td>
	</tr>
</table> 
            
       

</body>
<div id="footer"> <!-- start of footer -->
		
		<div>
			<ul class="navigation">
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="terms.php">Terms of Use</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li class="last"><a href="feedback.php">Feedback |</a></li>
				<li class="last"><a href="http://poslaju.com.my/track-trace/">Order Tracking |</a></li>
				<li class="last"><a href="return.php">Return Policy |</a></li>
				<li class="last"><a href="store.php">Store Location |</a></li>
				<li class="last"><a href="skin.php">Skin Care Guide |</a></li>
				<li class="last"><a href="how.php">How to Use |</a></li>
			</ul>
			
		</div>
	</div> <!-- end of footer -->
</php>