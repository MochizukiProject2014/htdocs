<?php
header("Content-Type:text/html; charset=UTF-8");
try
{

require_once('common.php');

$post=sanitize($_POST);
$name=$post['name'];
$pass=$post['pass'];
$newname=$post['newname'];

$pass=md5($pass);

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

$sql='SELECT id,name FROM members WHERE name=? AND password=?';
$stmt=$dbh->prepare($sql);
$data[]=$name;
$data[]=$pass;
$stmt->execute($data);
$rec=$stmt->fetch(PDO::FETCH_ASSOC);

$sql='SELECT name FROM members WHERE name=?';
$stmt=$dbh->prepare($sql);
$data1[]=$newname;
$stmt->execute($data1);

$rec1=$stmt->fetch(PDO::FETCH_ASSOC);

$dbh=null;

if($rec==false)
{
	print '今までのユーザー名かパスワードが間違っています。<br />';
	print '<a href="login.html"> 戻る</a>';
}
else if($newname=='')
{
	print '新しいユーザー名が入力されていません。<br />';
}
else if($rec1==true)
{
	print 'そのユーザー名は既に他ユーザーが使っています。<br />';
}
else{
	print '<form method="post" action="rename_done.php">';
	print '<input type="hidden" name="name" value="'.$name.'">';
	print '<input type="hidden" name="pass" value="'.$pass.'">';
	print '<input type="hidden" name="newname" value="'.$newname.'">';
	print 'ユーザー名を「'.$newname.'」に変更しますか？<br><br>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

}
catch(Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

