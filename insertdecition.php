<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST["send"]))
{
$a=$_POST["decdescription"];
$b=$_POST["decreaddate"];
$c=$_POST["deccomment"];
$d=$_POST["decdeliverdorgan"];
$e=$_POST["disid"];
$ee=$_POST["userid"];
}
$insert=mysql_query("insert into decition(decdescription,decreaddate,deccomment,decdeliverdorgan,claimid,userid)values('$a', '$b','$c','$d','$e','$ee')")or die(mysql_error());
if($insert==true)
{
include("displaydecition.php");
}
mysql_close();
?>
