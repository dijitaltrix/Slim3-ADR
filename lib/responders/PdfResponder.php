<?php namespace Responders;


class PdfResponder {
	
	
	public function __invoke($app, $response)
	{
		
		return $response->withHeader('Content-type', 'application/pdf');
		
	}
	
}