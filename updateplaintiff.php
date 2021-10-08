<?php
mysql_connect("127.0.0.1","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$a=$_POST['pid'];
$b=$_POST['pfirstname'];
$c=$_POST['plastname'];
$d=$_POST['pemail'];
$g=$_POST['pfatherfirstname'];
$h=$_POST['pfatherlastname'];
$k=$_POST['pmotherfirstname'];
$l=$_POST['pmotherlastname'];
$m=$_POST["v"];
$n=$_POST["cell"];
$o=$_POST["sector"];
$update="update plaintiff set pfirstname='$b',plastname='$c',pemail='$d',pfatherfirstname='$g' ,pfatherlastname='$h',pmotherfirstname='$k',pmotherlastname='$l',pvillage='$m',pcell='$n',psector='$o' where pid='$a'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
echo '<script type="text/javascript">alert("You Need to update This record");window.location=\'displayplaintiff.php\';</script>';
include("displayplaintiff.php");
}
?>