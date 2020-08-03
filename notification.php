<?php

	error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . " Notificacion \n", 3, 'log/notification.log');
	//$json_event = file_get_contents('php://input', true);
	error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . " GET code:".$_GET['code']."\n", 3, 'log/notification.log');
	foreach($_POST as $key => $value){
		error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . $key." ".$value."\n", 3, 'log/notification.log');
	}

	foreach($_GET as $key => $value){
		error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . "GET ".$key." ".$value."\n", 3, 'log/notification.log');
	}	
	//$message_not = json_decode($json_event);		
	//header('HTTP/1.1 200 OK');
	//exit;
?>
