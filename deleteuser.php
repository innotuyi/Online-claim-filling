<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$id=$_GET['dele'];
$delet="delete from user where userid='$id'";
$delete=mysql_query($delet) or die(mysql_error());
if($delete==true)
{
	echo '<script type="text/javascript">alert("You Need to update This record");window.location=\'displayuser.php\';</script>';
include("displayuser.php");
}
?>