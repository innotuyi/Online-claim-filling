<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{

$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["age"];
$d=$_POST["sex"];
$e=$_POST["categories"];
$f=$_POST["username"];
$g=$_POST["password"];
}
$insert=mysql_query("insert into user(firstname,lastname,age,sex,categories,username,password)values('$a', '$b','$c','$d','$e','$f','$g')")or die(mysql_error());
if($insert==true)
{
include("displayuser.php");
}
mysql_close();
?>
