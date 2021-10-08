<?php
session_start();
$localhost="localhost";
$password="";
$username="root";
$dbname="clime";
$connect=mysql_connect($localhost,$username,$password);
mysql_select_db($dbname,$connect) or die("DATABASE NOT FOUND!");

$user=$_POST['username'];
$pass=$_POST['password'];
$cate=$_POST['categories'];
$result=mysql_query("select*from user where Username='$user' and Password='$pass' and categories='$cate'");
// function for counting number of rows
$count=mysql_num_rows($result);
if($count==1)
{
$row=mysql_fetch_row($result);

$_SESSION['Userid']=$row[0];
$_SESSION['firstname ']=$row[1];
$_SESSION['categories']=$row[5];
$_SESSION['Username']=$row[6];
$_SESSION['Password']=$row[7];

if($row[5]=="village president")
header("location:v.php");
else if($row[5]=="cell president")
header("location:c.html");
else if($row[5]=="sector president")
header("location:s.html");
else if($row[5]=="district president")
header("location:d.html");
}
else {

header("location:index.php?msg=Wrong%20Username%20or%20Password!!!!!" );
}

?>


