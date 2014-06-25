<?php
		$message = $_REQUEST['message'];
	$myFile = "../potwierdzenia.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = $message . "\n";
	fwrite($fh, $stringData);
	fclose($fh);

?>