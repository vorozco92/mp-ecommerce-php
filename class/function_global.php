<?php

	class function_global {
	
		function send_request_curl($url, $data_send, $extra_headers = array()){
			if (is_array($data_send)){
				$json_data = json_encode($data_send);
			}
			else
				return;

			$headers = array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($json_data)
			);
			
			if (count($extra_headers)){
				$headers = array_merge($headers, $extra_headers);
			}
			
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);

			if($errno = curl_error($ch)) {
				$error_message = curl_error($ch);
				return;	
			}			
			curl_close($ch);
			return $result;
		}
	}

?>
