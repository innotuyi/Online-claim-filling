<?php

mysql_connect("localhost","root" ,"")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{
$v=$_POST["sname"];
}
$insert=mysql_query("insert into sector(sname) values('$v')")or die(mysql_error());
if($insert==true)
{
include("displaysector.php");
}
echo"<body bgcolor='#003366'>";
mysql_close();
?>


	
