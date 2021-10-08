
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{

$x=$_POST["dfirstname"];
$a=$_POST["dlastname"];
$b=$_POST["demail"];
$e=$_POST["dfatherfirstname"];
$f=$_POST["dfatherlastname"];
$g=$_POST["dmotherfirstname"];
$h=$_POST["dmotherlastname"];
$w=$_POST["dvillage"];
$z=$_POST["dcell"];
$u=$_POST["dsector"];
}
$insert=mysql_query("insert into defendant(dfirstname,dlastname,demail,dfatherfirstname,dfatherlastname,dmotherfirstname,dmotherlastname,dvillage,dcell,dsector)values('$x', '$a','$b','$e','$f','$g','$h','$w','$z','$u')")or die(mysql_error());
if($insert==true)
{
include("displaydefendant.php");
}
mysql_close();
?>
