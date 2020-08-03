<?php

	$json_event = file_get_contents('php://input', true);
	$message_not = json_decode($json_event);	
	error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . " $message_not\n", 3, 'log/notification.log');
	header('HTTP/1.1 200 OK');
	exit;
?>
