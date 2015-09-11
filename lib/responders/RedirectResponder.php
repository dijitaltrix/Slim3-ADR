<?php namespace Responders;


class RedirectResponder {
	
	
	public function __invoke($response, $location, $code)
	{
		return $response->withHeader('Location', $location, $code);
		
	}
	
}