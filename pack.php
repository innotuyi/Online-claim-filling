
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VILLAGE CHIEF INTERFACE</title>
<meta name="keywords" content="grunge mini, free css , free theme, web design, website , CSS, HTML" />
<meta name="description" content="Grunge Mini, free CSS  by .com and feel free to use this system." />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="coda-slider.css" type="text/css" charset="utf-8" />



</head>
<body>
	
<div id="slider">
    <div id="_wrapper">
    	
        <div id="header">
            
            <h1>ONLINE CLIME FILLING</h1>
            
            <div id="menu">
                <ul class="navigation">
                    <li><a href="index.php" class="selected">Home<span class="ui_icon home"></span></a></li>
                    <li><a href="contactus.php">contactus<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="aboutus.php">about us<span class="ui_icon services"></span></a></li>
                    <li><a href="#crime">crime person<span class="ui_icon gallery"></span></a></li>
					<li><a href="gallery.php">gallery<span class="ui_icon gallery"></span></a></li>
                    <li><a href="login.php">admin<span  class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
        </div>

        
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
                
                   
                    	<div class="col_400 float_l">
                            
<head></head>
<body bgcolor="#FF9966">
<table border="1">
<form name="claim" action="claiminsert.php" method="POST" />
claim form
<p>type of claim:<input type="text" name="claimtype"/></p>
<p>detail of claim:<input type="text" name="claimdetail"/></p>
<p>the claim date: <input type="date" name="claimdate"/>
<p>the claim plead date: <input type="date" name="claimpleaddate"/>

<p>plaintiff id:<select name="pid"/><br>
<?php
$pro=mysql_query("select * from  plaintiff");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['pid']."'>".$row['pfirstname']."          ".$row['plastname']."</option>";
}
?>
</select><br></p>
<p>defendant id:<select name="did"/><p>
<?php
$pro=mysql_query("select * from  defendant");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['did']."'>".$row['dfirstname']."          ".$row['dlastname']."</option>";
}
?>
</select><br></p>

<p>cell id:<select name="cid"/><p>
<?php
$pro=mysql_query("select * from  cell");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['cid']."'>".$row['cname']."</option>";
}
?>
</select><br></p>
<p>village id:<select name="vid"/><p>
<?php
$pro=mysql_query("select * from  village");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['vid']."'>".$row['vname']."</option>";
}
?>
</select><br></p>
<p>sector id:<select name="sid"/><p>
<?php
$pro=mysql_query("select * from  sector");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['sid']."'>".$row['sname']."</option>";
}
?>
</select><br></p>
<p>district id:<select name="disid"/><p>
<?php
$pro=mysql_query("select * from  district");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['disid']."'>".$row['dname']."</option>";
}
?>
</select><br></p>
<p>user id:<select name="userid"/><p>
<?php
$pro=mysql_query("select * from  user");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['userid']."'>".$row['firstname']."          ".$row['lastname']."</option>";
}
?>
</select><br></p>
</p><tr><td><input type="submit" name="submit"value="send"/></td></tr>
</table>
                    </div>
                    </div>
                    </div>
                    
                  <!-- end of home -->
                    <div id="footer"> &copy Right All Reserved 2016 by tizzo</div>



</body>
</html>

 