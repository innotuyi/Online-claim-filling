<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<table border='0' bgcolor='#CCCCCC'>";
echo"<tr><td>UPDATE DEFENDANT</td></tr>";
echo"<form  method='POST' action='updatedefendant.php'>";
echo"<tr><td> ID</td><td><input type='text' name='did' size='30' readonly='readonly' value='".$_GET['a']."'/></td></tr>";
echo"<tr><td> FIRSTNAME</td><td><input type='text' name='dfirstname' size='30' value='".$_GET['b']."'/></td></tr>";
echo"<tr><td> LASTNAME</td><td><input type='text' name='dlastname' size='30' value='".$_GET['c']."'/></td></tr>";
echo"<tr><td>EMAIL</td><td><input type='text'  name='demail' size='30' value='".$_GET['d']."'/></td></tr>";
echo"<tr><td> FATHERFIRSTNAME</td><td><input type='text' name='dfatherfirstname' size='30' value='".$_GET['g']."'/></td></tr>";
echo"<tr><td> FATHERLASTNAME</td><td><input type='text' name='dfatherlastname' size='30' value='".$_GET['h']."'/></td></tr>";;
echo"<tr><td><tr><td>DEFENDANT MOTHERFIRSTNAME</td><td><input type='text' name='dmotherfirstname' size='30' value='".$_GET['k']."'/></td></tr>";
echo"<tr><td> MOTHERLASTNAME</td><td><input type='text' name='dmotherlastname' size='30' value='".$_GET['l']."'/></td></tr>";
echo"<tr><td>VILLAGE</td><td><input type='text' name='v' size='30' value='".$_GET['m']."'/></td></tr>";
echo"<tr><td> CELL</td><td><input type='text' name='dcell' size='30' value='".$_GET['no']."'/></td></tr>";
echo"<tr><td> SECTOR</td><td><input type='text' name='dsector' size='30' value='".$_GET['p']."'/></td></tr>";
echo"<tr><td><input type='submit' name='update' value='change'/></td></tr>";
echo"</form>";
echo"</table>";
?>