<?php
session_start();
session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");
?>
<html>

 <head>
 <meta charset="UTF-8">
  <title>Chapter4</title>
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
        第四章 繰り返し &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <h4>第四章　繰り返し</h4>
    </div>

<div id=mondai>
    <h3>第一節　for</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./ex4-1-1.php'" src = "../img/exbtn/ex1btn_on.png" id = "ex12"><div id = "explan12" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q4-1-1.php'" src = "../img/qbtn/q1btn_off.png" id = "q18" disabled><div id = "question19" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q4-1-2.php'" src = "../img/qbtn/q2btn_off.png"id = "q19" disabled><div id = "question20" style="display:inline;"></div>&nbsp;&nbsp;<br />
追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q4-1-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "411a" disabled><input type="image" value="追加２" onclick="location.href='./q4-1-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "411b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q4-1-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "412a" disabled><input type="image" value="追加２" onclick="location.href='./q4-1-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "412b" disabled>
 
    <br><br>
    <h3>第二節　while</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./ex4-2-1.php'" src = "../img/exbtn/ex1btn_off.png" id = "ex13" disabled><div id = "explan13" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q4-2-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q20"><div id = "question21" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題２" onclick="location.href='./q4-2-2.php'" src = "../img/qbtn/q2btn_off.png" disabled id = "q21"><div id = "question22" style="display:inline;"></div><br />
追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q4-2-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "421a" disabled><input type="image" value="追加２" onclick="location.href='./q4-2-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "421b" disabled>&emsp;&emsp;&emsp;&emsp;
 <input type="image" value="追加１" onclick="location.href='./q4-2-2a.php'" src = "../img/qbtn/add1btn_off.png" id = "422a" disabled><input type="image" value="追加２" onclick="location.href='./q4-2-2b.php'" src = "../img/qbtn/add2btn_off.png" id = "422b" disabled>
    <br><br>
    <h3>第三節　二重ループ</h3><br>
    <input type="image" value="お手本１" onclick="location.href='./ex4-3-1.php'" src = "../img/exbtn/ex1btn_off.png" id = "ex14" disabled><div id = "explan14" style="display:inline;"></div>&nbsp;&nbsp;
    <input type="image" value="問題１" onclick="location.href='./q4-3-1.php'" src = "../img/qbtn/q1btn_off.png" disabled id = "q22"><div id = "question23" style="display:inline;"></div><br />
追加問題&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" value="追加１" onclick="location.href='./q4-3-1a.php'" src = "../img/qbtn/add1btn_off.png" id = "431a" disabled><input type="image" value="追加２" onclick="location.href='./q4-3-1b.php'" src = "../img/qbtn/add2btn_off.png" id = "431b" disabled>
    <br><br>
    <h3>第四章　まとめ問題</h3><br>
    <input type="image" value="まとめ問題１" onclick="location.href='./c4-matome1.php'" src = "../img/qbtn/matomebtn_off.png" disabled id = "q23"><div id = "question24" style="display:inline;"></div>&nbsp;&nbsp;

    <input type="image" value="まとめ問題２" onclick="location.href='./c4-matome2.php'" src = "../img/qbtn/matomebtn_off.png" disabled id = "q24"><div id = "question25" style="display:inline;"></div><br /><br />
<a href="../login/top.php">戻る</a>
</div>


<script type="text/javascript">
	var state = <?php echo $a; ?>;
	console.log(state);
	menu4(state);
</script>
<div class = "guide-box">
  <img src="../img/guide.png">
  <img src="../img/character/littlecat_2.png">
  <p id="guide_menu"><b><font size = 2><br />&emsp;&emsp;やりたい問題を選ぶにゃ！<br />第四章はまとめ問題が２問あるにゃ〜〜！！<br />頑張るにゃ！</font></p>
</div>


 </body>

</html>
