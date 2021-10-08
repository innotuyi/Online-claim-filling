
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
<meta name="keywords" content="grunge mini, free css , free theme, web design, website , CSS, HTML" />
<meta name="description" content="Grunge Mini, free CSS  by .com and feel free to use this system." />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="coda-slider.css" type="text/css" charset="utf-8" />
</head>
<body>
	

    <div id="_wrapper">
    	
        <div id="header">
            
            <h1>ONLINE CLIME FILLING</h1>
            
            <div id="menu">
                <ul class="navigation">
                    <li><a href="index.php" class="selected">Home<span class="ui_icon home"></span></a></li>
                    <li><a href="contactus.php">contactus<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="aboutus.php">about us<span class="ui_icon services"></span></a></li>
                    <li><a href="#clime">crime person<span class="ui_icon gallery"></span></a></li>
					<li><a href="gallery.php">gallery<span class="ui_icon gallery"></span></a></li>
                    <li><a href="login.php">admin<span  class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
         
        <div id="content">
       
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clime")or die(mysql_error());
?>
<table border="0"bgcolor=green>

<form name="description" action="insertdecition.php" method="POST"/>
<tr bgcolor="#CCCC99" bordercolor="#660066"><h1 style=""><td width="191" height="49">decision form</h1><td width="154"></td></tr>

<tr><td>decision description:</td><td><input type="text" name="decdescription" size="50" maxlength="1000" width="100"/></td></tr>
<tr><td>decision read date:</td><td><input type="text" name="decreaddate"></td></tr>
<tr><td>decision comment:</td><td><input type="text" name="deccomment"></td></tr>
<tr><td>decision delivered organ:</td><td><input type="text" name="decdeliverdorgan" /></td></tr>
<td>claim id:<select name="disid"/><p>
<?php
$pro=mysql_query("select * from  claim");
while($row=mysql_fetch_array($pro))
{
echo"<option value='".$row['claimid']."'>".$row['claimtype']."</option>";
}
?>
</select><br></p>
<tr><td><input type="submit" name="send"  value="submit"/></td></tr>

</form>
</div>


                  <div id="footer"> &copy Right All Reserved 2016 by tizzo</div>
      
                  
</body>
</html>