<h2>SECTOR DISPLAY</h2>
<?php
echo"<center>";
echo"<body   background='images/carpet2.jpg'>";
mysql_connect("localhost","root" ,"")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from sector");
echo"<table border='1' cellpadding='10' cellspacing='1' width='80pt' height='100pt'bgcolor='#FFFFFF'>";
echo"<tr><th>sid</th><th>sname</th><th>delete</th><th>update</th><tr>";
while($row=mysql_fetch_array($sel))
{
echo"<tr>";
echo"<td>".$row['sid']."</td>";
echo"<td>".$row['sname']."</td>";
echo"<td><a href='sectordelete.php?dele=".$row['sid']."'>delete</a></td>";
echo"<td><a href='updatesectorform.php?a=".$row['sid']." &n=".$row['sname']."'>Update</a></td>";
echo"</tr>";
}
echo"</table>";
echo"</center>";

?>

	
