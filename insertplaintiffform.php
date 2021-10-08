<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{

$x=$_POST["pfirstname"];
$b=$_POST["plastname"];
$c=$_POST["pemail"];
$f=$_POST["pfatherfirstname"];
$g=$_POST["pfatherlastname"];
$k=$_POST["pmotherfirstname"];
$p=$_POST["pmotherlastname"];
$z=$_POST["pvillage"];
$y=$_POST["pcell"];
$w=$_POST["psector"];
}
$insert=mysql_query("insert into plaintiff(pfirstname,plastname,pemail,pfatherfirstname,pfatherlastname,pmotherfirstname,pmotherlastname,pvillage,pcell,psector)values('$x', '$b','$c','$f','$g','$k','$p','$z','$y','$w')")or die(mysql_error());
if($insert==true)
{
include("displayplaintiff.php");
}
mysql_close();
?>

