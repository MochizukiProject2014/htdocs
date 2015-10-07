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
div.exspace{ background:#ffffff; padding:10px; border:1px solid #000000; margin-left: 20px; margin-right: 20px; }
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
div.tab { height: 700px; width: 792px; overflow: auto; clear: left; }
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
		<div class="selectspace">ア：%d　　イ：&c　　ウ：&lf　　エ：%f　　オ：%c　　カ：int<br>キ：&f　　ク：double　　ケ：a　　コ：&d　　サ：%lf　　シ：char</div><br/>
		<?php result_check1($user_id); ?>

		<br><br>解説：<br/>
		<div class="exspace">
①~③がある行では、宣言されていない変数x,y,zに対して代入が行われているので、それぞれの直前に「データ型」を書いて、「初期化」の形にすることがわかる。そして、コンソールを見ると「5」「5.400000」「a」が出力されていることから、「整数」「小数」「文字」が必要なことがわかるので①～③は「整数型」「浮動小数点型」「文字型」のデータ型をそれぞれ使う必要がある。<br>
①の後には「x = 5;」と続いているので整数型で初期化されている。整数型のデータ型は「int」なので、答えは「カ：int」となる。<br>
同じように②の後には「y = 5.4;」と続いているので浮動小数点型で初期化されている。浮動小数点型のデータ型は「double」なので答えは「ク：double」。<br>
③は「z = ‘a’;」なので、文字型で初期化されている。よって答えは「シ：char」。<br>
④~⑥はprintf内にあり、「”」で囲まれた外側には、「x,y,z」と変数名が続いていることから、④~⑥には変換指定文字が入ることが分かる。それぞれ、変数の型に適した変換指定文字を入れよう。<br>
④にはxに対応した変換指定文字を入れよう、xは①でint型で初期化しているので、int型の変換指定文字「%d」を入れればよい。よって答えは「ア：%d」。<br>
⑤にはyに対応した変換指定文字を入れる。yはこの問題ではdouble型なのでdouble型の変換指定文字「%f」を入れよう。よって答えは「エ：%f」。
選択肢サの「%lf」はscanfで使う変換指定文字だから間違えないように気を付けよう。<br>
	⑥にはｚに対応した変換指定文字を入れる。zはこの問題ではchar型なのでchar型の変換指定文字「%c」を入れよう。よって答えは「オ：%c」。<br></div>


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
		<div class="selectspace">ア：int　　イ：scanf　　ウ：%f　　エ：%d　　オ：else　　カ：x*3=x<br>キ：printf　　ク：x*3　　ケ：xを3倍すると%xです。　　コ：&x<br>サ：x=x*3　　シ：x　　ス：xを3倍すると%dです。　セ：&d</div><br/>
		<?php result_check2($user_id); ?>

		<br><br>解説：<br/>
		<div class="exspace">
まず問題文を見てみると「入力した数字を三倍して出力するプログラム」と書かれているので、入力ができるようなプログラムを書く必要があることがわかる。入力を行うためのプログラムは「scanf文」である。ここでプログラムを見てみると「scanf文」がどこにも使用されていないのでどこかで「イ：scanf」を使うことがわかる。そして、scanfが入ると考えられるのは①のみなので、①の答えは「イ：scanf」となる。<br>
そしてscanf文内にはすでに「”%d”」が書かれていることから、②には「&変数名」が入ることが分かる。このプログラム内で宣言されている変数は変数xしかないため②の答えは「コ：&x」となる。printf文と違い、変数名の前に「&」をつける必要があるので気を付けよう。<br>
③には数式が入る。このプログラムは問題文にもあるように「入力した数字を三倍して出力するプログラム」である。よって入力した変数、つまり変数xを3倍してxに代入すればよい。なので、答えは「サ：x=x*3」となる。<br>
	④はprintf文内にある。コンソールを見ると「xを３倍すると9です。」と出力されている。この問題は「入力した数字を三倍して出力するプログラム」で、④の後には「,x」と続いているので、④には「xを3倍すると（xの変換指定文字）です。」という風に書けばよい。この問題では変数xはint型なので変換指定文字は「%d」。よって答えは「ス：x を３倍すると%d です。」となる。似てる選択肢として「ケ：xを３倍すると%xです。」とあるが、「%x」はひっかけなので注意しよう。<br></div>
 


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
		<div class="selectspace">ア：if　　イ：else　　ウ：||　　エ：&　　オ：else if<br>カ：!=　　キ：&&　　ク：==　　ケ：|　　コ：for</div><br/>
		<?php result_check3($user_id); ?>

		<br><br>解説：<br/>
		<div class="exspace">
問題文を見ると「入力した数字が0以上かつ10以下なら「xは0以上かつ10以下です。」と出力」書かれている。このことからxに入力された値によって出力結果を変えるようなプログラムにしたいことが分かる。出力結果を変えたいということは条件分岐の「if文」を使えばよいので、①の答えは「ア：if」となる。<br>
	if文の条件式を見てみると「x &gt;= 0 　②　 x &lt;= 10」となっている。②を挟んで左側が「xが0以上」、右側が「xが10以下」という条件になっている。問題文を見ると「xは0以上かつ10以下」となる条件を作らなければならないので、左側と右側が両方とも真の時にif文が実行されるようなプログラムにしよう。②には「かつ」を表す論理演算子を書けばよい。「かつ」を表す論理演算子は「&&」なので、答えは「キ：&&」となる。ちなみに「ウ：||」は「または」を表す論理演算子である。<br></div>


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
		<div class="selectspace">ア：else　　イ：!=　　ウ：if else　　エ：%　　オ：if<br>カ：else if　　キ：=　　ク：<=　　ケ：/　　コ：==</div><br/>
		<?php result_check4($user_id); ?>

		<br><br>解説：<br/>
		<div class="exspace">
変数yearに入力された値がうるう年かどうかを判定し出力するプログラムにしたいので、if文を使う必要がある。まずはうるう年の条件を確認しよう。<br>
うるう年は<br>
「1．4で割り切れる年はうるう年<br>
　2．4で割り切れる年の中でも100で割り切れる年はうるう年ではない<br>
　3．100で割り切れる年の中でも400で割り切れる年はうるう年<br>
　4．それ以外はうるう年ではない」<br>
という条件だ。<br>
これは<br>
「1．400で割り切れる年はうるう年<br>
　2．400で割り切れない年の中で、100で割り切れる年はうるう年ではない<br>
　3．100で割り切れない年の中で、4で割り切れる年はうるう年<br>
　4．それ以外はうるう年ではない」<br>
と言い換えることができる。<br>
この条件のように「前の条件に当てはまらないものの中で~」という条件にするとelse if文を使うことができ、条件を書きやすくなる。<br>
まず、①には一つ目の条件分岐が来るので、答えは「オ：if」となる。<br>
次に()内の条件を見てみると「year 　②　 400 　③　 0」と書いてある。うるう年の条件と次の行で出力される「うるう年です」という文から考えると、ここは「400で割り切れる年は」という条件にしたい。「400で割り切れる」ということは400で割った余りが0ということになる。C言語には割った時の余りを出す演算子「%」が存在する。よって、ここの条件式は「year % 400 ==0」という「yearを400で割った時の余りが0のとき」という式にすればよい。よって②の答えは「エ：%」③の答えは「コ：==」となる。<br>
④はうるう年の条件から考えると、8行目は「400で割り切れない年の中で～」、10行目は「100で割り切れない年の中で~」というような条件にしたい。「前の条件に当てはまらないものの中で~」という条件を作りたい時は「else if文」を使えばよい。よって④の答えは「カ：else if」となる。else if文の条件式の中身はさっきの②と③を使っているのですでに完成しているが、一度目を通しちゃんとあっているか確認しよう。<br>
	最後の⑤は「それ以外は～」という条件にすればよいので「それ以外」を表す「else」を入れよう。よって⑤の答えは「ア：else」となる。<br></div>


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
		<div class="selectspace">ア：i=1　　イ：i&gt1　　ウ：i=5　　エ：i&lt=6　　オ：i--<br>カ：i<=x　　キ：i++　　ク：i&ltx
		</div><br/>
		<?php result_check5($user_id); ?>

		<br><br>解説：<br/>
		<div class="exspace">
①~③はそれぞれfor文の条件式の中に入っていて、それぞれ「;」で区切られている。つまり①~③はそれぞれ、「①：初期化式」「②:継続条件式」「③:再初期化式」のプログラムを書けばよい。<br>
scanfが実行された段階では変数iには何も値が代入されていないので、初期化式で値を代入する必要がある。そして、for文の中には「sum=sum+i;」という数式があるので、変数sumにiを使って1から順番に足していることが分かるので、iには最初に1を代入すればよい。よって①の答えは「ア：i=1」となる。<br>
このプログラムは「1から入力された数字までの和を出力するプログラム」なので、繰り返す回数は入力された値、つまりxに代入された値と同じ回数繰り返せばよい。つまり「iがx以下の間繰り返す」という条件式にすればよいので、②の答えは「カ：i&lt;=x」となる。<br>
	iを使って1から順番に足しているので、再初期化式にはiを1ずつ増やすようなプログラムを書けばよいので、③の答えは「キ：i++」となる。<br></div>


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
		<div class="exspace">ア：break;　　イ：count==5　　ウ：for　　エ：while　　オ：return;<br>カ：1　　キ：0　　ク：count<=5　　ケ：count==6</div><br/>
		<?php result_check6($user_id); ?>

		<br><br>解説：<br/>
		<div class="selectspace">
プログラムを見るとprintfが一個しかなく、選択肢にprintfがないことから、コンソール通りの出力にするには本文のprintfを繰り返し出力しなければならず、繰り返し処理を行う必要があることが分かる。選択肢を見ると繰り返し処理ができるのはwhile文とfor文があるが、for文を使うには、初期化式・継続条件式・再初期化式の3つが必要なので、与えられた選択肢ではfor文を作ることができないので、「エ：while」を選択する必要がある。よって、①の答えは「エ：while」となる。②の答えは「カ：1」となる。while文の条件式に使うことができるのはイ、カ、キ、ク、ケの５つだが、「イ：count==5」「キ：0」「ケ：count==6」ではwhile文のループを１度も回すことができず、「ク：count&lt;5」ではループを4回しか回すことができない。「12345」を出力するには少なくともループを5回は回す必要があるので、「カ：1」を選択して無限ループを作る必要がある。よって、②の答えは「カ：1」となる。<br>
無限ループのままだとループを抜けることができないので、一定回数繰り返したあとループを抜け出すために、if文を使用してbreak文を呼び出しループを抜け出せるようにする必要がある。コンソールを見ると、1から順番に5まで出力を行っている。この出力は変数countを使って行っていることと、変数countにループするたび1が足されていることから、変数countを使用したif文の条件を考えればよいことが分かる。<br>
	出力の前にif文があるので、5まで出力してそのあとループを抜け出すには変数countが5より大きくなったときに抜け出せばよい。選択肢を見るとそれにあてはまる条件になっているのは「ケ：count==6」なので、これを使って5まで出力した後、変数countが6になり、出力を行う前にif文を使って抜け出すようにしよう。よって、③の答えは「ケ：count==6;」、④の答えは「ア：break;」となる。<br></div>

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
		<div class="exspace">ア：k&lti*3-1　　イ：i--　　ウ：k<8　　エ：i=0　　オ：k&lti*3-2<br>カ：i=4　　キ：k&lti*2-1　　ク：i=3　　ケ：i++　　コ：k&gt;i*i-9
		</div><br/>
		<?php result_check7($user_id); ?>


		<br><br>解説：<br/>
		<div class="exspace">
まず、出力されている「＊」の数は上から順番に7個、5個、3個、1個となっている。<br>
プログラムの8行目に改行の出力があり、コンソールには出力が4行分あることから、外側のループは4回まわす必要がある。<br>
内側のループの中には「＊」の出力があるため、コンソールの各行の「＊」の数だけ内側のループをまわす必要があり、その回数を③で調節する必要がある。内側のループの中では変数の値に変化があるのは変数kだけなので、ループの条件を、コンソールの1行目の出力のときは「k&lt;7」、2行目のときは「k&lt;5」、3行目のときは「k&lt;3」、4行目のときは「k&lt;1」となるようにしなければならない。このように継続条件式を変化させるには変数や数式をうまく使おう。<br>
内側の条件式に使えそうな選択肢は、「ア：k&lt;i*3-1」「オ：k&lt;i*3-2」「キ：k&lt;i*2-1」「コ：k>i*i-9」の4つとなっている。どれも右側に変数iを使用している。どの選択肢も変数iに何かをかけてそこからいくつか引いている式になっている。こういった数式から、k&lt;7,k&lt;5,k&lt;3,k&lt;1のようにだんだん少なくなっていくようにするには、変数iもだんだん少なくなっていく必要がある。<br>
ここで、一旦変数iの数値が変動する選択肢を見てみると「イ：i--」「ケ：i++」の二つだけとなり、減っていくのは「イ：i--」の方なので、外側のループの再初期化式で使う式は「イ：i--」となることが分かる。よって、②の答えは「イ：i--」となる。<br>
次に、もう一度出力を確認すると、4行分の「＊」を出力していることから、外側のループは4回繰り返すことが分かる。②の答えと継続条件式を見てみると、4回繰り返すためには初期化式で変数iに4を代入する必要がある。よって、①の答えは「カ：i=4」となる。<br>
	ここまで来たら、外側のループと内側のループの条件式を見比べて、k&lt;7,k&lt;5,k&lt;3,k&lt;1となっていくような選択肢を選ぼう。コンソールの1行目の出力を行っているとき変数iの値は4、そこから順番に3,2,1と減っていく形になっている、4,3,2,1と減っていく変数iを使って、7,5,3,1となるような式を使っている選択肢は「キ：k&lt;i*2-1」なので、③の答えは「キ：k&lt;i*2-1」となる。<br></div>




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
		<div class="selectspace">ア：a[i]　　イ：a[3]　　ウ：[5,6,1,2,3]　　エ：a[2]　　オ：{'5','6','1','2','3'}　　カ：a[4]<br>キ：a[5]　　ク：a[0]　　ケ：{5,6,1,2,3}　　コ：{a,b,c,d,e}　　サ：a[1]</div><br/>
		<?php result_check8($user_id); ?>

		<br><br>解説：<br/>
		<div class="exspace">
①の行では配列の初期化を行っている。int型で大きさが[5]の配列を正しい書き方で初期化している選択肢は「ケ：{5,6,1,2,3}」となるので、①の答えは「ケ：{5,6,1,2,3}」となる。ウはカッコが間違っている。オは「'」が余計。コはint型だから文字列は入らない。このようにそれぞれ間違っているので気を付けよう。<br>
	そして②の行はprintf文を使って、配列を呼び出して出力している。コンソールを見てみると「3」が出力されているので、さっき初期化した配列から3を呼び出そう。3は一番後ろの要素なので、一番後ろの要素を呼び出そう。配列の要素は一番最初の要素を0から数えるので、今回の場合、一番最後の要素を呼び出したい時は、0番目、1番目…と数えて4番目の要素になるので、②の答えは「カ：a[4]」となる。<br></div>


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
		<div class="selectspace">ア：[3][2]　　イ：[2][3]　　ウ：[6]　　エ：[1][2]　　オ：[2][1]　　カ：0<br>キ：1　　ク：2　　ケ：3　　コ：4　　サ：5　　シ：6</div><br/>
		<?php result_check9($user_id); ?>

		<br><br>解説：<br/>
		<div class="exspace">
まずは、二次元配列を初期化する。今回は{{1,2,3},{4,5,6}}この形で初期化したい。この二次元配列は大きさが3の配列を2つ持っているので、大きさの指定の仕方は[2][3]となる。よって、①の答えは「イ：[2][3]」となる。順番が逆の「ア：[3][2]」を選ばないように気を付けよう。<br>
二次元配列を呼び出して扱うときは、普通の配列と同じように0番目から要素を数える。今回、一つ目の出力は6で、出力の仕方が「printf("%d ",a[i][k]);」このプログラムなので、最初に初期化してある二次元配列から6を呼び出せるようにiとkに値を代入すればよい。6のある位置は「1番目の配列」の「2番目の要素」なので、iに1、kに2を代入すればよい。よって②の答えは「キ：1」、③の答えは「ク：2」となる。<br>
	「printf("%d",sum);」は、変数sumを出力していて、変数sumは「a[0][1] + a[　④　][　⑤　]」で計算されている。また、コンソールを見てみると6が出力されているので、数式を見て6になるように④と⑤の選択肢を選ぼう。a[0][1]は配列を見てみると、「0番目の配列」の「1番目の要素」なので、「2」になる。6=2+ ?なので、?にあてはまる「4」を呼び出せばいい。配列を見ると「4」は「1番目の配列」の「0番目の要素」なので、④の答えは「キ：1」、⑤の答えは「カ：0」となる。<br></div>


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