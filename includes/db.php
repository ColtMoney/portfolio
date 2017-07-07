<?php
	require "rb.php";
	$connection = R::setup( 'mysql:host=localhost;dbname=bestseo_portfolio', 'bestseo', 'PvMygDUwn5LV5RQr' );

	if($connection == false)
	{
		echo "Не удалось подключиться к базе данных!<br>";
		echo mysqli_connect_error();
		exit();
	}
	session_start();
?>