
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>claim</title>

</head>
<body background="images/back1.jpg">
	

    
    <center>
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
?>

<table border="0" bgcolor="#FFFFFF">
<form name="claim" action="claiminsert.php" method="POST" />
<tr><td>claim form</td></tr>
<tr><td>type of claim</td><td><input type="text" name="claimtype"/></tr>
<tr><td>detail of claim</td><td><textarea name="claimdetail"></textarea></td></tr>
<tr><td>the claim date</td><td> <input type="date" name="claimdate"  placeholder="yyyy-mm-dd" />
<tr><td>the claim plead date</td><td> <input type="date" name="claimpleaddate"  placeholder="yyyy-mm-dd"/></td></tr>

<tr><td>plaintiff id</td><td><select name="pid"/><br>
<?php
$pro=mysql_query("select * from  plaintiff");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['pid']."'>".$row['pfirstname']."          ".$row['plastname']."</option>";
}
?>
</select><br></td></tr>
<tr><td>defendant id</td><td><select name="did"/><p>
<?php
$pro=mysql_query("select * from  defendant");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['did']."'>".$row['dfirstname']."          ".$row['dlastname']."</option>";
}
?>
</select><br></td></tr>

<tr><td>cell id<select name="cid"/>
<?php
$pro=mysql_query("select * from  cell");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['cid']."'>".$row['cname']."</option>";
}
?>
</select><br></td></tr>
<tr><td>village id<select name="vid"/>
<?php
$pro=mysql_query("select * from  village");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['vid']."'>".$row['vname']."</option>";
}
?>
</select><br></td></tr>
<tr><td>sector id</td><td><select name="sid"/><?php
$pro=mysql_query("select * from  sector");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['sid']."'>".$row['sname']."</option>";
}
?>
</select><br></td></tr>
</tr><td>district id</td><td><select name="disid"/><p>
<?php
$pro=mysql_query("select * from  district");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['disid']."'>".$row['dname']."</option>";
}
?>
</select><br></p>
</td></tr>
<tr><td>user id</td><td><select name="userid"/>
<?php
$pro=mysql_query("select * from  user");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['userid']."'>".$row['firstname']."          ".$row['lastname']."</option>";
}
?>
</select><br></td></tr>

<tr><td><input type="submit" name="submit" value="send"/></td></tr>
</center>
</form></table>
                  
</body>
</html>

                  
      

