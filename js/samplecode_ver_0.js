//----------------------１章--------------------------------

var sample111 = '#include <stdio.h>int main(void){printf("Hello World!");return 0;}';

var sampleMatome1 = '#include <stdio.h>int main(void){printf("Hello World!");return 0;}';

//----------------------２章--------------------------------

var sample211 = '#include <stdio.h>int main(void){int x;double y,z;return 0;}';

var sample212 = '#include<studio.h>int main(void){int x;x = 10;return 0;}'

var sample221 ='#include <stdio.h>int main(void){int x;scanf("%d",&x);return 0;}';

var sample232 = '#include <stdio.h>int main(void){int x,y,z;scanf("%d %d",&x,&y);z=x+y;return 0;}';

var sample241 = '#include <stdio.h>int main(void){int x;scanf("%d",&x);printf("%d",x);return 0;}';

var sampleMatome2 ='#include <stdio.h>int main(void){int x;scanf("%d",&x);x=x*3;printf("%d",x);return 0;}';

//----------------------３章--------------------------------

var sample311 = '#include <stdio.h>int main(void){int x = 32;if(x>20){printf("xは20より大きいです");}return 0;}';

var sample312 = '#include <stdio.h>int main(void){int x = 12;int y = 20;if(x<y){printf("xはyより小さいです");}return 0;}';

var sample313 = '#include <stdio.h>int main(void){int x;scanf("%d",&x);if(x>=0){printf("xは0以上です");}return 0;}';

var sample314 = '#include <stdio.h>int main(void){double height,weight,bmi;printf("あなたの身長(m)を入力してください。");scanf("%lf",&height);printf("あなたの体重(kg)を入力してください。");scanf("%lf",&weight);bmi = weight / (height * height);if(bmi >= 18.5 && bmi <= 25.0){printf("あなたは適正です。");}return 0;}';

var sample321 ='#include <stdio.h>int main(void){ int x;printf("あなたの年齢を入力してください。");scanf("%d",&x);if(x>=20){printf("成人");}else{printf("未成年");}return 0;}';

//このコードはエラーにより動作確認はしてない
var sample331 = '#include <stdio.h>int main(void){int score;scanf("%d",&score);if(score>=90){printf("良");}else if(score>=60){printf("可");}else if(score<=40){printf("再試験");}else{printf("不可");}return 0;}';

var sampleMatome3 = '#include <stdio.h>int main(void){double height,weight,bmi;printf("あなたの身長(m)を入力してください。");scanf("%lf",&height);printf("あなたの体重(kg)を入力してください。");scanf("%lf",&weight);bmi = weight / (height * height);if(bmi >= 18.5 && bmi <= 25.0){printf("あなたは適正です。");}else if(bmi > 25.0){printf("あなたは太り気味です");}else{printf("あなたはやせ気味です");}return 0;}';

//-----------------------４章-------------------------------

var sample411 = 
'#include <stdio.h>int main(void){int a;for(a=1; a<=3; a++){printf("わんわん\n");}return 0;}';

var sample412 =
'#include <stdio.h>int main(void){int b;for(b=3; b>=1; b--){printf("にゃんにゃん\n");}return 0;}';

var sample421 =
'#include <stdio.h>int main(void){int a;while(1){printf("数字を入力：");scanf("%d",&a);if(a % 2 == 0){printf("終了");break;}printf("もう1回");}return 0;}';

var sample422 =
'#include <stdio.h>int main(void){int a,ans = 0;while(ans <= 100){printf("数字を入力:");scanf("%d",&a);ans += a;}printf("100を超えました。%dです。",ans);return 0;}';

var sample431 =
'#include <stdio.h>int main(void){int x,i,k;for(i=1;i<=9;i++){for(k=1; k<=9;k++){x=i*k;printf("%d ",x);}printf("\n");}return 0;}';

var sampleMatome41 =
'#include <stdio.h>int main(void){int i,sum,count;i = 0;sum = 0;count = 0;printf("入力した数値を足していきます、0を入力したら終了します\n");while(1){printf("足したい数を入力して下さい\n");scanf("%d", &i);sum +=i;count++;printf("現在の合計は%dです\n", sum);printf("現在、%d回足しましたn", count);if(i==0){break;}}printf("合計は%dです",sum);return 0;}';

