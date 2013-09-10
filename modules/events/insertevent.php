<?php
	require '../../connect.php';

	$title = mysql_real_escape_string($_POST['title']);
	$desc = mysql_real_escape_string(ln2br($_POST['desc']));	
	$timedate = mysql_real_escape_string($_POST['timedate']);

	if(isset($title, $desc, $timedate)){
		$sql = mysql_query("INSERT INTO events ('title', 'desc', 'timedate') VALUES ($title, $desc, $timedate)");

		if($sql){
			echo "Successfully created event!";
		}else{
			echo "Whoopsie, something went wrong!";
		}
	}
?>