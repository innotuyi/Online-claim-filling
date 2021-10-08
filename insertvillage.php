<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST["save"]))
{
$a=$_POST["vname"];
$insert="insert into village(vname) values('$a')";
$insertok=mysql_query($insert);
if($insertok==true)
{

include("displayvillage.php");
}}
?>