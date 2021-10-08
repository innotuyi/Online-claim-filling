<table border="5" bgcolor="white"><tr bgcolor="#33456;"><th>id</th><th>passport</th><th>names</th> 
<th>nationality</th><th>date</th><th>month</th><th>year</th><th>idnumber</th><th>address<th>age</th><th>sex</th>
<th>typeofcrime</th><th>crimelocation</th>
</tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("onlinecrime1");

$user=mysql_query("select * from personregister");
while($rows=mysql_fetch_array($user))
{
	$id=$rows['id'];
	$firstname=$rows['firstname'];
?>
	<tr bgcolor="grey" style="color:white;">
	<td> <? echo $rows['id'] ?></td>
	<td><img src="imageS/<? echo $rows['passport'] ?>" width="50" height="30"></td>
	<td> <? echo $rows['firstname'] .'&nbsp'.$rows['lastname'] ?></td>
                     <td> <? echo $rows['nationality'] ?></td>
                     <td> <? echo $rows['date'] ?></td>
                      <td> <? echo $rows['month'] ?></td>
                      <td><? echo $rows['year'] ?></td>
                      <td><? echo $rows['idnumber'] ?></td>
                       <td><? echo $rows['address'] ?></td>
                       <td><? echo $rows['age'] ?></td>
                        <td> <? echo $rows['sex'] ?></td>
                         <td><? echo $rows['typeofcrime'] ?></td>
                         <td><? echo $rows['crimelocation'] ?></td>   
<?php
}
?>
</table>