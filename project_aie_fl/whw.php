<?php
	$mail = $_POST["Email"];
	
	if ($mail == "rdeVidA1204@bcbank.com")
		header("Location: iforgot_r.html");
	else if ($mail == "li23AMmg498@bcbank.com")
		header("Location: iforgot_l.html");
	else header("Location: re_iforgot.html");
?>
