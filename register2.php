<?php
include "myConn.php";
if (isset($_POST["btnSubmit"]))
{	$email=$_POST["txtemail"];
	$queryCheck="SELECT * FROM `password` WHERE email='$email'";
	$resultCheck=mysql_query($queryCheck);
		if(mysql_num_rows($resultCheck)==0){
			$fname=$_POST["txtfname"];
			$lname=$_POST["txtlname"];
			$email=$_POST["txtemail"]; 
			$pwd=$_POST["txtpwd"];
			$contact=$_POST["txtcontact"];
			
	$queryAdd="INSERT INTO `password` (email,pwd) VALUES ('$email','$pwd')";
	mysql_query($queryAdd);
	$queryaddprofile = "INSERT INTO `customer` (cust_fname,cust_lname,cust_email,cust_pwd,cust_contact) VALUES ('$fname','$lname','$email','$pwd','$contact')";
		mysql_query($queryaddprofile);
?>

		<script language="JavaScript">
		alert("You have sign up!");
		location.href='index.php';
	</script>
<?php
		}

	else		
	{
?>	
		<script language='JavaScript'>
		alert('You have already registered!');
		location.href='register2.php';
	</script>
<?php
	}
	
}

?>
<html>
<head>
<title>Sign In or Register</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">

<script language="javaScript">
function fnCheck()
{
	
	var w,x,y,z,b,c;
	
	w= (document.forms["signup"]["txtfname"].value);
	x= (document.forms["signup"]["txtlname"].value);
	y= (document.forms["signup"]["txtemail"].value);
	z= (document.forms["signup"]["txtpwd"].value);
	b= (document.forms["signup"]["txtcpwd"].value);
	c= (document.forms["signup"]["txtcontact"].value);

	
		if(w == '' ||w== null)
		{
			alert('Please enter your first name!');
			return false;
		
		}
		if(x=='' ||x== null)
		{
			alert('Please enter your last name');
			return false;
		
		}
		if(y.indexOf ("@") == -1 || y == null)
		{
			alert('Please enter your email/correct email!');
			return false;

		}
		
		if(z=null || z == '')
		{
			alert('Please enter your password!');
			return false;

		}
		
		if(b=null || b != document.forms["signup"]["txtpwd"].value)
		{
			alert('Please re-enter your password');
			return false;

		}
		
		if(c=='' || isNaN(c))
		{
			alert('Please enter your phone number!');
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
			?>
				<a href="homepage.php">HOME</a>
			<?php else: ?>
				<a href="index.php">HOME</a>
			<?php endif; ?>
			</li>
			<li class="phone">
				<a href="contact.php">03-32445678</a> 
			</li>
			<li class="address">
				<a href="contact.php">SHAH ALAM</a> 
			</li>
		</ul><br><br><br>
	
		<br>
<br><br><br>
<center><table border="0">
<form name="signup" method=post action="register2.php" onSubmit="return fnCheck();">
<tr><td>
	<table border="0" align="center" cellspacing="10">
<tr>
		<td colspan=2><center><img src="images/logo.gif"></td>
	</tr>
	<tr>
		<td><br><font face="Century Gothic" size="4">FIRST NAME:</td>
		<td><br><input type="text" name="txtfname" size="30"> </td>
	</tr>
	<tr>
		<td><font face="Century Gothic" size="4">LAST NAME:</td>
		<td><input type="text" name="txtlname" maxlength="12" size="30"> </td>
	</tr>
	<tr>
		<td><font face="Century Gothic" size="4">E-MAIL</td>
		<td><input type="text" name="txtemail" size="30"> </td>
	</tr>
	<tr>
		<td><font face="Century Gothic" size="4">PASSWORD:</td>
		<td><input type="password" name="txtpwd" size="30"> </td>
	</tr>
	<tr>
		<td><font face="Century Gothic" size="4">CONFIRM PASSWORD:</td>
		<td><input type="password" name="txtcpwd" size="30"> </td>
	</tr>
	<tr>
		<td><font face="Century Gothic" size="4">PHONE NUMBER:</td>
		<td><input type="text" name="txtcontact" maxlength="12" size="30"> </td>
	</tr>
	
<tr>
	<td	colspan=2><center><button type="reset">RESET</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="btnSubmit" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" name="btnBack" value="BACK" onClick=javascript:history.back()>
	<br><br></td>
</tr>
</form>
</table>
</table>


</body>
<div id="footer"> <!-- start of footer -->
		
		<div>
			<ul class="navigation">
				<li><a href="index.php">FAQ</a></li>
				<li><a href="booking.php">Privacy Policy</a></li>
				<li><a href="blog.php">Terms & Condition</a></li>
				<li><a href="about.php">Contact Us</a></li>
				<li class="last"><a href="contact.php">Feedback |</a></li>
				<li class="last"><a href="contact.php">Order Tracking |</a></li>
				<li class="last"><a href="contact.php">Return Policy |</a></li>
				<li class="last"><a href="contact.php">Store Location |</a></li>
				<li class="last"><a href="contact.php">Skin Care Guide |</a></li>
				<li class="last"><a href="contact.php">How to Use |</a></li>
			</ul>
			
		</div>
	</div> <!-- end of footer -->
</html>
</html>