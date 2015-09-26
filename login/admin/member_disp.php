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

<?php

try
{
$member_id=$_GET['member_id'];

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

$sql='SELECT question,answer,date FROM things WHERE memberid=?';
$stmt=$dbh->prepare($sql);
$data[]=$member_id;
$stmt->execute($data);

$count=0;

while(true){
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false){
		break;
	}
	$question[]=$rec['question'];
	$answer[]=$rec['answer'];
	$date[]=$rec['date'];
	$count+=1;
}

$dbh=null;

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

メンバー情報参照<br />
<br />
回答状況<br />

メンバーID:
<?php print $member_id.'<br>'; ?>
<br />

<?php
for($i = 0; $i < $count; $i++){
	print '問題番号:'.$question[$i].'<br>';
	print '回答結果:'.$answer[$i].'<br>';
	print '回答日時:'.$date[$i].'<br><br>';
}
?>

<form>
<br>
<input type="button" onclick="history.back()" value="戻る">
</form>

</body>
</html>