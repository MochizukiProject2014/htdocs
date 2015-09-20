<?php

function sanitize($before)
{
	foreach($before as $key=>$value)
	{
		$after[$key]=htmlspecialchars($value);
	}
	return $after;
}

function menu($user_id){
	
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
	
		$sql = 'SELECT question,answer FROM things WHERE memberid ='.$user_id;
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	
		$dbh = null;
	
		
		$n = 0;
		while(true){
			$rec = $stmt->fetch(PDO::FETCH_ASSOC);
			
			if($rec==false){
				break;
			}
			
			if($rec['answer'] == 1){
				if($n < $rec['question']){
					$n = $rec['question'];
				}
			}
		}
		return $n;
	}

	catch(Exception $e){
		print'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}	
	
}

?>