var sampleMatome42 =
'#include <stdio.h>int main(void){int x,i,k;int y=1;scanf("%d",&x);for(i=1;i<=x;i++){for(k=1;k<=y;k++){printf("*");}y++;printf("\n");}return 0;}';

//-----------------------５章-------------------------------

var sample511=
'#include <stdio.h>int main(void){int a[5] = {1, 2, 3, 4, 5};int i,sum=0;for(i=0; i<5; i++){sum += a[i];}printf("%d", sum);return 0;}';

var sample512=
'#include <stdio.h>int main(void){int a[5] = {1, 2, 3, 4, 5};int b[5];int i;for(i=0; i<5; i++){b[i] = a[4-i];}for (i=0; i<5; i++) {printf("b[%d] = %d\n",i, b[i]);}return 0;}';

var sample521=
'#include <stdio.h>int main(void){int x,y;int data[3][3]={{1,2,3},{4,5,6},{7,8,9}};scanf("%d %d",&x,&y);printf("%d",data[x][y]);return 0;}';

var sample522=
'#include <stdio.h>int main(void){int data[4][3]={{1,2,3},{4,5,6},{7,8,9},{10,11,12}};printf("%d",data[ 3 ][ 1 ]);return 0;}';

var sampleMatome5 =
'#include <stdio.h>int main(void){int a[10] = {1,4,7,8,3,0,2,5,9,6};int i,b;for(i = 0; i < 4; i ++){printf("数字を入力してください：");scanf("%d",&b);printf("%d\n",a[b]);}}';

//-----------------------追加問題２章-------------------------------

var sample2111=
'#include <stdio.h>int main(void){char z;return 0;}';

var sample2112=
'#include <stdio.h>int main(void){int x,y;return 0;}';

var sample2121=
'#include <stdio.h>int main(void){double y;y=3.2;return 0;}';

var sample2122=
'#include <stdio.h>int main(void){char a;a=\'s\';return 0;}';

var sample2131=
'#include <stdio.h>int main(void){char x = \'y\';return 0;}';

var sample2132=
'#include <stdio.h>int main(void){int x=3,y=7;return 0;}';

var sample2211=
'#include <stdio.h>int main(void){double x;scanf("%lf",&x );return 0;}';

var sample2212=
'#include <stdio.h>int main(void){char x;scanf("%c",&x );return 0;}';

var sample2221=
'#include <stdio.h>int main(void){char x;scanf("%c",&x );return 0;}';

var sample2222=
'#include <stdio.h>int main(void){char x;double y;scanf("%c %lf",&x,&y );return 0;}';

var sample2311=
'#include <stdio.h>int main(void){int x;scanf("%d",&x);x=x*x;return 0;}';

var sample2312=
'#include <stdio.h>int main(void){int x;scanf("%d",&x);x=x*3/2;return 0;}';

var sample2321=
'#include <stdio.h>int main(void){int x,y;scanf("%d",&x);y=x%3;return 0;}';

var sample2322=
'#include <stdio.h>int main(void){int x;double y;scanf("%d",&x); y=x-3.5;return 0;}';

var sample2411=
'#include <stdio.h>int main(void){double x;scanf("%lf",&x);printf("%f",x);return 0;}';

var sample2412=
'#include <stdio.h>int main(void){char x;scanf("%c",&x);printf("%c",x);return0;}';

var sample2421=
'#include <stdio.h>int main(void){char x,y,z;x=\'k\';y=\'n\';z=\'g\';printf("%c%c%c",x,y,z);return 0;}';

var sample2422=
'#include <stdio.h>int main(void){int x,y;x=1;y=3;printf("%d \n %d",x,y);return 0;}';

//-----------------------追加問題３章-------------------------------

var sample3111=
'#include <stdio.h>int main(void){int x = 3;if(x < 15){printf("xは15より小さいです。");}return 0;}';

var sample3112=
'#include <stdio.h>int main(void){int x = 30;if(x >= 30){printf("xは30以上です。");}return 0;}';

