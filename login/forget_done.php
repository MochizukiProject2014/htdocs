<?php header("Content-Type:text/html; charset=UTF-8");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>怪盗C</title>
</head>
<body>

<?php
try
{

require_once('common.php');

$post=sanitize($_POST);
$forget_name=$post['name'];
$forget_newpass=$post['pass'];
$forget_secret=$post['secret'];
$forget_secret_answer=$post['secret_answer'];

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

$sql='UPDATE members SET password=? WHERE name=?'; 
$stmt=$dbh->prepare($sql);
$data[]=$forget_newpass;
$data[]=$forget_name;
$stmt->execute($data);

$dbh=null;

print 'パスワードを再設定しました。<br />';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<a href="login.html"> 戻る</a>

</body>
</html>