<?php session_start();session_regenerate_id(true);
header("Content-Type:text/html; charset=UTF-8");
if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="../login/login.html">ログイン画面へ</a>';
	exit();
}
else{
	require_once('../common.php'); 
	$user_id = $_SESSION['user_id'];
	$a = menu($user_id);
	if($a >= 34){
	}else{
		print'<br />前の問題から順に解かないとこの問題はできません。';
		print'<a href="./chapter4.php">戻る</a>';
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="UTF-8">
 <title>問題画面</title>
  <link rel="stylesheet" href="../js/jquery-ui-1.11.1.custom/jquery-ui.css">
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/external/jquery/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.11.1.custom/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/mainEx.js"></script>
<script type="text/javascript" src="../js/parser.js"></script>
<script type="text/javascript" src="../js/samplecode4-5.js"></script>
<script type="text/javascript" src="../js/hint.js"></script>
<script type="text/javascript"src="../tmlib.js-develop/build/tmlib.js"></script>
<script type="text/javascript" src="../js/anime.js"></script>
<script type="text/javascript" src="../js/moveex/moveex431.js"></script>
<link href="../stylenew.css" rel="stylesheet" type="text/css">
<script src="../js/js/jquery-1.10.2.min.js"></script>
 <!--CodeMirror-->
<script src="../js/codemirror/lib/codemirror.js"></script>
<link rel="stylesheet" href="../js/codemirror/lib/codemirror.css">
<script src="../js/codemirror/mode/clike/clike.js"></script>  
<script src="../js/codemirror/addon/selection/active-line.js"></script> 
<script src="../js/codemirror/addon/selection/mark-selection.js"></script> 
 <!--lightbox-->
<script src="../js/lightbox-2.6.min.js"></script>
<link href="../css/lightbox2.css" rel="stylesheet" />

</script>
</head>

 
 <body id ="c2">
 
 	<div class = "menu-box">
 		<div class = "menu"><a href="../index.html">TOP</a> <span id="divider">&nbsp;>&nbsp;</span> 
        <a href="../login/top.php">MENU</a> <span id="divider">&nbsp;>&nbsp;</span>
        <a href="../chapter4/chapter4.php">第四章 繰り返し</a> <span id="divider">&nbsp;>&nbsp;</span> 
        第三節　二重ループ お手本１&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="login.html">ログイン画面へ</a>';
	exit();
}
else{
	print $_SESSION['user_name'];
	print'さん&nbsp;&nbspログイン中&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';
	print '<a href="../login/logout.php">ログアウト</a><br />';
}
?>
</div>
        <a href="../img/screen_img/reidai-1.jpg" data-lightbox="group1" title="説明１" style = "float:right;padding:0px 15px;" id = "click_data"><img src='../img/new_button/b005.png' alt="画面説明" onMouseOver=this.src='../img/new_button/b005-2.png' onMouseOut=this.src='../img/new_button/b005.png'></a>
<a href="../img/screen_img/reidai-2.jpg" data-lightbox="group1" title="説明2"></a>
<a href="../img/screen_img/reidai-3.jpg" data-lightbox="group1" title="説明3"></a>
<a href="../img/screen_img/reidai-4.jpg" data-lightbox="group1" title="説明4"></a>
<a href="../img/screen_img/reidai-5.jpg" data-lightbox="group1" title="説明5"></a>
<a href="../img/screen_img/reidai-6.jpg" data-lightbox="group1" title="説明6"></a>
<a href="../img/screen_img/reidai-7.jpg" data-lightbox="group1" title="説明7"></a>
<a href="../img/screen_img/reidai-8.jpg" data-lightbox="group1" title="説明8"></a>
	</div>

	<div class = "code-box">
		<p class = "question"><font size="3" color="ff0000"> 
		<b>お手本</b></font><br><br />　二重ループを使って、*を2個ずつ3行出力しよう。</p>
		

		</br><br /><br />
		<p class = "code">▼プログラム</p>
			<textarea style="resize: none;" id="text" rows="25" cols="70" readonly="readonly" >
#include<stdio.h>
int main(void){
    int i,k;
    for (i=0; i<3; i++) {
		for (k=0; k<2; k++) {
			printf("*");
		}
		printf("\n");
    }
    return 0;
}</textarea>
<!--<input type="image" src ="../img/ex_button001.png" value="サンプル実行" id="button" style = "margin:20px 0px;">-->
	</div>
	
	<div class = "anime-box">
		<ul class = "tab">
			<li class = "select"><table><td><img src="../img/tab/pc.gif"></td><td>アニメ</td></table></li>
			<li><table><td><img src="../img/tab/book1.gif"></td><td>辞書</td></table></li>
			<li><table><td><img src="../img/tab/kbd.gif"></td><td>記号入力集</td></table></li>
		</ul>
		<ul class = "content">
			<li><div class = "toolbar">
			<button id="play" value="一時停止" onClick="ANIME_start_or_stop()" style = "vertical-align:0.8em;">play</button>
	 		<select id="f" style="width: 120px ; margin:0px;" onChange="ANIME_changeSPEED()" class = "select-box">
	 			<option value="0.5">0.5倍速</option>
	 			<option selected value="1">1倍速</option>
	 			<option value="2">2倍速</option>
	 			<option value="4">4倍速</option>
	 		</select>
	 		<div id = "movenext"></div>
	 		</div>
	 		<canvas id = "world"></canvas></li>
			<li class = "hide"><div class = "dic"><object data="../dic/dic7.html" type="text/html" width="730" height="460"></object></div></li>
			<li class = "hide"><object data="../dic/keyboard.html" type="text/html" width="730" height="460"></object></div></li>
		</ul>
	</div>
	
	<div class = "hint-box">
		<img class = "chara" src = "../img/character/littlecat.png"/>
		<div class = "com" id = "com">
			<div id = "cspace">
				<p><b>お手本では、プログラムの動きを1行ずつ見ていくにゃ!<br />
どこかでわからない言葉があったり、<br />プログラムについてもっと知りたい場合は、<br />右上の「辞書」をクリックしてみるにゃ。<br />
準備ができたらお手本開始ボタンを押すにゃ</b></p>
			</div>
			<!--<input type="image" src ="img/ex_button001.png" value="サンプル実行" id="button" style = "margin:20px 0px;">-->
			<input type="image" src ="../img/btn_01.png" value="サンプル実行" id="button" style = "width:123px;height:56px;position:absolute; bottom:0px; right:0px;margin:0px;" onclick = "tabplay()">
			</div>
	</div>
	
	<div class = "console-box">
			▼コンソール<br>
	<textarea class = "console" style="resize: none; overflow:auto;"id="console" name="code" rows="5" cols="45" onkeydown="if(event.keyCode === 13){newscanfnext();}"/></textarea>
	</div>
	<div id = "introduction" value=""></div>
</div>
<div id="ver" version="e431" type="ex"></div>
<div id="state">35</div>
<!--　ダイアログ　-->
	<div id="dialog-message" title="第四章 繰り返し　>　第三節 二重ループ　>　お手本１">
  		<p><br />
    	<b>二重ループを使って、*を2個ずつ3行出力しよう。<br />
		</b><br />
 		</p>
	</div>
	<!---  ダイアログここまで   -->
	</div>
</div>
</div>


</body>
</html>