var sample3121=
'#include <stdio.h>int main(void){int x = 93;int y = 56;if(x > y){printf("xはyより大きいです。");}return 0;}';

var sample3122=
'#include <stdio.h>int main(void){int x = 3;int y = 20;if(x <= y){printf("xはy以下です。");}return 0;}';

var sample3131=
'#include <stdio.h>int main (void){int x;scanf("%d", &x);if(x == 0){printf("xは0と等しいです。");}return 0;}';

var sample3132=
'#include <stdio.h>int main (void){int x = 3;int y = 9;if(x != y){printf("xとyは異なります");}return 0;}';

var sample3141=
'#include <stdio.h>int main(void){int x = 150;int y = 165;if(x == 150 && y == 165){printf("xは%dcm・yは%dcmです。" ,x,y);}return 0;}';

var sample3142=
'#include <stdio.h>int main(void){int x = 100;int y = 100;if(x == 100 || y == 100){printf("xかyに100点はいます。");}return 0;}';

var sample3211=
'#include <stdio.h>int main(void){int x;int y;printf("xの年齢を入力してください。");scanf("%d",&x);printf("yの年齢を入力してください。");scanf("%d",&y);if(x>=20 && y>=20){printf("xもyも成人です。");}else{printf("少なくとも片方は未成年です。");}return 0;}';

var sample3212=
'#include <stdio.h>int main(void){int x;int y;printf("xの年齢を入力してください。");scanf("%d",&x);printf("yの年齢を入力してください。");scanf("%d",&y);if(x>=20 || y>=20){printf("少なくともどちらか片方は成人です。");}else{printf("xもyも未成年です。");}return 0;}';

var sample3311=
'#include <stdio.h>int main(void){int score;scanf("%d" ,&score);if(score <= 100 && score >= 60){printf("合格");}else if ( score >= 0 && score < 60){printf("不合格");}else{printf("その点数はありえません。");}return 0;}';

var sample3312=
'#include <stdio.h>int main(void){double size;scanf("%lf",&size);if(size >= 23.5 && size < 24.5){printf("Sサイズです。");}else if (size >= 24.5 && size < 25.5){printf("Mサイズです。");}else if (size >= 25.5 && size <= 26.5){printf("Lサイズです。");}else{printf("そのサイズはお取り扱いしておりません。");}return 0;}';

//-----------------------追加問題４章-------------------------------
var sample4111=
'int main(void){int a;for(a=1; a<=3; a++){printf("わんわん\n");printf("現在%d回繰り返しました\n",a);}return 0;}';

var sample4112=
'int main(void){int a;for(a=2; a<=10; a＝a+2){printf("%d",a);}}';

var sample4121=
'int main(void){int b;for(b=3; b>=0; b--){printf("にゃんにゃん\n");printf("あと%d回繰り返します",b-1);}return 0;}';

var sample4122=
'int main(void){double x;int y,i;x=0;for(i=1; i<=4; i++){scanf("%d",&y);x=x+y;}x=x/4;printf("平均値は%dです",x);return 0;}';

var sample4211=
'#include <stdio.h>int main(void){int a;while(1){scanf("%d"&a);if(a>100){break;}}printf("100より大きい値が入力されました");return 0;}';

var sample4212=
'#include <stdio.h>int main(void){int i, x=0;while(1){scanf("%d"&i);if(i=0){break;}x=x+i;}printf("%d"x);return 0;}';

var sample4221=
'#include <stdio.h>int main(void){int i;i=0;while(i<3){printf("わんわん\n");a++;}return 0;}';

var sample4222=
'#include <stdio.h>int main(void){int a,x;a=1while(a>=9){x=2*aprintf("%d",x);a++;}return 0;}';

var sample4311=
'#include <stdio.h>int main(void){int x,i,j;for(i=0;i<=9;i++){for(j=0; j<=i;j++){printf("%d ",j);}printf(“\n”);}return 0;}';

var sample4312=
'#include <stdio.h>int main(void){int i,j;for(i=1;i<=5;i++){for(j=1; j<=5;j++){if(i==j){printf("*");}else{printf("・");}}printf("\n");}return 0;}';

//-----------------------追加問題５章------------------------------

