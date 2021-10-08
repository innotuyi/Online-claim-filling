<h2>VILLAGE DISPLAY</h2>
<?php
mysql_connect("localhost","root","");
mysql_select_db("clime");
$sele="select*from village";
$select=mysql_query("$sele");
echo"<body bgcolor='#009900'  background='images/carpet2.jpg'>";
echo"<center>";
echo'<table border="1" bgcolor="#CCCCFF">';
echo"<tr><th>villageid</th><th>village Name</th><th>Delete</th><th>Update</th></tr>";
while($row=mysql_fetch_array($select))
{
echo"<tr>";
echo"<td>".$row['vid']."</td>";
echo"<td>".$row['vname']."</td>";
echo"<td><a href='deletevillage.php?dele=".$row['vid']."'>Delete</a></td>";
echo"<td><a href='update_village_form.php?a=".$row['vid']." &n=".$row['vname']."'>Update</a></td>";
echo"</tr>";
}
echo"</table>";
echo"<center>";
echo"<body>";
?>
