<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$x=$_POST['decid'];
$a=$_POST['decdescription'];
$bu=$_POST['decreaddate'];
$c=$_POST['deccomment'];
$d=$_POST['decdeliverdorgan'];
$e=$_POST['claimid'];
$ino=$_POST['userid'];
$update="update decition set decid='$x',decdescription='$a' ,decreaddate='$bu',deccomment='$c',decdeliverdorgan='$d',claimid='$e',userid='$ino' where decid='$x'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
include("displaydecition.php");
}
?>