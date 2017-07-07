<?php

	$server = $_SERVER['HTTP_HOST'];
	$name = $_POST['contactName'];
	$email = $_POST['contactName'];
	$text = $_POST['contactMessage'];


	$mail_header = "MIME-Version: 1.0\r\n";
	$mail_header.= "Content-type: text/html; charset=UTF-8\r\n";
	$mail_header.= "From: $server>\r\n";
	$mail_header.= "Reply-to: Reply to Name <reply@$server>\r\n";

	$to = "coltmone@yandex.ru";
	$subject = "Заявка с сайта: $server";

	$message = "<strong>Имя:</strong> $name<br><strong>E-mail:</strong> $email<br><strong>Сообщение:</strong> $text";
	mail($to,$subject,$message,$mail_header);
	
?>