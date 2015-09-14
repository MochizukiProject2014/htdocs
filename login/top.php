<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>怪盗C</title>
<script type="text/javascript" src="../js/menu.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

require_once('common.php'); 
$name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];

$a = menu($user_id); 

?>

<div class = "menu-box">
        <a href="../index.html">TOP</a> <span id="divider">&nbsp;>&nbsp;</span> 
        MENU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<iframe src="./info.html" id="information">
インラインフレーム対応ブラウザでご覧いただけます。</iframe>


<div id="chapmenu">
    <input type="image" value="　第一章　導入　" onclick="location.href='../chapter1/story/story1_1.html'"  src = "../img/menubtn/c1btn_on.png" id = "c1" ><div id = "chapter1" style="display:inline;"></div><br><br>
    <input type="image" value="　第二章　変数　" onclick="location.href='../chapter2/story/story2_1.html'" src = "../img/menubtn/c2btn_off.png" id = "c2" disabled><div id = "chapter2" style="display:inline;"></div><br><br>
    <input type="image" value="第三章　条件分岐" onclick="location.href='../chapter3/story/story3_1.html'" src = "../img/menubtn/c3btn_off.png" id = "c3" disabled><div id = "chapter3" style="display:inline;"></div><br><br>
    <input type="image" value="第四章　繰り返し" onclick="location.href='../chapter4/story/story4_1.html'" src = "../img/menubtn/c4btn_off.png" id = "c4" disabled><div id = "chapter4" style="display:inline;"></div><br><br>
    <input type="image" value="　第五章　配列　" onclick="location.href='../chapter5/story/story5_1.html'" src = "../img/menubtn/c5btn_off.png" id = "c5" disabled><div id = "chapter5" style="display:inline;"></div><br><br>
    <input type="image" value="　フリーモード　" onclick="location.href='../debug/free.html'" src = "../img/menubtn/freebtn_on.png" id = "freemode" ><br /><br />
<a href="http://6248.teacup.com/kaitoc/bbs" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;掲&nbsp;&nbsp;&nbsp;示&nbsp;&nbsp;&nbsp;板&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>


<!--     <input type="button" value="ギャラリー" onclick="location.href='./gallery.html'"><br><br> --><br />


<div class = "guide-box">
  <img src="../img/guide.png">
  <img src="../img/character/littlecat_2.png">
  <p id="guide_top_menu"><b><font size = 2>よくきたにゃ～<br>やりたい章を選ぶにゃ</font></p>
</div>

</div>
<script type="text/javascript">
	var state = <?php echo $a; ?>;
	console.log(state);
	menub(state);
</script><br />


</body>
</html>