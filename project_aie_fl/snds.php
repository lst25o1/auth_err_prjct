<?php
	$mail = $_POST["Email"];
	$pass = $_POST["Пароль"];
	
	if ($mail == "rdeVidA1204@bcbank.com"){
		if ($pass == "Admin1"){
			header("Location: flag.html");}
		else header("Location: login.html");
	}
	else if ($mail == "li23AMmg498@bcbank.com"){
		if ($pass == "123123"){
			header("Location: flag.html");}
		else header("Location: login.html");
	}
	else header("Location: login.html");
?>
