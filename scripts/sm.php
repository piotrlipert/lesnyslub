<?php

require("postmark.php");

	
		$email = "lis@nora.com";
		$message = $_REQUEST['message'];
	



	$postmark = new Postmark("7d8bb715-8cfe-48fd-982a-faa0ad1ece6b","support@pirx3d.com",$email);
	
	$result = $postmark->to("piotr.lipert@gmail.com")
		->subject("POTWIERDZENIE ŚLUBNE")
		->plain_message($message)
		->send();
	
	if($result === true)
		echo("Message sent");

	
?>