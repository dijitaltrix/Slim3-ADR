<?php namespace Actions;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Responders\HtmlResponder;
use Responders\JsonResponder;

class CreateAction {
	
	# name of the domain used in views 
	public $name;
	# path to view
	public $view;
	# domain/model class name
	public $model;
	
	
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args)
	{
		if ($request->isGet()) {
			return new HtmlResponder();
		}

		if ($request->isPost()) {
			$result = $this->model->insert($request);
			if ($result) {
				return $response->withHeader('Location', '/posts/edit/456', 302);
			} else {
				echo 'Error';
				return $response->withStatus(500);
			}
		}
		
	}
	
}