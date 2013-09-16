<?php
	require '../../connect.php';

	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}else{
		$username = "";
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}else{
		$password = "";
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = "";
	}
	if(isset($_POST['fullname'])){
		$fullname = $_POST['fullname'];
	}else{
		$fullname = "";
	}
	if(isset($_POST['adress'])){
		$adress = $_POST['adress'];
	}else{
		$adress = "";
	}
	if(isset($_POST['ort'])){
		$ort = $_POST['ort'];
	}else{
		$ort = "";
	}
	if(isset($_POST['idnr'])){
		$idnr = $_POST['idnr'];
	}else{
		$idnr = "";
	}
	if(isset($_POST['telnr'])){
		$telnr = $_POST['telnr'];
	}else{
		$telnr = "";
	}

	$sql = mysql_query("INSERT INTO members VALUES ('', $username, $password, $email, $fullname, $adress, $ort, $idnr, $telnr)");

	if ($sql) {
		echo "Insert successful";
	}else{
		echo "Failed to insert data";
	}
?>