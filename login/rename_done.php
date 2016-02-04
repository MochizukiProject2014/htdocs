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
$name=$post['name'];
$pass=$post['pass'];
$newname=$post['newname'];


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
//$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh->query('SET NAMES utf8');



$sql='UPDATE members SET name=? WHERE name=?'; 
$stmt=$dbh->prepare($sql);
$data[]=$newname;
$data[]=$name;
$stmt->execute($data);

$dbh=null;

print 'ユーザー名を再設定しました。<br />';


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