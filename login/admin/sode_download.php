<?php
session_start();
session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");
if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="../login.html">ログイン画面へ</a>';
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

$sql=
'SELECT name, MAX(question) 
FROM members INNER JOIN things 
ON members.id = things.memberid 
WHERE members.ne27="袖ヶ浦" AND things.answer="1" 
GROUP BY members.name, things.memberid'
;

$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

$csv='名前,最後に正解した問題';
$csv.="\n";

while(true){
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false){ 
		break;
	}
	print $rec['name'];
	$csv.= $rec['name'];
	$csv.= ',';
	$csv.= $rec['MAX(question)'];
	$csv.= "\n";
}



print nl2br($csv);

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<br />
<a href="../logout.php">ログアウト</a><br />

</body>
</html>