<?php
	require "../../connect.php"
	
	$title;
	$desc;
	$type;
	$date;
	$submitContact;
	
	if(isset($_POST['insert'])){
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$type = $_POST['type'];
		$date = date("l jS \of F Y h:i:s A");
		$submitContact = $_POST['submitcontact'];

		insertIssue($title, $desc, $type, $date, $submitContact);
	}elseif(isset($_POST['fetch'])){
		fetchIssues();
	}elseif(isset($_POST['fetchResolved'])){
		fetchResolved();
	}elseif(isset($_POST['fetchUnresolved'])){
		fetchUnresolved();
	}

	function insertIssue($title, $desc, $type, $date, $submitContact){
		$sql = mysql_query("INSERT INTO issues ('title', 'desc', 'type', 'date', 'resolved', 'submitContact') VALUES ($title, $desc, $type, $date, '0', $submitContact)");

		if($sql){
			echo "Successfully opened issue for review.";
		}else{
			echo "Failed to open issue, check your fields.";
		}
	}

	function fetchIssues(){
		if(isset($_POST['issueID'])){
			$sql = mysql_query("SELECT * FROM issues WHERE id=$_POST['issueID']");
		}else{
			$sql = mysql_query("SELECT * FROM issues");	
		}

		$issues = array();

		while($row = mysql_fetch_object($sql)){
			$issues[] = new Issue($row->id, $row->title, $row->desc, $row->type, $row->date, $row->resolved, $row->submitContact);
		}

		echo json_encode($issues);
	}

	function fetchResolved(){
		$sql = mysql_query("SELECT * FROM issues WHERE resolved='1'");

		$issues = array();

		while($row = mysql_fetch_object($sql)){
			$issues[] = new Issue($row->id, $row->title, $row->desc, $row->type, $row->date, $row->resolved, $row->submitContact);
		}

		echo json_encode($issues);
	}

	function fetchUnresolved(){
		$sql = mysql_query("SELECT * FROM issues WHERE resolved='0'");

		$issues = array();

		while($row = mysql_fetch_object($sql)){
			$issues[] = new Issue($row->id, $row->title, $row->desc, $row->type, $row->date, $row->resolved, $row->submitContact);
		}

		echo json_encode($issues);
	}
?>