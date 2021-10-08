<?php
mysql_connect("127.0.0.1","root");
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$a=$_POST['disid'];
$n=$_POST['dname'];
$update="update district set disid='$a',dname='$n' where disid='$a'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
include("displaydistrict.php");
}
?>