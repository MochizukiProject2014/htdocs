<?php header("Content-Type:text/html; charset=UTF-8");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>怪盗C</title>
</head>
<body>

<?php
require_once('common.php');

$post=sanitize($_POST);
$forget_name=$post['name'];
$forget_secret=$post['secret'];
$forget_secret_answer=$post['secret_answer'];
$forget_newpass=$post['newpass'];

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

$sql='SELECT name FROM members WHERE name=? AND secret=? AND secret_answer=?';
$stmt=$dbh->prepare($sql);
$data[]=$forget_name;
$data[]=$forget_secret;
$data[]=$forget_secret_answer;
$stmt->execute($data);

$dbh=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($rec['name']!=$forget_name){
	print '秘密の質問かその答えが間違っています。<br />';
}

if($forget_name=='')
{
	print '名前が入力されていません。<br />';
}

if($forget_newpass=='')
{
	print '新しいパスワードが入力されていません。<br />';
}

if($forget_secret=='')
{
	print '秘密の質問が選択されていません。<br />';
}
else
{
	print '秘密の質問：';
	switch ($forget_secret) {
		case '1':
			print 'ペットの名前は？';
			break;
		case '2':
			print '母親の旧姓は？';
			break;
		case '3':
			print '嫌いな食べ物は？';
			break;		
	}
	print '<br />';
}

if($forget_secret_answer=='')
{
	print '秘密の質問の答えが入力されていません。<br />';
}
else
{
	print '秘密の質問の答え：';
	print $forget_secret_answer;
	print '<br />';
}



if($forget_name=='' || $forget_secret=='' ||  $forget_secret_answer=='' || $rec['name']!=$forget_name)
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else{
	$forget_newpass=md5($forget_newpass);
	print '<form method="post" action="forget_done.php">';
	print '<input type="hidden" name="name" value="'.$forget_name.'">';
	print '<input type="hidden" name="pass" value="'.$forget_newpass.'">';
	print '<input type="hidden" name="secret" value="'.$forget_secret.'">';
	print '<input type="hidden" name="secret_answer" value="'.$forget_secret_answer.'">';
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

?>

</body>
</html>