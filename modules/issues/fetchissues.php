<?php
	require 'issue.php';
	require '../../connect.php';

	$sql = mysql_query("SELECT * FROM issues");	
	$issues = array();

	while($row = mysql_fetch_object($sql)){
		$issues[] = new Issue();
	}

	echo json_encode($issues);
?>
