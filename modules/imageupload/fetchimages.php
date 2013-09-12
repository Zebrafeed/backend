<?php
	require 'image.php';
	require '../../connect.php';

	$images = array();
	$sql = mysql_query("SELECT * FROM images");

	while ($row = mysql_fetch_object($sql)) {
		$images[] = new Image($row->id, $row->name, $row->desc, $row->uri);
	}

	echo json_encode($images);
?>