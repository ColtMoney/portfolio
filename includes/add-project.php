<?php
	
	require "db.php";

	$data = $_POST;
	$errors = array();

	if(isset($_FILES["image"])){

		$file_name = $_FILES["image"]["name"];
		$file_size =$_FILES["image"]["size"];
		$file_tmp =$_FILES["image"]["tmp_name"];
		$file_type=$_FILES["image"]["type"];
		$file_ext=strtolower(end(explode(".",$_FILES["image"]["name"])));

		$expensions= array("jpeg","jpg","png");

		if(in_array($file_ext,$expensions) === false){
			$errors["status"] = "error";
			$errors["text"]= "extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size > 1024000){
			$errors["status"] = "error";
			$errors["text"]= "File size must be excately 1 MB";
		}

		if(empty($errors)){
			move_uploaded_file($file_tmp,"../img/".$file_name);
			$work = R::dispense("mywork");
			$work->title = $data["projectname"];
			$work->img = $file_name;
			$work->link = $data["urlproject"];
			$work->description = $data["descr"];
			R::store($work);
			$errors["status"] = "success";
		}
	}
	else{
		$errors["status"] = "error";
		$errors["text"]= "bla";
	}	

	header('Content-Type: application/json');
	echo json_encode($errors);
	exit;

?>