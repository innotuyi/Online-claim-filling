<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<p>update defendant</p>";
echo"<form  method='POST' action='updatedefendant.php'>";
echo"defendant id :<input type='text' name='did' size='30' readonly='readonly' value='".$GET['i']."'/></br>";
echo"defendant firstname:<input type='text' name='dfirstname' size='30' value='".$_GET['x']."'/></br>";
echo"defendant lastname:<input type='text' name='dlastname' size='30' value='".$_GET['a']."'/></br>";
echo"defendant email:<input type='text' name='demail' size='30' value='".$_GET['b']."'/></br>";
echo"defendant username:<input type='text' name='dusername' size='30' value='".$_GET['c']."'/></br>";
echo"defendant password:<input type='text' name='dpassword' size='30' value='".$_GET['d']."'/></br>";
echo"defendant fatherfirstname:<input type='text' name='dfatherfirstname' size='30' value='".$_GET['e']."'/></br>";
echo"defendant fatherlastname:<input type='text' name='dfatherlastname' size='30' value='".$_GET['f']."'/></br>";
echo"defendant motherfirstname:<input type='text' name='dmotherfirstname' size='30' value='".$_GET['g']."'/></br>";
echo"defendant motherlastname:<input type='text' name='dmotherlastname' size='30' value='".$_GET['h']."'/></br>";
echo"<input type='submit' name='submit' value='change'/>
</form>";
?>