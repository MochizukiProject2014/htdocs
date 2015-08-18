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
$register_name=$post['name'];
$register_pass=$post['pass'];
$register_pass2=$post['pass2'];
$register_gender=$post['gender'];
$register_secret=$post['secret'];
$register_secret_answer=$post['secret_answer'];
$register_secret=$post['secret'];
$register_programming=$post['programming'];
$register_interested=$post['interested'];


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

$sql='SELECT name FROM members WHERE name=?';
$stmt=$dbh->prepare($sql);
$data[]=$register_name;
$stmt->execute($data);

$dbh=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($register_name=='')
{
	print '名前が入力されていません。<br />';
}
else if($rec==true)
{
	print 'その名前は既に他ユーザーが使っています。<br />';
}
else
{
	print '名前：';
	print $register_name;
	print '<br />';
}

if($register_pass=='')
{
	print 'パスワードが入力されていません。<br />';
}
if($register_pass!=$register_pass2)
{
	print 'パスワードが一致しません。<br />';
}

if($register_gender=='')
{
	print '性別が入力されていません。<br />';
}
else
{
	print '性別：';
	print $register_gender;
	print '<br />';
}

if($register_secret=='')
{
	print '秘密の質問が選択されていません。<br />';
}
else
{
	print '秘密の質問：';
	switch ($register_secret) {
		case '1':
			print 'ペットの名前は？';
			break;
		case '2':
			print '親の旧姓は？';
			break;
		case '3':
			print '嫌いな食べ物は？';
			break;		
	}
	print '<br />';
}

if($register_secret_answer=='')
{
	print '秘密の質問の答えが入力されていません。<br />';
}
else
{
	print '秘密の質問の答え：';
	print $register_secret_answer;
	print '<br />';
}

if($register_programming=='')
{
	print 'アンケートの問１が入力されていません。<br />';
}
else
{
	print 'アンケート問１の答え：';
	print $register_programming;
	print '<br />';
}

if($register_interested=='')
{
	print 'アンケートの問２が入力されていません。<br />';
}
else
{
	print 'アンケート問２の答え：';
	print $register_interested;
	print '<br />';
}


if($register_name=='' || $register_pass=='' || $register_pass!=$register_pass2 ||  
	$register_gender=='' ||  $register_secret=='' ||  $register_secret_answer=='' || $register_programming == '' || $register_interested=='' || $rec==true)
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else
{
	$register_pass=md5($register_pass);
	print '<form method="post" action="register_add_done.php">';
	print '<input type="hidden" name="name" value="'.$register_name.'">';
	print '<input type="hidden" name="pass" value="'.$register_pass.'">';
	print '<input type="hidden" name="gender" value="'.$register_gender.'">';
	print '<input type="hidden" name="secret" value="'.$register_secret.'">';
	print '<input type="hidden" name="secret_answer" value="'.$register_secret_answer.'">';
	print '<input type="hidden" name="programming" value="'.$register_programming.'">';
	print '<input type="hidden" name="interested" value="'.$register_interested.'">';
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

?>

</body>
</html>