<?php
session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])==true)
{
	setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
header("Content-Type:text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>怪盗C</title>
</head>
<body>

ログアウトしました。<br />
<br />
<a href="login.html">ログイン画面へ</a>

</body>
</html>