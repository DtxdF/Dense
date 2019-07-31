<?php

	if (!($_POST['host'])) {
	
		die(1);
	
	}

	error_reporting(-1);

	function error_handler($errno, $errstr, $errfile, $errline) {

		throw new ErrorException($errstr, $errno, 0, $errfile, $errline);

	}

	set_error_handler('error_handler');

	try {

		$data = file_get_contents('http://ip-api.com/json/'.$_POST['host']);

		echo $data;

	} catch (Exception $e) {
	
		echo 'error';
	
	}

?>
