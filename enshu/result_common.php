<?php
function pulldown_month($question_id,$num){
	$array = array("①","②","③","④","⑤","⑥");
	$array2 = array("選択無し","ア","イ","ウ","エ","オ","カ","キ","ク","ケ","コ","サ","シ","ス","セ");
	print '<select name="'.$question_id.'">';
	for($i = 0;$i < $num;$i++){
		print '<option value="'.$array2[$i].'">'.$array2[$i].'</option>';
	}
	print '</select>';
}


function result_judge($ans,$result){
	if($ans == $result){
		print '<td><FONT color="red">○</FONT></td>';
	}
	else{
		print '<td><FONT color="blue">×</FONT></td>';
	}
}

function result_mark($cnt,$ans,$result){
	if($ans == $result){
		$cnt = $cnt + 1;
	}
	return $cnt;
}

function result_check1($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q11,q12,q13,q14,q15,q16 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q11,q12,q13,q14,q15,q16 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
				<th>③</th>
				<th>④</th>
				<th>⑤</th>
				<th>⑥</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q11'].'</td>';
		print	'<td>'.$rec['q12'].'</td>';
		print	'<td>'.$rec['q13'].'</td>';
		print	'<td>'.$rec['q14'].'</td>';
		print	'<td>'.$rec['q15'].'</td>';
		print	'<td>'.$rec['q16'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q11'].'</td>';
		print	'<td>'.$rec1['q12'].'</td>';
		print	'<td>'.$rec1['q13'].'</td>';
		print	'<td>'.$rec1['q14'].'</td>';
		print	'<td>'.$rec1['q15'].'</td>';
		print	'<td>'.$rec1['q16'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q11'],$rec1['q11']);
		result_judge($rec['q12'],$rec1['q12']);
		result_judge($rec['q13'],$rec1['q13']);
		result_judge($rec['q14'],$rec1['q14']);
		result_judge($rec['q15'],$rec1['q15']);
		result_judge($rec['q16'],$rec1['q16']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check2($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q21,q22,q23,q24 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q21,q22,q23,q24 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
				<th>③</th>
				<th>④</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q21'].'</td>';
		print	'<td>'.$rec['q22'].'</td>';
		print	'<td>'.$rec['q23'].'</td>';
		print	'<td>'.$rec['q24'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q21'].'</td>';
		print	'<td>'.$rec1['q22'].'</td>';
		print	'<td>'.$rec1['q23'].'</td>';
		print	'<td>'.$rec1['q24'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q21'],$rec1['q21']);
		result_judge($rec['q22'],$rec1['q22']);
		result_judge($rec['q23'],$rec1['q23']);
		result_judge($rec['q24'],$rec1['q24']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check3($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q31,q32 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q31,q32 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q31'].'</td>';
		print	'<td>'.$rec['q32'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q31'].'</td>';
		print	'<td>'.$rec1['q32'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q31'],$rec1['q31']);
		result_judge($rec['q32'],$rec1['q32']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check4($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q41,q42,q43,q44,q45 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q41,q42,q43,q44,q45 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
				<th>③</th>
				<th>④</th>
				<th>⑤</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q41'].'</td>';
		print	'<td>'.$rec['q42'].'</td>';
		print	'<td>'.$rec['q43'].'</td>';
		print	'<td>'.$rec['q44'].'</td>';
		print	'<td>'.$rec['q45'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q41'].'</td>';
		print	'<td>'.$rec1['q42'].'</td>';
		print	'<td>'.$rec1['q43'].'</td>';
		print	'<td>'.$rec1['q44'].'</td>';
		print	'<td>'.$rec1['q45'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q41'],$rec1['q41']);
		result_judge($rec['q42'],$rec1['q42']);
		result_judge($rec['q43'],$rec1['q43']);
		result_judge($rec['q44'],$rec1['q44']);
		result_judge($rec['q45'],$rec1['q45']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check5($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q51,q52,q53 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q51,q52,q53 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
				<th>③</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q51'].'</td>';
		print	'<td>'.$rec['q52'].'</td>';
		print	'<td>'.$rec['q53'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q51'].'</td>';
		print	'<td>'.$rec1['q52'].'</td>';
		print	'<td>'.$rec1['q53'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q51'],$rec1['q51']);
		result_judge($rec['q52'],$rec1['q52']);
		result_judge($rec['q53'],$rec1['q53']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check6($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q61,q62,q63,q64 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q61,q62,q63,q64 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
				<th>③</th>
				<th>④</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q61'].'</td>';
		print	'<td>'.$rec['q62'].'</td>';
		print	'<td>'.$rec['q63'].'</td>';
		print	'<td>'.$rec['q64'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q61'].'</td>';
		print	'<td>'.$rec1['q62'].'</td>';
		print	'<td>'.$rec1['q63'].'</td>';
		print	'<td>'.$rec1['q64'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q61'],$rec1['q61']);
		result_judge($rec['q62'],$rec1['q62']);
		result_judge($rec['q63'],$rec1['q63']);
		result_judge($rec['q64'],$rec1['q64']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check7($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q71,q72,q73 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q71,q72,q73 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
				<th>③</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q71'].'</td>';
		print	'<td>'.$rec['q72'].'</td>';
		print	'<td>'.$rec['q73'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q71'].'</td>';
		print	'<td>'.$rec1['q72'].'</td>';
		print	'<td>'.$rec1['q73'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q71'],$rec1['q71']);
		result_judge($rec['q72'],$rec1['q72']);
		result_judge($rec['q73'],$rec1['q73']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check8($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q81,q82 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q81,q82 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q81'].'</td>';
		print	'<td>'.$rec['q82'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q81'].'</td>';
		print	'<td>'.$rec1['q82'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q81'],$rec1['q81']);
		result_judge($rec['q82'],$rec1['q82']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result_check9($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT q91,q92,q93,q94,q95 FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql = 'SELECT q91,q92,q93,q94,q95 FROM enshu WHERE memberid = 0';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		$rec1 = $stmt->fetch(PDO::FETCH_ASSOC);

		$dbh = null;
		
		print '<table border="1" cellspacing=0 cellpadding=2>';
		print '<tr>
				<th></th>
				<th>①</th>
				<th>②</th>
				<th>③</th>
				<th>④</th>
				<th>⑤</th>
			   </tr>';
		print '<tr>';
		print	'<td>あなたの答え</td>';
		print	'<td>'.$rec['q91'].'</td>';
		print	'<td>'.$rec['q92'].'</td>';
		print	'<td>'.$rec['q93'].'</td>';
		print	'<td>'.$rec['q94'].'</td>';
		print	'<td>'.$rec['q95'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>正解</td>';
		print	'<td>'.$rec1['q91'].'</td>';
		print	'<td>'.$rec1['q92'].'</td>';
		print	'<td>'.$rec1['q93'].'</td>';
		print	'<td>'.$rec1['q94'].'</td>';
		print	'<td>'.$rec1['q95'].'</td>';
		print '</tr>';

		print '<tr>';
		print	'<td>結果</td>';
		result_judge($rec['q91'],$rec1['q91']);
		result_judge($rec['q92'],$rec1['q92']);
		result_judge($rec['q93'],$rec1['q93']);
		result_judge($rec['q94'],$rec1['q94']);
		result_judge($rec['q95'],$rec1['q95']);
		print '</tr>';

 		print '</table>';
		
	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

function result($user_id){
	try{
	
		if ($_SERVER['SERVER_NAME'] === 'www.ne.senshu-u.ac.jp') {
			$dsn='mysql:dbname=mochiken2015;host=db.ne.senshu-u.ac.jp;charset=utf8';
			$user='mochiken2015';
			$password='eX39jT2q';
		} elseif($_SERVER['SERVER_NAME'] === 'localhost'){
			$dsn='mysql:dbname=kaito;host=localhost;charset=utf8';
			$user='root';
			$password='root';
		}elseif ($_SERVER['SERVER_NAME'] === 'mochi-lab.sakura.ne.jp') {
			$dsn='mysql:dbname=mochi-lab_kaito;host=mysql315.db.sakura.ne.jp;charset=utf8';
			$user='mochi-lab';
			$password='mochi0402';
		}	
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		$sql = 'SELECT score FROM enshu WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		print 'あなたの点数は'.'<p>'.$rec['score'].'/34点です'.'</p>';


	}catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}


?>