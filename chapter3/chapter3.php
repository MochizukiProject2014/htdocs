<?php
session_start();
session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");
?>
<html>

 <head>
 <meta charset="UTF-8">
  <title>Chapter3</title>
  
  <link rel="stylesheet" href="../js/jquery-ui-1.11.1.custom/jquery-ui.css">
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/external/jquery/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/jquery-ui.min.js">
</script>
<script type="text/javascript" src="../js/script.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
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
        第三章 条件分岐 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <h4>第三章　繰り返し</h4>
    </div>
<div id=mondai>
    <h3>第一節　if</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./ex3-1-1.php'" src = "../img/exbtn/ex1btn_on.png" id = "ex8"><div id = "explan8" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q3-1-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q11"><div id = "question12" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q3-1-2.php'" src = "../img/qbtn/q2btn_off.png" disabled id = "q12"><div id = "question13" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題３" onclick="location.href='./q3-1-3.php'" src = "../img/qbtn/q3btn_off.png" disabled id = "q13"><div id = "question14" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="お手本２" onclick="location.href='./story/storytea3_1.html'" src = "../img/exbtn/ex2btn_off.png" id = "ex9" disabled><div id = "explan9" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題４" onclick="location.href='./q3-1-4.php'" src = "../img/qbtn/q3btn_off.png" disabled id = "q14"><div id = "question15" style="display:inline;"></div><br />
<!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
<input type="image" value="追加１" onclick="location.href='./q3-1-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "311a" disabled><input type="image" value="追加２" onclick="location.href='./q3-1-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "311b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q3-1-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "312a" disabled><input type="image" value="追加２" onclick="location.href='./q3-1-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "312b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q3-1-3a.php'" src = "../img/qbtn/add1btn_off.png" id = "313a" disabled><input type="image" value="追加２" onclick="location.href='./q3-1-3b.php'" src = "../img/qbtn/add2btn_off.png" id = "313b" disabled>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q3-1-4a.php'" src = "../img/qbtn/add1btn_off.png" id = "314a" disabled><input type="image" value="追加２" onclick="location.href='./q3-1-4b.php'" src = "../img/qbtn/add2btn_off.png" id = "314b" disabled>-->
    <br><br>
    <h3>第二節　else</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./story/storytea3_2.html'" src = "../img/exbtn/ex1btn_off.png" id = "ex10" disabled><div id = "explan10" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q3-2-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q15"><div id = "question16" style="display:inline;"></div><br />
<!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q3-2-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "321a" disabled><input type="image" value="追加２" onclick="location.href='./q3-2-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "321b" disabled>-->
    <br><br>
    <h3>第三節　else if</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./story/storytea3_3.html'" src = "../img/exbtn/ex1btn_off.png" id = "ex11" disabled><div id = "explan11" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q3-3-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q16"><div id = "question17" style="display:inline;"></div><br />
<!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q3-3-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "331a" disabled><input type="image" value="追加２" onclick="location.href='./q3-3-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "331b" disabled>-->
    <br><br>
    <h3>第三章　まとめ問題</h3><br>
    <input type="image" value="まとめ問題" onclick="location.href='./story/storytea3_4.html'" src = "../img/qbtn/matomebtn_off.png" disabled id = "q17"><div id = "question18" style="display:inline;"></div><br />
<br />
 <a href="../login/top.php">戻る</a>
</div>

<script type="text/javascript">
	var state = <?php echo $a; ?>;
	console.log(state);
	menu3(state);
</script><br />


<div class = "guide-box">
  <img src="../img/guide.png">
  <img src="../img/character/littlecat_2.png">
  <p id="guide_menu"><b><font size = 2><br />&emsp;&emsp;やりたい問題を選ぶにゃ！<br />初めてなら第一節のお手本１から始めるにゃ。<br />第三章もがんばるにゃ！</font></p>
</div>
 </body>


</html>