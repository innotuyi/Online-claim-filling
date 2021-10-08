<?php
mysql_connect("127.0.0.1","root");
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$a=$_POST['cid'];
$n=$_POST['cname'];
$update="update cell set cid='$a',cname='$n' where cid='$a'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
include("displaycell.php");
}
?>