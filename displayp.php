<h2>PLAINTIFF DISPLAY</h2>
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from plaintiff");
echo"<body background='images/carpet2.jpg'>";
echo"<table border='1'  bgcolor='#999999'>";
echo"<tr><th>pid</th><th>fistname</th><th>lastname</th><th>email</th><th>father firstname</th><th>father lastname</th><th>mother fisrtname</th><th>mother lastname</th><th>village</th><th>cell</th><th>sector</th></tr>";
while($row=mysql_fetch_array($sel))
{


echo"<tr>";
echo"<td>".$row['pid']."</td>";
echo"<td>".$row['pfirstname']."</td>";
echo"<td>".$row['plastname']."</td>";
echo"<td>".$row['pemail']."</td>";
echo"<td>".$row['pfatherfirstname']."</td>";
echo"<td>".$row['pfatherlastname']."</td>";
echo"<td>".$row['pmotherfirstname']."</td>";
echo"<td>".$row['pmotherlastname']."</td>";
echo"<td>".$row['pvillage']."</td>";
echo"<td>".$row['pcell']."</td>";
echo"<td>".$row['psector']."</td>";
echo"</tr>";
}
echo"</table>";

?>

