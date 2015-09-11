<?php namespace Actions;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Responders\HtmlResponder;
use Responders\JsonResponder;
use Responders\RedirectResponder;

class EditAction {
	
	# name of the domain used in views 
	protected $name;
	# path to view
	protected $view;
	# model/domain class name
	protected $domain;
	# location of redirect on save
	protected $redirect;
	
	
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args)
	{
		if ($request->isGet()) {
			# find domain by id
			$data = $this->domain->find($args['id']);
			
			if ($data) {
				return $app->responder->html($response, array(
					'view' => $this->view,
					$this->name => $data,
				), $status=200);

			} else {
				return $app->responder->html($response, array(
					'view' => 'errors/404',
				), $status=404);

			}
		}

		if ($request->isPost()) {
			# domain should filter and validate itself, return boolean
			$result = $this->domain->where('id', $args['id'])->update($request);
			
			if ($result) {
				return $app->responder->redirect($response, $this->redirect, $code=302);
				
			} else {
				return $app->responder->redirect($response, $request->getPath(), $code=302);
				
			}
			
		}
		
		
	}
	
}