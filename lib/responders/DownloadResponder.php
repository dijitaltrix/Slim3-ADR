<?php namespace Responders;


class DownloadResponder {
	
	
	public function __invoke($app, $response)
	{
		echo json_encode($data);
		return $response->withHeader('Content-type', 'application/json');
		
	}
	
}