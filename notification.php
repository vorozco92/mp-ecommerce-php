<?php

	//include('class/vendor/autoload.php');
	//include('config/configuration_payment.php');
	error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . " Notificacion \n", 3, 'log/notification.log');
	$json_data = file_get_contents('php://input', true);
	error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . " json data:".$json_data."\n", 3, 'log/notification.log');
	error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . " GET code:".$_GET['code']."\n", 3, 'log/notification.log');
	foreach($_POST as $key => $value){
		error_log(date('H:i:s ') . getenv('REMOTE_ADDR') ."POST ". $key." ".$value."\n", 3, 'log/notification.log');
	}

	foreach($_GET as $key => $value){
		error_log(date('H:i:s ') . getenv('REMOTE_ADDR') . "GET data: ".$key." ".$value."\n", 3, 'log/notification.log');
	}	
	
	/*\MercadoPago\SDK::setAccessToken($config_mp['access_token']);
	$id = ($_GET["id"]);

    switch($_GET["type"]) {
        case "payment":
            $payment = \MercadoPago\Payment::find_by_id($id);
				echo $payment;
            break;
    }*/
?>
