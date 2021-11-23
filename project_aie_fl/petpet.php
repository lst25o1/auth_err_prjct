<?php
	$pet = $_POST["Name"];
	
	if ($pet == "Кристи")
		header("Location: flag.html");
	else header("Location: re_iforgot.html");
?>
