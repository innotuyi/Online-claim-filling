<h2>DISTRICT DISPLAY</h2>
<?php
echo"<center>";
echo"<body bgcolor='margenta'  background='images/carpet2.jpg'>";
mysql_connect("localhost","root" ,"")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from district");
echo"<table border='1' height='50px' width='50px' bgcolor='#FFFFFF'>";
echo"<tr height='50px'><th>disid</th><th>dname</th><th>delete</th><th>delete</th><tr>";
while($row=mysql_fetch_array($sel))
{
echo"<tr height='50px' >";
echo"<td>".$row['disid']."</td>";
echo"<td>".$row['dname']."</td>";
echo"<td><a href='districtdelete.php?dele=".$row['disid']."'>delete</a></td>";
echo"<td><a href='updatedistrictform.php?a=".$row['disid']." &n=".$row['dname']."'>Update</a></td>";

echo"</tr>";
}
echo"</table>";
echo"<center>";

?>

	
