<?php
header("Content-Type:text/html; charset=UTF-8");
try
{

require_once('common.php');
$post=sanitize($_POST);
$user_name=$post['user_name'];
$user_pass=$post['user_pass'];

$user_pass=md5($user_pass);

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
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT id,name FROM members WHERE name=? AND password=?';
$stmt=$dbh->prepare($sql);
$data[]=$user_name;
$data[]=$user_pass;
$stmt->execute($data);

$dbh=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
if($rec==false)
{
	print '名前かパスワードが間違っています。<br />';
	print '<a href="login.html"> 戻る</a>';
}
else
{
	session_start();
	$_SESSION['login']=1;
	$_SESSION['user_name']=$rec['name'];
	$_SESSION['user_id']=$rec['id'];
	if($_SESSION['user_name'] == 'ganmo')		//管理者ログイン
	{
		header('Location:admin/admin_top.php');
	}
	else 										//一般ユーザーログイン
	{
		header('Location:top.php');
	}
	exit();
}

}
catch(Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>