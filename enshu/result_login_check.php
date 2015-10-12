<?php
header("Content-Type:text/html; charset=UTF-8");

require_once('common.php');
$post=sanitize($_POST);
$result_pass=$post['result_pass'];

if($result_pass=='556719')
{
	header('Location:result.php');
}
else
{
	print 'パスワードが間違っています。<br><br>';
	print '<a href="result_login.php">パスワード入力画面へ</a>';
}


?>