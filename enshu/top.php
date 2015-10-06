<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
session_regenerate_id(true);
require_once('common.php'); 
require_once('result_common.php');  
$name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>演習問題の注意事項</title>
<script type="text/javascript" src="../js/menu.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function ChangeTab(tabname) {
   // 全部消す
	document.getElementById('tab1').style.display = 'none';
	document.getElementById('tab2').style.display = 'none';
	document.getElementById('tab3').style.display = 'none';
	document.getElementById('tab4').style.display = 'none';
	document.getElementById('tab5').style.display = 'none';
	document.getElementById('tab6').style.display = 'none';
	document.getElementById('tab7').style.display = 'none';
	document.getElementById('tab8').style.display = 'none';
	document.getElementById('tab9').style.display = 'none';
	document.getElementById('tab10').style.display = 'none';
	// 指定箇所のみ表示
	document.getElementById(tabname).style.display = 'block';
}

//送信時確認アラート
function check(){
	if(window.confirm('完了してよろしいですか？')){ // 確認ダイアログを表示

		return true; // 「OK」時は送信を実行

	}
	else{ // 「キャンセル」時の処理

		window.alert('キャンセルされました'); // 警告ダイアログを表示
		return false; // 送信を中止

	}
}
</script>

<style type="text/css"><!--
/* 表示領域全体 */
div#wrapper {  
    width: 800px;  
      
    text-align: left;  
    border: 3px solid #000000;  
}  
div.tabbox { margin: 0px; padding: 0px; width: 800px; }
div.codespace { margin-left: 20px; margin-right: 20px; }
div.consolespace { background:#ffffff; padding:10px; border:1px solid #000000; border-radius:10px; margin-left: 20px; margin-right: 20px; }
div.selectspace{ background:#ffffff; padding:10px; border:1px solid #000000; margin-left: 20px; margin-right: 20px; }
/* タブ部分 */
p.tabs { margin: 0px; padding: 0px; }
p.tabs a {
   display: block; width: 4em; float: left;
   margin: 0px 1px 0px 0px; padding: 3px;
   text-align: center;
   border-radius: 12px 12px 0px 0px; /* 角を丸くする */
}
p.tabs a.tab1 { background-color: #98FB98; color: black; }
p.tabs a.tab2 { background-color: #00FF7F; color: black; }
p.tabs a.tab3 { background-color: #7CFC00; color: black; }
p.tabs a.tab4 { background-color: #00FF00; color: black; }
p.tabs a.tab5 { background-color: #7FFF00; color: black; }
p.tabs a.tab6 { background-color: #00FA9A; color: black; }
p.tabs a.tab7 { background-color: #ADFF2F; color: black;}
p.tabs a.tab8 { background-color: #32CD32; color: black; }
p.tabs a.tab9 { background-color: #3CB371; color: black; }
p.tabs a.tab10 { background-color: #CCCC0C; color: white; width: 9.6em;}
/*p.tabs a.tab1 { background-color: #ff0000; color: white; }
p.tabs a.tab2 { background-color: #e199c3; color:white;}
p.tabs a.tab3 { background-color: #f69177; color: white; }
p.tabs a.tab4 { background-color: #ffff00; color: white; }
p.tabs a.tab5 { background-color: #00ff00; color: white; }
p.tabs a.tab6 { background-color: #0000ff; color: white; }
p.tabs a.tab7 { background-color: #ee82ee; color: white; }
p.tabs a.tab8 { background-color: #f0e68c; color: white; }
p.tabs a.tab9 { background-color: #cd853f; color: white; }
p.tabs a.tab10 { background-color: #cd853f; color: white; }*/
p.tabs a:hover { color: yellow; }

/* タブ中身のボックス */
div.tab { height: 200px; width: 792px; overflow: auto; clear: left; }
div#tab1 { border: 4px solid #98FB98;}
div#tab2 { border: 4px solid #00FF7F;}
div#tab3 { border: 4px solid #7CFC00;}
div#tab4 { border: 4px solid #00FF00;}
div#tab5 { border: 4px solid #7FFF00;}
div#tab6 { border: 4px solid #00FA9A;}
div#tab7 { border: 4px solid #ADFF2F;}
div#tab8 { border: 4px solid #32CD32;}
div#tab9 { border: 4px solid #3CB371;}
div#tab10 { border: 4px solid #CCCC0C;}
div#tab10 { text-align: center;  }
div.tab p { margin: 0.5em; }
--></style>
</head>
<body>
<?php	require_once('common.php');	
if(isset($_SESSION['login'])==false){
	print'ログインされていません。<br />';
	print'<a href="login.html">ログイン画面へ</a>';
	exit();
}
else{
	print $_SESSION['user_name'];
	print'さん&nbsp;&nbspログイン中&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';
	print '<a href="logout.php">ログアウト</a><br />';
}
?>


<br><br>

	<p>【演習問題の注意事項】</p><br>

<p>
・演習問題の時間は<span id="red">30分</span>です。<br>
・問題は<span id="red">問1〜問9</span>まであります。それぞれの<span id="red">タブをクリック</span>することで、その問題が表示されます。<br>
・問題は<span id="red">選択式</span>です。選択し忘れがないように注意してください。<br>
・<span id="red">全ての演習問題を解き終えましたら</span>、解答完了のタブをクリックし、<span id="red">解答完了ボタン</span>を押し、終了してください。<br>
・<span id="red">解答中はブラウザの戻るボタンは押さないでください。</span><br>
・解答中は教科書、参考書、アプリケーションを見ることを禁止します。<br>
・解答中に他の人と相談やることや、他の人の画面を見ることを禁止します。<br>
・間違ってブラウザを閉じてしまった場合、再度ログインをし、初めから解答して下さい。<br>
・この演習問題の結果は、本授業の成績に反映されます。<br>
・また、専修大学望月プロジェクト2014の研究のためにも使わさせていただきます。<br>
</p><br>

	<p>【問題画面のタブの例】</p>


<div id="wrapper">
	
	<div class="tabbox">
		<p class="tabs">
		<a href="#tab1" class="tab1" onclick="ChangeTab('tab1'); return false;">問1</a>
		<a href="#tab2" class="tab2" onclick="ChangeTab('tab2'); return false;">問2</a>
		<a href="#tab3" class="tab3" onclick="ChangeTab('tab3'); return false;">問3</a>
		<a href="#tab4" class="tab4" onclick="ChangeTab('tab4'); return false;">問4</a>
		<a href="#tab4" class="tab5" onclick="ChangeTab('tab5'); return false;">問5</a>
		<a href="#tab6" class="tab6" onclick="ChangeTab('tab6'); return false;">問6</a>
		<a href="#tab7" class="tab7" onclick="ChangeTab('tab7'); return false;">問7</a>
		<a href="#tab8" class="tab8" onclick="ChangeTab('tab8'); return false;">問8</a>
		<a href="#tab9" class="tab9" onclick="ChangeTab('tab9'); return false;">問9</a>
		<a href="#tab10" class="tab10" onclick="ChangeTab('tab10'); return false;">解答完了</a>
	</p>
<form onSubmit="return check()"><!--ここからformタグ開始-->
	<div id="tab1" class="tab">
	<p>問1</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>　
	</div>
	<div id="tab2" class="tab">
	<p>問2</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>
	<div id="tab3" class="tab">
	<p>問3</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>
	<div id="tab4" class="tab">
	<p>問4</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>
	<div id="tab5" class="tab">
	<p>問5</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>
	<div id="tab6" class="tab">
	<p>問6</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>
	<div id="tab7" class="tab">
	<p>問7</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>
	<div id="tab8" class="tab">
	<p>問8</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>
	<div id="tab9" class="tab">
	<p>問9</p><br>
	<p>選択肢</p>
	①<?php pulldown_month("q11",13); ?>　②<?php pulldown_month("q12",13); ?>
	</div>	
	<div id="tab10" class="tab">
	<br><br>
		<p>これで演習問題は終了です。<br>空欄や解答欄ずれがないかよく見直しましょう。<br>
		解答が終わった方は、以下の「解答完了」ボタンを押すと解答が完了します。<br>
		お疲れさまでした。</p>
		<input type="submit" value="解答完了">
	</div>


</div>


</form><!--ここまでformタグわろす-->

<script type="text/javascript"><!--
  // デフォルトのタブを選択
  ChangeTab('tab1');
  // --></script>
  </div>

  <br><br><br><br>
<a href="practice.php">演習開始</a><br />


</body>
</html>