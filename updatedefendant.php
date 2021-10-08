<?php
mysql_connect("127.0.0.1","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$a=$_POST['did'];
$b=$_POST['dfirstname'];
$c=$_POST['dlastname'];
$d=$_POST['demail'];
$g=$_POST['dfatherfirstname'];
$h=$_POST['dfatherlastname'];
$k=$_POST['dmotherfirstname'];
$l=$_POST['dmotherlastname'];
$i=$_POST['v'];
$j=$_POST['dcell'];
$o=$_POST['dsector'];
$update="update defendant set dfirstname='$b',dlastname='$c',demail='$d',dfatherfirstname='$g',dfatherlastname='$h',dmotherfirstname='$k',dmotherlastname='$l',dvillage='$i',dcell='$j',dsector='$o' where did='$a'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
include("displaydefendant.php");
}
?>