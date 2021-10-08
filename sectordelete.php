<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$vd=$_GET['dele'];
$delet="delete from sector where sid='$vd'";
$delete=mysql_query($delet) or die(mysql_error());
if($delete==true)
{
include("displaysector.php");
}
?>