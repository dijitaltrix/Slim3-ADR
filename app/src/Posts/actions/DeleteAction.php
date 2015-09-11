<?php namespace Posts\Actions;

use Posts\Post;

class DeleteAction extends \Actions\DeleteAction {
	
	
	public function __construct()
	{
		$this->redirect = '/posts';
		$this->model = new Post();
	}
	
}