var sample5111=
'#include <stdio.h>int main(void){int a[3] = {3,6,9};return 0;}';

var sample5112=
'#include <stdio.h>int main(void){int a[5] = {5,4,3,2,1};printf("%d",a[0]);return 0;}';

var sample5121=
'#include <stdio.h>int main(void){int a[5] = {2,4,6,8,10};int i;for (i=0; i<5; i++) {printf(" %d", b[i]);}}';

var sample5122=
'#include <stdio.h>int main(void){int x[3];int i;for (i=0; i<3; i++) {scanf("%d",&x[i]);}}'

var sample5211=
'#include <stdio.h>int main(void){int[2][3]={{1,2,3},{4,5,6}};return 0;}';

var sample5212=
'#include <stdio.h>int main(void){int x[2][2];int i,j;for(i=0;i<2;i++){for(j=0;j<2;j++){scanf("%d",&x[i][j]);}}return 0;}';

var sample5221=
'#include <stdio.h>int main(void){int x[2][3]={{1,2,3}{4,5,6}}int i,j;for(i=0;i<2;i++){for(j=0;j<3;j++){printf("%d",x[i][j]);}}return 0;}';

var sample5222=
'#include <stdio.h>int main(void){int x[2][3]={{105,38,608}{42,22,201}};int i,j,k,;double l;l=0;for(i=0;i<3;i++){scanf("%d %d",&j,&k);l=l+x[i][j];}l=l/3printf(“%d”,l);return 0;}';

//--------------------------------------------------------------------

var Exsample111 ='line(1);line(2);line(3);ANIME_printf("Hello World!");setPrintf("Hello World!");line(4);line(5)';
var Exsample211 ='line(1);line(2);line(3);ANIME_sengen("int","x");line(4);ANIME_sengen("double","y");line(5);ANIME_sengen("char","z");line(6);ANIME_sengen("int","kengo");line(7);line(8)'
var Exsample221 ='line(1);line(2);line(3);ANIME_sengen("int","x");line(4);ANIME_scanf();setPrintf(100);ANIME_dainyu("x","100");line(5);line(6)';
var Exsample231 ='line(1);line(2);line(3);ANIME_sengen_dainyu("int","x","5");line(4);ANIME_enzan_dainyu("x",["x","*","3"],"15");line(5);line(6)';
var Exsample241 ='line(1);line(2);line(3);ANIME_sengen("int","x");line(4);ANIME_dainyu("x","3");line(5);ANIME_printf(["xは","%d","です"],["x"]);setPrintf("xは3です");line(6);line(7)';
var Exsample311 ='line(1);line(2);line(3);ANIME_sengen_dainyu("int","x","3");line(4);line(5);ANIME_printf("xは5より小さいです");setPrintf("xは5より小さいです");line(6);line(7);line(8)';
var Exsample312 ='line(1);line(2);line(3);ANIME_sengen("int","x");line(4);ANIME_scanf();setPrintf(5);ANIME_dainyu("x","5");line(5);line(6);ANIME_printf("xは０か５です");setPrintf("xは０か５です");line(7);line(8);line(9);line(10);line(11);line(12)';

//var text_ex = document.getElementById("com");
//var setPrintf(document.getElementById("console");

var ex_111 = new Array();
ex_111.push("setIntr(\"これがプログラムじゃ。じゃあさっそく、動かしてみるぞい\")");
ex_111.push("line(3);ANIME_sengen(\"int\",\"r\");line(4);ANIME_sengen(\"int\",\"S\");ANIME_sengen(\"int\",\"L\")");
ex_111.push("line(5);ANIME_scanf();setIntr(\"ここでわしが、右の白い四角に、キーボードから半角で31と入れてみるぞい。\");setPrintf(\"31\")");
ex_111.push("line(6);ANIME_enzan_dainyu(\"S\", [\"r\" , \"*\", \"r\", \"*\", \"3.14\"],3017.540000);line(7);ANIME_printf([\"面積は\", \"%d\", \"平方cmです\"] , [\"S\"]);setPrintf(\"面積は3017.540000平方cmです\");line(8);ANIME_enzan_dainyu(\"L\",[\"r\" , \"*\", \"2\", \"*\", \"3.14\"],194.680000);line(9);ANIME_printf([\"円周は\", \"%d\", \"cmです\"] , [\"S\"]);setPrintf(\"円周は194.680000です\")");
ex_111.push("setIntr(\"どうじゃ？ちゃんと面積と周の長さが求まったじゃろう。\")");
ex_111.push("setIntr(\"他の数字を入れてもちゃんと求められるぞい。もし自分で好きな数字を入れてみたかったら、もういちど実行してみるんじゃ\")");
ex_111.push("example_end();"); //+次のストーリーに画面遷移させるボタンを出現させる（まだページで来てないと思うので割愛）
//ここで「もう一度説明を聞く」「プログラムを実行してみる」の２つのボタンを出現させる？←ただのメモ書き・提案なので無視して下さい



