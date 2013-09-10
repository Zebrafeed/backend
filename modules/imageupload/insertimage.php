<?php
	require '../../connect.php';

	

	

	if(!isset($_FILES['image'], $_POST['title'], $_POST['desc'])){
		die("You need to select an image");
	}else{
		$uploaddir 	= 'img/';
		$uploadfile	= $uploaddir . basename($_FILES['image']['name']);

		$name = $_POST['title'];
		$desc = $_POST['desc'];
		
		if((($_FILES["image"]["type"] == "image/gif") || ($_FILES["image"]["type"] == "image/jpeg") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/pjpeg") || ($_FILES["image"]["type"] == "image/x-png") || ($_FILES["image"]["type"] == "image/png"))){
			if(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
				if(isset($name, $desc)){
					 if(mysql_query("INSERT INTO images VALUES ('$name', '$desc', '$uploadfile')")){
					 	echo "Successfully uploaded image!";
					 }else{
					 	echo mysql_error();
					 }
				}else{
					echo "Missing title/description";
				}
			}else{
				echo "Upload failed";
			}
		}else{
			echo "File extension not allowed";
		}
	}
?>