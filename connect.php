<?php
	if ($_SERVER['SERVER_NAME'] == 'vampire.acwpd.dev') {
		$host = 'localhost';
	} else {
		$host = 'sdgame.db';
	}
	$con = new PDO('mysql:host=' . $host . ';dbname=vampires','prince','letmebeyourruler');
	
	
	
	$basicVamp = $con->prepare('SELECT `Data` FROM `vampireList` WHERE UID = :char');
	$basicVamp->bindparam(":char",$charNum);
	$basicVamp->execute();
	$result = $basicVamp->fetch(PDO::FETCH_ASSOC);
	$basic = unserialize($result['Data']);
	
	
?>