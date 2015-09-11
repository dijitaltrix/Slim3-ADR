<?php namespace Responders;


class JsonResponder {
	
	
	public function __construct($response, $data, $status)
	{
		$body = json_encode($data);
			
		return $response
			->withStatus($status)
			->withHeader('Content-type', 'application/json')
			->write($body);
		
	}
	
}