<?php
	require 'image.php';
	require '../../connect.php';

	$images = array();
	$sql = mysql_query("SELECT * FROM images");

	while ($row = mysql_fetch_object($sql)) {
		$images[] = new Image($row->name, $row->desc, $row->uri, $row->id, $row->type);
	}

	echo json_encode($images);
?>