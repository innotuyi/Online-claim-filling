<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CLAIM DISPLAY</title>
<h2>CLAIM DISPLAY</h2>
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from claim")or die(mysql_error());
echo"<body background='images/carpet2.jpg'>";
echo"<center>";
echo"<table border='1' bgcolor='#FFFFFF'>";
echo"<tr><th>claimid</th><th>claimtype</th><th>claimdetail</th><th>claimdate</th><th>claimpleaddate</th><th>pid</th><th>did</th><th>cid</th><th>vid</th><th>sid</th><th>disid</th><th>userid</th><th>delete</th><th>update</th><tr>";
while($row=mysql_fetch_array($sel))
{
echo"<tr>";
echo"<td>".$row['claimid']."</td>";
echo"<td>".$row['claimtype']."</td>";
echo"<td>".$row['claimdetail']."</td>";
echo"<td>".$row['claimdate']."</td>";
echo"<td>".$row['claimpleaddate']."</td>";
echo"<td>".$row['pid']."</td>";
echo"<td>".$row['did']."</td>";
echo"<td>".$row['cid']."</td>";
echo"<td>".$row['vid']."</td>";
echo"<td>".$row['sid']."</td>";
echo"<td>".$row['disid']."</td>";
echo"<td>".$row['userid']."</td>";
echo"<td><a href='deleteclaim.php?dele=".$row['claimid']."'>delete</a></td>";
echo"<td><a href='updateclaimform.php?&x=".$row['claimid']."&a=".$row['claimtype']."&z=".$row['claimdetail']."&b=".$row['claimdate']."&t=".$row['claimpleaddate']."&c=".$row['pid']."&de=".$row['did']."&e=".$row['cid']."&f=".$row['vid']."&g=".$row['sid']."&h=".$row['disid']."&k=".$row['userid']."'>update</a></td>";

echo"</tr>";
}
echo"</table>";
echo"</center>";
echo"</body>";
?>
 
</body>

</html>
