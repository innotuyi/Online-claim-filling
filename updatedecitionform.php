<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<center>";
echo"<table border='0' bgcolor='#CCCCCC'>";
echo"<tr><td><p>UPDATE DECITION</p></td></tr>";
echo"<tr><td><form  method='POST' action='updatedecition.php'>";
echo"<tr><td> DECITOIN ID:</td><td><input type='text' name='decid' readonly='readonly' value='".$_GET['x']."'/></td></tr>";
echo"<tr><td> DESCRIPTION:</td><td><input type='text' name='decdescription' readonly='readonly' value='".$_GET['a']."'/></td></tr>";
echo"<tr><td>readdate:</td><td><input type='text' name='decreaddate' value='".$_GET['bu']."'/></td></tr>";
echo"<tr><td>comment:</td><td><input type='text' name='deccomment' readonly='readonly' value='".$_GET['c']."'/></td></tr>";
echo"<tr><td>deliverdorgan:</td><td><input type='text' name='decdeliverdorgan'  value='".$_GET['d']."'/></td></tr>";
echo"<tr><td>claimid:</td><td><input type='text' name='claimid'  value='".$_GET['e']."'/></td></tr>";
echo"<tr><td>USERID:</td><td><input type='text' name='userid'  value='".$_GET['ino']."'/></td></tr>";
echo"<tr><td><input type='submit' name='update' value='update'/></td></tr>";

echo"</form>";
echo"</table>";
echo"</center>";
?>