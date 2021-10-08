<?php
echo"<center>";
echo"<body  bgcolor='#339999'>";;
mysql_connect("127.0.0.1","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<p>update district form</p>";
echo"<form method='POST' action='updatedistrict.php'>";
echo"village id:<input type='text' name='disid' readonly='readonly' value='".$_GET['a']."'/><br>
Name:<input type='text' name='dname' value='".$_GET['n']."'/><br>
<input type='submit'name='update' value='change'/>
</form>";
echo"<center>";
?>