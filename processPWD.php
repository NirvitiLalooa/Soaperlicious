<html>

<?php 
$email = $_REQUEST["txtemail"];
$pwd = $_REQUEST["txtpwd"]; //check dlm database

include ("myConn.php");
SESSION_START();

	$query = "SELECT * FROM `password` WHERE email = '$email' AND pwd = '$pwd'"; //select statement nk amik data from database
		$res = mysqli_query($query);
		/*if (mysqli_num_rows($res) == 0)
		{
?>
			<script language="JavaScript">
		alert("Email / Password invalid!");
		location.href='signin.php';
	</script>
<?php
		}
		else { */
			$_SESSION["email"]=$email; 
			echo"<script language=javascript> location.href='homepage.php'</script>";
?>
</body>
</html>