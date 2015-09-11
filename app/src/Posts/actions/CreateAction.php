<?php namespace Posts\Actions;

use Posts\Post;

class CreateAction extends \Actions\CreateAction {
	
	
	public function __construct()
	{
		$this->name = 'post';
		$this->view = __DIR__.'/../views/create.php';
		$this->model = new Post();
	}
	
}