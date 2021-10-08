<?php
mysql_connect("localhost","root" ,"")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{
$v=$_POST["cname"];
}
$insert=mysql_query("insert into cell(cname) values('$v')")or die(mysql_error());
if($insert==true)
{
include("displaycell.php");
}
mysql_close();
?>

