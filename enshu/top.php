<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
session_regenerate_id(true);
require_once('common.php'); 
$name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>演習問題の注意事項</title>
<script type="text/javascript" src="../js/menu.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php	require_once('common.php');	
if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="login.html">ログイン画面へ</a>';
	exit();
}
else{
	print $_SESSION['user_name'];
	print'さん&nbsp;&nbspログイン中&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';
	print '<a href="logout.php">ログアウト</a><br />';
}
?>
<br>
	<p>演習問題はじめてください</p>


<a href="practice.php">演習開始</a><br />


</body>
</html>