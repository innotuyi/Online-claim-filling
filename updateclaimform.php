<?php
mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
echo"<body bgcolor='#333300'>";
echo"<table border='0'>";
echo"<tr><td>update claim</td></tr>";
echo"<form  method='POST' action='updateclaim.php'>";
echo"<tr><td>claim id</td> <td><input type='text' name='claimid' size='30' readonly='readonly' value='".$_GET['x']."'/></td></tr>";
echo"<tr><td>name of claim</td><td><input type='text' name='claimtype' size='30' value='".$_GET['a']."'/></td></tr>";
echo"<tr><td>name of claim</td><td><input type='text' name='claimdetail' size='30' value='".$_GET['z']."'/></td></tr>";
echo"<tr><td>the claim date</td><td><input type='text' name='claimdate' size='30' value='".$_GET['b']."'/></td></tr>";
echo"<tr><td>the claim plead date date</td><td><input type='text' name='claimpleaddate' size='30' value='".$_GET['t']."'/></td></tr>";
echo"<tr><td>plaintiff id</td><td><input type='text'  name='pid' size='30' value='".$_GET['c']."'/></td></tr>";
echo"<tr><td>defendant id</td><td><input type='text' name='did' size='30' value='".$_GET['de']."'/></td></tr>";
echo"<tr><td>cell id</td><td><input type='text' name='cid' size='30' value='".$_GET['e']."'/></td></tr>";
echo"<tr><td>village id</td><td><input type='text' name='vid' size='30' value='".$_GET['f']."'/></td></tr>";
echo"<tr><td>sector id</td><td><input type='text' name='sid' size='30' value='".$_GET['g']."'/></td></tr>";
echo"<tr><td>district id</td><td><input type='text' name='disid' size='30' value='".$_GET['h']."'/></td></tr>";
echo"<tr><td>user id</td><td><input type='text' name='userid' size='30' value='".$_GET['k']."'/></td></tr>";
echo"<tr><td><input type='submit' name='update' value='change'/></td></tr>
</form>";
echo"<body>";
?>