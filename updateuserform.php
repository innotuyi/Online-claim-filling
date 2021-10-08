<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<p>update user</p>";
echo"<form  method='POST' action='updateuser.php'>";
echo" duser id:</td><td><input type='text' name='userid' readonly='readonly' value='".$_GET['a']."'/></br>";
echo"dfirstname:</td><td><input type='text' name='firstname'  value='".$_GET['b']."'/></br>";
echo"dlastname:</td><td><input type='text' name='lastname'  value='".$_GET['c']."'/></br>";
echo"age:</td><td><input type='text' name='age'  value='".$_GET['d']."'/></br>";
echo"sex:</td><td><input type='text' name='sex'  value='".$_GET['e']."'/></br>";
echo"categories:</td><td><input type='text' name='categories'  value='".$_GET['f']."'/></br>";
echo"username:</td><td><input type='text' name='username'  value='".$_GET['g']."'/></br>";
echo"password:</td><td><input type='text' name='password'  value='".$_GET['h']."'/></br>";
echo"<input type='submit' name='update' value='change'/></td></tr>";
?>