<?php
	//require 'object.php';
	require '../../connect.php';

	$sql = mysql_query("SELECT * FROM module");	
	$object = array();

	while($row = mysql_fetch_object($sql)){
		$module[] = new Object();
	}

	echo json_encode($object);
?>
