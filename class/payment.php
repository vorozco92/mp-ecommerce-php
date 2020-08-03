<?php

 include('function_global.php');

 
 class Payment{

	function create_reference($data_reference){
		include(__DIR__.'/../config/configuration_payment.php'); 
		$functions =  new function_global();
		$extra_headers = array();
		if ( ! empty($config_mp['integrator_id']))
			$extra_headers = array('x-integrator-id: '.$config_mp['integrator_id']);
		$url_creation_pref = $config_mp['endpoint_mp'].'/checkout/preferences?access_token='.$config_mp['access_token'];
		$response = $functions->send_request_curl($url_creation_pref, $data_reference, $extra_headers);
		return $response;	
	
	}
 }

?>
