<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$a=$_GET['dele'];
$dele="delete from village where vid='$a'";
$deletion=mysql_query($dele);
if($deletion==true)
{
include("displayvillage.php");
}
?>