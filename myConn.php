<?php
//CONNECT TO localhost----------------------------
$con = mysql_connect("localhost","root","");
if (!$con)
{	die ('Could not connect : '.mysql_error());	}

//CONNECT TO database-----------------------------
$db_selected = mysql_select_db("soaperlicious",$con);

if (!$db_selected)
{	die ('Can\'t use soaperlicious : '.mysql_error());	}
?>