<?php
mysql_connect("127.0.0.1","root");
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$a=$_POST['vid'];
$n=$_POST['vname'];
$update="update village set vid='$a',vname='$n' where vid='$a'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
include("displayvillage.php");
}
?>