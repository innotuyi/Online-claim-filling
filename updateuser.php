<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
if(isset($_POST['update']))
{
$a=$_POST['userid'];
$b=$_POST['firstname'];
$c=$_POST['lastname'];
$d=$_POST['age'];
$e=$_POST['sex'];
$f=$_POST['categories'];
$g=$_POST['username'];
$h=$_POST['password'];
$update="update user set userid='$a', firstname='$b' ,lastname='$c',age='$d',sex='$e',categories='$f',username='$g' ,password='$h' where userid='$a'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
include("displayuser.php");
}
?>