var ex_211 = new Array();
ex_211.push("setIntr(\"それじゃあボクの作ったプログラムを説明していくにゃ。\")");
ex_211.push("line(3);setIntr(\"イントエックス！……って読むにゃ。\")");
ex_211.push("ANIME_sengen(\"int\",\"x\")");
ex_211.push("setIntr(\"これを書くとint型のxくんを呼べるにゃ。\")");
ex_211.push("setIntr(\"intというのはこの変数の種類を表していて、血液型みたいなもんにゃ。\")");
ex_211.push("setIntr(\"この型によって書ける文字の種類が違うにゃ。int型は整数が書けるにゃ。\")");
ex_211.push("line(4);setIntr(\"たとえばこれは、ダブルワイ！double型は実数が書けるにゃ。\")");
ex_211.push("ANIME_sengen(\"double\",\"y\")");
ex_211.push("line(5);setIntr(\"キャラゼット！！char型は半角英数が１文字書けるにゃ。\")");
ex_211.push("ANIME_sengen(\"char\",\"z\")");
ex_211.push("line(6);setIntr(\"この他にも、好きな名前の変数を呼べるにゃ。int a;でa君、int kengo;でkengo君という名前の変数を呼べるにゃ。もしわからなくなったら辞書の変数の項を見るにゃ。\")");
ex_211.push("ANIME_sengen(\"int\",\"kengo\")");
ex_211.push("setIntr(\"なんとなくでもわかったら、次は自分で書いてみるにゃ！\")");
ex_211.push("example_end()"); //+次のストーリーに画面遷移させるボタンを出現させる（まだページで来てないと思うので割愛）

//---------------------------------------------
var ex_212 = new Array();
ex_212.push("line(3);setIntr(\"まずはさっき教えたみたいにint型のxくんとyくんを宣言してみるにゃ\")");
ex_212.push("ANIME_sengen(\"int\",\"x\");line(4);ANIME_sengen(\"int\",\"y\")");
ex_212.push("line(5);setIntr(\"xくんに「5」という数を覚えてもらう事にするにゃ。このときは、「x = 5」と書くにゃ。これを「xに5を代入する」と言うにゃ。\")");
ex_212.push("ANIME_dainyu(\"x\",5)");
ex_212.push("line(6);setIntr(\"「y=x」と書く事も出来るにゃ！これは、「y=5」と同じ意味にゃ。\")");
ex_212.push("setIntr(\"なんでかって？さっき「x = 5」でxに5を代入したことを思い出してほしいにゃ！これでyとxは同じ数になるにゃ。\")");
ex_212.push("ANIME_dainyu(\"y\",\"x\")");
ex_212.push("setIntr(\"なんとなくでもわかったら、次は自分で書いてみるにゃ！\")");
ex_212.push("example_end()"); //+次のストーリーに画面遷移させるボタンを出現させる（まだページで来てないと思うので割愛）

