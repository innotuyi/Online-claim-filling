<h2>DEFENDANT DISPLAY</h2>
<?php
echo"<center>";
echo"<body background='images/carpet2.jpg'>";
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from defendant")or die(mysql_error());

echo"<table border='1' bgcolor='#FFFFFF'>";
echo"<tr><th>did</th><th>dfistname</th><th>dlastname</th><th>demail</th><th>dfatherfirstname</th><th>dfatherlastname</th><th>dmotherfisrtname</th><th>dmotherlastname</th><th>dvillage</th><th>dcell</th><th>dsector</th></tr>";
while($row=mysql_fetch_array($sel))
{
echo"<tr>";
echo"<td>".$row['did']."</td>";
echo"<td>".$row['dfirstname']."</td>";
echo"<td>".$row['dlastname']."</td>";
echo"<td>".$row['demail']."</td>";
echo"<td>".$row['dfatherfirstname']."</td>";
echo"<td>".$row['dfatherlastname']."</td>";
echo"<td>".$row['dmotherfirstname']."</td>";
echo"<td>".$row['dmotherlastname']."</td>";
echo"<td>".$row['dvillage']."</td>";
echo"<td>".$row['dcell']."</td>";
echo"<td>".$row['dsector']."</td>";

echo"</tr>";
}
echo"</table>";
echo"</center>";
echo"<body>";

?>
