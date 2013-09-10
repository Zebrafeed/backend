<?php
	$host	= 'backend-184702.mysql.binero.se';
	$user	= '184702_je16862';
	$pass	= 'zebrafeed';
	$db		= '184702-backend';

	$con = mysql_connect($host, $user, $pass);
	mysql_set_charset("UTF8", $con);
	
	if (!$con) {
		die("Cannot connect to database");
	}else{
		mysql_select_db($db) or die('Cannot select database');
	}

?>