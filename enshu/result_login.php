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
	<style type="text/css">
	body{ background-color:#7FFFD4; }
	</style>
</head>
<body>

<?php	
try
{

require_once('common.php');
require_once('result_common.php');

$post=sanitize($_POST);
$ans1 = $post['ans1'];
$ans2 = $post['ans2'];
$ans3 = $post['ans3'];
$ans4 = $post['ans4'];

if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
	$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
	$user='mochiken2015';
	$password='eX39jT2q';
} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
	$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
	$user='root';
	$password='root';
}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
  $dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
  $user='mochi-lab';
  $password='mochi0402';
}
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
// $sql='INSERT INTO enshu (memberid) VALUES (?)';
$sql='UPDATE enshu SET ans1=:ans1,ans2=:ans2,ans3=:ans3,ans4=:ans4 WHERE memberid=:user_id';
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(':ans1',$ans1, PDO::PARAM_STR);
	$stmt->bindParam(':ans2',$ans2, PDO::PARAM_STR);
	$stmt->bindParam(':ans3',$ans3, PDO::PARAM_STR);
	$stmt->bindParam(':ans4',$ans4, PDO::PARAM_STR);
	$stmt->bindParam(':user_id',$user_id, PDO::PARAM_STR);
	// $data[]=$ans1;
	// $data[]=$ans2;
	// $data[]=$ans3;
	// $data[]=$ans4;
	 $data[]=$user_id;
	$stmt->execute();
	$dbh=null;

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
	print '<p>アンケートのご協力ありがとうございました。</p>';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<br>
	<p><u>※ブラウザの戻るボタンは使用しないでください。</u></p>
	<p><u>※指示があるまで、この画面のまま操作しないでください。</u></p>

<br><br>
<p>解説ページ用のパスワードを入力してください。</p>
<br />
<form method="post" action="result_login_check.php">
解説ページのパスワード<br />
<input type="text" name="result_pass" >
<input type="submit" value="OK">
</form>
</body>
</html>