<?php
  session_start();
  session_regenerate_id(true);
  $memberid = $_SESSION['user_id'];
  $myInput1 = $_POST["input1"];
  $myInput2 = $_POST["input2"];
  $myInput3 = $_POST["input3"];



if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
  $dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
  $user='mochiken2015';
  $password='eX39jT2q';
} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
  $dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
  $user='root';
  $password='root';
}
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
    

  // クエリを送信する
  $sql = "INSERT INTO things (memberid,question,answer,code) VALUES(?,?,?,?)";
  $stmt=$dbh->prepare($sql);
  $data[]=$memberid;
  $data[]=$myInput1;
  $data[]=$myInput2;
  $data[]=$myInput3;  
  $stmt->execute($data);

$dbh=null;
  // MySQLへの接続を閉じる
 
 ?>