<h2>CLAIM DISPLAY</h2>
<?php
mysql_connect("localhost","root" ,"")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from cell");
echo"<body background='images/carpet2.jpg' >";
echo"<center>";
echo"<table border='1' bgcolor='#FFFFFF'>";
echo"<tr><th>cid</th><th>cname</th><th>delete</th><th>update</th><tr>";
while($row=mysql_fetch_array($sel))
{
echo"<tr>";
echo"<td>".$row['cid']."</td>";
echo"<td>".$row['cname']."</td>";
echo"<td><a href='celldelete.php?dele=".$row['cid']."'>delete</a></td>";
echo"<td><a href='updatecellform.php?a=".$row['cid']." &n=".$row['cname']."'>Update</a></td>";
echo"</tr>";
}
echo"</table>";
echo"</center>";
echo"</body>";
?>
