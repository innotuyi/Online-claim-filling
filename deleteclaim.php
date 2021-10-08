<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$id=$_GET['dele'];
$delet="delete from claim where claimid='$id'";
$delete=mysql_query($delet) or die(mysql_error());
if($delete==true)
{
	echo '<script type="text/javascript">alert("You Need to delete This record");window.location=\'displayclaim.php\';</script>';
include("displayclaim.php");
}
?>