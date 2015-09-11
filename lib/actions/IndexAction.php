<?php namespace Actions;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Responders\HtmlResponder;
use Responders\JsonResponder;

class IndexAction {
	
	# name of the domain used in views 
	# eg. posts or post, so you can echo $post->title
	# or foreach ($posts as $post)
	protected $name;
	# path to view file
	protected $view;
	# domain/model instance
	protected $domain;
	

	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args)
	{
		# the index method would filter by request input
		# it's the same principle as Laravel scopes
		$data = $this->domain->index($args)->get();
		
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
		
		# try catch exception return response 500
		
	}
	
}