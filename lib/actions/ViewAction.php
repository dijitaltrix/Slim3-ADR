<?php namespace Actions;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Responders\HtmlResponder;
use Responders\JsonResponder;

class ViewAction {
	
	# name of the domain used in views 
	public $name;
	# path to view
	public $view;
	# domain/model class name
	public $model;
	
	
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args)
	{
		$data = $this->model->find($args['id']);
		
		if ($data) {
			# this could be moved so we detect the requested content type
			if ($request->isXhr()) {
				return new JsonResponder($response, array(
					$this->name => $data,
					# add DOM target(s) or flash messages etc
				), $status=200);

			} else {
				return new HtmlResponder($response, array(
					'view' => $this->view,
					$this->name => $data,
					# add flash messages etc
				), $status=200);
			
			}

		} else {
			# this should probably be a JSON responder but you get the idea
			return new HtmlResponder($response, $status=404);

		}		
			
		
	}
	
}