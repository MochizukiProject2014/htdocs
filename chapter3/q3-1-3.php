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
	if($a >= 20){
	}else{
		print'<br />前の問題から順に解かないとこの問題はできません。';
		print'<a href="./chapter3.php">戻る</a>';
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
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/answer.js"></script>
<script type="text/javascript" src="../js/samplecode.js"></script>
<script type="text/javascript" src="../js/parser.js"></script>
<script type="text/javascript"src="../tmlib.js-develop/build/tmlib.js"></script>
<script type="text/javascript" src="../js/anime.js"></script>
<script type="text/javascript" src="../js/hint.js"></script>
<script type="text/javascript" src="../js/reset.js"></script>
<script type="text/javascript" src="../js/movenext.js"></script>
<script type="text/javascript" src="../js/parser_judge_func.js"></script>
<script type="text/javascript" src="../js/parser_judge.js"></script>
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
</head>

 
 <body id = "c2">
 


<div class = "menu-box">
		<div class = "menu"><a href="../index.html">TOP</a> <span id="divider">&nbsp;>&nbsp;</span> 
    	<a href="../login/top.php">MENU</a> <span id="divider">&nbsp;>&nbsp;</span>
   	    <a href="./chapter3.php">第三章 条件分岐</a> <span id="divider">&nbsp;>&nbsp;</span> 
    	 第一節 if 問題３&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
if(isset($_SESSION['login'])==false){
	
}
else{
	print $_SESSION['user_name'];
	print'さん&nbsp;&nbspログイン中&nbsp;&nbsp;&nbsp&nbsp;&nbsp';
	print '<a href="../login/logout.php">ログアウト</a><br />';
}
?>
    	</div>
    	<a href="../img/screen_img/mondai-01.jpg" data-lightbox="group2" title="説明１" style = "float:right;padding:0px 15px;" id = "click_data"><img src='../img/new_button/b005.png' alt="画面説明" onMouseOver=this.src='../img/new_button/b005-2.png' onMouseOut=this.src='../img/new_button/b005.png'></a>
<a href="../img/screen_img/mondai-02.jpg" data-lightbox="group2" title="説明2"></a>
<a href="../img/screen_img/mondai-03.jpg" data-lightbox="group2" title="説明3"></a>
<a href="../img/screen_img/mondai-04.jpg" data-lightbox="group2" title="説明4"></a>
<a href="../img/screen_img/mondai-05.jpg" data-lightbox="group2" title="説明5"></a>
<a href="../img/screen_img/mondai-06.jpg" data-lightbox="group2" title="説明6"></a>
<a href="../img/screen_img/mondai-07.jpg" data-lightbox="group2" title="説明7"></a>
<a href="../img/screen_img/mondai-08.jpg" data-lightbox="group2" title="説明8"></a>
<a href="../img/screen_img/mondai-09.jpg" data-lightbox="group2" title="説明9"></a>
<a href="../img/screen_img/mondai-010.jpg" data-lightbox="group2" title="説明10"></a>
<a href="../img/screen_img/mondai-011.jpg" data-lightbox="group2" title="説明11"></a>
<a href="../img/screen_img/mondai-012.jpg" data-lightbox="group2" title="説明12"></a>
<a href="../img/screen_img/mondai-013.jpg" data-lightbox="group2" title="説明13"></a>
<a href="../img/screen_img/mondai-014.jpg" data-lightbox="group2" title="説明14"></a>
<a href="../img/screen_img/mondai-015.jpg" data-lightbox="group2" title="説明15"></a>
<a href="../img/screen_img/mondai-016.jpg" data-lightbox="group2" title="説明16"></a>
	</div>
    
	<div class = "code-box">
		<p class = "question"><font size = "3">問題<br /><br />　int型の変数xに入力した値が0以外なら<br />「xは0ではないです。」と出力しよう。</font></p>
		<input class = "resetbut" type="button" value="リセット" onclick="resetq3_1_3();"></br>
		<p class = "code">▼プログラムを入力</p>
		<textarea style="resize: none;" id="text" rows="20" cols="75">
#include <stdio.h>
int main(void){
   int x;
   scanf("%d",&x);
   
   
   
   return 0;
}</textarea>
		<input type="button" value="実行" id="button" onclick = "tabplay()">
	</div>
	
	<div class = "anime-box">
		<ul class = "tab">
			<li class = "select"><table><td><img src="../img/tab/pc.gif"></td><td>アニメ</td></table></li>
			<li><table><td><img src="../img/tab/book1.gif"></td><td>辞書</td></table></li>
			<li><table><td><img src="../img/tab/kbd.gif"></td><td>記号入力集</td></table></li>
		</ul>
		<ul class = "content">
			<li><div class = "toolbar"><input type="button" value="サンプル実行" id="sample" style = "vertical-align:0.8em;">
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
			<li class = "hide"><div class = "dic"><object data="../dic/dic6.html" type="text/html" width="730" height="460"></object></div></li>
			<li class = "hide"><object data="../dic/keyboard.html" type="text/html" width="730" height="460"></object></div></li>
		</ul>
	</div>
	
	
	<div class = "hint-box">
		<img class = "chara" src = "../img/character/littlecat.png"/>
		<div class = "com" id = "com"><p><b>
		足りないプログラムを書き足して、問題を解くにゃ！</br><br/>
		・プログラムの<font color="red">文末</font>には<font color="red">セミコロン「 ; 」</font>を忘れちゃ駄目にゃ！<br/>
		・プログラム文は<font color="red">半角</font>で書くにゃ！<br/>
		・わからなかったら<font color="red">辞書</font>や<font color="red">ヒント</font>を見てみるんだにゃ！<br/>
		・「<font color="red">サンプル実行</font>」で、正解プログラムのアニメが見れるにゃ！
		</b></p></div>
		<table class = "hinttable">
  			<tr>
    			<td><font size = "5">ヒント</font></td>
    			<td>&nbsp;&nbsp;&nbsp;</td>
    			<td><input type="button" value="１" onClick="hintq3_1_3()"></td>
    		</tr>
    	</table>
	</div>
	
	
	<div class = "console-box">
		▼コンソール</br>
		<textarea class = "console" style="resize: none; overflow:auto;"id="console" name="code" rows="5" cols="45" onkeydown="if(event.keyCode === 13){newscanfnext();}"/></textarea>
	</div>
	
	
	<div id="ver" version="313"></div>
	<div id="state">21</div>
	
	<!--　ダイアログ　-->
	<div id="dialog-message" title="第三章　条件分岐　>　第一節　if　>　問題３">
  		<p><br />
    	<b>int型の変数xに入力した値が0以外なら「xは0ではないです。」と出力しよう。<br />
		</b><br />
 		</p>
	</div>
	<!---  ダイヤログここまで   -->

<p>
</body>


</html>