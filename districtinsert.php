<?php
mysql_connect("localhost","root" ,"")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{
$x=$_POST["dname"];
}
$insert=mysql_query("insert into district(dname) values('$x')")or die(mysql_error());
if($insert==true)
{
include("displaydistrict.php");
}
mysql_close();
?>
