<?php
session_start();
session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");
if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="login.html">ログイン画面へ</a>';
	exit();
}
else{
	print $_SESSION['user_name'];
	print'さんログイン中<br />';
	print'<br />';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>怪盗C</title>
</head>
<body>

メンバーが選択されていません。<br />
<a href="admin_top.php">戻る</a>

</body>
</html>