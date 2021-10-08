
<html>
<head><title> report</title>

<link rel="stylesheet" href="coda-slider.css" type="text/css" charset="utf-8" />
</head>
<body id="d">
<?php
mysql_connect("localhost","root");
mysql_select_db('clime');

echo"<link rel='stylesheet' type='text/css' href='v.css'>";
$select1=mysql_query('select claim.claimdate,claim.claimtype,plaintiff.pfirstname,plaintiff.plastname,plaintiff.pfatherfirstname,plaintiff.pfatherlastname,plaintiff.pmotherfirstname,plaintiff.pmotherlastname,plaintiff.pvillage,plaintiff.pcell,plaintiff.psector,defendant.dfirstname,defendant.dlastname,defendant.dmotherfirstname,defendant.dmotherlastname,defendant.dfatherfirstname,defendant.dfatherlastname,defendant.dvillage,defendant.dcell,defendant.dsector,decition.decdescription,decition.deccomment,decition.decreaddate,decition.decdeliverdorgan
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
claim.claimid=decition.claimid where decition.decid in(select decition.decid from decition 
join
user
on user.userid=decition.userid where user.categories="cell president")');
echo'<h2 style="background-color:margenta" ><center><b><i><MARQUEE behavior="alternate" bgcolor="#CC9900">REPORT OF ONLINE CLAIM FILLING SYSTEM        </MARQUEE></i></b></h2></center>';
echo"<center>
<form method='post' action='displaycellreport.php' >
<table width='149' bgcolor='#CCFFCC'>
<tr><td>CLAIM DATE<td><input type='text' name='claimdate1' required='required'/></td><td>CLAIM DATE</td><td><input type='text' name='claimdate4' required='required'/></td>
<tr><td>CLAIM TYPE</td><td><input type='text' name='claimtype' required='required'/></td>
<td><input type='submit' name='search' value='SEARCH'/></td></tr>
</table>
</form>
</center>";
echo"<table border='1' width='100' height='150'background='images/back1.jpg'>";
echo"<tr><td>claimdate</td><td>claimtype</td><td>pfirstname</td><td>plastname</td><td>pfatherfirstname</td><td>pfatherlastname</td><td>pmotherfirstname
</td><td>pmotherlastname</td><td>pvillage</td><td>pcell</td><td>psector</td><td>dfirstname</td><td>dlastname</td><td>dmotherfirstname</td><td>dmotherlastname</td><td>dfatherfirstname</td><td>dfatherlastname</td><td>dvillage</td><td>dcell</td><td>dsector</td><td>decdescription</td><td>deccomment</td><td>decreaddate</td><td>decdeliverdorgan</td></tr>"; 
while($row=mysql_fetch_array($select1))
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
</html>
