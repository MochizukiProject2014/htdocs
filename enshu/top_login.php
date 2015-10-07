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
<title>怪盗C</title>
	
</head>
<body>

<?php	
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

<p>演習問題ページ用のパスワードを入力してください。</p>
<br />
<form method="post" action="top_login_check.php">
演習問題ページのパスワード<br />
<input type="text" name="top_pass" >
<input type="submit" value="OK">
</form>
</body>
</html>