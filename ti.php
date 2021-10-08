<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{

$a=$_POST["claimtype"];
$z=$_POST["claimdetail"];
$b=$_POST["claimdate"];
$t=$_POST["claimpleaddate"];
$c=$_POST["pid"];
$de=$_POST["did"];
$e=$_POST["cid"];
$f=$_POST["vid"];
$g=$_POST["sid"];
$h=$_POST["disid"];
$k=$_POST["userid"];
}
$insert=mysql_query("insert into claim(claimtype,claimdetail,claimdate,claimpleaddate,pid,did,cid,vid,sid,disid,userid)values('$a','$z', '$b','$t','$c','de','$e','$f','$g','$h' ,'$k')")or die(mysql_error());
if($insert==true)
{
include("displaydecition.php");
}
mysql_close();
?>
