<?php namespace Posts\Actions;

use Posts\Post;

class EditAction extends \Actions\EditAction {
	
	
	public function __construct()
	{
		$this->name = 'post';
		$this->view = __DIR__.'/../views/edit.php';
		$this->redirect = '/posts';
		$this->model = new Post();
	}
	
}