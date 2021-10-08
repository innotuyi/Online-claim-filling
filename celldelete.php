<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$id=$_GET['dele'];
$delet="delete from cell where cid='$id'";
$delete=mysql_query($delet) or die(mysql_error());
if($delete==true)
{
include("displaycell.php");
}
?>