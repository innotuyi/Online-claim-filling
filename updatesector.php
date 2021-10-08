<?php
mysql_connect("127.0.0.1","root");
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$a=$_POST['sid'];
$n=$_POST['sname'];
$update="update sector set sid='$a',sname='$n' where sid='$a'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
include("displaysector.php");
}
?>