<?php 
	require "../../connect.php";

	$title = mysql_real_escape_string($_POST['title']);
	$text = mysql_real_escape_string(ln2br($_POST['text']));
	$created = date("l jS \of F Y h:i:s A");
	$author = mysql_real_escape_string($_POST['author']);
	$cat = mysql_real_escape_string($_POST['cat'])

	if(isset($title, $text, $created, $author)){
		$sql = mysql_query("INSERT INTO posts ('title', 'text', 'created', 'author', 'cat') VALUES ($title, $text, $created, $author, $cat)");

		if($sql){
			echo "Post successful";
		}else{
			echo "Failed to post";
		}
	}
?>