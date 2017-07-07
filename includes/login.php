<?php
	require "db.php";

	$data = $_POST;
	$errors = array();
	$user = R::findOne("user", "login = ?", array($data["login"]));

	if($user)
	{

		if(password_verify($data["password"], $user->pass))
		{
			$_SESSION["logged_user"] = $user;
			$errors["status"] = "success";
		}
		else
		{
			$errors["status"] = "error";
			$errors["text"] = "Неверно введен пароль!";
		}
	}
	else
	{
		$errors["status"] = "error";
		$errors["text"] = "Пользователь с таким логином не найден!";
	}

	header('Content-Type: application/json');
	echo json_encode($errors);
	exit;
?>