//---------------------------------------------
var ex_213 = new Array();
ex_213.push("setIntr(\"さっき教えたみたいに、次は実数を代入してみるにゃ。\")");
ex_213.push("setIntr(\"それと実は、変数は宣言と代入を一度に行う事が出来るにゃ。それを「初期化」というにゃ！\")");
ex_213.push("line(3);setIntr(\"問題の通り、3.5を変数に代入したいから、int型のaくんに代入してみるにゃ。\")");
ex_213.push("ANIME_sengen_dainyu(\"int\",\"a\",3.5)");
ex_213.push("setIntr(\"…あれ？3.5じゃなくて3が入ってしまったにゃ？\")");
ex_213.push("setIntr(\"そうなのにゃ、int型には整数しか入らないから、実数を代入すると小数点以下は切り捨てちゃうのにゃ！\")");
ex_213.push("line(4);setIntr(\"じゃあ次は、double型の変数を初期化して代入してみるにゃ！前にも言ったと思うけど、double型は実数が書けるにゃ。\")");
ex_213.push("ANIME_sengen_dainyu(\"double\",\"b\",3.5)");
ex_213.push("setIntr(\"bくんには、3.50000って数字が入ったにゃ。これで正解にゃあ〜！\")");
ex_213.push("example_end()"); //+次のストーリーに画面遷移させるボタンを出現させる（まだページで来てないと思うので割愛）

//---------------------------------------------
var ex_221 = new Array();
ex_221.push("setIntr(\"まずコンソールの説明をするにゃ！画面の右下にある白い四角がコンソールだにゃ。\")");
ex_221.push("setIntr(\"ここは、「入力」とか、「出力」を行うところだにゃ。今回は「入力」について教えるにゃ！\")");
ex_221.push("setIntr(\"「入力」っていうのは、プログラムを実行しているときに変数に値を代入することだにゃ。\")");
ex_221.push("line(3);setIntr(\"まだよくわからないと思うから、実際に動かしてみるにゃ！今回はxくんを使うから、先に宣言しておくにゃ。\")");
ex_221.push("ANIME_sengen(\"int\",\"x\")");
ex_221.push("line(4);setIntr(\"このscanfというのが「入力」を行うプログラムにゃ！どの変数に代入するかは、この「( )」の中に書かれているにゃ。\")");
ex_221.push("setIntr(\とりあえず、ここはボクがテキトーに数字を入力してみるにゃ。\")");
ex_221.push("ANIME_scanf();setPrintf(\"10\")");
ex_221.push("ANIME_dainyu(\"x\", 10)");
ex_221.push("setIntr(\"xにボクが打ち込んだ「10」が代入されたにゃ！\")");
ex_221.push("setIntr(\「”%d”」っていうのは型を表しているにゃ。int型の場合は「%d」を用いるのにゃ。\")");
ex_221.push("setIntr(\型が違うと、%dじゃない文字を書かなければいけないにゃ。他の型は、辞書を見てほしいにゃ。\")");
ex_221.push("setIntr(\あと、この「”%d”」っていうのは、絶対に「” ”,」で囲まなければいけないにゃ！絶対に忘れないで欲しいにゃ。\")");
ex_221.push("setIntr(\次にどの変数に代入するのか決めるのにゃ。「&x」っていうのがそれにゃ。代入したい変数の前に「&」をつけるにゃ。\")");
ex_221.push("setIntr(\長々と説明してしまったけれど、ここはちょっと難しいから、「scanf」と「&x」のところだけ覚えてもらえれば良いにゃ。\")");
ex_221.push("setIntr(\あとは辞書を見て書き写して、使っているうちに覚えるといいにゃ！\")");
ex_221.push("example_end()"); //+次のストーリーに画面遷移させるボタンを出現させる（まだページで来てないと思うので割愛）

//---------------------------------------------
var ex_231 = new Array();
ex_231.push("line(3);setIntr(\"まずはxを初期化して5にするにゃ。\")");
ex_231.push("ANIME_sengen_dainyu(\"int\",\"x\",5);");
ex_231.push("line(4);setIntr(\"次にxを3倍してxに代入するにゃ。\")");
ex_231.push("setIntr(\「右辺のxはそれまでのxを指すにゃ。だから、x = 5*3;になって、左辺のxは15、つまりこれ以降、xは15になるにゃ。\")");
ex_231.push("ANIME_enzan_dainyu(\"x\", [\"x\" , \"*\", \"3\"],15)");
ex_231.push("example_end()"); //+次のストーリーに画面遷移させるボタンを出現させる（まだページで来てないと思うので割愛）




