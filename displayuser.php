<h3> USER DISPLAY</h3>
<?php
echo"<center>";
echo"<body bgcolor='margenta'>";
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
$sel=mysql_query("select* from user");
echo"<table border='1' width='100px'>";
echo"<tr><th>fistname</th><th>lastname</th><th>age</th><th>sex</th><th>categories</th><th>username</th><th>password</th><th>delete</th><th>update</th></tr>";
while($row=mysql_fetch_array($sel))
{
echo"<tr>";
echo"<td>".$row['firstname']."</td>";
echo"<td>".$row['lastname']."</td>";
echo"<td>".$row['age']."</td>";
echo"<td>".$row['sex']."</td>";
echo"<td>".$row['categories']."</td>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['password']."</td>";
echo"<td><a href='deleteuser.php?dele=".$row['userid']."'>delete</a></td>";
echo"<td><a href='updateuserform.php?a=".$row['userid']."&b=".$row['firstname']."&c=".$row['lastname']."&d=".$row['age']."&e=".$row['sex']."&f=".$row['categories']."&g=".$row['username']."&h=".$row['password']."'>Update</a></td>";
echo"</tr>";
}
echo"</table>";
echo"</center>";
echo"</body>";
?>