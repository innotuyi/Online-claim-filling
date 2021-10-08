<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<p>update plaintifft</p>";
echo"<form  method='POST' action='updateplaintiff.php'>";
echo"plaintiff id :<input type='text' name='pid' size='30' readonly='readonly' value='".$_GET['a']."'/></br>";
echo"plaintiff firstname:<input type='text' name='pfirstname' size='30' value='".$_GET['b']."'/></br>";
echo"plaintiff lastname:<input type='text' name='plastname' size='30' value='".$_GET['c']."'/></br>";
echo"plaintiff email:<input type='text'  name='pemail' size='30' value='".$_GET['d']."'/></br>";
echo"plaintiff fatherfirstname:<input type='text' name='pfatherfirstname' size='30' value='".$_GET['g']."'/></br>";
echo"plaintiff fatherlastname:<input type='text' name='pfatherlastname' size='30' value='".$_GET['h']."'/></br>";
echo"plaintiff  motherfirstname:<input type='text' name='pmotherfirstname' size='30' value='".$_GET['k']."'/></br>";
echo"plaintiff  motherlastname:<input type='text' name='pmotherlastname' size='30' value='".$_GET['l']."'/></br>";
echo"paintiff village:<input type='text' name='v' size='30' value='".$_GET['m']."'/></br>";
echo"paintiff cell :<input type='text' name='cell' size='30' value='".$_GET['no']."'/></br>";
echo"paintiff sector :<input type='text' name='sector' size='30' value='".$_GET['p']."'/></br>";
echo"<input type='submit' name='update' value='change'/>
</form>";
?>