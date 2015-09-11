<?php namespace Actions;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class DeleteAction {
	
	# uri to redirect
	public $redirect;
	# domain/model class name
	public $model;
	
	
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args)
	{
		if ( ! isset($args['id'])) {
			throw new Exception("Missing id");
		}
		
		# TODO - Update this to use RedirectResponder 
		if ($this->model->delete($args['id'])) {
			return $response->withHeader('Location', $this->redirect, 302);
		} else {
			echo 'Not found';
			return $response->withStatus(404);
		}
		
		
	}
	
}