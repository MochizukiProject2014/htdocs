<?php session_start();session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");?>
<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="UTF-8">
 <title>問題画面</title>
<link rel="stylesheet" href="../js/jquery-ui-1.11.1.custom/jquery-ui.css">
<script type="text/javascript" src="../js/ex1-1-1.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/external/jquery/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/parser.js"></script>
<script type="text/javascript" src="../js/samplecode.js"></script>
<script type="text/javascript" src="../js/hint.js"></script>
<script type="text/javascript" src="../js/movenext.js"></script>
<script type="text/javascript"src="../tmlib.js-develop/build/tmlib.js"></script>
<script type="text/javascript" src="../js/anime.js"></script>
<script type="text/javascript" src="../js/moveex/moveex111.js"></script>
<link href="../stylenew.css" rel="stylesheet" type="text/css">
<script src="../js/js/jquery-1.10.2.min.js"></script>

</head>

 
 <body id = "c1">
 


 	<div class = "menu-box" id = "menubar">
		<a href="./index.html">TOP</a> <span id="divider">&nbsp;>&nbsp;</span> 
    	<a href="../login/top.php">MENU </a> <span id="divider">&nbsp;>&nbsp;</span> 
    	第一節 円の面積 
	</div>
	
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
	
	<img class = "grand" src = "../img/character/grand_father.png"/>
	<img class = "kengo" src = "../img/character/young_kengo.png"/>
	
	<img class = "program" src = "../img/program.png"/>
	<div id = "cont" style  = "line-height: 30px;"></div>
	
	<div id ="words">
		<div class="space"></div>
		<div class="bottom">
			<img src="../img/btnprev.png" alt="button" id="prev" border = "0"><br />
			<img src="../img/btnnext.png" alt="button" id="next" border = "0"><br />
		</div>
		
		<div id = "movenext" class = "movenext"></div>
	</div>
	<div id="state" type = "hideen">1</div>
</body>
</html>