<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="Hacker_earth.css" rel="stylesheet" type="text/css"/>
</head>

<body id="body">
<h1 id="header">RESUME CREATOR</h1>	
<table id="main_table" >

<form action="Resume_downloader1.php" method="post">
<tr><td>Name:</td><td><input type="text" name="form_name"/></td></tr>
<tr><td>Email:</td><td><input type="email" name="form_email"/></td></tr>
<tr><td>Father's Name:</td><td><input type="text" name="form_fathers_name"/></td></tr>
<tr><td>Programming Languages:</td><td><select name="form_plan">

<option name="def1" value="default">SELECT</option>
<option name="java" value="java">JAVA</option>
<option name="python" value="python">PYTHON</option>
<option name="ruby" value="ruby">RUBY</option>
<option name="php" value="php">PHP</option>
</select></td></tr>
<tr><td>Languages:</td><td><select name="form_lan">
<option name="def2" value="default">SELECT</option>
<option name="english" value="english">ENGLISH</option>
<option name="hindi" value="hindi">HINDI</option>
<option name="spanish" value="spanish">SPANISH</option>
<option name="french" value="french">FRENCH</option>
</select></td></tr>
<tr><td>Address:</td><td><input type="text" name="form_address"/></td></tr>
<tr><td>Mobile No.:</td><td><input type="text" name="form_mob"/></td></tr>
<tr><td>College:</td><td><input type="text" name="form_college"/></td></tr>
<tr><td>Education:</td><td><input type="text" name="form_education"/></td></tr>
<tr><td>Percentage:</td><td><input type="text" name="form_percentage" /></td></tr>
<tr><td>Work Experiance:</td><td><input type="text" name="form_work_experience"/></td></tr>

<tr><td></td><td> <input type="submit" value="SUBMIT"/></td></tr>
</form>
<form action="Enter_name.php" method="post"><tr><td></td><td><p>If already registered retrieve from database</p><br /><input type="submit" value="DOWNLOAD RESUME"/></form></td></tr>
</table>

</body>
</html>
