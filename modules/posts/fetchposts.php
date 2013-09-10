<?php
	require 'post.php';
	require '../../connect.php';

	if(isset($_GET['postid'])){
		$pid = $_GET['postid'];
		$sql = mysql_query("SELECT * FROM posts WHERE id=$pid");
	}else{
		$sql = mysql_query("SELECT * FROM posts");
	}
	$posts = array();

	while($row = mysql_fetch_object($sql)){
		$posts[] = new Post($row->id, $row->title, $row->text, $row->created, $row->author);
	}

	echo json_encode($posts);
?>
