<?php
session_start();
session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Chapter2</title>
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
        第二章 変数 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <h4>第二章　変数</h4>
    </div>
<div id=mondai>
    <h3>第一節　変数の宣言・代入</h3><br>
<input type="image" value="お手本１" onclick="location.href='./ex2-1-1.php'" src = "../img/exbtn/ex1btn_on.png" id = "ex2" ><div id = "explan2" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q2-1-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q1"><div id = "question2" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="お手本２" onclick="location.href='./story/storytea2_1.html'" src = "../img/exbtn/ex2btn_off.png" id = "ex3" disabled><div id = "explan3" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q2-1-2.php'" src = "../img/qbtn/q2btn_off.png" disabled id = "q2"><div id = "question3" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="お手本３" onclick="location.href='./story/storytea2_1_3.html'" src = "../img/exbtn/ex3btn_off.png" id = "ex4" disabled><div id = "explan4" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題３" onclick="location.href='./q2-1-3.php'" src = "../img/qbtn/q3btn_off.png" disabled id = "q3"><div id = "question4" style="display:inline;"></div>&nbsp;&nbsp;<br />
   <!-- 追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q2-1-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "211a" disabled><input type="image" value="追加２" onclick="location.href='./q2-1-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "211b" disabled>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="image" value="追加１" onclick="location.href='./q2-1-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "212a" disabled><input type="image" value="追加２" onclick="location.href='./q2-1-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "212b" disabled>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
    <input type="image" value="追加１" onclick="location.href='./q2-1-3a.php'" src = "../img/qbtn/add1btn_off.png" id = "213a" disabled><input type="image" value="追加２" onclick="location.href='./q2-1-3b.php'" src = "../img/qbtn/add2btn_off.png" id = "213b" disabled>-->
    <br><br>
    <h3>第二節　scanf</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./story/storytea2_2.html'" src = "../img/exbtn/ex1btn_off.png" id = "ex5" disabled><div id = "explan5" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q2-2-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q4"><div id = "question5" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q2-2-2.php'" src = "../img/qbtn/q2btn_off.png" disabled id = "q5"><div id = "question6" style="display:inline;"></div><br />
 <!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q2-2-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "221a" disabled><input type="image" value="追加２" onclick="location.href='./q2-2-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "221b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q2-2-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "222a" disabled><input type="image" value="追加２" onclick="location.href='./q2-2-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "222b" disabled>-->
    <br><br>
    <h3>第三節　数式</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./story/storytea2_3.html'" src = "../img/exbtn/ex1btn_off.png" id = "ex6" disabled><div id = "explan6" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q2-3-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q6"><div id = "question7" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q2-3-2.php'" src = "../img/qbtn/q2btn_off.png" disabled id = "q7"><div id = "question8" style="display:inline;"></div><br />
<!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q2-3-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "231a" disabled><input type="image" value="追加２" onclick="location.href='./q2-3-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "231b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q2-3-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "232a" disabled><input type="image" value="追加２" onclick="location.href='./q2-3-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "232b" disabled>-->
    <br><br>
    <h3>第四節　printf</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./story/storytea2_4.html'" src = "../img/exbtn/ex1btn_off.png" id = "ex7" disabled><div id = "explan7" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q2-4-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q8"><div id = "question9" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q2-4-2.php'" src = "../img/qbtn/q2btn_off.png" disabled id = "q9"><div id = "question10" style="display:inline;"></div><br />
<!--追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q2-4-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "241a" disabled><input type="image" value="追加２" onclick="location.href='./q2-4-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "241b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q2-4-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "242a" disabled><input type="image" value="追加２" onclick="location.href='./q2-4-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "242b" disabled>-->
    <br><br />
    <h3>第二章　まとめ問題</h3>
    <input type="image" value="まとめ問題" onclick="location.href='./story/storytea2_5.html'" src = "../img/qbtn/matomebtn_off.png" disabled id = "q10"><div id = "question11" style="display:inline;"></div>
     <br />
<br />
<a href="../login/top.php">戻る</a>
</div>
<script type="text/javascript">
	var state = <?php echo $a; ?>;
	console.log(state);
	menua(state);
</script><br />

 <div class = "guide-box">
  <img src="../img/guide.png">
  <img src="../img/character/littlecat_2.png">
  <p id="guide_menu"><b><font size = 2><br />&emsp;&emsp;やりたい問題を選ぶにゃ！<br />初めてなら第一節のお手本１から始めるにゃ。</font></p>
</div>

 </body>
 </html>