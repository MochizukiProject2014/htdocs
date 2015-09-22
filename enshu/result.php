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
<html lang="ja">
 <head>
 <meta charset="UTF-8">
 <title>演習問題ページ</title>
<script type="text/javascript"><!--
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
//--></script>

<style type="text/css"><!--
/* 表示領域全体 */
div#wrapper {  
    width: 800px;  
    margin: 0 auto;  
    text-align: left;  
    border: 3px solid #CC0000;  
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
p.tabs a.tab1 { background-color: #0CCCCC; color: white; }
p.tabs a.tab2 { background-color: #CC0CCC; color:white;}
p.tabs a.tab3 { background-color: #0CCCCC; color: white; }
p.tabs a.tab4 { background-color: #CC0CCC; color: white; }
p.tabs a.tab5 { background-color: #0CCCCC; color: white; }
p.tabs a.tab6 { background-color: #CC0CCC; color: white; }
p.tabs a.tab7 { background-color: #0CCCCC; color: white; }
p.tabs a.tab8 { background-color: #CC0CCC; color: white; }
p.tabs a.tab9 { background-color: #0CCCCC; color: white; }
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
div.tab { height: 800px; width: 800px; overflow: auto; clear: left; }
/*div#tab1 { border: 2px solid #0CCCCC;}
div#tab2 { border: 2px solid #CC0CCC;}
div#tab3 { border: 2px solid #0CCCCC;}
div#tab4 { border: 2px solid #CC0CCC;}
div#tab5 { border: 2px solid #0CCCCC;}
div#tab6 { border: 2px solid #CC0CCC;}
div#tab7 { border: 2px solid #0CCCCC;}
div#tab8 { border: 2px solid #CC0CCC;}
div#tab9 { border: 2px solid #0CCCCC;}
div#tab10 { border: 2px solid #CCCC0C;}*/
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
		<a href="#tab10" class="tab10" onclick="ChangeTab('tab10'); return false;">採点結果</a>
	</p>
	<form method="post" action="result_add_done.php" onSubmit="return check()"><!--ここからformタグ開始-->
	<div id="tab1" class="tab"><!--問題1-->
		<b>問1：①~⑥に当てはまるものを選択肢ア〜シから選んで、下のコンソールの出力結果となるようなプログラムにしよう。</b>
		<pre><div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	<u>　①　</u> x = 5;<br/>
	<u>　②　</u> y = 5.4;<br/>
	<u>　③　</u> z = 'a';<br/>
	printf("<u>　④　</u> <u>　⑤　</u> <u>　⑥　</u>",x,y,z);<br/>
	return 0;<br/>
}
		</div></pre>
		コンソール：<br/>
		<div class="consolespace">5 5.400000 a</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：%d　　イ：&c　　ウ：&lf　　エ：%f　　オ：%c　　カ：int　　キ：&f　　ク：double　　ケ：a　　コ：&d　　サ：%lf　　シ：char</div><br/>
		<?php result_check1($user_id); ?>
	</div>
		
	<div id="tab2" class="tab"><!--問題2-->
		<b>問2：①~④に当てはまるものを選択肢ア〜セから選んで、下のコンソールの出力結果となるようなプログラムにしよう。</b>
		<pre><div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int x;<br/>
	printf("数字を入力してください：");<br/>
	<u>　①　</u>("%d",<u>　②　</u>);<br/>
	<u>　③　</u>;<br/>
	printf("<u>　④　</u>",x);<br/>
	return 0;<br/>
}
		</div></pre>
		コンソール：<br/>
		<div class="consolespace">数字を入力してください：3<br/>xを3倍すると9です。</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：int　　イ：scanf　　ウ：%f　　エ：%d　　オ：else　　カ：x*3=x　　キ：printf　　ク：x*3　　ケ：xを3倍すると%xです。　　コ：&x　　サ：x=x*3　　シ：x　ス：xを3倍すると%dです。　セ：&d</div><br/>
		<?php result_check2($user_id); ?>
	</div>
	
	<div id="tab3" class="tab"><!--問題3-->
		<b>問3：①〜②に当てはまるものを選択肢ア〜コから選んで、入力した数字が0以上かつ10以下なら「xは0以上かつ10以下です。」と出力するプログラムにしよう。</b>
		<pre><div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int x;<br/>
	printf("数字を入力してください：");<br/>
	scanf("%d",&x);<br/>
	<u>　①　</u>(x >= 0 <u>　②　</u> x <= 10){<br/>
		printf("xは0以上かつ10以下です。");<br/>
	}<br/>
	return 0;<br/>
}
		</div></pre>
		コンソール：<br/>
		<div class="consolespace">数字を入力してください：3<br/>xは0以上かつ10以下です。</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：if　　イ：else　　ウ：||　　エ：&　　オ：else if　　カ：!=　　キ：&&　　ク：==　　ケ：|　　コ：for</div><br/>
		<?php result_check3($user_id); ?>
	</div>
	
	<div id="tab4" class="tab"><!--問題4-->
		<b>問4：①~⑤に当てはまるものを選択肢ア〜コから選んで、変数yearに入力した数値がうるう年かどうかを出力するプログラムにしよう。</b><br/>
		(うるう年の条件)<br/>
		・4で割り切れる年はうるう年<br/>
		・4で割り切れる年でも100で割り切れる年はうるう年ではない<br/>
		・100で割り切れる年でも400で割り切れる年はうるう年<br/>
		<pre><div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int year;<br/>
	printf("西暦を入力してください：");<br/>
	scanf("%d",&year);<i>//コンソールから2015を入力する</i><br/>
	<u>　①　</u>(year <u>　②　</u> 400 <u>　③　</u> 0){<br/>
		printf("うるう年です。");<br/>
	}<u>　④　</u>(year <u>　②　</u> 100 <u>　③　</u> 0){<br/>
		printf("うるう年ではありません。");<br/>
	}<u>　④　</u>(year <u>　②　</u> 4 <u>　③　</u> 0){<br/>
		printf("うるう年です。");<br/>
	}<u>　⑤　</u>{
		printf("うるう年ではありません。")<br/>
	}<br/>
	return 0;<br/>
}
		</div></pre>
		コンソール：<br/>
		<div class="consolespace">西暦を入力してください：2015<br/>うるう年ではありません。</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：else　　イ：!=　　ウ：if else　　エ：%　　オ：if　　カ：else if　　キ：=　　ク：<=　　ケ：/　　コ：==</div><br/>
		<?php result_check4($user_id); ?>
	</div>
	
	<div id="tab5" class="tab"><!--問題5-->
		<b>問5：①~③に当てはまるものを選択肢ア〜クから選んで、1から入力された数字までの和を出力するプログラムにしよう。</b>
		<pre><div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int i,x,sum=0;<br/>
	printf("数字を一つ入力してください：");<br/>
	scanf("%d",&x);<br/>
	for(<u>　①　</u>; <u>　②　</u>; <u>　③　</u>){<br/>
		sum=sum+i;<br/>
	}<br/>
	printf("1から%dまでの和 = %d", x, sum);<br/>
	return 0;<br/>
}
		</div></pre>
		コンソール：<br/>
		<div class="consolespace">数字を一つ入力してください 5<br/>1から5までの和 = 15</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：i=1　　イ：i&gt1　　ウ：i=5　　エ：i&lt=6　　オ：i--　　カ：i<=x　　キ：i++　　ク：i&ltx
		</div><br/>
		<?php result_check5($user_id); ?>
	</div>
	
	<div id="tab6" class="tab"><!--問題6-->
		<b>問6：①~④に当てはまるものを選択肢ア〜ケから選んで、下のコンソールの出力結果となるようなプログラムにしよう。</b>
		<pre>
		<div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int count = 1;<br/>
	<u>　①　</u>(<u>　②　</u>){<br/>
		if(<u>　③　</u>){<br/>
			<u>　④　</u>)
		}<br/>
		printf("%d",count);<br/>
		count++;
	}<br/>
	return 0;<br/>
}		</div>
		</pre>
		コンソール：<br/>
		<div class="consolespace">12345</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：break;　　イ：count==5　　ウ：for　　エ：while　　オ：return;　　カ：1　　キ：0　　ク：count<=5　　ケ：count==6</div><br/>
		<?php result_check6($user_id); ?>
	</div>
	
	<div id="tab7" class="tab"><!--問題7-->
		<b>問7：①~③に当てはまるものを選択肢ア〜コから選んで、下のコンソールの出力結果のように「＊」を出力するプログラムにしよう。</b>
		<pre>
		<div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int i,k;<br/>
	for(<u>　①　</u>; i>0 ;<u>　②　</u>){<br/>
		for(k=0; <u>　③　</u>; k++){<br/>
			printf("＊");<br/>
		}<br/>
		printf("\n");<br/>
	}<br/>
	return 0;<br/>
}		</div>
		</pre>
		コンソール：<br/>
		<div class="consolespace">＊＊＊＊＊＊＊<br/>＊＊＊＊＊<br/>＊＊＊<br/>＊</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：k&lti*3-1　　イ：i--　　ウ：k<8　　エ：i=0　　オ：k&lti*3-2　　カ：i=4　　キ：k&lti*2-1　　ク：i=3　　ケ：i++　　コ：k&gt;i*i-9
		</div><br/>
		<?php result_check7($user_id); ?>
	</div>
	
	<div id="tab8" class="tab"><!--問題8-->
		<b>問8：①~②に当てはまるものを選択肢ア〜サから選んで、下のコンソールの出力結果となるようなプログラムにしよう。</b>
		<pre>
		<div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int a[5] = <u>　①　</u>;<br/>
	printf("%d",<u>　②　</u>);<br/>
	return 0;<br/>
}		</div>
		</pre>
		コンソール：<br/>
		<div class="consolespace">3</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：a[i]　　イ：a[3]　　ウ：[5,6,1,2,3]　　エ：a[2]　　オ：{'5','6','1','2','3'}　　カ：a[4]　　キ：a[5]　　ク：a[0]　　ケ：{5,6,1,2,3}　　コ：{a,b,c,d,e}　　サ：a[1]</div><br/>
		<?php result_check8($user_id); ?>
	</div>
	
	<div id="tab9" class="tab">
		<b>問9：①~⑤に当てはまるものを選択肢ア〜シから選んで、下のコンソールの出力結果となるようなプログラムにしよう。</b>
		<pre>
		<div class="codespace">
#include <stdio.h><br/>
int main(void){<br/>
	int a<u>　①　</u> = {{1,2,3},{4,5,6}};<br/>
	int i = <u>　②　</u>;<br/>
	int k = <u>　③　</u>;<br/>
	printf("%d",a[i][k]);<br/>
	int sum = a[0][1] + a[<u>　④　</u>][<u>　⑤　</u>];<br/>
	printf("%d",sum);<br/>
	return 0;<br/>
}		</div>
		</pre>
		コンソール：<br/>
		<div class="consolespace">6 6</div><br/>
		選択肢：<br/>
		<div class="selectspace">ア：[3][2]　　イ：[2][3]　　ウ：[6]　　エ：[1][2]　　オ：[2][1]　　カ：0　　キ：1　　ク：2　　ケ：3　　コ：4　　サ：5　　シ：6</div><br/>
		<?php result_check9($user_id); ?>
	</div>

	<div id="tab10" class="tab">
	<br><br>
	<?php result($user_id); ?>
		
	</div>


</div>


</form><!--ここまでformタグわろす-->

<script type="text/javascript"><!--
  // デフォルトのタブを選択
  ChangeTab('tab1');
  // --></script>
  </div>
</body>


</html>