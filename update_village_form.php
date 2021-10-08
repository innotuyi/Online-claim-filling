<?php
mysql_connect("127.0.0.1","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<body bgcolor='#999999'>";
echo"<table border='0'>";
echo"<tr><td>update village form</td></tr>";
echo"<form method='POST' action='updatevillage.php'>";
echo"<tr><td>village id</td><td><input type='text' name='vid' readonly='readonly' value='".$_GET['a']."'/></td></tr>";
echo"<tr><td>Name</td><td><input type='text' name='vname' value='".$_GET['n']."'/></td></tr>";
echo"<tr><td><input type='submit'name='update' value='change'/></td></tr>";
echo"</form>";
?>