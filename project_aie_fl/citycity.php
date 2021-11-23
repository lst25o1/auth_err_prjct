<?php
	$city = $_POST["City"];
	
	if ($city == "Берлин")
		header("Location: flag.html");
	else header("Location: re_iforgot.html");
?>
