<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VILLAGE CHIEF INTERFACE</title>
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
?>

</head>
<body  background='images/carpet2.jpg'>
<center>
<table border="0" bgcolor="#CCCCCC">

<form name="description" action="insertdecition.php" method="POST"/>
<tr bgcolor= ><h1 style=""><td width="191" height="49">decision form</h1><td width="154"></td></tr>

<tr><td> description</td><td><textarea name="decdescription"></textarea></td></tr>
<tr><td> read date</td><td><input type="text" name="decreaddate"  placeholder="dd-mm-yyyy"  required='required'></td></tr>
<tr><td> comment</td><td><textarea name="deccomment"></textarea></td></tr>
<tr><td>delivered organ</td><td><input type="text" name="decdeliverdorgan"   required='required'/></td></tr>
<tr><td>claim name</td><td><select name="disid"/><p>

<?php
$pro=mysql_query("select * from  claim");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['claimid']."'>".$row['claimtype']."</option>";
}
?>
</select><br></p>
<tr><td>user id</td><td><select name="userid"/><p>
<?php
$pro=mysql_query("select * from  user");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['userid']."'>".$row['firstname']."          ".$row['lastname']."</option>";
}
?>
</select><br></p>
<tr><td><input type="submit" name="send"  value="submit"/></td></tr>
</form>
</table>
<center>
 </body>
</html>