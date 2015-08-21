/*
 *  メッセージは1行につき最長全角25文字。半角38文字。
 *  自動での改行は行われないので「\n」を入れる
 */

var cnt4_2=0;

var frame00 = {
	speaker : "健吾",
	message : "答えが示す場所に\n今日のおやつがあるって書いてあったな・・・。",
	rightChara : "L_kengo",
	leftChara : "R_kinako",
	frontChara : "F_kengo_hatena",
	animation: function(){
		picture.hide();
		console.log("frame0実行");
		frontChara.hide();
		leftChara.tweener
			.clear()
			.fadeOut(1)
			.fadeIn(500);
		rightChara.tweener
			.clear()
			.fadeOut(1)
			.fadeIn(500);
	}
}

var frame0 = {
	speaker : "健吾",
	message : "この形、どこかで見たような・・・。",
	rightChara : "L_kengo_hatena",
	leftChara : "R_kinako",
	frontChara : "F_kengo_hatena",
	animation: function(){
		picture.show();
		console.log("frame0実行");
		frontChara.hide();
	}
}

var frame1 = {
	speaker : "健吾",
	message :"あ、あれ！\nあそこじゃない？\nきなこ！？",
	rightChara : "L_kengo_surprised",
	leftChara : "R_kinako",
	frontChara : "F_kengo",
	animation : function(){
		picture.hide();
		console.log("frame1実行");
		frontChara.hide();
	}
}

var frame2 = {
	speaker : "きなこ",
	message :"きっとそうにゃ！\n行ってみるにゃ！",
	rightChara : "L_kengo",
	leftChara : "R_kinako_smile",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame2実行");
		frontChara.hide();
	}
}

var frame3 = {
    speaker : " ",
    message : "公園内のおやつがあると思う場所をクリックしてね！",
    rightChara : "L_kengo",
	leftChara : "R_kinako_smile",
	frontChara : "F_kengo",
    animation : function(){
        console.log("frame3実行");
        frontChara.hide();
        if(cnt4_2<=0){
        	sankaku.setInteractive(true);
        	sankaku.addEventListener("pointingend", function(){
        		cnt4_2++;
	        	sankaku.setInteractive(false);
				console.log("ok");
				nextTriangle.show();
				frames= [frame00,frame0,frame1,frame2,frame3,frame4,frame5,frame6,frame7,frame8,frame9,frame10,frame11,frame12,frame13,frame14];
				/*rightChara.image="L_kengo_surprised";
				currentFrame+=2;
				message.text="時計の下に何かあるよ！";
				speaker.text="健吾";*/
				currentFrame++;
				message.text=frames[currentFrame].message;
	            message.text = frames[currentFrame].message.charAt(0);
	            speaker.text=frames[currentFrame].speaker;
	            rightChara.image=frames[currentFrame].rightChara;
	            leftChara.image=frames[currentFrame].leftChara;
	            frontChara.image=frames[currentFrame].frontChara;
	            frames[currentFrame].animation();
	            var num = 1;
	            ID=setInterval(function(){
	            //console.log("とまらん");
	                message.text = message.text+frames[currentFrame].message.charAt(num);
	                num++;
	                //全文表示し終わったらループを止め、点滅する三角形を表示する
	                if(num==frames[currentFrame].message.length){
	                    clearInterval(ID);
	                    //nextTriangle.show();
	                }
	            },50);
        	});	
		};

    }
}

var frame4 = {
	speaker : "健吾",
	message :"時計の下に何かあるよ！",
	rightChara : "L_kengo_surprised",
	leftChara : "R_kinako_smile",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame4実行");
		frontChara.hide();
	}
}

var frame5 = {
	speaker : "きなこ",
	message :"宝箱にゃ！\n開けて見るにゃ、きっとその中におやつが入ってるにゃ。",
	rightChara : "L_kengo_surprised",
	leftChara : "R_kinako_smile",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame5実行")
		frontChara.hide();
	}
}

var frame6 = {
	speaker : "健吾",
	message :"うん！\n・・・あった！エクレアが入ってたよ！\nよかった〜！",
	rightChara : "L_kengo_smile",
	leftChara : "R_kinako_smile",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame6実行")
		frontChara.hide();
	}
}

var frame7 = {
	speaker : "きなこ",
	message :"ん？\nけんご、宝箱の中に手紙が入ってるにゃ。\n開けて読んでみるにゃ。",
	rightChara : "L_kengo_smile",
	leftChara : "R_kinako",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame7実行")
		frontChara.hide();
		setOriginCard();
	}
}

var frame8 = {
	speaker : "健吾",
	message :"うん。どれどれ・・・、",
	rightChara : "L_kengo",
	leftChara : "R_kinako",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame8実行")
		frontChara.hide();
		takeCardOut("よくあの問題が解けたな。\nこれで君もだいぶC言語が\n上達してきただろう。\nだから次が最後だ。\n問題の答えの場所に\n私は待っている。")
	}
}

var frame9 = {
	speaker : "怪盗Cからの挑戦状",
	message :"『よくあの問題が解けたな。\nこれで君もだいぶC言語が上達してきただろう。",
	rightChara : "L_kengo",
	leftChara : "R_kinako",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame9実行")
		frontChara.hide();
	}
}

var frame10 = {
	speaker : "怪盗Cからの挑戦状",
	message :"だから次が最後だ。\n問題の答えの場所に私は待っている。",
	rightChara : "L_kengo",
	leftChara : "R_kinako",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame10実行")
		frontChara.hide();
	}
}

var frame11 = {
	speaker : "怪盗Cからの挑戦状",
	message :"そこで私の正体を教えてあげよう。』",
	rightChara : "L_kengo",
	leftChara : "R_kinako",
	frontChara : "F_kengo",
	animation : function(){
		console.log("frame11実行")
		frontChara.hide();
		chosenMessage.text = "そこで私の正体を\n教えてあげよう。\n\n怪盗Cより";
	}
}

var frame12 = {
	speaker : "健吾",
	message :"怪盗Cの正体・・・？",
	rightChara : "L_kengo_hatena",
	leftChara : "R_kinako",
	frontChara : "F_kengo_smile",
	animation : function(){
		console.log("frame12実行")
		frontChara.hide();
		setOriginCard(); //逆再生用
	}
}

var frame13 = {
	speaker : "きなこ",
	message :"・・・・・。",
	rightChara : "L_kengo_hatena",
	leftChara : "R_kinako",
	frontChara : "F_kengo_smile",
	animation : function(){
		console.log("frame13実行")
		frontChara.hide();
		button.hide();
		goNext.hide();
	}
}

var frame14 = {
	speaker : "",
	message :"",
	rightChara : "L_kengo_hatena",
	leftChara : "R_kinako",
	frontChara : "F_kengo_smile",
	animation : function(){
		console.log("frame13実行")
		frontChara.hide();
		button.show();
		goNext.show();
		button.addEventListener("pointingend", function(e) {
			document.location.href = "../../../login/top.php";
		});
	}
}

var frames = [
	frame00,frame0,frame1,frame2,frame3

];