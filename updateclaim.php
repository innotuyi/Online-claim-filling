<?php
mysql_connect("127.0.0.1","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<body bgcolor='#666600'>";
if(isset($_POST['update']))
{
$x=$_POST['claimid'];
$a=$_POST['claimtype'];
$z=$_POST['claimdetail'];
$b=$_POST['claimdate'];
$t=$_POST['claimpleaddate'];
$c=$_POST['pid'];
$de=$_POST['did'];
$e=$_POST['cid'];
$f=$_POST['vid'];
$g=$_POST['sid'];
$h=$_POST['disid'];
$k=$_POST['userid'];
$update="update claim set claimid='$x', claimtype='$a',claimdetail='$z' ,pid='$b',claimpleaddate='$t',pid='$c' ,did='$de',cid='$e',vid='$f' ,sid='$g',disid='$h',userid='$k' where claimid='$x'";
$updateok=mysql_query($update)or die(mysql_error());
if($updateok==true)
echo '<script type="text/javascript">alert("You Need to update This record");window.location=\'displayclaim.php\';</script>';
include("displayclaim.php");
}
?>