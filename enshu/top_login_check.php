<?php
header("Content-Type:text/html; charset=UTF-8");
try{
session_start();
require_once('common.php');
$post=sanitize($_POST);
$top_pass=$post['top_pass'];
if($top_pass=='041056'){
	
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

	$sql='SELECT ne27 FROM members WHERE id=?';
	$stmt=$dbh->prepare($sql);
	$data[]=$_SESSION['user_id'];
	$stmt->execute($data);

	$rec=$stmt->fetch(PDO::FETCH_ASSOC);

	if($rec['ne27']=='袖ヶ浦'){
		header('Location:top.php');
	}
	else{
		print 'エラーが発生しました。先生を呼んでください。';
		print '<a href="top_login.php">パスワード入力画面へ</a>';
	}
}
elseif($top_pass=='masterkey'){
	header('Location:top.php');
}
else
{
	print 'パスワードが間違っています。<br><br>';
	print '<a href="top_login.php">パスワード入力画面へ</a>';
}
}catch(Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}


?>