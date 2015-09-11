<?php namespace Responders;


class HtmlResponder {
	
	
	public function __construct($response, $params, $status)
	{
		if (isset($params['view']) && file_exists($params['view'])) {

			# this should be a view render class
			# e.g.
			# $body = $app->view->render($params['view']);
			
			# but we'll just kludge it
			ob_start();
			extract($params);
			include($params['view']);
			$body = ob_get_clean();
			
			return $response
				->withStatus($status)
				->withHeader('Content-type', 'text/html')
				->write($body);
			
		}
	
		return $response
			->withStatus(404)
			->withHeader('Content-type', 'text/html');
		
	}
	
}