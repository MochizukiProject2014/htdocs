<?php
session_start();
session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");
?>

<html>

 <head>
 <meta charset="UTF-8">
  <title>Chapter5</title>
<link rel="stylesheet" href="../js/jquery-ui-1.11.1.custom/jquery-ui.css">
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/external/jquery/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/jquery-ui.min.js">
</script>
<script type="text/javascript" src="../js/script.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php

require_once('../common.php'); 
$name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];

$a = menu($user_id); 

?>
<script type="text/javascript" src="../js/menu.js"></script>
<div class = "menu-box">
        <a href="../index.html">TOP</a> <span id="divider">&nbsp;>&nbsp;</span> 
        <a href="../login/top.php">MENU</a> <span id="divider">&nbsp;>&nbsp;</span>
        第五章 配列 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="../login/login.html">ログイン画面へ</a>';
	exit();
}
else{
	print $_SESSION['user_name'];
	print'さん&nbsp;&nbspログイン中&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';
	print '<a href="../login/logout.php">ログアウト</a><br />';
}
?>
    </div>
<div class = "title-box">
        <h4>第五章　配列</h4>
    </div>

<div id=mondai>
    <h3>第一節　配列</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./ex5-1-1.php'" src = "../img/exbtn/ex1btn_on.png" id = "ex15"><div id = "explan15" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="お手本２" onclick="location.href='./ex5-1-2.php'" src = "../img/exbtn/ex2btn_off.png" id = "ex16" disabled><div id = "explan16" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q5-1-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q25"><div id = "question26" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q5-1-2.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q26"><div id = "question27" style="display:inline;"></div>
    <br />
<!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q5-1-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "511a" disabled><input type="image" value="追加２" onclick="location.href='./q5-1-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "511b" disabled>&emsp;&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q5-1-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "512a" disabled><input type="image" value="追加２" onclick="location.href='./q5-1-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "512b" disabled>-->
    <br><br>
    <h3>第二節　二次元配列</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./ex5-2-1.php'" src = "../img/exbtn/ex1btn_off.png" id = "ex17" disabled><div id = "explan17" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q5-2-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q27"><div id = "question28" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q5-2-2.php'" src = "../img/qbtn/q2btn_off.png" disabled id = "q28"><div id = "question29" style="display:inline;"></div><br />
    <!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q5-2-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "521a" disabled><input type="image" value="追加２" onclick="location.href='./q5-2-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "521b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q5-2-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "522a" disabled><input type="image" value="追加２" onclick="location.href='./q5-2-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "522b" disabled>-->
    <br><br>
    <h3>第五章　まとめ問題</h3><br>
    <input type="image" value="まとめ問題" onclick="location.href='./c5-matome.php'" src = "../img/qbtn/matomebtn_off.png" disabled id = "q29"><div id = "question30" style="display:inline;"></div><br /><br />
    <a href="../login/top.php">戻る</a>
</div>

<script type="text/javascript">
	var state = <?php echo $a; ?>;
	console.log(state);
	menu5(state);
</script>
<div class = "guide-box">
  <img src="../img/guide.png">
  <img src="../img/character/littlecat_2.png">
  <p id="guide_menu"><b><font size = 2><br />&emsp;&emsp;やりたい問題を選ぶにゃ！<br />第五章は最後の章だにゃ〜！<br />気を抜かずに最後まで頑張るにゃ！！</font></p>
</div>
 </body>

</html>
