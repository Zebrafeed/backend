<?php
	require 'post.php';
	//require 'connect.php';

	$sql = mysql_query("SELECT * FROM posts");
	$posts[] = array();

	foreach ($sql as $post) {
		$posts[] = new Post($post);
	}
?>