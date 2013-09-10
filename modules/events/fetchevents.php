<?php
	require 'event.php';
	require '../../connect.php';

	$sql = mysql_query("SELECT * FROM events");
	$events = array();

	while($row = mysql_fetch_object($sql)){
		$events[] = new Event($row->id, $row->title, $row->desc, $row->timedate);
	}

	echo json_encode($events);
?>