<h2>DECITION DISPLAY</h2>
<?php
mysql_connect("localhost","root" ,"")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from decition")or die(mysql_error());
echo"<body bgcolor='#CCCCFF'  background='images/carpet2.jpg'>";
echo"<center>";
echo"<table border='1' bgcolor='#FFFFFF' >";
echo"<tr><th>decid</th><th>decdescription</th><th>decreaddate</th><th>deccomment</th><th>decdeliveredorgan</th><th>claimid</th><th>userid</th><th>delete</th><th>update</th><tr>";
while($row=mysql_fetch_array($sel))
{
echo"<tr>";
echo"<td>".$row['decid']."</td>";
echo"<td>".$row['decdescription']."</td>";
echo"<td>".$row['decreaddate']."</td>";
echo"<td>".$row['deccomment']."</td>";
echo"<td>".$row['decdeliverdorgan']."</td>";
echo"<td>".$row['claimid']."</td>";
echo"<td>".$row['userid']."</td>";
echo"<td><a href='deletedecition.php?dele=".$row['decid']."'>delete</a></td>";
echo"<td><a href='updatedecitionform.php?x=".$row['decid']."&a=".$row['decdescription']."&b=".$row['decdate']."&c=".$row['deccomment']."&d=".$row['decdeliverdorgan']."&e=".$row['claimid']."&ino=".$row['userid']."'>Update</a></td>";
echo"</tr>";
}
echo"</table>";
echo"</center>";
echo"</body>";
?>