<a href="printvillagereport.php" target="_blank"><h2>print report</h2></a>
<?php
mysql_connect("localhost","root");
mysql_select_db('clime');
echo"<link rel='stylesheet' type='text/css' href='v.css'>";
echo"<body bgcolor='WHITE'  background='images/carpet2.jpg'>";
if(isset($_POST['search']))
{
$a=$_POST['claimdate1'];
$b=$_POST['claimdate4'];
$c=$_POST['claimtype'];
}
$select=mysql_query(" select claim.claimdate,claim.claimtype,plaintiff.pfirstname,plaintiff.plastname,plaintiff.pfatherfirstname,plaintiff.pfatherlastname,plaintiff.pmotherfirstname,plaintiff.pmotherlastname,plaintiff.pvillage,plaintiff.pcell,plaintiff.psector,defendant.dfirstname,defendant.dlastname,defendant.dmotherfirstname,defendant.dmotherlastname,defendant.dfatherfirstname,defendant.dfatherlastname,defendant.dvillage,defendant.dcell,defendant.dsector,decition.decdescription,decition.deccomment,decition.decreaddate,decition.decdeliverdorgan
from plaintiff
join claim
on
plaintiff.pid=claim.pid
join
defendant
on
defendant.did=claim.did
join
decition
on
claim.claimid=decition.claimid where claim.claimdate between '$a' and '$b' and claim.claimtype='$c'");

echo"<table border='1' bgcolor='#CCFFFF'>";
echo"<tr><td>claimdate</td><td>claimtype</td><td>pfirstname</td><td>plastname</td><td>pfatherfirstname</td><td>pfatherlastname</td><td>pmotherfirstname
</td><td>pmotherlastname</td><td>pvillage</td><td>pcell</td><td>psector</td><td>dfirstname</td><td>dlastname</td><td>dmotherfirstname</td><td>dmotherlastname</td><td>dfatherfirstname</td><td>dfatherlastname</td><td>dvillage</td><td>dcell</td><td>dsector</td><td>decdescription</td><td>deccomment</td><td>decreaddate</td><td>decdeliverdorgan</td></tr>"; 
while($row=mysql_fetch_array($select))
{
echo"<tr>";
echo"<td>".$row['claimdate']."</td>";
echo"<td>".$row['claimtype']."</td>";
echo"<td>".$row['pfirstname']."</td>";
echo"<td>".$row['plastname']."</td>";
echo"<td>".$row['pfatherfirstname']."</td>";
echo"<td>".$row['pfatherlastname']."</td>";
echo"<td>".$row['pmotherfirstname']."</td>";
echo"<td>".$row['pmotherlastname']."</td>";
echo"<td>".$row['pvillage']."</td>";
echo"<td>".$row['pcell']."</td>";
echo"<td>".$row['psector']."</td>";
echo"<td>".$row['dfirstname']."</td>";
echo"<td>".$row['dlastname']."</td>";
echo"<td>".$row['dmotherfirstname']."</td>";
echo"<td>".$row['dmotherlastname']."</td>";
echo"<td>".$row['dfatherfirstname']."</td>";
echo"<td>".$row['dfatherlastname']."</td>";
echo"<td>".$row['dvillage']."</td>";
echo"<td>".$row['dcell']."</td>";
echo"<td>".$row['dsector']."</td>";
echo"<td>".$row['decdescription']."</td>";
echo"<td>".$row['deccomment']."</td>";
echo"<td>".$row['decreaddate']."</td>";
echo"<td>".$row['decdeliverdorgan']."</td>";
echo"</tr>";
}
echo'</center></table>';
echo"</body>";
?>