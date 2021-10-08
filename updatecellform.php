<?php
mysql_connect("127.0.0.1","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());

echo"<body  bgcolor='#339999'>";
echo"<table border='0'>";
echo"<center>";
echo"<tr><td>update cell form</p></td></tr>";
echo"<form method='POST' action='updatecell.php'>";
echo"<tr><td>village id<td><td><input type='text' name='cid' readonly='readonly' value='".$_GET['a']."'/></td></tr>";
    echo"<tr><td> Name<td><td><input type='text' name='cname' value='".$_GET['n']."'/></td></tr>";
echo"<tr><td><input type='submit'name='update' value='change'/>
</form>";
echo"</center>";
echo"<body>";

?>