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
</head>
<body>

<?php
try
{

require_once('common.php');

$post=sanitize($_POST);
$q11 = $post['q11'];$q12 = $post['q12'];$q13 = $post['q13'];$q14 = $post['q14'];$q15 = $post['q15'];$q16 = $post['q16'];
$q21 = $post['q21'];$q22 = $post['q22'];$q23 = $post['q23'];$q24 = $post['q24'];
$q31 = $post['q31'];$q32 = $post['q32'];
$q41 = $post['q41'];$q42 = $post['q42'];$q43 = $post['q43'];$q44 = $post['q44'];$q45 = $post['q45'];
$q51 = $post['q51'];$q52 = $post['q52'];$q53 = $post['q53'];
$q61 = $post['q61'];$q62 = $post['q62'];$q63 = $post['q63'];$q64 = $post['q64'];
$q71 = $post['q71'];$q72 = $post['q72'];$q73 = $post['q73'];
$q81 = $post['q81'];$q82 = $post['q82'];
$q91 = $post['q91'];$q92 = $post['q92'];$q93 = $post['q93'];$q94 = $post['q94'];$q95 = $post['q95'];

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

$sql='INSERT INTO enshu (memberid,q11,q12,q13,q14,q15,q16,q21,q22,q23,q24,q31,q32,q41,q42,q43,q44,q45,
	q51,q52,q53,q61,q62,q63,q64,q71,q72,q73,q81,q82,q91,q92,q93,q94,q95) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$user_id;
$data[]=$q11;$data[]=$q12;$data[]=$q13;$data[]=$q14;$data[]=$q15;$data[]=$q16;
$data[]=$q21;$data[]=$q22;$data[]=$q23;$data[]=$q24;
$data[]=$q31;$data[]=$q32;
$data[]=$q41;$data[]=$q42;$data[]=$q43;$data[]=$q44;$data[]=$q45;
$data[]=$q51;$data[]=$q52;$data[]=$q53;
$data[]=$q61;$data[]=$q62;$data[]=$q63;$data[]=$q64;
$data[]=$q71;$data[]=$q72;$data[]=$q73;
$data[]=$q81;$data[]=$q82;
$data[]=$q91;$data[]=$q92;$data[]=$q93;$data[]=$q94;$data[]=$q95;

$stmt->execute($data);

$dbh=null;


if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="login.html">ログイン画面へ</a>';
	exit();
}
else{
	print $_SESSION['user_name'];
	print'さん&nbsp;&nbspログイン中&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';
	print '<a href="logout.php">ログアウト</a><br /><br />';
}

print $data;
print '<br>追加しました。<br />';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>
<p>※ブラウザの戻るボタンは使用しないでください</p>
</body>
</html>